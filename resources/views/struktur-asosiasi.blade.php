<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struktur Organisasi</title>
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
        {{-- <div class="hero-content-2">
            <div class="text-content-2">
                <h1>Profil Perusahaan</h1>
                <p>INKINDO (Ikatan Nasional Konsultan Indonesia) adalah asosiasi yang mewadahi para profesional
                    konsultan di Indonesia.</p>
            </div>
        </div> --}}
        {{--
        <div id="sejarah-perusahaan" class="hero-content" style="display: none;">
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
        </div> --}}

        <div id="struktur-organisasi" class="hero-content-2">
            <div class="text-content-2">
                <h1 class="slide-left">Struktur Organisasi</h1>
                <div class="org-structure slide-left">
                    <button class="org-btn active pop-up-card" id="dpp-inkindo">DPP</button>
                    <button class="org-btn pop-up-card" id="dkp-inkindo">DKP</button>
                    <button class="org-btn pop-up-card" id="dpop-inkindo">DPOP</button>
                    <button class="org-btn pop-up-card" id="bpp-inkindo">BBP</button>
                    <button class="org-btn pop-up-card" id="kd-inkindo">KD</button>
                </div>
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


    <div id="content-container">
        <div class="image-content">
            <div id="image-dpp-inkindo" class="image-section" style="display: block;">
                <div class="content-section active">
                    {{-- <section class="container-2"> --}}
                    <h2>Dewan Pengurus Provinsi (DPP)</h2>
                    {{-- </section> --}}
                    <br>
                </div>
                <img src="../img/struktur/dpp.png" alt="DPP Structure">
            </div>
            <div id="image-dkp-inkindo" class="image-section" style="display: none;">
                <div class="content-section active">
                    {{-- <section class="container-2"> --}}
                    <h2>Dewan Kehormatan Provinsi (DKP)</h2>
                    {{-- </section> --}}
                    <br>
                </div>
                <img src="../img/struktur/dkp.png" alt="DKP Structure">
            </div>
            <div id="image-dpop-inkindo" class="image-section" style="display: none;">
                <div class="content-section active">
                    {{-- <section class="container-2"> --}}
                    <h2>Dewan Pertimbangan Organisasi Provinsi (DPOP)</h2>
                    {{-- </section> --}}
                    <br>
                </div>
                <img src="../img/struktur/dpop.png" alt="DPOP Structure">
            </div>
            <div id="image-bpp-inkindo" class="image-section" style="display: none;">
                <div class="content-section active">
                    {{-- <section class="container-2"> --}}
                    <h2>Badan-Badan Provinsi (BBP)</h2><br><br>
                    {{-- </section><br> --}}
                </div>
                {{-- <div class="container-2"> --}}
                <div class="margin-50">
                    <h3>BADAN SERTIFIKASI ANGGOTA PROVINSI</h3>
                    <img src="../img/struktur/bsap.png" alt="BSAP Structure">
                </div>
                <div class="margin-50">
                    <h3>BADAN PENJAMINAN MUTU</h3>
                    <img src="../img/struktur/bpm.png" alt="BPM Structure">
                </div>
                <div class="margin-50">
                    <h3>BADAN ADVOKASI DAN MEDIASI</h3>
                    <img src="../img/struktur/bam.png" alt="BAM Structure">
                </div>
                <div class="margin-50">
                    <h3>BADAN DIKLAT DAN PELATIHAN</h3>
                    <img src="../img/struktur/bdp.png" alt="BDP Structure">
                </div>
                <div class="margin-50">
                    <h3>BADAN PENGELOLA MEDIA DAN KOMUNIKASI</h3>
                    <img src="../img/struktur/bpmk.png" alt="BPMK Structure">
                </div>
                <div class="margin-50">
                    <h3>BADAN PENELITIAN DAN PENGABDIAN MASYARAKAT</h3>
                    <img src="../img/struktur/bppm.png" alt="BPPM Structure">
                </div>
                <div class="margin-50">
                    <h3>BADAN INOVASI DAN KONSULTAN KREATIF</h3>
                    <img src="../img/struktur/bikk.png" alt="BIKK Structure">
                </div>
                {{-- </div> --}}
            </div>
            <div id="image-kd-inkindo" class="image-section" style="display: none;">
                <div class="content-section active">
                    <h2>Koordinator Daerah (KD)</h2><br><br>
                </div>
                <div class="margin-50">
                    <h3>KOORDINATOR DAERAH
                        KABUPATEN JEMBER</h3>
                    <img src="../img/struktur/kd/jember.png" alt="Jember Structure">
                </div>
                <div class="margin-50">
                    <h3>KOORDINATOR DAERAH
                        KABUPATEN BANGKALAN, KABUPATEN SAMPANG,
                        KABUPATEN PAMEKASAN DAN KABUPATEN SUMENEP</h3>
                    <img src="../img/struktur/kd/madura.png" alt="Madura Structure">
                </div>
                <div class="margin-50">
                    <h3>KOORDINATOR DAERAH
                        KABUPATEN JOMBANG</h3>
                    <img src="../img/struktur/kd/jombang.png" alt="Jombang Structure">
                </div>
                <div class="margin-50">
                    <h3>KOORDINATOR DAERAH

                        KABUPATEN MADIUN, KOTA MADIUN, KABUPATEN MAGETAN,
                        KABUPTEN NGAWI DAN KABUPATEN PONOROGO</h3>
                    <img src="../img/struktur/kd/madiun.png" alt="Madiun Structure">
                </div>
                <div class="margin-50">
                    <h3>KOORDINATOR DAERAH
                        KABUPATEN KEDIRI, KOTA KEDIRI
                        DAN KABUPATEN NGANJUK</h3>
                    <img src="../img/struktur/kd/kediri.png" alt="Kediri Structure">
                </div>
                <div class="margin-50">
                    <h3>KOORDINATOR DAERAH

                        KABUPATEN BLITAR, KOTA BLITAR, KABUPATEN TULUNGAGUNG
                        DAN KABUPATENG TRENGGALEK</h3>
                    <img src="../img/struktur/kd/blitar.png" alt="Blitar Structure">
                </div>
                <div class="margin-50">
                    <h3>KOORDINATOR DAERAH
                        KABUPATEN BANYUWANGI, KABUPATEN SITUBONDO DAN
                        KABUPATEN BONDOWOSO</h3>
                    <img src="../img/struktur/kd/banyuwangi.png" alt="Banyuwangi Structure">
                </div>
                <div class="margin-50">
                    <h3>KOORDINATOR DAERAH
                        KABUPATEN MALANG, KOTA MALANG
                        DAN KOTA BATU</h3>
                    <img src="../img/struktur/kd/malang.png" alt="Malang Structure">
                </div>
                <div class="margin-50">
                    <h3>KOORDINATOR DAERAH
                        KABUPATEN. BOJONEGORO, KABUPATEN TUBAN,
                        KABUPATEN GRESIK DAN KABUPATEN LAMONGAN</h3>
                    <img src="../img/struktur/kd/bojonegoro.png" alt="Bojonegoro Structure">
                </div>
                <div class="margin-50">
                    <h3>KOORDINATOR DAERAH
                        KABUPATEN PROBOLINGGO, KOTA PROBOLINGGO,
                        KABUPATEN PASURUAN,KOTA PASURUAN DAN KABUPATEN LUMAJANG</h3>
                    <img src="../img/struktur/kd/probolinggo.png" alt="Probolinggo Structure">
                </div>
                <div class="margin-50">
                    <h3>KOORDINATOR DAERAH
                        KABUPATEN SIDOARJO, KOTA SURABAYA DAN KABUPATEN MOJOKERTO</h3>
                    <img src="../img/struktur/kd/sidoarjo.png" alt="Sidoarjo Structure">
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
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const buttons = document.querySelectorAll('.org-btn');
            const images = document.querySelectorAll('.image-section');

            buttons.forEach(button => {
                button.addEventListener('click', () => {
                    // Mengatur tombol aktif
                    buttons.forEach(btn => btn.classList.remove('active'));
                    button.classList.add('active');

                    // Mengatur tampilan gambar sesuai tombol yang diklik
                    const targetImageId = `image-${button.id}`;
                    images.forEach(image => {
                        image.style.display = image.id === targetImageId ? 'block' : 'none';
                    });
                });
            });
        });
    </script>
</body>

</html>
