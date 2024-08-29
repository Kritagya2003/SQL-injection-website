<?php
// Path: dashbord.php
if (isset($_COOKIE['username']) AND $_COOKIE['role'] == 'admin' ) { ?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Admin-Pikachu</title>
      <?php include './styles/styles.php';?>
</head>

<body>
      <?php include './components/navbar.php';?>
      <!-- Content Start -->
      <div class="container">
            <div class="row">
                  <div class="col-md-12 mt-5">
                        <h3 class="text-center">Admin Dashboard</h3>
                  </div>
                  <div class="col-md-12">
                        <!-- show all users -->
                        <div class="card">
                              <div class="card-header">
                                    All Users
                              </div>
                              <div class="card-body">
                                    <table class="table table-bordered">
                                          <thead>
                                                <tr>
                                                      <th>Id</th>
                                                      <th>Username</th>
                                                      <th>First Name</th>
                                                      <th>Last Name</th>
                                                      <th>Role</th>
                                                      <th>Review</th>
                                                </tr>
                                          </thead>
                                          <tbody>
                                          <?php
                                          include './db/db.php';
                                          $sql = "SELECT * FROM users";
                                          $result = $conn->query($sql);
                                          if ($result->num_rows > 0) {
                                                while ($row = $result->fetch_assoc()) {?>
                                                      <tr>
                                                            <td><?php echo $row['id']; ?></td>
                                                            <td><?php echo $row['username']; ?></td>
                                                            <td><?php echo $row['fname']; ?></td>
                                                            <td><?php echo $row['lname']; ?></td>
                                                            <td><?php echo $row['role']; ?></td>
                                                            <td>
                                                            <a href="./deleteuser.php?user_id=<?php echo $row['id']; ?>"> <button type="button" class="btn btn-danger">Delete</button></a>
                                                            </td>
                                                      </tr>

                                          <?php }
                                          } else {
                                                echo "0 results";
                                          }
                                          $conn->close();
                                          ?>
                                          </tbody>
                                    </table>

                              </div>
                        </div>
                  </div>




                  <?php include './styles/script.php';?>
</body>

</html>
<?php } else {
      echo "You are not Admin";
} ?>