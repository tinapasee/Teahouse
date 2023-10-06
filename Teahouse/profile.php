x<?php
    include"connection.php";
    session_start();
    if(isset($_SESSION['username'])) {
        $username = $_SESSION['username'];

        $sql = "SELECT * FROM registration WHERE username = '$username'";
        $user = mysqli_query($conn,$sql);
        $result = mysqli_fetch_assoc($user);
        $password = $result['password'];
        $email = $result['email'];
      
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="./style.css/profilestyle.css">
    <link rel="stylesheet" href="style.css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>
<body>
<div class="bg"></div>
            
    <div class="sidenav">
        <div class="profile">
            <img src="https://static.vecteezy.com/system/resources/previews/005/544/718/original/profile-icon-design-free-vector.jpg" alt="" width="100" height="100">

            <div class="name">
                <?= $username ?>
            </div>
            <div class="job">
                <?= $email ?>
            </div>
        </div>

        <div class="sidenav-url">
            <div class="url">
                <a href="#profile" class="active">Profile</a>
                <hr align="center">
            </div>
            <div class="url">
                <a href="logout.php" class="logout">Log Out</a>
                <hr align="center">
            </div>
        </div>
    </div>
    <!-- End -->

    <!-- Main -->
    <div class="main">
        <h2>idENTITY</h2>
        <div class="card">
            <div class="card-body">
                <table>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>:</td>
                            <td><?= $username ?></td>
                        </tr>
                        <tr>
                            <td>email</td>
                            <td>:</td>
                            <td><?= $email ?></td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>:</td>
                            <td><?= $phone ?></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td><?= $address ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>