<?php
$connection = mysqli_connect('localhost','root');
if($connection){
    echo "connection is done";
} else {
echo " not connected";
}

mysqli_select_db($connection, 'SUJEET');
$id=$_post['name'];
$password=$_post['password'];
$data = "INSERT INTO idpass  (id,pass) VALUES ('$id','$password')";
mysqli_query($connection,$data);
header('location:ss.php');


?>