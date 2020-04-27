<?php
include '../../assets/connect.php';
include '../../assets/include-atas.php';
include '../../login/cek-login.php';

$id = $_GET['id'];

$result = mysqli_query($connect, "SELECT * FROM pasien INNER JOIN provinsi INNER JOIN status 
WHERE pasien.id_provinsi = provinsi.id_provinsi AND pasien.id_status = status.id_status");
$pasien = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style></style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="../pasien.php"><button type="button" class="btn btn-primary ml-3 mt-3" style="width: 150px"><i class="fas fa-angle-double-left"></i> Back</button></a>
    <div class="mx-auto shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 30px; width: 1000px; border-bottom: 5px solid grey">
        <table class="table table-striped">
            <tr>
                <td rowspan="6" style="width: 350px"><img src="../../img/nophoto.jfif" alt="" width="300px"></td>
                <td>NAMA</td>
                <td>:</td>
                <td><?= $pasien['nama']; ?></td>
            </tr>
            <tr>
                <td>UMUR</td>
                <td>:</td>
                <td><?= $pasien['umur']; ?></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td><?= $pasien['alamat']; ?></td>
            </tr>
            <tr>
                <td>SUHU</td>
                <td>:</td>
                <td><?= $pasien['suhu']; ?></td>
            </tr>
            <tr>
                <td>PROVINSI</td>
                <td>:</td>
                <td><?= $pasien['provinsi']; ?></td>
            </tr>
            <tr>
                <td>STATUS</td>
                <td>:</td>
                <td><?= $pasien['status']; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>
<?php include '../../assets/include-bawah.php'; ?>