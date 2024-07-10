<?php include './loginp.php' ?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="login.css" />
</head>
<body>
    <div class="container">
        <div class="box">
            <img src="images\10.jpg" width="1462px" height="100%" />
            <form method="post"enctype="multipart/form-data" >
                <h2>Log In</h2>
                <p class="error"><?php if($error!=null){ echo $error;  ?>
                <style>
                    span {
                        margin-top: 230px;
                        font-size: 15px;
                        text-align: center;
                        align-items: center;
                        padding: 0px 0px 0 70px;
                        color: white;
                        display: flex;
                        justify-content: space-between;
                        }
                    </style> <?php }?></p>
                <input type="email" placeholder="Email" name="email" required />

                <input type="password" placeholder="Password" name="password" required/>

                <input type="submit" value="Log In" name="submit"/>
                <span>
                    <p>Do not have account ?</p>
                    <a href="registration.php">Sign Up</a>
                </span>
            </form>
        </div>
    </div>
</body>
</html>