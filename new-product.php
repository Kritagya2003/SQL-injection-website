<?php if (isset($_COOKIE['username'])) { ?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Add Product</title>
      <?php include './styles/styles.php';?>
</head>

<body>
      <?php include './components/navbar.php';?>
      <div class="container d-flex-col justify-content-center text-center align-items-center p-5 m-6">
            <div class="container">
                  <h1 class="text-center">Add Product</h1>
                  <form action="new-product.php" method="post">
                        <div class="form-group m-2">
                              <label for="name">Product Name</label>
                              <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group m-2">
                              <label for="price">Product Price</label>
                              <input type="number" class="form-control" id="price" name="price" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                  </form>
            </div>
      </div>

      <?php
      if (isset($_POST['name']) && isset($_POST['price'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
      //db
         include './db/db.php';
        $query = "INSERT INTO pikachu.products (name, price) VALUES ('$name', '$price')";
        $result = mysqli_query($conn, $query);
        if ($result) {
          echo "<div class=' container alert alert-primary' role='alert'>Product Added!</div>";
        } else {
          echo "<div class='container alert alert-danger' role='alert'>Product Not Added!</div>";
        }
      }
      ?>



      <?php include './styles/script.php';?>
</body>

</html>


<?php } else {
  header('Location: login.php');
} ?>