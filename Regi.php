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
        <a href="manage.php">Management</a>
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
                        <button type="submit" name="regi">Registrieren</button>
                    </form>
                </div>
            </div>
        </div>
        
    </main>
    <script src="Xhr.js"></script>
    <script src="formScript.js"></script>
</body>
</html>