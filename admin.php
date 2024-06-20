<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link href="admin.css" rel="stylesheet">
    <script src="../includes/changesection.js"></script>
    <title>Admin Dashboard</title>
</head>
<body class="d-flex">
    <section class="options bg-primary col-md-2">
        <header class="head d-flex">
            <img class="alien-pic mt-3 px-3" src="photos/aliens.png" alt="alien">
            <h1 class="university text-uppercase d-flex justify-content-center align-items-center mt-3">Alien University</h1>
        </header>
        <nav class="buttons d-flex flex-column pt-5 text-center">
            <button class="btn text-uppercase mt-1 mb-1 w-50 mx-auto">Dashboard</button>
            <button class="btn text-uppercase mt-1 mb-1 w-50 mx-auto">Add Student</button>
            <button class="btn text-uppercase mt-1 mb-1 w-50 mx-auto">Add Faculty</button>
            <button class="btn text-uppercase mt-1 mb-2 w-50 mx-auto">All Students</button>
            <button class="btn text-uppercase mt-1 mb-2 w-50 mx-auto">All Users</button>
            <button class="btn text-uppercase mt-1 mb-2 w-50 mx-auto">User Profile</button>
            <!-- <button class="btn text-uppercase mt-1 mb-2 w-50 mx-auto">Logout</button> -->
            <form action="includes/logout.inc.php" method="post">
                <button type="submit" class="btn text-uppercase mt-1 mb-2 w-50 mx-auto">Logout</button>
            </form>
        </nav>
    </section>
    
    <?php include 'admindashboard.php'; ?>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>