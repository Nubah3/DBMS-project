<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $recid = filter_var($_POST['recid'], FILTER_SANITIZE_STRING); 
  $u_id = intval($_GET['u_id']); 
  $weight = filter_var($_POST['weight'], FILTER_SANITIZE_NUMBER_FLOAT); 
  $height = filter_var($_POST['height'], FILTER_SANITIZE_NUMBER_FLOAT); 
  $bp = filter_var($_POST['bp'], FILTER_SANITIZE_STRING); 
  $user_info_sql = "SELECT * FROM user WHERE u_id = $u_id"; 
  $user_result = mysqli_query($con, $user_info_sql);

  if (mysqli_num_rows($user_result) > 0) { 
    $user_row = mysqli_fetch_assoc($user_result); 

    $sql = "INSERT INTO healthrecords (recid, u_id, weight, height, bp) 
             VALUES ('$recid', $u_id, '$weight', '$height', '$bp')";
    $result = mysqli_query($con, $sql);

    if ($result) {
      echo "Record inserted successfully";
    } else {
      $error_msg = mysqli_error($con);
      echo "Error: Failed to insert record. $error_msg"; 
    }
  } 
}
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>Add records</title>
  </head>
  <body>
    <div class="container my-5">
    <a class="btn btn-primary my-5" href="../seerecform.php" role="button">View records</a>

    <form method="post">

    <div class="form-group">
    <label >Record ID</label>
    <input type="text" class="form-control"
     placeholder="Enter your record id" name="recid" autocomplete="off">
</div>
  
<div class="form-group">
        <label >U_ID</label>
        <input type="number" class="form-control" name="u_id" disabled <?php
          // Pre-fill u_id if retrieved from URL (assuming u_id is present in URL)
          if (isset($_GET['u_id'])) {
            echo "value=" . intval($_GET['u_id']);
          }
          ?>
        >
      </div>
<div class="form-group">
    <label >Weight</label>
    <input type="text" class="form-control"
     placeholder="Enter your weight" name="weight" autocomplete="off">
</div>
<div class="form-group">
    <label >Height</label>
    <input type="text" class="form-control"
     placeholder="Enter your height" name="height" autocomplete="off">
</div>
<div class="form-group">
    <label >B.P.</label>
    <input type="text" class="form-control"
     placeholder="Enter your bp" name="bp" autocomplete="off">
</div>
    
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

  </div>   
  </body>
</html>