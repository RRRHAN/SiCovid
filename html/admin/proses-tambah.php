<?php
include '../../assets/connect.php';
function upload($namafoto)
{
    $namafile = $_FILES['foto']['name'];
    $error = $_FILES['foto']['error'];
    $tmpname = $_FILES['foto']['tmp_name'];

    if ($error === 4) {
        return $namafoto;
    }

    $ekstensifilevalid = ['jpg', 'jpeg', 'png'];
    $ekstensifile = strtolower(end(explode('.', $namafile)));

    if (!in_array($ekstensifile, $ekstensifilevalid)) {
        echo "<script>
    alert('YANG ANDA UPLOAD BUKAN GAMBAR');
    </script>";
        return false;
    }

    $namafoto .= '.' . $ekstensifile;
    move_uploaded_file($tmpname, 'img/' . $namafoto);

    return $namafoto;
}

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $namafoto = $_POST['foto'];
    $foto = upload($namafoto);

    // if ($foto) {
    $sql = "UPDATE admin SET
            nama = '$nama',
            username = '$username',
            password = '$password',
            foto = '$foto'
            WHERE id_admin = '$id'
        ";

    $res = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    // }
    if ($res) {
        echo "<script>
        alert('ADMIN BERHASIL DIEDIT');
        document.location.href = '../admin.php';
        </script>";
    } else {
        echo "<script>
        alert('ADMIN GAGAL DIEDIT');
        document.location.href = '../admin.php';
        </script>";
    }
}
