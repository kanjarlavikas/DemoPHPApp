<?php
require 'db.php';
$tasks = $db->query('SELECT * FROM tasks');
?>
<!DOCTYPE html>
<html>
<head><title>Task Manager</title><link rel='stylesheet' href='style.css'></head>
<body>
<h1>Add & Delete tasks</h1>
<form action='add.php' method='POST'>
<input type='text' name='task' required>
<button type='submit'>Add Task</button>
</form>
<ul>
<?php foreach ($tasks as $task): ?>
<li><?= htmlspecialchars($task['description']) ?> <a href='delete.php?id=<?= $task['id'] ?>'>Delete</a></li>
<?php endforeach; ?>
</ul>
</body>
</html>
