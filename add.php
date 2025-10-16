<?php
require 'db.php';
if (!empty($_POST['task'])) {
    $stmt = $db->prepare('INSERT INTO tasks (description) VALUES (:desc)');
    $stmt->bindValue(':desc', $_POST['task']);
    $stmt->execute();
}
header('Location: index.php');