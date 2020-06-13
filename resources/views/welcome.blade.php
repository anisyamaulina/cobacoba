<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <link rel="icon" href="assets_user/img/footer-kopma.png">
  <title>Pinjam Ruang Kopma</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Facebook Opengraph integration: https://developers.facebook.com/docs/sharing/opengraph -->
  <meta property="og:title" content="">
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:site_name" content="">
  <meta property="og:description" content="">

  <!-- Twitter Cards integration: https://dev.twitter.com/cards/  -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="">
  <meta name="twitter:title" content="">
  <meta name="twitter:description" content="">
  <meta name="twitter:image" content="">

  <!-- Place your favicon.ico and apple-touch-icon.png in the template root directory -->
  <link href="favicon.ico" rel="shortcut icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="assets_user/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="assets_user/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets_user/lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="assets_user/css/style.css" rel="stylesheet">
  <link href="assets_user_register/css/main.css" rel="stylesheet" media="all">

        
    </head>
    <body>
        <div class="content">

            <!--==========================
            Hero Section
            ============================-->
            <section id="hero">
                <div class="hero-container">
                <div class="wow fadeIn">
                    <div class="hero-logo">
                    <img class="" src="assets_user/img/kopma-logo.png" alt="KOPERASI MAHASISWA UGM">
                    </div>

                    <h1>Selamat Datang di Website Peminjaman Ruang dan Barang<br/>Koperasi Mahasiswa UGM</h1>
                    </br>
                   
                    @if (Route::has('login'))
                        <div>
                        @auth
                            @else
                            <button type="button" class="btn btn--pill btn--green">
                                <a href="{{ route('loginAnggota') }}">Masuk Anggota</a>
                            </button>
                            @if (Route::has('login'))
                            <button type="button" class="btn btn--pill btn--green">
                                <a href="{{ route('login') }}">Masuk Non Anggota</a>
                            </button>
                        @endif
                        @endauth
                        </div>
                    @endif

                </div>
                </div>
            </section>

            <!--==========================
            Footer
            ============================-->
            <footer id="footer">
                <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    
                    <div class="copyright">

                        <a href="http://kopma.ugm.ac.id">
                        <img src="assets_user/img/footer-kopma.png" alt="Universitas Gadjah Mada"></a>
                
                        <p>Bulaksumur H-7&amp;H-8, Yogyakarta, 55281<br>
                        <i class="fa fa-phone"></i> (0274) 565774, 519943<br>
                        <i class="fa fa-fax"></i> (0274) 566171<br>
                        <i class="fa fa-envelope"></i> info@kopma-ugm.net, brand@kopma-ugm.net</p>

                        &copy; <strong>UNIVERSITAS GADJAH MADA</strong>
                    </div>
                    <div class="credits">

                    </div>
                    </div>
                </div>
                </div>
            </footer>
            <!-- #footer -->
                
            </div>
        </div>

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Required JavaScript Libraries -->
        <script src="assets_user/lib/jquery/jquery.min.js"></script>
        <script src="assets_user/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets_user/lib/superfish/hoverIntent.js"></script>
        <script src="assets_user/lib/superfish/superfish.min.js"></script>
        <script src="assets_user/lib/morphext/morphext.min.js"></script>
        <script src="assets_user/lib/wow/wow.min.js"></script>
        <script src="assets_user/lib/stickyjs/sticky.js"></script>
        <script src="assets_user/lib/easing/easing.js"></script>
        <script src="assets_user/js/custom.js"></script>
        <script src="assets_user/contactform/contactform.js"></script>
  
    </body>
</html>
