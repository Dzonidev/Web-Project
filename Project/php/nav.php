<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title></title>
  </head>
  <body>
  
   <nav class="navbar navbar-default navbar-expand-sm navbar-light bg-light">
    <div class="container">
    

   <a href="landing.html"
      class="navbar-brand mb-0 h1">
      <img
      class="d-inlineblock"
       src="Pictures/logo1.png"
      width="80" height="80"/>
      Ski Centar
    </a>

    <button 
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarNav"
    class="navbar-toggler"
    aria-controls="navbarNav"
    aria-expanded="false"
    aria-label="Toggle navigation"

    >
    <span class="navbar-toggler-icon"></span>
  </button>
   



    <div class="collapse navbar-collapse" 
         id="navbarNav">
         <ul class="navbar-nav">
            <li class="nav-item active">
                <a href="onama.php" class="nav-link ">
                  O nama
                </a>
            </li>
            <li class="nav-item active">
              <a href="kakodonas1.php" class="nav-link">
                Kako do nas?
              </a>
          </li>
          
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" 
            id="navbarDropdown" role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false">
              Sta nudimo
            </a>
            <ul class="dropdown-menu" 
            aria-labelledby="navbarDropdown">
            <li><a href="proizvodi.php#Apartmani" class="dropdown-item">Apartmani</a></li>
            <li><a href="proizvodi.php#SkiPass" class="dropdown-item">Ski pass</a></li>
            <li><a href="proizvodi.php#Instruktori" class="dropdown-item">Instruktori</a></li>

            </ul>
        </li>
        <li class="nav-item active">
              <a href="korpa.php" class="nav-link">
                Prodavnica
              </a>
          </li>
        <li class="nav-item active">
                <a href="logout.php" class="nav-link ">
                  Odjavi se
                </a>
            </li>

            <li class="nav-item active">
          <span id="clock" class="nav-link"></span>
        </li>
    </ul>


    </div>
         </ul>
  

   </nav>

   <script>
   
    function displayTime() {
      var date = new Date();
      var time = date.toLocaleTimeString();
      document.getElementById("clock").innerHTML = time;
    }

  
    setInterval(displayTime, 1000);
  </script>




    

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>