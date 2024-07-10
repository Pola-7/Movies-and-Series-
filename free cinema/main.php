<?php

include './conn.php';
include './header.php';
       $result1=mysqli_query($conn, " SELECT * FROM movies ");

       $result=mysqli_query($conn, " SELECT * FROM series ");
?>

<?php



if(isset($_POST['su'])){
    $name=$_POST['name'];
    $complaint=$_POST['complaint'];

    $sq="INSERT INTO contact (name,complaint) VALUES ('$name','$complaint')";
        mysqli_query($conn,$sq);


}


mysqli_close($conn);

?>



<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" /><!--for arabic-->
    <title>free cinema</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="main2.css" /><!--to link css-->
</head>

<body>


    <section class="main">
        <div>
            <img src="images\R (1).jpeg" width="100% px;" height="500px" />
            <h1 style="color:yellow;font-size:70px;text-align:center;">welcome to free cinema </h1>
            <div class="icons">
                <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
    </section>

    <section class="movies" id="movies">
        <h2 class="title">movies</h2>
        <div class="content">
            <?php
            while($row=mysqli_fetch_array ($result1) )
             {
            echo "
            <div class='movies-card'>
                <div class='movies-image'>
                    <img src='$row[image]'/>
                </div>
                <div class='movies-info'>
                    <p class='movies-rate'>$row[rate]</p>
                    <strong class='movies-title'>
                        <span>$row[name]</span>
                        <a href='movies.php' name='more-details' class='more-details'>More details</a>
                    </strong>
                </div>
                
            </div>
            ";
            }?>
        </div>
    </section>
    <section class="series" id="series">
        <h2 class="title">series</h2>
        <div class="content">
            <?php
            while($row=mysqli_fetch_array ($result) )
             {
            echo "
            <div class='movies-card'>
                <div class='movies-image'>
                    <img src='$row[image]' />
                </div>
                <div class='movies-info'>
                    <p class='movies-rate'>$row[rate]</p>
                    <strong class='movies-title'>
                        <span>$row[name]</span>
                        <a href='series.php' name='more-details' class='more-details'>More details</a>
                    </strong>
                    <form method='post'>
                        <input type='submit' value='add to watch list' name='add' id='$row[id]'/>
                    </form>
                </div>
            </div>
            ";
            }
            ?>
           
        </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="title"> contact me </h2>
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-phone"></i>
                </div>
                <div class="info">
                    <h3>phone</h3>
                    <p>01222222222</p>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fa-solid fa-envelope"></i>
                </div>
                <div class="info">
                    <h3>email</h3>
                    <p>freecinema@gmail.com</p>
                </div>
            </div>
        </div>
        <form method="post" class="gg">
            <input type="text" placeholder="name" name="name" />
            <input type="text" placeholder="complaint" name="complaint" />
            <input type="submit" value="Send" name="su" />
        </form>
    </section>
    <footer class="footer">
        <p class="footer-title">copy rights @<span>FREE CINEMA</span></p>
        <div class="icons">
            <a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
            <a href="https://twitter.com/i/flow/login"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </footer>
</body>
</html>