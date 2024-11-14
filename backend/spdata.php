<?php 
session_start();
$milege=$_POST['mg'];
$engine= $_POST["eng"];
$maxpower= $_POST["mx"];
$torque= $_POST["torq"];
$seat= $_POST["seat"];
$owner=$_POST['own'];
$enginetype=$_POST['engtype'];
$cylinder=$_POST['cylinder'];
$length=$_POST['len'];
$width=$_POST['wid'];
$height=$_POST['hei'];
$wheelbase=$_POST['base'];
$kerbweight=$_POST['kerb'];
$gearbox=$_POST['gb'];
$drivetype=$_POST['dt'];
$steering=$_POST['st'];
$frontbrake=$_POST['fb'];
$rearbrake=$_POST['rb'];
$alloysize=$_POST['aws'];
$carid=$_SESSION["cid"];

$con=new mysqli("localhost","root","","car_project");

$r= $con->query("INSERT INTO `specification`(`Mileage`, `Engine`, `Max Power`, `Torque`, `Seats`, `Ownership`, `Engine Type`, `No of Cylinder`, `Length`, `Width`, `Height`, `Wheel Base`, `Kerb Weight`, `Gear Box`, `Drive Type`, `Steering Type`, `Front Brake`, `Rear Brake`, `Alloy Wheel Size`, `car_id`) VALUES ('$milege','$engine','$maxpower','$torque','$seat','$owner','$enginetype','$cylinder','$length','$width','$height','$wheelbase','$kerbweight','$gearbox','$drivetype','$steering','$frontbrake','$rearbrake','$alloysize','$carid')");



if ($r)
{
    header("location:carimages.php");
    echo "record inserted";
}
  
 else
     echo "<style>color:white</style>retry";

?>