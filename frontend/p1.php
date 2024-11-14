<?php
require("header.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Libraries Stylesheet -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="logo2.ico">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="front.css">
</head>

<body>

    <!-- navbar -->

    <div class="container" style="position: relative;">
        <div class="row">
            <div class="col">
                <div class="container" id="l1" ">
                    <div class=" col mt-5 order-md-1">
                    <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="var(--bs-secondary-bg)"></rect><text x="50%" y="50%" fill="var(--bs-secondary-color)" dy=".3em">500x500</text>  </svg> -->

                    <div class="container mt-5" id="im" style="width: 692px;">
                        <?php
                        $id = $_REQUEST["a"];
                        $count = 1;
                        $id = $_REQUEST["a"];
                        $con = new mysqli("localhost", "root", "", "car_project");
                        $r = $con->query("SELECT * FROM `car_detail` INNER JOIN `cimage` ON car_detail.Id= cimage.Id WHERE car_detail.Id = '$id'");
                        while ($row = $r->fetch_array()) {

                        ?>
                            <div id="carouselExample" class="carousel slide">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">

                                        <img src="../backend/upload/<?php echo $row['image']; ?>" class="rounded" width="700" height="392">
                                    </div>

                                    <div class="carousel-item">

                                        <img src="../backend/slider/<?php echo $row['img2']; ?>" class="rounded" width="700" height="392" style="object-fit: fill;">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="../backend/slider/<?php echo $row['img3']; ?>" class="rounded" width="700" height="392" style="object-fit: fill;">
                                    </div>
                                    <div class="carousel-item">

                                        <img src="../backend/slider/<?php echo $row['img4']; ?>" class="rounded" width="700" height="392" style="object-fit: fill;">
                                    </div>

                                    <div class="carousel-item">
                                        <img src="../backend/slider/<?php echo $row['img5']; ?>" class="rounded" width="700" height="392" style="object-fit: fill;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../backend/slider/<?php echo $row['img6']; ?>" class="rounded" width="700" height="392" style="object-fit: fill;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../backend/slider/<?php echo $row['img7']; ?>" class="rounded" width="700" height="392" style="object-fit: fill;">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="../backend/slider/<?php echo $row['img8']; ?>" class="rounded" width="700" height="392" style="object-fit: fill;">
                                    </div>

                                </div>

                                <button class="carousel-control-prev bg-primary" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next bg-primary" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                <button class="carousel-control " id="allphoto" type="button" data-bs-target="" data-bs-slide="next" style="position: absolute; bottom: 20px; right: 0; text-decoration: none;">
                                    <a href="images.php?a=<?php echo $row[0]; ?>" style="text-decoration: none; color: #ef6e0b;">
                                        <span>
                                            <img decoding="async" src="https://stimg.cardekho.com/used-cars/common/icons/allPictures.svg" loading="eager" data-lazy="true" class="imageTransition active" </span>
                                            <span class="carousel" style="font-size: 11px; font-weight: 600; line-height: 12px; margin-right: 10px; margin-left: 7px;">All
                                                Photos</span>
                                    </a>

                                </button>
                            <?php $coun = 1;
                        } ?>

                            </div>
                    </div>
                </div>

                <div class="vdpcontainerTabBox" style="width: 306%;">
                    <ul class="ucrvdpTabs" style="margin-top: 23px; padding-left: 0; cursor: pointer;">
                        <li id="tab-id" class="hover  active">
                            <a href="#vdpCard-carOverview" style="text-decoration: none;"><span>Overview</span></a>
                        </li>

                        <li id="tab-id-vdpCard-carFeatures" class="hover  ">
                            <a href="#vdpCard-carFeatures" style="text-decoration: none;"><span>Features</span></a>
                        </li>

                        <li id="tab-id-vdpCard-recommendedUsedCars" class="hover  ">
                            <a href="#vdpCard-recommendedUsedCars" style="text-decoration: none;"><span>Specifications</span></a>
                        </li>

                        <li id="tab-id-vdpCard-ucUserReview" class="hover  ">
                            <a href="#vdpCard-ucUserReview" style="text-decoration: none;"><span>RECOMMENDED
                                    CARS</span></a>
                        </li>

                    </ul>
                </div>

                <!-- car Overview start  -->
                <div class="col mt-4 outer" style="height:300px; width: 664px;  " id="vdpCard-carOverview">
                    <?php
                    $id = $_REQUEST["a"];
                    $count = 1;
                    $id = $_REQUEST["a"];
                    $con = new mysqli("localhost", "root", "", "car_project");
                    $r = $con->query("SELECT * FROM `car_detail` INNER JOIN `specification` ON car_detail.Id= specification.s_id WHERE car_detail.Id = '$id'");
                    while ($row = $r->fetch_array()) {

                    ?>
                        <div class="container  mb-3">
                            <h2 class="title">Car Overview</h2>
                        </div>
                        <div class="container over" style=" display: flex;">
                            <ul class="row  " style=" margin-left: -10px; margin-right: -10px; list-style-type: none; ">
                                <li class="col-md-6 ">
                                    <div class="each-list" style="display: flex;">
                                        <img decoding="async" width="14px" height="14px" src="https://images10.gaadi.com/listing/vdp/co/v1/registrationYear.svg" loading="eager" />
                                        <div class="label-text">
                                            <div class="label ">Registration Year
                                                <!-- -->
                                            </div>
                                            <span class="value-text "><?php echo $row["registration year"]; ?></span>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-md-6">
                                    <div class="each-list">
                                        <img decoding="async" width="14px" height="14px" src="https://images10.gaadi.com/listing/vdp/co/v1/fuel.svg" loading="eager" />
                                        <div class="label-text">
                                            <div class="label ">Fuel Type </div>
                                            <span class="value-text "><?php echo $row["fuel type"]; ?></span>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-md-6">
                                    <div class="each-list">
                                        <img decoding="async" width="14px" height="14px" src="https://images10.gaadi.com/listing/vdp/co/v1/seats.svg" loading="eager" />
                                        <div class="label-text">
                                            <div class="label ">Seats </div>
                                            <span class="value-text "><?php echo $row["Seats"]; ?></span>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-md-6">
                                    <div class="each-list">
                                        <img decoding="async" width="14px" height="14px" src="https://images10.gaadi.com/listing/vdp/co/v1/kmsDriven.svg" loading="eager" />
                                        <div class="label-text">
                                            <div class="label ">Kms Driven
                                                <!-- -->
                                            </div>
                                            <span class="value-text "><?php echo $row["km driven"]; ?> Kms</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="each-list">
                                        <img decoding="async" width="14px" height="14px" src="https://images10.gaadi.com/listing/vdp/co/v1/rto.svg" loading="eager" />
                                        <div class="label-text">
                                            <div class="label ">RTO
                                                <!-- -->
                                            </div>
                                            <span class="value-text "><?php echo $row["RTO"]; ?></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="each-list">
                                        <img decoding="async" width="14px" height="14px" src="https://images10.gaadi.com/listing/vdp/co/v1/ownership.svg" loading="eager" />
                                        <div class="label-text">
                                            <div class="label ">Ownership
                                                <!-- -->
                                            </div>
                                            <span class="value-text "><?php echo $row["Ownership"]; ?></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="each-list">
                                        <img decoding="async" width="14px" height="14px" src="https://images10.gaadi.com/listing/vdp/co/v1/engineDisplacement.svg" loading="eager" />
                                        <div class="label-text">
                                            <div class="label ">Engine Displacement
                                                <!-- -->
                                            </div>
                                            <span class="value-text "><?php echo $row["Engine"]; ?> cc</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <div class="each-list">
                                        <img decoding="async" width="14px" height="14px" src="https://images10.gaadi.com/listing/vdp/co/v1/transmission.svg" loading="eager" />
                                        <div class="label-text">
                                            <div class="label ">Transmission
                                                <!-- -->
                                            </div>
                                            <span class="value-text "><?php echo $row["transmission"]; ?></span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    <?php $coun = 1;
                    }  ?>
                </div>
                <!-- car Overview end  -->

                <!-- car feature start -->

                <div class="col mt-4 outer" id="vdpCard-carFeatures" style="height:300px; width: 664px;">
                    <?php

                    $id = $_REQUEST["a"];
                    $con = new mysqli("localhost", "root", "", "car_project");
                    $r = $con->query("SELECT * FROM `feature` WHERE `Id`='$id'");
                    while ($row = $r->fetch_array()) {

                    ?>
                        <div class="container mb-3">
                            <h2 class="title">Features</h2>
                        </div>

                        <div class="container over" style="display: flex;">
                            <ul class="row mb-0 " style=" margin-left: -10px; margin-right: -10px; list-style-type: none; ">
                                <?php
                                $description_array = explode(",", $row['features']);
                                foreach ($description_array as $description) {
                                ?>
                                    <li class="col-md-4 ">
                                        <div class="each-list">
                                            <img decoding="async" width="10px" height="10px" src="https://stimg.cardekho.com/pwa/img/vdpN/tickG.svg" loading="eager" class="feature-icon" />
                                            <div class="label-text">
                                                <span class="value-text "><?php echo $description; ?></span>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                            </ul>
                        <?php $coun = 1;
                    }  ?>
                        </div>
                        <div class="cta-container mb-0" style="margin-top: -8px; display: inline-block; width: 100%; margin-left: 45px;">
                            <div class="cta-text turn-downside">
                                View all Features
                                <!-- -->
                                <img decoding="async" width="16px" height="16px" src="https://stimg.cardekho.com/pwa/img/ucrN/redcircleDown.svg" loading="eager" />
                            </div>
                            <div class="description-text">Comfort | Interior | Exterior | Safety | Entertainment</div>
                        </div>

                </div>
                <!-- car features div close   -->

                <!-- car Specification div start  -->

                <div class="col mt-4 outer" id="vdpCard-recommendedUsedCars" style=" width: 664px;">
                    <?php
                    $count = 1;
                    $id = $_REQUEST["a"];
                    $con = new mysqli("localhost", "root", "", "car_project");
                    $r = $con->query("SELECT * FROM `car_detail` INNER JOIN `specification` ON car_detail.Id= specification.s_id WHERE car_detail.Id = '$id'");
                    while ($row = $r->fetch_array()) {

                    ?>
                        <div class="container mb-3">
                            <h2 class="title">Specifications</h2>
                        </div>
                        <div class="container over" style="display: flex;">
                            <ul class="row mb-0 " style=" margin-left: -10px; margin-right: -10px; list-style-type: none; ">
                                <li class="col-5  ">
                                    <div class="each-list">
                                        <div class="label-text">
                                            <div class="label ">Mileage
                                                <!-- -->
                                            </div>
                                            <span class="value-text "><?php echo $row["Mileage"]; ?> kmpl</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-5">
                                    <div class="each-list">
                                        <div class="label-text">
                                            <div class="label ">Engine
                                                <!-- -->
                                            </div>
                                            <span class="value-text "><?php echo $row["Engine"]; ?> CC</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-5">
                                    <div class="each-list">
                                        <div class="label-text">
                                            <div class="label ">Max Power
                                                <!-- -->
                                            </div>
                                            <span class="value-text "><?php echo $row["Max Power"]; ?> bhp</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-5">
                                    <div class="each-list">
                                        <div class="label-text">
                                            <div class="label ">Torque
                                                <!-- -->
                                            </div>
                                            <span class="value-text "><?php echo $row["Torque"]; ?>Nm</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="col-5">
                                    <div class="each-list">
                                        <div class="label-text">
                                            <div class="label ">Seats
                                                <!-- -->
                                            </div>
                                            <span class="value-text "><?php echo $row["Seats"]; ?></span>
                                        </div>
                                    </div>
                                </li>
                                <li class="col-5">
                                    <div class="each-list">
                                        <div class="label-text">
                                            <div class="label ">Wheel Base
                                                <!-- -->
                                            </div>
                                            <span class="value-text "><?php echo $row["Wheel Base"]; ?></span>
                                        </div>
                                    </div>
                                </li>

                            </ul>

                        </div>

                        <div class="panel-collapse collapse" style="margin-left: 2%;" id="c3">
                            <hr>

                            <div class="container over mb-0" style="margin-top: -8px; display: inline-block; width: 100%; ">
                                <div class="engine">
                                    <h5 class="title">
                                        <a data-bs-toggle="collapse" href="#engine" style="color:#000; text-decoration:none;">Engine</a>
                                    </h5>
                                </div>
                                <div class="panel-collapse collapse over mt-3" id="engine">

                                    <ul class="row mb-0 " style=" margin-left: -10px; margin-right: -10px; list-style-type: none; ">
                                        <li class="col-5  ">
                                            <div class="each-list">
                                                <div class="label-text">
                                                    <div class="label ">Mileage
                                                        <!-- -->
                                                    </div>
                                                    <span class="value-text ">18.9 kmpl</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-5">
                                            <div class="each-list">
                                                <div class="label-text">
                                                    <div class="label ">Engine
                                                        <!-- -->
                                                    </div>
                                                    <span class="value-text ">998 CC</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="col-5">
                                            <div class="each-list">
                                                <div class="label-text">
                                                    <div class="label ">Max Power
                                                        <!-- -->
                                                    </div>
                                                    <span class="value-text ">67.1bhp</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="col-5">
                                            <div class="each-list">
                                                <div class="label-text">
                                                    <div class="label ">Torque
                                                        <!-- -->
                                                    </div>
                                                    <span class="value-text ">90Nm</span>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="col-5">
                                            <div class="each-list">
                                                <div class="label-text">
                                                    <div class="label ">Seats
                                                        <!-- -->
                                                    </div>
                                                    <span class="value-text ">5</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="col-5">
                                            <div class="each-list">
                                                <div class="label-text">
                                                    <div class="label ">Wheel Size
                                                        <!-- -->
                                                    </div>
                                                    <span class="value-text ">13</span>
                                                </div>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <hr>

                            <div class="container over mb-0" style="margin-top: -8px; display: inline-block; width: 100%; "">
                                <div class=" en">
                                <h5 class="title">
                                    <a data-bs-toggle="collapse" href="#dimension" style="color:#000; text-decoration:none;">Dimensions & Capacity</a>
                                </h5>
                            </div>

                            <div class="panel-collapse collapse mt-3" id="dimension">

                                <ul class="row mb-0 " style=" margin-left: -10px; margin-right: -10px; list-style-type: none; ">
                                    <li class="col-5  ">
                                        <div class="each-list">
                                            <div class="label-text">
                                                <div class="label ">Length
                                                    <!-- -->
                                                </div>
                                                <span class="value-text "><?php echo $row["Length"]; ?> mm</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-5">
                                        <div class="each-list">
                                            <div class="label-text">
                                                <div class="label ">Width
                                                    <!-- -->
                                                </div>
                                                <span class="value-text "><?php echo $row["Width"]; ?>mm</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-5">
                                        <div class="each-list">
                                            <div class="label-text">
                                                <div class="label ">Height
                                                    <!-- -->
                                                </div>
                                                <span class="value-text "><?php echo $row["Height"]; ?>mm</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-5">
                                        <div class="each-list">
                                            <div class="label-text">
                                                <div class="label ">Wheel Base
                                                    <!-- -->
                                                </div>
                                                <span class="value-text "><?php echo $row["Wheel Base"]; ?>mm</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-5">
                                        <div class="each-list">
                                            <div class="label-text">
                                                <div class="label ">Kerb Weight
                                                    <!-- -->
                                                </div>
                                                <span class="value-text "><?php echo $row["Kerb Weight"]; ?>kg</span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <hr>

                        <div class="container over mb-0" style="margin-top: -8px; display: inline-block; width: 100%; ">
                            <div class="en">
                                <h5 class="title">
                                    <a data-bs-toggle="collapse" href="#miscellaneous" style="color:#000; text-decoration:none;">Miscellaneous </a>
                                </h5>
                            </div>
                            <div class="panel-collapse collapse mt-3" id="miscellaneous">

                                <ul class="row mb-0 " style=" margin-left: -10px; margin-right: -10px; list-style-type: none; ">
                                    <li class="col-5  ">
                                        <div class="each-list">
                                            <div class="label-text">
                                                <div class="label ">Mileage
                                                    <!-- -->
                                                </div>
                                                <span class="value-text ">18.9 kmpl</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-5">
                                        <div class="each-list">
                                            <div class="label-text">
                                                <div class="label ">Engine
                                                    <!-- -->
                                                </div>
                                                <span class="value-text ">998 CC</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-5">
                                        <div class="each-list">
                                            <div class="label-text">
                                                <div class="label ">Max Power
                                                    <!-- -->
                                                </div>
                                                <span class="value-text ">67.1bhp</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-5">
                                        <div class="each-list">
                                            <div class="label-text">
                                                <div class="label ">Torque
                                                    <!-- -->
                                                </div>
                                                <span class="value-text ">90Nm</span>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="col-5">
                                        <div class="each-list">
                                            <div class="label-text">
                                                <div class="label ">Seats
                                                    <!-- -->
                                                </div>
                                                <span class="value-text ">5</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-5">
                                        <div class="each-list">
                                            <div class="label-text">
                                                <div class="label ">Wheel Size
                                                    <!-- -->
                                                </div>
                                                <span class="value-text ">13</span>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                        <hr>

                    <?php $coun = 1;
                    }  ?>
                </div>

                <div class="cta-container mb-4" style="margin-top: -8px; display: inline-block; width: 100%; margin-left: 45px;">
                    <div class="cta-text turn-downside">
                        <a data-bs-toggle="collapse" data-bs-target="#c3" aria-expanded="false" aria-controls="c3" style="color: #f75d34; text-decoration:none;">View All Specification</a>
                        <img decoding="async" width="16px" height="16px" src="https://stimg.cardekho.com/pwa/img/ucrN/redcircleDown.svg" loading="eager" />
                    </div>

                    <div class="description-text">Engine | Dimensions | Miscellaneous</div>
                </div>

            </div>

            <!-- rec cars -->
            <div class="col-md-5 outer mt-4 outer" style=" height:490px; width: 664px; " id="vdpCard-ucUserReview">
                <div class="container " style="padding: 15px;">
                    <h2 class="title">Recommended Cars</h2>
                </div>

                <div class="container over ">
                    <div id="carouselExampleIndicator" class="carousel slide " data-bs-ride="carousel" data-bs-interval="300000" style="display: flex; justify-content: center;">
                        <div class="carousel-indicators" style=" position:absolute; bottom: -16px;">
                            <button type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide-to="3" aria-label="Slide 4"></button>

                        </div> <!-- carousel indicator close -->
                        <div class="carousel-inner over " id="cardinner">
                            <div class="carousel-item active">
                                <div class="row justify-content-center ">
                                    <?php
                                    $count = 1;
                                    $con = new mysqli("localhost", "root", "", "car_project");
                                    $r = $con->query("SELECT * FROM `car_detail` where Id = 13 LIMIT 4");
                                    while ($row = $r->fetch_array()) {

                                    ?>
                                        <div class="col-5 mb-3  ">
                                            <div class="card" style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                                                <img src="../backend/upload/<?php echo $row['image']; ?>" class="card-img-top" alt="..." width="200" height="200">
                                                <div class="card-body">
                                                    <div class="NewUcExCard posR">
                                                        <div class="bottom_container p-0">
                                                            <div class="title_heart_section">
                                                                <div class="titlebox hover">
                                                                    <h3 class="title">
                                                                        <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm" target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                                                                        <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                                                                        <?php echo $row['car name']; ?>

                                                                        </a>
                                                                    </h3>

                                                                    <div class="dotsDetails">
                                                                        <?php echo $row['km driven']; ?>
                                                                        kms &nbsp;

                                                                        <span>•</span>
                                                                        &nbsp;
                                                                        <?php echo $row['fuel type']; ?>

                                                                        &nbsp;
                                                                        <span>•</span>
                                                                        &nbsp;
                                                                        <?php echo $row['transmission']; ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="Price hover">
                                                                <p style="margin-bottom: .5rem;">₹
                                                                    <?php echo $row['price']; ?> Lakh</p>
                                                            </div>

                                                            <div class="sellerdetail">

                                                                <div class="lead-btn-holder ">

                                                                    <form action="page.php" method="post">
                                                                        <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                                                                        <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                                                            View Car Details
                                                                            <img decoding="async" alt="View Seller Details" width="16px" height="16px" src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
                                                                        </a>
                                                                    </form>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                    <!-- card 1 end -->

                                    <?php
                                    $count = 1;
                                    $con = new mysqli("localhost", "root", "", "car_project");
                                    $r = $con->query("SELECT * FROM `car_detail` where Id = 12 LIMIT 4");
                                    while ($row = $r->fetch_array()) {

                                    ?>
                                        <div class="col-5 mb-3  ">
                                            <div class="card" style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                                                <img src="../backend/upload/<?php echo $row['image']; ?>" class="card-img-top" alt="..." width="200" height="200">
                                                <div class="card-body">
                                                    <div class="NewUcExCard posR">
                                                        <div class="bottom_container p-0">
                                                            <div class="title_heart_section">
                                                                <div class="titlebox hover">
                                                                    <h3 class="title">
                                                                        <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm" target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                                                                        <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                                                                        <?php echo $row['car name']; ?>

                                                                        </a>
                                                                    </h3>

                                                                    <div class="dotsDetails">
                                                                        <?php echo $row['km driven']; ?>
                                                                        kms &nbsp;

                                                                        <span>•</span>
                                                                        &nbsp;
                                                                        <?php echo $row['fuel type']; ?>

                                                                        &nbsp;
                                                                        <span>•</span>
                                                                        &nbsp;
                                                                        <?php echo $row['transmission']; ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="Price hover">
                                                                <p style="margin-bottom: .5rem;">₹
                                                                    <?php echo $row['price']; ?> Lakh</p>
                                                            </div>

                                                            <div class="sellerdetail">

                                                                <div class="lead-btn-holder ">

                                                                    <form action="page.php" method="post">
                                                                        <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                                                                        <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                                                            View Car Details
                                                                            <img decoding="async" alt="View Seller Details" width="16px" height="16px" src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
                                                                        </a>
                                                                    </form>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div>

                            </div> <!-- carousel active close -->

                            <div class="carousel-item ">
                                <div class="row justify-content-center ">
                                    <?php
                                    $count = 1;
                                    $con = new mysqli("localhost", "root", "", "car_project");
                                    $r = $con->query("SELECT * FROM `car_detail` where Id = 15 LIMIT 4");
                                    while ($row = $r->fetch_array()) {

                                    ?>
                                        <div class="col-5 mb-3  ">
                                            <div class="card" style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                                                <img src="../backend/upload/<?php echo $row['image']; ?>" class="card-img-top" alt="..." width="200" height="200">
                                                <div class="card-body">
                                                    <div class="NewUcExCard posR">
                                                        <div class="bottom_container p-0">
                                                            <div class="title_heart_section">
                                                                <div class="titlebox hover">
                                                                    <h3 class="title">
                                                                        <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm" target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                                                                        <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                                                                        <?php echo $row['car name']; ?>

                                                                        </a>
                                                                    </h3>

                                                                    <div class="dotsDetails">
                                                                        <?php echo $row['km driven']; ?>
                                                                        kms &nbsp;

                                                                        <span>•</span>
                                                                        &nbsp;
                                                                        <?php echo $row['fuel type']; ?>

                                                                        &nbsp;
                                                                        <span>•</span>
                                                                        &nbsp;
                                                                        <?php echo $row['transmission']; ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="Price hover">
                                                                <p style="margin-bottom: .5rem;">₹
                                                                    <?php echo $row['price']; ?> Lakh</p>
                                                            </div>

                                                            <div class="sellerdetail">

                                                                <div class="lead-btn-holder ">

                                                                    <form action="page.php" method="post">
                                                                        <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                                                                        <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                                                            View Car Details
                                                                            <img decoding="async" alt="View Seller Details" width="16px" height="16px" src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
                                                                        </a>
                                                                    </form>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                    <!-- card 1 end -->

                                    <?php
                                    $count = 1;
                                    $con = new mysqli("localhost", "root", "", "car_project");
                                    $r = $con->query("SELECT * FROM `car_detail` where Id = 10 LIMIT 4");
                                    while ($row = $r->fetch_array()) {

                                    ?>
                                        <div class="col-5 mb-3  ">
                                            <div class="card" style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                                                <img src="../backend/upload/<?php echo $row['image']; ?>" class="card-img-top" alt="..." width="200" height="200">
                                                <div class="card-body">
                                                    <div class="NewUcExCard posR">
                                                        <div class="bottom_container p-0">
                                                            <div class="title_heart_section">
                                                                <div class="titlebox hover">
                                                                    <h3 class="title">
                                                                        <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm" target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                             
                                                                        <?php echo $row['car name']; ?>

                                                                        </a>
                                                                    </h3>

                                                                    <div class="dotsDetails">
                                                                        <?php echo $row['km driven']; ?>
                                                                        kms &nbsp;

                                                                        <span>•</span>
                                                                        &nbsp;
                                                                        <?php echo $row['fuel type']; ?>

                                                                        &nbsp;
                                                                        <span>•</span>
                                                                        &nbsp;
                                                                        <?php echo $row['transmission']; ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="Price hover">
                                                                <p style="margin-bottom: .5rem;">₹
                                                                    <?php echo $row['price']; ?> Lakh</p>
                                                            </div>

                                                            <div class="sellerdetail">

                                                                <div class="lead-btn-holder ">

                                                                    <form action="page.php" method="post">
                                                                        <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                                                                        <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                                                            View Car Details
                                                                            <img decoding="async" alt="View Seller Details" width="16px" height="16px" src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
                                                                        </a>
                                                                    </form>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div>

                            </div>

                            <!-- carousel active close -->

                            <div class="carousel-item ">
                                <div class="row justify-content-center ">
                                    <?php
                                    $count = 1;
                                    $con = new mysqli("localhost", "root", "", "car_project");
                                    $r = $con->query("SELECT * FROM `car_detail` where Id = 5 LIMIT 4");
                                    while ($row = $r->fetch_array()) {

                                    ?>
                                        <div class="col-5 mb-3  ">
                                            <div class="card" style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                                                <img src="../backend/upload/<?php echo $row['image']; ?>" class="card-img-top" alt="..." width="200" height="200">
                                                <div class="card-body">
                                                    <div class="NewUcExCard posR">
                                                        <div class="bottom_container p-0">
                                                            <div class="title_heart_section">
                                                                <div class="titlebox hover">
                                                                    <h3 class="title">
                                                                        <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm" target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                                                                        <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                                                                        <?php echo $row['car name']; ?>

                                                                        </a>
                                                                    </h3>

                                                                    <div class="dotsDetails">
                                                                        <?php echo $row['km driven']; ?>
                                                                        kms &nbsp;

                                                                        <span>•</span>
                                                                        &nbsp;
                                                                        <?php echo $row['fuel type']; ?>

                                                                        &nbsp;
                                                                        <span>•</span>
                                                                        &nbsp;
                                                                        <?php echo $row['transmission']; ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="Price hover">
                                                                <p style="margin-bottom: .5rem;">₹
                                                                    <?php echo $row['price']; ?> Lakh</p>
                                                            </div>

                                                            <div class="sellerdetail">

                                                                <div class="lead-btn-holder ">

                                                                    <form action="page.php" method="post">
                                                                        <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                                                                        <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                                                            View Car Details
                                                                            <img decoding="async" alt="View Seller Details" width="16px" height="16px" src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
                                                                        </a>
                                                                    </form>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                    <!-- card 1 end -->

                                    <?php
                                    $count = 1;
                                    $con = new mysqli("localhost", "root", "", "car_project");
                                    $r = $con->query("SELECT * FROM `car_detail` where Id = 18 LIMIT 4");
                                    while ($row = $r->fetch_array()) {

                                    ?>
                                        <div class="col-5 mb-3  ">
                                            <div class="card" style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                                                <img src="../backend/upload/<?php echo $row['image']; ?>" class="card-img-top" alt="..." width="200" height="200">
                                                <div class="card-body">
                                                    <div class="NewUcExCard posR">
                                                        <div class="bottom_container p-0">
                                                            <div class="title_heart_section">
                                                                <div class="titlebox hover">
                                                                    <h3 class="title">
                                                                        <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm" target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                             
                                                                        <?php echo $row['car name']; ?>

                                                                        </a>
                                                                    </h3>

                                                                    <div class="dotsDetails">
                                                                        <?php echo $row['km driven']; ?>
                                                                        kms &nbsp;

                                                                        <span>•</span>
                                                                        &nbsp;
                                                                        <?php echo $row['fuel type']; ?>

                                                                        &nbsp;
                                                                        <span>•</span>
                                                                        &nbsp;
                                                                        <?php echo $row['transmission']; ?>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="Price hover">
                                                                <p style="margin-bottom: .5rem;">₹
                                                                    <?php echo $row['price']; ?> Lakh</p>
                                                            </div>

                                                            <div class="sellerdetail">

                                                                <div class="lead-btn-holder ">

                                                                    <form action="page.php" method="post">
                                                                        <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                                                                        <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                                                            View Car Details
                                                                            <img decoding="async" alt="View Seller Details" width="16px" height="16px" src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
                                                                        </a>
                                                                    </form>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>

                                </div>

                            </div>
                        </div> <!-- carousel inner close -->

                        <button class="carousel-control-prev bg-dark" type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide="prev" style="    width: auto;
                                          top: 50%;
                                          bottom: initial;">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next bg-dark" type="button" data-bs-target="#carouselExampleIndicator" data-bs-slide="next" style="    width: auto;
                                          top: 50%;
                                          bottom: initial;">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>

            </div>

            <!-- rec cars -->

        </div>
    </div>

    <div class="col>
                <div class=" container" style=" display: flex; height:351px; width: 464px;" id="s1">
        <div class="top">
            <div class="col mt-5" style="    border: 1px solid rgba(36, 39, 44, .1); border-radius: 16px;  padding: 28px 21px 0 23px; box-shadow: 8px -3px 4px rgba(0,0,0,.0509803922);    background: #fff; ">
                <?php
                $count = 1;
                $id = $_REQUEST["a"];
                $con = new mysqli("localhost", "root", "", "car_project");
                $r = $con->query("SELECT * FROM `car_detail` INNER JOIN `specification` ON car_detail.Id= specification.s_id WHERE car_detail.Id = '$id'");
                while ($row = $r->fetch_array()) {

                ?>
                    <div class="distancetext">
                        <img src="https://stimg.cardekho.com/usedcar/imgs/mappincolor.svg" alt="map" width="12px;" height="12px;" style="position: relative; top: -1px; margin-left: 10px;">
                        Naranpura Vistar, Ahmedabad
                    </div>
                    <div class="vehiclename" style="display: flex; font-size: 20px; font-weight: 500; align-items: flex-start;">
                        <?php echo $row['car name']; ?>
                        <?php echo $row['model']; ?>
                        (<?php echo $row['fuel type']; ?>) &nbsp;
                    </div>
                    <div class="vehicledotlist" style="font-size: 14px; line-height: 18px; color: rgba(0, 0, 0, .7); font-weight: normal; margin-top: 6px;">
                        <?php echo $row['km driven']; ?> kms &nbsp; • <?php echo $row['fuel type']; ?>
                        &nbsp; •&nbsp; <?php echo $row['transmission']; ?>
                        &nbsp; •&nbsp; <?php echo $row['Ownership']; ?>

                    </div>
                    <div class="vehicleprice" style="font-weight: 600; font-size: 24px; line-height: 20px; display: inline-flex; color: #000;align-items: center; margin-top: 16px;">
                        <span><?php echo $row['price']; ?> lakh</span>
                    </div>

                    <div class="hometd" style="line-height: 20px; font-weight: 600; font-size: 13px; margin-top: 10px;">
                    </div>

                    <!-- <div class="ncprice"
                                style="font-weight: 400; font-size: 12px; line-height: 18px; margin-top: 16px; color: rgba(36,39,44,.7);">
                                New Car (On-Road Price) :
                            </div> -->
                    <div class="middlesec" style="border: none; margin: 0; padding: 0;">

                        <div class="buttonholder" style="display: block; width: 100%; white-space: nowrap ; overflow: hidden; margin-left: 0; padding: 0; position: relative; bottom: -10px;">
                            <div class="btn-lead" style="min-width: 0; padding-right: 10px; width: 100%;">
                                <a class="cta" type="button" style="text-decoration:none; text-align:center" href="enquiry.php?a=<?php echo $row[0] ?>">

                                    <!-- <a class="cta"  style="text-decoration:none;" href="enquiry.php?cid=<?php echo $_REQUEST["a"]; ?>" >Enquire Now</a> -->
                                    Enquire Now

                                </a>
                            </div>

                        </div>
                    </div>

                    <div class="trendingtext">
                        <img decoding="async" width="17px" height="17px" alt="IMAGE" src="https://stimg.cardekho.com/used-cars/common/icons/trending.svg" loading="eager" style="margin-right: 6px;     transform: rotate(10deg);">
                        "Trending Car!"
                        <span style="font-weight: normal;">
                            "&nbsp;"
                            "High chances of sale in next 6 days"
                        </span>
                    </div>

                <?php $coun = 1;
                }  ?>
            </div>
        </div>

    </div>
    </div>

    </div>

    <!-- why choose  -->
    <div class="container" style="margin-top: 20px; margin-top: 20px; border-radius: 20px; width: 100%;">
        <div>
            <div style=" margin-bottom: 20px;  ">
                <h5 class="card-title" style="margin-bottom: 16px; font-size: 20px; font-weight: 600;line-height: 28px;">Why
                    Choose Us</h5>

            </div>

            <div class="row">

                <div class="col-md-3 col-sm-6 mb-3">

                    <div class="card" style="width: 16rem; height: 100%; min-height: 200px; border-radius: 20px; background: #fafafa; box-shadow: 0 4px 12px 0 rgba(126,133,148,.08);">
                        <img src="https://assets.cars24.com/production/c2b-website/240321161127/js/0780024975b43bbc27de11abe476eeb3.png" class="card-img-top" alt="..." style="width: 100%; height: auto; object-fit: cover;">
                        <div class="card-body " style="flex: 1 1 auto;">
                            <h5 class="card-title" style="margin-bottom: 16px; font-size: 20px; font-weight: 600;line-height: 28px;">
                                Extended
                                Warranty</h5>
                            <p class="card-text mb-5">Enjoy complete
                                peace of mind with warranty plans up to
                                12 months to protect your car against
                                unforeseen repairs</p>
                            <a href="aboutus.php" style="position: absolute; bottom: 10px; color: #ef6e0b;" class="btn px-0 know">Know More
                                <span>
                                    <img width="24" height="24" src="https://assets.cars24.com/production/c2b-website/240412155017/js/4c33768dc2869197d8280dbde6ec7ff2.svg" style="width:24;height:24;transform:rotate(0deg)" alt="arrow">
                                </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">

                    <div class="card" style="width: 16rem; height: 100%; min-height: 200px; border-radius: 20px; background: #fafafa; box-shadow: 0 4px 12px 0 rgba(126,133,148,.08);">
                        <img src="https://assets.cars24.com/production/c2b-website/240321161127/js/88440a417a25b2afa28eaf1fe1be3d94.png" class="card-img-top" alt="..." style="width: 100%; height: auto; object-fit: cover;">
                        <div class="card-body " style="flex: 1 1 auto;">
                            <h5 class="card-title" style="margin-bottom: 16px; font-size: 20px; font-weight: 600;line-height: 28px;">
                                Easy
                                Return Policy
                            </h5>
                            <p class="card-text">Love it, keep it.
                                Changed your mind? Return it within 7
                                days for a full refund</p>
                            <a href="page4.php" style="position: absolute; bottom: 10px; color: #ef6e0b;" class="btn px-0 know">Know More
                                <span>
                                    <img width="24" height="24" src="https://assets.cars24.com/production/c2b-website/240412155017/js/4c33768dc2869197d8280dbde6ec7ff2.svg" style="width:24;height:24;transform:rotate(0deg)" alt="arrow">
                                </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">

                    <div class="card" style="width: 16rem; height: 100%; min-height: 200px; border-radius: 20px; background: #fafafa; box-shadow: 0 4px 12px 0 rgba(126,133,148,.08);">
                        <img src="https://assets.cars24.com/production/c2b-website/240321161127/js/05fa29738dae540689da4b0c6347a602.png" class="card-img-top" alt="..." style="width: 100%; height: auto; object-fit: cover;">
                        <div class="card-body " style="flex: 1 1 auto;">
                            <h5 class="card-title" style="margin-bottom: 16px; font-size: 20px; font-weight: 600;line-height: 28px;">
                                Easy
                                Financing Option</h5>
                            <p class="card-text">Become eligible for
                                Zero Down Payment via EMIs of up to 72
                                months and instant loans</p>
                            <a href="page4.php" style="position: absolute; bottom: 10px; color: #ef6e0b;" class="btn px-0 know">Know More
                                <span>
                                    <img width="24" height="24" src="https://assets.cars24.com/production/c2b-website/240412155017/js/4c33768dc2869197d8280dbde6ec7ff2.svg" style="width:24;height:24;transform:rotate(0deg)" alt="arrow">
                                </span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mb-3">

                    <div class="card" style="width: 16rem; height: 100%; min-height: 200px; border-radius: 20px; background: #fafafa; box-shadow: 0 4px 12px 0 rgba(126,133,148,.08);">
                        <img src="https://assets.cars24.com/production/c2b-website/240412155017/js/afe81fe1521e66f42716262bcf10ff93.png" class="card-img-top" alt="..." style="width: 100%; height: auto; object-fit: cover;">
                        <div class="card-body " style="flex: 1 1 auto;">
                            <h5 class="card-title" style="margin-bottom: 16px; font-size: 20px; font-weight: 600;line-height: 28px;">
                                140-Quality
                                Check</h5>
                            <p class="card-text">Inspected across 140
                                parameters and refurbished by
                                auto-experts, our cars are ready for the
                                road</p>
                            <a href="aboutus.php" style="position: absolute; bottom: 10px; color: #ef6e0b;" class="btn px-0 know">Know More
                                <span>
                                    <img width="24" height="24" src="https://assets.cars24.com/production/c2b-website/240412155017/js/4c33768dc2869197d8280dbde6ec7ff2.svg" style="width:24;height:24;transform:rotate(0deg)" alt="arrow">
                                </span></a>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-md-3 mb-3">

                           

                        
                        </div>
                        <div class="col-md-3 mb-3">

                            <div class="card" style="width: 16rem; height: 100%; min-height: 200px; border-radius: 20px;">
                                <img
                                    src="https://assets.cars24.com/production/c2b-website/240412155017/js/afe81fe1521e66f42716262bcf10ff93.png"
                                    class="card-img-top" alt="..." style="width: 100%; height: 100%; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title" style="margin-bottom: 16px; font-size: 20px; font-weight: 600;line-height: 28px;">140-Quality Check</h5>
                                    <p class="card-text">Inspected across 140 parameters and refurbished by auto-experts, our cars are ready for the road</p>
                                    <a href="page6.html"
                                        class="btn px-0 know">Know More
                                        <span>
                                            <img width="24" height="24" src="https://assets.cars24.com/production/c2b-website/240412155017/js/4c33768dc2869197d8280dbde6ec7ff2.svg" style="width:24;height:24;transform:rotate(0deg); " alt="arrow">
                                        </span></a>
                                </div>
                            </div>
                        </div> -->

            </div>
        </div>
    </div>

    <?php
    require("f1.php");
    ?>
</body>

</html>