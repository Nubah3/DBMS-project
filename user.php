<?php     
     include 'connect.php';
     if(isset($_POST['submit'])){
        $userid=$_POST['userid'];
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="INSERT into user (userid,name,phone,email,password) values ('$userid','$name','$phone','$email''$password')";
        $result = mysqli_query($con,$sql);
        if($result){
            echo "Data inserted successfully";
           // header('location:display.php');
        }
        else{
            die(mysqli_error($con));
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

    <title>HealthTrackingSystem</title>
  </head>
  <body>
    <div class="container my-5">
    <a class="btn btn-primary my-5" href="../display.php" role="button">View User</a>

    <form method="post">

    <div class="form-group">
    <label >User ID</label>
    <input type="text" class="form-control"
     placeholder="Enter your user id" name="userid" autocomplete="off">
</div>
  
    <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"
     placeholder="Enter your name" name="name" autocomplete="off">
</div>
<div class="form-group">
    <label >Phone</label>
    <input type="text" class="form-control"
     placeholder="Enter your phone number" name="phone" autocomplete="off">
</div>
<div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control"
     placeholder="Enter your email" name="email" autocomplete="off">
</div>
<div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control"
     placeholder="Enter your password" name="password" autocomplete="off">
</div>
    
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

  </div>   
  </body>
</html>