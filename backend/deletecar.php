<?php
$con=new mysqli("localhost","root","","car_project");
$id=$_REQUEST["a"];
$r=$con->query("delete from car_detail where id='$id' ");
if($r)

    header("location:viewcar.php");

?>