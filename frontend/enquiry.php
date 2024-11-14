<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Second Hand Car Buying Booking Form</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .form-container {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      padding: 40px;
    }

    .form-control:focus {
      border-color: #ffc107;
      box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.25);
    }

    .btn-warning {
      background-color: #ffc107;
      border-color: #ffc107;
    }

    .btn-warning:hover {
      background-color: #e0a800;
      border-color: #d39e00;
    }

    @media (max-width: 767.98px) {
      .form-container {
        padding: 20px;
      }
    }
  </style>
</head>
<body>
  <div class="container my-5">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="form-container">
          <h2 class="text-center mb-4">Second Hand Car Buying Booking Form</h2>
          <form action="enquirydata.php" method="POST" enctype="multipart/form-data">
           
        <?php
        $cid=$_REQUEST["a"];
        // $cid=$_REQUEST["cid"];
        $con = new mysqli("localhost", "root", "", "car_project");

        $r=$con->query("select * from car_detail where id='$cid'");
        $row=$r->fetch_row();
        ?>
            <div class="form-group">
              <label for="buyer-name">Buyer Name</label>
              <input type="text" class="form-control" id="buyer-name" name="bname" placeholder="Enter buyer name">
            </div>
            <div class="form-group">
              <label for="buyer-phone">Buyer Phone</label>
              <input type="tel" class="form-control" id="buyer-phone" name="bpass" placeholder="Enter buyer phone number">
            </div>
            <div class="form-group">
              <label for="buyer-email">Buyer Email</label>
              <input type="email" class="form-control" id="buyer-email" name="bemail" placeholder="Enter buyer email">
            </div>
            <div class="form-group">
              <label for="vehicle-make">Vehicle Name</label>
              <input type="text" value="<?php echo $row[3]; ?>" class="form-control" id="vehicle-make" name="vn" placeholder="Veichle Name">
            </div>
            <div class="form-group">
              <label for="vehicle-model">Vehicle Model</label>
              <input type="text" value="<?php echo $row[7]; ?>" class="form-control" id="vehicle-make" name="vm" placeholder="Veichle Model">            
             
            </div>

          
            <div class="form-group">
              <label for="buyer-budget">Veichle Price</label>
              <input type="text" class="form-control" value="<?php echo $row[8];?> lakh" id="vehicle-price" name="vp" placeholder="Enter vehicle price">
            </div>
            <div class="form-group">
              <label for="additional-notes">Additional Notes</label>
              <textarea class="form-control" id="additional-notes" rows="3" name="note" placeholder="Enter any additional notes"></textarea>
            </div>
            <a href="enquirydata.php?cid=<?php echo $row[0];?>" type="submit" class="btn btn-warning btn-block">Submit Booking</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>