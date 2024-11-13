<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="image/png" href="../admin/images/logos/inkindo-kotak.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
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
                <h1>Sejarah Perusahaan</h1>
                <p>INKINDO (Ikatan Nasional Konsultan Indonesia) adalah asosiasi yang mewadahi para profesional
                    konsultan di Indonesia.</p>
            </div>
        </div>

        {{-- <div id="sejarah-perusahaan" class="hero-content" style="display: none;">
            <div class="text-content-2">
                <h1>Sejarah Perusahaan</h1>
                <p>Sejarah INKINDO yang berdedikasi dalam meningkatkan kualitas konsultan di Indonesia.</p>
            </div>
        </div>

        <div id="visi-misi" class="hero-content" style="display: none;">
            <div class="text-content-2">
                <h1>Visi dan Misi</h1>
                <p>Visi dan misi INKINDO dalam dunia konsultansi Indonesia.</p>
            </div>
        </div>

        <div id="kode-etik" class="hero-content" style="display: none;">
            <div class="text-content-2">
                <h1>Kode Etik</h1>
                <p>Kode etik dan pedoman profesional untuk anggota INKINDO.</p>
            </div>
        </div>

        <div id="struktur-organisasi" class="hero-content" style="display: none;">
            <div class="text-content-2">
                <h1>Struktur Organisasi</h1>
                <div class="org-structure">
                    <button class="org-btn active">DPP</button>
                    <button class="org-btn">DKP</button>
                    <button class="org-btn">DPOP</button>
                    <button class="org-btn">BBP</button>
                    <button class="org-btn">KD</button>
                </div>
            </div>
        </div> --}}



    </section>

    <div class="card-container">
        <a class="no-underline" href="/profil">
            <div class="card">
                <div class="icon">
                    <img src="../img/icon/profil-perusahaan.png" alt="Profil Icon">
                </div>
                <h3>Profil <br> Perusahaan</h3>
            </div>
        </a>
        <a class="no-underline" href="/sejarah">
            <div class="card" data-content="sejarah-perusahaan">
                <div class="icon">
                    <img src="../img/icon/sejarah-perusahaan.png" alt="Sejarah Icon">
                </div>
                <h3>Sejarah Perusahaan</h3>
            </div>
        </a>
        <a class="no-underline" href="/visi-misi">
            <div class="card" data-content="visi-misi">
                <div class="icon">
                    <img src="../img/icon/visi-misi.png" alt="Visi Misi Icon">
                </div>
                <h3>Visi dan <br> Misi</h3>
            </div>
        </a>
        <a class="no-underline" href="/kode-etik">
            <div class="card" data-content="kode-etik">
                <div class="icon">
                    <img src="../img/icon/kode-etik.png" alt="Kode Etik Icon">
                </div>
                <h3>Kode <br> Etik</h3>
            </div>
        </a>
        <a class="no-underline" href="/struktur-organisasi">
            <div class="card" data-content="struktur-organisasi">
                <div class="icon">
                    <img src="../img/icon/struktur-organisasi.png" alt="Struktur Organisasi Icon">
                </div>
                <h3>Struktur Organisasi</h3>
            </div>
        </a>
    </div>


    <div id="content-container">
        <!-- Konten untuk Pendaftaran Anggota -->
        <section class="sejarah-section">
            <div class="sejarah-image">
                <img src="../img/galeri/sejarah.png" alt="INKINDO Jawa Timur">
            </div>
            <div class="sejarah-content">
                <h2>Awal Mula Berdirinya dan Tujuan Inkindo Jawa Timur</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur. Turpis laoreet sed id dictum suscipit in risus in egestas.
                    Et nec sit bibendum orci at sit. Malesuada faucibus cursus et varius. Consequat lectus eget id elit
                    arcu ut etiam. Et malesuada ipsum eu fusce volutpat scelerisque placerat congue congue. Volutpat id
                    dignissim semper tempus vitae. Dignissim vitae et convallis nascetur enim.
                </p>
                <ul>
                    <li>Lorem ipsum dolor sit amet consectetur. Turpis laoreet sed id dictum suscipit in risus in
                        egestas.</li>
                    <li>Et nec sit bibendum orci at sit. Malesuada faucibus cursus et varius. Consequat lectus eget id
                        elit arcu ut etiam.</li>
                    <li>Et malesuada ipsum eu fusce volutpat scelerisque placerat congue congue. Volutpat id dignissim
                        semper tempus vitae.</li>
                </ul>
            </div>
        </section>

        <section class="timeline-section">
            <h2 class="timeline-title">Sejarah Kepemimpinan Inkindo Jawa Timur</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-line"></div>
                    <div class="timeline-year">1982</div>
                    <div class="timeline-content">
                        <img src="../img/galeri/imam.png" alt="Imam Soedrajad" class="timeline-photo">
                        <div class="timeline-info">
                            <h2>Masa Bhakti 1982 - 1987</h2>
                            <p>Imam Soedrajad</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-line"></div>
                    <div class="timeline-year">1987</div>
                    <div class="timeline-content">
                        <img src="../img/galeri/imam.png" alt="Ir. H Muchayat" class="timeline-photo">
                        <div class="timeline-info">
                            <h2>Masa Bhakti 1987 - 1990</h2>
                            <p>Ir. H Muchayat</p>
                        </div>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-line"></div>
                    <div class="timeline-year">1990</div>
                    <div class="timeline-content">
                        <img src="../img/galeri/imam.png" alt="Ir. H Hariwardono S." class="timeline-photo">
                        <div class="timeline-info">
                            <h2>Masa Bhakti 1990 - 1997</h2>
                            <p>Ir. H Hariwardono S.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>


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
        window.addEventListener("scroll", function() {
            const timelineItems = document.querySelectorAll(".timeline-item");

            timelineItems.forEach((item) => {
                const line = item.querySelector(".timeline-line");

                // Periksa apakah elemen sudah diberi kelas "animated"
                if (!line.classList.contains("animated")) {
                    const rect = item.getBoundingClientRect();
                    const isVisible = rect.top < window.innerHeight * 0.75 && rect.bottom > 0;

                    // Tambahkan animasi hanya jika elemen terlihat
                    if (isVisible) {
                        line.classList.add("active", "animated"); // "animated" untuk penanda
                    }
                }
            });
        });
    </script>

</body>

</html>
