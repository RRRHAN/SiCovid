<?php include '../../assets/connect.php';

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
                    <form method="post" action="proses-tambah.php" enctype="multipart/form-data">
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