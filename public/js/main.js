// ========================================
// 1. NAVBAR ACTIVE LINK
// ========================================

document.addEventListener('DOMContentLoaded', function () {
    const navLinks = document.querySelectorAll('nav a');

    navLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            // Hapus class active dari semua link.
            navLinks.forEach(function (el) {
                el.classList.remove('active');
            });

            // Tambahkan class active pada link yang diklik.
            this.classList.add('active');
        });
    });


    // ========================================
    // 2. MOBILE MENU TOGGLE
    // ========================================

    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    if (menuButton && mobileMenu) {
        // Buka atau tutup menu mobile.
        menuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');

            if (mobileMenu.classList.contains('hidden')) {
                menuButton.innerHTML =
                    '<i class="ri-menu-line text-primary"></i>';
            } else {
                menuButton.innerHTML =
                    '<i class="ri-close-line text-primary"></i>';
            }
        });

        // Tutup menu mobile ketika tautan diklik.
        const mobileLinks = mobileMenu.querySelectorAll('a');

        mobileLinks.forEach(function (link) {
            link.addEventListener('click', function () {
                mobileMenu.classList.add('hidden');

                menuButton.innerHTML =
                    '<i class="ri-menu-line text-primary"></i>';
            });
        });
    }


    // ========================================
    // 3. GALLERY FILTER
    // ========================================

    const galleryFilters = document.querySelectorAll('.gallery-filter');
    const galleryItems = document.querySelectorAll('.gallery-item');

    galleryFilters.forEach(function (filter) {
        filter.addEventListener('click', function () {
            // Hapus status aktif dari semua filter.
            galleryFilters.forEach(function (item) {
                item.classList.remove('tab-active');
                item.classList.add('text-[#555]');
            });

            // Aktifkan filter yang diklik.
            this.classList.add('tab-active');
            this.classList.remove('text-[#555]');

            const filterValue = this.getAttribute('data-filter');

            // Tampilkan atau sembunyikan item galeri.
            galleryItems.forEach(function (item) {
                const category = item.getAttribute('data-category');

                if (filterValue === 'all' || category === filterValue) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});