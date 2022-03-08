<?php
session_start();
    include_once 'connection.php';
	if(isset($_POST['btn_submit'])){
		echo "yes";
		$drug_name = stripslashes($_POST['drug_name']);
		$unit = stripslashes($_POST['unit']);
		$package = stripslashes($_POST['package']);
		$quantity = stripslashes($_POST['quantity']);
		$date_of_purchace = stripslashes($_POST['date_of_purchace']);
		$company = stripslashes($_POST['company']);
		$expired_date = stripslashes($_POST['expired_date']);
        //escapes special characters in a string
	$drug_name = mysqli_real_escape_string($conn,$drug_name); 
	$unit = mysqli_real_escape_string($conn,$unit); 
	$package = mysqli_real_escape_string($conn,$package); 
	$quantity = mysqli_real_escape_string($conn,$quantity); 
	$date_of_purchace = mysqli_real_escape_string($conn,$date_of_purchace); 
	$company = mysqli_real_escape_string($conn,$company);
	$expired_date = mysqli_real_escape_string($conn,$expired_date);
	$user_id = $_SESSION['user_id'];
        $query = "INSERT INTO `drugs`(`drug_name`, `unit`, `package`, `quantity`, `date_of_purchace`, `company`, `expired_date`,`user_id`) 
VALUES ('$drug_name','$unit', '$package','$quantity', '$date_of_purchace','$company','$expired_date','$user_id')";
        $result = mysqli_query($conn,$query);
        if($result){

		echo "<script>
		alert('Drug Added successfully');
		window.location.href='profile.php';
		</script>"; 
        }
		else{
		echo $query;
		 echo "<script>
		alert('Failed To Drug.');
		window.location.href='drugs.php';
		</script>"; 
		}
	}
	
?>                                                                              