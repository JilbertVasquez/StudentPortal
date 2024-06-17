<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Nunito Sans' rel='stylesheet'>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.1/css/boxicons.min.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    <title>Admin Portal</title>
</head>
<body >
    <div class="container d-flex flex-column bg-light col-md-6">
        <div class="container2 d-flex flex-row col-md-12">
            <div class="school-name d-flex flex-column justify-content-center align-items-center ">
                <h1 class="text-uppercase">alien university</h1>
                <h2 class="text-uppercase">Admin portal</h2>
            </div>
            <div class="ufo-photo">
                <img class="ufo-pic " src="photos\ufo-flying.png" alt="ufo">
            </div>
        </div>
        <div class="container3 col-md-12">
        <h4 class=" head d-flex justify-content-center align-items-center text-uppercase text-center mt-2">Administrator Login</h4>
        </div>
        <div class="container4 bg-light d-flex justify-content-center align-items-center col-md-12" >
            <div class="inner-div d-flex bg-light rounded flex-column ">
                <h4 class="login-label text-uppercase">login</h4>
                    <form action="includes/adminlogin.inc.php" class="d-flex flex-column justify-content-center align-items-center" method="POST">
                        <input type="username" class="username-input rounded" placeholder= "username" name="username">
                        <input type="pwd" class="pwd-input rounded" placeholder="password" name="pwd">
                        <button type="submit" name="submit" class="btn rounded mt-4 text-uppercase">login</button>
                    </form>
                    <p class="forgot text-uppercase">forgot password? <a href="#">click here</a></p>
            </div>
        </div>
        <!-- <h1>hello world</h1> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>