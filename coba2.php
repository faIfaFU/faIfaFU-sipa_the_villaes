<h2>Data Karyawan</h2>
    <table border="1" cellpadding="4">
        <tr bgcolor="silver">
            <th>No</th>
            <th>name</th>
            <th>fasilitas</th>
            <th>waktu keberangkatan</td>
            <th>waktu tiba</th>
            <th>type pasenger</th>
        </tr>
        <?php
        $koneksi=mysqli_connect("localhost", "root", "", "thevillaes");
        $no=0;
        $query =mysqli_query($koneksi, "SELECT * FROM villa ORDER BY kode_villa DESC");
        while($result=mysqli_fetch_array($query)){
        $no++    
        ?>
        <tr>
            <td><?php echo $no?></td>
            <td><?php echo $result['nama_villa']?></td>
            <td><?php echo $result['fasilitas']?></td>
            <td><?php echo $result['harga']?></td>
            <td><?php echo $result['lokasi']?></td>
            <td><a href="coba2.php?kode_villa=<?=$result['kode_villa']?>">Detail</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <?php
    if(isset($_GET['kode_villa'])){
        $kode_villa=$_GET['kode_villa'];
    }
    else {
        die ("Error. No ID Selected!");    
    }
    $konek=mysqli_connect("localhost", "root", "", "travego_");
    $query    =mysqli_query($koneksi, "SELECT * FROM villa WHERE kode_villa='$kode_villa'");
    $result    =mysqli_fetch_array($query);
?>
<html>
<head>
    <title>Script PHP untuk Menampilkan Data dari Database Derdasarkan Id</title>
</head>
<body>
    <h2>Detail Data Karyawan</h2>
    <p><i>Note: Dibawah ini adalah detail informasi karyawan berdasarkan kode_villa</i> <b><?php echo $kode_villa?></b></p>
    <table border="0" cellpadding="4">
        <tr>
            <td size="90">NIK</td>
            <td>: <?php echo $result['nama_villa']?></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>: <?php echo $result['fasilitas']?></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>: <?php echo $result['harga']?>, <?php echo $result['harga']?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>: <?php echo $result['lokasi']?></td>
        </tr>
        <tr>
            <td>Department</td>
            <td>: <?php echo $result['tipe_villa']?></td>
        </tr>
    </table>