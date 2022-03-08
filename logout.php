<?php
session_start();
session_destroy();
session_unset();
$_SESSION['username'] = null;
if($_SESSION['username'] == null){
    echo "<script> alert('you have been logged out successfuly {$_SESSION['username']}, we would love to see you again !.');
    window.location.href='index.php';
    </script>";
}
?>