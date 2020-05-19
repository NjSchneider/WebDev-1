-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2020 at 07:40 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `article_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_content`, `article_timestamp`) VALUES
(1, 'Homemade Yogurt!', 'Today we made homemade yogurt with fruit topping! Since I make mine by the gallon I store the yogurt in quart jars and make the fruit topping and store in a separate jar. The fruit i used was from last season in the freezer. Here\'s a healthy topping to make for yogurt, ice cream or your pancakes. Enjoy!<br />\r\n<br />\r\n1-1/2 cups fresh or frozen fruit<br />\r\n3 tablespoons chia seeds<br />\r\n1/2 cup water<br />\r\n2-4 tablespoons honey or maple syrup<br />\r\n<br />\r\nCombine all ingredients in a medium saucepan over medium heat. Bring to a boil, reduce heat and simmer until sauce is thickened.<br />\r\nSpoon into yogurt jars (about 2 tablespoons per single-serving jar) or serve over pancakes or ice cream.', 1556811319),
(2, 'seedlings', 'Today we are startng the seedlings. Onions and celery are first then on to peppers. Chickens are now back to laying about 1 to 2 dozen a day!', 1556811552),
(3, 'Test 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur facilisis eu justo non efficitur. Fusce eros nibh, lacinia a ipsum vel, condimentum facilisis enim. Suspendisse vehicula congue erat. Nunc vel ligula et orci lacinia semper et sit amet libero. Mauris viverra vulputate laoreet. Etiam convallis, ipsum quis maximus molestie, ipsum eros fermentum libero, id elementum dolor felis sed sapien. Quisque vel ex fermentum leo pretium placerat. Pellentesque sodales mauris convallis, placerat magna nec, condimentum justo. Fusce in elementum est. Curabitur non tristique ligula. Vestibulum porta nec mauris sit amet interdum.<br />\r\n<br />\r\nNam lorem mi, mattis et maximus eu, volutpat eget dui. Phasellus congue lorem augue, sed ornare est tempor ut. Vivamus quis cursus ipsum. Pellentesque laoreet quam a est ultricies convallis. Cras posuere a ligula et bibendum. Ut et ante eros. Duis sed cursus erat.<br />\r\n<br />\r\nAliquam id velit justo. Pellentesque non ante pellentesque, faucibus justo nec, facilisis erat. Nunc lacinia ante non enim auctor, quis egestas tortor scelerisque. Maecenas scelerisque fermentum elit nec egestas. Quisque vel eleifend odio, at suscipit turpis. Suspendisse massa sapien, vehicula vitae lectus eu, placerat feugiat leo. Mauris pellentesque eu odio at semper. Suspendisse sit amet ante non quam euismod vestibulum. Proin et orci et ipsum ullamcorper pulvinar nec at odio. Donec est felis, pellentesque vel varius eu, tempus vel turpis. Quisque tempor ultrices ligula, eget accumsan tellus porta id. Quisque eu malesuada ante. Suspendisse potenti. Nunc facilisis nisi in enim bibendum interdum. Fusce pellentesque lorem libero. Mauris leo erat, hendrerit eu cursus quis, tempus eleifend ipsum.<br />\r\n<br />\r\nPraesent rhoncus sem vitae ornare ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In semper nibh laoreet ante gravida, ut blandit ipsum imperdiet. Morbi nisl nulla, commodo sit amet metus eu, mollis maximus mauris. Nullam pharetra neque est, sit amet euismod ex commodo sed. Donec interdum id augue a finibus. Nullam sit amet arcu in nisi ullamcorper fermentum. In non iaculis est, sit amet fermentum magna. Nunc auctor scelerisque ligula quis consequat. Nunc tellus urna, cursus in bibendum id, fringilla et odio. Vestibulum bibendum leo ligula, non cursus ex lobortis in. Nulla at ex nec magna sodales pellentesque in at ex. Vivamus facilisis est at hendrerit molestie. Phasellus euismod elit ex, ac hendrerit neque pellentesque posuere.<br />\r\n<br />\r\nPhasellus cursus pellentesque tristique. Etiam ex nisl, pellentesque vitae viverra quis, ultricies ac felis. Nulla feugiat iaculis sem, ut commodo nisl feugiat ac. Cras nibh augue, sagittis id nunc varius, tincidunt semper tortor. Fusce ultricies, urna a ullamcorper faucibus, risus justo porta nunc, et blandit nisl augue at turpis. Praesent cursus ut nunc sed facilisis. Vivamus elementum consectetur nulla, in congue est auctor vel.', 1557885644),
(4, 'Test 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur facilisis eu justo non efficitur. Fusce eros nibh, lacinia a ipsum vel, condimentum facilisis enim. Suspendisse vehicula congue erat. Nunc vel ligula et orci lacinia semper et sit amet libero. Mauris viverra vulputate laoreet. Etiam convallis, ipsum quis maximus molestie, ipsum eros fermentum libero, id elementum dolor felis sed sapien. Quisque vel ex fermentum leo pretium placerat. Pellentesque sodales mauris convallis, placerat magna nec, condimentum justo. Fusce in elementum est. Curabitur non tristique ligula. Vestibulum porta nec mauris sit amet interdum.<br />\r\n<br />\r\nNam lorem mi, mattis et maximus eu, volutpat eget dui. Phasellus congue lorem augue, sed ornare est tempor ut. Vivamus quis cursus ipsum. Pellentesque laoreet quam a est ultricies convallis. Cras posuere a ligula et bibendum. Ut et ante eros. Duis sed cursus erat.<br />\r\n<br />\r\nAliquam id velit justo. Pellentesque non ante pellentesque, faucibus justo nec, facilisis erat. Nunc lacinia ante non enim auctor, quis egestas tortor scelerisque. Maecenas scelerisque fermentum elit nec egestas. Quisque vel eleifend odio, at suscipit turpis. Suspendisse massa sapien, vehicula vitae lectus eu, placerat feugiat leo. Mauris pellentesque eu odio at semper. Suspendisse sit amet ante non quam euismod vestibulum. Proin et orci et ipsum ullamcorper pulvinar nec at odio. Donec est felis, pellentesque vel varius eu, tempus vel turpis. Quisque tempor ultrices ligula, eget accumsan tellus porta id. Quisque eu malesuada ante. Suspendisse potenti. Nunc facilisis nisi in enim bibendum interdum. Fusce pellentesque lorem libero. Mauris leo erat, hendrerit eu cursus quis, tempus eleifend ipsum.', 1557885663),
(5, 'Test 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur facilisis eu justo non efficitur. Fusce eros nibh, lacinia a ipsum vel, condimentum facilisis enim. Suspendisse vehicula congue erat. Nunc vel ligula et orci lacinia semper et sit amet libero. Mauris viverra vulputate laoreet. Etiam convallis, ipsum quis maximus molestie, ipsum eros fermentum libero, id elementum dolor felis sed sapien. Quisque vel ex fermentum leo pretium placerat. Pellentesque sodales mauris convallis, placerat magna nec, condimentum justo. Fusce in elementum est. Curabitur non tristique ligula. Vestibulum porta nec mauris sit amet interdum.<br />\r\n<br />\r\nNam lorem mi, mattis et maximus eu, volutpat eget dui. Phasellus congue lorem augue, sed ornare est tempor ut. Vivamus quis cursus ipsum. Pellentesque laoreet quam a est ultricies convallis. Cras posuere a ligula et bibendum. Ut et ante eros. Duis sed cursus erat.<br />\r\n<br />\r\nAliquam id velit justo. Pellentesque non ante pellentesque, faucibus justo nec, facilisis erat. Nunc lacinia ante non enim auctor, quis egestas tortor scelerisque. Maecenas scelerisque fermentum elit nec egestas. Quisque vel eleifend odio, at suscipit turpis. Suspendisse massa sapien, vehicula vitae lectus eu, placerat feugiat leo. Mauris pellentesque eu odio at semper. Suspendisse sit amet ante non quam euismod vestibulum. Proin et orci et ipsum ullamcorper pulvinar nec at odio. Donec est felis, pellentesque vel varius eu, tempus vel turpis. Quisque tempor ultrices ligula, eget accumsan tellus porta id. Quisque eu malesuada ante. Suspendisse potenti. Nunc facilisis nisi in enim bibendum interdum. Fusce pellentesque lorem libero. Mauris leo erat, hendrerit eu cursus quis, tempus eleifend ipsum.<br />\r\n<br />\r\nPraesent rhoncus sem vitae ornare ornare. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In semper nibh laoreet ante gravida, ut blandit ipsum imperdiet. Morbi nisl nulla, commodo sit amet metus eu, mollis maximus mauris. Nullam pharetra neque est, sit amet euismod ex commodo sed. Donec interdum id augue a finibus. Nullam sit amet arcu in nisi ullamcorper fermentum. ', 1557885681),
(6, 'Test 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur facilisis eu justo non efficitur. Fusce eros nibh, lacinia a ipsum vel, condimentum facilisis enim. Suspendisse vehicula congue erat. Nunc vel ligula et orci lacinia semper et sit amet libero. Mauris viverra vulputate laoreet. Etiam convallis, ipsum quis maximus molestie, ipsum eros fermentum libero, id elementum dolor felis sed sapien. Quisque vel ex fermentum leo pretium placerat. Pellentesque sodales mauris convallis, placerat magna nec, condimentum justo. Fusce in elementum est. Curabitur non tristique ligula. Vestibulum porta nec mauris sit amet interdum.<br />\r\n<br />\r\nNam lorem mi, mattis et maximus eu, volutpat eget dui. Phasellus congue lorem augue, sed ornare est tempor ut. Vivamus quis cursus ipsum. Pellentesque laoreet quam a est ultricies convallis. Cras posuere a ligula et bibendum. Ut et ante eros. Duis sed cursus erat.', 1557885698),
(7, 'Test 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur facilisis eu justo non efficitur. Fusce eros nibh, lacinia a ipsum vel, condimentum facilisis enim. Suspendisse vehicula congue erat. Nunc vel ligula et orci lacinia semper et sit amet libero. Mauris viverra vulputate laoreet. Etiam convallis, ipsum quis maximus molestie, ipsum eros fermentum libero, id elementum dolor felis sed sapien. Quisque vel ex fermentum leo pretium placerat. Pellentesque sodales mauris convallis, placerat magna nec, condimentum justo. Fusce in elementum est. Curabitur non tristique ligula. Vestibulum porta nec mauris sit amet interdum.<br />\r\n<br />\r\nNam lorem mi, mattis et maximus eu, volutpat eget dui. Phasellus congue lorem augue, sed ornare est tempor ut. Vivamus quis cursus ipsum. Pellentesque laoreet quam a est ultricies convallis. Cras posuere a ligula et bibendum. Ut et ante eros. Duis sed cursus erat.<br />\r\n<br />\r\nAliquam id velit justo. Pellentesque non ante pellentesque, faucibus justo nec, facilisis erat. Nunc lacinia ante non enim auctor, quis egestas tortor scelerisque. Maecenas scelerisque fermentum elit nec egestas. Quisque vel eleifend odio, at suscipit turpis. ', 1557885718);

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `fruit_id` int(11) NOT NULL,
  `fruit_title` varchar(255) NOT NULL,
  `fruit_image` varchar(255) NOT NULL,
  `fruit_tag` text NOT NULL,
  `fruit_content` text NOT NULL,
  `update_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`fruit_id`, `fruit_title`, `fruit_image`, `fruit_tag`, `fruit_content`, `update_timestamp`) VALUES
(1, 'Cantoulope', 'images/cantoulope.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo.', 1557351507),
(2, 'Strawberries', 'images/strawberries.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo.', 1557351347),
(3, 'Watermelon', 'images/watermelon.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo.', 1557351481);

-- --------------------------------------------------------

--
-- Table structure for table `poultry`
--

CREATE TABLE `poultry` (
  `poultry_id` int(11) NOT NULL,
  `poultry_title` varchar(255) NOT NULL,
  `poultry_image` varchar(255) NOT NULL,
  `poultry_tag` text NOT NULL,
  `poultry_content` text NOT NULL,
  `update_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poultry`
--

INSERT INTO `poultry` (`poultry_id`, `poultry_title`, `poultry_image`, `poultry_tag`, `poultry_content`, `update_timestamp`) VALUES
(1, 'Eggs', 'images/eggs.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae massa auctor, facilisis arcu sit amet, tristique lacus. Integer at iaculis tellus. Nullam vitae nisl commodo, pellentesque metus ut, ullamcorper tellus. Cras quis arcu efficitur, rhoncus mauris eu, fermentum massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo.', 1557353726),
(2, 'Chickens', 'images/chickens.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae massa auctor, facilisis arcu sit amet, tristique lacus. Integer at iaculis tellus. Nullam vitae nisl commodo, pellentesque metus ut, ullamcorper tellus. Cras quis arcu efficitur, rhoncus mauris eu, fermentum massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo.', 1557353735),
(3, 'Turkeys', 'images/turkey.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae massa auctor, facilisis arcu sit amet, tristique lacus. Integer at iaculis tellus. Nullam vitae nisl commodo, pellentesque metus ut, ullamcorper tellus. Cras quis arcu efficitur, rhoncus mauris eu, fermentum massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo.', 1557353786);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_content` text NOT NULL,
  `product_link` varchar(255) NOT NULL,
  `update_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_image`, `product_title`, `product_content`, `product_link`, `update_timestamp`) VALUES
(1, 'images/strawberries.jpg', 'Strawberries', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo.', 'fruits.php', 0),
(2, 'images/peppers.jpg', 'Peppers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo.', 'vegetables.php', 0),
(3, 'images/eggs.jpg', 'Eggs', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo.', 'poultry.php', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`) VALUES
(1, 'admin', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `vegetable_id` int(11) NOT NULL,
  `vegetable_title` varchar(255) NOT NULL,
  `vegetable_image` varchar(255) NOT NULL,
  `vegetable_tag` text NOT NULL,
  `vegetable_content` text NOT NULL,
  `update_timestamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`vegetable_id`, `vegetable_title`, `vegetable_image`, `vegetable_tag`, `vegetable_content`, `update_timestamp`) VALUES
(1, 'Beets', 'images/beets.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae massa auctor, facilisis arcu sit amet, tristique lacus. Integer at iaculis tellus. Nullam vitae nisl commodo, pellentesque metus ut, ullamcorper tellus. Cras quis arcu efficitur, rhoncus mauris eu, fermentum massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo.', 1557352555),
(2, 'Peppers', 'images/peppers.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae massa auctor, facilisis arcu sit amet, tristique lacus. Integer at iaculis tellus. Nullam vitae nisl commodo, pellentesque metus ut, ullamcorper tellus. Cras quis arcu efficitur, rhoncus mauris eu, fermentum massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo.', 1557352583),
(3, 'Purple Beans', 'images/beans.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vitae massa auctor, facilisis arcu sit amet, tristique lacus. Integer at iaculis tellus. Nullam vitae nisl commodo, pellentesque metus ut, ullamcorper tellus. Cras quis arcu efficitur, rhoncus mauris eu, fermentum massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eu lectus sapien. Etiam tempus augue sit amet augue molestie rutrum. Sed iaculis convallis ante eu ornare. Etiam augue mauris, tempor vel commodo vel, accumsan at nisi. Nam congue est gravida, bibendum ligula ut, malesuada justo.', 1557352607);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`fruit_id`);

--
-- Indexes for table `poultry`
--
ALTER TABLE `poultry`
  ADD PRIMARY KEY (`poultry_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `vegetables`
--
ALTER TABLE `vegetables`
  ADD PRIMARY KEY (`vegetable_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `fruit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `poultry`
--
ALTER TABLE `poultry`
  MODIFY `poultry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vegetables`
--
ALTER TABLE `vegetables`
  MODIFY `vegetable_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
