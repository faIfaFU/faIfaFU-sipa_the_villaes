
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
              <a href="../home.php">
                <i class='bx bxs-home-alt-2'></i>  
                <span class="link-name">Home</span>
              </a>
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
                <span class="link-name"></span>
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
                <span class="link-name">Data</span>
              </a>
             <i class='bx bx-caret-down arrow' ></i>
               </div>
                <ul class="sub-menu">
                <li><a href="acara">Acara</a></li>
               
            </ul>
          </li>
        
            <li>
              <div class="icon-link">
              <a href="">
               <i class='bx bx-cog'></i>
             <span class="link-name">Setting</span>
              </a>
             <i class='bx bx-caret-down arrow' ></i>
               </div>
                <ul class="sub-menu">
              
                   <li> <a href="">Log Out</a></li>
                  
              
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
      
       
  </div>
    <div class="main " >
      
        <div class="topbar ">
          
          <div class="toggle">
            <i class="fa fa-bars" aria-hidden="true"></i>
            
          </div>
          <ul class="nav-links">
          <li>
                 <nav class="navbar navbar-light pl-3 mt-2 ">
                  <form class="form-inline" action="search_villa.php" method="post">
                    <div class=" container row">
                      <div class="col-8">
                    <input class="form-control mr-sm-1" type="search" placeholder="Search" aria-label="Search">
                    </div>
                    <div class="col-4">
                    <input class="btn btn-primary" type="submit" name="search" value="search">
                    </div>
                    </div>
                  </form>
                </nav>
          </li>
</ul>
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
            case 'villa-edit':
                include 'villa_edit.php';
                break;
            default:
                echo "halaman tidak tersedia";
            break;
        }
    } else {
        include 'villa.php';
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





