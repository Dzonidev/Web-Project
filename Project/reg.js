document.querySelector('form').addEventListener('submit', (event) => {
    const password = document.querySelector('#password').value;
    const sadrziVelika = /[A-Z]/.test(password);
    const sadrziMala = /[a-z]/.test(password);
    const sadrziBroj = /\d/.test(password);
  
    if (!sadrziVelika || !sadrziMala || !sadrziBroj) {
      event.preventDefault(); // Ne dozvoljava da se izvrsi registrovanje
      alert('Sifra mora sadrzati 1 veliko slovo, 1 malo slovo i 1 broj!');
    }
  });