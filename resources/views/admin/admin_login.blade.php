<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="{{ asset('frontend/assets') }}/css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="bg-dark">



    {{-- navbar start --}}

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>


            <ul class="navbar-nav  mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('login') }}">User</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('login_form') }}">Admin</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('seller_login_form') }}">Seller</a>
                </li>

            </ul>

        </div>
        </div>
    </nav>

    {{-- navbar end --}}





    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Admin Login</h3>
                                </div>
                                <div class="card-body">

                                    {{-- alert start --}}
                                    @if (Session::has('error'))
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{ session::get('error') }}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                aria-label="Close"></button>
                                        </div>
                                    @endif

                                    {{-- alert end --}}


                                    <form action="{{ route('admin.login') }}" method="post">
                                        @csrf

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" name="email" type="email"
                                                placeholder="name@example.com" />
                                            <label for="inputEmail">Email address</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="password"
                                                type="password" placeholder="Password" />
                                            <label for="inputPassword">Password</label>
                                        </div>

                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox"
                                                value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember
                                                Password</label>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small" href="password.html">Forgot Password?</a>
                                            {{-- <a class="btn btn-primary" href="index.html">Login</a> --}}
                                            <button type="submit" class="btn btn-primary">Login</button>
                                        </div>

                                    </form>


                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="{{ route('admin.register') }}">Need an account? Sign
                                            up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Your Website 2022</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="{{ asset('frontend/assets') }}/js/scripts.js"></script>
</body>

</html>
