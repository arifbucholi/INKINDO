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
        <div class="hero-content-2">
            <div class="text-content-2">
                <h1 class="slide-left">Daftar Anggota</h1>
                <p class="slide-left">Kami menyediakan layanan pendaftaran anggota, perpanjangan keanggotaan, dan
                    pengajuan SBU secara
                    online. Proses mudah, cepat, dan transparan untuk mendukung kesuksesan bisnis Anda.</p>
            </div>
        </div>
    </section>

    <div class="card-container">
        <div class="card pop-up-card" data-content="pendaftaran-anggota">
            <div class="icon">
                <img src="../img/icon/pendaftaran-anggota.png" alt="Registrasi Icon">
            </div>
            <h3>Pendaftaran Anggota</h3>
        </div>
        <div class="card pop-up-card" data-content="perpanjangan-anggota">
            <div class="icon">
                <img src="../img/icon/perpanjangan-anggota.png" alt="Perpanjangan Icon">
            </div>
            <h3>Perpanjangan Anggota</h3>
        </div>
        <div class="card pop-up-card" data-content="pendaftaran-sbu">
            <div class="icon">
                <img src="../img/icon/pendaftaran-sbu.png" alt="SBU Icon">
            </div>
            <h3>Pendaftaran SBU</h3>
        </div>
    </div>



    <div id="content-container">
        <!-- Konten untuk Pendaftaran Anggota -->
        <div id="pendaftaran-anggota" class="content-section active">
            <h1>Pendaftaran Anggota</h1>
            <br>
            <section class="steps-section">
                <div class="step">
                    <div class="image slide-left">
                        <img src="../img/illustration/registrasi.png" alt="Registrasi">
                    </div>
                    <div class="text slide-right">
                        <h2>1. Registrasi</h2>
                        <p>Buat akun baru dengan mengisi formulir pendaftaran.</p>
                    </div>
                </div>
                <div class="step-reverse">
                    <div class="text slide-left">
                        <h2>2. Input Data</h2>
                        <p>Lengkapi data diri Anda secara lengkap dan benar.</p>
                    </div>
                    <div class="image slide-right">
                        <img src="../img/illustration/inputData.png" alt="Input Data">
                    </div>
                </div>
                <div class="step">
                    <div class="image slide-left">
                        <img src="../img/illustration/notifikasi.png" alt="Notifikasi">
                    </div>
                    <div class="text slide-right">
                        <h2>3. Notifikasi</h2>
                        <p>Kami akan mengirimkan email konfirmasi ke alamat email Anda.</p>
                    </div>
                </div>
                <div class="step-reverse">
                    <div class="text slide-left">
                        <h2>4. Pembayaran</h2>
                        <p>Lakukan pembayaran iuran keanggotaan melalui metode yang tersedia.</p>
                    </div>
                    <div class="image slide-right">
                        <img src="../img/illustration/pembayaran.png" alt="Pembayaran">
                    </div>
                </div>
                <div class="step">
                    <div class="image slide-left">
                        <img src="../img/illustration/cetak.png" alt="Cetak">
                    </div>
                    <div class="text slide-right">
                        <h2>5. Cetak</h2>
                        <p>Setelah pembayaran terkonfirmasi, Anda bisa mencetak kartu anggota secara mandiri.</p>
                    </div>
                </div>
            </section>
        </div>

        <!-- Konten untuk Perpanjangan Anggota -->
        <div id="perpanjangan-anggota" class="content-section" style="display: none;">
            <h1>Perpanjangan Anggota</h1>
            <br>
            <section class="steps-section">
                <!-- Konten untuk Perpanjangan Anggota bisa berbeda sesuai kebutuhan -->
                <div class="step">
                    <div class="image slide-left">
                        <img src="../img/illustration/login.png" alt="Login">
                    </div>
                    <div class="text slide-right">
                        <h2>1. Login</h2>
                        <p>Masuk ke akun Anda menggunakan email dan kata sandi.</p>
                    </div>
                </div>
                <div class="step-reverse">
                    <div class="text slide-left">
                        <h2>2. Status Anggota</h2>
                        <p>Periksa status keanggotaan Anda untuk memastikan waktu perpanjangan.</p>
                    </div>
                    <div class="image slide-right">
                        <img src="../img/illustration/statusAnggota.png" alt="Status Anggota">
                    </div>
                </div>
                <div class="step">
                    <div class="image slide-left">
                        <img src="../img/illustration/perpanjangan.png" alt="Perpanjangan">
                    </div>
                    <div class="text slide-right">
                        <h2>3. Perpanjangan</h2>
                        <p>Pilih opsi perpanjangan keanggotaan dan lengkapi formulir.</p>
                    </div>
                </div>
                <div class="step-reverse">
                    <div class="text slide-left">
                        <h2>4. Notifikasi</h2>
                        <p>Anda akan menerima email konfirmasi mengenai permohonan perpanjangan.</p>
                    </div>
                    <div class="image slide-right">
                        <img src="../img/illustration/notifikasi.png" alt="Notifikasi">
                    </div>
                </div>
                <div class="step">
                    <div class="image slide-left">
                        <img src="../img/illustration/pembayaran.png" alt="Pembayaran">
                    </div>
                    <div class="text slide-right">
                        <h2>5. Pembayaran</h2>
                        <p>Lakukan pembayaran iuran tahunan melalui metode yang tersedia.</p>
                    </div>
                </div>
                <div class="step-reverse">
                    <div class="text slide-left">
                        <h2>6. Cetak</h2>
                        <p>Setelah pembayaran terkonfirmasi, Anda bisa mencetak kartu anggota yang baru.</p>
                    </div>
                    <div class="image slide-right">
                        <img src="../img/illustration/cetak.png" alt="Cetak">
                    </div>
                </div>
                <!-- Tambahkan konten lainnya di sini jika diperlukan -->
            </section>
        </div>

        <!-- Konten untuk Pendaftaran SBU -->
        <div id="pendaftaran-sbu" class="content-section" style="display: none;">
            <h1>Pendaftaran SBU</h1>
            <br>
            <section class="steps-section">
                <!-- Konten untuk Pendaftaran SBU bisa berbeda sesuai kebutuhan -->
                <div class="step">
                    <div class="image">
                        <img src="../img/illustration/anggotaInkindo.png" alt="Anggota INKINDO">
                    </div>
                    <div class="text">
                        <h2>1. Anggota INKINDO</h2>
                        <p>Untuk mengajukan Sertifikasi Badan Usaha, harus terlebih dahulu menjadi anggota INKINDO.</p>
                    </div>
                </div>
                <div class="step-reverse">
                    <div class="text">
                        <h2>2. Berkas Permohonan</h2>
                        <p>Isi berkas melalui situs web OSS sebagai langkah awal dan memilih kategori usaha kecil atau
                            usaha besar.</p>
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
                        <p>Selanjutnya anda dapat melengkapi dokumen sesuai petunjuk dari situs website OSS.</p>
                    </div>
                </div>
                <div class="step-reverse">
                    <div class="text">
                        <h2>4. Verifikasi Data</h2>
                        <p>Tahap berikutnya adalah menunggu verifikasi dari pihak OSS terkait dokumen yang telah
                            diajukan.</p>
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
                        <p>Setelah diverifikasi, Anda bisa melanjutkan ke tahap pembayaran mellaui metode yang tersedia.
                        </p>
                    </div>
                </div>
                <div class="step-reverse">
                    <div class="text">
                        <h2>6. Penilaian Asesor</h2>
                        <p>Penilaian oleh asesor, memiliki 2 hasil berhasil atau gagal, jika berhasil anda dapat
                            melanjutkan ke tahap cetak kartu namun jika gagal maka harus mengulang dari tahap awal.</p>
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
                        <p>Jika disetujui, sertifikat bisa langsung dicetak, jika ditolak, harus mengulang dari awal.
                        </p>
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

    <script>
        // Pilih semua elemen dengan kelas 'card'
        const cards = document.querySelectorAll('.card');

        // Pilih semua elemen dengan kelas 'content-section'
        const contentSections = document.querySelectorAll('.content-section');

        // Tambahkan event listener pada setiap card
        cards.forEach(card => {
            card.addEventListener('click', () => {
                // Ambil ID konten yang akan ditampilkan
                const targetContentId = card.getAttribute('data-content');

                // Sembunyikan semua konten
                contentSections.forEach(section => {
                    section.style.display = 'none';
                });

                // Tampilkan konten yang sesuai
                const targetContent = document.getElementById(targetContentId);
                if (targetContent) {
                    targetContent.style.display = 'block';
                }
            });
        });
    </script>

</body>

</html>
