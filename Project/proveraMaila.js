function proveraEmaila() {
    let email = document.getElementById('email').value;
    let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (regex.test(email)) {
      return true;
    } else {
      alert('Email nije ispravan!');
      return false;
    }
  }