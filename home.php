<?php
include "layout/navbar.php";
if(isset($_POST["add"])){
  $id = $_POST['id'];
  $check_in = $_POST['check_in'];
  $check_out     = $_POST['check_out'];
  $status_bayar  = $_POST['status_bayar'];
  $kode_villa      = $_POST['kode_villa'];
  $tanggal_pemesanan     = $_POST['tanggal_pemesanan'];
  $total     = $_POST['total'];
 
 

  $simpan = $koneksi->query("INSERT into booking (id,check_in,check_out,status_bayar,kode_villa,tanggal_pemesanan,total) values
   ('$id', '$check_in', '$check_out', '$status_bayar', '$kode_villa', '$tanggal_pemesanan', 'total')");
  if($simpan){
     
  }
}
?>



<link rel="stylesheet" href="home.css">



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
  <div class="row clasik">
    <div class="col-6">

      <div class="card mb-3 " style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <img src="" class="img-fluid rounded-start" alt="..." style="height:100%;">
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
          
            <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel"> Pesan Villamu di Sini</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
            
                                  <form action="" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                    <div class="mb-3">
                                          <label for="nama_villa" class="form-label" > Jenis Villa</label>
                                          <input type="text" class="form-control" id="nama_villa" placeholder="<?php echo $result['nama_villa']?>" name="nama_villa" >
                                        
                                      </div>
                                      <div class="mb-3 col-6">
                                              <label for="checkout" class="form-label">check out</label>
                                              <input type="date" class="form-control" id="check_out" name="check_out">
                                          </div>
                                          <div class="mb-3 col-6">
                                              <label for="checkin" class="form-label">checkin</label>
                                              <input type="date" class="form-control" id="check_in" name="check_in">
                                          </div>
                                      </div>
                                    

                                      <div class="mb-3">
                                          <label for="total" class="form-label">Total:</label>
                                        <border>
                                        <?php echo $result['harga']?>
                                        </border>
                                      </div>
                                      <div class="col-12">
                                          <input type="submit" value="simpan" name="villa-add" class="btn btn-primary">
                                      </div>
                          </div>
                            </div>  
                        
                      </div>
                    </div>
                  </div>
                   <!-- akhir modal -->
            </div>
          </div>
       </div>  
       

      
      <?php 
        }
      ?>
     <div class="col-6">
        <?php
            if(isset($_GET['kode_villa'])){
                $kode_villa=$_GET['kode_villa'];
            }
       
        $konek=mysqli_connect("localhost", "root", "", "thevillaes");
        $query    =mysqli_query($koneksi, "SELECT * FROM villa WHERE kode_villa='$kode_villa'");
            $result    =mysqli_fetch_array($query);
        ?>
        <h2>Mengenai Villa</h2>

          <table>
                <tr>
                    <td size="90">Nama Villa</td>
                    <td>: <?php echo $result['nama_villa']?></td>
                </tr>
                <tr>
                    <td>Fasilitas</td>
                    <td>: <?php echo $result['fasilitas']?></td>
                </tr>
                <tr>
                <td>Harga</td>
                <td>: <?php echo $result['harga']?></td>
            </tr>
            <tr>
                <td>Lokasi</td>
                <td>: <?php echo $result['lokasi']?></td>
            </tr>
            <tr>
                <td>Tipe Villa</td>
                <td>: <?php echo $result['tipe_villa']?></td>
          </tr>
          </table>
        </div>
      </div>
    </div>    
   </div>
</div>

<html>
 
 
 <?php
  include 'config/koneksi.php';
  if (isset($_POST[''])) {
    
    $check_out = $_POST['check_out'];
   
    $check_in = $_POST ['check_in'];
    $tipe_villa = $_POST['tipe_villa'];
    $query = $koneksi->query("INSERT INTO booking VALUES ('', '$check_out', '$check_in',
    '$tipe_villa', '$level')");
    if ($query) {
      header('location:login.php?page=login');
    }
  }elseif(isset($_POST[''])) {
    
 
   
    $check_in = $_POST ['check_in'];
    $tipe_villa = md5($_POST['tipe_villa']);
    $query = $koneksi->query("INSERT INTO booking VALUES ('','$check_in',
    '$tipe_villa', '$level')");
    if ($query) {
      header('location:home.php?page=login');
    }
  }
?>


</html>

                
      
      