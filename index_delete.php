<?php

include_once 'db.php';

$sql = "DELETE FROM admin WHERE id= '".$_GET['id']."' ";

$result = $con->query($sql);

header("location: index.php");
?>