<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Anggota</title>
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
                            <h2 class="mb-0 fw-bold">Data Anggota</h2>
                            <div>
                                {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addMemberModal">
                                    Tambah Anggota
                                </button> --}}
                                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                                    data-bs-target="#importMemberModal">
                                    <i class="ti ti-upload"></i>
                                    {{-- Import Excel --}}
                                </button>
                                <a href="{{ route('anggota.downloadTemplate') }}" class="btn btn-success">
                                    <i class="ti ti-download"></i>
                                    {{-- Download Template --}}
                                </a>
                            </div>
                        </div>

                        <!-- Modal Tambah Anggota -->
                        <div class="modal fade" id="addMemberModal" tabindex="-1"
                            aria-labelledby="addMemberModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addMemberModalLabel">Tambah Anggota</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('admin.anggota.store') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="badan_hukum" class="form-label">Badan Hukum</label>
                                                <input type="text" class="form-control" id="badan_hukum"
                                                    name="badan_hukum" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="contact_id" class="form-label">ContactsID</label>
                                                <input type="number" class="form-control" id="contact_id"
                                                    name="contact_id" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="diangkat" class="form-label">Diangkat</label>
                                                <input type="date" class="form-control" id="diangkat"
                                                    name="diangkat" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Modal Import Excel -->
                        <div class="modal fade" id="importMemberModal" tabindex="-1"
                            aria-labelledby="importMemberModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="importMemberModalLabel">Import Data Anggota</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="{{ route('anggota.import') }}"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="file" class="form-label">Unggah File Excel</label>
                                                <input type="file" class="form-control" id="file"
                                                    name="file" required>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Unggah</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tabel Anggota -->
                        <div class="table-responsive" data-simplebar>
                            <table class="table table-borderless align-middle text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Badan Hukum</th>
                                        <th>Kontak ID</th>
                                        <th>Tahun Diangkat</th>
                                        <th>JTM</th>
                                        <th>Nomor Anggota</th>
                                        <th>Status</th>
                                        <th>TA Berlaku s/d</th>
                                        <th>Kualifikasi</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Kode Pos</th>
                                        <th>Direktur</th>
                                        <th>Work Phone</th>
                                        <th>Mobile Phone</th>
                                        <th>Fax</th>
                                        <th>Email</th>
                                        <th>Kode Etik</th>
                                        <th>No Sertifikat KODE ETIK</th>
                                        {{-- <th>Aksi</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $index => $member)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $member->badan_hukum }}</td>
                                            <td>{{ $member->contact_id }}</td>
                                            <td>{{ $member->diangkat }}</td>
                                            <td>{{ $member->jtm }}</td>
                                            <td>{{ $member->nomor_anggota }}</td>
                                            <td>{{ $member->status }}</td>
                                            <td>{{ $member->tahun_berlaku }}</td>
                                            <td>{{ $member->kualifikasi }}</td>
                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->address }}</td>
                                            <td>{{ $member->city }}</td>
                                            <td>{{ $member->postal_code }}</td>
                                            <td>{{ $member->director }}</td>
                                            <td>{{ $member->work_phone }}</td>
                                            <td>{{ $member->mobile_phone }}</td>
                                            <td>{{ $member->fax_phone }}</td>
                                            <td>{{ $member->email }}</td>
                                            <td>{{ $member->kode_etik ? 'Ya' : 'Tidak' }}</td>
                                            <td>{{ $member->no_sertifikat_kode_etik }}</td>
                                            {{-- <td>
                                                <button class="btn btn-primary action" data-bs-toggle="modal"
                                                    data-bs-target="#editMemberModal{{ $member->id }}">
                                                    <i class="ti ti-edit"></i>
                                                </button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deleteMemberModal{{ $member->id }}">
                                                    <i class="ti ti-trash"></i>
                                                </button>
                                            </td> --}}
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Modal Edit Anggota -->
                @foreach ($members as $member)
                    <div class="modal fade" id="editMemberModal{{ $member->id }}" tabindex="-1"
                        aria-labelledby="editMemberModalLabel{{ $member->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Anggota</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.anggota.update', $member->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="badan_hukum" class="form-label">Badan Hukum</label>
                                            <input type="text" class="form-control" id="badan_hukum"
                                                name="badan_hukum" value="{{ $member->badan_hukum }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="contact_id" class="form-label">ContactsID</label>
                                            <input type="number" class="form-control" id="contact_id"
                                                name="contact_id" value="{{ $member->contact_id }}" required>
                                        </div>
                                        {{-- <div class="mb-3">
                                            <label for="diangkat" class="form-label">Diangkat</label>
                                            <input type="date" class="form-control" id="diangkat"
                                                name="diangkat" value="{{ $member->diangkat }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="tahun_berlaku" class="form-label">Tahun Berlaku</label>
                                            <input type="date" class="form-control" id="tahun_berlaku"
                                                name="tahun_berlaku" value="{{ $member->tahun_berlaku }}" required>
                                        </div> --}}
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Hapus Anggota -->
                    <div class="modal fade" id="deleteMemberModal{{ $member->id }}" tabindex="-1"
                        aria-labelledby="deleteMemberModalLabel{{ $member->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hapus Anggota</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah Anda yakin ingin menghapus anggota <strong>{{ $member->name }}</strong>?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <form method="POST" action="{{ route('admin.anggota.destroy', $member->id) }}">
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
