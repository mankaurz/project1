<?php
// Include database connection
include 'db_info.php';

// Fetch menu items
$menu_sql = "SELECT * FROM menu_items";
$menu_result = $conn->query($menu_sql);

// Fetch blog posts
$blog_sql = "SELECT * FROM blog_posts ORDER BY created_at DESC LIMIT 5"; // Fetch latest 5 posts
$blog_result = $conn->query($blog_sql);


// Display blog posts
if ($blog_result->num_rows > 0) {
    while ($row = $blog_result->fetch_assoc()) {
        echo "<div class='blog-post'>";
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p>" . $row['content'] . "</p>";
        echo "<p>Author: " . $row['author'] . "</p>";
        echo "<p>Date: " . date('F j, Y', strtotime($row['created_at'])) . "</p>";
        echo "</div>";
    }
} else {
    echo "No blog posts available.";
}

// Close database connection
$conn->close();

