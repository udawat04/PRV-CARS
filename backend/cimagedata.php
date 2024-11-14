<?php 
session_start();
$r = move_uploaded_file($_FILES["img1"]["tmp_name"],"slider/".$_FILES["img1"]["name"]);
$image1=$_FILES["img1"]["name"];

$r = move_uploaded_file($_FILES["img2"]["tmp_name"],"slider/".$_FILES["img2"]["name"]);
$image2=$_FILES["img2"]["name"];

$r = move_uploaded_file($_FILES["img3"]["tmp_name"],"slider/".$_FILES["img3"]["name"]);
$image3=$_FILES["img3"]["name"];

$r = move_uploaded_file($_FILES["img4"]["tmp_name"],"slider/".$_FILES["img4"]["name"]);
$image4=$_FILES["img4"]["name"];

$r = move_uploaded_file($_FILES["img5"]["tmp_name"],"slider/".$_FILES["img5"]["name"]);
$image5=$_FILES["img5"]["name"];

$r = move_uploaded_file($_FILES["img6"]["tmp_name"],"slider/".$_FILES["img6"]["name"]);
$image6=$_FILES["img6"]["name"];

$r = move_uploaded_file($_FILES["img7"]["tmp_name"],"slider/".$_FILES["img7"]["name"]);
$image7=$_FILES["img7"]["name"];

$r = move_uploaded_file($_FILES["img8"]["tmp_name"],"slider/".$_FILES["img8"]["name"]);
$image8=$_FILES["img8"]["name"];

$r = move_uploaded_file($_FILES["img9"]["tmp_name"],"slider/".$_FILES["img9"]["name"]);
$image9=$_FILES["img9"]["name"];

$r = move_uploaded_file($_FILES["img10"]["tmp_name"],"slider/".$_FILES["img10"]["name"]);
$image10=$_FILES["img10"]["name"];

$r = move_uploaded_file($_FILES["img11"]["tmp_name"],"slider/".$_FILES["img11"]["name"]);
$image11=$_FILES["img11"]["name"];

$r = move_uploaded_file($_FILES["img12"]["tmp_name"],"slider/".$_FILES["img12"]["name"]);
$image12=$_FILES["img12"]["name"];

$r = move_uploaded_file($_FILES["img13"]["tmp_name"],"slider/".$_FILES["img13"]["name"]);
$image13=$_FILES["img13"]["name"];

$r = move_uploaded_file($_FILES["img14"]["tmp_name"],"slider/".$_FILES["img14"]["name"]);
$image14=$_FILES["img14"]["name"];

$r = move_uploaded_file($_FILES["img15"]["tmp_name"],"slider/".$_FILES["img15"]["name"]);
$image15=$_FILES["img15"]["name"];

$carid=$_SESSION["cid"];

$con=new mysqli("localhost","root","","car_project");

$r= $con->query("INSERT INTO `cimage`( `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img11`, `img12`, `img13`, `img14`, `img15`, `car_id`) VALUES ('$image1','$image2','$image3','$image4','$image5','$image6','$image7','$image8','$image9','$image10','$image11','$image12','$image13','$image14','$image15','$carid')");




if ($r)
{
    header("location:cardetail.php");
    echo "record inserted";
}
  
 else
     echo "<style>color:white</style>retry";

?>