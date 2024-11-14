<?php
session_start();

// require ("cardatabase.php");
if (!isset($_SESSION['adminloginid'])) {
    header("location: admin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Car-Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="new.css"> -->
   <link rel="stylesheet" href="cardetail.css">

</head>

<body>
    <?php
    require ("sidebar.php");
    require ("header.php");
    
    ?>
     <form action="cardatabase.php" method="POST" enctype="multipart/form-data">
    <div style="position:relative;left:16%; margin-top: 10px; width:65%">
        <table border='0' align='center' cellspacing=0 cellpadding=10 class="table table-bordered "  >
            <tr>
                <td colspan="2" align='center'>
                    ADD CAR-DETAILS
                </td>
            </tr>
            <tr>
                <td>Category</td>
                <td>
                    <?php
                    $con = new mysqli("localhost", "root", "", "car_project");
                    $r = $con->query("select * from category");
                    echo "<select name='ct' style=' width: 40%;
                font-size: larger;
                border-radius: 8px;
                border: 2px solid black; display: flex; text-align: center;'>";
                    while ($row = $r->fetch_array()) {
                        echo "<option value='$row[1]'>$row[1]</option>";
                    }
                    echo "</select>";
                    ?>
                </td>
            </tr>

            <tr>
                <td>Brand</td>
                <td> <select  name="bd" style=' width: 40%;font-size: larger;border-radius: 8px;border: 2px solid black; display: flex; text-align: center;'>";>
                       <option value="Hundai">Hundai</option>
                       <option value="Maruti">Maruti</option>
                       <option value="Toyota">Toyota</option>
                       <option value="Ford">Ford</option>
                       <option value="Honda">Honda</option>
                       <option value="Tata">Tata</option>
                       <option value="Mahindra">Mahindra</option>
                       <option value="Volkswagen">Volkswagen</option>
                       <option value="Chevrolet">Chevrolet</option>
                       <option value="Kia">Kia</option>
                       <option value="Renault">Renault</option>
                       <option value="MG">MG</option>
                       <option value="BMW">BMW</option>
                       <option value="Mercedes">Mercedes</option>
                       <option value="Audi">Audi</option>
                       <option value="Land-Rover">Land-Rover</option>
                       <option value="Skoda">Skoda</option>
                       <option value="Jeep">Jeep</option>
                       <option value="Nissan">Nissan</option>
                       <option value="Porsche">Porsche</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Car Name</td>
                <td><input type="text" name="cname" class="form-control"></td>
            </tr>

            <tr>
                <td>K.M Driven</td>
                <td><input type="text" name="kdriven" class="form-control"></td>
            </tr>

            <tr >
                <td >Fuel-Type</td>
                <td> <input type="radio" name="r1" value="Petrol"  >Petrol
                    <input type="radio" name="r1" value="Diesel">Diesel
                </td>
            </tr>

            <tr>
                <td>Transmission</td>
                <td> <input type="radio" name="r2" value="Manual">Manual
                    <input type="radio" name="r2" value="Automatic">Automatic
                </td>
            </tr>

            <tr>
                <td>Model</td>
                <td><input type="text" name="model" class="form-control"></td>
            </tr>

            <tr>
                <td>Price</td>
                <td> <input type="text" name="price" class="form-control"></td>
            </tr>
            <tr>
                <td>registration Year</td>
                <td> <input type="text" name="ry" class="form-control"></td>
            </tr>


            <tr>
                <td>Image</td>
                <td> <input type="file" name="img" class="form-control"></td>
            </tr>
            
            <tr>
                <td>RTO</td>
                <td><input type="text" name="rto" class="form-control"></td>
            </tr>

            <tr>
                <td colspan='2' align='center'> <button class="btn2">Submit</button></td>
            </tr>

        </table>
        </div>
       
    </form>
    <?php
    if (isset($_POST['logout'])) {
        session_destroy();
        header("location:category.php");
    }
    ?>

</body>

</html>