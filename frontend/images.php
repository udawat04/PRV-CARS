<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Images</title>
</head>
<body>
    <!-- all images -->
    <div class="container" style="display:inline; justify-content:center" >
    <?php
                          
                             $count = 1;
                             $cid=$_REQUEST["a"];
                             $con = new mysqli("localhost", "root", "", "car_project");
                             $r=$con->query("select * from cimage where id='$cid'");
                             while ($row = $r->fetch_array()) {

                     ?>
        
        <div class="mt-2">
            <img src="../backend/slider/<?php echo $row['img1']; ?>" alt="" class="center" >
        </div>

        <div class="mt-2">
            <img src="../backend/slider/<?php echo $row['img2']; ?>" alt="" class="center" >
        </div>

        <div class="mt-2">
            <img src="../backend/slider/<?php echo $row['img3']; ?>" alt="" class="center" >
        </div>

        <div class="mt-2">
            <img src="../backend/slider/<?php echo $row['img4']; ?>" alt="" class="center" >
        </div>

        <div class="mt-2">
            <img src="../backend/slider/<?php echo $row['img5']; ?>" alt="" class="center" >
        </div>

        <div class="mt-2">
            <img src="../backend/slider/<?php echo $row['img6']; ?>" alt="" class="center" >
        </div>

        <div class="mt-2">
            <img src="../backend/slider/<?php echo $row['img7']; ?>" alt="" class="center" >
        </div>

        <div class="mt-2">
            <img src="../backend/slider/<?php echo $row['img8']; ?>" alt="" class="center" >
        </div>

        <div class="mt-2">
            <img src="../backend/slider/<?php echo $row['img9']; ?>" alt="" class="center" >
        </div>

        <div class="mt-2">
            <img src="../backend/slider/<?php echo $row['img10']; ?>" alt="" class="center" >
        </div>

        <div class="mt-2">
            <img src="../backend/slider/<?php echo $row['img11']; ?>" alt="" class="center" >
        </div>

        <div class="mt-2">
            <img src="../backend/slider/<?php echo $row['img12']; ?>" alt="" class="center" >
        </div>
<?php }?>
    </div>
</body>
</html>