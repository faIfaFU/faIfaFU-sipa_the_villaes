

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <link rel="stylesheet" href="style.css">

    <title>laman admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>

  <body>
  <div class="sidebar close">
              <div class="logo-details">
           <i>
             <!-- <img src="assets/bee" width="35" height="35" color="white" class="d-inline-block align-top" alt=""> -->
             </i>
          <span class="logo-name">
             TheVillaes
          </span>
      
              </div>
              <ul class="nav-links">
                 <li>
                 <!-- <i class='bx bx-search'></i> -->
                <form action="search.php" method="post">
                  <span class="link-name"> 
                    <input type="text" name="search">  
                   <input type="submit" name="" value="cari">
                </span>
                </form>
          </li>
          <li>
              <a href="sipa_the_villaes/home.php">
                <i class='bx bxs-home-alt-2 arrow'></i>  
                <span class="link-name">Home</span>
              </a>
              <ul class="sub-menu blank">
                 <li><a class="link-name" href="">   Home</a></li> 
            </ul>
          </li>
          <li>
              <a href="dashboard">
                <i class='bx bxs-grid-alt arrow' ></i>         
                <span class="link-name">Dashboard</span>
              </a>
               <ul class="sub-menu blank">
                 <li><a class="link-name" href="">   Dashboard</a></li> 
            </ul>
          </li>
          <li>
              <div class="icon-link">
              <a href="">
             <i class='bx bxs-calendar'></i>
                <span class="link-name">Cal</span>
              </a>
             <i class='bx bx-caret-down arrow' ></i>
               </div>
                <ul class="sub-menu">
                   
                <li><a href="hitung">Hitung</a></li>
                <li><a href=""></a></li>
            </ul>
          </li>
          <li>
              <div class="icon-link">
              <a href="">
                <i class='bx bxs-notepad' ></i>         
                <span class="link-name">Catatan</span>
              </a>
             <i class='bx bx-caret-down arrow' ></i>
               </div>
                <ul class="sub-menu">
                   <li><a class="link-name" href="">   Catatan</a></li>  
                <li><a href="acara">Acara</a></li>
               
            </ul>
          </li>
            <li>
              <div class="icon-link">
              <a href="">
               <i class='bx bx-support'></i>     
                <span class="link-name">Support</span>
              </a>
             <i class='bx bx-caret-down arrow' ></i>
               </div>
                <ul class="sub-menu">
              
                   <li> <a href="https://api.whatsapp.com/send?phone=6283107092750&text=Hi"><i class='bx bxl-whatsapp'></i></a></li>
                <li><a href="https://www.facebook.com/azale"><i class='bx bxl-facebook-circle'></i></a></li>
               
            </ul>
        
             <li>
              <div class="icon-link">
              <a href="">
               <i class='bx bx-cog'></i>
             <span class="link-name">Setting</span>
              </a>
             <i class='bx bx-caret-down arrow' ></i>
               </div>
                <ul class="sub-menu">
              
                   <li> <a href=""><i class='bx bx-toggle-left'></i></a></li>
                    <li> <a href=""><i class='bx bxs-palette'></i></a></li>
              
            </ul>
                
        <!-- <div class="profil-pemilik ">
            <div class="profil-detail">
                 <img src="assets/user" alt="" width="32" height="32" class="rounded-circle me-2">

            </div>
            <div class="name">
                <div class="profil-nama">Sya Varesva</div>
                <div class="pekerjaan">Pemilik</div>                
            
            </div>
        </div> -->
         <section class="home-section">
            <div class="home-content">
                <span class="text"></span>
            </div>
        </section>
       
  </div>
      <div class="main " >
          
      
        <div class="topbar fixed-top ">
            
          <div class="toggle">
            <i class="fa fa-bars" aria-hidden="true"></i>
          </div>
          <div>
     
      </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>


  
        <?php
if(isset($_GET['page'])){
  $page = $_GET['page'];

  switch ($page) {
    case 'login':
      include 'login.php';
      break;
      case 'register':
      include 'register.php';
      break;

    default:
      echo "halaman tidak tersedia";
      break;

  }
} else {
  include 'input.php';
}
?>

<script>

let arrow = document.querySelectorAll(".arrow");
       for ( var i = 0; i < arrow.length; i++) {
           arrow[i].addEventListener("click", (e)=> {
        let arrowParent = e.target.parentElement.parentElement;
        console.log(arrowParent);
        arrowParent.classList.toggle("showMenu");
           });
       }


            // menu toggle
            let toggle = document.querySelector(".toggle");
            let sidebar = document.querySelector(".sidebar");
            let main = document.querySelector(".main");

            toggle.onclick = function () {
              sidebar.classList.toggle("active");
              main.classList.toggle("active");
            };
            
            
            
</script>
      
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>





