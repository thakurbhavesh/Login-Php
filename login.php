<?php
include('dbcon.php');

$email=$_POST['email'];
$pass=$_POST['password'];


$query="SELECT * FROM `bhavesh` WHERE email='{$email}' && password='{$pass}'";

// $query="select * from 'bhavesh' where email='{$email}' AND password='{$password}'";
$run=mysqli_query($conn,$query);

if ($run) {
    echo "Login ";
    header('location:dash.html');
} else {
    echo "Not Login";
}



?>