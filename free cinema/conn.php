<?php
session_start();
$conn=mysqli_connect('localhost:3307','root','','user');
if(!$conn){echo'eror';}
?>