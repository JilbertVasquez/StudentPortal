<?php

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    include "../class/dbh.classes.php";
    include "../class/adminlogin.classes.php";
    include "../class/adminlogin-contr.classes.php";

    $adminlogin = new AdminLoginContr($username, $pwd);

    $adminlogin->LOGINADMIN();

    // header("location: ../index.php?error=none");
    header("location: ../adminlogin.php?login=success");
}