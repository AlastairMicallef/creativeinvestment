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
          <h1 class="text-uppercase text-white font-weight-bold">Choose your Position</h1>
         
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">Invest beyond the ordinary</p>
        </div>
      </div>
    </div>
  </header>


  <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body text-center">
          <h5 class="card-title">Investor Price</h5>
          <p class="card-text">27 Euro per Month</p>
          <a href="join-investor.php" class="btn btn-primary">Join Now</a>
        </div>
      </div>
    </div>
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body text-center">
          <h5 class="card-title">Entrepreneur Price</h5>
          <p class="card-text">57 Euro per Month</p>
          <a href="join-entrepreneur.php" class="btn btn-primary">Join now</a>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <p>
      <center> Creative Investment Copyright &copy; All rights reserved. <?= date("Y") ?></center>
    </p>
  </footer>
</body>

</html>