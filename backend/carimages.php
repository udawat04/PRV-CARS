<?php
session_start();
require("header.php");
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
    <form action="cimagedata.php" method="POST" enctype="multipart/form-data">

        <table border='0' align='center' cellspacing=0 cellpadding=10 class="table table-bordered">
            <tr>
                <td colspan="2" align='center'>
                    ADD CAR-DETAILS
                </td>
            </tr>

            <tr>
                <td>Image</td>
                <td> <input type="file" name="img1" class="form-control"></td>
            </tr>

            <tr>
                <td>Image</td>
                <td> <input type="file" name="img2" class="form-control"></td>
            </tr>

            <tr>

                <td>Image</td>
                <td> <input type="file" name="img3" class="form-control"></td>
            </tr>

            <tr>
                <td>Image</td>
                <td> <input type="file" name="img4" class="form-control"></td>
            </tr>

            <tr>
                <td>Image</td>
                <td> <input type="file" name="img5" class="form-control"></td>
            </tr>

            <tr>
                <td>Image</td>
                <td> <input type="file" name="img6" class="form-control"></td>
            </tr>


            <tr>
                <td>Image</td>
                <td> <input type="file" name="img7" class="form-control"></td>
            </tr>

            <tr>
                <td>Image</td>
                <td> <input type="file" name="img8" class="form-control"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td> <input type="file" name="img9" class="form-control"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td> <input type="file" name="img10" class="form-control"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td> <input type="file" name="img11" class="form-control"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td> <input type="file" name="img12" class="form-control"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td> <input type="file" name="img13" class="form-control"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td> <input type="file" name="img14" class="form-control"></td>
            </tr>
            <tr>
                <td>Image</td>
                <td> <input type="file" name="img15" class="form-control"></td>
            </tr>

            <tr>
                <td colspan='2' align='center'> <button class="btn2">Submit</button></td>
            </tr>

        </table>
        </div>
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