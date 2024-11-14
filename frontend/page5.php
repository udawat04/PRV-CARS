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
                            <a class="nav-link active" href="page5.php">
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
                    Planning for any big monetary expenditure takes a lot of consideration. Buy it up front or on loan?
                    Short-term EMI or long-term? To make it simpler for you, CARS24 offers flexible finance options so
                    you can buy your next car your way. You can opt for up to 6 year loan tenure, with zero down payment
                    for eligible customers and lowest EMI options. So don't pass on your dream car for a lack of
                    immediate funds-just finance it your way.
                </p>
            </div>
            <div class="col-md-5">
                <img src="https://assets.cars24.com/production/c2b-website/240405160741/js/1c52d5ea6444495ac778989e0ae88c10.png" width="441" height="271" >
                    <!-- <img src="https://assets.cars24.com/production/c2b-website/240321161127/js/05fa29738dae540689da4b0c6347a602.png"> -->
            </div>
        </div>
    </div>

    <div class="container">
        <div>
            <h3>
                How does it work?
            </h3>
        </div>

        <div class="col-md-5">
            <p>Found a car you want to buy? Visit the CARS24 app or website and click on ‘Check EMI Offers’. You will be prompted to share basic details along with your income and KYC. We will analyse your profile, check your credit score, and let you know whether you are eligible for a pre-approved loan or the lowest EMI on offer, and if you can opt for zero down payment. Once the loan is sanctioned, you can take delivery of your car with your selected loan tenure. Even if you aren’t eligible for zero down payment, don’t worry, you can still pay a minimum down payment and finance your car.</p>
            
        </div>
    </div>

    <?php
  require("f1.php");
  ?>

</body>

</html>