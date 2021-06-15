<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>

<?php 

echo "reg";

if (isset($_POST['submit'])){
	echo "this is post";

	echo "<pre>";
	print_r($_POST);

	$firstName= $_POST['first_name'];
	$lastName = $_POST['last_name'];

	echo $firstName."<br>";
	echo $lastName;
}


?>


<form id="reg_form" action="reg.php" method="POST">

<input type="text" name="first_name" id="first_name">
<br><br>
<input type="text" name="last_name" id="last_name">
<input type="submit" name="submit" value="Submit">


</form>


</body>
</html>