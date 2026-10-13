@extends('layouts.main')

@section('container')


    <!-- POP-UP WRAPPER -->
    <div id="popupPoster" class="fixed inset-0 bg-black/60 flex items-center justify-center z-50">
    <div class="relative bg-white p-4 rounded-lg max-w-sm w-[90%]">
        
        <!-- Tombol Close -->
        <button onclick="closePopup()" class="absolute top-2 right-2 text-white bg-red-500 hover:bg-red-600 rounded-full w-8 h-8 flex items-center justify-center">
        &times;
        </button>
        
        <!-- Gambar Poster -->
        <img src="{{ asset('assets/img/poster2.png') }}" width alt="Poster TK"  class="w-full h-auto rounded-md">
        
    </div>
    </div>

    <!-- Hero Section -->
    <section id="beranda" class="hero-section relative min-h-[600px] flex items-center">
        <div class="absolute inset-0 bg-gradient-to-r from-[#E3F2FD]/90 to-transparent"></div>
        <div class="container mx-auto px-4 py-16 relative z-10">
            <div class="max-w-xl">
                <h1 class="text-4xl md:text-5xl font-bold text-[#333] mb-4">Selamat Datang Di Tk Mardi Tama</h1>
                <p class="text-lg md:text-xl text-[#555] mb-8">Tempat di mana anak-anak belajar, bermain, dan tumbuh bersama dalam suasana yang menyenangkan dan penuh kasih sayang.</p>
                <div class="flex flex-wrap gap-4">
                    <a href="#pendaftaran">
                        <button class="bg-primary hover:bg-primary/90 text-white px-6 py-3 rounded-button text-lg font-semibold shadow-lg transition-all hover:shadow-xl whitespace-nowrap">
                            <i class="ri-user-add-line mr-2"></i> Daftar Sekarang
                        </button>
                    </a>
                    <a href="#profil">
                        <button class="bg-white hover:bg-gray-50 text-primary border-2 border-primary px-6 py-3 rounded-button text-lg font-semibold shadow-md transition-all hover:shadow-lg whitespace-nowrap">
                            <i class="ri-information-line mr-2"></i> Pelajari Lebih Lanjut
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Profil Sekolah -->
    
    <section id="profil" class="py-16 bg-white">
    <div class="py-8">
    </div>
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#333] mb-4">Profil TK Mardi Tama</h2>
                <p class="text-lg text-[#666] max-w-3xl mx-auto">Mengenal lebih dekat dengan TK Mardi Tama, tempat terbaik untuk pendidikan anak usia dini.</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <img src="{{asset ('assets/img/menggambar bersama.jpeg')}}" alt="Ruang Kelas TK Mardi Tama" class="rounded-2xl shadow-lg w-full h-auto object-cover">
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-[#333] mb-6">Visi & Misi</h3>
                    
                    <div class="mb-8">
                        <h4 class="text-xl font-semibold text-primary mb-3">Visi</h4>
                        <p class="text-[#555] mb-4">Terbentuknya lembaga pendidikan yang dapat menumbuh kembangkan peserta didik sesuai potensinya yang sehat, cerdas, ceria, dan berakhlak mulia.</p>
                    </div>
                    
                    <div class="mb-8">
                        <h4 class="text-xl font-semibold text-primary mb-3">Misi</h4>
                        <ul class="space-y-3 text-[#555]">
                            <li class="flex items-start">
                                <div class="w-6 h-6 flex-shrink-0 flex items-center justify-center bg-[#E3F2FD] rounded-full mt-1 mr-3">
                                    <i class="ri-check-line text-primary text-sm"></i>
                                </div>
                                <span>Melaksanakan pembiasaan yang baik dalam kegiatan sehari-hari.</span>
                            </li>
                            <li class="flex items-start">
                                <div class="w-6 h-6 flex-shrink-0 flex items-center justify-center bg-[#E3F2FD] rounded-full mt-1 mr-3">
                                    <i class="ri-check-line text-primary text-sm"></i>
                                </div>
                                <span>Melaksanakan proses pembelajarann secara teratur yang dapat mengembangkan potensi anak.</span>
                            </li>
                            <li class="flex items-start">
                                <div class="w-6 h-6 flex-shrink-0 flex items-center justify-center bg-[#E3F2FD] rounded-full mt-1 mr-3">
                                    <i class="ri-check-line text-primary text-sm"></i>
                                </div>
                                <span>Meningkatkan mutu pendidikan sesuai tuntutan masyarakat dan perkembangan IPTEK.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="mt-16">
                <h3 class="text-2xl font-bold text-[#333] text-center mb-10">Fasilitas Kami</h3>
                
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 mx-auto flex items-center justify-center bg-[#E3F2FD] rounded-full mb-4">
                            <i class="ri-building-4-line text-primary text-2xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-[#333] mb-2">Ruang Kelas Nyaman</h4>
                        <p class="text-sm text-[#666]">Ruang kelas yang luas dengan suasana yang menyenangkan</p>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 mx-auto flex items-center justify-center bg-[#E3F2FD] rounded-full mb-4">
                            <i class="ri-gamepad-line text-primary text-2xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-[#333] mb-2">Area Bermain</h4>
                        <p class="text-sm text-[#666]">Area bermain indoor dan outdoor yang aman dan edukatif</p>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 mx-auto flex items-center justify-center bg-[#E3F2FD] rounded-full mb-4">
                            <i class="ri-book-open-line text-primary text-2xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-[#333] mb-2">Perpustakaan Mini</h4>
                        <p class="text-sm text-[#666]">Koleksi buku cerita dan pengetahuan untuk anak-anak</p>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-md p-6 text-center hover:shadow-lg transition-shadow">
                        <div class="w-16 h-16 mx-auto flex items-center justify-center bg-[#E3F2FD] rounded-full mb-4">
                            <i class="ri-first-aid-kit-line text-primary text-2xl"></i>
                        </div>
                        <h4 class="text-lg font-semibold text-[#333] mb-2">UKS</h4>
                        <p class="text-sm text-[#666]">Ruang kesehatan untuk penanganan pertama jika diperlukan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galeri Kegiatan -->
    
    <section id="galeri" class="py-16 bg-[#F8F9FA]">
    <div class="py-8">
    </div>
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#333] mb-4">Galeri Kegiatan</h2>
                <p class="text-lg text-[#666] max-w-3xl mx-auto">Lihat berbagai kegiatan menarik yang dilakukan oleh anak-anak di TK Mardi Tama.</p>
            </div>
            
            <div class="mb-8 flex justify-center">
                <div class="inline-flex bg-[#F0F4F8] p-1 rounded-full">
                    <button class="gallery-filter px-4 py-2 rounded-full text-sm font-medium tab-active" data-filter="all">Semua</button>
                    <button class="gallery-filter px-4 py-2 rounded-full text-sm font-medium text-[#555]" data-filter="kelas">Kegiatan Kelas</button>
                    <button class="gallery-filter px-4 py-2 rounded-full text-sm font-medium text-[#555]" data-filter="bermain">Bermain</button>
                    <button class="gallery-filter px-4 py-2 rounded-full text-sm font-medium text-[#555]" data-filter="acara">Acara Sekolah</button>
                </div>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="gallery-item relative rounded-xl overflow-hidden shadow-xl group" data-category="kelas">
                    <img src="{{ asset('assets/img/menggambar pelangi.png') }}" alt="Kegiatan Melukis" class="w-full h-64 object-cover object-top">
                    <div class="gallery-overlay absolute inset-0 bg-primary/70 flex items-center justify-center opacity-0 transition-opacity duration-300">
                        <div class="text-center text-white p-4">
                            <h3 class="text-xl font-bold mb-2">Kegiatan menggambar</h3>
                            <p class="text-sm">Anak-anak mengekspresikan kreativitas mereka melalui lukisan warna-warni</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item relative rounded-xl overflow-hidden shadow-md group" data-category="bermain">
                    <img src="{{ asset('assets/img/bermain_ditaman.jpeg') }}" alt="Bermain di Taman" class="w-full h-64 object-cover object-top">
                    <div class="gallery-overlay absolute inset-0 bg-primary/70 flex items-center justify-center opacity-0 transition-opacity duration-300">
                        <div class="text-center text-white p-4">
                            <h3 class="text-xl font-bold mb-2">Bermain di Taman</h3>
                            <p class="text-sm">Aktivitas bermain di luar ruangan yang menyenangkan dan menyehatkan</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item relative rounded-xl overflow-hidden shadow-md group" data-category="bermain">
                    <img src="{{ asset('assets/img/tk-haji.jpeg') }}" alt="Bermain di Taman" class="w-full h-64 object-cover object-top">
                    <div class="gallery-overlay absolute inset-0 bg-primary/70 flex items-center justify-center opacity-0 transition-opacity duration-300">
                        <div class="text-center text-white p-4">
                            <h3 class="text-xl font-bold mb-2">Kegiatan Manasik Haji</h3>
                            <p class="text-sm">Anak-anak belajar mengenal rukun haji dan tata cara pelaksanannya melalui kegiatan manasik haji yang menyenangkan dan edukatif</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item relative rounded-xl overflow-hidden shadow-xl group" data-category="bermain">
                    <img src="{{ asset('assets/img/belajar menari.png') }}" alt="Bermain Peran" class="w-full h-64 object-cover object-top">
                    <div class="gallery-overlay absolute inset-0 bg-primary/70 flex items-center justify-center opacity-0 transition-opacity duration-300">
                        <div class="text-center text-white p-4">    
                            <h3 class="text-xl font-bold mb-2">Kegiatan Menari</h3>
                            <p class="text-sm">Anak-anak mengekspresikan diri dan melatih koordinasi tubuh melalui gerakan tari yang menyenangkan</p>
                        </div>
                    </div>
                </div>
                
                <div class="gallery-item relative rounded-xl overflow-hidden shadow-md group" data-category="acara">
                    <img src="{{ asset('assets/img/tk-pentas3.jpeg') }}" alt="Pentas Seni" class="w-full h-64 object-cover object-top">
                    <div class="gallery-overlay absolute inset-0 bg-primary/70 flex items-center justify-center opacity-0 transition-opacity duration-300">
                        <div class="text-center text-white p-4">
                            <h3 class="text-xl font-bold mb-2">Pentas Seni</h3>
                            <p class="text-sm">Anak-anak menampilkan bakat seni mereka dalam acara pentas seni</p>
                        </div>
                    </div>
                </div>
                <div class="gallery-item relative rounded-xl overflow-hidden shadow-md group" data-category="acara">
                    <img src="{{ asset('assets/img/kegiatan memasak.jpeg') }}" alt="Pentas Seni" class="w-full h-64 object-cover object-top">
                    <div class="gallery-overlay absolute inset-0 bg-primary/70 flex items-center justify-center opacity-0 transition-opacity duration-300">
                        <div class="text-center text-white p-4">
                            <h3 class="text-xl font-bold mb-2">Kegiatan Memasak</h3>
                            <p class="text-sm">Anak-anak belajar mengenal bahan makanan dan melatih motorik halus melalui kegiatan memasak yang seru dan edukatif.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#333] mb-4">Apa Kata Orang Tua</h2>
                <p class="text-lg text-[#666] max-w-3xl mx-auto">Dengarkan pengalaman orang tua yang telah mempercayakan pendidikan anak mereka di TK Mardi Tama.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-[#E3F2FD] rounded-full flex items-center justify-center mr-4">
                            <i class="ri-user-smile-line text-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-[#333]">Ratna Dewi</h4>
                            <p class="text-sm text-[#666]">Ibu dari Dinda</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex text-[#FFB400]">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                    </div>
                    <p class="text-[#555]">"Anak saya sangat senang bersekolah di TK Mardi Tama. Guru-gurunya ramah dan sabar dalam mendampingi anak-anak. Saya melihat perkembangan yang pesat pada kemampuan sosial dan kognitif anak saya."</p>
                </div>
                
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-[#E3F2FD] rounded-full flex items-center justify-center mr-4">
                            <i class="ri-user-smile-line text-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-[#333]">Budi Santoso</h4>
                            <p class="text-sm text-[#666]">Ayah dari Raffi</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex text-[#FFB400]">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-half-fill"></i>
                        </div>
                    </div>
                    <p class="text-[#555]">"Fasilitas di TK Mardi Tama sangat lengkap dan terawat dengan baik. Program pembelajarannya juga sangat menarik dan sesuai dengan perkembangan anak. Anak saya jadi lebih mandiri dan percaya diri."</p>
                </div>
                
                <div class="bg-white rounded-xl shadow-md p-6 hover:shadow-lg transition-shadow">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-[#E3F2FD] rounded-full flex items-center justify-center mr-4">
                            <i class="ri-user-smile-line text-primary text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-[#333]">Siti Nurhayati</h4>
                            <p class="text-sm text-[#666]">Ibu dari Aisha</p>
                        </div>
                    </div>
                    <div class="mb-4">
                        <div class="flex text-[#FFB400]">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                        </div>
                    </div>
                    <p class="text-[#555]">"Saya sangat puas dengan pendidikan di TK Mardi Tama. Guru-gurunya profesional dan komunikatif dalam memberikan laporan perkembangan anak. Lingkungan belajarnya juga aman dan nyaman."</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pendaftaran -->
    
    <section id="pendaftaran" class="py-16 bg-white" style="background-image: url('{{asset('assets/img/pendaftaran.jpg')}}'); background-size: cover; background-position: center;">
        <div class="py-8">
        </div>
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#333] mb-4">Pendaftaran Siswa Baru</h2>
                <p class="text-lg text-[#666] max-w-3xl mx-auto">Daftarkan putra/putri Anda untuk mendapatkan pendidikan berkualitas di TK Mardi Tama.</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-[#333] mb-6">Formulir Pendaftaran</h3>
                    
                    <div class="flex items-center justify-between">
                        <div class="flex items-center mb-6" id="progress">
                            <div id="dot-1" class="w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold">1</div>
                            <div id="line-1" class="h-1 w-12 bg-primary mx-2"></div>

                            <div id="dot-2" class="w-8 h-8 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center font-bold">2</div>
                            <div id="line-2" class="h-1 w-12 bg-gray-300 mx-2"></div>

                            <div id="dot-3" class="w-8 h-8 rounded-full bg-gray-300 text-gray-600 flex items-center justify-center font-bold">3</div>
                        </div>

                        <span class="text-sm text-[#666]">Langkah dari 1 - 3</span>
                    </div>

                    

                        <div class="max-w-2xl mx-auto py-10">
                            <form method="POST" action="{{ route('pendaftaran.create') }}" enctype="multipart/form-data">
                                @csrf

                                {{-- STEP 1 --}}
                                <div id="step-1" class="step">
                                    <h2 class="text-2xl font-bold mb-4">Langkah 1: Data Anak</h2>
                                    <div class="mb-4">
                                        <label>Nama Lengkap Anak</label>
                                        <input type="text" name="nama_anak" required class="form-input w-full mt-1 border rounded "require>
                                    </div>
                                    <div class="mb-4">
                                        <label>Jenis Kelamin</label>
                                        <select name="jenis_kelamin" required class="form-select w-full mt-1 border rounded require">
                                            <option value="">-- Pilih --</option>
                                            <option value="laki-laki">Laki-laki</option>
                                            <option value="perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                    <div class="mb-4">
                                        <label>Tempat Tanggal Lahir</label>
                                        <input type="text" name="ttl" required class="form-input w-full mt-1 border rounded require">
                                    </div>
                                    <div class="mb-4">
                                        <label>Agama</label>
                                        <input type="text" name="agama" required class="form-input w-full mt-1 border rounded require">
                                    </div>
                                    <div class="mb-4">
                                        <label>Alamat Lengkap</label>
                                        <textarea name="alamat" required class="form-textarea w-full mt-1 border rounded require"></textarea>
                                    </div>
                                    <button type="button" onclick="nextStep(2)" class="bg-blue-600 text-white px-4 py-2 rounded">Lanjut</button>
                                </div>

                                {{-- STEP 2 --}}
                                <div id="step-2" class="step hidden">
                                    <h2 class="text-2xl font-bold mb-4">Langkah 2: Data Orang Tua/Wali</h2>
                                    <div class="mb-4">
                                        <label>Nama Orang Tua</label>
                                        <input type="text" name="nama_ortu" required class="form-input w-full mt-1 border rounded">
                                    </div>
                                    <div class="mb-4">
                                        <label>Pekerjaan Orang Tua</label>
                                        <input type="text" name="pekerjaan" required class="form-input w-full mt-1 border rounded">
                                    </div>
                                    <div class="mb-4">
                                        <label>Nomor HP</label>
                                        <input type="text" name="no_hp" required class="form-input w-full mt-1 border rounded">
                                    </div>
                                    <div class="mb-4">
                                        <label>Alamat Email</label>
                                        <input type="email" name="email" required class="form-input w-full mt-1 border rounded">
                                    </div>
                                    <div class="flex justify-between">
                                        <button type="button" onclick="nextStep(1)" class="bg-gray-600 text-white px-4 py-2 rounded">Kembali</button>
                                        <button type="button" onclick="nextStep(3)" class="bg-blue-600 text-white px-4 py-2 rounded">Lanjut</button>
                                    </div>
                                </div>

                                {{-- STEP 3 --}}
                                <div id="step-3" class="step hidden">
                                    <h2 class="text-2xl font-bold mb-4">Langkah 3: Upload Data Tambahan</h2>
                                    <div class="mb-4">
                                        <label>Pas Foto Anak</label>
                                        <input type="file" name="foto" required class="form-input w-full mt-1 border rounded">
                                    </div>
                                    <div class="mb-4">
                                        <label>Akta Kelahiran</label>
                                        <input type="file" name="akta" required class="form-input w-full mt-1 border rounded">
                                    </div>
                                    <div class="mb-4">
                                        <label>Kartu Keluarga</label>
                                        <input type="file" name="kk" required class="form-input w-full mt-1 border rounded">
                                    </div>
                                    <div class="mb-4">
                                        <label>Catatan Kesehatan (Opsional)</label>
                                        <input type="file" name="kesehatan" class="form-input w-full mt-1 border rounded">
                                    </div>
                                    <div class="flex justify-between">
                                        <button type="button" onclick="nextStep(2)" class="bg-gray-600 text-white px-4 py-2 rounded">Kembali</button>
                                        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Kirim Pendaftaran</button>
                                    </div>
                                </div>
                            </form>

                        </div>  

                </div>
                
                <div>
                    <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                        <h3 class="text-2xl font-bold text-[#333] mb-6">Informasi Biaya</h3>
                        
                        <div class="space-y-4">
                            <div class="flex justify-between items-center pb-3 border-b border-[#E5E7EB]">
                                <div>
                                    <h4 class="font-semibold text-[#333]">Biaya Pendaftaran</h4>
                                    <p class="text-sm text-[#666]">Sudah Termaksud biaya baju buku dan uang gedung</p>
                                </div>
                                <span class="font-bold text-[#333]">Rp 2.500.000</span>
                            </div>
                            
                            <div class="flex justify-between items-center pb-3 border-b border-[#E5E7EB]">
                                <div>
                                    <h4 class="font-semibold text-[#333]">SPP Bulanan</h4>
                                    <p class="text-sm text-[#666]">Dibayarkan setiap bulan</p>
                                </div>
                                <span class="font-bold text-[#333]">Rp 150.000</span>
                            </div>
                            <div class="flex justify-between items-center pb-3 border-b border-[#E5E7EB]">
                                <div>
                                    <h4 class="font-semibold text-[#333]">Formulir</h4>
                                    <p class="text-sm text-[#666]">Buku aktivitas dan perlengkapan belajar</p>
                                </div>
                                <span class="font-bold text-[#333]">Rp 50.000</span>
                            </div>
                        </div>
                       
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-lg p-8">
                        <h3 class="text-2xl font-bold text-[#333] mb-6">Jadwal Pendaftaran</h3>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="w-10 h-10 flex-shrink-0 flex items-center justify-center bg-[#E3F2FD] rounded-full mt-1 mr-4">
                                    <i class="ri-calendar-check-line text-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[#333]">I Gelombang</h4>
                                    <p class="text-[#666]">1 Januari - 30 Juni</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak -->
      
    <section id="kontak" class="py-16 bg-[#F8F9FA]" style="background-image: url('{{asset('assets/img/kontak.jpg')}}'); background-size: cover; background-position: center;">
        <div class="py-8">
        </div>
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-[#333] mb-4">Hubungi Kami</h2>
                <p class="text-lg text-[#666] max-w-3xl mx-auto">Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau ingin informasi lebih lanjut.</p>
            </div>
            
            <div class="grid md:grid-cols-2 gap-12">
                <div class="bg-white rounded-xl shadow-lg p-8">
                    <h3 class="text-2xl font-bold text-[#333] mb-6">Kirim Pesan WhatsApp</h3>
                    
                    <form id="whatsappForm">
                        <div class="mb-6">
                            <label for="nama" class="block text-[#333] font-medium mb-2">Nama Lengkap</label>
                            <input type="text" id="nama" class="w-full px-4 py-3 rounded border" placeholder="Masukkan nama lengkap Anda">
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-[#333] font-medium mb-2">Email</label>
                            <input type="email" id="email" class="w-full px-4 py-3 rounded border" placeholder="Masukkan alamat email Anda">
                        </div>
                        
                        <div class="mb-6">
                            <label for="telepon" class="block text-[#333] font-medium mb-2">Nomor Telepon</label>
                            <input type="tel" id="telepon" class="w-full px-4 py-3 rounded border" placeholder="Masukkan nomor telepon Anda">
                        </div>
                        
                        <div class="mb-6">
                            <label for="pesan" class="block text-[#333] font-medium mb-2">Pesan</label>
                            <textarea id="pesan" rows="4" class="w-full px-4 py-3 rounded border" placeholder="Tulis pesan Anda di sini"></textarea>
                        </div>
                        
                        <button type="button" id="kirimWhatsapp" class="bg-primary text-white px-6 py-3 rounded text-lg font-semibold shadow-lg">
                            <i class="ri-send-plane-line mr-2"></i> Kirim Pesan
                        </button>
                    </form>

                </div>
                
                <div>
                    <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                        <h3 class="text-2xl font-bold text-[#333] mb-6">Informasi Kontak</h3>
                        <div class="space-y-6">
                            <div class="flex items-start">
                                <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-[#E3F2FD] rounded-full mt-1 mr-4">
                                    <i class="ri-map-pin-line text-primary text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[#333] mb-1">Alamat</h4>
                                    <p class="text-[#666]">Kp. Curug, Rt 04/ Rw 01, Kel. babakan, Kec. Setu, Tangerang Selatan</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-[#E3F2FD] rounded-full mt-1 mr-4">
                                    <i class="ri-phone-line text-primary text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[#333] mb-1">WhatsApp</h4>
                                    <p class="text-[#666]">0813-1898-6448 (WhatsApp)</p>
                                </div>
                            </div>
                            <div class="flex items-start">
                                <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-[#E3F2FD] rounded-full mt-1 mr-4">
                                    <i class="ri-mail-line text-primary text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[#333] mb-1">Email</h4>
                                    <p class="text-[#666]">tkkmarditama@gmail.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="w-12 h-12 flex-shrink-0 flex items-center justify-center bg-[#E3F2FD] rounded-full mt-1 mr-4">
                                    <i class="ri-time-line text-primary text-xl"></i>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-[#333] mb-1">Jam Operasional</h4>
                                    <p class="text-[#666]">Senin - Jumat: 07.00 - 12.00 WIB</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8">
                            <h4 class="font-semibold text-[#333] mb-4">Ikuti Kami</h4>
                            <div class="flex space-x-4">
                                <!-- Instagram -->
                                <a href="https://www.instagram.com/tk.marditama_kec.setu" target="_blank"
                                class="w-10 h-10 flex items-center justify-center bg-[#E3F2FD] hover:bg-primary text-primary hover:text-white rounded-full transition-colors">
                                <i class="ri-instagram-line"></i>
                                </a>

                                <!-- WhatsApp -->
                                <a href="https://wa.me/6281318986448" target="_blank"
                                class="w-10 h-10 flex items-center justify-center bg-[#E3F2FD] hover:bg-primary text-primary hover:text-white rounded-full transition-colors">
                                    <i class="ri-whatsapp-line"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-xl shadow-lg p-8 space-y-4">
                        <div class="flex items-center justify-between">
                            <h3 class="text-2xl font-bold text-[#333]">Lokasi Kami</h3>
                            <a href="https://www.google.com/maps/place/TK+Mardi+Tama/" 
                            target="_blank" 
                            class="text-primary underline font-semibold text-lg">
                            Buka di Google Maps
                            </a>
                        </div>

                        <div class="w-full h-[300px] overflow-hidden rounded-xl">
                            <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.7386596289317!2d106.829519!3d-6.200875!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3c2a7c6e091%3A0xabcdef1234567890!2sTK%20Mardi%20Tama!5e0!3m2!1sen!2sid!4v1717590000000"
                            width="100%"
                            height="100%"
                            class="border-0 w-full h-full"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            ></iframe>
                        </div>
                        </div>

                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('js/ppdb.js') }}"></script>
@endsection