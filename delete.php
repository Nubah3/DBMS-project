<?php
    include 'connect.php';
    if(isset($_GET['deleteid'])){
        $id=$_GET['deleteid'];

        $sql="DELETE from user where id=$id";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Deleted successfully";        
        }
        else{
            die(mysqli_error($con));           
        }
        
    }
    
?>