<?php
    include_once 'connection.php';
	if(isset($_POST['btn_submit'])){
		$name = stripslashes($_POST['name']);
		$email = stripslashes($_POST['email']);
		$message = stripslashes($_POST['message']);
        //escapes special characters in a string
	$name = mysqli_real_escape_string($conn,$name); 
	$email = mysqli_real_escape_string($conn,$email); 
	$message = mysqli_real_escape_string($conn,$message); 
        $query = "INSERT INTO `contact_us`(`name`, `email`, `massage`)
VALUES ('$name','$email','$message')";
        $result = mysqli_query($conn,$query);
        if($result){

		echo "<script>
		alert('Message Sent Successfully');
		window.location.href='index.php';
		</script>";
        }
	}
	else{
		echo "<script>
		alert('Failed To Send Message...');
		window.location.href='Contact-Us.php';
		</script>";
		}
?>                                                                              