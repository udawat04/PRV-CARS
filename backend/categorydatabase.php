  <?php

$add_category=$_POST["cat"];
echo"Category= $add_category";
$r = move_uploaded_file($_FILES["aa"]["tmp_name"],"category/".$_FILES["aa"]["name"]);
$image=$_FILES["aa"]["name"];
$con=new mysqli("localhost","root","","car_project");
$r= $con->query("insert into category (category,pname) VALUES ('$add_category','$image')");


if ($image)
{
  header("location:category.php");
  echo "record inserted";
}

if ($r) 
     echo "</br><style>color:white</style>record inserted";
 else
     echo "<style>color:white</style>retry";
?>



