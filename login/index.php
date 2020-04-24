<?php include '../assets/include-atas.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .img {
            width: 25%;
            margin: 0 auto !important;
        }

        body {
            background: url("../img/background.jpg");
            background-size: cover;
        }

        .container {
            background-color: rgba(255, 255, 255, .7);
            border-radius: 5px;
        }

        input {
            border: none !important;
            border-bottom: 3px solid black !important;
            background: rgba(255, 255, 255, 0) !important;
            border-radius: 0 !important;

        }

        .form-group input:focus {
            outline: none !important;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
</head>

<body>
    <div class="container mx-auto shadow pb-5 px-5 pt-3 mt-3 col-lg-4 mb-5">
        <form action="proses-login.php" method="post" class=" d-flex flex-column">
            <img src="../img/login.png" alt="" class="img-fluid rounded-circle img-thumbnail align-items-center">
            <h2 class="text-center">Form Login</h2>
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <button type="submit" class="btn btn-outline-primary align-items-end mt-3" name="btnlogin">Login</button>
        </form>
    </div>
</body>

</html>