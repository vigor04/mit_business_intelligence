<?php
require "../lib/db.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new DbManager();
    $db->execute("DELETE users WHERE id = ?;", array($_POST['id']));
}
