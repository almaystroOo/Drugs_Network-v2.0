<?php
session_start();
    include_once 'connection.php';
	if(isset($_POST['btn_submit'])){
		$user_id = $_SESSION['username'];
		$name = $_POST['pharmacy_name'];
		$description = stripslashes($_POST['description']);
	
        //escapes special characters in a string
	$name = mysqli_real_escape_string($conn,$name); 
	$description = mysqli_real_escape_string($conn,$description);
	// Check if image file is a actual image or fake image
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }


// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	  $logo = $_FILES["fileToUpload"]["name"];
    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	 $query = "INSERT INTO `pharmacy`(`user_id`, `name`, `description`, `logo`)
VALUES ('$user_id','$name', '$description', '$logo')";
        $result = mysqli_query($conn,$query);
        if($result){
		 echo "<script>
		alert('Pharmacy Has Been added successfully.');
		window.location.href='pharmacy.php';
		</script>"; 
        }
		else{
	
		 echo "<script>
		alert('Failed To Add Pharmacy...');
		window.location.href='add_pharmacy.php';
		</script>"; 
		}
		
	
  } 
}
	// Upload Ends Here!!!!!}
	 
	}
	
	
?>                                                                              