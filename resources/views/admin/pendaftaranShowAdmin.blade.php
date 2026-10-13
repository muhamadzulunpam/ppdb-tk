@extends('admin.layouts.main')

@section('container')

   <div class="md:w-11/12 bg-white p-6 rounded shadow-2xl">
    <h2 class="text-2xl font-bold mb-6 text-pink-600">Detail Pendaftaran Anak</h2>

    <div class="flex flex-col md:flex-row gap-6">
        {{-- Langkah 1: Data Anak --}}
        <div class="flex-1 bg-gray-50 p-4 rounded shadow">
            <h3 class="font-semibold text-lg text-gray-700 mb-2">Data Anak</h3>
            <p><strong>Nama:</strong> {{ $pendaftaran->nama_anak }}</p>
            <p><strong>Jenis Kelamin:</strong> {{ $pendaftaran->jenis_kelamin }}</p>
            <p><strong>Tempat, Tanggal Lahir:</strong> {{ $pendaftaran->ttl }}</p>
            <p><strong>Agama:</strong> {{ $pendaftaran->agama }}</p>
            <p><strong>Alamat:</strong> {{ $pendaftaran->alamat }}</p>
        </div>

        {{-- Langkah 2: Data Orang Tua/Wali --}}
        <div class="flex-1 bg-gray-50 p-4 rounded shadow">
            <h3 class="font-semibold text-lg text-gray-700 mb-2">Data Orang Tua/Wali</h3>
            <p><strong>Nama Orang Tua:</strong> {{ $pendaftaran->nama_ortu }}</p>
            <p><strong>Pekerjaan:</strong> {{ $pendaftaran->pekerjaan }}</p>
            <p><strong>No HP:</strong> {{ $pendaftaran->no_hp }}</p>
            <p><strong>Email:</strong> {{ $pendaftaran->email }}</p>
        </div>

        {{-- Langkah 3: Berkas --}}
        <div class="flex-1 bg-gray-50 p-4 rounded shadow">
            <h3 class="font-semibold text-lg text-gray-700 mb-2">Berkas yang Diunggah</h3>
            <ul class="list-disc list-inside text-blue-600">
                <li>
                    <a href="{{ asset('storage/' . $pendaftaran->foto) }}" target="_blank">Pas Foto Anak</a>
                </li>
                <li>
                    <a href="{{ asset('storage/' . $pendaftaran->akta) }}" target="_blank">Akta Kelahiran</a>
                </li>
                <li>
                    <a href="{{ asset('storage/' . $pendaftaran->kk) }}" target="_blank">Kartu Keluarga</a>
                </li>
                @if ($pendaftaran->kesehatan)
                <li>
                    <a href="{{ asset('storage/' . $pendaftaran->kesehatan) }}" target="_blank">Catatan Kesehatan</a>
                </li>
                @endif
            </ul>
        </div>
    </div>

    <div class="mt-6">
        <a href="{{ route('pendaftar.admin') }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">← Kembali</a>
    </div>
</div>


</div>
</section>


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

    