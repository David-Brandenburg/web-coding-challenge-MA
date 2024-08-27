document.getElementById("formData").addEventListener("submit", function (e) {
  e.preventDefault();
  let email = document.getElementById("email").value;
  let password = document.getElementById("password").value;
  let password2 = document.getElementById("password2").value;

  if (password !== password2) {
    alert("Passwords are not matching!");
    console.log("no match");
  } else if (!email.includes(".de") || !email.includes(".com")) {
    alert("There is no @ in the adress!");
  } else {
    console.log("good");
    let data = {
      email: email,
      password: password,
    };
    sendData(data);
  }
});
