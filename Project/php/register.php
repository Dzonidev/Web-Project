<?php
  include "../db_conn.php";
// Provera da li je forma ispunjena
if (isset($_POST['username']) && isset($_POST['password']) && 
    isset($_POST['name']) ){

  // Uzimanje podataka sa forme
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = md5($_POST['password']);
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $role = 'User'; // Role pri registraciji novog korisnika mora biti User

if (empty($username) || empty($password) || empty($name))
{
    header("Location:../reg.php?error=Sva polja su obavezna");
}

else{


  // Provera da li Username vec postoji u bazi
  $sql = "SELECT * FROM users WHERE username = '$username'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    header("Location:../reg.php?error=Username je vec zauzet!");
  } else {
    // Dodavanje novog korisnika
    $sql = "INSERT INTO users (username, password, name, role) VALUES ('$username', '$password', '$name', '$role')";
    if (mysqli_query($conn, $sql)) {
      echo '<h1>Cestitamo<br>Uspesno ste se registrovali!<h1><br><a href="../index.php">Prijavite se<a>';
    } else {
      echo 'Error: ' . mysqli_error($conn);
    }
  }
}

  // close database connection
  mysqli_close($conn);
}
    
?>