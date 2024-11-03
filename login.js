document.getElementById("loginData").addEventListener("submit", function (e) {
  e.preventDefault(); // Verhindert das Neuladen der Seite
  let login_data = {
    email: document.getElementById("email").value,
    password: document.getElementById("password").value,
  };
  login(login_data); // Ruft die Login-Funktion auf
});
