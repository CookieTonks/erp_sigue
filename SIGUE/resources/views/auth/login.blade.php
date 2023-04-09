<!doctype html>
<html lang="en">

<head>
    <title>SIGUE | Login</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Qubes Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">

    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="../plantilla/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../plantilla/assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../plantilla/assets/vendor/animate-css/vivify.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../plantilla/assets/css/site.min.css">

</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><i class="fa fa-cube font-25"></i></div>
            <p>Cargando...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->

    <div class="auth-main">
        <div class="auth_div">
            <div class="card">
                <div class="auth_brand">
                    <img src="logo.png" class="img-fluid" alt="login page" />
                </div>
                <div class="body">
                    <p class="lead">Ingresa a tu cuenta</p>
                    <form method="POST" action="{{route('login')}}" class="form-auth-small m-t-20">
                        @csrf
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">Email</label>
                            <input id="email" name="email" type="email" class="form-control round" placeholder="Email" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Password</label>
                            <input id="password" name="password" type="password" class="form-control round" placeholder="Password" required>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group clearfix">
                            <label class="fancy-checkbox element-left">
                                <input type="checkbox" id="remember" name="remember">
                                <span>Recuerdame</span>
                            </label>


                        </div>
                        <button type="submit" class="btn btn-primary btn-round btn-block">Ingresar</button>
                        <div class="bottom">
                            <span class="helper-text m-b-10"><i class="fa f<a-lock"></i> <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a></span>
                            <span>¿No tienes una cuenta? <a href="{{ route('register') }}">Registrarme</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="auth_right">
            <div id="slider2" class="carousel slide" data-ride="carousel" data-interval="3000">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                </ol>
                <div class="carousel-inner pb-5">
                    <div class="carousel-item active">
                        <div class="px-4">
                            <h2>Engineering</h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="px-4">
                            <h2>Manufacturing</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- END WRAPPER -->

    <!-- Latest jQuery -->
    <script src="../plantilla/assets/vendor/jquery/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap 4x JS  -->
    <script src="../plantilla/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="../plantilla/assets/bundles/vendorscripts.bundle.js"></script>
    <script src="../plantilla/assets/js/common.js"></script>
</body>

</html>