<?php
// Path: dashbord.php
if (isset($_COOKIE['username'])) { ?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Dashbord</title>
      <?php include './styles/styles.php';?>
</head>
<body>
<?php include './components/navbar.php';?>

<div class="container d-flex-col justify-content-center text-center align-items-center p-5 m-6">
      <div class="container">
            <h1 class="text-center">Welcome <?php echo $_COOKIE['fname']; ?>! </h1>
           
      </div>
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis voluptates eveniet corporis at itaque molestiae cumque eius modi incidunt! Repudiandae sed voluptatum dolorum tempore. Non illo mollitia sint eligendi harum!
<br>
<br>
<!-- <div class="container">
      <form  class="form-group d-flex m-5 gap-2" method="post">
                  <input type="text" class="form-control" id="test" name="test" placeholder="Find User">
                  <button type="submit" class="btn btn-primary">Find Now</button>
      </form>
   <div class="container"> -->
<!-- <?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//       include './db/db.php';
//       $query = "SELECT * FROM pikachu.users WHERE username='$_POST[test]'";
//       $result = mysqli_query($conn, $query);
//       $row = mysqli_fetch_assoc($result);
//       if ($row) {
//       //   show all data of user
//             echo "<div class='container'>";
//             echo "<h1>User Details</h1>";
//             echo "<p>Username: ".$row['username']."</p>";
//             echo "</div>";
//       } else {
//             echo "User Not Found";
//       }
// }
?>  -->
 <!-- </div>
</div> -->
<div class="container">
                  <!-- search product by name -->
                  <form class="form-group d-flex m-5 gap-2" action="search.php" method="post">
                        <input type="text" class="form-control" id="product" name="product" placeholder="Find Product">
                        <button type="submit" class="btn btn-primary">Find Now</button>
                  </form>
</div>
</div>
<?php include './styles/script.php';?>
</body>
</html>
<?php } else {
      header('Location: ./index.php');
} ?>