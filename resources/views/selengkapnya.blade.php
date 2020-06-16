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
          <li class="menu-active"><a href="{{Route('home')}}">Home</a></li>
          <li><a href="{{Route('profil')}}">Profil</a></li>
          <li><a href="{{Route('fasilitas')}}">Fasilitas</a></li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Peminjaman<span class="caret"></span></a>

              <div class="dropdown-menu dropdown">
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
  About Section
  ============================-->
  <section id="about">
    <div class="container wow fadeInUp">
      <div class="row">
        <div class="col-md-12">
          <h3 class="section-title">Apa itu "Kopma UGM"?</h3>
          <!-- <div class="section-title-divider"></div> -->

          <p><div class="text-center">
            <img src="assets_user/img/tanyakopma.jpg" alt="Kopma UGM" width="650" height="400">
          </div></p>

<p>Berdiri sejak 1982, Koperasi “Kopma UGM” lahir dari keinginan untuk memenuhi kebutuhan mahasiswa melalui unit usaha yang dikelola oleh mahasiswa sendiri. Tercatat, momen terbentuknya Koperasi “Kopma UGM” sebagai koperasi di kalangan mahasiswa UGM pada 20 Maret 1982 turut dihadiri dua orang pejabat Departemen Koperasi. Selanjutnya, Kopma UGM resmi ber-Badan Hukum dengan Akte Pendirian No.1246/BH/XI didapat dari Departemen Perdagangan dan Koperasi dengan Klasifikasi Koperasi Serba Usaha pada 2 Agustus 1982.</p>
<p>Koperasi “Kopma UGM” merupakan organisasi yang berbadan hukum koperasi sekaligus Unit Kegiatan Mahasiswa (UKM) di lingkungan Universitas Gadjah Mada, beranggotakan orang-perorang yang telah terdaftar sebagai anggota. Sebagai organisasi yang berbadan hukum koperasi, Koperasi “Kopma UGM” memiliki tujuan untuk menyejahterakan anggota pada khususnya dan masyarakat pada umumnya dengan berasaskan kekeluargaan.</p>
<p>Saat ini Koperasi “Kopma UGM” memiliki 4 divisi usaha meliputi Swalayan, Konfeksi dan Sablonase (Gamashirt), Kafetaria, dan Warparpostel. Selain itu, Koperasi “Kopma UGM” turut menggerakkan 7 gugus dan 2 komunitas sebagai wadah kegiatan bagi anggota.</p>
<h3><b>Visi</b></h3>
<p>“Menjadi organisasi yang secara terus-menerus mengembangkan diri dan memberikan kemanfaatan kepada anggotanya serta berperan aktif dalam gerakan Koperasi dengan berpegang teguh pada nilai-nilai dan prinsip-prinsip Koperasi”</p>
<h3><b>Misi</b></h3>
<ol>
<li>Mewujudkan SDM anggota yang memahami dan menjalankan perannya dengan optimal;</li>
<li>Menjadi pilihan utama tempat belanja kebutuhan mahasiswa;</li>
<li>Senantiasa meningkatkan performa dan memberikan pelayanan yang berkualitas;</li>
<li>Penguatan sistem informasi sebagai instrumen kontrol dan pengembangan;</li>
<li>Meningkatkan daya saing dengan pengoptimalan riset dan pemanfaatan teknologi tepat guna;</li>
<li>Mewujudkan lingkungan kerja kondusif untuk seluruh elemen organisasi;</li>
<li>Membangun relasi yang luas untuk meningkatkan kepercayaan publik;</li>
<li>Menjadi pusat rujukan belajar Koperasi di Indonesia.</li>
</ol>
<h3><b>Tujuan</b></h3>
<ol>
<li>Kopma UGM bertujuan meningkatkan kesejahteraan Anggota pada khususnya dan masyarakat pada umumnya, sekaligus sebagai bagian yang tidak terpisahkan dari tatanan perekonomian nasional yang demokratis dan berkeadilan.</li>
<li>Dalam mencapai tujuan yang telah ditetapkan, Kopma UGM menyusun Rencana Strategis.</li>
</ol>
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