<?php
include '../../assets/connect.php';
include '../../login/cek-login.php';
function upload($namafoto)
{
    $namafile = $_FILES['foto']['name'];
    $error = $_FILES['foto']['error'];
    $tmpname = $_FILES['foto']['tmp_name'];

    if ($error === 4) {
        echo "<script>
    alert('PILIH GAMBAR DAHULU');
    </script>";
        return false;
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
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $namafoto = implode('_', explode(' ', $nama . ' ' . $username));
    $foto = upload($namafoto);

    if ($foto) {
        $sql = "INSERT INTO admin (nama, username, password, foto) VALUES ( '$nama', '$username', '$password', '$foto')";

        $res = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    }
    if ($res) {
        echo "<script>
        alert('ADMIN BERHASIL DITAMBAH');
        document.location.href = '../admin.php';
        </script>";
    } else {
        echo "<script>
        alert('ADMIN GAGAL DITAMBAH');
        document.location.href = 'tambah.php';
        </script>";
    }
} else {
    header("Location: tambah.php");
}
