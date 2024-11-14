<?php
session_start();
$checkBox = implode(',', $_POST['a']);
$carid=$_SESSION["cid"];
$con=new mysqli("localhost","root","","car_project");
$r=$con->query("Insert into feature(features,car_id) Values ('" . $checkBox . "','$carid')");

if ($r)
{
    header("location:specification.php");
    echo "record inserted";
}
  
 else
     echo "<style>color:white</style>retry";
?>