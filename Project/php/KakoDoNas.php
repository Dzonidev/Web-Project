<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <link rel="stylesheet" href="kakodonas.css">
    <title>Projekat</title>
  </head>
  <body>
    <div class="contact-in content-box-lg container" >
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8462.077432457638!2d19.993279886091518!3d44.10494107527414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4759dd97e2cd9221%3A0xb41d0febfca0ccc2!2sDiv%C4%8Dibare%20Ski%20Resort!5e0!3m2!1ssr!2srs!4v1676567379298!5m2!1ssr!2srs" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           
        </div>
        <div class="contact-form">
            <h1>Kontaktirajte nas</h1>
            <form onsubmit="return proveraEmaila()"
            action="php/provera.php" method="post">
                <!-- Alert za polja koja nisu popunjena -->
                 <?php if (isset($_GET['error'])){ ?>
                  <div class="alert alert-danger" role="alert">
                    <?=$_GET['error']?>
                </div>
                <?php }?>
                <input type="text" name="ime" id="ime" placeholder="Ime" class="contact-form-txt">
                <input type="text" name="email" id="email" placeholder="Email" class="contact-form-txt">
                <textarea placeholder="Vasa poruka" name="poruka" id="poruka" cols="30" rows="10" class="contact-form-txtarea"></textarea>
                <input type="submit" value="Posalji" name="submit" class="contact-form-btn">
                <p>Ili nas pozovite na broj:<br>
                <i class="fas fa-phone mr-3"></i> 063 111-111 <br>
                Trenutno stanje na putevima na Divčibarama je stabilno. Putevi su suvi i dobro očišćeni, bez snega i leda, što olakšava putovanje i smanjuje rizik od nezgoda. Međutim, zbog visokih temperatura i suvog vremena, moguće je da se putevi brzo osuše i postanu prašnjavi, što može uticati na vidljivost i izazvati alergijske reakcije. Savetujemo vozače da budu oprezni i poštuju ograničenja brzine, kao i da provere svoja vozila pre putovanja kako bi bili sigurni da su u ispravnom stanju. Uživajte u vožnji i opuštanju na Divčibarama!
              </p>
            </form>
        </div>
    </div>



    <script src="proveraMaila.js"></script>
  </body>
</html>