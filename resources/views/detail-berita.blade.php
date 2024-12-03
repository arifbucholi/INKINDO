<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $berita->title }}</title>
    @php
        use Illuminate\Support\Str;
        $description = $berita->content ?? 'Default Description';
        $truncatedDescription = Str::words(strip_tags($description), 160, '...');
    @endphp
    <meta name="description" content="{{ $truncatedDescription }}">
    <meta name="keywords" content="{{ $berita->keywords ?? '' }}">

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
    <section class="hero-bg-berita-detail">
        {{-- <section> --}}
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
        <div class="hero-content container">
            <div class="text-content-2">
                {{-- <h1>Berita</h1> --}}
            </div>
        </div>
    </section>

    <section class="news-detail-section">
        <div class="news-detail-container container">
            <!-- Main Content -->
            <div class="news-main-content">
                <h1>{{ $berita->title }}</h1>
                <div class="news-meta">
                    <span class="date">
                        <img src="../img/icon/calendar.png" alt="" width="16px">
                        @php
                            use Carbon\Carbon;
                            Carbon::setLocale('id');
                        @endphp
                        {{ Carbon::parse($berita->created_at)->translatedFormat('l, d F Y') }}
                    </span>
                    {{-- <span class="location">
                        <img src="../img/icon/map.png" alt="" width="16px"
                            style="filter: invert(100%) sepia(100%) saturate(1000%) hue-rotate(180deg);">
                        Kampus UINSA Gunung Anyar, Surabaya
                    </span> --}}
                </div>
                <img src="{{ asset('storage/' . $berita->image) }}" alt="Seminar Arsitektur" class="news-image">
                <p class="news-description">
                    {!! $berita->content !!}
                </p>
            </div>

            <!-- Sidebar -->
            <aside class="news-sidebar">
                <h3>Berita Lainnya</h3>
                @foreach ($beritaLainnya as $item)
                    <a href="{{ route('berita.detail', $item->id) }}">
                        <div class="news-sidebar-item">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Thumbnail" class="sidebar-thumbnail">
                            <!-- Ganti dengan path thumbnail yang sesuai -->
                            <div class="sidebar-content">
                                <h4>{{ $item->title }}</h4>
                                <span class="date">
                                    <img src="../img/icon/calendar.png" alt="" width="16px">
                                    {{ Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
                                    <!-- Format tanggal -->
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach
                {{-- <div class="news-sidebar-item">
                    <img src="../img/galeri/galeri3.png" alt="Thumbnail" class="sidebar-thumbnail">
                    <div class="sidebar-content">
                        <h4>INKINDO Jatim Gelar Pelatihan Dasar Penyusunan Laporan dan Neraca Keuangan</h4>
                        <span class="date">
                            <img src="../img/icon/calendar.png" alt="" width="16px">
                            23-08-2024
                        </span>
                    </div>
                </div> --}}
                <!-- Add more items as needed -->
            </aside>
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
                <a href="https://m.facebook.com/dppinkindo.jawatimur.1/" target="_blank" rel="noopener noreferrer"><img
                        src="../img/icon/facebook.png" alt=""></a>
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
