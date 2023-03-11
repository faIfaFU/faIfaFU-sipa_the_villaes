<form enctype="multipart/form-data" action="" method="post">

nama; <input type="text" name="gambar">
gambar; <input type="file" name="gambar">
<input type="submit" name="simpan" value="simpan">



</form>

<?php 
include 'config/koneksi.php';

if(isset($_POST['simpan'])){

    $nama=$_FILES ['gambar']['name'];
    $file=$_FILES['gambar'] ['tmp_name'];
    
  move_uploaded_file($file, "img/$nama"); 
  $koneksi -> query ("insert into gambar(nama,gambar) values ('$_post[gambar]','$nama')");
}


?>