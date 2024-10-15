<?php
if (isset($_COOKIE["PHPSESSID"])) : ?>
    <script>
        window.onload = function() {
            let mana = document.getElementById("Mana");
            let login = document.getElementById("Login");
            let logout = document.getElementById("Logout");
            let Registration = document.getElementById("Regi");
            if (mana && login) {  // Überprüfen, ob beide Elemente existieren
                mana.style.display = "block";
                login.style.display = "none";
            }
            if (Regi && Logout) {
                Regi.style.display = "none";
                Logout.style.display = "block";
            }
        };
    </script>
<?php else : ?>
    <script>
        window.onload = function() {
            let mana = document.getElementById("Mana");
            let login = document.getElementById("Login");
            let logout = document.getElementById("Logout");
            let Registration = document.getElementById("Regi");
            if (mana && login) {  // Überprüfen, ob beide Elemente existieren
                mana.style.display = "none";
                login.style.display = "block";
            }
            if (Regi && Logout) {
                Regi.style.display = "block";
                Logout.style.display = "none";
            }
        };
    </script>
<?php endif; ?>

<?php 

$jsonLogos = file_get_contents('logoList.json');
$logos = json_decode($jsonLogos, true);
?>

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
        <a href="Regi.php" id="Regi" class="regi">Registration</a>
        <a href="logout.php" id="Logout" class="logout">Logout</a>
        <a href="manage.php" id="Mana" class="mana">Management</a>
        <a href="login.php" id="Login" class="login">Login</a>
    </nav>
    <main>
        <div class="landing-container">
            <button onClick="window.location.href='description.php'" class="landing-card">
                <div class="landing-card-info">
                    <h1>The Cube !</h1>
                    <p> Click Me !</p>
                </div>
            </button>
        </div>
        <h1 class="Headline-logo-Container">Companies that are already using The Cube!</h1>
        <div class="logo-container">
            
            <?php foreach ($logos as $logo): ?>
                <div class="logo-item">
                    <div class="logo-item-info">
                    <h2><?php echo htmlspecialchars($logo['title']); ?></h2>
                    <img src="<?php echo htmlspecialchars($logo['image']); ?>" alt="" srcset=""></div>
                </div>
            <?php endforeach; ?>
        </div>
    </main>
    
</body>
</html>
