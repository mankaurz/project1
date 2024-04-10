<?php
// Include database connection
include 'db_info.php';

// Fetch gallery images
$sql = "SELECT * FROM gallery_images";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='gallery-image'>";
        echo "<img src='images/" . $row['filename'] . "' alt='" . $row['caption'] . "'>";
        echo "<p>" . $row['caption'] . "</p>";
        echo "</div>";
    }
} else {
    echo "No gallery images available.";
}

// Close database connection
$conn->close();
?>
