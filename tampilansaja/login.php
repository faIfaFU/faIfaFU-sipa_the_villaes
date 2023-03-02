<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="tampilansaja/style.css">
    <title>ssss</title>
</head>
<body>
   <div class="hero">
     <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">Log In</button>
        <button type="button" class="toggle-btn" onclick="register()">Register</button>

        </div>
        <div class="social-icons">
            <img src="image.png">
         </div>
         <form action="config/aksi_login.php" id="login"class="input-group"  method="POST">
            <input type="text" class="input-field"  name="email" placeholder="Masukan Email" required>
            <input type="text" class=" input-field" name="password" placeholder="Masukan Password" required>
            <input type="checkbox" class=" check-box"> <span>Ingat Password</span>
            <button class="submit submit-btn">Log In</button>
        </form>
        <form action="" id="register"class="input-group" method="POST">
            <input type="text" class="input-field"  name="nama" placeholder="Masukan Username" required>
            <input type="email" class=" input-field"  name="email" placeholder="Masukan email" required>
            <input type="email" class=" input-field"  name="password" placeholder="Masukan Password" required>
            <div class="ayo input-field"> 
                <label class="form-label">Login Sebagai:</label>
              
                <select class="form-control" name="level">
                    <i>
                <option value="admin">admin </option>
                <option value="user">Petugas</option>
                  <option value="user">user</option>
                  </i>
                </select>
            
              </div>
            <!-- </div>
              <a href="index.php?page=register" class="n-3">sudah punya akun? klik ini</a>
            </div> -->
           
            <input type="checkbox" class=" check-box mt-5"> <span>saya setuju dengan persyaratan & conditions</span>
            <button class="submit submit-btn">Register</button>
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