<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pendaftaran;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index(){
        $totalPendaftar = Pendaftaran::count(); // menghitung total baris di tabel pendaftaran
        $totalAdmin = User::count(); // menghitung total baris di tabel pendaftaran

        return view('admin.admin', [
            'actives' => 'admin-dashboard',
            'totalPendaftar' => $totalPendaftar,
            'totalAdmin' => $totalAdmin,
        ]);
    }

    public function dataAdmin(){
        $admins = User::where('role', 'admin')->get();
        return view('admin.dataAdmin', [
            'admins' => $admins,
            'actives' => 'data-admin',
        ]);
    }
    
    public function adminCreate(){
        return view('admin.dataAdminCreate', [
            'actives' => 'data-admin',
        ]);
    }   
    public function adminStore(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);

        User::create([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'role' => 'admin',
        ]);

        return redirect()->route('admin.create')->with('success', 'Data admin berhasil ditambahkan!');
    }
    public function adminEdit($id)
    {
        $admin = User::findOrFail($id);
        return view('admin.dataAdminEdit', [
            'admin' => $admin,
            'actives' => 'data-admin',
        ]);
    }

    public function adminUpdate(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'nullable|string|min:6',
        ]);

        $admin = User::findOrFail($id);
        $admin->username = $request->username;

        if ($request->filled('password')) {
            $admin->password = Hash::make($request->password);
        }

        $admin->save();

        return redirect()->route('admin.edit', $id)->with('success', 'Data admin berhasil diperbarui.');
    }
    public function adminDestroy($id)
    {
        $admin = User::findOrFail($id);
        
        // Optional: Cegah admin menghapus dirinya sendiri (jika perlu)
        if (auth()->user()->id == $admin->id) {
            return redirect()->back()->with('error', 'Anda tidak bisa menghapus akun Anda sendiri.');
        }

        $admin->delete();
        return redirect()->back()->with('success', 'Data admin berhasil dihapus.');
    }



    public function pendaftaranAdmin(){
        $pendaftarans = pendaftaran::latest()->get();
        return view('admin.pendaftaranAdmin', [
            'actives' => 'pendaftaran-admin',
            'pendaftarans' => $pendaftarans
        ]);
    }
    public function pendaftaranShow($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('admin.pendaftaranShowAdmin', [
            'pendaftaran' => $pendaftaran,
            'actives' => 'pendaftaran-admin'
        ]);
    }

    public function pendaftaranDestroy($id)
    {
        $data = Pendaftaran::findOrFail($id);
        
        // Hapus file yang terkait jika perlu
        if ($data->foto && file_exists(public_path('uploads/' . $data->foto))) {
            unlink(public_path('uploads/' . $data->foto));
        }

        if ($data->akta && file_exists(public_path('uploads/' . $data->akta))) {
            unlink(public_path('uploads/' . $data->akta));
        }

        if ($data->kk && file_exists(public_path('uploads/' . $data->kk))) {
            unlink(public_path('uploads/' . $data->kk));
        }

        if ($data->kesehatan && file_exists(public_path('uploads/' . $data->kesehatan))) {
            unlink(public_path('uploads/' . $data->kesehatan));
        }

        // Hapus data dari database
        $data->delete();

        return redirect()->route('pendaftar.admin')->with('success', 'Data pendaftaran berhasil dihapus.');
    }

    public function pendaftaranCreate()
    {
        return view('admin.pendaftaranCreateAdmin', [
            'actives' => 'pendaftaran-admin'
        ]);
    }

    public function pendaftaranStore(Request $request)
    {
        $validated = $request->validate([
        'nama_anak' => 'required|string',
        'jenis_kelamin' => 'required',
        'ttl' => 'required|string',
        'agama' => 'required|string',
        'alamat' => 'required|string',
        'nama_ortu' => 'required|string',
        'pekerjaan' => 'required|string',
        'no_hp' => 'required|string',
        'email' => 'required|email',
        'foto' => 'required|file|image',
        'akta' => 'required|file',
        'kk' => 'required|file',
        'kesehatan' => 'nullable|file',
    ]);

    // Simpan file
    $foto = $request->file('foto')->store('uploads/foto', 'public');
    $akta = $request->file('akta')->store('uploads/akta', 'public');
    $kk = $request->file('kk')->store('uploads/kk', 'public');
    $kesehatan = $request->file('kesehatan')?->store('uploads/kesehatan', 'public');

    // Simpan ke database (sesuaikan dengan struktur tabelmu)
    Pendaftaran::create([
        ...$validated,
        'foto' => $foto,
        'akta' => $akta,
        'kk' => $kk,
        'kesehatan' => $kesehatan,
    ]);

        return redirect()->route('pendaftar.admin')->with('success', 'Pendaftaran berhasil disimpan!');
    }
    public function PendaftaranEdit($id)
    {
        $data = Pendaftaran::findOrFail($id);
        return view('admin.pendaftaranEditAdmin', [
            'data' => $data,
            'actives' => 'pendaftaran-admin'
        ]);
    }

    public function pendaftaranUpdate(Request $request, $id)
    {
        $data = Pendaftaran::findOrFail($id);
        
        $data->update([
            'nama_anak' => $request->nama_anak,
            'jenis_kelamin' => $request->jenis_kelamin,
            'ttl' => $request->ttl,
            'agama' => $request->agama,
            'alamat' => $request->alamat,
            'nama_ortu' => $request->nama_ortu,
            'pekerjaan' => $request->pekerjaan,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
        ]);

       
    // Cek dan simpan file baru jika ada, kalau tidak, biarkan file lama
    if ($request->hasFile('foto')) {
        $data->foto = $request->file('foto')->store('foto-anak');
    }

    if ($request->hasFile('akta')) {
        $data->akta = $request->file('akta')->store('akta');
    }

    if ($request->hasFile('kk')) {
        $data->kk = $request->file('kk')->store('kk');
    }

    if ($request->hasFile('kesehatan')) {
        $data->kesehatan = $request->file('kesehatan')->store('kesehatan');
    }

    $data->save();

        return redirect()->route('pendaftar.admin')->with('success', 'Data berhasil diperbarui.');
    }


}
