<?php
include '../../assets/connect.php';
include '../../assets/include-atas.php';

$id = $_GET['id'];

$result = mysqli_query($connect, "SELECT * FROM admin");
$admin = mysqli_fetch_assoc($result);

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
    <a href="index.php"><button type="button" class="btn btn-primary ml-3 mt-3" style="width: 150px"><i class="fas fa-angle-double-left"></i> Back</button></a>
    <div class="mx-auto shadow-lg p-3 mb-5 bg-white rounded" style="margin-top: 30px; width: 1000px; border-bottom: 5px solid grey">
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