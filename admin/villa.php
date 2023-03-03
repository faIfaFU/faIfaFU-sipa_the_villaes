<?php 
include '../config/koneksi.php';
if(isset($_POST["villa-add"])){
    $nama_villa = $_POST['nama_villa'];
    $tipe_villa = $_POST['tipe_villa'];
    $lokasi     = $_POST['lokasi'];
    $fasilitas  = $_POST['fasilitas'];
    $harga      = $_POST['harga'];
    $gambar     = $_FILES['gambar']['name'];

    $simpan = $koneksi->query("insert into villa (nama_villa,tipe_villa,gambar,lokasi,fasilitas,harga) values ('$nama_villa', '$tipe_villa', '$gambar', '$lokasi', '$fasilitas', '$harga')");
    if($simpan){
        move_uploaded_file($file, "image/$gambar");
        echo ("<script LANGUAGE='JavaScript'>
                window.alert('data berhasil di tambahkan');
                window.location.href='index.php';
                </script>"
            );
    }
}
 ?>
 <!-- ==================== cards ==================== -->
 <div class="mx-auto" style="width:800px">
    <div class="card mt-5">
        <div class="card-header">
        Buat atau Edit Data
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nama_villa" class="form-label"> Nama Villa</label>
                    <input type="text" class="form-control" id="nama_villa" name="nama_villa">
                </div>
                <div class="mb-3">
                    <label for="tipe_villa" class="form-label"> Tipe Villa</label>
                    <select name="tipe_villa" id="tipe_villa" class="form-control">
                        <option value=""> Pilih Tipe Villa</option>
                        <option value="silver">Silver</option>
                        <option value="gold">gold</option>
                        <option value="platinum">platinum</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="tipe_villa" class="form-label"> gambar</label>
                    <input type="file" class="form-control" id="lokasi"  name="gambar">
                </div>
                <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi"  name="lokasi" >
                </div>
                <div class="mb-3">
                <label for="fasilitas" class="form-label"> Fasilitas</label>
                    <input type="text" class="form-control" id="fasilitas" name="fasilitas" >
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">harga</label>
                    <input type="text" class="form-control" id="kode_villa" name="harga">
                </div>
                <div class="col-12">
                    <input type="submit" value="Simpan" name="villa-add" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            Data Villa
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <div class="table-icon  ml-2 pt-4">
                <thead>
                    <tr class="bg-info">
                        <th scope="col">ID</th>
                        <th scope="col">Nama Villa</th>
                        <th scope="col">lokasi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Fasilitas</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Tipe Villa</th>
                        <th th scope="col">Aksi</th>
                    </tr>
                </thead>
                <?php $query = "SELECT * FROM villa";
                $select = $koneksi->query($query);  
                while ($data = mysqli_fetch_array($select)){
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $data["kode_villa"]?></td>
                        <td><?php echo $data["nama_villa"]?></td>
                        <td><?php echo $data["lokasi"]?></td>
                        <td><?php echo $data["gambar"]?></td>
                        <td><?php echo $data["fasilitas"]?></td>
                        <td><?php echo $data["harga"]?></td>
                        <td><?php echo $data["tipe_villa"]?></td>
                        <td>
                            <a href="villa_delete.php?kode_villa=<?php echo $data['kode_villa']?>" onClick="alert('Hello World!')">delete</a>
                            <a href="index.php?page=villa-edit&kode_villa=<?php echo $data['kode_villa']?>">Edit</a>
                        </td>
                    </tr>
                </tbody>
    <?php
    }
    ?>
</table>
               
<nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
      </form>
      </div>
    </div>
</div>   
          
          <!-- ===================== Order Details List ==================== -->

          <!-- <div class="details">
            <div class="recentorders">
            
            
            </div> -->
      
            <!-- ===================== Order Details List ==================== -->
            
                       