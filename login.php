<?php
$servername = "localhost";
$username ="root";
$password = "";
$dbname = "pikachu";
$port = 3306;  //change your port number here, deault is 3306


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} else {
// login with post
// if (isset($_POST['username']) && isset($_POST['password'])) {
//   // **Input Validation**
//   $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
//   $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

//   // **Build secure query using prepared statements**
//   $sql = "SELECT * FROM pikachu.users WHERE username = ? AND password = ? LIMIT 1";
//   $stmt = $conn->prepare($sql);
//   $stmt->bind_param("ss", $username, $password); // Bind parameters securely

//   // Execute the prepared statement
//   $stmt->execute();

//   $result = $stmt->get_result(); // Retrieve results if successful
//   $stmt->close(); // Close the prepared statement
// }
if(isset($_POST['username']) && isset($_POST['password'])){
  $username =$_POST['username'];
  $password =$_POST['password'];
  $sql = "SELECT * FROM pikachu.users WHERE username='$username' AND password='$password' LIMIT 1";
  $result = $conn->query($sql);

   // Bind the parameters
   //$stmt->bind_param("#" "'", $username, $password);
  // if ($result->num_rows > 0) {
  //   while($row = $result->fetch_assoc()) {
  //   setcookie('username', $username, time() + (86400 * 30), "/");
  //   setcookie('password', $password, time() + (86400 * 30), "/");
  //   setcookie('id', $row['id'], time() + (86400 * 30), "/");
  //   setcookie('role', $row['role'], time() + (86400 * 30), "/");
  //   setcookie('fname', $row['fname'], time() + (86400 * 30), "/");
  //   setcookie('lname', $row['lname'], time() + (86400 * 30), "/");
  //   }
  //   header('Location: dashbord.php');
  // } else {
  //   echo "Login failed!";
  // }
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $username = htmlspecialchars($row['username']); // Escape username for output
      $fname = htmlspecialchars($row['fname']);    // Escape first name for output
      $lname = htmlspecialchars($row['lname']);    // Escape last name for output
      setcookie('username', $username, time() + (86400 * 30), "/");
      setcookie('password', $password, time() + (86400 * 30), "/"); // Consider not storing password in cookies
      setcookie('id', $row['id'], time() + (86400 * 30), "/");
      setcookie('role', $row['role'], time() + (86400 * 30), "/");
      setcookie('fname', $fname, time() + (86400 * 30), "/");
      setcookie('lname', $lname, time() + (86400 * 30), "/");
    }
    header('Location: dashbord.php');
  } else {
    echo "Login failed!";
  }
  
}

// find user with cookie if exists with id
if(isset($_COOKIE['id'])){
  $id = $_COOKIE['id'];
  $sql = "SELECT * FROM pikachu.users WHERE id='$id'";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    echo "user Found!";
    exit;
  } else {
    echo "User Not found!";
  }
}


$conn->close();
}
?>