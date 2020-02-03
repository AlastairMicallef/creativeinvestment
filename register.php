<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Creative Investment</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.css " rel="stylesheet">

  <style>
    .searchable-container {
      margin: 20px 0 0 0
    }

    .searchable-container label.btn-default.active {
      background-color: #007ba7;
      color: #FFF
    }

    .searchable-container label.btn-default {
      width: 90%;
      border: 1px solid #efefef;
      margin: 5px;
      box-shadow: 5px 8px 8px 0 #ccc;
    }

    .searchable-container label .bizcontent {
      width: 100%;
    }

    .searchable-container .btn-group {
      width: 90%
    }

    .searchable-container .btn span.glyphicon {
      opacity: 0;
    }

    .searchable-container .btn.active span.glyphicon {
      opacity: 1;
    }

    .col-lg-3 {
      max-width: 100% !important;
    }

    .btn-default {
      background-color: white;
    }

    .stepwizard-step p {
      margin-top: 10px;
    }

    .stepwizard-row {
      display: table-row;
    }

    .stepwizard {
      display: table;
      width: 100%;
      position: relative;
    }

    .stepwizard-step button[disabled] {
      opacity: 1 !important;
      filter: alpha(opacity=100) !important;
    }

    .stepwizard-row:before {
      top: 14px;
      bottom: 0;
      position: absolute;
      content: " ";
      width: 100%;
      height: 1px;
      background-color: #ccc;
      z-order: 0;

    }

    .stepwizard-step {
      display: table-cell;
      text-align: center;
      position: relative;
    }

    .btn-circle {
      width: 30px;
      height: 30px;
      text-align: center;
      padding: 6px 0;
      font-size: 12px;
      line-height: 1.428571429;
      border-radius: 15px;
    }
  </style>


</head>

<body>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Creative Investment</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <a class="nav-item nav-link navbar-brand active js-scroll-trigger" href="index.php">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link navbar-brand js-scroll-trigger" href="features.php">Features</a>
          <a class="nav-item nav-link navbar-brand js-scroll-trigger" href="pricing.php">Pricing</a>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Register</h1>
          
        </div>
        

        <div class="container">
          <div class="stepwizard">
            <div class="stepwizard-row setup-panel">
              <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle" disabled="disabled">1</a>
                <p style="color: white;">Step 1</p>
              </div>
              <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p style="color: white;">Step 2</p>
              </div>
              <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p style="color: white;">Step 3</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-8 align-self-baseline">
          <form action="/action_page.php">
            <div class="form-group">
              <input type="Firstname" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <input type="surname" class="form-control" id="surname" placeholder="Surname">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="pwd" placeholder="Password">
            </div>
            <div class="form-group">
              <input type="re-password" class="form-control" id="pwd" placeholder="Confirm Password">
            </div>
            <div class="checkbox text-white font-weight-bold">
              <label><input type="checkbox"> Remember me</label>
            </div>
            <a class="btn btn-primary btn-lg" href="index.php" role="button">Submit</a>
          </form>
        </div>
      </div>
    </div>

    <hr />

  </header>
  <footer>
    <p>
      <center> Creative Investment Copyright &copy; All rights reserved. <?= date("Y") ?></center>
    </p>
  </footer>
</body>

</html>