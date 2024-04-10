-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost: 3306
-- Generation Time: Apr 10, 2024 at 06:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presentation`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`, `author`, `created_at`) VALUES
(1, 'The Art of Coffee Making', 'The Art of Coffee Making is a symphony of aromas and flavors, where beans are meticulously roasted to perfection. Each grind and pour is a dance of precision, creating rich crema and a velvety texture. The final cup, a masterpiece of balance, awakens the senses and inspires moments of bliss.', 'CafeOwner123', '2024-04-10 15:45:32'),
(2, 'Healthy Eating at Our Cafe', 'Healthy Eating at Our Cafe celebrates fresh ingredients and mindful choices. Our menu is a canvas of vibrant salads, nourishing bowls, and wholesome delights. From locally sourced produce to heart-friendly options, every dish is crafted with care, inviting you to savor goodness with every bite.', 'NutritionExpert', '2024-04-10 15:45:32'),
(3, 'Are there stories behind any menu items?', 'In a mystical village, \"The Enchanted Teapot\" cafe emerged, weaving magic into dishes like the \"Whispering Forest Salad\" with foraged berries and the \"Spellbound Saffron Soup\" that sparked dreams. Its teas, from soothing chamomile to energizing ginger, drew seekers of enchantment, fostering tales and friendships in every sip.', 'Many', '2024-04-09 16:27:08');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `name`, `description`, `price`) VALUES
(1, 'Cappuccino', 'Espresso topped with frothy steamed milk', 3.99),
(2, 'Chicken Sandwich', 'Grilled chicken breast with lettuce, tomato, and mayo', 8.99),
(3, 'Chocolate Cake', 'Decadent chocolate cake with a rich ganache', 5.49),
(10, 'Chai Tea Latte', 'Black tea infused with cinnamon, clove and other warming spices', 4.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','editor','customer') DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
