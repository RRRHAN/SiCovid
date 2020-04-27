<?php
session_start();
include '../assets/connect.php';
if (isset($_POST['btnlogin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id_admin, nama, foto FROM admin 
            WHERE username='$username' AND password='$password'";
    $res = mysqli_query($connect, $sql);

    $count = mysqli_affected_rows($connect);

    if ($count == 1) {
        $data_login = mysqli_fetch_assoc($res);

        $_SESSION['id_admin'] = $data_login['id_admin'];

        $_SESSION['nama'] = $data_login['nama'];

        $_SESSION['foto'] = $data_login['foto'];
        // var_dump($_SESSION);
        // die;

        header("Location: http://localhost/corona/index.php");
        die;
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}
