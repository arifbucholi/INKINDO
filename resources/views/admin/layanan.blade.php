<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Layanan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMm7rQx5Fd7b4ikx9gB8V4m3M3GlnA7Hhn0Vbx" crossorigin="anonymous">

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
                        {{-- <img src="../admin/images/logos/dark-logo.svg" width="180" alt=""> --}}
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
                            <h2 class="mb-4">Layanan</h2>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addLayananModal">
                                Tambah Layanan
                            </button>
                        </div>

                        <!-- Tabel Layanan -->
                        <div class="table-responsive" data-simplebar>

                            <table class="table table-borderless align-middle text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nama Layanan</th>
                                        <th scope="col">Kode Layanan</th>
                                        <th scope="col">Kategori</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($layanan as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama_layanan }}</td>
                                            <td>{{ $item->kode_layanan }}</td>
                                            <td>{{ $item->layanan }}</td>
                                            <td>
                                                <!-- Tombol Edit Layanan -->
                                                <button class="btn btn-primary action" data-bs-toggle="modal"
                                                    data-bs-target="#editLayananModal-{{ $item->id }}">
                                                    <i class="ti ti-edit"></i>
                                                </button>
                                                <!-- Tombol Hapus Layanan -->
                                                <form action="{{ route('layanan.destroy', $item->id) }}"
                                                    method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Yakin ingin menghapus layanan ini?')">
                                                        <i class="ti ti-trash"></i>
                                                    </button>
                                                </form>

                                                <form
                                                    action="{{ route('layanan.detail', ['layanan_id' => $item->id]) }}"
                                                    method="get" style="display:inline;">
                                                    <button type="submit" class="btn btn-info">
                                                        <i class="ti ti-list-details"></i>
                                                    </button>
                                                </form>







                                                <!-- Modal Tambah Detail Layanan -->
                                                {{-- <button class="btn btn-info" data-bs-toggle="modal"
                                                data-bs-target="#addDetailLayananModal-{{ $item->id }}">Tambah
                                                Detail
                                            </button>
                                            <div class="modal fade" id="addDetailLayananModal-{{ $item->id }}"
                                                tabindex="-1"
                                                aria-labelledby="addDetailLayananModalLabel-{{ $item->id }}"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <form action="{{ route('layanan.addDetail', $item->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Tambah Detail Layanan</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="mb-3">
                                                                    <label for="nama_detail_layanan"
                                                                        class="form-label">Nama Detail Layanan</label>
                                                                    <input type="text" class="form-control"
                                                                        name="nama_detail_layanan" required>
                                                                </div>
                                                                <div class="mb-3">
                                                                    <label for="kode_detail_layanan"
                                                                        class="form-label">Kode Detail Layanan</label>
                                                                    <input type="text" class="form-control"
                                                                        name="kode_detail_layanan" required>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-bs-dismiss="modal">Tutup</button>
                                                                <button type="submit"
                                                                    class="btn btn-primary">Tambah</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div> --}}
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        @foreach ($layanan as $index => $item)
                            <!-- Modal Edit Layanan -->
                            <div class="modal fade" id="editLayananModal-{{ $item->id }}" tabindex="-1"
                                aria-labelledby="editLayananModalLabel-{{ $item->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <form action="{{ route('layanan.update', $item->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Layanan</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label for="nama_layanan" class="form-label">Nama
                                                        Layanan</label>
                                                    <input type="text" class="form-control" name="nama_layanan"
                                                        value="{{ $item->nama_layanan }}" required>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="kode_layanan" class="form-label">Kode
                                                        Layanan</label>
                                                    <input type="text" class="form-control" name="kode_layanan"
                                                        value="{{ $item->kode_layanan }}" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Tutup</button>
                                                <button type="submit" class="btn btn-primary">Simpan
                                                    Perubahan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div>
            <div class="modal fade" id="addLayananModal" tabindex="-1" aria-labelledby="addLayananModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form action="{{ route('layanan.store') }}" method="POST">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="addLayananModalLabel">Tambah Layanan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="mb-3">
                                    <label for="layanan" class="form-label">Kategori</label>
                                    <select class="form-control" id="layanan" name="layanan" required>
                                        <option value="" disabled selected>Pilih Kategori</option>
                                        <option value="kontruksi">Kontruksi</option>
                                        <option value="nonKonstruksi">Non-Konstruksi</option>
                                    </select>
                                </div>

                                <!-- Nama Layanan -->
                                <div class="mb-3">
                                    <label for="nama_layanan" class="form-label">Nama Layanan</label>
                                    <input type="text" class="form-control" id="nama_layanan" name="nama_layanan"
                                        required>
                                </div>
                                <!-- Kode Layanan -->
                                <div class="mb-3">
                                    <label for="kode_layanan" class="form-label">Kode Layanan</label>
                                    <input type="text" class="form-control" id="kode_layanan" name="kode_layanan"
                                        required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-primary">Tambah Layanan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="../admin/libs/jquery/dist/jquery.min.js"></script>
    <script src="../admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../admin/js/sidebarmenu.js"></script>
    <script src="../admin/js/app.min.js"></script>
    <script src="../admin/libs/simplebar/dist/simplebar.js"></script>

</body>

</html>
