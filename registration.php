<?php 

    echo "hello";

    print_r($_POST);

    ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="undefined" crossorigin="anonymous">

    <title>Registration</title>
  </head>
  <body>

  	
  	<div class="container">
    	<h3>Registration Details</h3>

    		<form id="reg_form"  action="" method="POST">
    		<!-- 2 column grid layout with text inputs for the first and last names -->
    		<div class="row mb-4">
    			<div class="col">
    				<div class="form-outline">
    					<input type="text" id="first_name" name="first_name" class="form-control" required="" />
    					<label class="form-label" for="first_name">First name</label>
    				</div>
    			</div>
    			<div class="col">
    				<div class="form-outline">
    					<input type="text" id="last_name" name="last_name" class="form-control" required="" />
    					<label class="form-label" for="last_name">Last name</label>
    				</div>
    			</div>
    		</div>

    		<!-- Email input -->
    		<div class="form-outline mb-4">
    			<input type="email" id="email" class="form-control" required="" />
    			<label class="form-label" for="email">Email address</label>
    		</div>

    		<!-- Password input -->
    		<div class="form-outline mb-4">
    			<input type="password" id="password" class="form-control" required="" />
    			<label class="form-label" for="password">Password</label>
    		</div> 		


    		<!-- Submit button -->
    		<button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
    		</form>
    		

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script type="text/javascript">
    	$(document).ready(function(e){
    		
    		$("#reg_form").on('submit', function(e){
    		e.preventDefault();

    	$.ajax({
    		type: 'POST',
    		url: 'registration.php',
    		data: new FormData(this),
    		dataType: 'json',
    		contentType: false,
    		cache: false,
    		processData:false,    		
            success: function(response){ 
            	
            }
        });
    });
});
    </script>
  </body>
</html>