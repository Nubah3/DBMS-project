<?php
include 'connect.php';
if (isset($_POST['submit'])) {
  $goalid = filter_var($_POST['goalid'], FILTER_SANITIZE_STRING); 
  $u_id = intval($_GET['u_id']); 
  $tarValue = filter_var($_POST['tarValue'], FILTER_SANITIZE_NUMBER_FLOAT); 
  $com_status = filter_var($_POST['com_status'], FILTER_SANITIZE_NUMBER_FLOAT); 
  $user_info_sql = "SELECT * FROM user WHERE u_id = $u_id"; 
  $user_result = mysqli_query($con, $user_info_sql);

  if (mysqli_num_rows($user_result) > 0) { 
    $user_row = mysqli_fetch_assoc($user_result); 

    $sql = "INSERT INTO goals (goalid, u_id, tarValue, com_status) 
             VALUES ('$goalid', $u_id, '$tarValue', '$com_status')";
    $result = mysqli_query($con, $sql);

    if ($result) {
      echo "Goal inserted successfully";
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

    <title>Add Goals</title>
  </head>
  <body>
    <div class="container my-5">
    <a class="btn btn-primary my-5" href="../seerecform.php" role="button">View goals</a>

    <form method="post">

    <div class="form-group">
    <label >Goal ID</label>
    <input type="text" class="form-control"
     placeholder="Enter your goal id" name="goalid" autocomplete="off">
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
    <label >Target Value</label>
    <input type="text" class="form-control"
     placeholder="Enter your target value" name="tarValue" autocomplete="off">
</div>
<div class="form-group">
    <label >Completion Status</label>
    <input type="text" class="form-control"
     placeholder="Enter your completion status" name="com_status" autocomplete="off">
</div>

    
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

  </div>   
  </body>
</html>