<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $seo->seo_title ?? 'Default Title' }}</title>
    <meta name="description" content="{{ $seo->meta_description ?? 'Default Description' }}">
    <meta name="keywords" content="{{ $seo->keywords ?? '' }}">

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
                <h1 class="slide-left">Profil Asosiasi</h1>
                <p class="slide-left">INKINDO (Ikatan Nasional Konsultan Indonesia) adalah asosiasi yang mewadahi para
                    profesional
                    konsultan di Indonesia.</p>
            </div>
        </div>

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

    <section class="youtube-section">
        <div class="video-container">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/7w2gD6Abh4Q?si=m4I69oh5R5_ZpBe_"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
    </section>
    <br>

    <section>
        <div class="pelatihan-content container">
            <div class="text-content text-black slide-left">
                <h1>Tentang Inkindo Jawa Timur</h1>
                <p>INKINDO Jawa Timur adalah asosiasi yang mewadahi para konsultan di bidang teknik,
                    konstruksi, dan perencanaan di wilayah Jawa Timur. Asosiasi ini merupakan bagian dari INKINDO
                    Nasional dan didirikan untuk meningkatkan profesionalisme, melindungi kepentingan, serta
                    memfasilitasi kerja sama antaranggota dalam mendukung pembangunan daerah.</p>
            </div>
            <div class="illustration slide-right">
                <img src="img/illustration/rumah.png" width="400" alt="Illustration">
            </div>
        </div>
    </section>

    <section class="dpp-profile-section">
        <div class="dpp-profile-container">
            <div class="dpp-profile-image slide-left">
                <img src="../img/galeri/ketua.png" alt="Ketua DPP Jawa Timur" />
            </div>
            <div class="dpp-profile-content slide-right">
                <h3 class="dpp-profile-title">KETUA DPP JAWA TIMUR 2022–2026</h3>
                <p class="dpp-profile-description">
                    Selamat datang di website INKINDO Jawa Timur. Website yang memberikan gambaran informasi dan
                    dinamika kegiatan Inkindo Jawa Timur. INKINDO (Ikatan Nasional Konsultan Indonesia) Jawa Timur
                    adalah asosiasi badan usaha (perusahaan) Jasa Konsultan yang berada di Provinsi Jawa Timur sebagai
                    reprentasi INKINDO yang ada di Nasional. Inkindo Jawa Timur berdiri sejak 1982 dan pada saat ini
                    tercatat lebih dari 1000 anggota. Anggota INKINDO Jawa Timur tersebar di 37 kabupaten dan kota di
                    Provinsi Jawa Timur baik sebagai konsultan konstruksi maupun konsultan non-konstrusi.
                    <br><br>
                    INKINDO Jawa Timur adalah bagian dari stakeholder pembangunan di Propinsi Jawa Timur dan Nasional
                    baik sektor konstruksi maupun nonkontruksi. Sebagai Asosiasi dengan anggota para pelaku jasa
                    konsultan, INKINDO mempunyai peran yang sangat strategis dalam pembangunan. INKINDO terlibat dalam
                    aspek perencanaan, pelaksanaan, pengawasan, monitong-evaluasi serta pelatihan pengembangan kapasitas
                    SDM dan kelembagaaan dalam pembangunan baik di tingkat daerah maupun nasional.
                    <br><br>
                    "Dalam negara yang kuat, ada konsultan yang hebat - Peter Frans". INKINDO Jatim menyadari, SDM
                    adalah aset utama bagi perusahaan dan bangsa. INKINDO Jatim mendorong agar SDM di Propinsi Jawa
                    Timur mampu memberikan kontribusi bagi ketahanan dan kemandirian Bangsa Indonesia yang
                    berkelanjutan. Kami bisa, Kami Lebih Baik, Salam INKINDO Jawa Timur, Jaya, Jaya, Jaya.

                </p>
                <p class="dpp-profile-name">
                    <strong>Ir. Irwan Susilo, ST., MT., IPM.</strong><br />
                    Ketua Umum DPN INKINDO 2022–2026
                </p>
            </div>
        </div>
    </section>

    <section class="dpp-map">
        <div class="map-container">
            <h1 class="map-title">Alamat Sekretariat Provinsi</h1>
            <div class="map-wrapper">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.2666367867246!2d112.77019417387508!3d-7.32391867202156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fae7ef0883ab%3A0xf0fa3894b216e50d!2sINKINDO%20Jawa%20Timur!5e0!3m2!1sen!2sid!4v1731467992675!5m2!1sen!2sid"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
