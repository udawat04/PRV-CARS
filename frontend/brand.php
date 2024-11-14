<?php
require("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="logo2.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
        <link rel="stylesheet" href="front.css">
</head>

<body>
    
        

         

    <!-- used company cars -->
    <div class="container-fluid outer  mt-4">
    <?php
        $id = $_REQUEST["a"];
           $count=1;   
              $con=new mysqli("localhost","root","","car_project");
              $r = $con->query("SELECT * FROM `car_detail` WHERE `brand`='$id' limit 1");
              while($row=$r->fetch_array())
              {
              ?>
        <div class="container" style="padding: 15px;">
            <h3>All <?php echo $row['brand']  ;?> Cars</h3>
        </div>
<?php }?>
        <div class="row row-cols-3">
        <?php
        $id = $_REQUEST["a"];
        
              $con=new mysqli("localhost","root","","car_project");
              $r = $con->query("SELECT * FROM `car_detail` WHERE `brand`='$id' ");
              while($row=$r->fetch_array())
              { 
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


           
  <?php $count=1; }  ?>

    </div>

    <?php
require("f1.php");
?>
</body>

</html>