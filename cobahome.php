<?php 
include 'bot.php';
include 'layout/navbar.php';


?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<div class="container">
   
   <?php
          include "config/koneksi.php";
          include "bot.php";
          $query =mysqli_query($koneksi, "SELECT * FROM villa ORDER BY kode_villa DESC");
        while($result=mysqli_fetch_array($query)){
     ?>
  <div class="row">
    <div class="col-6">
        <div class="card mb-3 " style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="img/villa1.jpg" class="img-fluid rounded-start" alt="..." style="height:100%;">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title"><?php echo $result['nama_villa']?></h5>
                <p class="card-text"><td><?php echo $result['harga']?></td> <br></p>
                <p>    <td> <?php echo $result['fasilitas']?></td></p>
                <a class="btn btn-primary" href="home.php?kode_villa=<?=$result['kode_villa']?>">Detail</a>
                
                <!-- awal modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
         Pesan 
              </button>  
           </div>
          </div>
          
        </div>
        
       
     </div> <!--akhir row-->
     
</div> <!-- akhir kontainer -->
<?php 
        }
      ?>
