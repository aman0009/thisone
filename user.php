<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>FizzFlyer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link rel="stylesheet" href="css/swipebox.css">
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>

<link href="css/style.css" type="text/css" rel="stylesheet" media="all">   
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" property="" />   
<!-- //Custom Theme files -->
<!-- font-awesome icons -->

<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<!-- //js -->
<!-- web-fonts --> 
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
  
  
 <link rel="stylesheet" href="css/user.css">
<script  src="js/indexuser.js"></script>
  
</head>

<body style="background-color: teal;">

    <div class="header agileinfo-header"><!-- header -->
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <h1><a href="index.php" style="color: orange;">FizzFlyer</a></h1>
          </div> 
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-left"> 
                <li><a href="index.php" class="w3ls-hover active">Home</a></li>
              <li><a href="tours.php" class="btn w3ls-hover">Tours</a></li>   
              <li><a href="index.php" class="btn w3ls-hover">Inustrial Visits</a></li>
              <li><a href="about.php" class="btn w3ls-hover">About us</a></li>  
              <li><a href="contactus.php" class="btn w3ls-hover">Contact</a></li>
            </ul>    
            <div class="social-icon">
              <a href="#" class="social-button facebook"><i class="fa fa-facebook"></i></a> 
              <a href="#" class="social-button google"><i class="fa fa-google-plus"></i></a>  
              <a href="user.php"><span>New User</span></a>  
            </div> 
            <div class="clearfix"> </div>
          </div><!-- //navbar-collapse --> 
        </div><!-- //container-fluid -->
      </nav>
    </div><!-- //header --> 
  

  <meta name="viewport" content="width=device-width"> 
<div class="form button group">
  <button type="button" id="one">Register</button>
  <button type="button" id="two">Login</button>
</div>
<!--registration-->
<form action = "#" method="post" id="registration">
  <p>
    <input type="text" name="username" id="username" placeholder="Enter your username" >
  </p>
  <p>
    <input type="password" name="password" id="password" placeholder="Enter your password">
  </p>
  <p>
    <input type="password" name="confirm_password" id="con_password" placeholder="Confirm your password">
  </p>
  <input type="submit" name="submit" id="submit">
</form>
<!--login-->
<form action = "#" method="post" id="login">
  <p>
    <input type="text" name="username" id="username" placeholder="Enter your username" >
  </p>
  <p>
    <input type="password" name="password" id="password" placeholder="Enter your password">
  </p>
  <input type="submit" name="log_in" id="log_in" value="Login">
</form>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  
<script  src="js/indexuser.js"></script>


</body>
</html>
