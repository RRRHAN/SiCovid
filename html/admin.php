<?php
include '../login/cek-login.php';
include '../assets/connect.php';

$query = mysqli_query($connect, "SELECT * FROM admin")

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="css/table.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/icon.png">
    <title>SiCovid</title>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="../plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <a class="logo" href="index.php">
                        <b>
                        </b>
                        <span class="hidden-xs">
                            <img src="../img/nama.png" alt="home" class="light-logo" style="width: 80%; padding-top: 5px;" />
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li>
                        <a class="profile-pic" href="#"> <img src="admin/img/<?= $_SESSION['foto']; ?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?= $_SESSION['nama']; ?></b></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="index.php" class="waves-effect"><i class="fa fa-bar-chart-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="pasien.php" class="waves-effect"><i class="fa fa-wheelchair fa-fw" aria-hidden="true"></i>Pasien</a>
                    </li>
                    <li>
                        <a href="admin.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>admin</a>
                    </li>
                    <li>
                        <a href="about.php" class="waves-effect"><i class="fa fa-info-circle fa-fw" aria-hidden="true"></i>about me</a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Data admin</h4>
                    </div>
                    <div class="col-lg-1">
                        <a href="admin/tambah.php"><button type="button" class="btn btn-outline-primary">TAMBAH ADMIN</button></a>
                    </div>
                    <div class="col-lg-7 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="../login/logout.php">LOGOUT</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <table class="tabel">
                            <thead>
                                <tr>
                                    <th align="center">No</th>
                                    <th align="center">Nama</th>
                                    <th align="center">Username</th>
                                    <th align="center">aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                while ($admin = mysqli_fetch_assoc($query)) :
                                ?>
                                    <tr>
                                        <td align="center"><?= $i; ?></td>
                                        <td align="center"><?= $admin["nama"]; ?></td>
                                        <td align="center"><?= $admin["username"]; ?></td>
                                        <td>
                                            <a href="admin/detail.php?id=<?= $admin["id_admin"]; ?>" class="badge badge-success">Detail</a>
                                            <a href="admin/edit.php?id=<?= $admin["id_admin"]; ?>" class="badge badge-warning">Edit</a>
                                            <a href="admin/hapus.php?id=<?= $admin["id_admin"]; ?>" class="badge badge-danger">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <footer class="footer text-center"> 2020 &copy; Raihan Firmansyah </footer>
            </div>
        </div>
        <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
        <script src="js/jquery.slimscroll.js"></script>
        <script src="js/waves.js"></script>
        <script src="../plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
        <script src="../plugins/bower_components/counterup/jquery.counterup.min.js"></script>
        <script src="../plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
        <script src="../plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
        <script src="../plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
        <script src="js/custom.min.js"></script>
        <script src="js/dashboard1.js"></script>
        <script src="../plugins/bower_components/toast-master/js/jquery.toast.js"></script>
</body>

</html>