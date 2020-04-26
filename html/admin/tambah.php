<?php
include '../../assets/connect.php';
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
    $ekstensi_file = explode('.', $namafile);
    $ekstensi_file = end($ekstensi_file);
    $ekstensifile = strtolower($ekstensi_file);

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
    // $foto = "ok";

    if ($foto) {
        $sql = "INSERT INTO admin(id_admin, nama, username, password, foto) 
        VALUES (null, `$nama`, `$username`, `$password`, `$foto`)";

        $res = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    }
    $count = mysqli_affected_rows($connect);

    if ($res == 1) {
        header("Location: ../admin.php");
    }
}

include '../../assets/include-atas.php';
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
                    <h2>Tambah Data pasien</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama admin">
                            <small class="form-text text-muted">Contoh: lorem ipsum</small>
                        </div>
                        <div class="form-group">
                            <label for="username">username</label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Masukkan username admin">
                        </div>
                        <div class="form-group">
                            <label for="password">password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Masukkan password admin">
                        </div>
                        <div class="form-group">
                            <label for="foto">foto</label>
                            <input type="file" class="form-control" name="foto" id="foto" placeholder="Masukkan foto admin">
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