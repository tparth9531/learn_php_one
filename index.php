<?php 

include_once 'db.php';

$sql = "SELECT * FROM admin";
$result = $con->query($sql);

/*if(isset($_GET))
{
	$id = $_GET['id'];
	echo $id;
}*/



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

    <title>Home</title>
  </head>
  <body>

  	<div class="container">
    <h1>Home</h1>     

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

          $i=0;
          while($row = $result->fetch_assoc())
          {

          ?>

          <tr>
            <td><?php echo $i+1;?></td>
            <td><?php echo $row['first_name'];?></td>
            <td><?php echo $row['last_name']?></td>
            <td><?php echo $row['mobile']?></td>
            <td><?php echo $row['email']?></td>
            <td><a href="index_edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
            <td><a href="index_delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
            
          </tr>
        <?php $i++;} ?>
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

      });

    </script>   
    
  </body>
</html>