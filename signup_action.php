<?php
    include_once 'connection.php';
	if(isset($_POST['btn_submit'])){
		$name = stripslashes($_POST['name']);
		$email = stripslashes($_POST['email']);
		$phone = stripslashes($_POST['phone']);
		$pharmacy_name = stripslashes($_POST['pharmacy_name']);
		$agree = stripslashes($_POST['agree']);
        //escapes special characters in a string
	$name = mysqli_real_escape_string($conn,$name); 
	$email = mysqli_real_escape_string($conn,$email); 
	$phone = mysqli_real_escape_string($conn,$phone); 
	$pharmacy_name = mysqli_real_escape_string($conn,$pharmacy_name); 
	$agree = mysqli_real_escape_string($conn,$agree); 
	$password = stripslashes($_POST['password']);
	$password = mysqli_real_escape_string($conn,$password);
        $query = "INSERT INTO `users`(`user_name`, `email`, `password`, `phone_number`, `pharmacy_name`, `agree`)
VALUES ('$name','$email','".md5($password)."', '$phone','$pharmacy_name', '$agree')";
        $result = mysqli_query($conn,$query);
        if($result){

		echo "<script>
		alert('User registered successfully. Please Login');
		window.location.href='login.php';
		</script>";
        }
	}
	else{
		echo "<script>
		alert('Failed To Create an Account.');
		window.location.href='signup.php';
		</script>";
		}
?>                                                                              