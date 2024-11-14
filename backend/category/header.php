<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
  </head>

  <body style="font-family: 'Times New Roman', Times, serif;">
    <div class="container-fluid">

      <div class="row  ">

        <nav class="navbar navbar-expand-sm navbar-light bg-light ml-auto min-vw-100">

          <div class="container-fluid">
            <a class="navbar-brand"><img src="logo2.ico" alt
                style="width: 50px;"></a>

            <button class="navbar-toggler" type="button"
              data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
              aria-controls="navbarTogglerDemo01" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">

                <ul class="navbar-nav p-5"
                  style="display: contents; list-style: none;   ">
                  <li class="nav-item  pt-1"><a class="nav-link"
                      href="admin-panel.php"
                      style="text-decoration: none; color: black; ;">HOME</a></li>

                  <li class="nav-item pl-5 "><a class="nav-link" href="category.php"
                      style="text-decoration: none; color: black;">ADD
                      CATEGORY</a></li>

                  <li class="nav-item pl-5"><a class="nav-link" href="cardetail.php"
                      style="text-decoration: none; color: seagreen;">CAR
                      DETAILS</a></li>

                      <li class="nav-item pl-5"><a class="nav-link" href="carimages.php"
                      style="text-decoration: none; color: seagreen;">images
                      </a></li>

                  <li class="nav-item pl-5"><a class="nav-link" href="view.php"
                      style="text-decoration: none; color: seagreen;">VIEW CATEGORY</a></li>
                     <li class="nav-item pl-5"><a class="nav-link" href="viewcar.php"
                      style="text-decoration: none; color: seagreen;">VIEW CAR</a></li>
                </ul>
                <form class="d-flex" method="POST" action="admin.php">
                  <button class="btn btn-outline-success"
                    name="logout" id="btn">Logout</button>
                </form>
              </div>

            </div>

          </nav>
        </div>
      </div>

  <div class="container">