<?php include '../login/cek-login.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/icon.png">
    <title>SiCovid</title>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
</head>

<body class="fix-header">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <a class="logo" href="dashboard.html">
                        <b>
                        </b>
                        <span class="hidden-xs">
                            <img src="../img/nama.png" alt="home" class="light-logo" style="width: 80%; padding-top: 5px;" />
                        </span> </a>
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
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">about me</h4>
                    </div>
                    <div class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="../login/logout.php">LOGOUT</a></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                            <div class="user-bg"> <img width="100%" alt="user" src="../img/fotoku.jpg">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img src="../img/fotoku.jpg" class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white">Raihan Firmansyah</h4>
                                        <h5 class="text-white">X RPL 7 / 31</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            <form class="form-horizontal form-material">
                                <div class="form-group">
                                    <label class="col-md-12">Full Name</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="Raihan Firmansyah" class="form-control form-control-line" disabled>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="example-email" class="col-md-12">Email</label>
                                    <div class="col-md-12">
                                        <input type="email" placeholder="rehanfirmansyahr@gmail.com" class="form-control form-control-line" name="example-email" id="example-email" disabled> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Phone No</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="0895345160389" class="form-control form-control-line" disabled> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">kelas</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="X RPL 7" class="form-control form-control-line" disabled> </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-12">Absen</label>
                                    <div class="col-md-12">
                                        <input type="text" placeholder="31" class="form-control form-control-line" disabled> </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
    <script src="js/custom.min.js"></script>
</body>

</html>