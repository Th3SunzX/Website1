<?php
include('connect.php');
$result = $conn->query("SELECT * FROM cargo");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargo Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navigation Bar -->
<nav>
    <div class="logo">Cargo System</div>
    <ul>
        <li><a href="index.php">📦 Cargo List</a></li>
        <li><a href="add.php">➕ Add Cargo</a></li>
        <li><a href="update.php">✏️ Update Cargo</a></li>
        <li><a href="delete.php">❌ Delete Cargo</a></li>
    </ul>
</nav>

<!-- Cargo List Table -->
<div class="container">
    <h1>📦 Cargo List</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Weight (kg)</th>
            <th>Destination</th>
            <th>Status</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['weight'] ?></td>
            <td><?= $row['destination'] ?></td>
            <td><?= $row['status'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>

</body>
</html>
