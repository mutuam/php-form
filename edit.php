<?php
require_once('submit.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    
    $stmt = $conn->prepare("UPDATE users SET country = 'active' WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: index.php"); 
        exit;
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No ID specified for update.";
}

$conn->close();

?>

