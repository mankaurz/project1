<?php
// Include database connection
include 'db_info.php';

// Fetch menu items
$sql = "SELECT * FROM menu_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='menu-item'>";
        echo "<h2>" . $row['name'] . "</h2>";
        echo "<p>" . $row['description'] . "</p>";
        echo "<p>Price: $" . $row['price'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No menu items available.";
}

// Close database connection
$conn->close();

