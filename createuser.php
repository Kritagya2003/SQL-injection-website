<?php

if (!isset($_COOKIE['username'])) { ?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Create User-Pikachu</title>
      <?php include './styles/styles.php';?>
</head>

<body>
      <?php include './components/navbar.php';?>

      <div class="container">
            <h1 class='container text-center mt-5'>Create User</h1>
            <div class="container d-flex justify-content-center align-items-center p-2 m-6">
                  <form action="./createuser.php" method="post">
                        <div class="form-floating m-2">
                              <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name"
                                    required style="width: 150%;">
                              <label for="fname">First Name</label>
                        </div>
                        <div class="form-floating m-2">
                              <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name"
                                    required style="width: 150%;">
                              <label for="lname">Last Name</label>
                        </div>
                        <div class="form-floating m-2">
                              <input type="text" name="username" class="form-control" id="username"
                                    placeholder="username" required style="width: 150%;">
                              <label for="username">Username</label>
                        </div>
                        <div class="form-floating m-2">
                              <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password" required style="width: 150%;">
                              <label for="password">Password</label>
                        </div>
                        <div class="form-floating m-2">
                              <!-- select form for role -->
                              <select class="form-select" name="role" id="role" aria-label="Default select example"
                                    required style="width: 150%;">
                                    <option value="admin">admin</option>
                                    <option value="member">member</option>
                              </select>
                              <label for="role">Role</label>
                        </div>

                        <button type="submit" class="btn btn-primary m-2 mt-3">Create User</button>
                        <a href="./index.php" class=""><button type="button" class="btn btn-primary m-2 mt-3">Log
                                    In</button></a>
                  </form>

            </div>
            <!-- db connection -->
            <?php
                  include './db/db.php';

                  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $username = $_POST['username'];
                        $password = $_POST['password'];
                        $role = $_POST['role'];

                        $sql = "INSERT INTO `users` (`fname`, `lname`, `username`, `password`, `role`) VALUES ('$fname', '$lname', '$username', '$password', '$role')";
                        $result = mysqli_query($conn, $sql);
                        if ($result) {
                              echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                              <strong>Success!</strong> User Created Successfully.
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                        } else {
                              echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                              <strong>Error!</strong> User Not Created.
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                        }
                  }
                  ?>


            <?php include './styles/script.php';?>
</body>

</html>

<?php } else {
      header('Location: ./dashbord.php');
} ?>