<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Berita</title>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"-->
    <!--    integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMm7rQx5Fd7b4ikx9gB8V4m3M3GlnA7Hhn0Vbx" crossorigin="anonymous">-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">




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
                            <h2 class="mb-0 fw-bold">Berita</h2>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addNewsModal">
                                Tambah
                            </button>
                            <div class="modal fade" id="addNewsModal" tabindex="-1"
                                aria-labelledby="addNewsModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="addNewsModalLabel">Tambah Berita</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="addNewsForm" method="POST"
                                                action="{{ route('admin.news.store') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Judul</label>
                                                    <input type="text" class="form-control" id="title"
                                                        name="title" required>
                                                </div>
                                                {{-- <div class="mb-3">
                                                    <label for="content" class="form-label">Konten</label>
                                                    <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
                                                </div> --}}
                                                <div class="mb-3">
                                                    <label for="content" class="form-label">Deskripsi</label>
                                                    <textarea class="form-control content-editor" id="content" name="content" rows="3" required></textarea>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="keywords" class="form-label">Keywords</label>
                                                    <input type="text" class="form-control" id="keywords"
                                                        name="keywords">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="image" class="form-label">Gambar (max 5MB)</label>
                                                    <input type="file" class="form-control" id="image"
                                                        name="image" accept="image/*">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Tambah</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive" data-simplebar>
                            <table class="table table-borderless align-middle text-nowrap">
                                <thead>
                                    <tr>
                                        <th scope="col">Judul</th>
                                        {{-- <th scope="col">Content</th> --}}
                                        {{-- <th scope="col">Image</th> --}}
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($news as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            {{-- <td>{{ Str::limit($item->content, 50) }}</td> --}}
                                            {{-- <td>
                                                @if ($item->image)
                                                    <img src="{{ asset($item->image) }}" alt="{{ $item->title }}"
                                                        width="50">
                                                @endif
                                            </td> --}}
                                            <td>
                                                <button class="btn btn-primary action" data-bs-toggle="modal"
                                                    data-bs-target="#editNewsModal{{ $item->id }}">
                                                    <i class="ti ti-edit"></i>
                                                </button>

                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                                    data-bs-target="#deleteModal{{ $item->id }}"
                                                    data-id="{{ $item->id }}" data-name="{{ $item->title }}">
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
                @foreach ($news as $item)
                    <!-- Edit News Modal -->
                    <div class="modal fade" id="editNewsModal{{ $item->id }}" tabindex="-1"
                        aria-labelledby="editNewsModalLabel{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit Berita</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('admin.news.update', $item->id) }}"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Title</label>
                                            <input type="text" class="form-control" id="title" name="title"
                                                value="{{ $item->title }}" required>
                                        </div>
                                        {{-- <div class="mb-3">
                                            <label for="content" class="form-label">Content</label>
                                            <textarea class="form-control" id="content" name="content" rows="3" required>{{ $item->content }}</textarea>
                                        </div> --}}
                                        <div class="mb-3">
                                            <label for="content" class="form-label">Deskripsi</label>
                                            <textarea class="form-control content-editor" id="content" name="content" rows="3" required>{{ $item->content }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="keywords" class="form-label">Keywords</label>
                                            <input type="text" class="form-control" id="keywords"
                                                name="keywords" value="{{ $item->keywords }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Gambar (max 5MB)</label>
                                            <input type="file" class="form-control" id="image" name="image"
                                                accept="image/*">
                                            <small class="form-text text-muted">Leave blank to keep the current
                                                image.</small>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Delete Confirmation Modal -->
                    <div class="modal fade" id="deleteModal{{ $item->id }}" tabindex="-1"
                        aria-labelledby="deleteModalLabel{{ $item->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Hapus Berita?</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <p>Apakah yakin untuk menghapus berita
                                        <strong>{{ $item->title }}</strong>?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancel</button>
                                    <form method="POST" action="{{ route('admin.news.destroy', $item->id) }}"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
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

    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
    <script>
                   $(document).ready(function() {
            $('.content-editor').summernote({
                height: 300,
                placeholder: 'Masukkan konten di sini...',
            });

            $('#addNewsForm').submit(function(event) {
                event.preventDefault(); // Mencegah reload halaman

                var formData = new FormData(this); // Ambil data form

                $.ajax({
                    url: '{{ route('admin.news.store') }}',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Tambahkan CSRF token
                },
                    success: function(response) {
                        // Reset Summernote setelah form berhasil disubmit
                        $('.content-editor').summernote('reset');
                        // Mengosongkan input lainnya jika diperlukan
                        $('#addNewsForm')[0].reset();
                    },
                    error: function(xhr, status, error) {
                        alert("Error: " + error);
                    }
                });
            });
        });


    </script>
    <script>
        // Maksimal file size: 5MB
        const MAX_SIZE = 5 * 1024 * 1024; // 5MB dalam byte

        document.getElementById('image').addEventListener('change', function(event) {
            var file = this.files[0];
            if (file) {
                if (file.size > MAX_SIZE) {
                    alert('Ukuran file gambar tidak boleh lebih dari 5MB!');
                    this.value = ''; // Menghapus input file jika ukurannya melebihi 5MB
                }
            }
        });

        document.getElementById('addNewsForm').addEventListener('submit', function(event) {
            var file = document.getElementById('image').files[0];
            if (file && file.size > MAX_SIZE) {
                event.preventDefault(); // Mencegah form submit jika file lebih besar dari 5MB
                alert('Ukuran file gambar tidak boleh lebih dari 5MB!');
            }
        });
    </script>


</body>

</html>
