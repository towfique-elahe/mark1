<?php
    $connection= mysqli_connect('localhost','autoomot_mark1','loveyoumaa','autoomot_mark1_elahe') or die ("Database are not connected");
    session_start();

    error_reporting(0);

    if(!($_SESSION['useremail']=="")) {
        header('location: home.php');
    }

    if (isset($_POST['login'])) {
        $UserEmail = $_POST['mail'];
        $Password = $_POST['pass'];

        if($UserEmail=="" && $Password==""){
            echo '<script> 
                alert("Email and Password fields are required");
            </script>';
        }

        elseif($UserEmail==""){
            echo '<script> 
            alert("Email field are required");
        </script>';
        }

        elseif($Password==""){
            echo '<script> 
            alert("Password field are required");
        </script>';
        }

        else{
            $signin="SELECT * FROM `user` WHERE `email_address` = '$UserEmail' AND `password` = '$Password'";
            $signinquery = mysqli_query($connection, $signin);
    
            if (mysqli_fetch_array($signinquery)) {
                $_SESSION['useremail'] = $UserEmail;
                header('location: home.php');
            }
    
            else{
                echo '<script> 
                        alert("User Does not Exists in Admin Table");
                    </script>';
            }
        }
    }       
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./login.css">
    <title>Login | Mark1.</title>
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
                <a href="register.php" class="reg-button">Register</a>
            </div>

            <!-- body section -->
            <div id="body">
                <div class="image-section">
                    <img src="./images/login hero image.svg" alt="">
                </div>

                <hr class="divider1">

                <div class="input-section">
                    <h2>Login to Your Account</h2>
                    <p>Don't have an account? <a href="register.php">Register</a></p>

                    <div class="inputs">
                        <form action="" method="post">
                            <label for="mail">Email Address</label>
                            <div class="email-input-box input-box">
                                <ion-icon name="mail-outline"></ion-icon>
                                <input type="email" name="mail" id="mail">
                            </div>
                            <label for="pass">Password</label>
                            <div class="password-input-box input-box">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                                <input type="password" name="pass" id="pass">
                            </div>
                            <br>
                            <input class="submit-button" type="submit" name="login" value="Login">
                        </form>
                    </div>
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