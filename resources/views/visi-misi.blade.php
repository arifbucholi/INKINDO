<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi dan Misi</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="image/png" href="../admin/images/logos/inkindo-kotak.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W2PLGYJL7V"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-W2PLGYJL7V');
    </script>
</head>

<body>
    <section class="hero-bg-polos">
        <header>
            <div class="container">
                <div class="logo-nav">
                    <a href="/">
                        <img src="../img/logo/inkindo2.png" alt="INKINDO Jawa Timur Logo" class="logo">
                    </a>
                </div>
                <nav id="nav-menu">
                    <ul>
                        <li><a href="/profil">Profil</a></li>
                        <li><a href="/alur">Alur</a></li>
                        <li><a href="/produk">Layanan</a></li>
                        <li><a href="/berita">Berita</a></li>
                        <li><a href="https://lpse.lkpp.go.id/eproc4/lelang" target="_blank"
                                rel="noopener noreferrer">Info Lelang</a></li>
                        <li><a href="/anggota">Anggota</a></li>
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
                <h1 class="slide-left">Visi dan Misi</h1>
                <p class="slide-left">INKINDO Jawa Timur berkomitmen menjadi motor penggerak industri konsultansi,
                    dengan visi berperan
                    dalam pembangunan nasional dan daerah. Misi kami adalah memberdayakan badan usaha
                    melalui peningkatan kompetensi, akses proyek, dan dukungan inovasi</p>
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
            <div class="card pop-up-card">
                <div class="icon">
                    <img src="../img/icon/profil-perusahaan.png" alt="Profil Icon">
                </div>
                <h3>Profil <br> Asosiasi</h3>
            </div>
        </a>
        <a class="no-underline" href="/sejarah">
            <div class="card pop-up-card" data-content="sejarah-asosiasi">
                <div class="icon">
                    <img src="../img/icon/sejarah-perusahaan.png" alt="Sejarah Icon">
                </div>
                <h3>Sejarah Asosiasi</h3>
            </div>
        </a>
        <a class="no-underline" href="/visi-misi">
            <div class="card pop-up-card" data-content="visi-misi">
                <div class="icon">
                    <img src="../img/icon/visi-misi.png" alt="Visi Misi Icon">
                </div>
                <h3>Visi dan <br> Misi</h3>
            </div>
        </a>
        <a class="no-underline" href="/kode-etik">
            <div class="card pop-up-card" data-content="kode-etik">
                <div class="icon">
                    <img src="../img/icon/kode-etik.png" alt="Kode Etik Icon">
                </div>
                <h3>Kode <br> Etik</h3>
            </div>
        </a>
        <a class="no-underline" href="/struktur-asosiasi">
            <div class="card pop-up-card" data-content="struktur-asosiasi">
                <div class="icon">
                    <img src="../img/icon/struktur-organisasi.png" alt="Struktur Asosiasi Icon">
                </div>
                <h3>Struktur Asosiasi</h3>
            </div>
        </a>
    </div>

    <div id="content-container-visi-misi">
        <div class="content-section active slide-left">
            <div>
                <h2>Visi</h2>
            </div>
        </div>
        <div class="list-container slide-left">
            <div class="list-item">
                <div class="text">Menjunjung tinggi kehormatan, kemuliaan dan nama baik profesi konsultan
                    dalam hubungan kerja dengan pemberi tugas, sesama rekan konsultan dan masyarakat.</div>
            </div>
        </div>

        <br>
        <div class="content-section active slide-left">
            <div>
                <h2>Misi</h2>
            </div>
        </div>
        <div>
            <div class="list-container slide-left">
                <div class="list-item">
                    <div class="number">1.</div>
                    <div class="text">Inkindo Jatim sebagai learning organisation yang dinamis dan adaptif terhadap
                        perubahan peradaban.</div>
                </div>
                <div class="list-item">
                    <div class="number">2.</div>
                    <div class="text">Inkindo Jatim sebgai wadah komunikasi anggota dan salah satu pusat environment
                        jasa konstruksi khususnya di Jawa Timur.</div>
                </div>
                <div class="list-item">
                    <div class="number">3.</div>
                    <div class="text">Penegakan norma, etika dan aturan organisasi.</div>
                </div>
                <div class="list-item">
                    <div class="number">4.</div>
                    <div class="text">Menjunjung dan menjaga marwah organisasi.</div>
                </div>
                <div class="list-item">
                    <div class="number">5.</div>
                    <div class="text">Mendorong dan menjaga iklim usaha jasa konsultan yang kondusif.</div>
                </div>
                <div class="list-item">
                    <div class="number">6.</div>
                    <div class="text">Mendorong inovasi yang bermanfaat bagi masyarakat, berwawasan lingkungan serta
                        berkelanjutan.</div>
                </div>
                <div class="list-item">
                    <div class="number">7.</div>
                    <div class="text">Mendorong anggota dalam adaptasi terhadap perubahan peradaban melalui
                        transformasi digital.</div>
                </div>
                <div class="list-item">
                    <div class="number">8.</div>
                    <div class="text">Mitra strategis bagi pemerintah, dunia usaha atau mitra kerja, dunia akademik
                        serta masyarakat.</div>
                </div>
            </div>
        </div>
    </div>


    <footer>
        <div class="footer-logo">
            <img src="../img/logo/inkindo2.png" alt="INKINDO Jawa Timur">
            <p class="footer-description">
                Ikatan Nasional Konsultan Indonesia (INKINDO) merupakan Asosiasi Perusahaan Jasa Konsultan di Indonesia
                khususnya di Jawa Timur yang didirikan pada tanggal 20 Juni 1979 di Jakarta.
            </p>
            <div class="social-icons">
                <a href="https://m.facebook.com/dppinkindo.jawatimur.1/" target="_blank"
                    rel="noopener noreferrer"><img src="../img/icon/facebook.png" alt=""></a>
                <a href="https://www.instagram.com/inkindo.jatim?igsh=MTZrN3FidGJhemV5dA==" target="_blank"
                    rel="noopener noreferrer"><img src="../img/icon/instagram.png" alt=""></a>
                <a href="https://youtube.com/@inkindojawatimur8519" target="_blank" rel="noopener noreferrer"><img
                        src="../img/icon/youtube.png" alt=""></a>
            </div>
        </div>

        <div class="footer-links">
            <h3>Link</h3>
            <p><a href="/">Beranda</a></p>
            <p><a href="/profil">Profil</a></p>
            <p><a href="/alur">Alur</a></p>
            <p><a href="/produk">Layanan</a></p>
            <p><a href="/berita">Berita</a></p>
            <p><a href="https://lpse.lkpp.go.id/eproc4/lelang" target="_blank" rel="noopener noreferrer">Info
                    Lelang</a></p>
            <p><a href="/anggota">Anggota</a></p>
        </div>

        <div class="footer-contact">
            <h3>Kontak</h3>
            <p><img src="../img/icon/map.png" alt="">Jl. Rungkut Asri Utara No.VII / 7, Kali Rungkut,
                Surabaya, Jawa
                Timur 60132</p>
            <p><img src="../img/icon/phone.png" alt="">(031) 8702310</p>
            <p><img src="../img/icon/envelope.png" alt="">inkindojawatimur@gmail.com</p>
            <p><img src="../img/icon/globe.png" alt="">inkindojawatimur.org</p>
        </div>

        <div class="footer-copyright">
            {{-- <ul>
                @foreach ($cityData as $city => $count)
                    <li>{{ $city }}: {{ $count }} perusahaan</li>
                @endforeach
            </ul> --}}
            <p><?php echo '© ' . date('Y') . ' INKINDO Jawa Timur.'; ?></p>
            <a href="https://wa.me/6282141867036?text=Halo%20saya%20ingin%20bertanya%20tentang%20INKINDO"
                target="_blank" rel="noopener" class="whatsapp-float">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/5e/WhatsApp_icon.png" alt="WhatsApp" />
            </a>
        </div>
    </footer>



    <script src="../js/script.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
