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
    <section class="hero-bg-berita">
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
                <h1 class="slide-left">Berita</h1>
                <p class="slide-left">Selamat datang di halaman berita INKINDO Jawa Timur! Kami menyajikan berita
                    terbaru dan teraktual
                    seputar dunia konstruksi, teknik, dan jasa konsultasi di wilayah Jawa Timur. Dapatkan wawasan
                    mendalam, tips, serta informasi penting yang mendukung pertumbuhan bisnis Anda di sektor jasa
                    konstruksi dan konsultansi teknik.</p>
            </div>
        </div>
    </section>

    <section class="news-section">
        {{-- <div class="search-container">
            <i class="search-icon"><img src="../img/icon/search.png" alt="" width="20px"></i>
            <form action="{{ route('news.search') }}" method="GET">
                <input type="text" name="query" placeholder="Cari berita" required>
            </form>
        </div> --}}

        <div class="container">
            <div class="news-grid">
                <!-- Example of a news card -->
                @php
                    use Carbon\Carbon;
                @endphp

                @php
                    Carbon::setLocale('id');
                @endphp
                @foreach ($news as $berita)
                    <div class="news-card slide-left">
                        <a href="{{ route('berita.detail', $berita->id) }}">
                            <img src="{{ asset('storage/' . $berita->image) }}" alt="News Image">
                            <div class="news-content">
                                <h3>{{ $berita->title }}</h3>
                                <p class="news-date">
                                    <i class="fa fa-calendar"></i>

                                    {{ Carbon::parse($berita->created_at)->translatedFormat('l, d F Y') }}
                                </p>
                                <p class="news-description">
                                    {{ Str::limit(strip_tags($berita->content), 150, '...') }}
                                </p>

                            </div>
                        </a>
                    </div>
                @endforeach

                {{-- <div class="news-card">
                    <img src="../img/berita/berita2.png" alt="News Image">
                    <div class="news-content">
                        <h3>INKINDO Jawa Timur Dukung UINSA Gelar ARCHIFEST 2024: “Seminar Arsitektur”</h3>
                        <p class="news-date">
                            <i class="fa fa-calendar"></i> 12-09-2024
                        </p>
                        <p class="news-description">
                            Surabaya, ARCHIFEST 2024 telah sukses digelar di Kampus UINSA Gunung...
                        </p>
                    </div>
                </div>
                <div class="news-card">
                    <img src="../img/berita/berita3.png" alt="News Image">
                    <div class="news-content">
                        <h3>INKINDO Jawa Timur Dukung UINSA Gelar ARCHIFEST 2024: “Seminar Arsitektur”</h3>
                        <p class="news-date">
                            <i class="fa fa-calendar"></i> 12-09-2024
                        </p>
                        <p class="news-description">
                            Surabaya, ARCHIFEST 2024 telah sukses digelar di Kampus UINSA Gunung...
                        </p>
                    </div>
                </div>
                <div class="news-card">
                    <img src="../img/berita/berita1.png" alt="News Image">
                    <div class="news-content">
                        <h3>INKINDO Jawa Timur Dukung UINSA Gelar ARCHIFEST 2024: “Seminar Arsitektur”</h3>
                        <p class="news-date">
                            <i class="fa fa-calendar"></i> 12-09-2024
                        </p>
                        <p class="news-description">
                            Surabaya, ARCHIFEST 2024 telah sukses digelar di Kampus UINSA Gunung...
                        </p>
                    </div>
                </div> --}}

                <!-- Add more news cards as needed -->
            </div>

            <!-- Pagination -->
            <div class="pagination">
                {{-- @if ($news->onFirstPage())
                    <button class="page-btn disabled">Previous</button>
                @else
                    <a href="{{ $news->previousPageUrl() }}" class="page-btn">Previous</a>
                @endif --}}

                @for ($i = 1; $i <= $news->lastPage(); $i++)
                    @if ($i == $news->currentPage())
                        <button class="page-btn active">{{ $i }}</button>
                    @else
                        <a href="{{ $news->url($i) }}" class="page-btn">{{ $i }}</a>
                    @endif
                @endfor

                {{-- @if ($news->hasMorePages())
                    <a href="{{ $news->nextPageUrl() }}" class="page-btn next">Next</a>
                @else
                    <button class="page-btn disabled">Next</button>
                @endif --}}
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

    <script>
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', function() {
                const faqItem = this.parentNode;
                faqItem.classList.toggle('active');
            });
        });
    </script>
</body>

</html>
