<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
    
</head>

<body class="body">

<style>
*{
    margin: 0;
    padding: 0;

}

body{
    background: linear-gradient(to bottom, rgba(0,0,0,0.8), rgba(0,0,0,0)),url("images/merc2.jpg");
    background-position: center;
    background-size: cover;
    width: 97%;
    background-position: center;
    background-size: cover;
    height: 109vh;
    /* animation: infiniteScrollBg 50s linear infinite; */
    /* backdrop-filter: blur(5px); Add blur effect */
}
/* .main{
   
    width: 100%;
     background: linear-gradient(to top, rgba(0,0,0,0)50%, rgba(0,0,0,0)50%);
    background-position: center;
    background-size: cover;
    height: 109vh; 
    animation: infiniteScrollBg 50s linear infinite;
} */
.navbar{
    width: 100%;
    height: 75px;
    margin: auto;
}

.icon{
    
    width:200px;
    float: left;
    height : 70px;
    display: flex;
    align-items: center;

    
}
.small-logo {
    height: 200px; /* Adjust the height of the small logo */
}
.logo{
    color: #ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-left: 20px;
    float:left;
    padding-top: 10px;

}
.menu{
    width: 1000px;
    float: right;
    height: 70px;

}

ul{
    float: left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 50px;
    margin-top: 10px;
    font-size: 14px;

}
.menu ul li {
    display: flex;
    align-items: center; /* Align items vertically in the flex container */
    margin-bottom: 10px;
}

.menu ul li ion-icon {
    margin-right: 10px; /* Adjust as needed */
    color: white;
}

ul li a{
    text-decoration: none;
    color: white;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

}
ul li b{
    text-decoration: none;
    color: black;
    font-family: Arial;
    font-weight: bold;
    transition: 0.4s ease-in-out;

}

ul li a:hover{
    color:orange;

}
.box{
    
    position:center;
    top: 50%;
    left: 50%;
    padding: 20px;
    box-sizing: border-box;
    background: #fff;
    border-radius: 4px;
    box-shadow: 0 5px 15px rgba(0,0,0,.5);
    background: linear-gradient(to top, rgba(255, 251, 251, 0.8)50%,rgba(250, 246, 246, 0.8)50%);
    display: flex;
    align-content: center;
    width: 600px;
    height: 200px;
    margin-top: 100px;
    margin-left: 350px;
}

.box .imgBx{
    width: 150px;
    flex:0 0 150px;
}

.box .imgBx img{
    max-width: 150%;
}

.box .content{
    padding-left: 100px;
}

.box .button{
    width: 240px;
    height: 40px;
    background: #ff7200;
    border:none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}

.utton{
    width: 240px;
    height: 40px;
   
    background: #ff7200;
    border:none;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:#fff;
    transition: 0.4s ease;
}




.de{
    float: left;
    clear: left;
    display: block;
    


}


.de li a:hover{
    color:black;

}
.de .lis:hover{
    color: white;
}


.nn{
    width:100px;
    /* background: #ff7200; */
    border:none;
    height: 40px;
    font-size: 18px;
    border-radius: 10px;
    cursor: pointer;
    color:white;
    transition: 0.4s ease;

}


.nn a{
    text-decoration: none;
    color: black;
    font-weight: bold;
    
}

.overview{
    text-align: center;
    color: white; /* Add this line to set the text color to white */
    margin-top: 40px;
}

.circle{
    border-radius:48%;
    width:65px;
}

.phello{
    width: 200px;
    margin-left: -50px;
    padding: 0px;
    color: orange;
}

#stat{
    /* margin-left: -8px; */

    display: block;
    text-align: right;
    color: white;
    

}





</style>


<?php 
    require_once('connection.php');
        session_start();

    $value = $_SESSION['email'];
    $_SESSION['email'] = $value;
    
    $sql="select * from users where EMAIL='$value'";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);
    $sql2="select *from cars where AVAILABLE='Y'";
    $cars= mysqli_query($con,$sql2);
    
    // $row=mysqli_fetch_assoc($cars);
    
    
    ?>






</script>
  <div class="cd">
    <div class="main">
        <div class="navbar">
            <div class="icon">
            <img src="images\pngwing.com.png" alt="Small Logo" class="small-logo">
                <h2 class="logo">CaRs</h2>
            </div>
            <div class="menu">
               
                <ul>
                    <!-- <li><a href="#">HOME</a></li>
                    <li><a href="aboutus2.html">ABOUT</a></li> -->
                    
                    <li><ion-icon name="home"></ion-icon> <a href="#">HOME</a></li>
                    <li><ion-icon name="information-circle"></ion-icon> <a href="aboutus2.html">ABOUT</a></li>

                    <!-- <li><a href="contactus2.html">CONTACT</a></li> -->
                    <li><ion-icon name="call"></ion-icon> <a href="contactus2.html">CONTACT</a></li>
                    <!-- <li><a href="feedback/Feedbacks.php">FEEDBACK</a></li> -->
                    <li><ion-icon name="chatbox-ellipses-outline"></ion-icon><a href="feedback/Feedbacks.php">FEEDBACK</a></li>
                    <li><button class="nn"><a href="index.php">LOGOUT</a></button></li>
                    <li><img src="images/profile.png" class="circle" alt="Alps"></li>
                    <li><p class="phello">HELLO! &nbsp;<a id="pname"><?php echo $rows['FNAME']." ".$rows['LNAME']?></a></p></li>
                   
                </ul>
            </div>
            
            
        </div>
      <div><h1 class="overview">OUR CARS OVERVIEW</h1>
      <a class="status-button" id="stat" href="bookinstatus.php">BOOKING STATUS</a>

    <ul class="de">
    <?php
        while($result= mysqli_fetch_array($cars))
        {
            // echo $result['CAR_ID'];
            // echo $result['AVAILABLE'];
            
    ?>    
    
    <li>
    <form method="POST">
    <div class="box">
       <div class="imgBx">
            <img src="images/<?php echo $result['CAR_IMG']?>">
        </div>
        <div class="content">
            <?php $res=$result['CAR_ID'];?>
            <h1><?php echo $result['CAR_NAME']?></h1>
            <h2>Fuel Type : <b><?php echo $result['FUEL_TYPE']?></b> </h2>
            <h2>CAPACITY : <b><?php echo $result['CAPACITY']?></b> </h2>
            <h2>Rent Per Day : <b>₹<?php echo $result['PRICE']?>/-</b></h2>
            <button type="submit"  name="booknow" class="utton" style="margin-top: 5px;"><a href="booking.php?id=<?php echo $res;?>">book</a></button>
        </div>
    </div></form></li>
    <?php
        }
    
    ?>
    <?php 
    require_once('connection.php');
        

    $value = $_SESSION['email'];
    
    $sql="select * from users where EMAIL='$value'";
    $name = mysqli_query($con,$sql);
    $rows=mysqli_fetch_assoc($name);
    // // $sql2="select *from cars where CAR_ID=1";
    // $cars= mysqli_query($con,"select *from cars where CAR_ID=1");
    
    // $row=mysqli_fetch_assoc($cars);
    
        
        
    
    
    ?>


    


    <!-- <li>
        <div class="box">
           <div class="imgBx">
                <img src="images/lamborghini.webp">
            </div>
            <div class="content">
                <h2>LAMBORGHINI</h2>
                <p>It has a stuning look and its in good condition.</p>
                <h1><a>₹15,000/-</a></h1>
                <button class="button" ><a href="booking.html">BOOK NOW</a></button>
            </div>
        </div></li>
        <li>
            <div class="box">
               <div class="imgBx">
                    <img src="images/porsche.jpg ">
                </div>
                <div class="content">
                    <h2>PORSCHE</h2>
                    <p>It is a cheap and best car for the family trips. <br>
                    </p>
                    <h1><a>₹10,000/-</a></h1>
                    <button class="button" ><a href="booking.html">BOOK NOW</a></button>
                </div>
            </div></li> -->
            
                
           
    </ul>
    </div>
  </div>
  </div>
    
    

 
    
  <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>    
</body>
</html>