<?php
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['delete_id'];

    $sql = "DELETE FROM cargo WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cargo deleted successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Cargo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav>
    <div class="logo">Cargo System</div>
    <ul>
        <li><a href="index.php">📦 Cargo List</a></li>
        <li><a href="add.php">➕ Add Cargo</a></li>
        <li><a href="update.php">✏️ Update Cargo</a></li>
        <li><a href="delete.php">❌ Delete Cargo</a></li>
    </ul>
</nav>
<div class="container">
    <h1>❌ Delete Cargo</h1>
    <form method="POST">
        <label>Enter Cargo ID:</label>
        <input type="number" name="delete_id" required>
        <input type="submit" value="Delete Cargo" class="btn-danger">
    </form>
</div>
</body>
</html>
