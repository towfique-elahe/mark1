<?php
    $connection= mysqli_connect('localhost','autoomot_mark1','loveyoumaa','autoomot_mark1_elahe') or die ("Database are not connected");
    session_start();

    if (isset($_POST['register'])) {
        $Email = $_POST['mail'];
        $Password = $_POST['pass'];
        $AddonDate = date('D d-m-Y');
    
        $query="INSERT INTO `user` (`email_address`, `password`, `account_addon_date`) VALUES ('$Email', '$Password', '$AddonDate');";
        $submit=mysqli_query($connection, $query);

        if($submit){
            echo '<script> 
              alert("Registration Successful");
            </script>';
          }
  
          else{
            echo '<script> 
              alert("Registration Failed. Try again");
            </script>';
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
    <title>Register | Mark1.</title>
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
                <a href="index.php" class="reg-button">Login</a>
            </div>

            <!-- body section -->
            <div id="body">
                <div class="input-section">
                    <h2>Register to Get Started</h2>
                    <p>Have an account? <a href="index.php">Login</a></p>

                    <div class="inputs">
                        <form action="" method="post">
                            <label for="mail">Email Address</label>
                            <div class="email-input-box input-box">
                                <ion-icon name="mail-outline"></ion-icon>
                                <input type="email" name="mail" id="mail" required>
                            </div>
                            <label for="pass">Password</label>
                            <div class="password-input-box input-box">
                                <ion-icon name="lock-closed-outline"></ion-icon>
                                <input type="password" name="pass" id="pass" required>
                            </div>
                            <br>
                            <input class="submit-button" type="submit" name="register" value="Register">
                        </form>
                    </div>
                </div>

                <hr class="divider1">

                <div class="image-section">
                    <img src="./images/register page hero image.svg" alt="">
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