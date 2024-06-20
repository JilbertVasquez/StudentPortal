<?php
include realpath(__DIR__ . '/../classes/dbh.classes.php');
include realpath(__DIR__ . '/../classes/admindashboard.classes.php');
include realpath(__DIR__ . '/../classes/admindashboard-cntr.classes.php');

$adminDashboardCntr = new AdminDashboardCntr();
$studentCount = $adminDashboardCntr->studentCount();
?>