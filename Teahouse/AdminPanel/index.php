<?php
    session_start();
    include '../connection.php';
    $num_of_users;
    $query = "SELECT COUNT(*) AS user_count FROM tea";
    $user_count = mysqli_query($conn, $query); 
    foreach($user_count as $count){
        $num_of_users = $count['user_count'];
    }         
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .row.content {height: 800px;}
    
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
      width: 200px;
    }
    .well{
        margin-left: 20px;
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse visible-xs">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">TeaHouse.</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Dashboard</a></li>
        <li><a href="#">User Information</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav hidden-xs">
      <h2>TeaHouse.</h2>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="#section1">Dashboard</a></li>
        <li><a href="./adminpanel.php">User Information</a></li>
      </ul><br>
    </div>
    <br>
    
    <div class="col-sm-9">
      <div class="well">
        <h1>Dashboard</h1>
      </div>
      <div class="row">
        <div class="col-sm-3">
          <div class="well">
            <h4>Users</h4>
            <p><?=$num_of_users?></p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Pages</h4>
            <p>100 Million</p> 
          </div>
        </div>
        <div class="col-sm-3">
          <div class="well">
            <h4>Sessions</h4>
            <p>10 Million</p> 
          </div>
        </div>
  </div>
</div>

</body>
</html>
