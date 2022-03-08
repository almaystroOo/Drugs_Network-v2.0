<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
  echo "<script>
  alert('you are not logged in, please login first in order to add a pharmacy!.');
  window.location.href='login.php';
  </script>";
}
//	header("location:login.php");}
?>
<!DOCTYPE html>
<?php include_once "header.php"; ?>
<html style="font-size: 16px;">
<head>
    <meta name="viewport" content="width=1200px, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="welcome to the website!, log in, Contact Us">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Add pharmacy</title>
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
        
    <section 
    class="" id="sec-59c1">
    <CENTER>
		
      <div >
        <img class=" " src="images/IMG-20211227-WA0014.jpg" alt="" style="width:150px;height:120px;border-radius: 50%;">
       
      </div>
    </CENTER>
    </section>
    <section c id="sec-3eeb">
      <div class="u-clearfix u-sheet u-sheet-1">
       <CENTER> <h2 class="u-text u-text-default u-text-1">Add New Pharmacy &nbsp;</h2> </CENTER> 
        <div class="u-form u-form-1">
          <form action="pharmacy_action.php" method="post"  style="padding: 50px;" enctype="multipart/form-data"> 
            <div class="u-form-group u-form-name">
              <label for="name-ef64" class="u-form-control-hidden u-label">Name</label>
              <input type="text" placeholder="Pharmacy Name" id="name-ef64" name="pharmacy_name" class="u-border-1 u-border-grey-50  u-input u-input-rectangle u-radius-15 u-input-1" required="">
            </div>
			
			<div class="u-form-group u-form-message">
              <label for="message-3b9a" class="u-form-control-hidden u-label">Message</label>
              <textarea placeholder="Enter Description" rows="4" cols="50" id="descrition-3b9a" name="description" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-input-3" required=""></textarea>
            </div>
			
			<div class="u-form-group u-form-name">
              <label for="name-ef64" class="u-form-control-hidden u-label">Logot</label>
              <input type="file" placeholder="project image" name="fileToUpload">
            </div>
			
			
           
           
            
            
            
            <div class="u-align-center u-form-group u-form-submit">
              
              <input type="submit" value="Add" class="u-active-custom-color-2 u-border-2 u-border-black u-btn u-btn-round u-btn-submit u-button-style u-custom-color-2 u-hover-black u-radius-15 u-text-black u-text-hover-white u-btn-1" name="btn_submit">
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