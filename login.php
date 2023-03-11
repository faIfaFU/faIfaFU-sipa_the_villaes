<?php session_start() ?>
<?php include 'config/koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="tampilansaja/style.css">
    <title> Login Register</title>
</head>
<body>
   <div class="hero">
     <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
        <button type="button" class="toggle-btn"  onclick="login()">Log In</button>
        <button type="button" class="toggle-btn" onclick="register()">Register</button>

        </div>
        <div class="social-icons">
            <img src="image.png">
         </div>
         <form action="" id="login" class="input-group"  method="post">
            <input type="text" class="input-field"  name="email" placeholder="Masukan Email" required>
            <input type="password" class=" input-field" name="password" placeholder="Masukan Password" required>
            <input type="checkbox" class=" check-box"> <span>Ingat Password</span>
            <button class="submit submit-btn" name="login" type="submit">Log In</button>
        </form>
        <form action="" id="register"class="input-group" method="post">
            <input type="text" class="input-field"  name="nama" placeholder="Masukan Username" required>
            <input type="email" class=" input-field"  name="email" placeholder="Masukan email" required>
            <input type="password" class=" input-field"  name="password" placeholder="Masukan Password" required>
           
           
            <input type="checkbox" class=" check-box mt-5"> <span>saya setuju dengan persyaratan </span>
            <button class="submit submit-btn" name="register">Register</button>
        </form>

     </div>
   </div> 

   <script>
    var x = document.getElementById("login");
    var y = document.getElementById("register");
    var z = document.getElementById("btn");

    function register(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
}

function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0px";
}
   </script>
</body>





</html>
<?php
if ( isset($_POST['register']) ) {
    $username = $_POST['username'];
    $email = $_POST ['email'];
    $password = md5($_POST['password']);
    $level = 'user';
    $query = $koneksi->query("INSERT INTO users VALUES ('', '$username', '$email', '$password', '$level')");
    if ($query) {
        header('location:login.php?page=login');
    }
} elseif ( isset($_POST['login']) ) {
    $email = $_POST ['email'];
    $password = md5($_POST['password']);
    $query = $koneksi->query("SELECT * FROM users WHERE email='$email' AND password='$password'");
    if ( $query->num_rows > 0 ) {
        // output data of each row
        while( $row = $query->fetch_assoc() ) {
            if ( $row['level'] == "admin" ) {
                $_SESSION["admin"] = [
                    "id" => $row["id"],
                    "username" => $row["username"],
                    "email" => $row["email"],
                    "level" => "admin"
                ];
                echo ("<script LANGUAGE='JavaScript'>
                window.location.href='admin/index.php';
                </script>");
            } elseif ( $row['level'] == "user" ) {
                $_SESSION["user"] = [
                    "id" => $row["id"],
                    "username" => $row["username"],
                    "email" => $row["email"]
                ];
                header("location: resevsionis/index.php");
            } else {
                
            }
        }
    } else {
        
    }
}
?>