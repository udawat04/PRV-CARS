<?php
session_start();
if(!isset($_SESSION['adminloginid']))
{
    header("location: admin.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view car</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <link rel="icon" href="logo3.png" type="image/x-icon">
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <style>
        /* Add CSS to style the table border */
        table {
            border-collapse: collapse;
            width: 90%;
            margin-top: 30px;
            margin-left: 35%;
        }
        #example{
            position: relative;
         left: 30px;
        }
      .dt{
        width:80%; 
        margin-top:10px;
        margin-left:30px;
      }

        th, td {
            border: 1px solid black;
            /* padding: 8px; */
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<?php
require ("header.php");
require ("topbar.php");
$con=new mysqli("localhost" ,"root","","car_project");
$r=$con->query("select * from car_detail");

echo"<div class='dt'>";
echo"<table id='example' border='1' align='center' cellspacing='0' cellpadding='10'>";
echo"<thead><tr><th>Id</th><th>Category</th><th>brand</th><th>Car name</th><th>K.M Driven</th><th>fuel type</th>
<th>Transmission</th><th>model</th><th>price</th><th>registration</th><th>image</th><th>rto</th><th>delete</th></thead> <body>";

while($row=$r->fetch_array())
{
    echo "<tr><td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td>$row[2]</td>";
    echo "<td>$row[3]</td>";
    echo "<td>$row[4]</td>";
    echo "<td>$row[5]</td>";
    echo "<td>$row[6]</td>";
    echo "<td>$row[7]</td>";
    echo "<td>$row[8]</td>";
    echo "<td>$row[9]</td>";
    echo "<td><img src='upload/$row[10]' height=100 width=100></td>";
    echo "<td>$row[11]</td>
    <td> <a href='deletecar.php?a=$row[0]'>Delete</a></td></tr>";
    
    

}
echo "</tbody></table></div>";
?>

<script>
    $(document).ready(function() {
        $('#example').DataTable(); // Correct initialization syntax
    });
</script>
 <?php
    if(isset($_POST['logout']))
    {
        session_destroy();
        header("location:category.php");
    }
    ?>
</body>
</html>