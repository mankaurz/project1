<?php include 'db_info.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Cafe</title>
    <link rel="stylesheet" href="css/style.css">
    <style>

    /* General Styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

/* Header Styles */
header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    text-align: center;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline-block;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #ffd700; /* Change to your preferred hover color */
}

/* Hero Section Styles */
.hero {
    background-image: url('https://static.vecteezy.com/system/resources/previews/010/377/416/large_2x/close-up-of-hot-latte-coffee-in-the-cafe-banner-for-website-header-design-with-copy-space-for-text-free-photo.jpg'); /* Change to your hero image */
    background-size: cover;
    background-position: center;
    color: #fff;
    padding: 100px 0;
    text-align: center;
}

.hero h1 {
    font-size: 3em;
    margin-bottom: 20px;
}

.hero p {
    font-size: 1.2em;
}

/* Menu Section Styles */
/* Menu Section Styles */
.menu-section {
    background-color: #f9f9f9;
    padding: 40px 0;
}

.menu h2 {
    text-align: center;
    margin-bottom: 40px;
    color: #333;
    font-size: 2em;
    text-transform: uppercase;
}

.menu-item {
    border: 2px solid transparent;
    padding: 20px;
    margin-bottom: 20px;
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
    transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
}

.menu-item:hover {
    transform: translateY(-5px);
    border-color: #e67e22; /* Orange color on hover */
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.menu-item img {
    width: 120px;
    height: 120px;
    margin-right: 20px;
    border-radius: 50%;
    object-fit: cover;
}

.menu-item-content {
    flex: 1;
}

.menu-item h3 {
    font-size: 1.8em;
    margin-bottom: 10px;
    color: #333;
}

.menu-item p {
    font-size: 1.2em;
    color: #666;
    line-height: 1.5;
}

/* Blog Section Styles */
.blog-section {
    background-color: #f3f3f3;
    padding: 40px 0;
}

.blog h2 {
    text-align: center;
    margin-bottom: 40px;
    color: #333;
    font-size: 2em;
    text-transform: uppercase;
}

.blog-post {
    border-bottom: 2px solid #ddd;
    padding-bottom: 20px;
    margin-bottom: 20px;
}

.blog-post h3 {
    font-size: 1.8em;
    margin-bottom: 10px;
    color: #333;
}

.blog-post p {
    font-size: 1.2em;
    color: #666;
    line-height: 1.5;
}
/* Footer Styles */
footer {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}


    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="menu.php">Menu</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to Roasted Beans Cafe</h1>
            <p>Discover delicious food, cozy ambiance, and great coffee.</p>
        </div>
    </section>

    
    <section class="menu-section">
        <h2>Our Menu</h2>
        <div class="menu">
            <?php include 'fetch_menu.php'; ?>
        </div>
    </section>

    <section class="blog-section">
        <h2>Latest Blog Posts</h2>
        <div class="blog-posts">
            <?php include 'fetch_blog_posts.php'; ?>
        </div>
    </section>

   

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Our Cafe. All rights reserved.</p>
    </footer>
</body>
</html>
