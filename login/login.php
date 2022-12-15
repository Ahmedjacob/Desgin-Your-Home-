<?php

$con = mysqli_connect('localhost','root','','desgin your home');

if(isset($_POST['login'])){

    $NAME  = $_POST['fullname'];
    $USERNAME = $_POST['username'];
    $PASSWORD = $_POST['password'];
  

echo"wlcom {$NAME }";
echo"wlcom {$USERNAME }";
$insert = "INSERT INTO  subscripers (full_name, username ,password) VALUES ('$NAME','$USERNAME','$PASSWORD')";
mysqli_query($con, $insert);
header('location:../index.html');

}




?>