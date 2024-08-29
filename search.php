<?php
                  if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        include './db/db.php';
                        $query = "SELECT * FROM pikachu.products WHERE name LIKE '%$_POST[product]%' AND status='visible'";

                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_assoc($result);
                  // insert inner html in dashbord page in product id
                        if ($row) {
                              echo "<div class='container'>";
                              echo "<h1>Product Details</h1>";
                              echo "<p>Product Name: ".$row['name']."</p>";
                              echo "<p>Product Price: ".$row['price']."</p>";
                              echo "</div>";
                        } else {
                              echo "Product Not Found";
                        }

                  }

                  ?>