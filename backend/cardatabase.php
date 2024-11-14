<?php 
session_start();
$category=$_POST['ct'];
$brand=$_POST['bd'];
$car_name= $_POST["cname"];
$km_driven= $_POST["kdriven"];
$fuel_type = $_POST["r1"];
$transmission =$_POST["r2"];
$model= $_POST["model"];
$price = $_POST["price"];
$ryear = $_POST["ry"];
$rto= $_POST["rto"];
$r = move_uploaded_file($_FILES["img"]["tmp_name"],"upload/".$_FILES["img"]["name"]);
echo"price=",$price;
$image=$_FILES["img"]["name"];


$con=new mysqli("localhost","root","","car_project");

$r= $con->query("insert into car_detail (`Category`,`brand`, `car name`, `km driven`, `fuel type`, 
`transmission`, `model`, `price`, `registration year`,`image`,RTO) VALUES ('$category','$brand','$car_name','$km_driven','$fuel_type',
'$transmission','$model','$price','$ryear','$image','$rto')");




if ($r)
{
    $last_id = $con->insert_id;
    $_SESSION["cid"]=$last_id;
    header("location:features.php");
}
  

?>