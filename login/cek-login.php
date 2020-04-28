<?php
session_start();
if (!(isset($_SESSION['id_admin']))) {
    header("Location: http://localhost/SiCovid/login/index.php");
    die;
}
