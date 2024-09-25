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
                    <form class="Regi-Form" action="" id="formData">
                        <h1>Login!</h1>
                        <label for="email">Email</label>
                        <input type="email" name="Email" id="email"/>
                        <label for="password">Password</label>
                        <input type="password" name="Password" id="password"/>
                        <button type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
        
    </main>
    <script src="Xhr.js"></script>
    <script src="formScript.js"></script>
</body>
</html>