// ========================================
// 1. KIRIM PESAN MELALUI WHATSAPP
// ========================================

document.addEventListener('DOMContentLoaded', function () {
    const tombolWhatsapp = document.getElementById('kirimWhatsapp');

    if (tombolWhatsapp) {
        tombolWhatsapp.addEventListener('click', function () {
            const nama = document.getElementById('nama')?.value.trim() || '';
            const email = document.getElementById('email')?.value.trim() || '';
            const telepon = document.getElementById('telepon')?.value.trim() || '';
            const pesan = document.getElementById('pesan')?.value.trim() || '';

            // Nomor WhatsApp tujuan: format internasional tanpa + dan tanpa 0 di depan.
            const nomorWa = '6281318986448';

            const isiPesan = `Halo, saya ingin menghubungi Anda:

Nama: ${nama}
Email: ${email}
No. Telepon: ${telepon}
Pesan: ${pesan}`;

            const url = `https://wa.me/${nomorWa}?text=${encodeURIComponent(isiPesan)}`;

            window.open(url, '_blank', 'noopener,noreferrer');
        });
    }
});


// ========================================
// 2. NAVIGASI FORMULIR PENDAFTARAN
// ========================================

function nextStep(step) {
    // Pastikan nomor step berada dalam rentang 1 sampai 3.
    if (!Number.isInteger(Number(step)) || step < 1 || step > 3) {
        return;
    }

    // Sembunyikan semua konten step.
    document.querySelectorAll('.step').forEach(function (el) {
        el.classList.add('hidden');
    });

    // Tampilkan konten step yang dipilih.
    const currentStep = document.getElementById('step-' + step);

    if (currentStep) {
        currentStep.classList.remove('hidden');
    }

    // Reset semua indikator step dan garis penghubung.
    for (let i = 1; i <= 3; i++) {
        const dot = document.getElementById('dot-' + i);

        if (dot) {
            dot.classList.remove('bg-primary', 'text-white');
            dot.classList.add('bg-gray-300', 'text-gray-600');
        }

        const line = document.getElementById('line-' + (i - 1));

        if (line) {
            line.classList.remove('bg-primary');
            line.classList.add('bg-gray-300');
        }
    }

    // Aktifkan indikator sesuai step yang dipilih.
    for (let i = 1; i <= step; i++) {
        const dot = document.getElementById('dot-' + i);

        if (dot) {
            dot.classList.add('bg-primary', 'text-white');
            dot.classList.remove('bg-gray-300', 'text-gray-600');
        }

        const line = document.getElementById('line-' + (i - 1));

        if (line) {
            line.classList.add('bg-primary');
            line.classList.remove('bg-gray-300');
        }
    }
}


// ========================================
// 3. MENUTUP POPUP POSTER
// ========================================

function closePopup() {
    const popup = document.getElementById('popupPoster');

    if (popup) {
        popup.style.display = 'none';
    }
}