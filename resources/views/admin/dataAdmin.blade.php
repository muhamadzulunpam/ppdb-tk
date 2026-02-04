@extends('admin.layouts.main')

@section('contaner')

 


                <!-- Kolom Kanan (8 dari 12) -->
                <div class="md:w-9/12 bg-white p-6 rounded shadow-2xl">
                    <div class="flex justify-between items-center mb-4">
                        <h2 class="text-2xl font-bold">Selamat datang, Admin!</h2>
                        <p id="tanggal-hari-ini" class="text-orange-400 text-sm md:text-base"></p>
                    </div>
                    <div class="flex justify-between items-center mb-4">
                        <p>Data Admin</p>
                        <a href="{{ route('admin.create') }}" class="bg-blue-300 text-white px-4 py-2 rounded hover:bg-blue-500 transition duration-200">
                            + Create Data
                        </a>
                    </div>

                    @if(session('success'))
                            <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                                {{ session('success') }}
                            </div>
                        @endif
                    <div class="grid grid-cols-1 gap-6 mt-6">
                         <div class="overflow-x-auto">
                            <table class="min-w-full table-auto border border-gray-200 shadow rounded-lg">
                                <thead class="bg-pink-400 text-white">
                                    <tr>
                                        <th class="py-3 px-4 text-left border">No</th>
                                        <th class="py-3 px-4 text-left border">Username</th>
                                        <th class="py-3 px-4 text-left border">Role</th>
                                        <th class="py-3 px-4 text-center border">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700">
                                     @forelse($admins as $index => $admin)
                                        <tr class="hover:bg-gray-50">
                                            <td class="py-2 px-4 border">{{ $index + 1 }}</td>
                                            <td class="py-2 px-4 border">{{ $admin->username }}</td>
                                            <td class="py-2 px-4 border">{{ $admin->role }}</td>
                                            <td class="py-2 px-4 my-2 text-center border">
                                                <a href="{{ route('admin.edit', $admin->id) }}" class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500 text-sm">Edit</a>
                                                <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus admin ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center py-3 text-gray-500">Belum ada data admin.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
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