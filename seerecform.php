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
        
        <!-- <button class="btn btn-primary my-5"><a href="user.php"class="text-light">Add User</a></button> -->
        <!--<a class="btn btn-primary my-5" href="../user.php" role="button">Add User</a>-->


        <table class="table">
  <thead>
    <tr>
      <th scope="col">R ID</th>
      <th scope="col">Record ID</th>
      <th scope="col">User ID</th>
      <th scope="col">Weight</th>
      <th scope="col">Height</th>
      <th scope="col">B.P.</th>
    </tr>
  </thead>
  <tbody>
    
<?php
    
    $sql="SELECT * from healthrecords";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $r_id=$row['r_id'];
            $recid=$row['recid'];
            $u_id=$row['u_id'];
            $weight=$row['weight'];
            $height=$row['height'];
            $bp=$row['bp'];
            echo ' <tr>
            <th scope="row">'.$r_id.'</th>
            <td>'.$recid.'</td>
            <td>'.$u_id.'</td>
            <td>'.$weight.'</td>
            <td>'.$height.'</td>
            <td>'.$bp.'</td>
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