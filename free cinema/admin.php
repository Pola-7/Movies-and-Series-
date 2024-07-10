<?php
include './conn.php';
error_reporting(0);
if(isset($_POST['add'])){

    $ms=$_POST['ms'];
    $name=$_POST['name'];
    $image_location=mysqli_real_escape_string($conn, $_FILES['image']['tmp_name']);
    $image_name=mysqli_real_escape_string($conn, $_FILES['image']['name']);
    $image_up="images/".$image_name;
    $rate=$_POST['rate'];
    $info=$_POST['info'];
    move_uploaded_file($image_location,$image_up);
    if($ms=='movies'){
        $sql="INSERT INTO movies (name,image,rate,info) VALUES ('$name','$image_up','$rate','$info')";
        mysqli_query($conn,$sql);
    }
    if($ms=='series'){
        $sql="INSERT INTO series (name,image,rate,info) VALUES ('$name','$image_up','$rate','$info')";
        mysqli_query($conn,$sql);
    }
}

mysqli_close($conn);

?>


<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="adminc.css" />
</head>
<body>
    <div class="box">
        <img src="images\10.jpg" width="100%" height="100%" />
        <form method="post" enctype="multipart/form-data">
            <h2>welcome admin</h2>
            <div>
                <i class="fa-solid fa-video"></i>
                <input type="text" class="name" placeholder="Name" name="name" required />
            </div>

            <div>
                <i class="fa-sharp fa-solid fa-star"></i>
                <input type="text" class="rate" placeholder="Rate" name="rate" required />
            </div>
            <div>
                <i class="fa-sharp fa-solid fa-circle-info"></i>
                <input type="text" class="info" placeholder="Info" name="info" required  />
            </div>
            <div class="field-group">
                <i class="fa-solid fa-image"></i>
                <input type="file" class="file-field" id="file" name="image" required />
                <label for="file" class="file-label">
                    <i class="fa fa-upload"></i>
                    <span>choose image</span>
                </label>
            </div>
            <div class="radio_group">
                <label class="radio">
                    <input type="radio" value="movies" name="ms" required />
                    Movies
                    <span></span>
                </label>
                <label class="radio">
                    <input type="radio" value="series" name="ms" required />
                    Series
                    <span></span>
                </label>
            </div>
            <input type="submit" value="Add" name="add" />
        </form>
    </div>

</body>
</html>