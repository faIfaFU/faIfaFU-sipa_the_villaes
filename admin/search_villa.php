<?php 
 include "../config/koneksi.php";



?>


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

                    </td>
                   
         </tr>
    <?php
   
                }
    ?>
</table>