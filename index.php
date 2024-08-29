<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Log In | Pikachu-5</title>
      <?php include './styles/styles.php';?>
</head>
<body>
<?php include './components/navbar.php';?>
<h1 class='container text-center mt-5'>Log In</h1>
<div class="container d-flex justify-content-center align-items-center p-5 m-6">
<form action="./login.php" method="post">
            <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control" id="username" placeholder="username" required style="width: 150%;">
            <label for="username">Username</label>
            </div>
            <div class="form-floating">
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required style="width: 150%;">
            <label for="password">Password</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Log In</button>
            <a href="./createuser.php" class=""><button type="button" class="btn btn-primary mt-3">New Account</button></a>
</form>

</div>
<?php include './styles/script.php';?>
</body>

</html>