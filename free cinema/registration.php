<?php
include './conn.php';


if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirmPassword=$_POST['confirmPassword'];
    $phone=$_POST['phone'];
    $date=$_POST['date'];

    $sq = "SELECT * FROM registration WHERE email = '$email'";
    $result = $conn->query($sq);
    if ($result->num_rows > 0) {

        die('<h1>Error: Email already exists in the database.<a href="loginm.php">Login</a></h1>');


    }
    else{
        $sql="INSERT INTO registration (name,email,password,confirmPassword,phone,date) VALUES ('$name','$email','$password','$confirmPassword','$phone','$date')";
        mysqli_query($conn,$sql);
        header("location:main.php");
    }
}


mysqli_close($conn);

?>
  

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>registration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/registration.css" />
</head>
<body>
        <div class="box">
            <img src="images\10.jpg" width="100%" height="100%" />
            <form method="post" >
                <h2>Registration</h2>
                <div>
                    <i class="fa-solid fa-user"></i>
                    <input type="text" placeholder="Name" name="name" required />
                </div>
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" placeholder="Email" name="email" required />
                </div>
                <div>
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" placeholder="Password" name="password" required minlength="6"/>
                </div>
                <div>
                    <i class="fa-sharp fa-solid fa-circle-check"></i>
                    <input type="password" class="confirm" placeholder="Confirm password" name="confirmPassword" required minlength="6" />
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <input type="tel" placeholder="Phone" name="phone" required/>
                </div>
                <div>
                    <i class="fa-sharp fa-solid fa-calendar-days"></i>
                    <input type="date" placeholder="Date" name="date" required/>
                </div>
                <input type="submit" value="Sign Up" name="register"/>
                <section>
                    <p>Have account ?</p>
                    <a href="login.php">Log In</a>
                </section>
            </form>
        </div>

</body>
</html>