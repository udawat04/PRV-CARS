<?php
$con=new mysqli("localhost","root","","car_project");
$id=$_REQUEST["a"];
$r=$con->query("delete from category where id='$id' ");
if($r)

    header("locaion:view.php");

?>