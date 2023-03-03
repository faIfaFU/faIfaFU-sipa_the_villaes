<?php
    include "../config/koneksi.php";
    $delete = $_GET['kode_villa'];
    $delete = $koneksi->query("DELETE FROM villa WHERE kode_villa='$delete'");
    if($delete){
        echo ("<script LANGUAGE='JavaScript'>
                    window.location.href='index.php';
                    </script>"
                );
    }
?>