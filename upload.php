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
echo 'Bild erfolgreich hochgeladen: <a href="'.$new_path.'">'.$new_path.'</a>';
?>