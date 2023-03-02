<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary  fixed-top">
  <div class="container" >
    <a class="navbar-brand" href="#">TheVilla</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ">
      <li>
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
          <li>
          <a class="nav-link active" aria-current="page" href="">Cara Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Kontak Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Testimoni</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary" href="index.php?page=login">Log Out</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>


    
<div class="ayo">
  
</div>


<?php
if(isset($_GET['page'])){
  $page = $_GET['page'];

  switch ($page) {
    case 'login':
      include 'login.php';
      break;
    case 'register':
      include 'register.php';
      break;
    case 'home':
      include 'home.php';
      break;
      case 'booking':
        include 'booking.php';
        break;
  
    default:
      echo "halaman tidak tersedia";
      break;

  }
} else {
  include 'home.php';
}
?>










<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js">

</script>
</body>
</html>