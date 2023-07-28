<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Projekat</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="divcibare.css">
</head>
<body>
  <div class="container-fluid p-0">
    <div class="row">
      <div class="col-lg-4 col-md-12 p-0">
        <div class="hero hero1">
          <div class="hero-content">
            <h1>DIVCIBARE</h1>
            <p>Divčibare su planinsko turističko mesto u centralnom delu planine Maljen, 38 km jugoistočno od Valjeva. Udaljeno je samo 110 km od Beograda i 180 km od Novog Sada, što ga čini idealnim mestom za vikend turizam. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 p-0">
        <div class="hero hero2">
          <div class="hero-content">
            <h1>SKIJALISTA</h1>
            <p>Divčibare je zaštićeno planinskim vencima od jakih vetrova i pokriveno više od četiri meseca snegom. Svojom pitomom klimom Divčibare predstavlja prijatno mesto za zimski odmor. </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 p-0">
        <div class="hero hero3">
          <div class="hero-content">
            <h1>DODATNA ZABAVA</h1>
            <p>Pored dobro poznatih skijalista na Divcibarama takodje postoji mogucnost iznajmljivanja kvadova kako za samostalnu tako i za grupnu voznju, posetite nas i uverite se
                u nezaboravnu zabavu!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  



  <script>
    const heroes = document.querySelectorAll('.hero');

    heroes.forEach((hero, index) => {
  hero.addEventListener('mouseenter', () => {
    if (index === 0)
    {
        hero.style.backgroundImage = "url('Pictures/Divcibare2.png')";
    }
    
   else if (index === 1) 
    {
      hero.style.backgroundImage = "url('Pictures/Sneg2.png')";
    } 
    else if (index === 2)
     {
      hero.style.backgroundImage = "url('Pictures/Kvad.png')";
    }
    
  });

      hero.addEventListener('mouseleave', () => {
        if (index === 0)
    {
        hero.style.backgroundImage = "url('Pictures/Divcibare.png')";
    }
    
   else if (index === 1) 
    {
      hero.style.backgroundImage = "url('Pictures/Sneg.png')";
    } 
    else if (index === 2)
     {
      hero.style.backgroundImage = "url('Pictures/Kvad2.png')";
    }
   
        
      });
    });
  </script>

</body>
</html>
