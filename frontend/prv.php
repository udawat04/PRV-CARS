<?php
require("header.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PRV </title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Free HTML Templates" name="keywords">
  <meta content="Free HTML Templates" name="description">

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="logo2.ico">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;600;700&family=Pacifico&display=swap"
    rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Template Stylesheet -->
 
  <link rel="stylesheet" href="custom.css">

</head>

<body style="background-color:ghostwhite;">

  <!-- carousel start -->
  <div class="container-fluid" id="coru" style="padding: 0;">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <!-- <div class="carousel-indicators">
      <button type="button " data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div> -->

      <div class="carousel-inner" data-bs-interval="1000">
        <div class="carousel-item active" data-bs-interval="1000">
          <img src="cars24.jpg" class="d-block w-100 h-10vh" alt="..." style="width: 100%; height: 500px;">
          <div class="top-left" style=" position: absolute; top: 13px; right: 40px; color:white; font-style:italic;">
            <h1 style="color: white;">Your Dream Car Just <br>One Click
              Away!</h1>
          </div>
          <div class="carousel-caption">

            <!-- <p>Your Dream Car Just One Click Away!</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="cars2.webp" class="d-block w-100 h-10vh" alt="..." style="width: 100%; height: 500px;">
          <div class="carousel-caption">

            <!-- <p>Your Dream Car Just One Click Away!</p> -->
          </div>
        </div>
        <div class="carousel-item">
          <img src="cars3.webp" class="d-block w-100 h-10vh" alt="..." style="width: 100%; height: 500px;">
          <div class="carousel-caption">

            <!-- <p>Your Dream Car Just One Click Away!</p> -->
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- rec cars -->

  <div class="col-5 outer mt-4 outer" style=" height:490px;  " id="vdpCard-ucUserReview">
    <div class="container " style="padding: 15px;">
      <h2 class="title">Recommended Cars</h2>
    </div>

    <div class="container over ">
      <div id="carouselExampleIndicator" class="carousel slide " data-bs-ride="carousel" data-bs-interval="300000"
        style="display: flex; justify-content: center;">
        <div class="carousel-inner over " id="cardinner">
          <div class="carousel-item active">
            <div class="row justify-content-center ">
            
            <!-- card 1 start -->
            <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 13 LIMIT 4");
             while ($row = $r->fetch_array()) {

             ?>
              <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
              <!-- card 1 end -->
              
            
              <!-- card 2 start -->
              <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 17 LIMIT 4");
             while ($row = $r->fetch_array()) {

             ?>
              <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
                <!-- card 2 end -->


                <!-- card 3 start -->
                <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 1 LIMIT 4");
             while ($row = $r->fetch_array()) {

             ?>
               <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
                <!-- card 3 end -->



                <!-- card 4 start -->
              <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 9 LIMIT 4");
             while ($row = $r->fetch_array()) {

               ?>
              <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
              <!-- card 4 end -->

            </div>

          </div>
           <!-- carousel active close -->


           <!-- 2nd row start  -->
          <div class="carousel-item ">
            <div class="row justify-content-center ">
            
            <!-- card 1 start -->
            <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 1 LIMIT 4");
             while ($row = $r->fetch_array()) {

             ?>
              <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
              <!-- card 1 end -->
              
            
              <!-- card 2 start -->
              <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 6 LIMIT 4");
             while ($row = $r->fetch_array()) {

             ?>
               <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
                <!-- card 2 end -->


                <!-- card 3 start -->
                <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 7 LIMIT 4");
             while ($row = $r->fetch_array()) {

             ?>
               <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
                <!-- card 3 end -->



                <!-- card 4 start -->
              <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 15 LIMIT 4");
             while ($row = $r->fetch_array()) {

               ?>
               <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
              <!-- card 4 end -->

            </div>
          </div>    
          <!-- 2nd row ended                -->
         
          
          <!-- 3rd row start  -->
           <div class="carousel-item ">
            <div class="row justify-content-center ">
            
            <!-- card 1 start -->
            <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 8 LIMIT 4");
             while ($row = $r->fetch_array()) {

             ?>
               <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
              <!-- card 1 end -->
              
            
              <!-- card 2 start -->
              <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 4 LIMIT 4");
             while ($row = $r->fetch_array()) {

             ?>
               <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
                <!-- card 2 end -->


                <!-- card 3 start -->
                <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 1 LIMIT 4");
             while ($row = $r->fetch_array()) {

             ?>
               <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
                <!-- card 3 end -->



                <!-- card 4 start -->
              <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 3 LIMIT 4");
             while ($row = $r->fetch_array()) {

               ?>
              <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
              <!-- card 4 end -->

            </div>
          </div>   
          <!-- 3rd row ended  -->

           <!-- 4th row start  -->
           <div class="carousel-item ">
            <div class="row justify-content-center ">
            
            <!-- card 1 start -->
            <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 10 LIMIT 4");
             while ($row = $r->fetch_array()) {

             ?>
               <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
              <!-- card 1 end -->
              
            
              <!-- card 2 start -->
              <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 11 LIMIT 4");
             while ($row = $r->fetch_array()) {

             ?>
               <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
                <!-- card 2 end -->


                <!-- card 3 start -->
                <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 17 LIMIT 4");
             while ($row = $r->fetch_array()) {

             ?>
              <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
                <!-- card 3 end -->



                <!-- card 4 start -->
              <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 18 LIMIT 4");
             while ($row = $r->fetch_array()) {

               ?>
               <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>">
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
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
                }  ?>
              <!-- card 4 end -->

            </div>
          </div>   
          <!-- 4th row ended  -->

        </div>  <!-- carousel inner close -->

        <button class="carousel-control-prev bg-dark" type="button" data-bs-target="#carouselExampleIndicator"
          data-bs-slide="prev" style="    width: auto;
                                          top: 50%;
                                          bottom: initial;">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next bg-dark" type="button" data-bs-target="#carouselExampleIndicator"
          data-bs-slide="next" style="    width: auto;
                                          top: 50%;
                                          bottom: initial;">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

  </div>

  <!-- logo start -->
  <div class="section mb-3 " style="background-color: #f3f1f1;">
    <div class="container-fluid " id="#brand">
      <!-- brand name -->
      <div class="row align-items-center">
        <div class="col-sm-6  mb-5 mt-5">
          <h1 style="margin-left: 45px;">Used Cars By Brands</h1>
        </div>
      </div>

      <!-- logo images -->
      <div class="container text-center" id="logo">
      <?php
             $count = 1;
             $con = new mysqli("localhost", "root", "", "car_project");
             $r = $con->query("SELECT * FROM `car_detail` where Id = 1 LIMIT 4");
             while ($row = $r->fetch_array()) {

             ?>
        <div class="row row-cols-5 ">
          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2 mb-3">
            <a  href="brand.php?a=Hundai">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/hyundai.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body" style="justify-content: center; display: flex;">
                  <p class="card-text">Hyundai</p>
                </div>
              </div>
            </a>

          </div>

          <div class=" col-md-3 col-lg-3 col-sm-4 col-6 ml-3 col-xl-2 ">
          <a  href="brand.php?a=Maruti">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/maruti.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body">
                  <p class="card-text">Maruti</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2 ">
          <a  href="brand.php?a=Toyota">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/toyota.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body">
                  <p class="card-text">Tyota</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2 mb-3">
          <a  href="brand.php?a=Ford">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/ford.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Ford</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2 mb-3 ">
          <a  href="brand.php?a=Honda">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/honda.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Honda</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2">
          <a  href="brand.php?a=Tata">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/tata.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Tata</p>
                </div>
              </div>
            </a>
          </div>

          <div class=" col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2">
          <a  href="brand.php?a=BMW">
              <div class="card" id="brand" style=" height:10rem; width: 10rem; margin-bottom: 18px;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/bmw.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">BMW</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2">
          <a  href="brand.php?a=Mercedes">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/mercedes-benz.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body">
                  <p class="card-text">Mercedes-Benz</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2">
          <a  href="brand.php?a=Audi">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/audi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Audi</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2 mb-3">
          <a  href="brand.php?a=Land-Rover">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/land-rover.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body">
                  <p class="card-text">Land-Rover</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2 mb-3">
          <a  href="brand.php?a=Kia">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/kia.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Kia</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2">
          <a  href="brand.php?a=Skoda">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/skoda.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Skoda</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2">
          <a  href="brand.php?a=Jeep">
              <div class="card" id="brand" style=" height:10rem; width: 10rem; margin-bottom: 18px;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/jeep.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Jeep</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2">
          <a  href="brand.php?a=Volkswagen">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/volkswagen.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body">
                  <p class="card-text">Volkswagen</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2">
          <a  href="brand.php?a=Nissan">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/nissan.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body">
                  <p class="card-text">Nissan</p>
                </div>
              </div>
            </a>
          </div>

        </div>
        <?php 
                }  ?>
      </div>

      <div class="panel-collapse collapse container" id="collapseExample">
        <div class="row">
          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2 mb-3">
            <a href="page2.php">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/porsche.jpg" class="card-img-top"
                  alt="...">
                <div class="card-body">
                  <p class="card-text">Porsche</p>
                </div>
              </div>
            </a>
          </div>

          <div class="col-md-3 col-lg-3 col-sm-4 col-6 col-xl-2">
            <a href="page2.php">
              <div class="card" id="brand" style=" height:10rem; width: 10rem;">
                <img src="https://stimg.cardekho.com/pwa/img/brandLogo_168x84/mg.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">MG</p>
                </div>
              </div>
            </a>
          </div>

        </div>

      </div>
      <h3 class="pannel-title">
        <a data-bs-toggle="collapse" href="#collapseExample">View All Brands</a>
      </h3>

    </div>

  </div>

  <!-- newwwwwwwwww -->
  <div class="col-5 outer mt-4 outer" style=" height:490px;  " >
    <div class="container " style="padding: 15px;">
      <h2 class="title">Recently Added Cars</h2>
    </div>

    <div class="container over ">
      <div id="carouselExampleIndicator" class="carousel slide " data-bs-ride="carousel" data-bs-interval="3000"
        style="display: flex; justify-content: center;">
        <div class="carousel-inner over " id="cardinner">
          <div class="carousel-item active">
            <div class="row justify-content-center ">
            <?php
                $con = new mysqli("localhost", "root", "", "car_project");
                $r = $con->query("select * from car_detail order by id desc");
                while ($row = $r->fetch_array()) {
                ?>
               <div class="col  mb-3 col-sm-3  ">
                <div class="card"
                  style="width: 250px; height: 349px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 0px 3px 0 rgba(0, 0, 0, 0.19);">
                  <img
                    src="../backend/upload/<?php echo $row['image']; ?>"
                    class="card-img-top" alt="..." width="200" height="200">
                  <div class="card-body">
                    <div class="NewUcExCard posR">
                      <div class="bottom_container p-0">
                        <div class="title_heart_section">
                          <div class="titlebox hover">
                            <h3 class="title">
                              <a href="/buy-used-car-details/used-Datsun-Redi-go-2016-2020-T-Option-cars-Ahmedabad_4b99659b-6da0-4d1f-a62f-1362171551df.htm"
                                target title="2019 Datsun redi-GO 2016-2020 T Option" rel="noreferrer"></a>

                              <!-- 2019
                              Datsun redi-GO 2016-2020
                              T Option -->
                              <?php echo $row['car name'];?>

                              </a>
                            </h3>

                            <div class="dotsDetails">
                            <?php echo $row['km driven'];?>
                              kms &nbsp;

                              <span>•</span>
                              &nbsp;
                              <?php echo $row['fuel type'];?>

                              &nbsp;
                              <span>•</span>
                              &nbsp;
                              <?php echo $row['transmission'];?>
                            </div>
                          </div>

                        </div>

                        <div class="Price hover">
                          <p style="margin-bottom: .5rem;">₹ <?php echo $row['price'];?> Lakh</p>
                        </div>

                        <div class="sellerdetail">

                          <div class="lead-btn-holder ">

                          <form action="page.php" method="post">
                           <!-- <input type="hidden" name="car_id" value="<?php echo $row['Id']; ?>"> -->
                            <a href="p1.php?a=<?php echo $row[0]; ?>" style="color: #f75d34;" class="view">
                                  View Car Details 
                                  <img decoding="async" alt="View Seller Details" width="16px" height="16px"
                                     src="https://stimg.cardekho.com/pwa/img/ucrN/redarrowcircle.svg" loading="eager">
                             </a>
                             </form>

                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php  if($count==3) { ?>

            </div>

          </div>
          
          <!-- carousel active close -->

          <div class="carousel-item ">
            <div class="row justify-content-center ">

            <?php $count=0; } $count++; } ?>
              

            </div>

          </div>
        </div> 

      

         <!-- carousel inner close -->

       
         <button class="carousel-control-prev bg-dark" type="button" data-bs-target="#carouselExampleIndicator"
          data-bs-slide="prev" style="    width: auto;
                                          top: 50%;
                                          bottom: initial;">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next bg-dark" type="button" data-bs-target="#carouselExampleIndicator"
          data-bs-slide="next" style="    width: auto;
                                          top: 50%;
                                          bottom: initial;">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>

  </div>



  <!-- category -->
  <div class="section mt-5"
    style="height:30%; background-color: white; box-shadow: 20px 4px 8px 0px rgb(254 246 246 / 27%), 0 6px 20px 1px rgb(31 29 29); ">
    <div class="container">
      <!-- heading  -->
      <div class="row">
        <div class="col-sm-6 mb-5">
          <h4>Used Cars By Body Type</h4>
        </div>
      </div>

      <div class="container justify-content:center" id="usedcars">
        <div class="row">
          <?php
          $count = 1;
          $con = new mysqli("localhost", "root", "", "car_project");
          $r = $con->query("select * from category");
          while ($row = $r->fetch_array()) {
          ?>
          <div class="col-md-4 col-lg-3 col-sm-6 col-9 col-xl-2 mb-3 " style="margin-right: 41px;">
         
            <div class="card" id="c1" style=" height:13rem; width: 18rem;  border-top-left-radius:20px ; border-top-right-radius:20px ;">
            <a href="category.php?a=<?php echo $row[1]; ?>" style="color: black;" class="view">
              <img src="../backend/category/<?php echo $row[2]; ?>" class="card-img-top" alt="..."
                style="object-fit:fill">
              <div class="card-body">
                <p class="card-text"><?php echo $row[1]; ?></p>
              </div>
              </a>
            </div>
          </div>
          
          <?php  if($count==5) { ?>
          

        </div>
        <?php $count=0; } $count++; } ?>
        <!-- row end -->
      </div>
      <!-- container end  -->
    </div>
  </div>

  <!-- why choose  -->
  <div class="container" style="margin-top: 20px; margin-top: 40px; border-radius: 20px; width: 100%;">
            <div>
                <div style=" margin-bottom: 20px;  ">
                    <h5 class="card-title"
                        style="margin-bottom: 16px; font-size: 20px; font-weight: 600;line-height: 28px;">Why
                        Choose Us</h5>

                </div>

                <div class="row">

                    <div class="col-md-3 col-sm-6 mb-3">

                        <div class="card"
                            style="width: 16rem; height: 100%; min-height: 200px; border-radius: 20px; background: #fafafa; box-shadow: 0 4px 12px 0 rgba(126,133,148,.08);">
                            <img src="https://assets.cars24.com/production/c2b-website/240321161127/js/0780024975b43bbc27de11abe476eeb3.png"
                                class="card-img-top" alt="..." style="width: 100%; height: auto; object-fit: cover;">
                            <div class="card-body " style="flex: 1 1 auto;">
                                <h5 class="card-title"
                                    style="margin-bottom: 16px; font-size: 20px; font-weight: 600;line-height: 28px;">
                                    Extended
                                    Warranty</h5>
                                <p class="card-text mb-5">Enjoy complete
                                    peace of mind with warranty plans up to
                                    12 months to protect your car against
                                    unforeseen repairs</p>
                                <a href="aboutus.php" style="position: absolute; bottom: 10px; color: #ef6e0b;"
                                    class="btn px-0 know">Know More
                                    <span>
                                        <img width="24" height="24"
                                            src="https://assets.cars24.com/production/c2b-website/240412155017/js/4c33768dc2869197d8280dbde6ec7ff2.svg"
                                            style="width:24;height:24;transform:rotate(0deg)" alt="arrow">
                                    </span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">

                        <div class="card"
                            style="width: 16rem; height: 100%; min-height: 200px; border-radius: 20px; background: #fafafa; box-shadow: 0 4px 12px 0 rgba(126,133,148,.08);">
                            <img src="https://assets.cars24.com/production/c2b-website/240321161127/js/88440a417a25b2afa28eaf1fe1be3d94.png"
                                class="card-img-top" alt="..." style="width: 100%; height: auto; object-fit: cover;">
                            <div class="card-body " style="flex: 1 1 auto;">
                                <h5 class="card-title"
                                    style="margin-bottom: 16px; font-size: 20px; font-weight: 600;line-height: 28px;">
                                    Easy
                                    Return Policy
                                </h5>
                                <p class="card-text">Love it, keep it.
                                    Changed your mind? Return it within 7
                                    days for a full refund</p>
                                <a href="page4.php" style="position: absolute; bottom: 10px; color: #ef6e0b;"
                                    class="btn px-0 know">Know More
                                    <span>
                                        <img width="24" height="24"
                                            src="https://assets.cars24.com/production/c2b-website/240412155017/js/4c33768dc2869197d8280dbde6ec7ff2.svg"
                                            style="width:24;height:24;transform:rotate(0deg)" alt="arrow">
                                    </span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">

                        <div class="card"
                            style="width: 16rem; height: 100%; min-height: 200px; border-radius: 20px; background: #fafafa; box-shadow: 0 4px 12px 0 rgba(126,133,148,.08);">
                            <img src="https://assets.cars24.com/production/c2b-website/240321161127/js/05fa29738dae540689da4b0c6347a602.png"
                                class="card-img-top" alt="..." style="width: 100%; height: auto; object-fit: cover;">
                            <div class="card-body " style="flex: 1 1 auto;">
                                <h5 class="card-title"
                                    style="margin-bottom: 16px; font-size: 20px; font-weight: 600;line-height: 28px;">
                                    Easy
                                    Financing Option</h5>
                                <p class="card-text">Become eligible for
                                    Zero Down Payment via EMIs of up to 72
                                    months and instant loans</p>
                                <a href="page4.php" style="position: absolute; bottom: 10px; color: #ef6e0b;"
                                    class="btn px-0 know">Know More
                                    <span>
                                        <img width="24" height="24"
                                            src="https://assets.cars24.com/production/c2b-website/240412155017/js/4c33768dc2869197d8280dbde6ec7ff2.svg"
                                            style="width:24;height:24;transform:rotate(0deg)" alt="arrow">
                                    </span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 mb-3">

                        <div class="card"
                            style="width: 16rem; height: 100%; min-height: 200px; border-radius: 20px; background: #fafafa; box-shadow: 0 4px 12px 0 rgba(126,133,148,.08);">
                            <img src="https://assets.cars24.com/production/c2b-website/240412155017/js/afe81fe1521e66f42716262bcf10ff93.png"
                                class="card-img-top" alt="..." style="width: 100%; height: auto; object-fit: cover;">
                            <div class="card-body " style="flex: 1 1 auto;">
                                <h5 class="card-title"
                                    style="margin-bottom: 16px; font-size: 20px; font-weight: 600;line-height: 28px;">
                                    140-Quality
                                    Check</h5>
                                <p class="card-text">Inspected across 140
                                    parameters and refurbished by
                                    auto-experts, our cars are ready for the
                                    road</p>
                                <a href="aboutus.php" style="position: absolute; bottom: 10px; color: #ef6e0b;"
                                    class="btn px-0 know">Know More
                                    <span>
                                        <img width="24" height="24"
                                            src="https://assets.cars24.com/production/c2b-website/240412155017/js/4c33768dc2869197d8280dbde6ec7ff2.svg"
                                            style="width:24;height:24;transform:rotate(0deg)" alt="arrow">
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