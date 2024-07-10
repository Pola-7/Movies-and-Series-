<?php

include './conn.php';
$error=null;
$email=null;
$password=null;
if(isset($_POST['submit'])){

    $email=($_POST['email']);
    $password=($_POST['password']);
    $sql = "SELECT * FROM registration WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn,$sql);
    $query = "SELECT * FROM registration WHERE 'admin@admin'='$email' AND 'admin@admin'='$password'";
    $res = mysqli_query($conn,$query);
    if(mysqli_num_rows($res)){
        $row=mysqli_fetch_assoc($res);
        header("location:admin.php");
    }elseif(mysqli_num_rows($result)){
     $row=mysqli_fetch_assoc($result);
     header("location:main.php");
    }else{$error='Email or password is incorrect';
    }


}



?>

