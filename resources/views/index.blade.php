<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INKINDO Jawa Timur</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="image/png" href="../admin/images/logos/inkindo-kotak.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
</head>

<body>
    <section class="hero-bg">
        <header>
            <div class="container">
                <div class="logo-nav">
                    <img src="../img/logo/inkindo2.png" alt="INKINDO Jawa Timur Logo" class="logo">

                </div>
                <nav id="nav-menu">
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Alur</a></li>
                        <li><a href="#">Layanan</a></li>
                        <li><a href="#">Berita</a></li>
                        <li><a href="#">Info Lelang</a></li>
                        <li><a href="#">Anggota</a></li>
                    </ul>
                </nav>
                <button class="hamburger" id="hamburger-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>

            </div>
        </header>




        <!-- Main Hero Content -->
        <div class="hero-content container">
            <div class="text-content">
                <h1>Kami Menaungi Ribuan Konsultan untuk Mewujudkan Proyek Impian Anda</h1>
                <p>Gabung dengan INKINDO untuk akses ke jaringan konsultan profesional yang terpercaya. Daftar mudah,
                    solusi tepat untuk kesuksesan proyek Anda!</p>
                <div class="buttons">
                    <a href="#" class="btn yellow">Selengkapnya</a>
                    <a href="#" class="btn red">Daftar Sekarang!</a>
                </div>
            </div>
            <div class="illustration">
                <img src="img/illustration/laptop.png" width="500" alt="Illustration">
            </div>
        </div>
    </section>

    <section class="slider">
        <div class="slider-track">
            <!-- Tambahkan elemen gambar logo yang sudah kamu punya -->
            <img src="../img/mitra/goodsense.png" alt="Goodsense">
            <img src="../img/mitra/avian.png" alt="Avian Brands">
            <img src="../img/mitra/kulitbatu.png" alt="Kulit Batu">
            <img src="../img/mitra/daikin.png" alt="Daikin">
            <img src="../img/mitra/kencana.png" alt="Kencana">
            <img src="../img/mitra/lg.png" alt="LG">
            <!-- Ulangi elemen gambar agar animasi infinity terlihat -->
            <img src="../img/mitra/goodsense.png" alt="Goodsense">
            <img src="../img/mitra/avian.png" alt="Avian Brands">
            <img src="../img/mitra/kulitbatu.png" alt="Kulit Batu">
            <img src="../img/mitra/daikin.png" alt="Daikin">
            <img src="../img/mitra/kencana.png" alt="Kencana">
            <img src="../img/mitra/lg.png" alt="LG">
        </div>
    </section>


    <section class="benefits-section">
        <div class="container">
            <h2>Benefit Menjadi Bagian <br>INKINDO</h2>
            <div class="benefits-grid">
                <!-- Benefit Item 1 (Left) -->
                <div class="benefit-item">
                    <div class="circle">
                        <img src="../img/icon/jaringan.png" alt="Network Icon" class="benefit-icon">
                    </div>
                    <h3>Jaringan Konsultan Terpercaya dan Berpengalaman</h3>
                </div>
                <!-- Benefit Item 2 (Center, Lowered) -->
                <div class="benefit-item center-item">
                    <div class="circle">
                        <img src="../img/icon/akses.png" alt="Training Icon" class="benefit-icon">
                    </div>
                    <h3>Akses ke Pelatihan dan Sertifikasi Terkini</h3>
                </div>
                <!-- Benefit Item 3 (Right) -->
                <div class="benefit-item">
                    <div class="circle">
                        <img src="../img/icon/mediasi.png" alt="Law Icon" class="benefit-icon">
                    </div>
                    <h3>Mediasi dan Update Regulasi Hukum Jasa Konsultan</h3>
                </div>
            </div>
        </div>
        {{-- <div class="curved-bottom">
            <svg viewBox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
                <path fill="#fff" d="M0,0 Q720,250 1440,0 L1440,320 L0,320 Z"></path>
            </svg>
        </div> --}}

        <!-- Spacer (optional) -->
        {{-- <div class="spacer"></div> --}}
    </section>

    <section>
        <div class="pelatihan-content container">
            <div class="text-content text-black">
                <h1>Pelatihan</h1>
                <p>INKINDO hadir dengan pelatihan terbaru! Tingkatkan kompetensi Anda bersama pelatihan INKINDO. Jangan
                    lewatkan kesempatan mengikuti pelatihan menarik dari INKINDO.</p>
                <div class="buttons">
                    <a href="#" class="btn yellow">Selengkapnya</a>
                </div>
            </div>
            <div class="illustration">
                <img src="img/illustration/diskusi.png" width="400" alt="Illustration">
            </div>
        </div>
    </section>

    <section class="get-started">
        <div class="get-content container">
            <div class="illustration-get">
                <img src="img/illustration/phone.png" width="400" height="450" alt="Illustration">
            </div>
            <div class="text-content text-white">
                <h1>Get ready to Start</h1>
                <p>Lorem ipsum dolor sit amet consectetur. Orci tincidunt non sed tincidunt nunc condimentum ut. Euismod
                    ipsum commodo diam et odio leo orci id mollis. (CafeIN)</p>
                <a href="#" class="cafein-google-play-button">
                    <img src="img/icon/google-play.png" alt="Google Play">
                    <span>Google Play</span>
                </a>
            </div>
        </div>
    </section>

    <section class="testimonial-section">
        <div class="container">
            <h2 class="section-title">Persebaran perusahaan INKINDO Jawa Timur</h2>

            <div id="map"></div>
        </div>
    </section>

    {{-- <section class="testimonial-section">
        <div class="container">
            <h2 class="section-title">What our Client say!</h2>
            <div class="testimonial-carousel">
                <!-- Testimonial 1 -->
                <div class="testimonial-item">
                    <div class="client-photo">
                        <img src="https://via.placeholder.com/70" alt="Client Photo">
                    </div>
                    <div class="client-name">Nama Orang</div>
                    <div class="client-company">PT. ABC</div>
                    <div class="testimonial-text">
                        Lorem ipsum dolor sit amet consectetur. Pharetra purus in nisi tellus fringilla quam.
                    </div>
                </div>

                <!-- Testimonial 2 (Center Spotlight) -->
                <div class="testimonial-item center">
                    <div class="client-photo">
                        <img src="https://via.placeholder.com/70" alt="Client Photo">
                    </div>
                    <div class="client-name">Nama Orang</div>
                    <div class="client-company">PT. ABC</div>
                    <div class="testimonial-text">
                        Lorem ipsum dolor sit amet consectetur. Pharetra purus in nisi tellus fringilla quam.
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-item">
                    <div class="client-photo">
                        <img src="https://via.placeholder.com/70" alt="Client Photo">
                    </div>
                    <div class="client-name">Nama Orang</div>
                    <div class="client-company">PT. ABC</div>
                    <div class="testimonial-text">
                        Lorem ipsum dolor sit amet consectetur. Pharetra purus in nisi tellus fringilla quam.
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="faq-section">
        <div class="container">

            <h2 class="faq-title">Frequently Ask Question?</h2>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Pertanyaan 1</span>
                    <span class="plus-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Lorem ipsum dolor sit amet consectetur. Vehicula scelerisque quis ipsum scelerisque tellus lectus
                        amet sagittis. Egestas ante aenean aliquam molestie urna quis odio dictum eu.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Pertanyaan 2</span>
                    <span class="plus-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;
                        Pellentesque
                        sollicitudin dapibus augue, at posuere nisi pretium a.</p>
                </div>
            </div>

            <div class="faq-item">
                <div class="faq-question">
                    <span>Pertanyaan 3</span>
                    <span class="plus-icon">+</span>
                </div>
                <div class="faq-answer">
                    <p>Mauris placerat, lorem eget ultricies suscipit, nisl erat tempor nisl, sed sodales neque purus
                        nec
                        tortor. Curabitur ut erat quis augue euismod feugiat.</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-logo">
            <img src="../img/logo/inkindo2.png" alt="INKINDO Jawa Timur">
            <p class="footer-description">
                Ikatan Nasional Konsultan Indonesia (INKINDO) merupakan Asosiasi Perusahaan Jasa Konsultan di Indonesia
                khususnya di Jawa Timur yang didirikan pada tanggal 20 Juni 1979 di Jakarta.
            </p>
            <div class="social-icons">
                <a href="#"><img src="../img/icon/facebook.png" alt=""></a>
                <a href="#"><img src="../img/icon/instagram.png" alt=""></a>
                <a href="#"><img src="../img/icon/youtube.png" alt=""></a>
            </div>
        </div>

        <div class="footer-links">
            <h3>Link</h3>
            <a href="#">Informasi Publik</a>
        </div>

        <div class="footer-contact">
            <h3>Kontak</h3>
            <p><img src="../img/icon/map.png" alt="">Jl. Rungkut Asri Utara No.VII / 7, Kali Rungkut,
                Surabaya, Jawa
                Timur 60132</p>
            <p><img src="../img/icon/phone.png" alt="">(031) 8702310</p>
            <p><img src="../img/icon/envelope.png" alt="">inkindojatim@blabla.com</p>
            <p><img src="../img/icon/globe.png" alt="">inkindojawatimur.org</p>
        </div>

        <div class="footer-copyright">
            <p>@Lorem ipsum dolor sit amet consectetur.</p>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div>
    </footer>



    <script src="../js/script.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>

    </script>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var initialZoom = 8; // Simpan tingkat zoom asal
        var map = L.map('map', {
            zoom: initialZoom,
            center: [-7.6740, 112.7631], // Koordinat pusat di Jawa Timur
            maxZoom: 18,
            minZoom: 3,
            noWrap: true // menonaktifkan wrapping untuk menghindari garis
        });

        // Tambahkan layer peta OpenStreetMap
        L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>'
        }).addTo(map);

        // Data perusahaan per provinsi
        var perusahaanData = [
            { lat: -7.25, lng: 112.75, name: "Jawa Timur", jumlah: 600 },
            { lat: -8.58, lng: 114.14, name: "Banyuwangi", jumlah: 150 },
            { lat: -7.57, lng: 112.67, name: "Surabaya", jumlah: 1200 },
            { lat: -7.56, lng: 112.46, name: "Malang", jumlah: 300 }
            // Tambahkan data provinsi lainnya jika diperlukan
        ];

        // Menambahkan marker dan interaksi hover
        perusahaanData.forEach(function(provinsi) {
            var marker = L.marker([provinsi.lat, provinsi.lng]).addTo(map);
            marker.on('mouseover', function() {
                this.bindPopup('<strong>' + provinsi.name + '</strong><br>Jumlah Perusahaan: ' + provinsi.jumlah).openPopup();
            });

            // Menghapus popup saat mouse keluar
            marker.on('mouseout', function() {
                this.closePopup();
            });
        });
    </script>


</body>

</html>
