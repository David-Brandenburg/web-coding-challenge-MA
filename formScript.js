document.getElementById("formData").addEventListener("submit", function (e) {
  e.preventDefault();
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let password2 = document.getElementById("password2").value;
  let emailpattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  if (password !== password2) {
    alert("Passwords are not matching!");
    console.log("no match");
  } else if (!emailpattern.test(email)) {
    alert("Bitte geben Sie eine gültige E-Mail-Adresse ein.");
    console.log("email doof");
  } else {
    console.log("good");
    let data = {
      email: email,
      password: password,
    };
    sendData(data);
  }
});
