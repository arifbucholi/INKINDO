<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="image/png" href="../admin/images/logos/inkindo-kotak.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        .custom-card-section {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            padding: 50px 100px;
        }

        .custom-card {
            background-color: white;
            border: 1px solid #E0E0E0;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition : box-shadow 0.3s ease;
            text-align: left;
        }

        .custom-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .custom-card-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 15px;
        }

        .custom-card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #333;
        }

        .custom-card-subtitle {
            font-size: 1rem;
            color: #666;
            margin-bottom: 10px;
        }

        .custom-card-description {
            font-size: 0.9rem;
            color: #777;
            margin-bottom: 15px;
        }

        .custom-card-buttons {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 5px;
        }

        .custom-card-button {
            background-color: #E0E0E0;
            color: #333;
            border: none;
            border-radius: 24px;
            padding: 12px 22px;
            width: 50%;
            font-size: 0.85rem;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .custom-card-button img {
            margin-right: 5px;
            height: 16px;
        }

        .custom-card-button:hover {
            background-color: #ccc;
        }

        /* --------------------------------------------------------------------------------------- */

        .lc-learning-center {
            width: 90%;
            margin: auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        .lc-card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            padding: 20px;
        }

        .lc-card-header {
            display: flex;
            align-items: flex-start;
            gap: 20px;
        }

        .lc-logo {
            width: 270px;
            height: auto;
            border-radius: 8px;
        }

        .lc-info h2 {
            font-size: 24px;
            font-weight: bold;
            margin: 0;
        }

        .lc-category {
            color: #888;
            font-size: 18px;
        }

        .lc-description {
            color: #555;
            margin: 10px 0;
        }

        .lc-rating {
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .lc-stars {
            color: #FFD700;
            font-size: 20px;
        }

        .lc-rating-count {
            font-size: 14px;
            color: #888;
            margin-left: 8px;
        }

        .lc-btn-more {
            background-color: #E0E0E0;
            color: #000000;
            padding: 12px 24px;
            border: none;
            border-radius: 24px;
            cursor: pointer;
            margin-top: 15px;
            font-size: 16px;
            font-weight: bold
        }

        .lc-btn-more:hover {
            background-color: #ccc;
        }

        .lc-card-body h3 {
            font-size: 20px;
            margin: 20px 0 10px;
            font-weight: bold;
        }

        .lc-card-body p {
            color: #555;
        }

        .lc-card-body h4 {
            font-size: 18px;
            margin-top: 20px;
            font-weight: bold;
        }

        .lc-features {
    display: flex;
    flex-direction: column; /* Mengatur arah kolom untuk seluruh fitur */
    gap: 20px; /* Jarak antar fitur */
    margin-top: 10px;
}

.lc-feature-item {
    display: flex;
    flex-direction: row; /* Mengatur arah elemen dalam fitur */
    align-items: center; /* Memastikan gambar dan teks disejajarkan di tengah secara vertikal */
    text-align: left; /* Menyelaraskan teks ke kiri */
}

.lc-feature-item img {
    width: 30px;
    height: auto;
    margin-right: 10px; /* Jarak antara gambar dan teks */
}

.lc-feature-item p {
    font-size: 14px;
    color: #333;
    margin: 0;
}

    </style>
</head>

<body>
    <section class="hero-bg-polos">
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
        <!-- Main Hero Content -->
        <div class="hero-content-2">
            <div class="text-content-2">
                <h1>Produk</h1>
                <p>Inkindo menawarkan dua jenis layanan utama: Konstruksi dan Non-Konstruksi. Masing-masing layanan
                    dikelompokkan secara khusus untuk memenuhi kebutuhan Anda, dengan penjelasan detail di bawah ini.
                </p>
            </div>
        </div>
    </section>

    <div class="card-container">
        <a class="no-underline" href="/produk">
            <div class="card">
                <div class="icon">
                    <img src="../img/icon/produk.png" alt="Produk Icon">
                </div>
                <h3>Produk</h3>
            </div>
        </a>
        <a class="no-underline" href="/konstruksi">
            <div class="card">
                <div class="icon">
                    <img src="../img/icon/konstruksi.png" alt="Konstruksi Icon">
                </div>
                <h3>Konstruksi</h3>
            </div>
        </a>
        <a class="no-underline" href="/non-konstruksi">
            <div class="card">
                <div class="icon">
                    <img src="../img/icon/non-konstruksi.png" alt="Non-Konstruksi Icon">
                </div>
                <h3>Non Konstruksi</h3>
            </div>
        </a>
    </div>


    <section class="custom-card-section">
        <div class="custom-card">
            <img src="../img/aplikasi/cafein.png" alt="CafeIN Logo" class="custom-card-image">
            <h3 class="custom-card-title">CafeIN</h3>
            <p class="custom-card-subtitle">Aplikasi Mobile</p>
            <p class="custom-card-description">
                Lorem ipsum dolor sit amet consectetur. Eget magna viverra vestibulum elit augue turpis felis porttitor
                eget.
            </p>
            <div class="custom-card-buttons">
                <button class="custom-card-button">Selengkapnya</button>
                <button class="custom-card-button">
                    <img src="../img/icon/google-play.png" alt="Google Play Icon"> Google Play
                </button>
            </div>
        </div>

        <div class="custom-card">
            <img src="../img/aplikasi/learningcenter.png" alt="Learning Center Logo" class="custom-card-image">
            <h3 class="custom-card-title">Learning Center</h3>
            <p class="custom-card-subtitle">Website</p>
            <p class="custom-card-description">
                Lorem ipsum dolor sit amet consectetur. Eget magna viverra vestibulum elit augue turpis felis porttitor
                eget.
            </p>
            <div class="custom-card-buttons">
                <button class="custom-card-button">Selengkapnya</button>
                <button class="custom-card-button">Pelatihan</button>
            </div>
        </div>

        <div class="custom-card">
            <img src="../img/aplikasi/simmap.png" alt="SIMMAP Logo" class="custom-card-image">
            <h3 class="custom-card-title">SIMMAP</h3>
            <p class="custom-card-subtitle">Aplikasi Mobile</p>
            <p class="custom-card-description">
                Lorem ipsum dolor sit amet consectetur. Eget magna viverra vestibulum elit augue turpis felis porttitor
                eget.
            </p>
            <div class="custom-card-buttons">
                <button class="custom-card-button">Selengkapnya</button>
                <button class="custom-card-button">
                    <img src="../img/icon/google-play.png" alt="Google Play Icon"> Google Play
                </button>
            </div>
        </div>

    </section>

    <section>
        <section class="lc-learning-center">
            <div class="lc-card">
                <div class="lc-card-header">
                    <img src="../img/aplikasi/cafein2.png" alt="INKINDO Logo" class="lc-logo">
                    <div class="lc-info">
                        <h2>Learning Center</h2>
                        <p class="lc-category">Website</p>
                        <p class="lc-description">
                            Lorem ipsum dolor sit amet consectetur. Eget magna viverra vestibulum elit augue turpis
                            felis porttitor eget. Odio non urna hendrerit id sem habitant aenean.
                        </p>
                        <div class="lc-rating">
                            <span class="lc-stars">⭐⭐⭐⭐⭐</span>
                            <span class="lc-rating-count">(20 Pelihat)</span>
                        </div>
                        <button class="lc-btn-more">Selengkapnya</button>
                    </div>
                </div>

                <div class="lc-card-body">
                    <h3>Apa Itu Website Learning Center?</h3>
                    <p>Website Pelatihan adalah platform yang disediakan oleh Inkindo Jawa Timur untuk anggota yang
                        ingin mengikuti pelatihan yang telah diselenggarakan. Selain itu, website ini juga dapat
                        digunakan oleh calon narasumber yang berminat untuk berkontribusi sebagai pembicara dalam
                        pelatihan yang diadakan.</p>

                    <h4>Kelebihan Website Learning Center</h4>
                    <ul>
                        <li>Ketika anggota atau user mendaftar dan pelatihan telah selesai maka materi tetap tersimpan
                            dan user dapat bertanya pada narasumber terkait pelatihan yang telah di bawakan sebelumnya.
                        </li>
                    </ul>

                    <h4>Fitur Website Pelatihan</h4>
                    <div class="lc-features">
                        <div class="lc-feature-item">
                            <img src="../img/icon/regulasi.png" alt="Regulasi Icon">
                            <p>Regulasi</p>
                        </div>
                        <div class="lc-feature-item">
                            <img src="../img/icon/media.png" alt="Media Icon">
                            <p>Media</p>
                        </div>
                        <div class="lc-feature-item">
                            <img src="../img/icon/power-share.png" alt="Power Share Icon">
                            <p>Power Share</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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

</body>

</html>
