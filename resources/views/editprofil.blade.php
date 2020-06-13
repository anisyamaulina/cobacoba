<!DOCTYPE html>
<html lang="en">

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
  <div id="preloader"></div>

  <!--==========================
  Header Section
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="{{Route('home')}}"><img src="assets_user/img/kopma-logo.png" alt="" title="" /></img></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="{{Route('home')}}">Home</a></li>
          <li class="menu-active"><a href="{{Route('profil')}}">Profil</a></li>
          <li><a href="{{Route('fasilitas')}}">Fasilitas</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Peminjaman<span class="caret"></span></a>

              <div class="dropdown-menu dropdown">
                <a class="dropdown-item" href="{{ route('list') }}">Daftar Peminjaman</a></br>
                <a class="dropdown-item" href="{{ route('add') }}">Buat Peminjaman</a></br>
                <a class="dropdown-item" href="{{ route('data') }}">Data Peminjaman</a>
              </div>
              </li>
          <li><a href="{{Route('events')}}">Agenda</a></li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span></a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </div></li>
        </ul>
      </nav>
      <!-- #nav-menu-container -->
    </div>
  </header>
  <!-- #header -->

  <!--==========================
  Form Peminjaman
  ============================-->
  <section id="contact">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
            <h3 class="section-title">Edit Profil</h3>
        </br>
            <img src="assets_user/img/team-4.jpg" class="img-circle" alt=""></img>
        </br>

      <div class="col-md-6 col-md-push-3">  
      @foreach($users as $users)     
        <form action="/users/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $users->id }}"> <br/>
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="email" placeholder="Nama Anda" name="name" required="required" value="{{ $users->name }}">
            </div>
            <div class="form-group">
                <label for="fakultas">Fakultas:</label>
                <input type="text" class="form-control" id="fakultas" placeholder="Fakultas" name="fakultas" required="required" value="{{ $users->fakultas }}">
            </div>
            <div class="form-group">
                <label for="prodi">Prodi:</label>
                <input type="text" class="form-control" id="prodi" placeholder="Prodi" name="prodi" required="required" value="{{ $users->prodi }}">
            </div>
            <div class="form-group">
                <label for="kode">NIU:</label>
                <input type="text" class="form-control" id="kode" placeholder="NUI 6 Digit" name="kode" required="required" value="{{ $users->kode }}">
            </div>
            <div class="form-group">
                <label for="jabatan">Jabatan:</label>
                <input type="text" class="form-control" id="jabatan" placeholder="Jabatan" name="jabatan" required="required" value="{{ $users->jabatan }}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <input type="textarea" class="form-control" id="alamat" placeholder="Alamat" name="alamat" required="required" value="{{ $users->alamat }}">
            </div>
            <div class="form-group">
                <label for="telepon">No. Telepon:</label>
                <input type="text" class="form-control" id="telepon" placeholder="No. Telepon" name="telepon" required="required" value="{{ $users->telepon }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" id="email" placeholder="Email UGM Aktif" name="email" required="required" value="{{ $users->email }}">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" equired="required" value="{{ $users->password }}">
            </div>

            <div class="text-center">
                    <button type="submit" class="btn btn--pill btn--green" value="Simpan Data"><button>
            </div>
        </form>
        @endforeach
      </div>

      </div>
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