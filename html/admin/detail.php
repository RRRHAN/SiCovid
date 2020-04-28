<?php
include '../../login/cek-login.php';
include '../../assets/connect.php';
include '../../assets/include-atas.php';

$id = $_GET['id'];

$result = mysqli_query($connect, "SELECT * FROM admin WHERE id_admin = '$id'");
$admin = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background: url("../../img/background.jpg");
            background-size: cover;
        }

        .bungkus {
            border-radius: 5px;
            margin-bottom: 20px;
            padding-bottom: 10px;
        }

        img {
            border: 3px solid black
        }
    </style>
    <style></style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="../admin.php"><button type="button" class="btn btn-primary ml-3 mt-3" style="width: 150px"><i class="fas fa-angle-double-left"></i> Back</button></a>
    <div class="bungkus mx-auto shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 30px; width: 1000px; border-bottom: 5px solid grey">
        <table class="table table-striped">
            <tr>
                <td rowspan="5" style="width: 350px"><img src="img/<?= $admin['foto']; ?>" alt="" width="300px"></td>
                <td>NAMA</td>
                <td>:</td>
                <td><?= $admin['nama']; ?></td>
            </tr>
            <td></td>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><?= $admin['username']; ?></td>
            </tr>
            <td></td>
            <tr>
                <td>password</td>
                <td>:</td>
                <td><?= $admin['password']; ?></td>
            </tr>
        </table>
    </div>
</body>

</html>
<?php include '../../assets/include-bawah.php'; ?>