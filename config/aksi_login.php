<?php 
session_start();
include 'koneksi.php';
 if (isset($_POST['login'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
 
	// menyeleksi data admin dengan username dan password yang sesuai
	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = $koneksi->query($sql);

	if ($result->num_rows > 0) {
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
  		if ($row['level'] == "admin") {
  			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			header("location:../admin/index.php");
  		}elseif ($row['level'] == "user") {
  			$_SESSION['username'] = $username;
			$_SESSION['level'] = "user";
			header("location:../index.php?page=home");
  		}else{
				header("location:location:../index.php?page=login&pesan=gagal");
  		}
  	}
	} else {
		header("location:../index.php?page=login&pesan=gagal");
	}
	$koneksi->close();
	}
?>