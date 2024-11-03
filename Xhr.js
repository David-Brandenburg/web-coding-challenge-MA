function sendData(regi_data) {
  let xhr = new XMLHttpRequest();
  let url = "server.php";

  xhr.open("POST", url, true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };

  let urlEncodedDataPairs = [];
  for (let key in regi_data) {
    urlEncodedDataPairs.push(
      encodeURIComponent(key) + "=" + encodeURIComponent(regi_data[key])
    );
  }

  urlEncodedDataPairs.push("regi=true");

  let urlEncodedData = urlEncodedDataPairs.join("&");

  xhr.send(urlEncodedData);
}

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

function uploadTitlePic(Title) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "upload.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      console.log(xhr.responseText);
    }
  };

  // Daten an den Server senden
  xhr.send("title=" + encodeURIComponent(Title));
}
