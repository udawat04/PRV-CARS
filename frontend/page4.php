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
                            <a class="nav-link "  href="aboutus.php">
                                <p class="fs-5">Extended Warranty</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="page4.php">
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

                <p class="lead">
                    Buying a car is always an exciting decision, but we understand that sometimes things don’t work out.
                    We ensure every car we sell goes through a thorough inspection, refurbishment and service, but you
                    may still feel like the car you bought is not for you. Although we hope that never happens, we offer
                    easy 7-day returns (as long as the car has run less than 500 km) in case the car is not right for
                    you. No questions asked.
                </p>
            </div>
            <div class="col-md-5">
                <img
                    src="https://assets.cars24.com/production/c2b-website/240321161127/js/88440a417a25b2afa28eaf1fe1be3d94.png">
            </div>
        </div>
    </div>

    <div class="container">
        <div>
            <h3>
                Here's how it works:
            </h3>
        </div>

        <div>
            <ul>
                <li>Once you buy a car, you can test it for 7 days at leisure. See if it meets your requirements, is
                    functioning properly and most of all, if it's the right car for you. Drive on roads you typically
                    would to test the suspension, play your favourite music; treat it as your car</li>
                <li>If you aren't happy with the car, you can write to us at support@carioauto.com within 7 days of
                    delivery</li>
                <li>Our team will inspect the car to ensure it is in the same condition as when we sold it to you</li>
                <li>Once details are verified, the car will be picked up and a refund will be issued within 2 working
                    days</li>
            </ul>

            We encourage you to test your new vehicle thoroughly (but carefully!) during this period. Take it on the
            routes or surfaces you intend to use it for. Get your family in. Test everything from the suspension to the
            sound system. It's all yours!

        </div>


    </div>

    <?php
  require("f1.php");
  ?>

</body>

</html>