<?php require_once "config.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Website Latihan</title>
  </head>
  <body>
    <h1>Selamat Datang</h1>
    
    <a href="index.php">Halaman Utama</a> |
    <a href="index.php?page=page1.php">Bagian 1</a> |
    <a href="index.php?page=page2.php">Bagian 2</a> |
    <a href="index.php?page=page3.php">Bagian 3</a>
    
    <hr/>
    
    <?php 
    
    if (isset($_GET['page'])) 
    {   
        include $_GET['page']; 
    } 
    else 
    {
        echo "<p>Halaman Utama dari Website.</p>";
    }
    
    ?>
    
  </body>
</html>


