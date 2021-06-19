<?php 

include_once 'db.php';

extract($_POST);

if (isset($first_name))
{
  
  $sql= "INSERT INTO admin (first_name, last_name, mobile, email, password) values('$first_name','$last_name','$mobile', '$email','$password')";
  
  $result = $con->query($sql);

}

$sql = "SELECT * FROM admin";
$result = $con->query($sql);

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

    <title>Registration</title>
  </head>
  <body>

  	<div class="container">
    <h1>Registration</h1>    

    <form id="reg_form" method="POST" action="regis.php">
    	<div class="row mb-3">
    		<label for="first_name" class="col-sm-2 col-form-label">First Name</label>
    		<div class="col-sm-10">
    			<input type="text" class="form-control" id="first_name" name="first_name" required="">
    		</div>
    	</div>
    	<div class="row mb-3">
    		<label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
    		<div class="col-sm-10">
    			<input type="text" class="form-control" id="last_name" name="last_name" required="">
    		</div>
    	</div>
    	<div class="row mb-3">
    		<label for="mobile" class="col-sm-2 col-form-label">Mobile</label>
    		<div class="col-sm-10">
    			<input type="text" class="form-control" id="mobile" name="mobile" required="">
    		</div>
    	</div>
    	<div class="row mb-3">
    		<label for="email" class="col-sm-2 col-form-label">Email</label>
    		<div class="col-sm-10">
    			<input type="email" class="form-control" id="email" name="email" required="">
    		</div>
    	</div>
    	<div class="row mb-3">
    		<label for="password" class="col-sm-2 col-form-label">Password</label>
    		<div class="col-sm-10">
    			<input type="password" class="form-control" id="password" name="password" required="">
    		</div>
    	</div>

    	
    	<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Submit">
    </form>

    <div class="table-responsive">
      <table class="table" id="show_data_table">
        <thead>
          <tr>
            <th>Sr. No.</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>            
          </tr>
        </thead>
        <tbody>
          <?php   

          $i=1;
          while($row = $result->fetch_assoc())
          {

          ?>

          <tr>
            <td><?php echo $i++;?></td>
            <td><?php echo $row['first_name'];?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['email']?></td>
            <td><a href="registration_same_page.php">Edit</a></td>
            <td><a href="registration_same_page.php">Delete</a></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
   

    
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


        $('#reg_form').submit(function(e){
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