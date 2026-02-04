<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use App\Models\pendaftaran;

class PendaftaranController extends Controller
{
    public function pendaftaranCreate(Request $request)
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

    return redirect()->route('login')->with('success', 'Pendaftaran berhasil! Silakan chat admin.');
}

}

