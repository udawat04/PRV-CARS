<?php
require("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-2">
        <div style=" margin-bottom: 20px; ">
            <h2>Why Choose Us?</h2>

        </div>

        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active"  href="aboutus.php">
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
                            <a class="nav-link" href="page6.php">
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

                <p class="lead">A stress-free car ownership experience starts with buying a quality pre-owned car. At
                    PRV Cars, each car we sell undergoes 140 quality checks before being refurbished by experts at our
                    Mega Refurbishment Labs (MRL). In addition to this, we provide a free 30-days warranty on all cars
                    with the option to buy Extended Warranty plans for up to 12 months that can save you from high
                    repair costs.
                    <br>
                    While we're hoping you never need to use it, here's what you get with PRV Cars Warranty:
                </p>
            </div>
            <div class="col-md-5">
                <img
                    src="https://assets.cars24.com/production/c2b-website/240321161127/js/0780024975b43bbc27de11abe476eeb3.png">
            </div>
        </div>
    </div>

    <div class="container">
        <div>
            <h3>
                What is covered under our Warranty?
            </h3>
        </div>

        <div>
     <p>       PRV Cars Warranty includes a free 30-days comprehensive cover for your car with an option to buy an extended
        warranty for up to 12 months</p>

           <p> 30-day Free Comprehensive Warranty</p>

           <p> While every car we sell undergoes a regular service, the comprehensive warranty covers almost all parts of a
            car for a period of 30 days from the date of purchase or 1,500 kms, whichever comes first.</p>

           <p> 12-month Extended Warranty</p>

            <p>Our extended warranty is valid for 12 months or 15,000 km (whichever comes first) from the day your
                comprehensive warranty ends.</p>
        </div>
    </div>

    <?php
  require("f1.php");
  ?>

</body>

</html>