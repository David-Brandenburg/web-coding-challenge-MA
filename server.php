<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accounts";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn -> connect_error) {
    die("Connction failed: " . $conn->connect_error);
}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $userPassword = $_POST['password'];
    $userEmail = $_POST['email'];

    $hashedPassword = password_hash($userPassword, PASSWORD_BCRYPT);

    $sql = "INSERT INTO user (password, email) VALUES (?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $hashedPassword, $userEmail);

    if($stmt->execute()) {
        echo "Data saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close(); 
}
?>