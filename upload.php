<?php 
$upload_folder = 'public/';
$filename = PATHINFO($_FILES['datei']['name'], PATHINFO_FILENAME);
$extension = strtolower(pathinfo($_FILES['datei']['name'], PATHINFO_EXTENSION));

$allowed_extensions = array('png','jpg', 'jpeg', 'gif');
if(!in_array($extension, $allowed_extensions)) {
    die("Ungültige Dateiendung. Nur png, jpg, jpeg und gif-Dateien sind erlaubt");
}

$max_size = 500*1024;
if($_FILES['datei']['size'] > $max_size) {
    die("Bitte keine datein größer 500kb hochladen");
}

if(function_exists('exif_imagetype')) {
    $allwoed_types = array(IMAGETYPE_PNG, IMAGETYPE_JPEG, IMAGETYPE_GIF);
    $detected_types = exif_imagetype($_FILES['datei']['tmp_name']);
    if(!in_array($detected_types, $allwoed_types)) {
        die("Nur der Upload von Bilddateien ist gestattet");
    }
}

$new_path = $upload_folder.$filename.'.'.$extension;

if(file_exists($new_path)) {
    $id = 1;
    do {
        $new_path = $upload_folder.$filename.'_'.$id.'.'.$extension;
        $id++;
    } while(file_exists($new_path));
}

move_uploaded_file($_FILES['datei']['tmp_name'], $new_path);

$title = $_POST['title'];

if(empty($title)) {
    die('Kein Titel angegeben.');
}

$jsonFile = 'logoList.json';

if(!file_exists($jsonFile)) {
    die('JSON-Datei nicht gefunden.');
}

$jsonData = file_get_contents($jsonFile);
$logoList = json_decode($jsonData, true);

if($logoList === null && json_last_error() !== JSON_ERROR_NONE) {
    die('Fehler beim Dekodieren der JSON-Datei:' . json_last_error_msg());
}

$newLogo = [
    'title'=> $title,
    'image'=> $new_path
];

$logoList[] = $newLogo;

if(file_put_contents($jsonFile, json_encode($logoList, JSON_PRETTY_PRINT)) === false) {
    die('Fehler beim Schreiben der JSON-Datei.');
} else {
    echo "Neues Logo erfolgreich der Json hinzugefügt.";
}
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
        <a href="index.php">Home</a>
    </nav>
    <main>
        <div class="Regi-container">
            <div class="Regi-card">
                <div class="Regi-card-info">
                <?php
echo '<p>Bild erfolgreich hochgeladen: <a href="'.$new_path.'">'.$new_path.'</a></p>';
?>
                </div>
            </div>
        </div>
    </main>
</body>
</html>

