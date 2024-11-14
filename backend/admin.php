<?php
require('connection.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="icon" href="logo3.png" type="image/x-icon">
</head>
<body>
   
    <div class="wrapper">
            <form method="POST">
                <h1>Login</h1>
                
                <div class="input-box">
                
                    <input type="text" placeholder="Username" required name="uname">
                </div>
                
                <div class="input-box">
               
                    <input type="password" placeholder="Password" name="upass">
                </div>

                <div class="remember-forgot">
                    <label><input type="checkbox">Remember me</label>
                    <a href="#">Forgot Password</a>
                </div>
                <div class="btns">
                    <button type="submit" class="btn" name="login">Login<span class="glyphicon glyphicon-envelope"></span></button>
                </div>

            </form>
    <?php
    if(isset($_POST['login']))
    {
        $con=new mysqli("localhost","root","","adminportal");

        $query ="SELECT * FROM `admin-login` WHERE `username`= '$_POST[uname]' AND `password`= '$_POST[upass]'";   
        $result=mysqli_query($con,$query);

        if(mysqli_num_rows($result)==1)
        {
            session_start();
            $_SESSION['adminloginid']=$_POST['uname'];
            header("location:admin-panel.php");


        }
        else{
            echo "<script>alert('INCORRECT');</script>";
        }
       
         
    }
   
    ?>
  
 </body>
</html>