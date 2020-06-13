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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

</head>

<body>
    <div class="page-wrapper bg-gra-01 p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">REGISTRASI AKUN</h2>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                    
                        <div class="input-group">
                            <input id="name" type="text" class="input--style-3{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required placeholder="Nama Lengkap">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
        
                        <div class="input-group">
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select name="nama_fakultas" id="fakultas">
                                    <option disabled="" selected="selected" for="fir" id="fakultas" for="fakultas">Fakultas</option>
                                    @foreach( $fakultas as $key => $value)
                                    <option value="{{ $key }}">{{ $value-> name }}</option>
                                    @endforeach
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        </div>
                                      
                       <div class="input-group">
                        <div name="fakultas" id="fakultas"></div>
                            <div class="rs-select2 js-select-simple select--no-search">
                                <select id="prodi-select" name="prodi-select">
                                    <option disabled="" selected="selected" for="prodi">Prodi</option>
                                    <option>Prodi</option>
                                </select>
                                <div class="select-dropdown"></div>
                            </div>
                        <div name="prodi" id="prodi"></div>
                        </div>
                       
                        <div class="input-group">
                            <input id="kode" type="text" class="input--style-3{{ $errors->has('kode') ? ' is-invalid' : '' }}" name="kode" value="{{ old('kode') }}" required placeholder="NIU 6 Digit">
                            @if ($errors->has('kode'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('kode') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-group">
                            <input id="alamat" type="textarea" class="input--style-3{{ $errors->has('alamat') ? ' is-invalid' : '' }}" name="alamat" value="{{ old('alamat') }}" required placeholder="Alamat">
                            @if ($errors->has('alamat'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('alamat') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-group">
                            <input id="telepon" type="text" class="input--style-3{{ $errors->has('telepon') ? ' is-invalid' : '' }}" name="telepon" value="{{ old('telepon') }}" required placeholder="Telepon">
                            @if ($errors->has('telepon'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('telepon') }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="input-group">
                            <input id="email" type="text" class="input--style-3{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required>
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

                        <div class="input-group">
                            <input id="password-confirm" type="password" class="input--style-3{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password_confirmation" required placeholder="Konfirmasi Kata Sandi">
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        
                        <div class="p-t-10">
                            <button class="btn btn--pill btn--green" type="submit">{{ __('Daftar') }}</button>
                        </div>

                        <div class="p-t-10">
                            @if (Route::has('login'))
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    Sudah punya akun? {{ __('Masuk') }}
                                </a>
                            @endif
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

    <script>
        $(document).ready(function(){
            $('#fakultas-select').change(function(){
                var fakultas_id = $(this).val();
                var fakultas_name = $("select[name='fakultas-select'] option:selected").text();
                if(fakultas_id){
                    $.ajax({
                        url: '/register/' + fakultas_id,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data){
                            $('#prodi').empty();
                            $('#prodi')
                                .append("<input type='text' style='display:none' name='fakultas' id='fakultas' value='"+fakultas_name"'>");
                                console.log(data);
                                $('#prodi-select').empty();
                                $.each(data, function(key, value){
                                    $('#prodi-select')
                                    .append('<option value="'+key+'">'+ value + '</option>');
                                    });
                        }
                    });
                } else {
                    $('#prodi-select').empty();
                    }
            });
        });

    </script>


</body>

</html>
<!-- end document-->