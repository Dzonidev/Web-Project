function provera() {
    var input = document.getElementById("adresa").value;
    if (input === "") {
      alert("Polje adresa je obavezno");
    } else {
      window.location.href = "php/narudzbenica.php";
    }
  }