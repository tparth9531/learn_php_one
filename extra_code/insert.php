<?php  

include 'db.php';

extract($_POST);

if (isset($first_name))
{
	// code...

	$query = "INSERT INTO admin (first_name,last_name,mobile,email,password)
 	 VALUES ('$first_name','$last_name','$mobile','$email','$password')";

 	 if (mysqli_query($con, $query)) 
 	 {
 		echo "New record created successfully !";
 	 } 
}


?>