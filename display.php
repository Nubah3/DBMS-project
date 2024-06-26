<?php
  include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Records</title>
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
      <th scope="col">ID</th>
      <th scope="col">User ID</th>
      <th scope="col">Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>
    
<?php
    
    $sql="SELECT * from user";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $u_id=$row['u_id'];
            $userid=$row['userid'];
            $name=$row['name'];
            $phone=$row['phone'];
            $email=$row['email'];
            $password=$row['password'];
            echo ' <tr>
            <th scope="row">'.$u_id.'</th>
            <td>'.$userid.'</td>
            <td>'.$name.'</td>
            <td>'.$phone.'</td>
            <td>'.$email.'</td>
            <td>'.$password.'</td>
            <td>
            <button class="btn btn-success"><a href="update.php?updateid='.$u_id.'" class="text-light">Update users</a></button>    
            <button class="btn btn-danger"><a href="delete.php?deleteid='.$u_id.'" class="text-light">Delete users</a></button>
            <button class="btn btn-warning"><a href="addrecform.php?u_id=' . $u_id.'" class="text-light">Add Records</a></button>
            <button class="btn btn-info"><a href="addgoform.php?u_id='.$u_id.'" class="text-light">Add Goals</a></button>
            
            </td>
          </tr>';
        }
    }
?>
<a class="btn btn-primary my-5" href="./welcome.php" role="button">Back </a>
</tbody>
</table>
</div>
</html>