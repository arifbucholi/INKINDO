<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>SEO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        {{-- integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMm7rQx5Fd7b4ikx9gB8V4m3M3GlnA7Hhn0Vbx"  --}} crossorigin="anonymous">

    <link rel="shortcut icon" type="image/png" href="../admin/images/logos/inkindo-kotak.png" />
    <link rel="stylesheet" href="../admin/css/styles.min.css" />

</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-simplebar>
                <div class="d-flex mb-4 align-items-center justify-content-between">
                    <a href="index.html" class="text-nowrap logo-img ms-0 ms-md-1">
                        <img src="../admin/images/logos/inkindo2.png " width="180" alt="">
                        {{-- <img src="../admin/images/logos/inkindo-kotak.png" width="30" alt=""> --}}
                    </a>
                    <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                        <i class="ti ti-x fs-8"></i>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="mb-4 pb-2">
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
                            <span class="hide-menu">Beranda</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link primary-hover-bg" href="{{ route('admin.index') }}"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-primary rounded-3">
                                    <i class="ti ti-layout-grid fs-7 text-primary"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
                            <span class="hide-menu">Pengelolaan</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link warning-hover-bg" href="{{ route('admin.news.index') }}"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-warning rounded-3">
                                    <i class="ti ti-news fs-7 text-warning"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Berita</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link danger-hover-bg" href="{{ route('admin.layanan') }}"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-danger rounded-3">
                                    <i class="ti ti-article fs-7 text-danger"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Layanan</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link success-hover-bg"
                                href="{{ route('admin.anggota.index') }}" aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-success rounded-3">
                                    <i class="ti ti-users fs-7 text-success"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Anggota</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link primary-hover-bg"
                                href="{{ route('admin.messages.index') }}" aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-primary rounded-3">
                                    <i class="ti ti-message-circle fs-7 text-primary"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Testimoni</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link indigo-hover-bg" href="{{ route('admin.seo.index') }}"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-indigo rounded-3">
                                    <i class="ti ti-seo fs-7 text-indigo"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">SEO</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link warning-hover-bg" href="{{ route('faq.index') }}"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-warning rounded-3">
                                    <i class="ti ti-question-mark fs-7 text-warning"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">FAQ</span>
                            </a>
                        </li>
                        {{-- <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link warning-hover-bg"
                                href="{{ route('admin.messages.index') }}" aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-warning rounded-3">
                                    <i class="ti ti-phone fs-7 text-warning"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Kontak</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link danger-hover-bg"
                                href="{{ route('admin.messages.index') }}" aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-danger rounded-3">
                                    <i class="ti ti-info-circle fs-7 text-danger"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">About Us</span>
                            </a>
                        </li> --}}
                        {{-- <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
                            <span class="hide-menu">UI Componenst</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link warning-hover-bg" href="./ui-buttons.html"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-warning rounded-3">
                                    <i class="ti ti-article fs-7 text-warning"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Buttons</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link danger-hover-bg" href="./ui-alerts.html"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-danger rounded-3">
                                    <i class="ti ti-alert-circle fs-7 text-danger"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Alerts</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link success-hover-bg" href="./ui-card.html"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-success rounded-3">
                                    <i class="ti ti-cards fs-7 text-success"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Card</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link primary-hover-bg" href="./ui-forms.html"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-primary rounded-3">
                                    <i class="ti ti-file-description fs-7 text-primary"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Forms</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link indigo-hover-bg" href="./ui-typography.html"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-indigo rounded-3">
                                    <i class="ti ti-typography fs-7 text-indigo"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Typography</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
                            <span class="hide-menu">Auth</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link warning-hover-bg" href="./authentication-login.html"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-warning rounded-3">
                                    <i class="ti ti-login fs-7 text-warning"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Login</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link danger-hover-bg" href="./authentication-register.html"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-danger rounded-3">
                                    <i class="ti ti-user-plus fs-7 text-danger"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Register</span>
                            </a>
                        </li>
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
                            <span class="hide-menu">Extra</span>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link success-hover-bg" href="./icon-tabler.html"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-success rounded-3">
                                    <i class="ti ti-mood-happy fs-7 text-success"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Icons</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link sidebar-link primary-hover-bg" href="./sample-page.html"
                                aria-expanded="false">
                                <span class="aside-icon p-2 bg-light-primary rounded-3">
                                    <i class="ti ti-aperture fs-7 text-primary"></i>
                                </span>
                                <span class="hide-menu ms-2 ps-1">Sample Page</span>
                            </a>
                        </li> --}}
                    </ul>
                    {{-- <div class="pb-3 options text-nowrap">
                        <div class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-5"></i>
                            <span class="hide-menu">More options</span>
                        </div>

                        <ul class="sidebar-list">
                            <li class="sidebar-list-item">
                                <i class="ti ti-circle text-primary fs-4"></i>
                                <span class="hide-menu ms-2">Applications</span>
                            </li>
                            <li class="sidebar-list-item">
                                <i class="ti ti-circle text-danger fs-4"></i>
                                <span class="hide-menu ms-2">Form Options</span>
                            </li>
                            <li class="sidebar-list-item">
                                <i class="ti ti-circle text-warning fs-4"></i>
                                <span class="hide-menu ms-2">Table Variations</span>
                            </li>
                            <li class="sidebar-list-item">
                                <i class="ti ti-circle text-success fs-4"></i>
                                <span class="hide-menu ms-2">Charts Selection</span>
                            </li>
                            <li class="sidebar-list-item">
                                <i class="ti ti-circle text-indigo fs-4"></i>
                                <span class="hide-menu ms-2">Widgets</span>
                            </li>
                        </ul>
                    </div> --}}


                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!--  Sidebar End -->
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            <header class="app-header">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item d-block d-xl-none">
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                                <i class="ti ti-bell-ringing"></i>
                                <div class="notification bg-primary rounded-circle"></div>
                            </a>
                        </li> --}}
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <span>Halo, {{ Auth::user()->username }}...</span>
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ti ti-user-circle fs-7"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        {{-- <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-user fs-6"></i>
                                            <p class="mb-0 fs-3">My Profile</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-mail fs-6"></i>
                                            <p class="mb-0 fs-3">My Account</p>
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="d-flex align-items-center gap-2 dropdown-item">
                                            <i class="ti ti-list-check fs-6"></i>
                                            <p class="mb-0 fs-3">My Task</p>
                                        </a> --}}
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            <button type="submit"
                                                class="btn btn-outline-primary mx-3 mt-2 d-block shadow-none">
                                                Logout
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!--  Header End -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="mb-0 fw-bold">Pengaturan SEO</h2>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addSeoModal">
                                Tambah SEO
                            </button>
                        </div>

                        <!-- Modal Tambah SEO -->
                        <div class="modal fade" id="addSeoModal" tabindex="-1" aria-labelledby="addSeoModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addSeoModalLabel">Tambah SEO</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="addSeoForm" method="POST" action="{{ route('admin.seo.store') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="page_type" class="form-label">Page Type</label>
                                                <select class="form-control" id="page_type" name="page_type"
                                                    required>
                                                    @foreach (['home', 'profil', 'alur', 'layanan', 'berita'] as $type)
                                                        <option value="{{ $type }}"
                                                            {{ in_array($type, $usedPageTypes) ? 'disabled' : '' }}>
                                                            {{ ucfirst($type) }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="seo_title" class="form-label">Judul SEO</label>
                                                <input type="text" class="form-control" id="seo_title"
                                                    name="seo_title" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="meta_description" class="form-label">Meta
                                                    Deskripsi</label>
                                                <textarea class="form-control" id="meta_description" name="meta_description" rows="3"></textarea>
                                            </div>
                                            <div class="mb-3">
                                                <label for="keywords" class="form-label">Keywords</label>
                                                <input type="text" class="form-control" id="keywords"
                                                    name="keywords">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive" data-simplebar>
                            <table class="table table-borderless align-middle text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Tipe Halaman</th>
                                        <th scope="col">Judul SEO</th>
                                        <th scope="col">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pages as $page)
                                        <tr>
                                            <td>{{ ucfirst($page->page_type) }}</td>
                                            <td>{{ $page->seo_title }}</td>
                                            <td>
                                                <button class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#editSeoModal{{ $page->id }}">
                                                    <i class="ti ti-edit"></i>
                                                </button>

                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deleteSeoModal{{ $page->id }}"
                                                    data-id="{{ $page->id }}"
                                                    data-name="{{ $page->seo_title }}">
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                @foreach ($pages as $page)
                    <!-- Modal Edit SEO -->
<div class="modal fade" id="editSeoModal{{ $page->id }}" tabindex="-1"
    aria-labelledby="editSeoModalLabel{{ $page->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit SEO</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('admin.seo.update', $page->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="page_type" class="form-label">Tipe Halaman</label>
                        <select class="form-select" id="page_type" name="page_type" required>
                            <option value="home"
                                {{ $page->page_type === 'home' ? 'selected' : (in_array('home', $usedPageTypes) ? 'disabled' : '') }}>
                                Home
                            </option>
                            <option value="profil"
                                {{ $page->page_type === 'profil' ? 'selected' : (in_array('profil', $usedPageTypes) ? 'disabled' : '') }}>
                                Profil
                            </option>
                            <option value="alur"
                                {{ $page->page_type === 'alur' ? 'selected' : (in_array('alur', $usedPageTypes) ? 'disabled' : '') }}>
                                Alur
                            </option>
                            <option value="layanan"
                                {{ $page->page_type === 'layanan' ? 'selected' : (in_array('layanan', $usedPageTypes) ? 'disabled' : '') }}>
                                Layanan
                            </option>
                            <option value="berita"
                                {{ $page->page_type === 'berita' ? 'selected' : (in_array('berita', $usedPageTypes) ? 'disabled' : '') }}>
                                Berita
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="seo_title" class="form-label">Judul SEO</label>
                        <input type="text" class="form-control" id="seo_title" name="seo_title"
                            value="{{ $page->seo_title }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="meta_description" class="form-label">Meta Deskripsi</label>
                        <textarea class="form-control" id="meta_description" name="meta_description"
                            rows="3">{{ $page->meta_description }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="keywords" class="form-label">Keywords</label>
                        <input type="text" class="form-control" id="keywords" name="keywords"
                            value="{{ $page->keywords }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>


                    <!-- Modal Konfirmasi Hapus -->
                    <div class="modal fade" id="deleteSeoModal{{ $page->id }}" tabindex="-1"
                        aria-labelledby="deleteSeoModalLabel{{ $page->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hapus Pengaturan SEO?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus pengaturan SEO
                                        <strong>{{ $page->seo_title }}</strong>?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <form method="POST" action="{{ route('admin.seo.destroy', $page->id) }}"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <script src="../admin/libs/jquery/dist/jquery.min.js"></script>
        <script src="../admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../admin/js/sidebarmenu.js"></script>
        <script src="../admin/js/app.min.js"></script>
        <script src="../admin/libs/simplebar/dist/simplebar.js"></script>
        <script>
            function previewBarcode(event) {
                const file = event.target.files[0];
                console.log('File selected:', file); // Debugging
                const reader = new FileReader();

                reader.onload = function(e) {
                    const preview = document.getElementById('barcodePreview');
                    preview.src = e.target.result; // Set source dari reader
                    preview.style.display = 'block'; // Tampilkan gambar
                    console.log('Preview set to:', e.target.result); // Debugging
                };

                reader.onerror = function() {
                    console.error('Error reading file:', reader.error); // Menampilkan kesalahan jika ada
                };

                if (file) {
                    reader.readAsDataURL(file); // Membaca file sebagai URL data
                } else {
                    console.log('No file selected.'); // Debugging
                }
            }
        </script>




        {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function confirmDelete(messageId) {
            Swal.fire({
                title: 'Yakin ingin menghapus?',
                text: "Data testimoni yang dihapus tidak bisa dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Submit form delete setelah konfirmasi
                    document.getElementById(`deleteForm${messageId}`).submit();
                }
            });
        }
    </script> --}}
</body>

</html>
