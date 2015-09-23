<?php
require "../lib/db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pathinfo = pathinfo($_FILES['image']);
    if($_FILES['image']['type'] === 'image/jpeg') {
        $ext = '.jpg';
    } else if($_FILES['image']['type'] === 'image/png') {
        $ext = '.png';
    }
    $filepath = DIRECTORY_SEPARATOR . "files". DIRECTORY_SEPARATOR . "users" . DIRECTORY_SEPARATOR . time() . $ext;
    move_uploaded_file($_FILES['image']['tmp_name'], '..'.$filepath);
    $db = new DbManager();
    $db->execute(
          "INSERT INTO users (name, position_id, contact_number, profile_image_path, user_name, password) VALUES (?, ?, ?, ?, ?, ?);"
        , array($_POST['name'], $_POST['position'], $_POST['contact_number'], $filepath, $_POST['user_name'], $_POST['password']));
}
