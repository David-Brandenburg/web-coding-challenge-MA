document.getElementById("regiData").addEventListener("submit", function (e) {
  e.preventDefault();
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let password2 = document.getElementById("password2").value;
  let emailpattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  let vaild = true;

  if (password !== password2) {
    alert("Passwords are not matching!");
    console.log("no match");
    vaild = false;
  } else if (!emailpattern.test(email)) {
    alert("Bitte geben Sie eine gültige E-Mail-Adresse ein.");
    console.log("email doof");
    vaild = false;
  } else {
    alert("Erfolgreich registriert!");
    console.log("good");

    let regi_data = {
      email: email,
      password: password,
    };

    sendData(regi_data);
  }
  if (vaild) {
    setTimeout(() => {
      window.location.replace(
        "http://localhost/web-coding-challenge-MA/login.php"
      );
    }, 1000);
  }
});

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
