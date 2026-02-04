@extends('admin.layouts.main')

@section('contaner')

 


                <!-- Kolom Kanan (8 dari 12) -->
                <div class="md:w-9/12 bg-white p-6 rounded shadow-2xl">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold">Selamat datang, Admin!</h2>
                        <p id="tanggal-hari-ini" class="text-orange-400 text-sm md:text-base"></p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                      <div class="bg-white p-4 rounded-2xl shadow text-center">
                        <h4 class="text-gray-600">Total Pendaftar</h4>
                        <p class="text-2xl font-bold text-blue-600">{{ $totalPendaftar }}</p>
                      </div>
                      <div class="bg-white p-4 rounded-2xl shadow text-center">
                          <h4 class="text-gray-600">Total Admin</h4>
                          <p class="text-2xl font-bold text-green-600">{{ $totalAdmin }}</p>
                      </div>
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