
<!DOCTYPE html>
<html lang="en">

<head>
<title>FizzFlyer</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">  
<link rel="stylesheet" href="css/swipebox.css">    
<!-- //Custom Theme files -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script> 
<link rel="stylesheet" href="css/style2.css"> 
<link href="http://fonts.googleapis.com/css?family=Bad+Script" rel="stylesheet">
<link href="css/style4.css" type="text/css" rel="stylesheet" media="all">  
<link href="css/style5.css" type="text/css" rel="stylesheet" media="all">
</head>
<style type="text/css">
  border1 {
    border-top: 5px solid #01caa7;
    width: 552px;
    margin: 40px auto;
}
.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 7px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 98px 216px;
    cursor: pointer;
    border-radius: 5px;
    height: 40px;
}
</style>
<body style="background: #efefef;">
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
            <h1><a href="index.html" style="color: orange;">FizzFlyer</a></h1>
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
  


 <form action="/library/FormProcessor.php" enctype="multipart/form-data" id="contactForm" method="post" name="contactForm">
  <input id="hidFormName" name="hidFormName" type="hidden" value="Contact Form" />
    <ul class="contactform clearfix nobullets">
      <li class="twelvecol"><br>

     <div style="border: 3px solid #01caa7; width: 552px; margin: 40px auto;">
      </div>

      <li class="twelvecol clearfix">
        <h3>About your Hotel</h3> </li><br>
      <li class="sixcol">
        <label class="required" for="txtName">Name of the Hotel/Property</label>
        <input type="text" class="text" id="txtName" name="Name" required="required" title="Full Name"  /> </li>
      <li class="sixcol">
        <label class="required" for="txtProTitle">Address</label>
        <input type="text" class="text" id="txtName" name="Name" required="required" title="Professional Title"  /> </li>
      <li class="sixcol">
        <label class="required" for="txtCompany">City</label>
        <input type="text" class="text" id="txtCompany" name="Name" required="required" title="Company" /> </li>
      <li class="sixcol last">
        <label class="required" for="txtPhone">Pincode</label>
        <input type="tel" class="text" id="txtPhone" name="Phone" required="required" title="pincode"   /> </li>
      <li class="sixcol">
        <label class="required" for="txtEmail">State</label>
        <input type="email" class="text" id="txtEmail" name="Email" required="required" title="Email Address"  /> </li>
      <li class="sixcol last">
        <label for="txtAddress">Website</label>
        <input type="text" class="text" id="txtAddress" name="Address" title="Street Address" /> </li>
      <li class="clearfloat"></li>
      <li class="fourcol">
        <label for="txtZip">Telephone No.</label>
        <input type="text" class="text zip-mask" id="txtZip" name="Zip" title="Zip - #####"  /> </li>
      <li class="fourcol">
        <label for="txtCity">Mobile No.</label>
        <input type="text" class="text" id="txtCity" name="City" title="City" /> </li>
      <li class="fourcol last">
        <label for="cboState">Star Category</label>
          <input type="text" class="text" id="txtAddress" name="Address" title="Street Address" /> 
      </li>
      <li class="fourcol last">
        <label for="cboState" >Property Description</label>
          <textarea style="width: 240px; height: 100px;"></textarea>
      </li><br>

        <div style="border: 3px solid #01caa7; width: 552px; margin: 40px auto;">
      </div>

      <li class="twelvecol clearfix">
        <h3>Room Details</h3></li><br>
      <li class="sixcol">
 <table>
  <tr>
    <th style="padding: 11px;">Room Type</th>
    <th style="padding: 11px;">No. of Rooms</th>
    <th style="padding: 11px;">Price Quoted</th>
  </tr>
  <tr>
    <td style="padding: 11px;">Standard</td>
    <td style="padding: 11px;"> <input type="text" class="text" id="txtAddress" name="Address" title="Street Address" /></td>
      <td style="padding: 11px;"> <input type="text" class="text" id="txtAddress" name="Address" title="Street Address" /></td>
  </tr>
  <tr>
    <td style="padding: 11px;">Deluxe</td>
    <td style="padding: 11px;"> <input type="text" class="text" id="txtAddress" name="Address" title="Street Address" /></td>
    <td style="padding: 11px;"> <input type="text" class="text" id="txtAddress" name="Address" title="Street Address" /></td>
  </tr>
  <tr>
    <td style="padding: 11px;">Super Deluxe</td>
    <td style="padding: 11px;"> <input type="text" class="text" id="txtAddress" name="Address" title="Street Address" /></td>
    <td style="padding: 11px;"> <input type="text" class="text" id="txtAddress" name="Address" title="Street Address" /></td>
  </tr>
  <tr>
    <td style="padding: 11px;">Executive</td>
    <td style="padding: 11px;" > <input type="text" class="text" id="txtAddress" name="Address" title="Street Address" /></td>
    <td style="padding: 11px;"> <input type="text" class="text" id="txtAddress" name="Address" title="Street Address" /></td>
  </tr>
  <tr>
    <td style="padding: 11px;">Suite</td>
    <td style="padding: 11px;"> <input type="text" class="text" id="txtAddress" name="Address" title="Street Address" /></td>
    <td style="padding: 11px;"> <input type="text" class="text" id="txtAddress" name="Address" title="Street Address" /></td>
  </tr>
  <tr>
    <td style="padding: 11px;">Family Suite</td>
    <td style="padding: 11px;"> <input type="text" class="text" id="txtAddress" name="Address" title="Street Address" /></td>
    <td style="padding: 11px;"><input type="text" class="text" id="txtAddress" name="Address" title="Street Address" /></td>
  </tr>
</table>
      </li>

      <div style="border: 3px solid #01caa7; width: 552px; margin: 40px auto;">
      </div>

      <li class="twelvecol clearfix">
        <h3>Hotel Amenities and Services</h3></li><br>
      <li class="sixcol">
 <table>
  <tr>
    <th style="padding: 11px;">Amenity</th>
    <th style="padding: 11px;">Choice</th>
    <th style="padding: 11px;">Amenity</th>
    <th style="padding: 11px;">Choice</th>
  </tr>
  <tr>
    <td style="padding: 11px;">WIFI</td>
    <td style="padding: 11px;"><input id="txtOutpatient" name="Outpatient" type="checkbox" style="height: 20px;width: 20px;"></td>
    <td style="padding: 11px;">Parking</td>
    <td style="padding: 11px;"><input id="txtOutpatient" name="Outpatient" type="checkbox" style="height: 20px;width: 20px;"></td>
  </tr>
  <tr>
    <td style="padding: 11px;">Swimming Pool</td>
    <td style="padding: 11px;"><input id="txtOutpatient" name="Outpatient" type="checkbox" style="height: 20px;width: 20px;"></td>
    <td style="padding: 11px;">Gym</td>
    <td style="padding: 11px;"><input id="txtOutpatient" name="Outpatient" type="checkbox" style="height: 20px;width: 20px;"></td>
  </tr>
  <tr>
    <td style="padding: 11px;">Laundary Service</td>
    <td style="padding: 11px;"><input id="txtOutpatient" name="Outpatient" type="checkbox" style="height: 20px;width: 20px;"></td>
    <td style="padding: 11px;">Massage/Spa</td>
    <td style="padding: 11px;"><input id="txtOutpatient" name="Outpatient" type="checkbox" style="height: 20px;width: 20px;"></td>
  </tr>
  <tr>
    <td style="padding: 11px;">AC</td>
    <td style="padding: 11px;" ><input id="txtOutpatient" name="Outpatient" type="checkbox" style="height: 20px;width: 20px;"></td>
    <td style="padding: 11px;">Restaurant</td>
    <td style="padding: 11px;"><input id="txtOutpatient" name="Outpatient" type="checkbox" style="height: 20px;width: 20px;"></td>
  </tr>
  <tr>
    <td style="padding: 11px;">Bar Lounge</td>
    <td style="padding: 11px;"><input id="txtOutpatient" name="Outpatient" type="checkbox" style="height: 20px;width: 20px;"></td>
    <td style="padding: 11px;">Outdoor Sports</td>
    <td style="padding: 11px;"><input id="txtOutpatient" name="Outpatient" type="checkbox" style="height: 20px;width: 20px;"></td>
  </tr>
  <tr>
    <td style="padding: 11px;">Compl. Breakfast</td>
    <td style="padding: 11px;"><input id="txtOutpatient" name="Outpatient" type="checkbox" style="height: 20px;width: 20px;"></td>
    <td style="padding: 11px;">Pickup/Drop</td>
    <td style="padding: 11px;"><input id="txtOutpatient" name="Outpatient" type="checkbox" style="height: 20px;width: 20px;"></td>
  </tr>
</table>
      </li>

      <div style="border: 3px solid #01caa7; width: 552px; margin: 40px auto;">
      </div>

     
    
     <li class="twelvecol clearfix">
        <h3>Upload Pictures</h3></li><br>
      <li class="sixcol">
       <table>
       <tr>
         <td>Exterior View</td>
         <td ><input type="file" name="pic" accept="image/*" style=" background-color: white;">
         </td>
       </tr>
        <tr>
         <td>Reception/Lobby</td>
         <td ><input type="file" name="pic" accept="image/*" style=" background-color: white;">
         </td>
       </tr>
        <tr>
         <td>Room Type 1</td>
         <td ><input type="file" name="pic" accept="image/*" style=" background-color: white;">
         </td>
       </tr>
        <tr>
         <td>Room Type 2</td>
         <td ><input type="file" name="pic" accept="image/*" style=" background-color: white;">
         </td>
       </tr>
        <tr>
         <td>Restaurant</td>
         <td ><input type="file" name="pic" accept="image/*" style=" background-color: white;">
         </td>
       </tr>
        <tr>
         <td>Room Another Type</td>
         <td ><input type="file" name="pic" accept="image/*" style=" background-color: white;">
         </td>
       </tr>
       </table>
      </li>
      
      <li class="twelvecol">
        
      
      </li>
    </ul>
    <button class="button" type="submit" form="nameform" value="Submit">Submit</button>
</form>
  
     





  <script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.5.5/angular-animate.min.js'></script>

    <script src="js/index1.js"></script>



<div class="footer-agile">
    <div class="container">
      <div class="footer-agileinfo"> 
        <div class="col-md-3 col-sm-3 footer-wthree-grid">
          <h3>Quick Links</h3>
          <ul>
            <li><a href="index.php"><span class="glyphicon glyphicon-menu-right"></span> Home</a></li>
            <li><a href="about.php"><span class="glyphicon glyphicon-menu-right"></span> About</a></li> 
            <li><a href="tours.php"><span class="glyphicon glyphicon-menu-right"></span> Tours</a></li>
            <li><a href="contactus.php"><span class="glyphicon glyphicon-menu-right"></span> Contact</a></li>
          </ul>
        </div>   
        <div class="col-md-4 col-sm-4 footer-wthree-grid">
          <h3>Contact Details:</h3>
          <ul>
            <li>Phone: +91 7987199909</li>
            <li><a href=""> support@fizzflyer.in <br> head_marketing@fizzflyer.in</a></li>
          </ul>
        </div>
        <div class="col-md-4 col-sm-4 footer-wthree-grid">
          <h3>Partner With Us:</h3>
          <ul>
            <li><a href="registration.php" class="btn w3ls-hover">Hotel Partner</a></li> 
            <li><a href="index.php" class="btn w3ls-hover">Travel Agent Partner</a></li>
          </ul>
        </div>
        
      </div>
      
    </div>
  </div> 



    <div class="footer-agile">
    <div class="container">
      <div class="footer-agileinfo"> 
        <div class="col-md-5 col-sm-5 footer-wthree-grid"> 
          <div class="agileits-w3layouts-tweets">  
            <h5 style="margin-top: 15px;"><a href="index.html"><img src="img/1.jpg" style="width: 200px; height: 100px;margin: 5px;"></a></h5> 
            <div class="social-icon footerw3ls" style="margin-top: 10px;">
              <a href="#" class="social-button facebook" style="margin-top: 10px;"><i class="fa fa-facebook"></i></a> 
            <a href="#" class="social-button google" style="margin-top: 10px;"><i class="fa fa-google-plus"></i></a>  
            </div>
          </div>
          <p></p>
        </div> 
      
      <div class="copy-right"> 
        <p>© 2017 FizzFlyer . All rights reserved | Design by <a href="" target="_blank">Fizz Flyer and Company </a></p>
      </div>
    </div>
  </div> 
  
</body>
</html>
