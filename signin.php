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
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Creative Investment</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
           <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link " href="features.php">Features</a>
            <a class="nav-item nav-link" href="pricing.php">Pricing</a>
        </ul>
      </div>
    </div>
  </nav>
  <header class="masthead">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Login </h1>
          <hr class="divider my-4">
        </div>      
        <div class="col-lg-8 align-self-baseline">
        <form action="/action_page.php">
        <div id="login_div" class="main-div">
    <form>
      <div class="form-group">
    <input type="email" placeholder="Email..." id="email_field" />
  </div>
  <div class="form-group">
    <input type="password" placeholder="Password..." id="password_field" />
</div>
    <button onclick="login()">Login to Account</button>
    </form>
  </div>

  
  <div id="user_div" class="loggedin-div">
    <h3>Welcome User</h3>
    <p id="user_para">Welcome to Firebase web login Example. You're currently logged in.</p>
    <button onclick="logout()">Logout</button>
  </div>



  <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase.js"></script>
  <script>
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyDPhrYlde-DpR79BcNKMREp9bAQP4dtY5Q",
      authDomain: "creativeinvesnments.firebaseapp.com",
      databaseURL: "https://creativeinvesnments.firebaseio.com",
      projectId: "creativeinvesnments",
      storageBucket: "creativeinvesnments.appspot.com",
      messagingSenderId: "1096159254433"
    };
    firebase.initializeApp(config);
  </script>
  <script src="signin.js"></script>
</form>
        </div>
      </div>
    </div>

    <hr/>
    
  </header>
    <footer>
      <p><center> Creative Investment Copyright &copy; All rights reserved. <?=date("Y")?></center></p>
    </footer>
</body>
</html>
