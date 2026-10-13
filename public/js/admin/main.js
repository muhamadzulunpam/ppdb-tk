document.addEventListener('DOMContentLoaded', function () {

    // ========================================
    // 1. MENAMPILKAN TANGGAL HARI INI
    // ========================================

    const elemenTanggal = document.getElementById('tanggal-hari-ini');

    if (elemenTanggal) {
        const tanggal = new Date();

        const namaHari = [
            'Minggu', 'Senin', 'Selasa', 'Rabu',
            'Kamis', 'Jumat', 'Sabtu'
        ];

        const namaBulan = [
            'Januari', 'Februari', 'Maret', 'April',
            'Mei', 'Juni', 'Juli', 'Agustus',
            'September', 'Oktober', 'November', 'Desember'
        ];

        const hari = namaHari[tanggal.getDay()];
        const tanggalHari = tanggal.getDate();
        const bulan = namaBulan[tanggal.getMonth()];
        const tahun = tanggal.getFullYear();

        elemenTanggal.textContent =
            `Hari ini: ${hari}, ${tanggalHari} ${bulan} ${tahun}`;
    }


    // ========================================
    // 2. NAVBAR ACTIVE LINK
    // ========================================

    const navLinks = document.querySelectorAll('nav a');

    navLinks.forEach(function (link) {
        link.addEventListener('click', function () {
            navLinks.forEach(function (item) {
                item.classList.remove('active');
            });

            this.classList.add('active');
        });
    });


    // ========================================
    // 3. MOBILE MENU TOGGLE
    // ========================================

    const menuButton = document.getElementById('menuButton');
    const mobileMenu = document.getElementById('mobileMenu');

    if (menuButton && mobileMenu) {
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

        // Tutup menu setelah tautan diklik.
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
    // 4. GALLERY FILTER
    // ========================================

    const galleryFilters = document.querySelectorAll('.gallery-filter');
    const galleryItems = document.querySelectorAll('.gallery-item');

    galleryFilters.forEach(function (filter) {
        filter.addEventListener('click', function () {
            // Reset semua tombol filter.
            galleryFilters.forEach(function (item) {
                item.classList.remove('tab-active');
                item.classList.add('text-[#555]');
            });

            // Aktifkan tombol yang dipilih.
            this.classList.add('tab-active');
            this.classList.remove('text-[#555]');

            const filterValue = this.getAttribute('data-filter');

            // Filter item galeri berdasarkan kategori.
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