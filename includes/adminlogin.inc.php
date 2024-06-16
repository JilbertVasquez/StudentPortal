<?php

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    include "../classes/dbh.classes.php";
    include "../classes/adminlogin.classes.php";
    include "../classes/adminlogin-contr.classes.php";

    $adminlogin = new AdminLoginContr($username, $pwd);

    $adminlogin->loginAdmin();
}
?>
