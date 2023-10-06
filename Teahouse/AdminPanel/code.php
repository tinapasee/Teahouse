<?php
session_start();
require '../connection.php';

if(isset($_POST['delete_student']))
{
    $user_id = mysqli_real_escape_string($conn, $_POST['delete_student']);

    $query = "DELETE FROM `tea` WHERE `id` = '$user_id';";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: ./adminpanel.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: ./adminpanel.php");
        exit(0);
    }

}

if(isset($_POST['update_student']))
{
    $user_id = mysqli_real_escape_string($conn, $_POST['student_id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    $query = "UPDATE tea SET `username`='$name', `email`='$email', `phone`='$phone', `address`='$address' WHERE `id`='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Updated Successfully";
        header("Location: index.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save_student']))
{
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $c_password = mysqli_real_escape_string($conn, $_POST['c_password']);

    if($password == $c_password){
        $query = "INSERT INTO tea (`username`,`email`,`phone`,`address`,`password`) VALUES ('$name','$email','$phone','$address','$password')";
        $query_run = mysqli_query($conn, $query);
        if($query_run)
        {
            $_SESSION['message'] = "Student Created Successfully";
            header("Location: user-create.php");
            exit(0);
        }
        else
        {
            $_SESSION['message'] = "Student Not Created";
            header("Location: user-create.php");
            exit(0);
        }
    }else{
        $_SESSION['message'] = "Passwords doesn't match";
        header("Location: user-create.php");
    }
}

?>