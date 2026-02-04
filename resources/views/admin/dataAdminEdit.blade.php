@extends('admin.layouts.main')

@section('contaner')
<div class="md:w-9/12 bg-white p-6 rounded shadow-2xl">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold">Edit Data Admin</h2>
        <p id="tanggal-hari-ini" class="text-orange-400 text-sm md:text-base"></p>
    </div>
    <div class="flex justify-between items-center mb-4">
        <p>Perbarui Data Admin</p>
        <a href="{{ route('data.admin') }}" class="bg-blue-300 text-white px-4 py-2 rounded hover:bg-blue-500 transition duration-200">
            < Kembali
        </a>
    </div>

    <div class="max-w-xl mx-auto bg-white p-8 rounded shadow-2xl mt-6" style="background-color:rgb(252, 245, 216)">
        @if(session('success'))
            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.update', $admin->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Username</label>
                <input type="text" name="username" value="{{ $admin->username }}" class="form-input w-full border px-4 py-2 rounded" required>
            </div>

            <div class="mb-4">
                <label class="block mb-1 font-semibold">Password (biarkan kosong jika tidak diubah)</label>
                <input type="password" name="password" class="form-input w-full border px-4 py-2 rounded">
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                Perbarui Data
            </button>
        </form>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const tanggal = new Date();
        const namaHari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
        const namaBulan = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
                           'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        const hari = namaHari[tanggal.getDay()];
        const tanggalHari = tanggal.getDate();
        const bulan = namaBulan[tanggal.getMonth()];
        const tahun = tanggal.getFullYear();
      
        const teksTanggal = `Hari ini: ${hari}, ${tanggalHari} ${bulan} ${tahun}`;
        document.getElementById("tanggal-hari-ini").textContent = teksTanggal;
    });
</script>
@endsection
