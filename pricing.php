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
</head>
<body>
    <div class="jumbotron" style="">
        <h1 class="display-4">Creative Investment</h1>
        <p class="lead">Where Invester and Entrepreneur create great things togenter</p>
        <hr class="my-4">
        <p>Invest beyond the ordinary</p>
        <a class="btn btn-primary btn-lg" href="register.php" role="button">Become a member</a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="features.php">Features</a>
            <a class="nav-item nav-link" href="pricing.php">Pricing</a>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Invester Price</h5>
                <p class="card-text">27 Euro per Month</p>
                <a href="#" class="btn btn-primary">Join Now</a>
            </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Entrepreneur Price</h5>
                <p class="card-text">57 Euro per Month</p>
                <a href="#" class="btn btn-primary">Join now</a>
            </div>
            </div>
        </div>
    </div>

    
 


    <footer>
      <p><center> Creative Investment Copyright &copy; All rights reserved. <?=date("Y")?></center></p>
    </footer>
</body>
</html>