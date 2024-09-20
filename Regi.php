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
        <form action="" id="formData">
            <h1>Registration!</h1>
            <label for="Email">Email</label>
            <input type="email" name="Email" id="email"/>
            <label for="Password">Password</label>
            <input type="password" name="Password" id="password"/>
            <label for="Password2">Repeat Password</label>
            <input type="password" name="Password2" id="password2"/>
          <button type="submit">Registrieren</button>
        </form>
    </main>
    <script src="Xhr.js"></script>
    <script src="formScript.js"></script>
</body>
</html>