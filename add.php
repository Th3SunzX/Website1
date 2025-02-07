<?php
include('connect.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $weight = trim($_POST['weight']);
    $destination = trim($_POST['destination']);
    $status = trim($_POST['status']);

    // Check if all fields are filled
    if (!empty($name) && !empty($weight) && !empty($destination) && !empty($status)) {
        $sql = "INSERT INTO cargo (name, weight, destination, status) VALUES (?, ?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("siss", $name, $weight, $destination, $status);

        if ($stmt->execute()) {
            echo "<script>alert('Cargo added successfully!'); window.location.href='index.php';</script>";
        } else {
            echo "<script>alert('Error adding cargo: " . $stmt->error . "');</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Please fill in all fields.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Cargo</title>
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

<!-- Add Cargo Form -->
<div class="container">
    <h1>➕ Add New Cargo</h1>
    <form method="POST">
        <label>Name:</label>
        <input type="text" name="name" required>
        
        <label>Weight (kg):</label>
        <input type="number" name="weight" required>
        
        <label>Destination:</label>
        <input type="text" name="destination" required>
        
        <label>Status:</label>
        <select name="status" required>
            <option value="Pending">Pending</option>
            <option value="In Transit">In Transit</option>
            <option value="Delivered">Delivered</option>
        </select>

        <input type="submit" value="Add Cargo" class="btn">
    </form>
</div>

</body>
</html>
