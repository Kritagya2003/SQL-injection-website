<nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./dashbord.php"><b>Pikachu-5</b></a>
   
    <!-- log out  -->
  
  <?php if(isset($_COOKIE['username'])){ ?>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" href="./dashbord.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="./products.php">Products</a>
        </li>
        <?php if($_COOKIE['role'] == 'admin'){ ?>
          <li class="nav-item">
          <a class="nav-link" href="./admin.php">Admin Control</a>
           </li>
        <?php } ?>
      </ul> 
    </div>
    <div class="d-flex">
    <form action="./logout.php" method="post">
      <button type="submit" class="btn btn-primary">Log Out</button>
    </form>
    <?php }?>  
    </div>   
  </div>
</nav>