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
        <a href="index.php">Home</a>
    </nav>
    <main class="landing-container">
        <div class="landing-card">
            <div class="landing-card-info">
                <h1>Firmen Logo hinzufügen!</h1>
                <form action="upload.php" method="post" enctype="multipart/form-data">
                    <input type="text" name="title"><br>
                    <input type="file" name="datei"><br>
                    <input type="submit" value="Hochladen">
                </form>
            </div> 
        </div>
    </main>
</body>
</html>