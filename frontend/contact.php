<?php
require("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
  <div style="width:30%; display:flex; position:relative;left:34%;margin-top:30px;">
    <form action="">
    <table class="table table-bordered  " >
  <tr>
    <td><label for="name">Name:</label></td>
    <td><input type="text" class="form-control" id="name" placeholder="Enter your name"></td>
  </tr>
  <tr>
    <td><label for="email">Email:</label></td>
    <td><input type="email" class="form-control" id="email" placeholder="Enter your email"></td>
  </tr>
  <tr>
    <td><label for="phone">Phone:</label></td>
    <td><input type="tel" class="form-control" id="phone" placeholder="Enter your phone number"></td>
  </tr>
  <tr>
    <td><label for="message">Message:</label></td>
    <td><textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><button type="submit" class="btn btn-primary">Submit</button></td>
  </tr>
</table>
    </form>
  </div>
  <?php
  require("f1.php");
  ?>
</body>
</html>