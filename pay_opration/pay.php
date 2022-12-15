<?php


$con = mysqli_connect('localhost','root','','desgin your home');

if(isset($_POST['pay'])){

    $NAME  = $_POST['fullname'];
    $PRODECT  = $_POST['prodect'];
    $LOCATION = $_POST['location'];
    $PHONNUMBER = $_POST['phone_number'];
  

echo"wlcom {$NAME }";
echo"wlcom {$USERNAME }";
$insert = "INSERT INTO  payprodects (full_name ,pdrodect_name, location ,phonenamber) VALUES ('$NAME','$PRODECT','$LOCATION','$PHONNUMBER')";
mysqli_query($con, $insert);

header('location:../project.html');

}




?>




