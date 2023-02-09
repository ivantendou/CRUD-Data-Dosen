<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "dosen";

$koneksi= mysqli_connect($host,$user,$pass,$db);
if(!$koneksi){ //cek kondisi
    die("Koneksi Gagal");
}
$nidn = "";
$nama = "";
$jk   = "";
$tempat_lhr = "";
$tanggal_lhr  = "";
$agama  = "";
$kewarganegaraan  = "";
$sts_aktif  = "";
$error  = "";
$sukses = "";
$op     = "";

if(isset($_GET['op'])){
  $op = $_GET['op'];
}else{
  $op = "";
}

if($op == 'edit'){
  $id             = $_GET['id'];
  $sql1           = "select * from tabel_dosen where id = '$id'";
  $q1             = mysqli_query($koneksi,$sql1);
  $r1             = mysqli_fetch_array($q1);
  $nidn           = $r1['nidn'];
  $nama           = $r1['nama'];
  $jk             = $r1['jk'];
  $tempat_lhr     = $r1['tempat_lhr'];
  $tanggal_lhr    = $r1['tanggal_lhr'];
  $agama          = $r1['agama'];
  $kewarganegaraan= $r1['kewarganegaraan'];
  $sts_aktif      = $r1['sts_aktif'];
}

if(isset($_POST['simpan'])){
  $nidn           = $_POST['nidn'];
  $nama           = $_POST['nama'];
  $jk             = $_POST['jk'];
  $tempat_lhr     = $_POST['tempat_lhr'];
  $tanggal_lhr    = $_POST['tanggal_lhr'];
  $agama          = $_POST['agama'];
  $kewarganegaraan= $_POST['kewarganegaraan'];
  $sts_aktif      = $_POST['sts_aktif'];

  if($nidn && $nama && $jk && $tempat_lhr && $tanggal_lhr && $agama && $kewarganegaraan && $sts_aktif){
    if($op == 'edit'){ //untuk update
      $sql1   = "update tabel_dosen set nidn ='$nidn',nama ='$nama',jk='$jk',tempat_lhr='$tempat_lhr',
                tanggal_lhr='$tanggal_lhr',agama='$agama',kewarganegaraan='$kewarganegaraan',sts_aktif='$sts_aktif' where id = '$id'";
      $q1     = mysqli_query($koneksi,$sql1);
      if($q1){
        $sukses = "Data berhasil diupdate";
      }else{
        $error  = "Data gagal diupdate";
      }
    }else{ //untuk insert
      $sql1 = "insert into tabel_dosen(nidn,nama,jk,tempat_lhr,tanggal_lhr,
      agama,kewarganegaraan,sts_aktif) values ('$nidn','$nama','$jk','$tempat_lhr',
      '$tanggal_lhr','$agama','$kewarganegaraan','$sts_aktif')";
      $q1   = mysqli_query($koneksi,$sql1);
      if($q1){
        $sukses   = "Berhasil memasukkan data baru";
      }else{
        $error    = "Gagal memasukkan data";
      }
    }

  }else{
    $error = "Silakan masukkan semua data";
  }
}
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Lab. Database - CRUD Data Dosen</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
        <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <h3 class="menu-title">Menu Data Dosen</h3><!-- /.menu-title -->
                    <li>
                        <a href="data-dosen.php"> <i class="menu-icon fa fa-dot-circle-o"></i>Data Dosen </a>
                    </li>
                    <li>
                        <a href="formdatadosen.php"> <i class="menu-icon fa ti-pencil-alt"></i>Input Data Dosen </a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                          <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger">5</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have 3 Notification</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                          </div>
                        </div>

                        <div class="dropdown for-message">
                          <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary">9</span>
                          </button>
                          <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have 4 Mails</p>
                            <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                            <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                          </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                                <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications <span class="count">13</span></a>

                                <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

                                <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language" >
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="card-body">
          <?php
          if($error){
          ?>
            <div class="alert alert-danger" role="alert">
              <?php echo $error ?>
            </div>
          <?php
          }
          ?>
          <?php
          if($sukses){
          ?>
            <div class="alert alert-success" role="alert">
              <?php echo $sukses ?>
            </div>
          <?php
          }
          ?>
        </div>
        
        <div class="col-md-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Edit</strong> Data Dosen
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="POST" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="nidn" class=" form-control-label">NIDN</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nidn" name="nidn" value="<?php echo $nidn ?>" placeholder="Masukkan NIDN" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="nama" class=" form-control-label">Nama</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="nama" name="nama" value="<?php echo $nama ?>" placeholder="Masukkan Nama" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="jk" class=" form-control-label">Jenis Kelamin</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="jk" name="jk" value="<?php echo $jk ?>" placeholder="Masukkan Jenis Kelamin" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tempat_lhr" class=" form-control-label">Tempat Lahir</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="tempat_lhr" name="tempat_lhr" value="<?php echo $tempat_lhr ?>" placeholder="Masukkan Tempat Lahir" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="tanggal_lhr" class=" form-control-label">Tanggal Lahir</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="tanggal_lhr" name="tanggal_lhr" value="<?php echo $tanggal_lhr ?>" placeholder="Masukkan Tanggal Lahir" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="agama" class=" form-control-label">Agama</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="agama" name="agama" value="<?php echo $agama ?>" placeholder="Masukkan Agama" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="kewarganegaraan" class=" form-control-label">Kewarganegaraan</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="kewarganegaraan" name="kewarganegaraan" value="<?php echo $kewarganegaraan ?>" placeholder="Masukkan Kewarganegaraan" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="sts_aktif" class=" form-control-label">Status Aktif</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="sts_aktif" name="sts_aktif" value="<?php echo $sts_aktif ?>" placeholder="Masukkan Status Aktif" class="form-control"></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3">
                              <button type="submit" name="simpan" value="Simpan Data" class="btn btn-primary btn-sm">Simpan Data</button>
                            </div>
                          </div>
                        </form>
                      </div>

                    </div>
    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>


</body>
</html>
