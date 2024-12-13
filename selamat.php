<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<section class="home">

   <div class="content">
      <h3>Selamat Datang Di Toko alat-alat futsal</h3>
      <p>Sumber terpercaya untuk peralatan berkualitas tinggi dan layanan pelanggan yang prima. Temukan sepatu, pakaian, dan perlengkapan futsal terbaik di sini!</p>
      <a href="login.php" class="white-btn">Login</a>
   </div>

</section>

<section class="products">
   <div class="box-container">
   </div>

</section>
</section>

</body>
</html>