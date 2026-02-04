@extends('admin.layouts.main')

@section('contaner')

 


                <!-- Kolom Kanan (8 dari 12) -->
                <div class="md:w-9/12 bg-white p-6 rounded shadow-2xl">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold">Selamat datang, Admin!</h2>
                        <p id="tanggal-hari-ini" class="text-orange-400 text-sm md:text-base"></p>
                    </div>
                    <div class="flex justify-between items-center mb-4">
                        <p>Create Data Admin Baru</p>
                        <a href="{{ route('pendaftar.admin') }}" class="bg-blue-300 text-white px-4 py-2 rounded hover:bg-blue-500 transition duration-200">
                            < Kembali
                        </a>
                    </div>
                    <div class="max-w-xl mx-auto bg-white p-8 rounded shadow-2xl mt-6" style="background-color:rgb(252, 245, 216)">
                        @if(session('success'))
                            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('pendaftaran.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                                <div class="mb-4">
                                    <label>Nama Lengkap Anak</label>
                                    <input type="text" name="nama_anak" value="{{ $data->nama_anak }}" required class="form-input w-full mt-1 border rounded">
                                </div>
                                <div class="mb-4">
                                    <label>Jenis Kelamin</label>
                                    <select name="jenis_kelamin" required class="form-select w-full mt-1 border rounded">
                                        <option value="">-- Pilih --</option>
                                        <option value="laki-laki" {{ $data->jenis_kelamin == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                        <option value="perempuan" {{ $data->jenis_kelamin == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label>Tempat Tanggal Lahir</label>
                                    <input type="text" name="ttl" value="{{ $data->ttl }}" required class="form-input w-full mt-1 border rounded">
                                </div>
                                <div class="mb-4">
                                    <label>Agama</label>
                                    <input type="text" name="agama" value="{{ $data->agama }}" required class="form-input w-full mt-1 border rounded">
                                </div>
                                <div class="mb-4 col-span-3">
                                    <label>Alamat Lengkap</label>
                                    <textarea name="alamat" required class="form-textarea w-full mt-1 border rounded">{{ $data->alamat }}</textarea>
                                </div>
                                <div class="mb-4">
                                    <label>Nama Orang Tua</label>
                                    <input type="text" name="nama_ortu" value="{{ $data->nama_ortu }}" required class="form-input w-full mt-1 border rounded">
                                </div>
                                <div class="mb-4">
                                    <label>Pekerjaan Orang Tua</label>
                                    <input type="text" name="pekerjaan" value="{{ $data->pekerjaan }}" required class="form-input w-full mt-1 border rounded">
                                </div>
                                <div class="mb-4">
                                    <label>Nomor HP</label>
                                    <input type="text" name="no_hp" value="{{ $data->no_hp }}" required class="form-input w-full mt-1 border rounded">
                                </div>
                                <div class="mb-4">
                                    <label>Alamat Email</label>
                                    <input type="email" name="email" value="{{ $data->email }}" required class="form-input w-full mt-1 border rounded">
                                </div>
                                <div class="mb-4">
                                    <label>Pas Foto Anak (Opsional)</label>
                                    <input type="file" name="foto" class="form-input w-full mt-1 border rounded">
                                </div>
                                <div class="mb-4">
                                    <label>Akta Kelahiran (Opsional)</label>
                                    <input type="file" name="akta" class="form-input w-full mt-1 border rounded">
                                </div>
                                <div class="mb-4">
                                    <label>Kartu Keluarga (Opsional)</label>
                                    <input type="file" name="kk" class="form-input w-full mt-1 border rounded">
                                </div>
                                <div class="mb-4 col-span-3">
                                    <label>Catatan Kesehatan (Opsional)</label>
                                    <input type="file" name="kesehatan" class="form-input w-full mt-1 border rounded">
                                </div>
                            <div class="mt-6">
                                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                                    Perbarui Data
                                </button>
                            </div>
                        </form>
                    </div>

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