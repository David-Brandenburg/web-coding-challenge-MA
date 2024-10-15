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
<main>
    <div class="Regi-container">
        <div class="Regi-card">
            <div class="Regi-card-info">
                <form class="Management-form" action="upload.php" method="post" enctype="multipart/form-data">
                    <h2>Neues Logo hinzufügen!</h2>
                    <label for="title">Title</label>
                    <input type="text" name="title"><br>
                    <input type="file" name="datei"><br>
                    <button class="login-btn" type="submit"><span>Hochladen</span></button>
                </form>
            </div> 
        </div>
    </div>
</main>
</body>
</html>