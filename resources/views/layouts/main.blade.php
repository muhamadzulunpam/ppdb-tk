<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TK MARDI TAMA</title>
     <!-- Favicons -->
    <link href="{{ asset('assets/img/logoTk.png') }}" width="10%" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>tailwind.config={theme:{extend:{colors:{primary:'#4F86F7',secondary:'#FFB6C1'},borderRadius:{'none':'0px','sm':'4px',DEFAULT:'8px','md':'12px','lg':'16px','xl':'20px','2xl':'24px','3xl':'32px','full':'9999px','button':'8px'}}}}</script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css">
    
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body class="bg-[#FCFCFC]">

  @include('layouts.sidebar')

    @yield('container')
    
    <!-- Footer -->
    <footer class="bg-[#2C3E50] text-white pt-12 pb-6">
        <!-- Floating WhatsApp Button -->
                
        <a href="https://wa.me/6281318986448?text=Halo%2C%20saya%20menghubungi%20Anda%20melalui%20website%20TK%20Mardi%20Tama.%20Saya%20ingin%20menanyakan%20informasi%20lebih%20lanjut%20tentang%20layanan%20pendaftaran%20yang%20tersedia." 
        class="fixed bottom-4 right-4 z-50 bg-green-500 rounded-full p-3 shadow-lg hover:bg-green-600 transition duration-300 animate-bounce" 
        target="_blank" 
        aria-label="Chat via WhatsApp">
            <img src="https://img.icons8.com/ios-filled/50/ffffff/whatsapp.png" alt="WhatsApp" class="w-6 h-6">
        </a>

        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
                <div>
                    <div class="flex items-center mb-4">
                        <img src="{{asset ('assets/img/logoTk.png')}}" width="60%" alt="">
                    </div>
                    <p class="text-gray-300 mb-4">Tempat terbaik untuk pendidikan anak usia dini yang berkualitas dan menyenangkan.</p>
                    <div class="flex space-x-4">
                        <a href="https://www.instagram.com/tk.marditama_kec.setu" class="w-8 h-8 flex items-center justify-center bg-[#E4405F]/20 hover:bg-[#E4405F]/40 rounded-full transition-colors">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://wa.me/6281318986448" class="w-8 h-8 flex items-center justify-center bg-[#25D366]/20 hover:bg-[#25D366]/40 rounded-full transition-colors">
                            <i class="ri-whatsapp-line"></i>
                        </a>
                    </div>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Tautan Cepat</h4>
                    <ul class="space-y-2">
                        <li><a href="#beranda" class="text-gray-300 hover:text-white transition-colors">Beranda</a></li>
                        <li><a href="#profil" class="text-gray-300 hover:text-white transition-colors">Profil</a></li>
                        <li><a href="#galeri" class="text-gray-300 hover:text-white transition-colors">Galeri</a></li>
                        <li><a href="#pendaftaran" class="text-gray-300 hover:text-white transition-colors">Pendaftaran</a></li>
                        <li><a href="#kontak" class="text-gray-300 hover:text-white transition-colors">Kontak</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Program</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">TK A (4-5 tahun)</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white transition-colors">TK B (5-6 tahun)</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                    <ul class="space-y-3">
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex-shrink-0 flex items-center justify-center mt-1 mr-3">
                                <i class="ri-map-pin-line"></i>
                            </div>
                            <span class="text-gray-300">Kp. Curug, Rt 04/ Rw 01, Kel. babakan, Kec. Setu, Tangerang Selatan</span>
                        </li>
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex-shrink-0 flex items-center justify-center mt-1 mr-3">
                                <i class="ri-phone-line"></i>
                            </div>
                            <span class="text-gray-300">0813-1898-6448</span>
                        </li>
                        <li class="flex items-start">
                            <div class="w-5 h-5 flex-shrink-0 flex items-center justify-center mt-1 mr-3">
                                <i class="ri-mail-line"></i>
                            </div>
                            <span class="text-gray-300">tkmarditama@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-6 border-t border-gray-700 text-center text-gray-400 text-sm">
                <p>&copy; 2025 Muhamad Zul Sa'ban. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>

