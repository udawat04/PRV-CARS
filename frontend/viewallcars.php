<?php
// require('header.html');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slider</title>
    <link rel="stylesheet" href="slider.css">
    <link rel="stylesheet" href="front.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  
<nav class="navbar sticky-top navbar-light bg-light" id="kora1">
    <div class="container-fluid" id="kora">

      <a class="navbar-brand"><img src="logo2.ico" alt="" style="width: 50px;"></a>
      <ul style="display: contents; list-style: none;   ">
        <li><a href="" style="text-decoration: none; color: black;">Home</a></li>
        <li><a href="" style="text-decoration: none; color: black;">Buy A Car</a></li>
        <li><a href="" style="text-decoration: none; color: seagreen;">Photos</a></li>
        <li><a href="" style="text-decoration: none; color: seagreen;">Other</a></li>
      </ul>
      <form class="d-flex" method="POST" action="\login\admin.php">
        <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> -->
        <button class="btn btn-outline-success" name="logout">Login</button>


      </form>
    </div>
  </nav>


 

<!-- body type -->
<div>
  <div style=" display: ruby; margin-left: 4.5%;  ">

  <?php


           
              $con=new mysqli("localhost","root","","car_project");
              $category=$_REQUEST["a"];
              $r=$con->query("select * from car_detail where category='$category' limit 5");
              while($row=$r->fetch_array()) {
              ?>

  <a href="viewallcars.php?a=<?php echo $row[1]; ?>">
  <div class="card" style=" height:12rem; width: 14rem; margin-bottom:30px; ">
    <img  src="../login/upload/<?php echo $row[8];?>"  class="card-img-top" alt="...">
    <div class="card-body">
      <p class="card-text"><?php echo $row[1]; ?></p>
      
    </div>
  </div></a>
<?php } ?>
              </div></div>

<?php
require("footer.php");
?>



</body>
</html>