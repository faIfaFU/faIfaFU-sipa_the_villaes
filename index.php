


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <!-- css -->
  
  <style>

  @import url('https://fonts.googleapis.com/css2?family=Overpass:wght@400;500;700&display=swap');
   

 

  /* awal */
  *{
    margin:0;
    padding:0 ;
    box-sizing: border-box;
    font-family: 'Overpass', sans-serif;
}

 .navbar {
  backgroung-color: #FFD06F;
 }
  .navbar-brand {
    font-size: 30px;
    color: ;
    height: 25PX;
    text-align: center;
    font-weight:600px;
}
.sidebar .logo-details .logo-name {
    font-size: 25px;
    color: rgb(255, 255, 255);
   
    font-weight: 600;
    margin-left:0px;
}
    .bgjb{
    background-color: #FFD06F;
    height: 65vh;
}



    .background{
        padding-left: 20%;
        width: 50%;
    }


    /* card */
    .card{
        margin-top: 20px;
        background-color: #FA9916;
    }

    .oren{
      background-color: ;
    }

   /* cara beli */

   .booking{
    margin-top: 20px;
    background-color: #FFA600;
    
   }

   .ass{
    margin-left: 50px;
    margin-top: 12px;
    border-radius: 50em;
   }

   .subha{
    margin-right: 40%;
    margin-top: 12px;
   }

   


   /* kontak  komen */

   .about {
    line-height: 60px;
    color: white ;
   }
   #contact{
     margin-top: 30px;
     padding: 40px 0 40px 0;
   }

   #contact .overlay {
     background: rgba(0,0,0,0.5);
   }
 #contact .container {
  padding: 40px 0 40px 0;
 }

 #contact h3{
    font-family:;
    font-style:;
    font-weight: 600;
    font-size:40px;
    line-height: 60px;
    color: white ;

 }

 .kontak h6{
  font-weight: 600px;
    font-size:18px;
    line-height: 27px;
     color: white ;
     text-decoration:none;
     margin: 19px 0 14px 0;

 }

 .kontak a {
  font-size: 16px;
  color:white;
  line-height: 18px;
  margin-left: 18px;
  width: 332px;
  text-decoration:none;
  pointer-events: none;
 }
 </style> 
<!-- akhir css -->
</head>

  <body>
   
  <nav class="navbar navbar-expand-lg  fixed-top">
  <div class="container" >
 
  

     <a class="navbar-brand" href="#">  <!-- <img src="img/" alt="Bootstrap" width="30" height="24"> -->
TheVilla</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav ">
       
          <a class="nav-link active" aria-current="page" href="#booking">Cara Memesan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#contact">Kontak Kami</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Testimoni</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link btn btn-primary" href="login.php?page=login" name="login" type="submit">Login</a>
        </li>
    
      </ul>
    </div>
  </div>
</nav>


    <!-- bagian jumbotron -->
   <section class="section p-5 p-lg-0 pt-lg-5 text-center text-sm-start bgjb">
        <div class="container " >
            <div class="d-sm-flex align-items-center justify-content-beetwen ">
          <div class="jumbotron mt-5">
            <h1 class="display-4">Selamat Datang di TheVilla</h1>
            <p class="lead my-4">Rekomendasi Villa Jagung dan Segitga Untuk Menghabiskan Waktu Bersama Keluarga </p>
            <hr class="my-4">
           
            <a class="btn btn-primary " href="login.php?page=login"  role="button">Log In</a>
          </div>
          <div class="background ">
          <img src="img/bgfiks.png" alt="" class="img-fluid  d-none d-sm-block mt-2">
          </div>
          </div>
        </div>
</section>

<!-- card -->
        <section class="p-5 oren">
            <div class="container">
             <div class="row text-center g-4">
              <div class="col-md">
                <div class="card text-light">
                    <div class="card-body text-center">
                        <img src="img/hand.png" alt="" width="100px">
                  
                        <h3 class="card-title mb-3">AAA</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
            
                    </div>
                </div>
              </div>
              <div class="col-md">
                <div class="card text-light">
                    <div class="card-body text-center">
                        <img src="img/hand.png" alt="" width="100px">
                        <h3 class="card-title mb-3">AAA</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
              </div>
              <div class="col-md">
                <div class="card text-light">
                    <div class="card-body text-center">
                        <img src="img/hand.png" alt="" width="100px">
                        <h3 class="card-title mb-3">AAA</h3>
                        <p class="card-text">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
              </div>
             
             
              </div>
             </div>     
         </div>
     </section>



   <!-- cara boooking -->
     <section id="booking">
        <div class="row booking ">
            <div class="col ass">
                <img src="img/questlagioren.jpg" alt="" class="img-fluid">
            </div>
            <div class="col subha">
                <h3><span>Bagaimana Cara Memesan? </span></h3>
                <div class="col md-6">
                    <ol>
                      <li>Buka situs resmi TheVilla</li>
                      <li>Klik tombol Login apabila sudah mempunyai akun, jika belum maka melakukan register terlebih dahulu</li>
                      <li>Setelah memasuki halaman Home kalian akan disuguhkan dengan berbagai jenis villa</li>
                      <li></li>
                      <li></li>
                    </ol>
                </div>
                
                <a href="" class=" btn btn-primary"  href="login.php?page=login" name="login">Pesan Sekarang</a>
            </div>
        </div>
     </section>

     <!-- komen -->
     <section id="contact" >
     <div class="container-fluid overlay h-100">
       <div class="container">
          <div class="row">
            <div class="col md-6">
               <h3>Tentang Kami</h3>
                <div class="about">
                  <a>Web untuk menyewa villa</a>
                </div>
               <div class="kontak">
                <h6>Kontak</h6>
                 <div class="mb-3">
                  <img src="" alt="">
                  <a href="">11111</a>
                 </div>
                 <div class="mb-3">
                  <img src="" alt="">
                  <a href="">11111</a>
                 </div>
                 <div class="mb-3">
                  <img src="" alt="">
                  <a href="">11111</a>
                 </div>
              
               </div>
            </div>
            <div class="col md-6">
              <div class="card-contack w-100">
                <form action="">
                  <h2>Ulasan</h2>
                  <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Email address</label>
                  </div>
                 <div class="form-floating">
                      <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                      <label for="floatingTextarea">Comments</label>
                  </div>
                </form>
                <button type="button" class="btn btn-primary mt-5">kirim</button>
              </div>
            </div>
          </div>
           
       </div>   
       </div>
     </section>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>

<!-- script -->

