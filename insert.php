<?php  

// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "root"; 
$dbPassword = ""; 
$dbName     = "php_one"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 


 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}


extract($_POST);

if (isset($first_name)) {
	// code...


	$sql = "INSERT INTO admin (first_name,last_name,mobile,email,password)
 	 VALUES ('$first_name','$last_name','$mobile','$email','$password')";

 	 if (mysqli_query($db, $sql)) {
 		echo "New record created successfully !";
 	 } 
}


?>