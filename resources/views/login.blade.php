<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex, nofollow">
    <title>Login</title>
    <link rel="shortcut icon" type="image/png" href="../admin/images/logos/inkindo-kotak.png" />
    <link rel="stylesheet" href="../admin/css/styles.min.css" />
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="#" class="text-nowrap logo-img text-center d-block py-3 w-100">
                                    <img src="../admin/images/logos/inkindo2.png " width="180" alt="">
                                </a>
                                @if ($errors->has('login'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('login') }}
                                    </div>
                                @endif

                                {{-- <p class="text-center">Your Social Campaigns</p> --}}
                                <form method="POST" action="{{ url('login') }}">
                                    @csrf <!-- Token CSRF untuk melindungi dari serangan CSRF -->

                                    <div class="mb-3">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="username" name="username"
                                            aria-describedby="usernameHelp" value="{{ old('username') }}" required
                                            autofocus>
                                    </div>

                                    <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password"
                                            required>
                                    </div>

                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <div class="form-check">
                                            <input class="form-check-input primary" type="checkbox" value=""
                                                id="flexCheckChecked" name="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label text-dark" for="flexCheckChecked">
                                                Remember this Device
                                            </label>
                                        </div>
                                        {{-- <a class="text-primary fw-bold" href="{{ route('password.request') }}">Forgot Password?</a> --}}
                                    </div>

                                    <button type="submit" class="btn btn-primary w-100 fs-4 mb-4 rounded-2">Sign
                                        In
                                    </button> <!-- Tombol submit form -->

                                    <div class="d-flex align-items-center justify-content-center">
                                        <!-- Uncomment to add registration link -->
                                        {{-- <p class="fs-4 mb-0 fw-bold">New to Spike?</p>
                      <a class="text-primary fw-bold ms-2" href="{{ route('register') }}">Create an account</a> --}}
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../admin/libs/jquery/dist/jquery.min.js"></script>
    <script src="../admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
