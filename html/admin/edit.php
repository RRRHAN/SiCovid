<?php include '../../assets/connect.php';

include '../../assets/include-atas.php';

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

    if ($foto) {
        $sql = "UPDATE admin SET
            nama = '$nama',
            username = '$username',
            password = '$password',
            foto = '$foto'
            WHERE id_admin = '$id'
        ";

        $res = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    }
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
$id = $_GET['id'];
$admin = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM admin WHERE id_admin = '$id'"));
?>

<head>
    <style>
        body {
            background: url("../../img/background.jpg");
            background-size: cover;
        }

        .form {
            background-color: rgba(255, 255, 255, .7);
            border-radius: 5px;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }
    </style>
</head>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card form">
                <div class="card-header">
                    <h2>Edit Data admin</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="hidden" value="<?= $admin["id_admin"]; ?>" name="id">
                            <input type="hidden" value="<?= $admin["foto"]; ?>" name="foto">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama admin" value="<?= $admin["nama"]; ?>">
                            <small class="form-text text-muted">Contoh: lorem ipsum</small>
                        </div>
                        <div class="form-group">
                            <label for="username">username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username admin" value="<?= $admin["username"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password admin" value="<?= $admin["password"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="foto">foto</label>
                            <input type="file" class="form-control" name="foto" id="foto" placeholder="Masukkan foto admin" value="<?= $admin["foto"]; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include '../../assets/include-bawah.php';
?>