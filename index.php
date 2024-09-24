<?php
session_start();
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
        <a href="manage.php">Management</a>
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
