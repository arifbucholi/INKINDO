const hamburgerMenu = document.getElementById('hamburger-menu');
const navMenu = document.getElementById('nav-menu');

hamburgerMenu.addEventListener('click', function() {
    navMenu.classList.toggle('active'); // Tambahkan atau hapus kelas 'active'

    if (navMenu.classList.contains('active')) {
        navMenu.style.visibility = 'visible'; // Tampilkan menu
    } else {
        // Delay sebelum menyembunyikan untuk memberi waktu pada transisi
        setTimeout(() => {
            navMenu.style.visibility = 'hidden'; // Sembunyikan menu setelah transisi
        }, 500); // Waktu delay yang sama dengan durasi transisi
    }
});

// Ambil elemen hamburger
const hamburgerBars = document.querySelectorAll(".hamburger .bar", "header");

// Fungsi untuk mengecek posisi scroll
function checkScroll() {
    if (window.scrollY > 1) {
        hamburgerBars.forEach(bar => {
            bar.classList.add("scrolled");
        });
    } else {
        hamburgerBars.forEach(bar => {
            bar.classList.remove("scrolled");
        });
    }
}

// Event listener untuk mendeteksi scroll
window.addEventListener("scroll", checkScroll);

window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    const scrollPosition = window.scrollY;

    if (scrollPosition > 1) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

document.querySelectorAll('.faq-question').forEach(item => {
    item.addEventListener('click', function() {
        const faqItem = this.parentNode;
        faqItem.classList.toggle('active');
    });
});

window.addEventListener('DOMContentLoaded', () => {
    const currentUrl = window.location.pathname; // Mendapatkan URL halaman saat ini

    // Menandai link aktif berdasarkan URL
    document.querySelectorAll('#nav-menu ul li a').forEach(link => {
        if (link.getAttribute('href') === currentUrl || (link.getAttribute('href') === '/' && currentUrl === '/')) {
            link.classList.add('active');
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(".pop-up-card");

    function checkScroll() {
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        const offset = 50;  // Offset yang sama untuk desktop dan mobile

        cards.forEach((card, index) => {
            const cardTop = card.getBoundingClientRect().top;

            // Jika card masuk viewport
            if (cardTop < windowHeight - offset) {
                const delay = `${index * 0.3}s`;  // Delay yang sama untuk desktop dan mobile
                card.style.setProperty('--delay', delay); // Atur delay dinamis
                card.classList.add("pop-up-active");
            } else {
                card.classList.remove("pop-up-active"); // Hapus jika card tidak terlihat
            }
        });
    }

    window.addEventListener("scroll", function () {
        requestAnimationFrame(checkScroll);  // Efek scroll halus
    });

    checkScroll();  // Cek saat halaman dimuat
});


document.addEventListener("DOMContentLoaded", function () {
    const slideLeftCards = document.querySelectorAll(".slide-left");
    const slideRightCards = document.querySelectorAll(".slide-right");
    const popUpCards = document.querySelectorAll(".pop-up");

    function checkScroll() {
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
        const offset = 100; // Offset untuk deteksi scroll

        // Menangani card dengan animasi slide in left
        slideLeftCards.forEach((card) => {
            const cardTop = card.getBoundingClientRect().top;
            if (cardTop < windowHeight - offset && !card.classList.contains("slide-left-active")) {
                card.classList.add("slide-left-active");  // Menambahkan animasi jika card belum beranimasi
            }
        });

        // Menangani card dengan animasi slide in right
        slideRightCards.forEach((card) => {
            const cardTop = card.getBoundingClientRect().top;
            if (cardTop < windowHeight - offset && !card.classList.contains("slide-right-active")) {
                card.classList.add("slide-right-active");  // Menambahkan animasi jika card belum beranimasi
            }
        });

        // Menangani card dengan animasi pop-up
        popUpCards.forEach((card) => {
            const cardTop = card.getBoundingClientRect().top;
            // Tambahkan delay 0.5 detik untuk pop-up
            if (cardTop < windowHeight - offset && !card.classList.contains("pop-up-active")) {
                setTimeout(() => {
                    card.classList.add("pop-up-active");  // Menambahkan animasi pop-up setelah delay
                }, 100);  // Delay 0.5 detik
            }
        });
    }

    window.addEventListener("scroll", function () {
        requestAnimationFrame(checkScroll);  // Untuk scroll yang lebih halus
    });

    checkScroll();  // Cek saat halaman dimuat
});






