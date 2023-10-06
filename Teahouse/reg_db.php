<?php
    include"connection.php";
    session_start();

if(isset($_POST["submit"]))
{

    $username=$_POST["username"];   
    $email=$_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"]; 
    $password=$_POST["Password"];
    $C_password=$_POST["Confirm_Password"];

    if ($password == $C_password){
        $sql1 = "SELECT * FROM tea WHERE username = '$username'";
        $result1 = mysqli_query($conn,$sql1);
        if(mysqli_num_rows($result1) > 0){
            echo "<h1> User already exists</h1>";
        }else{
            $sql="INSERT INTO `tea`(`username`, `email`, `phone`, `address` ,`password`) VALUES('$username', '$email', '$phone', '$address', '$password')";
            $result=mysqli_query($conn,$sql);  
            if($result)
            {
                echo"<br>insert succesfully";
                $_SESSION["username"] = $username;
                    header("Location: ./index.php");
            }
            else{
                echo"insert unsuccesfully";
            }
        }
    }else{
        echo "password is incorrect";
    }
}


    
?>