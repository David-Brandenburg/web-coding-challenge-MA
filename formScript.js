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
