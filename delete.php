<?php
require 'db.php';
if (!empty($_GET['id'])) {
    $stmt = $db->prepare('DELETE FROM tasks WHERE id = :id');
    $stmt->bindValue(':id', $_GET['id']);
    $stmt->execute();
}
header('Location: index.php');