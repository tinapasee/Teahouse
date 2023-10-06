<?php
$host="localhost";
$user="root";
$pass="";
$db="teahouse";
$conn=mysqli_connect($host,$user,$pass,$db);
    if($conn)
        {
            echo" ";
        }
    else
        {
            echo"not connect";}


?>