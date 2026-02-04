

    <!-- Header & Navigation -->
    <header class="bg-[#E3F2FD] shadow-sm sticky top-0 z-50">
        <div class="container mx-auto px-4 py-3 flex items-center justify-between">
            <div class="flex items-center">
                <img src="{{asset ('assets/img/logoTk.png')}}" width="60%" alt="">
            </div>
            
            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-6">
                <a href="/" class="flex flex-col items-center text-[#333] hover:text-primary transition-colors">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full shadow-sm mb-1" style="background-color: #e42690 !important;">
                        <i class="ri-home-5-line text-white"></i>
                    </div>
                    <span class="text-sm font-semibold">Beranda</span>
                </a>
                @auth
                <a href="{{ route('admin') }}" class="flex flex-col items-center text-[#333] hover:text-primary transition-colors">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full shadow-sm mb-1" style="background-color: #f6d200 !important;">
                        <i class="ri-shield-user-line text-white"></i>
                    </div>
                    <span class="text-sm font-semibold text-primary">Admin</span>
                <a href="{{ route('logout') }}" class="flex flex-col items-center text-[#333] hover:text-primary transition-colors">
                    <div class="w-10 h-10 flex items-center justify-center rounded-full shadow-sm mb-1" style="background-color: #f68000 !important;">
                        <i class="ri-logout-box-r-line text-white"></i>
                    </div>
                    <span class="text-sm font-semibold">Logout</span>
                </a>
                @else
                <a href="{{ route('login') }}" class="flex flex-col items-center text-[#333] hover:text-primary transition-colors">
                    <div class="w-10 h-10 flex items-center justify-center bg-white rounded-full shadow-sm mb-1">
                        <i class="ri-login-box-line text-primary"></i>
                    </div>
                    <span class="text-sm font-semibold">Login</span>
                </a>
                @endauth
            </nav>
            
            <!-- Mobile Menu Button -->
            <button id="menuButton" class="md:hidden w-10 h-10 flex items-center justify-center bg-white rounded-full shadow-sm">
                <i class="ri-menu-line text-primary"></i>
            </button>
        </div>
        
        <!-- Mobile Navigation -->
        <div id="mobileMenu" class="hidden md:hidden bg-white shadow-md absolute w-full">
            <div class="container mx-auto px-4 py-2 flex flex-col">
                <a href="#beranda" class="flex items-center py-3 border-b border-gray-100 text-[#333] hover:text-primary transition-colors">
                    <div class="w-8 h-8 flex items-center justify-center rounded-full mr-3" style="background-color: #e42690 !important;">
                        <i class="ri-home-5-line text-white"></i>
                    </div>
                    <span class="font-semibold">Beranda</span>
                </a>
                 @auth
                 <a href="{{ route('admin') }}" class="flex items-center py-3 border-b border-gray-100 text-[#333] hover:text-primary transition-colors">
                    <div class="w-8 h-8 flex items-center justify-center rounded-full mr-3" style="background-color: #f6d200 !important;">
                        <i class="ri-shield-user-line text-white"></i>
                    </div>
                    <span class="font-semibold">Admin</span>
                </a>
                <a href="{{ route('logout') }}" class="flex items-center py-3 border-b border-gray-100 text-[#333] hover:text-primary transition-colors">
                    <div class="w-8 h-8 flex items-center justify-center rounded-full mr-3" style="background-color: #f68000 !important;">
                        <i class="ri-logout-box-r-line text-white"></i>
                    </div>
                    <span class="font-semibold">Logout</span>
                </a>
                @else
                <a href="{{ route('login') }}" class="flex items-center py-3 border-b border-gray-100 text-[#333] hover:text-primary transition-colors">
                    <div class="w-8 h-8 flex items-center justify-center rounded-full mr-3" style="background-color: #e42690 !important;">
                        <i class="ri-login-box-line text-white"></i>
                    </div>
                    <span class="font-semibold">Login</span>
                </a>
                
                @endauth
            </div>
        </div>
    </header>
