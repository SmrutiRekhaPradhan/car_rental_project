
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>CAR RENTAL</title>
    <script type="text/javascript">
        window.history.forward();
        function noBack() {
            window.history.forward();
        }
    </script>
    <link  rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
        function preventBack() {
            window.history.forward(); 
        }
          
        setTimeout("preventBack()", 0);
          
        window.onunload = function () { null };
    </script>
</head>
<body>



<?php
require_once('connection.php');
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        
        
        if(empty($email)|| empty($pass))
        {
            echo '<script>alert("please fill the blanks")</script>';
        }

        else{
            $query="select *from users where EMAIL='$email'";
            $res=mysqli_query($con,$query);
            if($row=mysqli_fetch_assoc($res)){
                $db_password = $row['PASSWORD'];
                if(md5($pass)  == $db_password)
                {
                    header("location: cardetails.php");
                    session_start();
                    $_SESSION['email'] = $email;
                    
                }
                else{
                    echo '<script>alert("Enter a proper password")</script>';
                }



                



            }
            else{
                echo '<script>alert("enter a proper email")</script>';
            }
        }
    }







?>
    <div class="hai">
        <div class="navbar">
            <div class="icon">
                <img src="images\pngwing.com.png" alt="Small Logo" class="small-logo">
                <h2 class="logo">CaRs</h2>
            </div>
            <div class="menu">
            <ul>
                    <li><ion-icon name="home"></ion-icon> <a href="#">HOME</a></li>
                    <li><ion-icon name="information-circle"></ion-icon> <a href="aboutus.html">ABOUT</a></li>
                    <li><ion-icon name="car"></ion-icon> <a href="#">SERVICES</a></li>
                    <li><ion-icon name="call"></ion-icon> <a href="contactus.html">CONTACT</a></li>
                    <li><button class="adminbtn"><a href="adminlogin.php">ADMIN LOGIN</a></button></li>
                </ul>
            </div>
            
          
        </div>
        <div class="content">
        
            <h1>Rent your roller <br><span>To Embark on your Adventures</span></h1><br>
            <p class="par">Treat yourself to the epitome of elegance with our exclusive car selection.<br>
            Select from our extensive fleet, tailored to fulfill your desires.<br>Enjoy every moment with your family<br>
            join our community and experience the warmth and care that defines our service.<br>Unlimited adventure, anytime, anywhere. <b>24/7</b> service tailored to your journey.</p>
            <div class="form">
                <h2>Login</h2>
                <form method="POST"> 
                <input type="email" name="email" placeholder="Enter Email">
                <input type="password" name="pass" placeholder="Enter Password">
                <input class="btnn" type="submit" value="Login" name="login"></input>
                </form>
                <p class="link">Don't have an account?<br>
                <a href="register.php">Sign up</a> here</a></p>
                <p class="liw">or<br>Log in with</p>
                <div class="icon">
                    &emsp;&emsp;&emsp;&ensp;<a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon> </a>&nbsp;&nbsp;
                    <a href="https://www.instagram.com/"><ion-icon name="logo-instagram"></ion-icon> </a>&ensp;
                    <a href="https://myaccount.google.com/"><ion-icon name="logo-google"></ion-icon> </a>&ensp;
                    
                </div>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
