<?php 
error_reporting(0);
session_start();
if(isset($_SESSION['username'])){
   echo "<script>
  alert('you are already logged in {$_SESSION['username']} , please logout first in order to login with another account!.');
  window.location.href='index.php';
  </script>"; 
//	header("location:index.php");
} else{
  include 'login_page.php';
}


