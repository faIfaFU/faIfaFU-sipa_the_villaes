<?php
    include "../config/koneksi.php";


    $ed = $_GET['kode_villa'];
    $edit = $koneksi->query("SELECT * FROM villa WHERE kode_villa='$ed'");


    $a = $edit -> fetch_array();
   
?>

<form action="" method="post">
          <!-- <div class="mb-3 row">
           <label for="kode_villa" class="form-label"> Kode  Villa</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control" id="kode_villa" name="kode_villa" value="<?php echo $a [kode_villa ]?>">
              </div>
          </div> -->
          <div class="mb-3 row">
           <label for="nama_villa" class="form-label"> Nama Villa</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control" id="nama_villa" name="nama_villa" value="<?php echo $a['nama_villa']?>">
              </div>
          </div>
          <div class="mb-3">
           <label for="tipe_villa" class="form-label"> Tipe Villa</label>
           <input type="text" class="form-control" id="tipe_villa" name="tipe_villa" value="<?php echo $a['nama_villa']?>">
            
            <div class="col-sm-10">
         <select name="" id="tipe_villa" class="form-control">
                  <option value=""> Pilih Tipe Villa</option>
                  <option value="silver" <?php if($tipe_villa == "silver") echo "selected" ?>>Silver</option>
                  <option value="gold" <?php if($tipe_villa == "gold") echo "selected" ?>>gold</option>
                  <option value="platinum"<?php if($tipe_villa == "platinum") echo "selected" ?>>platinum</option>
                </select>
            </div>
          </div>
          <div class="input-group mb-3">
            <div class="custom-file">
              <input type="file" class="custom-file-input form-control" id="gambar" name="gambar" value="<?php echo $a['gambar']?>">
              <label class="custom-file-label" for="gambar" aria-describedby="inputGroupFileAddon02">Choose file</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="inputGroupFileAddon02">Upload</span>
            </div>
          </div>
          
          <div class="mb-3 row">
           <label for="lokasi" class="form-label">Lokasi</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control" id="lokasi"  name="lokasi" value="<?php echo $a['lokasi']?>">
              </div>
          </div>
          <div class="mb-3 row">
           <label for="fasilitas" class="form-label"> Fasilitas</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control" id="fasilitas" name="fasilitas" value="<?php echo $a['fasilitas']?>">
              </div>
          </div>
          <div class="mb-3 row">
           <label for="harga" class="form-label">harga</label>
            <div class="col-sm-10">
                 <input type="text" class="form-control" id="kode_villa" name="harga" value="<?php echo $a['harga']?>">
              </div>
          </div>
            <div class="col-12">
              <input type="submit" value="Simpan" class="btn btn-primary" name="edit">
            </div>
      </form>


      <?php

      if(isset($_post['edit']))
        $update= $koneksi -> query ("update villa set  nama_villa ='$_POST[nama_villa]',tipe_villa = '$_POST[tipe_villa]', gambar='$_POST [gambar]', lokasi ='$_POST [lokasi]',  fasilitas  ='$_POST [fasilitas]',harga ='$_POST [harga]' where kode_villa='$ed' ");
      header('location:admin.php')
 
      ?>