<?php
require("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="cardetail.css">
</head>
<style>
   
</style>
<body>
<form action="spdata.php" method="POST" enctype="multipart/form-data">

<table border='0' align='center' cellspacing=0 cellpadding=10 class="table table-bordered">
    <tr>
        <td colspan="2" align='center'>
            ADD CAR-SPECIFICATION
        </td>
    </tr>
    

    <tr>
        <td>Mileage</td>
        <td><input type="text" name="mg" class="form-control"></td>
    </tr>

    <tr>
        <td>Engine</td>
        <td><input type="text" name="eng" class="form-control"></td>
    </tr>

    <tr>
        <td>Max Power</td>
        <td><input type="text" name="mx" class="form-control"></td>
    </tr>

    <tr>
        <td>Torque</td>
        <td><input type="text" name="torq" class="form-control"></td>
    </tr>

    <tr>
        <td>Seats</td>
        <td> <input type="text" name="seat" class="form-control"></td>
    </tr>
    <tr>
        <td>Ownership</td>
        <td> <select name="own" id="" style=' width: 50%;font-size: larger;border-radius: 8px;border: 2px solid black; display: flex; text-align: center;'>
            <option value="First Hand">First Hand</option>
            <option value="Second Hand">Second Hand</option>
            <option value="Third Hand">Third Hand</option>
        </select></td>
    </tr>

    <tr>
        <td>Engine Type</td>
        <td> <input type="text" name="engtype" class="form-control"></td>
    </tr>

   <tr>
        <td>No of Cylinder</td>
        <td> <input type="text" name="cylinder" class="form-control"></td>
    </tr>

   <tr>
        <td>Length</td>
        <td> <input type="text" name="len" class="form-control"></td>
    </tr>

   <tr>
        <td>Width</td>
        <td> <input type="text" name="wid" class="form-control"></td>
    </tr>

   <tr>
        <td>Height</td>
        <td> <input type="text" name="hei" class="form-control"></td>
    </tr>

   <tr>
        <td>Wheel Base</td>
        <td> <input type="text" name="base" class="form-control"></td>
    </tr>

   <tr>
        <td>Kerb Weight</td>
        <td> <input type="text" name="kerb" class="form-control"></td>
    </tr>

    <tr>
        <td>Gear Box</td>
        <td> <input type="text" name="gb" class="form-control"></td>
    </tr>

    <tr>
        <td>Drive Type</td>
        <td> <input type="text" name="dt" class="form-control"></td>
    </tr>

    <tr>
        <td>Steering Type</td>
        <td> <input type="text" name="st" class="form-control"></td>
    </tr>

    <tr>
        <td>Front Brake</td>
        <td> <input type="text" name="fb" class="form-control"></td>
    </tr>

    <tr>
        <td>Rear Brake</td>
        <td> <input type="text" name="rb" class="form-control"></td>
    </tr>

    <tr>
        <td>Alloy Wheel Size</td>
        <td> <input type="text" name="aws" class="form-control"></td>
    </tr>

    

    <tr>
  


    <tr>
        <td colspan='2' align='center'> <button class="btn2">Submit</button></td>
    </tr>

</table>

</form>
</body>
</html>