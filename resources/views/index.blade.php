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
  <link href="assets_user_register/css/main.css" rel="stylesheet" media="all">

</head>
<body>
    <div id="preloader"></div>
    
    



    </br>
    </br>
        <div class="col-md-6 col-md-push-3">       
        <table class="table table-striped">
    
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>NIM</th>
            <th>Alamat</th>
            <th>Telepon</th>
            <th>Email</th>
        </tr>

        @foreach($users as $p)
        <tr>
            <td>{{ $p->name}}</td>
            <td>{{ $p->jabatan}}</td>
            <td>{{ $p->fakultas}}</td>
            <td>{{ $p->jurusan}}</td>
            <td>{{ $p->kode}}</td>
            <td>{{ $p->alamat}}</td>
            <td>{{ $p->telepon}}</td>
            <td>{{ $p->email}}</td>

            <td><a href="/users/edit/{{ $p->id }}">Edit</a>
				|
				<a href="/users/hapus/{{ $p->id }}">Hapus</a>

        </tr>
        @endforeach
    </table>
    </div>

</body>
</html>
        

