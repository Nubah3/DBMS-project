<?php
  include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See Health Records</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
</body>
     
    <div class="container my-5">
    <h1>All users goals</h1>
        
        <!-- <button class="btn btn-primary my-5"><a href="user.php"class="text-light">Add User</a></button> -->
        <!--<a class="btn btn-primary my-5" href="../user.php" role="button">Add User</a>-->


        <table class="table">
  <thead>
    <tr>
      <th scope="col">G ID</th>
      <th scope="col">Goal ID</th>
      <th scope="col">User ID</th>
      <th scope="col">Target Value</th>
      
  </thead>
  <tbody>
  <a class="btn btn-primary my-5" href="./welcome.php" role="button">Back </a>
    
<?php
    
    $sql="SELECT * from goals";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $g_id=$row['g_id'];
            $goalid=$row['goalid'];
            $u_id=$row['u_id'];
            $tarValue=$row['tarValue'];
           
            echo ' <tr>
            <th scope="row">'.$g_id.'</th>
            <td>'.$goalid.'</td>
            <td>'.$u_id.'</td>
            <td>'.$tarValue.'</td>
            <td>
            </td>
          </tr>';
        }
    }
?>
</tbody>
</table>
</div>
</html>