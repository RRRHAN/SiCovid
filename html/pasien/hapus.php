<?php
include '../../assets/connect.php';
include '../../login/cek-login.php';

$id = $_GET['id'];



$result = mysqli_query($connect, "DELETE FROM pasien WHERE id_pasien = $id") or die(mysqli_error($connect));



if ($result) {
    echo "<script>
    alert('PASIEN BERHASIL DIHAPUS');
    document.location.href = '../pasien.php';
    </script>";
} else {
    echo "<script>
    alert('PASIEN GAGAL DIHAPUS');
    document.location.href = '../pasien.php';
    </script>";
}
