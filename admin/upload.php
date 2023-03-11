<?php
include '../config/koneksi.php';

if(isset($_POST['simpan'])){
    $gambar=$_FILES['gambar']['name'];
    $file=$_FILES['gambar'] ['tmp_name'];



  move_uploaded_file($file, "img/$nama"); 
  $koneksi -> query ("insert into gambar(nama,gambar) values ('$_post[gambar]','$nama')");
}


$tampil = $koneksi -> query ("select * from gambar ");
while ($a= $tampil -> fetch_array()){


  
    echo "img src='img/".$a[gambar]. "' width=200 height>";
}
?>

