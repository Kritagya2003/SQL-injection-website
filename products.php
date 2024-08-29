
<?php
// Path: dashbord.php
if (isset($_COOKIE['username'])) { ?>
<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>All Products</title>
      <?php include './styles/styles.php';?>
</head>

<body>
      <?php include './components/navbar.php';?>
      <div class="container d-flex-col justify-content-center text-center align-items-center p-5 m-6">
            <div class="container">
                  <h1 class="text-center">Welcome to Products</h1>
                  <a href='new-product.php' class="btn btn-primary">Add Product</a>
            </div>
            <div class="container">
                  <?php

                  // take dynamic url from user and show the product details
                  // if user enter the url like this: http://localhost:8080/pikachu/products.php?product=1 
                  // then show the product details of product id 1
                  // if user enter the url like this: http://localhost:8080/pikachu/products.php?product=2
                  // then show the product details of product id 2

                   // connect to database
                   include './db/db.php';

                  
                  // getting the product id from url

                  if (!$_GET) {
                        // query to get the all product details
                        $query = "SELECT * FROM pikachu.products WHERE status='visible'";
                        $result = mysqli_query($conn, $query);
                              echo "<div class='container d-flex-row '>";
                              echo " <div class='row row-cols-3'>";
                              while ($row = mysqli_fetch_assoc($result)) {
                              echo "<div class='col'>";
                              echo "<div class='card m-3 p-3'>";
                              echo "<p>Product Name: ".$row['name']."</p>";
                              echo "<p>Product Price: ".$row['price']."</p>";
                              echo "<a href='products.php?product=".$row['id']."'>View Product</a>";
                              echo "</div>";
                             echo "</div>";
                              }
                              echo "</div>";
                              echo "</div>";

                  }else{
                             $product_id = $_GET['product'];
                              // query to get the product details
                              $query = "SELECT * FROM pikachu.products WHERE id='$product_id' AND status='visible'";
                              $result = mysqli_query($conn, $query);
                              $row = mysqli_fetch_assoc($result);

                              // show the product details
                              if ($row) {
                                    echo "<div class='container'>";
                                    echo "<h1>Product Details</h1>";
                                    echo "<p>Product ID: ".$row['id']."</p>";
                                    echo "<p>Product Name: ".$row['name']."</p>";
                                    echo "<p>Product Price: ".$row['price']."</p>";
                                    echo "</div>";
                              } else {
                                    echo "Product Not Found";
                              }
                  }
                  ?>
            </div>
      </div>
      <?php include './styles/script.php';?>
</body>

</html>

<?php } else {
      header('Location: ./index.php');
} ?>