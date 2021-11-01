<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a href="index.php"><img src="images/logo.png" height="50" width="50" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="discover.php">About Us</a>
                    </li> -->
                    <?php

                    if (isset($_SESSION["userid"])) {
                        echo "<li class='nav-item'><a class = 'nav-link' href='questionbank.php'>Insert Question</a></li>";
                        echo "<li class='nav-item'><a class = 'nav-link' href='profile.php'>Edit Question</a></li>";
                        echo "<li class='nav-item'><a class = 'nav-link' href='logout.inc.php'>Log out</a></li>";
                    } else {
                        echo "<li class='nav-item'><a class = 'nav-link active' href='signup.php'>Sign Up</a></li>";
                        echo "<li class='nav-item'><a class = 'nav-link active' href='login.php'>Login</a></li>";
                    }

                    ?>
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
    <nav>
        <div class="wrapper">
            <!-- <a href="index.php"><img src="images/logo.png" alt=""></a> -->
            <!-- <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="discover.php">About Us</a></li>
                <?php

                // if (isset($_SESSION["userid"])) {
                //     echo "<li><a href='questionbank.php'>Question Bank</a></li>";
                //     echo "<li><a href='profile.php'>Profile Page</a></li>";
                //     echo "<li><a href='logout.inc.php'>Log out</a></li>";
                // } else {
                //     echo "<li><a href='signup.php'>Sign Up</a></li>";
                //     echo "<li><a href='login.php'>Login</a></li>";
                // }

                ?>
            </ul> -->
        </div>
    </nav>
    <div class="wrapper">