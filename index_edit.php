<?php

include_once 'db.php';

$sql = "SELECT * FROM admin WHERE id= '".$_GET['id']."' ";

$result = $con->query($sql);

$row = $result->fetch_assoc();


/*$result = mysqli_query($con,"SELECT * FROM admin WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);*/

/*echo "<pre>";
print_r($row);
die();*/

extract($_POST);

if (isset($first_name))
{
  
  $sql= "UPDATE  admin SET first_name='".$_POST['first_name']."', last_name='".$_POST['last_name']."', mobile='".$_POST['mobile']."', email='".$_POST['email']."', password='".$_POST['password']."' WHERE id='".$_GET['id']."'";
  
  $result = $con->query($sql);

  header("location: index.php");

}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

    <title>Edit</title>
  </head>
  <body>

  	<div class="container">
    <h1>Edit</h1>    

    <form id="edit_form" method="POST" action="regis.php">
    	<div class="row mb-3">
    		<label for="first_name" class="col-sm-2 col-form-label">First Name</label>
    		<div class="col-sm-10">
    			<input type="text" class="form-control" id="first_name" name="first_name" required="" value="<?php echo $row['first_name'];?>">
    		</div>
    	</div>
    	<div class="row mb-3">
    		<label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
    		<div class="col-sm-10">
    			<input type="text" class="form-control" id="last_name" name="last_name" required="" value="<?php echo $row['last_name'];?>">
    		</div>
    	</div>
    	<div class="row mb-3">
    		<label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
    		<div class="col-sm-10">
    			<input type="text" class="form-control" id="mobile" name="mobile" required="" value="<?php echo $row['mobile'];?>">
    		</div>
    	</div>
    	<div class="row mb-3">
    		<label for="email" class="col-sm-2 col-form-label">Email</label>
    		<div class="col-sm-10">
    			<input type="email" class="form-control" id="email" name="email" required="" value="<?php echo $row['email'];?>">
    		</div>
    	</div>
    	<div class="row mb-3">
    		<label for="password" class="col-sm-2 col-form-label">Password</label>
    		<div class="col-sm-10">
    			<input type="password" class="form-control" id="password" name="password" required="" value="<?php echo $row['password'];?>">
    		</div>
    	</div>

    	
    	<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
    </form>

    
   

    
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script> 

    <script src ="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js">

    </script>

    <script type="text/javascript">

      $(document).ready(function(){
        
          $('#show_data_table').DataTable();


        $('#edit_form').submit(function(e){
          e.preventDefault();

          $.ajax({
            type:'POST',
            data: new FormData(this),
            dataType:'json',
            contentType:false,
            processData:false,
            success:function(data){
              alert(data);
            }

          });
        }); 





      });

    </script>   
    
  </body>
</html>