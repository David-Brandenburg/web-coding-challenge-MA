<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accounts";

// Verbindung zur Datenbank aufbauen
$conn = new mysqli($servername,$username,$password,  $dbname);

// Überprüfen, ob die Verbindung erfolgreich ist
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    error_log("POST request detected");
    error_log("POST Data: " . print_r($_POST, true));

    // Registrierung
    if (isset($_POST['regi']) && isset($_POST['email']) && isset($_POST['password'])) {
        error_log("Register button pressed and all fields set");

        $userEmail = $conn->real_escape_string($_POST['email']);
        $userPassword = $conn->real_escape_string($_POST['password']);

        // Passwort hashen
        $hashedPassword = password_hash($userPassword, PASSWORD_BCRYPT);

        // SQL-Statement zur Registrierung vorbereiten
        $sql = "INSERT INTO user (email, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);

        if ($stmt === false) {
            die("Error preparing the statement: " . $conn->error);
        }

        // Parameter binden und ausführen
        $stmt->bind_param("ss", $userEmail, $hashedPassword);

        if ($stmt->execute()) {
            echo "User successfully registered!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        error_log("Form incomplete or register button not pressed");
    }

    if (isset($_POST['login']) && isset($_POST['email']) && isset($_POST['password'])) {
        $userEmail = $conn->real_escape_string($_POST['email']);
        $userPassword = $conn->real_escape_string($_POST['password']);
    
        // SQL-Statement zur Abfrage des Nutzers vorbereiten
        $sql = "SELECT * FROM user WHERE email = ?";
        $stmt = $conn->prepare($sql);
    
        if ($stmt === false) {
            die("Error preparing the statement: " . $conn->error);
        }
    
        // Parameter binden und ausführen
        $stmt->bind_param("s", $userEmail);
        $stmt->execute();
    
        // Ergebnis holen
        $result = $stmt->get_result();
    
        if ($result->num_rows > 0) {
            // Benutzer gefunden
            $user = $result->fetch_assoc();
    
            // Debugging: Benutzer ausgeben
            error_log("Fetched user: " . print_r($user, true));
    
            // Passwort überprüfen
            if (password_verify($userPassword, $user['password'])) {
                session_start(); // Session hier starten
    
                // Debugging: Session-Start
                error_log("Session started for user: " . $userEmail);
    
                echo "Login successful! Welcome, " . $userEmail;
    
                // Update des Feldes 'last_login'
                $currentDateTime = date("Y-m-d H:i:s");
                $updateSql = "UPDATE user SET last_login = ? WHERE email = ?";
                $updateStmt = $conn->prepare($updateSql);
                $updateStmt->bind_param("ss", $currentDateTime, $userEmail);
                $updateStmt->execute();
                $updateStmt->close();
    
                // Benutzerdaten in der Session speichern
                $_SESSION['email'] = $userEmail;
                $_SESSION['last_login'] = $currentDateTime;
            } else {
                echo "Invalid password.";
            }
        } else {
            echo "No user found with this email.";
        }
    
        $stmt->close();
    }
    
}

$conn->close();
?>
