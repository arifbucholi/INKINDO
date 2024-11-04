<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
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
        <div id="profil-perusahaan" class="content-section active">
            <section class="steps-section">
                <p>Sejarah</p>
            </section>
        </div>

        <!-- Konten untuk Perpanjangan Anggota -->
        <div id="sejarah-perusahaan" class="content-section">
            <section class="steps-section">
                <!-- Konten untuk Perpanjangan Anggota bisa berbeda sesuai kebutuhan -->
                <div class="step">
                    <div class="image">
                        <img src="../img/illustration/login.png" alt="Login">
                    </div>
                    <div class="text">
                        <h2>1. Login</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Id donec tellus facilisi ut. Molestie ornare ut non
                            scelerisque. Non in lacus proin scelerisque ultricies risus egestas. Mi proin nunc massa
                            risus.</p>
                    </div>
                </div>
                <div class="step-reverse">
                    <div class="text">
                        <h2>2. Status Anggota</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Id donec tellus facilisi ut. Molestie ornare ut non
                            scelerisque. Non in lacus proin scelerisque ultricies risus egestas. Mi proin nunc massa
                            risus.</p>
                    </div>
                    <div class="image">
                        <img src="../img/illustration/statusAnggota.png" alt="Status Anggota">
                    </div>
                </div>
                <div class="step">
                    <div class="image">
                        <img src="../img/illustration/perpanjangan.png" alt="Perpanjangan">
                    </div>
                    <div class="text">
                        <h2>3. Perpanjangan</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Id donec tellus facilisi ut. Molestie ornare ut non
                            scelerisque. Non in lacus proin scelerisque ultricies risus egestas. Mi proin nunc massa
                            risus.</p>
                    </div>
                </div>
                <div class="step-reverse">
                    <div class="text">
                        <h2>4. Notifikasi</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Id donec tellus facilisi ut. Molestie ornare ut non
                            scelerisque. Non in lacus proin scelerisque ultricies risus egestas. Mi proin nunc massa
                            risus.</p>
                    </div>
                    <div class="image">
                        <img src="../img/illustration/notifikasi.png" alt="Notifikasi">
                    </div>
                </div>
                <div class="step">
                    <div class="image">
                        <img src="../img/illustration/pembayaran.png" alt="Pembayaran">
                    </div>
                    <div class="text">
                        <h2>5. Pembayaran</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Id donec tellus facilisi ut. Molestie ornare ut non
                            scelerisque. Non in lacus proin scelerisque ultricies risus egestas. Mi proin nunc massa
                            risus.</p>
                    </div>
                </div>
                <div class="step-reverse">
                    <div class="text">
                        <h2>6. Cetak</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Id donec tellus facilisi ut. Molestie ornare ut non
                            scelerisque. Non in lacus proin scelerisque ultricies risus egestas. Mi proin nunc massa
                            risus.</p>
                    </div>
                    <div class="image">
                        <img src="../img/illustration/cetak.png" alt="Cetak">
                    </div>
                </div>
                <!-- Tambahkan konten lainnya di sini jika diperlukan -->
            </section>
        </div>

        <!-- Konten untuk Pendaftaran SBU -->
        <div id="pendaftaran-sbu" class="content-section" style="display: none;">
            <section class="steps-section">
                <!-- Konten untuk Pendaftaran SBU bisa berbeda sesuai kebutuhan -->
                <div class="step">
                    <div class="image">
                        <img src="../img/illustration/anggotaInkindo.png" alt="Anggota INKINDO">
                    </div>
                    <div class="text">
                        <h2>1. Anggota INKINDO</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Id donec tellus facilisi ut. Molestie ornare ut non
                            scelerisque. Non in lacus proin scelerisque ultricies risus egestas. Mi proin nunc massa
                            risus.</p>
                    </div>
                </div>
                <div class="step-reverse">
                    <div class="text">
                        <h2>2. Berkas Permohonan</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Id donec tellus facilisi ut. Molestie ornare ut non
                            scelerisque. Non in lacus proin scelerisque ultricies risus egestas. Mi proin nunc massa
                            risus.</p>
                    </div>
                    <div class="image">
                        <img src="../img/illustration/berkasPermohonan.png" alt="Berkas Permohonan">
                    </div>
                </div>
                <div class="step">
                    <div class="image">
                        <img src="../img/illustration/inputDataOss.png" alt="Input Data di OSS">
                    </div>
                    <div class="text">
                        <h2>3. Input Data di OSS</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Id donec tellus facilisi ut. Molestie ornare ut non
                            scelerisque. Non in lacus proin scelerisque ultricies risus egestas. Mi proin nunc massa
                            risus.</p>
                    </div>
                </div>
                <div class="step-reverse">
                    <div class="text">
                        <h2>4. Verifikasi Data</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Id donec tellus facilisi ut. Molestie ornare ut non
                            scelerisque. Non in lacus proin scelerisque ultricies risus egestas. Mi proin nunc massa
                            risus.</p>
                    </div>
                    <div class="image">
                        <img src="../img/illustration/verifikasiData.png" alt="Verifikasi Data">
                    </div>
                </div>
                <div class="step">
                    <div class="image">
                        <img src="../img/illustration/pembayaran.png" alt="Pembayaran">
                    </div>
                    <div class="text">
                        <h2>5. Pembayaran</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Id donec tellus facilisi ut. Molestie ornare ut non
                            scelerisque. Non in lacus proin scelerisque ultricies risus egestas. Mi proin nunc massa
                            risus.</p>
                    </div>
                </div>
                <div class="step-reverse">
                    <div class="text">
                        <h2>6. Penilaian Asesor</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Id donec tellus facilisi ut. Molestie ornare ut non
                            scelerisque. Non in lacus proin scelerisque ultricies risus egestas. Mi proin nunc massa
                            risus.</p>
                    </div>
                    <div class="image">
                        <img src="../img/illustration/penilaianAsesor.png" alt="Penilaian Asesor">
                    </div>
                </div>
                <div class="step">
                    <div class="image">
                        <img src="../img/illustration/cetak.png" alt="Cetak">
                    </div>
                    <div class="text">
                        <h2>7. Cetak</h2>
                        <p>Lorem ipsum dolor sit amet consectetur. Id donec tellus facilisi ut. Molestie ornare ut non
                            scelerisque. Non in lacus proin scelerisque ultricies risus egestas. Mi proin nunc massa
                            risus.</p>
                    </div>
                </div>
                <!-- Tambahkan konten lainnya di sini jika diperlukan -->
            </section>
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
