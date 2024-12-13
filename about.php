<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>tentang kami</h3>
   <p> <a href="home.php">Rumah</a> / Tentang </p>
</div>

<section class="about">

   <div class="flex">

     

      <div class="content">
         <h3>Tentang kami</h3>
         <p>Selamat datang di Toko Alat-Alat Futsal! Kami adalah destinasi utama bagi para penggemar futsal yang mencari peralatan berkualitas tinggi dan pelayanan yang unggul. Dengan koleksi produk terbaik dari merek-merek terkemuka, kami berkomitmen untuk membantu Anda mencapai potensi terbaik Anda di lapangan futsal. Tim kami yang berpengalaman siap memberikan saran ahli dan bantuan yang Anda butuhkan. Mari bergabung dengan komunitas futsal kami dan tingkatkan permainan Anda bersama Toko Alat-Alat Futsal!</p>
         <a href="contact.php" class="btn">hubungi kami</a>
      </div>

   </div>

</section>



<section class="authors">

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>