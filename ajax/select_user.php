<?php
require "../lib/db.php";
if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_POST['id'])) {
    $db = new DbManager();
    $user = $db->execute("SELECT u.name, p.name, u.contact_number, u.profile_image_path users u INNER JOIN positions p ON p.id = u.position_id WHERE id = ?;", array($_POST['id']));
    echo json_encode($user);
}
