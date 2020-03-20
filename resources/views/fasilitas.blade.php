<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
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
          <li><a href="{{Route('profil')}}">Profil</a></li>
          <li class="menu-active"><a href="{{Route('fasilitas')}}">Fasilitas</a></li>
          <li><a href="{{Route('peminjaman')}}">Peminjaman</a></li>
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
  Ruang Sidang
  ============================-->
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Ruang Sidang</h3>
          <!-- <div class="section-title-divider"></div> -->
          <p class="section-description">Berikut adalah beberapa potret ruang sidang</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-1.jpg);" href="">
            <div class="details">
              <h4>Meja Ruang Perpustakaan</h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-2.jpg);" href="">
            <div class="details">
              <h4>Layar Proyektor Ruang Sidang</h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-8.jpg);" href="">
            <div class="details">
              <h4>Proyektor</h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-3.jpg);" href="">
            <div class="details">
              <h4>Sound System Ruang Sidang</h4>
            </div>
          </a>
        </div>
        <br/>

        <div class="row">
        <div class="col-md-12">
            <div class="quote">
                Lantai 1 Gedung Koperasi "Kopma UGM" Utara Front Office</br>
                Ruang Anggota Koperasi "Kopma UGM" adalah ruang milik Kopma UGM yang terdapat meja tinggi 2 buah, 
                kursi sekitar 8 buah, dan meja pendek 1 buah. Tersedia karpet apabila dibutuhkan. Pencahayaan siang 
                hari cukup terang, malam hari sedikit redup.
            </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Ruang Anggota
  ============================-->
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Ruang Anggota</h3>
          <!-- <div class="section-title-divider"></div> -->
          <p class="section-description">Berikut adalah beberapa potret ruang anggota</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-1.jpg);" href="">
            <div class="details">
              <h4>Meja Ruang Perpustakaan</h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-2.jpg);" href="">
            <div class="details">
              <h4>Layar Proyektor Ruang Sidang</h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-8.jpg);" href="">
            <div class="details">
              <h4>Proyektor</h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-3.jpg);" href="">
            <div class="details">
              <h4>Sound System Ruang Sidang</h4>
            </div>
          </a>
        </div>
        <br/>

        <div class="row">
        <div class="col-md-12">
            <div class="quote">
                Lantai 1 Gedung Koperasi "Kopma UGM" Utara Front Office</br>
                Ruang Perpustakaan Koperasi "Kopma UGM" adalah ruang milik Kopma UGM merupakan ruang 
                beralaskan karpet. Dipenuhi dengan rak dan buku, terdapat dua meja di tengah ruangan yang 
                dapat digunakan untuk diskusi maupun belajar. Pencahayaan menggunakan lampu. 
                Jam aktif perpustakaan pukul 09.00-17.00.
            </div>
        </div>

      </div>
    </div>
  </section>

  <!--==========================
  Ruang Perpustakaan
  ============================-->
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Ruang Perpustakaan</h3>
          <!-- <div class="section-title-divider"></div> -->
          <p class="section-description">Berikut adalah beberapa potret ruang perpustakaan</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-1.jpg);" href="">
            <div class="details">
              <h4>Meja Ruang Perpustakaan</h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-2.jpg);" href="">
            <div class="details">
              <h4>Layar Proyektor Ruang Sidang</h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-8.jpg);" href="">
            <div class="details">
              <h4>Proyektor</h4>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-3.jpg);" href="">
            <div class="details">
              <h4>Sound System Ruang Sidang</h4>
            </div>
          </a>
        </div>
        <br/>

        <div class="row">
        <div class="col-md-12">
            <div class="quote">
                Lantai 1 Gedung Koperasi "Kopma UGM" Utara Front Office</br>
                Ruang Perpustakaan Koperasi "Kopma UGM" adalah ruang milik Kopma UGM merupakan ruang 
                beralaskan karpet. Dipenuhi dengan rak dan buku, terdapat dua meja di tengah ruangan yang 
                dapat digunakan untuk diskusi maupun belajar. Pencahayaan menggunakan lampu. 
                Jam aktif perpustakaan pukul 09.00-17.00.
            </div>
        </div>

      </div>
    </div>
  </section>

   <!--==========================
  Barang Section
  ============================-->
  <section id="portfolio">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Barang</h3>
          <!-- <div class="section-title-divider"></div> -->
          <p class="section-description">Berikut adalah daftar barang Kopma UGM yang dapat dipinjam</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-1.jpg);" href="">
            <div class="details">
              <h4>Meja Ruang Perpustakaan</h4>
              <span>2 buah</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-2.jpg);" href="">
            <div class="details">
              <h4>Layar Proyektor Ruang Sidang</h4>
              <span>1 buah</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-8.jpg);" href="">
            <div class="details">
              <h4>Proyektor</h4>
              <span>1 buah</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-3.jpg);" href="">
            <div class="details">
              <h4>Sound System Ruang Sidang</h4>
              <span>1 buah</span>
            </div>
          </a>
        </div>
        <br/>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-4.jpg);" href="">
            <div class="details">
              <h4>Meja Tinggi Ruang Anggota</h4>
              <span>2 buah</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-5.jpg);" href="">
            <div class="details">
              <h4>Meja Pendek Ruang Anggota</h4>
              <span>1 buah</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-6.jpg);" href="">
            <div class="details">
              <h4>Kursi Ruang Anggota</h4>
              <span>8 buah</span>
            </div>
          </a>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-7.jpg);" href="">
            <div class="details">
              <h4>Karpet</h4>
              <span>1 buah</span>
            </div>
          </a>
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
