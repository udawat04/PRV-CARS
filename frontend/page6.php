<?php
require("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Why Choose Us</title>
    <link rel="icon" type="image/x-icon" href="logo2.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-2">
        <div style=" margin-bottom: 20px; ">
            <h2>Why Choose Us?</h2>

        </div>

        <nav class="navbar navbar-expand-lg bg-body-tertiary ">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="aboutus.php">
                                <p class="fs-5">Extended Warranty</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page4.php">
                                <p class="fs-5">Easy Return Policy</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="page5.php">
                                <p class="fs-5">Easy Financing Option</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="page6.php">
                                <p class="fs-5">140+Quality Checks</p>
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container mt-5">
        <div class="row featurette">
            <div class="col-md-7">

                <p class="lead">
                    At CARS24, we ensure that every car we procure undergoes a thorough inspection across 140 parameters. Each car is then given a full service and is refurbished to as good as new by CARS24 experts at our Mega Refurbishment Labs (MRL), where any defects are corrected. This ensures your car is ready to hit the road and you can drive with peace of mind without worrying about breakdowns.
                </p>
            </div>
            <div class="col-md-5">
                <img
                    src="https://assets.cars24.com/production/c2b-website/240405160741/js/af5f8eef9986e5973ef2459725fb3395.png" width="500" height="400" >
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
              <h3>How does it work?</h3>

              <ul>
                <li class="mt-3" >All cars are subjected to a 140 point inspection to identify imperfections and their condition</li>
                <li class="mt-3" >Each car is then refurbished by CARS24 experts at our Mega Refurbishment Labs (MRL)</li>
                <li class="mt-3" >The cars are serviced and any parts with excessive wear and tear are replaced. The car is given a makeover by our detailing team to ensure it is as good as new.</li>
              </ul>
    
            </div>

            <div class="col-md-5 order-md-1">
            <img src="https://assets.cars24.com/production/c2b-website/240405160741/js/c983bd8d50770f4324ad3044a572bccb.png" alt="" width="500" height="300" >
            </div>
          </div>
    </div>

    <?php
  require("f1.php");
  ?>

</body>

</html>