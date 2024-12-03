<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anggota</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="image/png" href="../admin/images/logos/inkindo-kotak.png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <section class="hero-bg-anggota">
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
                <h1 class="slide-left">Anggota</h1>
                <p class="slide-left">INKINDO Jawa Timur kini menaungi badan usaha di seluruh wilayah Jawa Timur. Ini
                    menunjukkan dedikasi kami dalam mendukung konsultan Indonesia, khususnya di Jawa Timur, dengan
                    memperluas jaringan, membuka peluang proyek, dan memudahkan pengembangan karir di industri
                    konsultasi.
                </p>
            </div>
        </div>
    </section>

    <section class="custom-table-section">
        {{-- <div class="search-container">
            <i class="search-icon"><img src="../img/icon/search.png" alt="" width="20px"></i>
            <!-- Search icon on the left -->
            <input type="text" placeholder="Cari kata kunci">
        </div> --}}

        <div class="custom-search-container">
            <div class="custom-action-icons">
                {{-- <a href="{{ route('anggota.print') }}">
                    <div class="icon-text-pair">
                        <img src="../img/icon/print.png" alt="Print" class="custom-icon" title="Print">
                        <p>Print</p>
                    </div>
                </a> --}}
                <a href="{{ route('anggota.downloadTemplate') }}">
                    <div class="icon-text-pair slide-right">
                        <img src="../img/icon/excel.png" alt="Excel" class="custom-icon" title="Excel">
                        <p>Excel</p>
                    </div>
                </a>
                {{-- <a href="{{ route('anggota.downloadPDF') }}">
                    <div class="icon-text-pair">
                        <img src="../img/icon/pdf.png" alt="PDF" class="custom-icon" title="PDF">
                        <p>PDF</p>
                    </div>
                </a> --}}
                <a href="{{ route('anggota.copy') }}">
                    <div class="icon-text-pair slide-right">
                        <img src="../img/icon/copy.png" alt="Copy" class="custom-icon" title="Copy">
                        <p>Copy</p>
                    </div>
                </a>
            </div>
        </div>

        <table class="custom-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Badan Usaha</th>
                    <th>Nomer KTA</th>
                    <th>Kualifikasi</th>
                    <th>Kota</th>
                    <th>Direktur</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($members as $index => $member)
                    <tr>
                        <td data-label="No">{{ $index + 1 }}</td>
                        {{-- <td data-label="Nama Badan Usaha">{{ $member->badan_hukum+$member->name }}</td> --}}
                        <td data-label="Nama Badan Usaha">{{ $member->badan_hukum . '. ' . $member->name }}</td>
                        <td data-label="Nomer KTA">{{ $member->nomor_anggota . '/P' . '/' . $member->jtm . '.JTM' }}
                        </td>
                        <td data-label="Kualifikasi">{{ $member->kualifikasi }}</td>
                        <td data-label="Kota">{{ $member->city }}</td>
                        <td data-label="Direktur">{{ $member->director }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
