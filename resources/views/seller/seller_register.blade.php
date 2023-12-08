<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register - SB Admin</title>
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
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5  bg-warning">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Create Seller Account</h3>
                                </div>
                                <div class="card-body">



                                    <form action="{{ route('seller.register.create') }}" method="post">
                                        @csrf

                                        <div class="row mb-3">
                                            <div class="form-floating mb-3">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputFirstName" type="text"
                                                        name="name" placeholder="Enter your first name" required />
                                                    <label for="inputFirstName">User Name</label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" name="email"
                                                placeholder="name@example.com" required />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPassword" type="password"
                                                        name="password" placeholder="Create a password" required />
                                                    <label for="inputPassword">Password</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id="inputPasswordConfirm"
                                                        type="password" name="password_confirmation"
                                                        placeholder="Confirm password" required />
                                                    <label for="inputPasswordConfirm">Confirm Password</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            {{-- <div class="d-grid"><a class="btn btn-primary btn-block" href="login.html">Create Account</a></div> --}}
                                            <button type="submit" class="btn btn-primary form-control">Sign Up</button>
                                        </div>
                                    </form>




                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="{{ route('seller_login_form') }}">Have an account? Go
                                            to login</a></div>
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

    {{-- for confirm password --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.querySelector('form');

            form.addEventListener('submit', function(event) {
                var password = document.getElementById('inputPassword').value;
                var confirmPassword = document.getElementById('inputPasswordConfirm').value;

                if (password !== confirmPassword) {

                    alert('Password and Confirm Password do not match');
                    event.preventDefault(); // Prevent form submission
                }
            });
        });
    </script>
</body>

</html>
