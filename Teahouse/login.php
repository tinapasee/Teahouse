<?php
    include "connection.php";
    session_start();

    if(isset($_POST["login"]))
    {
        $username = $_POST["username"];   
        $password = $_POST["password"];
        if($username == "admin" && $password == "admin"){
            header("Location: ./AdminPanel/");
        }else{
            $sql = "SELECT * FROM `tea` WHERE `username` = '$username' AND `password` = '$password' ";
            $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0){
                    $_SESSION["username"] = $username;
                    header("Location: ./index.php");

                } else {
                    echo "<br>Login failed. Incorrect username or password.";
                }
            }
    }
?>