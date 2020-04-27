<?php
include '../../assets/connect.php';
include '../../login/cek-login.php';
$id = $_GET['id'];



$result = mysqli_query($connect, "DELETE FROM admin WHERE id_admin = $id") or die(mysqli_error($connect));



if ($result) {
    echo "<script>
    alert('ADMIN BERHASIL DIHAPUS');
    document.location.href = '../admin.php';
    </script>";
} else {
    echo "<script>
    alert('ADMIN GAGAL DIHAPUS');
    document.location.href = '../admin.php';
    </script>";
}
