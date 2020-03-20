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
          <li><a href="{{Route('fasilitas')}}">Fasilitas</a></li>
          <li class="menu-active"><a href="{{Route('peminjaman')}}">Peminjaman</a></li>
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
          <h3 class="section-title">Form Peminjaman</h3>
          <!-- <div class="section-title-divider"></div> -->
          <p class="section-description">Lengkapi form dengan benar dan lakukan peminjaman</p>
        </div>
      </div>

        <div class="col-md-6 col-md-push-3">
          <div class="form">
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">

              <div class="form-group">
                <input type="text" name="name" class="form-control" id="{id}" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Masukkan Nama Lengkap" value="{{ Auth::user()->name }}"/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" name="jabatan" class="form-control" id="{id}" placeholder="Jabatan" data-rule="minlen:4" data-msg="Jabatan Anda" value="{{ Auth::user()->jabatan }}"/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" name="fakultas" class="form-control" id="{id}" placeholder="Fakultas" data-rule="minlen:4" data-msg="Fakultas Anda" value="{{ Auth::user()->fakultas }}"/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" name="jurusan" class="form-control" id="{id}" placeholder="Jurusan" data-rule="minlen:4" data-msg="Jurusan Anda" value="{{ Auth::user()->jurusan }}"/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" name="nim" class="form-control" id="{id}" placeholder="NIM" data-rule="minlen:4" data-msg="NIM Anda" value="{{ Auth::user()->nim }}"/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
              <form action="proses.php" method="post" enctype="multipart/form-data">
                <p>Upload Scan KTM<input type='file' name='foto' /></p>
              </form>
              </div>
              <div class="form-group">
                <input type="textarea" name="alamat" class="form-control" id="{id}" placeholder="Alamat" data-rule="minlen:4" data-msg="Alamat Anda" value="{{ Auth::user()->alamat }}"/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="text" name="telepon" class="form-control" id="{id}" placeholder="Telepon" data-rule="minlen:4" data-msg="Telepon Anda" value="{{ Auth::user()->telepon }}"/>
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <input type="email" name="email" class="form-control" id="{id}" placeholder="Email" data-rule="minlen:4" data-msg="Email Anda" value="{{ Auth::user()->email }}"/>
                <div class="validation"></div>
              </div>
    
              <div class="form-group">
                <select class="form-control" id="status">
                  <option>Ruang</option>
                  <option>Ruang Sidang</option>
                  <option>Ruang Perpustakaan</option>
                  <option>Ruang Anggota</option>
                </select>
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="agenda" id="{id}" placeholder="Agenda" data-rule="minlen:4" data-msg="Acara yang akan diselenggarakan" />
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <input type="textarea" class="form-control" name="deskripsi" id="{id}" placeholder="Deskripsi" data-rule="minlen:4" data-msg="Deskripsi Acara" />
                <div class="validation"></div>
              </div>
              
              <div class="form-group">
                <input type="date" class="form-control" name="tanggal" id="{id}" placeholder="Tanggal Pinjam" data-rule="minlen:4" data-msg="Pilih tanggal peminjaman" />
                <div class="validation"></div>
              </div>

              <div class="form-group">
                <div class="col-xs-5">
                  <label for="ex1">Waktu mulai<input type="time" class="form-control" id="jam" name="waktu_mulai"></label>
                </div>
                <div class="col-xs-5">
                  <label for="ex2">Waktu selesai<input type="time" class="form-control" id="jam" name="waktu_selesai"></label>
                </div>
                <div class="validation"></div>
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
          <h6 class="section-title">Barang</h6>
          <!-- <div class="section-title-divider"></div> -->
          <!-- <p class="section-description">Berikut adalah daftar barang Kopma UGM yang dapat dipinjam</p> -->
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
          <div class="form-group">
                <!-- <label for="email">No. Telp:</label> -->
                <input type="email" class="form-control" id="email" placeholder="Jumlah" name="telepon">
                <button type="button" class="btn btn-info"><a href="">Request</a></button>
          </div>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-2.jpg);" href="">
            <div class="details">
              <h4>Layar Proyektor Ruang Sidang</h4>
              <span>1 buah</span>
            </div>
          </a>
          <div class="form-group">
                <!-- <label for="email">No. Telp:</label> -->
                <input type="email" class="form-control" id="email" placeholder="Jumlah" name="telepon">
                <button type="button" class="btn btn-info"><a href="">Request</a></button>
          </div>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-8.jpg);" href="">
            <div class="details">
              <h4>Proyektor</h4>
              <span>1 buah</span>
            </div>
          </a>
          <div class="form-group">
                <!-- <label for="email">No. Telp:</label> -->
                <input type="email" class="form-control" id="email" placeholder="Jumlah" name="telepon">
                <button type="button" class="btn btn-info"><a href="">Request</a></button>
          </div>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-3.jpg);" href="">
            <div class="details">
              <h4>Sound System Ruang Sidang</h4>
              <span>1 buah</span>
            </div>
          </a>
          <div class="form-group">
                <!-- <label for="email">No. Telp:</label> -->
                <input type="email" class="form-control" id="email" placeholder="Jumlah" name="telepon">
                <button type="button" class="btn btn-info"><a href="">Request</a></button>
          </div>
        </div>
        <br/>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-4.jpg);" href="">
            <div class="details">
              <h4>Meja Tinggi Ruang Anggota</h4>
              <span>2 buah</span>
            </div>
          </a>
          <div class="form-group">
                <!-- <label for="email">No. Telp:</label> -->
                <input type="email" class="form-control" id="email" placeholder="Jumlah" name="telepon">
                <button type="button" class="btn btn-info"><a href="">Request</a></button>
          </div>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-5.jpg);" href="">
            <div class="details">
              <h4>Meja Pendek Ruang Anggota</h4>
              <span>1 buah</span>
            </div>
          </a>
          <div class="form-group">
                <!-- <label for="email">No. Telp:</label> -->
                <input type="email" class="form-control" id="email" placeholder="Jumlah" name="telepon">
                <button type="button" class="btn btn-info"><a href="">Request</a></button>
          </div>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-6.jpg);" href="">
            <div class="details">
              <h4>Kursi Ruang Anggota</h4>
              <span>8 buah</span>
            </div>
          </a>
          <div class="form-group">
                <!-- <label for="email">No. Telp:</label> -->
                <input type="email" class="form-control" id="email" placeholder="Jumlah" name="telepon">
                <button type="button" class="btn btn-info"><a href="">Request</a></button>
          </div>
        </div>

        <div class="col-md-3">
          <a class="portfolio-item" style="background-image: url(assets_user/img/portfolio-7.jpg);" href="">
            <div class="details">
              <h4>Karpet</h4>
              <span>1 buah</span>
            </div>
          </a>
          <div class="form-group">
                <!-- <label for="email">No. Telp:</label> -->
                <input type="email" class="form-control" id="email" placeholder="Jumlah" name="telepon">
                <button type="button" class="btn btn-info"><a href="">Request</a></button>
          </div>
        </div>

        <div class="text-center">
                <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">
                  Submit
                </button>
              </div>

              <!-- Modal -->
              <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Data berhasil disimpan!</h4>
                    </div>
                    <div class="modal-body">
                      <p>Admin akan mengonfirmasi data peminjaman Anda melalui email.</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                  </div>
            </form>
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

  <script>
    $('#jam').datetimepicker({
        format: 'hh:ii',
            language:  'en',
            weekStart: 1,
            todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 1,
        minView: 0,
        maxView: 1,
        forceParse: 0
        });
    </script>


</body>
  </html>