<?php
session_start();
session_destroy();
header("Location: http://localhost/corona/login/index.php");
