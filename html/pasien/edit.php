<?php
include '../../assets/connect.php';
include '../../login/cek-login.php';
if (isset($_POST['simpan'])) {


    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $alamat = $_POST['alamat'];
    $suhu = $_POST['suhu'];
    $provinsi = $_POST['provinsi'];
    $status = $_POST['status'];

    $result = mysqli_query($connect, "UPDATE pasien SET 
    nama = '$nama',
    umur = '$umur',
    alamat = '$alamat',
    suhu = '$suhu',
    id_provinsi = '$provinsi',
    id_status = '$status'
    WHERE id_pasien = '$id'") or die(mysqli_error($connect));

    if ($result) {
        echo "<script>
        alert('BUKU BERHASIL DI EDIT');
        document.location.href = '../pasien.php';
        </script>";
    } else {
        echo "<script>
        alert('BUKU GAGAL DI EDIT');
        document.location.href = '../pasien.php';
        </script>";
    }
}
include '../../assets/include-atas.php';

$id = $_GET['id'];

$provinsi = mysqli_query($connect, "SELECT * FROM provinsi");
$status = mysqli_query($connect, "SELECT * FROM status");

$pasien = mysqli_fetch_assoc(mysqli_query($connect, "SELECT * FROM pasien inner join provinsi using(id_provinsi) inner join status using(id_status) WHERE id_pasien = '$id'"));
// var_dump($pasien);
// die;

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
                    <h2>Edit Data pasien</h2>
                </div>
                <div class="card-body">
                    <form method="post" action="">
                        <input type="hidden" value="<?= $pasien["id_pasien"]; ?>" name="id">
                        <div class="form-group">
                            <label for="anggota">Nama</label>
                            <input type="text" class="form-control" name="nama" id="anggota" placeholder="Masukkan nama pasien" value="<?= $pasien["nama"]; ?>">
                            <small class="form-text text-muted">Contoh: lorem ipsum</small>
                        </div>
                        <div class="form-group">
                            <label for="umur">umur</label>
                            <input type="number" class="form-control" name="umur" id="umur" placeholder="Masukkan umur pasien" value="<?= $pasien["umur"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat pasien" value="<?= $pasien["alamat"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="suhu">suhu</label>
                            <input type="number" class="form-control" name="suhu" id="suhu" value="<?= $pasien["suhu"]; ?>">
                        </div>
                        <div class="form-group">
                            <label for="provinsi">PROVINSI</label>
                            <select name="provinsi" id="id_provinsi" style="width: 100%" required>
                                <option value="<?= $pasien["id_provinsi"]; ?>"><?= $pasien["provinsi"]; ?></option>
                                <?php while ($p = mysqli_fetch_assoc($provinsi)) : ?>
                                    <option value="<?= $p["id_provinsi"]; ?>"><?= $p["provinsi"]; ?></option>
                                <?php endwhile; ?>
                            </select>
                        </div>
                        <label for="status">status</label>
                        <select name="status" id="status" style="width: 100%" required>
                            <option value="<?= $pasien["id_status"]; ?>"><?= $pasien["status"]; ?></option>
                            <?php while ($s = mysqli_fetch_assoc($status)) : ?>
                                <option value="<?= $s["id_status"]; ?>"><?= $s["status"]; ?></option>
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