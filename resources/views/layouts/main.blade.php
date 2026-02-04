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
    <style>
        :where([class^="ri-"])::before { content: "\f3c2"; }
        
        body {
            font-family: 'Nunito', sans-serif;
        }
        
        .hero-section {
            background-image: url('https://readdy.ai/api/search-image?query=Cheerful%20cartoon%20illustration%20of%20diverse%20children%20playing%20in%20a%20colorful%20playground%20with%20soft%20pastel%20colors.%20The%20left%20side%20has%20a%20soft%20gradient%20background%20in%20light%20blue%20that%20smoothly%20transitions%20to%20the%20right%20side%20showing%20happy%20children%20playing.%20The%20illustration%20style%20is%20cute%20and%20child-friendly%20with%20rounded%20shapes%20and%20soft%20edges%2C%20perfect%20for%20a%20kindergarten%20website.&width=1200&height=600&seq=1&orientation=landscape');
            background-size: cover;
            background-position: center;
        }
        
        input[type="number"]::-webkit-inner-spin-button,
        input[type="number"]::-webkit-outer-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        
        .custom-checkbox {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .custom-checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }
        
        .checkmark {
            height: 24px;
            width: 24px;
            background-color: #fff;
            border: 2px solid #E3F2FD;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .custom-checkbox input:checked ~ .checkmark {
            background-color: #4F86F7;
            border-color: #4F86F7;
        }
        
        .checkmark:after {
            content: "";
            display: none;
        }
        
        .custom-checkbox input:checked ~ .checkmark:after {
            display: block;
            width: 6px;
            height: 12px;
            border: solid white;
            border-width: 0 2px 2px 0;
            transform: rotate(45deg);
        }
        
        .custom-switch {
            position: relative;
            display: inline-block;
            width: 52px;
            height: 26px;
        }
        
        .custom-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #E3F2FD;
            transition: .4s;
            border-radius: 34px;
        }
        
        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        
        input:checked + .slider {
            background-color: #4F86F7;
        }
        
        input:checked + .slider:before {
            transform: translateX(26px);
        }
        
        .custom-radio {
            display: flex;
            align-items: center;
            cursor: pointer;
        }
        
        .custom-radio input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }
        
        .radio-mark {
            height: 24px;
            width: 24px;
            background-color: #fff;
            border: 2px solid #E3F2FD;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .custom-radio input:checked ~ .radio-mark {
            border-color: #4F86F7;
        }
        
        .radio-mark:after {
            content: "";
            display: none;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background: #4F86F7;
        }
        
        .custom-radio input:checked ~ .radio-mark:after {
            display: block;
        }
        
        .tab-active {
            background-color: #4F86F7;
            color: white;
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        nav a.active span {
        color: #0ea5e9; /* Tailwind's primary or custom */
        }
        nav a.active i {
        color: #0ea5e9;
        }
        @keyframes bounce {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
        }

        .animate-bounce {
        animation: bounce 1.5s infinite;
        }
    </style>
</head>
<body class="bg-[#FCFCFC]">

  @include('layouts.sidebar')

    @yield('contaner')
    
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
                            <span class="text-gray-300">tkkmarditama@gmail.com</span>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="pt-6 border-t border-gray-700 text-center text-gray-400 text-sm">
                <p>&copy; 2025 IT Cyber Community. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>
    


    <script>
            document.addEventListener('DOMContentLoaded', function () {
            const navLinks = document.querySelectorAll('nav a');

            navLinks.forEach(link => {
                link.addEventListener('click', function () {
                // Hapus class active dari semua link
                navLinks.forEach(el => el.classList.remove('active'));
                // Tambahkan class active ke link yang diklik
                this.classList.add('active');
                });
            });
            });
        </script>
    <script>

        document.addEventListener('DOMContentLoaded', function() {
            // Mobile Menu Toggle
            const menuButton = document.getElementById('menuButton');
            const mobileMenu = document.getElementById('mobileMenu');
            
            menuButton.addEventListener('click', function() {
                mobileMenu.classList.toggle('hidden');
                if (mobileMenu.classList.contains('hidden')) {
                    menuButton.innerHTML = '<i class="ri-menu-line text-primary"></i>';
                } else {
                    menuButton.innerHTML = '<i class="ri-close-line text-primary"></i>';
                }
            });
            
            // Close mobile menu when clicking on a link
            const mobileLinks = mobileMenu.querySelectorAll('a');
            mobileLinks.forEach(link => {
                link.addEventListener('click', function() {
                    mobileMenu.classList.add('hidden');
                    menuButton.innerHTML = '<i class="ri-menu-line text-primary"></i>';
                });
            });
        });
        
        document.addEventListener('DOMContentLoaded', function() {
            // Gallery Filter
            const galleryFilters = document.querySelectorAll('.gallery-filter');
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            galleryFilters.forEach(filter => {
                filter.addEventListener('click', function() {
                    // Remove active class from all filters
                    galleryFilters.forEach(f => {
                        f.classList.remove('tab-active');
                        f.classList.add('text-[#555]');
                    });
                    
                    // Add active class to clicked filter
                    this.classList.add('tab-active');
                    this.classList.remove('text-[#555]');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    // Show/hide gallery items based on filter
                    galleryItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
                        } else {
                            item.style.display = 'none';
                        }
                    });
                });
            });
        });
    </script>
</body>
</html>

