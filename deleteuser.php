<?php
// db
include './db/db.php';
// check if user is admin
if ($_COOKIE['role'] == 'admin') {
      // get user id
      $user_id = $_GET['user_id'];
      // delete user
      $sql = "DELETE FROM users WHERE id='$user_id'";
      if ($conn->query($sql) === TRUE) {
            header('Location: admin.php');
      } else {
            echo "Error deleting record: " . $conn->error;
      }
      $conn->close();
} else {
      echo "You are not Admin";
}
?>