<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <link rel="icon" href="assets_user/img/footer-kopma.png">
    <title>Pinjam Ruang Kopma</title>

    <!-- Icons font CSS-->
    <link href="assets_user_register/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="assets_user_register/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="assets_user_register/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets_user_register/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets_user_register/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">MASUK KE AKUN</h2>
                    <form method="POST" action="{{ route('login') }}">
                     @csrf
                    
                        <div class="input-group">
                            <input id="email" type="email" class="input--style-3{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="Email UGM">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-group">
                        <input id="password" type="password" class="input--style-3{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="Kata Sandi">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>                     
        
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">{{ __('Masuk') }}</button>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Lupa kata sandi') }}
                                </a>
                            @endif
                        </div>

                        <div class="p-t-10">
                            <a class="btn btn-link" href="{{ route('register') }}" type="submit">{{ __('Pendaftaran Akun') }}</a> 
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="assets_user_register/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="assets_user_register/vendor/select2/select2.min.js"></script>
    <script src="assets_user_register/vendor/datepicker/moment.min.js"></script>
    <script src="assets_user_register/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="assets_user_register/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->