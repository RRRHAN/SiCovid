<?php
session_start();
if (!(isset($_SESSION['id_admin']))) {
    header("Location: http://localhost/corona/login/index.php");
    die;
}
