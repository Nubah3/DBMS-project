<?php
     
     include 'connect.php';
     $u_id=$_GET['updateid'];
     $sql="SELECT * from user where u_id=$u_id";
     $result=mysqli_query($con,$sql);
     $row=mysqli_fetch_assoc($result);
     $userid=$row['userid'];
     $name=$row['name'];
     $phone=$row['phone'];
     $email=$row['email'];
     $password=$row['password'];
     if(isset($_POST['update'])){
        // $id=$_POST['id'];
        $userid=$_POST['userid']; 
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $sql="UPDATE user SET userid='$userid',name='$name',phone='$phone',email='$email',password='$password' where u_id=$u_id";
        $result=mysqli_query($con,$sql);
        if($result){
          //  echo "Updated successfully";
            header('location:display.php');
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

    <title>user update operation</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">

<div class="form-group">
    <label >User ID</label>
    <input type="text" class="form-control"
     placeholder="Update your user id" name="userid" autocomplete="off" value=<?php echo $userid;?>>
</div>
  
    <div class="form-group">
    <label >Name</label>
    <input type="text" class="form-control"
     placeholder="Update your name" name="name" autocomplete="off" value=<?php echo $name;?>>
</div>
<div class="form-group">
    <label >Phone</label>
    <input type="text" class="form-control"
     placeholder="Update your phone number" name="phone" autocomplete="off" value=<?php echo $phone;?>>
</div>
<div class="form-group">
    <label >Email</label>
    <input type="email" class="form-control"
     placeholder="Update your email" name="email" autocomplete="off" value=<?php echo $email;?>>
</div>
<div class="form-group">
    <label >Password</label>
    <input type="password" class="form-control"
     placeholder="Update your password" name="password" autocomplete="off" value=<?php echo $password;?>>
</div>
    
  <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>

    </div>

    
  </body>
</html>