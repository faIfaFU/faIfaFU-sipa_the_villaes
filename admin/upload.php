<?php
include '../config/koneksi.php';

if(isset($_POST['simpan'])){
    $gambar=$_FILES['gambar']['name'];
  move_uploaded_file($file, "img/$gambar"); 
  $koneksi -> query ("insert into gambar(gambar) values ('$_post[gambar]','$')")
}
$tampil = $koneksi -> query ("select * from gambar ");
while ($a= $tampil -> fetch_array()){
    echo "img src='img/".$a[gambar]. "' width=200 height>";
}
?>

