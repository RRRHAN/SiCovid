<?php
include '../../assets/connect.php';
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $suhu = $_POST['suhu'];
    $provinsi = $_POST['provinsi'];
    $status = $_POST['status'];
    $sql = "INSERT INTO pasien(id_pasien, nama, umur, alamat, suhu, provinsi, status)
    VALUES (null, '$nama', '$umur', '$alamat', '$suhu', '$provinsi', '$status')";

    $res = mysqli_query($connect, $sql);

    $count = mysqli_affected_rows($connect);

    if ($res == 1) {
        header("Location: ../pasien.php");
    }
}

include '../../assets/include-atas.php';
$provinsi = mysqli_query($connect, "SELECT * FROM provinsi");
$status = mysqli_query($connect, "SELECT * FROM status");
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
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="anggota">Nama</label>
                            <input type="text" class="form-control" name="nama" id="anggota" placeholder="Masukkan nama pasien">
                            <small class="form-text text-muted">Contoh: lorem ipsum</small>
                        </div>
                        <div class="form-group">
                            <label for="umur">umur</label>
                            <input type="number" class="form-control" name="umur" id="umur" placeholder="Masukkan umur pasien">
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat pasien">
                        </div>
                        <div class="form-group">
                            <label for="suhu">suhu</label>
                            <input type="number" class="form-control" name="suhu" id="suhu">
                        </div>
                        <div class="form-group">
                            <label for="provinsi">PROVINSI</label>
                            <select name="provinsi" id="provinsi" style="width: 100%" required>
                                <option value="">-- PILIH PROVINSI PASIEN --</option>
                                <?php while ($k = mysqli_fetch_assoc($provinsi)) : ?>
                                    <option value="<?= $k["id_provinsi"]; ?>"><?= $k["provinsi"]; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <label for="status">ID status</label>
                        <select name="status" id="status" style="width: 100%" required>
                            <option value="">-- PILIH STATUS PASIEN --</option>
                            <?php while ($k = mysqli_fetch_assoc($status)) : ?>
                                <option value="<?= $k["id_status"]; ?>"><?= $k["status"]; ?></option>
                            <?php endwhile; ?>
                        </select>
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