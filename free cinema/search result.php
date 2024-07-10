<?php

include './conn.php';

if(isset($_POST['submit'])){

    $search=($_POST['search']);

    $query = "SELECT * FROM movies WHERE name LIKE '%$search%'";
    $res = mysqli_query($conn,$query);
    $quer = "SELECT * FROM series WHERE name LIKE '%$search%'";
    $re = mysqli_query($conn,$quer);
    while($row=mysqli_fetch_assoc($res)){


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
    }while($row=mysqli_fetch_assoc($re)){


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
    }
}
?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" /><!--for arabic-->
    <title>free cinema</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/main1.css" /><!--to link css-->
</head>

<body></body>
</html>