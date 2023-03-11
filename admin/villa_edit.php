<?php
    include "../config/koneksi.php";
    $ed = $_GET['kode_villa'];
    $edit = $koneksi->query("SELECT * FROM villa WHERE kode_villa='$ed'");
    $a = $edit->fetch_array();
?>
<div class="mx-auto" style="width:800px">
    <div class="card mt-5">
        <div class="card-header">
            Edit Data
        </div>
        <div class="card-body">
            <form action="" method="post">

                <div class="mb-3 row">
                    <label for="nama_villa" class="form-label"> Nama Villa</label>
                    <input type="text" class="form-control" id="kode_villa" name="kode_villa" value="<?php echo $a['kode_villa']?>">
                    <input type="text" class="form-control" id="nama_villa" name="nama_villa" value="<?php echo $a['nama_villa']?>">
                </div>

                <div class="mb-3">
                    <label for="tipe_villa" class="form-label"> Tipe Villa</label>
                    <select name="tipe_villa" id="tipe_villa" class="form-control">
                        <option value=""> Pilih Tipe Villa</option>
                        <option value="villa_jagung" <?php if($a['tipe_villa'] == 'villa_jagung'){ echo 'selected';} ?>>villa_jagung</option>
                        <option value="vila_segitiga" <?php if($a['tipe_villa'] == 'vila_segitiga'){echo 'selected';} ?>>vila_segitiga</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" class="custom-file-input form-control" id="gambar" name="gambar" value="<?php echo $a['gambar']?>">
                </div>
                    
                <div class="mb-3">
                    <label for="lokasi" class="form-label">Lokasi</label>
                    <input type="text" class="form-control" id="lokasi"  name="lokasi" value="<?php echo $a['lokasi']?>">
                </div>

                <div class="mb-3">
                    <label for="fasilitas" class="form-label">Fasilitas</label>
                    <input type="text" class="form-control" id="fasilitas" name="fasilitas" value="<?php echo $a['fasilitas']?>">
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $a['deskripsi']?>">
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">harga</label>
                    <input type="number" class="form-control" id="kode_villa" name="harga" value="<?php echo $a['harga']?>">
                </div>

                <div class="mb-3">
                    <label for="jumlah_villa" class="form-label">Jumlah Villa</label>
                    <input type="number" class="form-control" id="jumlah_villa" name="jumlah_villa" value="<?php echo $a['jumlah_villa']?>">
                </div>

                <div class="col-12">
                    <button type="submit" name="edit" class="btn btn-primary">Ubah</button>
                    <a href="index.php" class="btn btn-warning">Batal</a>
                </div>
            </form>
         </div>
     </div>
    </div>
<?php
if(isset($_POST['edit'])){
    $kode_villa = $_POST["kode_villa"];
    $nama_villa = $_POST["nama_villa"];
    $lokasi = $_POST["lokasi"];
    $gambar = $_POST["gambar"];
    $fasilitas = $_POST["fasilitas"];
    $deskripsi = $_POST["deskripsi"];
    $harga = $_POST["harga"];
    $jumlah_villa = $_POST["jumlah_villa"];
    $tipe_villa = $_POST["tipe_villa"];
    $edit= $koneksi->query("UPDATE villa SET nama_villa='$nama_villa', lokasi='$lokasi', gambar='$gambar', fasilitas='$fasilitas', deskripsi='$deskripsi', harga='$harga', jumlah_villa='$jumlah_villa', tipe_villa='$tipe_villa' WHERE kode_villa='$kode_villa'");
    if($edit){
        move_uploaded_file($gambar_temp, "../img/".$gambar);
        echo ("<script LANGUAGE='JavaScript'>
                window.alert('data berhasil di edit');
                window.location.href='index.php';
                </script>"
            );
    }
}
?>