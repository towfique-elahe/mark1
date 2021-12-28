<?php
    $connection= mysqli_connect('localhost','autoomot_mark1','loveyoumaa','autoomot_mark1_elahe') or die ("Database are not connected");
    session_start();
    if(!$_SESSION['useremail']) {
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="./home.css">
    <title>Home | Mark1.</title>
</head>

<body>
    <div id="container">
        <!-- designs -->
        <div id="right-middle-design">
            <img src="./images/right middle design.svg" alt="">
        </div>
        <div id="left-bottom-design">
            <img src="./images/left bottom design.svg" alt="">
        </div>

        <div id="container2">
            <!-- header -->
            <div id="header">
                <a href="#"><img src="./images/mark1. logo.svg" alt="logo"></a>
                <div class="menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <a href="logout.php" class="reg-button">Logout</a>
            </div>

            <!-- body section -->
            <div id="body">
                <div class="welcome-section">
                    <h2>Welcome to The</h2>
                    <img src="./images/Mark1.svg" alt="">
                    <p>Build Awesome Things with Us</p>
                    <a href="#">Get in Touch</a>
                </div>

                <div class="image-section">
                    <img src="./images/welcome design.svg" alt="">
                </div>
            </div>

            <div id="footer">
                <a href="#">Privacy Policy</a>
                <a href="#">Copywrite @ Mark1. 2021</a>
            </div>
        </div>
    </div>
</body>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</html>