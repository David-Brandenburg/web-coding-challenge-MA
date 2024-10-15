<?php
if (isset($_COOKIE["PHPSESSID"])) : ?>
    <script>
        window.onload = function() {
            let mana = document.getElementById("Mana");
            let Home = document.getElementById("Home");
            let login = document.getElementById("Login");
            if (Home && mana) {  // Überprüfen, ob beide Elemente existieren
                mana.style.display = "block";
                login.style.display = "none";
            }
            
        };
    </script>
<?php else : ?>

    <script>
        window.onload = function() {
            let mana = document.getElementById("Mana");
            let Home = document.getElementById("Home");
            if (Home && mana) {  // Überprüfen, ob beide Elemente existieren
                mana.style.display = "none";
                login.style.display = "block";
            }
        };
    </script>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cube</title>
</head>
<body>
    <nav class="nav-container">
        <a href="index.php" id="Home">Home</a>
        <a href="manage.php" id="Mana">Management</a>
        <a href="login.php" id="Login" class="login">Login</a>
    </nav>
    <main>
        <div class="Regi-container">
            <div class="Regi-card">
                <div class="Regi-card-info">
                    <form class="Regi-Form" action="" id="regiData">
                        <h1>Registration!</h1>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email"/>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password"/>
                        <label for="password2">Repeat Password</label>
                        <input type="password" name="password2" id="password2"/>
                        <button type="submit" name="regi" class="login-btn"><span>Registrieren</span></button>
                    </form>
                </div>
            </div>
        </div>
        
    </main>
    <script src="Xhr.js"></script>
    <script src="formScript.js"></script>
</body>
</html>