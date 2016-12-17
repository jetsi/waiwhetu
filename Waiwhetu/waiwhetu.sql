-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2016 at 10:45 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `waiwhetu`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(200) NOT NULL,
  `comment_post_id` int(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `user_id`, `comment_author`, `comment_content`, `comment_status`, `comment_date`) VALUES
(120, 85, 15, 'staff jet', 'hello', 'no', '2016-10-19'),
(121, 93, 17, 'Papa', 'hi', 'no', '2016-10-25'),
(122, 93, 17, 'Papa', 'hi', 'no', '2016-10-25');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `author_name` varchar(250) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `post_title` text NOT NULL,
  `image` text NOT NULL,
  `post_content` text NOT NULL,
  `author` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `post_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `author_name`, `topic_id`, `post_title`, `image`, `post_content`, `author`, `status`, `post_date`) VALUES
(83, 17, 'Papa', NULL, 'This is Title ', 'maori-16.jpg', 'This is post content Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,\r\n\r\n', 'trustee', 'approved', '2016-10-18'),
(84, 12, 'Mark nz', NULL, 'This is title', 'maori-house.jpg', 'This is post content Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. ', 'trustee', 'approved', '2016-10-18'),
(85, 15, 'staff jet', NULL, 'Maori Dance !', 'download (2).jpg', 'Maori DanceMaori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance Maori Dance ', 'staff', 'approved', '2016-10-18'),
(91, 15, 'staff jet', NULL, 'dsfasd', 'WD-Update-Main.jpg', 'afsdfdsfdsf', 'staff', 'pending', '2016-10-24'),
(109, 17, 'Papa', NULL, 'Tested by Mr_null', '01032011063.jpg', 'This is post content Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligul... a eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc, Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt. Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna. Sed consequat, leo eget bibendum sodales, augue velit cursus nunc,', 'trustee', 'approved', '2016-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(11) NOT NULL,
  `topic_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(1) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_image` varchar(250) NOT NULL,
  `birthday` date NOT NULL,
  `post` text NOT NULL,
  `status` text NOT NULL,
  `user_role` varchar(200) NOT NULL,
  `register_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `email`, `user_image`, `birthday`, `post`, `status`, `user_role`, `register_date`) VALUES
(12, 'Mark nz', '$2y$10$3cGxanNcPlQaXk9VKci7mOVqEH.8nkYcKDqaKGalUuSe7OCpv/WV.', 'john@gmail.com', '3.jpg', '2016-08-24', 'no', 'active', 'trustee', '2016-08-26'),
(13, 'Jetsi Ngwa', '$2y$10$3cGxanNcPlQaXk9VKci7mOVqEH.8nkYcKDqaKGalUuSe7OCpv/WV.', 'me@g.c', 'me.jpg', '2016-08-09', 'no', 'active', 'member', '2016-08-26'),
(14, 'root', '$2y$10$3cGxanNcPlQaXk9VKci7mOVqEH.8nkYcKDqaKGalUuSe7OCpv/WV.', 'me@g.b', 'default_user.png', '2016-08-09', 'no', 'active', 'admin', '2016-08-26'),
(15, 'staff jet', '$2y$10$3cGxanNcPlQaXk9VKci7mOVqEH.8nkYcKDqaKGalUuSe7OCpv/WV.', 'jet@hh.cc', 'jet.jpg', '2016-08-16', 'no', 'active', 'staff', '2016-08-27'),
(16, 'jet', '$2y$10$3cGxanNcPlQaXk9VKci7mOVqEH.8nkYcKDqaKGalUuSe7OCpv/WV.', 'jet@gmail.com', 'jet.jpg', '2016-09-14', 'no', 'active', 'admin_support', '2016-09-16'),
(17, 'Papa 1', '$2y$10$3cGxanNcPlQaXk9VKci7mOVqEH.8nkYcKDqaKGalUuSe7OCpv/WV.', 'trustee@gmail.com', '2.jpg', '2013-12-01', 'no', 'active', 'trustee', '2016-10-17'),
(18, 'subscriber', '$2y$10$3cGxanNcPlQaXk9VKci7mOVqEH.8nkYcKDqaKGalUuSe7OCpv/WV.', 'sub@gmail.com', '', '0000-00-00', '', 'active', 'subscriber', '0000-00-00'),
(19, 'fdgf', '$2y$10$Q.zumCCByGhOB2Hp8vZqXOKb3A17DzpkQY6XjSG0dsqpcBMK0SHWS', 'jet@hh.ch', '', '2016-10-18', 'no', 'inactive', 'staff', '2016-10-24'),
(20, 'fdsf', '$2y$10$jWjKFFpFz6Nfd2H2zIP6IOP0BZn3E8IIYuilusc9WFBzgK4kPgsDS', 'me@g.ch', '', '2016-10-14', 'no', 'inactive', 'author', '2016-10-24'),
(21, 'jeto', '$2y$10$YJp.MPTH4AVuaUhWk.Qw0.YuSFi/3TT7AQzmvkBx1/TUkidlSF/Q.', 'test@gg.gg', 'WD-Update-Main.jpg', '2016-10-05', 'no', 'active', 'admin_support', '2016-10-24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
