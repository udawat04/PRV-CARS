<?php

$name=$_POST["bname"];
$phone=$_POST["bpass"];
$email=$_POST["bemail"];
$carname=$_POST["vn"];
$carmodel=$_POST["vm"];
$carprice=$_POST["vp"];
$note=$_POST["note"];

$con=new mysqli("localhost","root","","car_project");
$r=$con->query("INSERT INTO `enquiry`( `name`, `phone`, `email`, `carname`, `carmodel`, `carprice`, `note`) VALUES ('$name','$phone','$email','$carname','$carmodel','$carprice','$note')");

if ($r) 
{
    header("location:enquiry.php");
     echo "record inserted";
}
 else
 { header("location:p1.php");
     echo "retry";
 }
     ?>