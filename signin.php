<html>
<head>
  <title>Firebase Login</title>
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="signinstyle.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="jumbotron">
        <h1 class="display-4">Creative Investment</h1>
        <p class="lead">Where Invester and entraprenur create great things togenter</p>
        <hr class="my-4">
        <p>Invest beyond the ordinary</p>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
            <a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="features.php">Features</a>
            <a class="nav-item nav-link" href="pricing.php">Pricing</a>
            <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </div>
        </div>
    </nav>

  <div id="login_div" class="main-div">
    <h3>Creative Invesntment login</h3>
    <input type="email" placeholder="Email..." id="email_field" />
    <input type="password" placeholder="Password..." id="password_field" />

    <button onclick="login()">Login to Account</button>
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

  <footer>
      <p><center> Creative Investment Copyright &copy; All rights reserved. <?=date("Y")?></center></p>
    </footer>



</body>
</html>
