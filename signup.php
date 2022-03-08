<?php 
error_reporting(0);
session_start();
if(isset($_SESSION['username'])){
   echo "<script>
  alert('you are already logged in {$_SESSION['username']} , please logout first in order to Signup with another account!.');
  window.location.href='index.php';
  </script>"; }
//	header("location:login.php");}
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="welcome to the website!, log in, Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Signup</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/Home.css" media="screen">
    <script class="u-script" type="text/javascript" src="js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.1.0, nicepage.com">
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,200,300,400,500,600,700,800,900|Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site3",
		"logo": "np://user.desktop.nicepage.com/Site_89401742/images/Artboard14.png?rand=7d98",
		"sameAs": [
				"https://facebook.com/name",
				"https://twitter.com/name",
				"https://www.instagram.com/name"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta name="twitter:site" content="@">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Home">
    <meta name="twitter:description" content="Site3">
    <meta property="og:title" content="Home">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <!-- header starts here -->
  <?php include_once "header.php"; ?>

    <CENTER>
		<h2 >Subcure Signup&nbsp;</h2>
      <div >
        <img class="u-image u-image-default u-preserve-proportions u-image-1" src="images/IMG-20211227-WA0014.jpg" alt="" style="width:150px;height:120px;border-radius: 50%;">
       
      </div>
    </CENTER>
    </section>
    <section  id="sec-3eeb" style="margin-top: -140px;">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">&nbsp;</h2>
        <div >
          <form action="signup_action.php" method="post"  style="padding: 50px;margin-top:100px">
            <div class="u-form-group u-form-name">
              <label for="name-ef64" class="u-form-control-hidden u-label">Name</label>
              <input type="text" placeholder="Name" id="name-ef64" name="name" class="u-border-1 u-border-grey-50 u-input u-input-rectangle u-radius-15 u-input-1" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-ef64" class="u-form-control-hidden u-label">Email</label>
              <input type="email" placeholder="Email" id="email-ef64" name="email" class="u-border-1 u-border-grey-50 u-input u-input-rectangle u-radius-15 u-input-2" required="">
            </div>
          
            <div class="u-form-group u-form-name u-form-group-4">
              <label for="name-497e" class="u-form-control-hidden u-label"></label>
              <input type="password" placeholder="enter your password" id="name-497e" name="password" class="u-border-1 u-border-grey-50  u-input u-input-rectangle u-radius-15 u-input-4" required="">
            </div>
			
			
            <div class="u-form-group u-form-phone u-form-group-5">
              <label for="phone-1f82" class="u-form-control-hidden u-label"></label>
              <input type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" placeholder="Enter your phone (e.g. +14155552675)" id="phone-1f82" name="phone" class="u-border-1 u-border-grey-50  u-input u-input-rectangle u-radius-15 u-input-5" required="">
            </div>
           
            <div class="u-form-group u-form-name u-form-group-7">
              <label for="name-3d1c" class="u-form-control-hidden u-label"></label>
              <input type="text" placeholder="your pharmacy name " id="name-3d1c" name="pharmacy_name" class="u-border-1 u-border-grey-50 u-input u-input-rectangle u-radius-15 u-input-7" required="">
            </div>
            
            <div class="u-form-agree u-form-group u-form-group-9">
              <input type="checkbox" id="agree-3909" name="agree" class="u-agree-checkbox" required="" value="agree">
              <label for="agree-3909" class="u-label">I accept the <a href="#">Terms of Service</a>
              </label>
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              
              <input type="submit" value="Create" class="u-active-custom-color-2 u-border-2 u-border-black u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-hover-black u-radius-15 u-text-black u-text-hover-white u-btn-1" name="btn_submit">
            </div>
            
          </form>
        </div>
      </div>
    </section>
    </center>
          
     
      
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="" target="_blank">
        <span>Subcure- @All rights Reserved</span>
      </a>
      <p class="u-text">
        <span>created by</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Subcure Team  </span>
      </a>
    </section>
  </body>
</html>