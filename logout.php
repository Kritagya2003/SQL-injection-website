
<?php

    if(isset($_COOKIE['username']) || isset($_COOKIE['password'])){
      setcookie('username', '', time() - 3600, "/");
      setcookie('password', '', time() - 3600, "/");
      setcookie('id', '', time() - 3600, "/");
      setcookie('role', '', time() - 3600, "/");
      header('Location: index.php');
      exit;
    }else{
      header('Location: index.php');
    }
?>