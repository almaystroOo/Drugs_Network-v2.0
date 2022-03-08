<?php
    include_once 'connection.php';
	session_start();
	if(isset($_POST['btn_login'])){
		// removes backslashes
	$username = stripslashes($_POST['name']);
        //escapes special characters in a string
	$username = mysqli_real_escape_string($conn,$username);
	$password = stripslashes($_POST['password']);
	$password = mysqli_real_escape_string($conn,$password);
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE `user_name`='$username'
and password='".md5($password)."'";
	$result = mysqli_query($conn,$query) or die(mysqli_error($conn));
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
		$_SESSION['user_id'] = $user_id;
            // Redirect user to index.php
	    header("Location: profile.php");
         
		 }
		 else{
			// echo  $query;
			 echo "<script>
			alert('Username/password is incorrect.');
			window.location.href='login.php'; 
			</script>";
	}
		
	}
	else{
		
	}
?>                                                                             