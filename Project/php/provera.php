<?php
if (isset($_POST['submit'])) {
  // Proveravamo da li su sva polja popunjena
  if (!empty($_POST['ime']) && !empty($_POST['email']) && !empty($_POST['poruka'])) {
    // Ako jesu preusmeravamo na Obavestenje.php
    header("Location: Obavestenje.php");
    exit();
  } else {
    // A ako nisu saljemo poruku korisniku
    header("Location:../KakoDoNas1.php?error=Sva polja su obavezna");
  }
}
?>