<?php
    include realpath(__DIR__ . '/includes/admindashboard.inc.php');
?>

<head>
    
    <link href="admindashboard.css" rel="stylesheet">
</head>
<section class="section1 container-fluid bg-danger p-0">
    <header class="d-flex container-fluid bg-primary pt-5">
        <h1 class="admin-header-1 col-md-4 text-uppercase d-flex justify-content-center">Admin Dashboard</h1>
        <h2 class="admin-header-2 col-md-4 text-uppercase d-flex text-center align-items-center">Statistic Overview</h2>
    </header>
    <section class="dashboard container-fluid bg-light pt-5 pb-5 d-flex justify-content-around">
        <section class="col-md-3 bg-primary rounded">
            <h1 class="d-flex justify-content-end px-4 align-items-center pt-4">2</h1>
            <h5 class="d-flex justify-content-end px-4 text-uppercase align-items-center pb-4">total students</h5>
            <button class="students-btn btn d-flex justify-content-between px-4 text-uppercase rounded"><h5>All Students</h5><h5>-></h5></button>
        </section>
        <section class="col-md-3 bg-primary rounded">
            <h1 class="d-flex justify-content-end px-4 align-items-center pt-4"><?php echo $studentCount; ?></h1>
            <h5 class="d-flex justify-content-end px-4 text-uppercase align-items-center pb-3">total users</h5>
            <button class="students-btn btn d-flex justify-content-between px-4 text-uppercase rounded"><h5>All Users</h5><h5>-></h5></button>
        </section>
        <section class="col-md-3 bg-primary rounded">
            <h3 class="d-flex justify-content-end px-4 align-items-center pt-3 text-uppercase">Welcome</h3>
            <h5 class="d-flex justify-content-end px-4 text-uppercase align-items-center pb-2 col-md-6">Vasquez, Jilbert S.</h5>
            <button class="students-btn btn d-flex justify-content-between px-4 text-uppercase rounded"><h5>User Account</h5><h5>-></h5></button>
        </section>
    </section>
</section>
