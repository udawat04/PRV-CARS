<?php
session_start();

if (!isset($_SESSION['adminloginid'])) {
    header("location: admin.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>

    <link rel="stylesheet" href="category.css">
    <link rel="icon" href="logo3.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>


<body>
<?php
require("sidebar.php");
require ("header.php");
?>
<form action="categorydatabase.php" method="POST" enctype="multipart/form-data">
    <div class="category" style="justify-content: space-between;" >
    <table border='0' align='center' cellspacing=0 cellpadding=10 class="table table-bordered" >
            <tr>
                <td colspan="2" align='center'>
                ADD CAR-DETAILS
                </td>
            </tr>
        <tr>
            <td>Category</td>
            <td>
            <input type="text" placeholder="ENTER CATEGORY" style="font-family:'Courier New', Courier, monospace" name='cat'>
            </td>
        </tr>
        <tr>
            <td>Photo</td>
            <td>
            <input type="file"  name='aa'>
            </td>
        </tr>

       

        <tr>
            <td colspan='2' align='center'> <button class="btn2">Submit</button></td>
        </tr>

        </table>

        <!-- <form action="categorydatabase.php" method="POST">
            <h2 style="margin-bottom: 3.5rem;"> Add Category</h2>
            <div class="container1">
                <input type="text" placeholder="ENTER CATEGORY" style="font-family:'Courier New', Courier, monospace" name='cat'>
            </div>


            <button type="submit" class="btn2">Select</button>

        </form> -->

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