<?php
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $weight = $_POST['weight'];
    $destination = $_POST['destination'];
    $status = $_POST['status'];

    $sql = "UPDATE cargo SET name='$name', weight='$weight', destination='$destination', status='$status' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cargo updated successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Cargo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Navigation -->
<nav>
    <div class="logo">Cargo System</div>
    <ul>
        <li><a href="index.php">📦 Cargo List</a></li>
        <li><a href="add.php">➕ Add Cargo</a></li>
        <li><a href="update.php">✏️ Update Cargo</a></li>
        <li><a href="delete.php">❌ Delete Cargo</a></li>
    </ul>
</nav>

<!-- Update Cargo Form -->
<div class="container">
    <h1>✏️ Update Cargo</h1>
    <form method="POST">
        <label>Enter Cargo ID:</label>
        <input type="number" name="id" required>
        
        <label>New Name:</label>
        <input type="text" name="name" required>
        
        <label>New Weight (kg):</label>
        <input type="number" name="weight" required>
        
        <label>New Destination:</label>
        <input type="text" name="destination" required>
        
        <label>New Status:</label>
        <select name="status">
            <option value="Pending">Pending</option>
            <option value="In Transit">In Transit</option>
            <option value="Delivered">Delivered</option>
        </select>

        <input type="submit" value="Update Cargo" class="btn">
    </form>
</div>

</body>
</html>
