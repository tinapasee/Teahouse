<?php
session_start();
require '../connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>User Edit</title>
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>User Edit 
                            <a href="adminpanel.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['id']))
                        {
                            $user_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM tea WHERE id='$user_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $user = mysqli_fetch_assoc($query_run);
                                ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="student_id" value="<?= $user['id']; ?>">

                                    <div class="mb-3">
                                        <label>User Name</label>
                                        <input type="text" name="name" value="<?=$user['username'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>email</label>
                                        <input type="email" name="email" value="<?=$user['email'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>phone</label>
                                        <input type="phone" name="phone" value="<?=$user['phone'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>address</label>
                                        <input type="text" name="address" value="<?=$user['address'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update User
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>