<?php
session_start();
$logos = json_decode(file_get_contents('logoList.json'), true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cube</title>
</head>
<body>
    <nav>
        <a href="Regi.php">Registration</a>
        <a href="manage.php">Management</a>
    </nav>
    <main>
        <h1>Hello there!</h1>
    </main>
    
</body>
</html>
