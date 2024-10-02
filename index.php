<?php
if (isset($_COOKIE["PHPSESSID"])) : ?>
    <script>
        window.onload = function() {
            let mana = document.getElementById("Mana");
            let login = document.getElementById("Login");
            if (mana && login) {  // Überprüfen, ob beide Elemente existieren
                mana.style.display = "block";
                login.style.display = "none";
            }
        };
    </script>
<?php else : ?>
    <script>
        window.onload = function() {
            let mana = document.getElementById("Mana");
            let login = document.getElementById("Login");
            if (mana && login) {  // Überprüfen, ob beide Elemente existieren
                mana.style.display = "none";
                login.style.display = "block";
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
        <a href="Regi.php">Registration</a>
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
