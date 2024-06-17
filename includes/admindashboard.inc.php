<?php




    include "../classes/dbh.classes.php";
    include "../classes/admindashboard.classes.php";
    include "../classes/admindashboard-cntr.classes.php";

    $adminDashboardCntr = new AdminDashboardCntr();
    $studentCount = $adminDashboardCntr->studentCount();
    // $admindashboard->loginAdmin();

?>
