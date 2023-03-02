<?php 
include "bot.php";
include "config/koneksi.php";

    $nama_villa =$_POST['nama_villa'];
    $tipe_villa = $_POST['tipe_villa'];
    $gambar      =$_POST ['gambar'];
    $lokasi     =$_POST ['lokasi'];
    $fasilitas  =$_POST ['fasilitas'];
    $harga      =$_POST ['harga'];
   
    
    
  
   

   $simpan= $koneksi -> query("insert into villa (nama_villa,tipe_villa,gambar
   lokasi,fasilitas,harga) values ('$nama_villa', '$tipe_villa',
   '$gambar', '$lokasi', '$fasilitas', '$harga')");

   
  

   if($simpan){
       header('location:admin.php');
   }
  
 ?>
 <!-- ==================== cards ==================== -->
 <div class="mx-auto" style="width:800px">
    <div class="card mt-5">
      <div class="card-header">
       Buat atau Edit Data
      </div>
      <div class="card-body">
        
      <form action="input.php" method="post">
          <!-- <div class="mb-3 row">
           <label for="kode_villa" class="form-label"> Kode  Villa</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control" id="kode_villa" name="kode_villa" value="<?php echo $kode_villa ?>">
              </div>
          </div> -->
          <div class="mb-3 row">
           <label for="nama_villa" class="form-label"> Nama Villa</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control" id="nama_villa" name="nama_villa"  value="<?php echo $nama_villa ?>">
              </div>
          </div>
          <div class="mb-3">
           <label for="tipe_villa" class="form-label"> Tipe Villa</label>
            
          
         <select name="" id="tipe_villa" class="form-control">
                  <option value=""> Pilih Tipe Villa</option>
                  <option value="silver" <?php if($tipe_villa == "silver") echo "selected" ?>>Silver</option>
                  <option value="gold" <?php if($tipe_villa == "gold") echo "selected" ?>>gold</option>
                  <option value="platinum"<?php if($tipe_villa == "platinum") echo "selected" ?>>platinum</option>
                </select>
       
          </div>
          <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input form-control" id="gambar" name="gambar"  value="<?php echo $gambar ?>">
              <label class="custom-file-label" for="gambar" aria-describedby="inputGroupFileAddon02">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
            </div>
          </div>
          
          <div class="mb-3 row">
           <label for="lokasi" class="form-label">Lokasi</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control" id="lokasi"  name="lokasi" value="<?php echo $lokasi ?>">
              </div>
          </div>
          <div class="mb-3 row">
           <label for="fasilitas" class="form-label"> Fasilitas</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control" id="fasilitas" name="fasilitas"  value="<?php echo $fasilitas ?>">
              </div>
          </div>
          <div class="mb-3 row">
           <label for="harga" class="form-label">harga</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control" id="kode_villa" name="harga"  value="<?php echo $harga ?>">
              </div>
          </div>
            <div class="col-12">
              <input type="submit" value="Simpan" name="simpan" class="btn btn-primary">
            </div>
      </form>
      </div>
    </div>
    
     
          
          <!-- ===================== Order Details List ==================== -->

          <!-- <div class="details">
            <div class="recentorders">
            
            
            </div> -->
      
            <!-- ===================== Order Details List ==================== -->
            
                       