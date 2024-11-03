document.getElementById("loginData").addEventListener("submit", function (e) {
  e.preventDefault(); // Verhindert das Neuladen der Seite
  let login_data = {
    email: document.getElementById("email").value,
    password: document.getElementById("password").value,
  };
  login(login_data); // Ruft die Login-Funktion auf
});

function login(login_data) {
  let xhr = new XMLHttpRequest();
  let url = "server.php"; // Dein PHP-Login-Skript

  xhr.open("POST", url, true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      // Hier kannst du die Antwort verarbeiten
      console.log(xhr.responseText);
      if (xhr.responseText === "No user found with this email.") {
        return alert("No user found with this email.");
      } else if (xhr.responseText === "Invalid password.") {
        return alert("Invalid password.");
      } else {
        alert("Login succsseful!");
        window.location.replace(
          "http://localhost/web-coding-challenge-MA/manage.php"
        );
      }
    }
  };

  // URL-kodierte Daten erstellen
  let urlEncodedData = "login=true"; // Füge den login-Parameter hinzu
  let urlEncodedDataPairs = [];
  for (let key in login_data) {
    urlEncodedDataPairs.push(
      encodeURIComponent(key) + "=" + encodeURIComponent(login_data[key])
    );
  }
  urlEncodedData += "&" + urlEncodedDataPairs.join("&"); // Füge die anderen Daten hinzu

  xhr.send(urlEncodedData); // Anfrage senden
}
