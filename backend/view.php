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
    <title>view category</title>
    <link rel="icon" href="logo3.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <style>
        /* Add CSS to style the table border */
        table {
            border-collapse: collapse;
            width: 100%;
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

require ("sidebar.php");
require ("header.php");



$con=new mysqli("localhost" ,"root","","car_project");
$r=$con->query("select * from category");

echo"<div style='width:500px; margin:auto'>";
echo"<table id='example' border='3' align='center' cellspacing=0 cellpadding=10> ";
echo"<thead> <tr><th>Id</th><th>Category</th><th>Image</th><th>Delete</th></tr></thead> <tbody>";

while($row=$r->fetch_array())
{
    echo "<tr><td>$row[0]</td>";
    echo "<td>$row[1]</td>";
    echo "<td><img src='category/$row[2]' height=100 width=100></td>
    <td> <a href='delete.php?a=$row[0]'>Delete</a></td></tr>";
       

}
echo "</tbody></table></div>"
?>
<!-- </table> -->

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