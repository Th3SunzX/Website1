<?php
include('connect.php');

// Handle delete request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_id'])) {
    $id = $_POST['delete_id'];

    $sql = "DELETE FROM cargo WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cargo deleted successfully'); window.location.href='mainscreen.php';</script>";
    } else {
        echo "<script>alert('Error deleting cargo: " . $conn->error . "');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargo Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <header>
        <h1>Cargo Management System</h1>
        <p>Efficiently manage and track cargo shipments</p>
    </header>

    <nav>
        <a href="index.php" class="btn">📦 View Cargo List</a>
        <a href="add.php" class="btn">➕ Add New Cargo</a>
    </nav>

    <!-- Delete Cargo Form -->
    <section class="delete-section">
        <h3>Delete Cargo</h3>
        <form method="POST" action="mainscreen.php">
            <label for="delete_id">Cargo ID:</label>
            <input type="number" id="delete_id" name="delete_id" required>
            <br>
            <input type="submit" value="Delete Cargo" class="btn-danger">
        </form>
    </section>
</div>

</body>
</html>
