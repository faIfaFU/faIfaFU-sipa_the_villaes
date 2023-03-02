<?php 
 include "../config/koneksi.php";



?>




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
                      <th scope="col">Aksi</th>
                    </tr>
                                <?php

                  

                    $search=$_POST['search'];


                $query = "SELECT * FROM villa where nama_villa like '$cari'";
                $select = $koneksi->query($query);  
                while ($data = mysqli_fetch_array($select)){
            
                ?>


                <tr>
                    <td><?php echo $data["kode_villa"]?></td>
                    <td><?php echo $data["nama_villa"]?></td>
                    <td><?php echo $data["lokasi"]?></td>
                    <td><?php echo $data["gambar"]?></td>
                    <td><?php echo $data["fasilitas"]?></td>
                    <td><?php echo $data["harga"]?></td>
                    <td><?php echo $data["tipe_villa"]?></td>
                    <td>
                    <div classs="btn btn-primary">
                     <a href="delete.php?kode_villa=<?php echo $data['kode_villa']?>">  delete</a>
                     <a href="edit.php?kode_villa=<?php echo $data['kode_villa']?>">Edit</a>
                   </div>
                    </td>
                   
         </tr>
    <?php
   
                }
    ?>
</table>