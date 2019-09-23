-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2019 at 03:57 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `typinglearner`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_records`
--

DROP TABLE IF EXISTS `all_records`;
CREATE TABLE IF NOT EXISTS `all_records` (
  `user_id` int(11) NOT NULL,
  `reoord_id` int(11) NOT NULL AUTO_INCREMENT,
  `paragraph_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `speed` float NOT NULL,
  `total_words` int(11) NOT NULL,
  `correct_words` int(11) NOT NULL,
  `wrong_words` int(11) NOT NULL,
  `accuracy` float NOT NULL,
  PRIMARY KEY (`reoord_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `paragraph`
--

DROP TABLE IF EXISTS `paragraph`;
CREATE TABLE IF NOT EXISTS `paragraph` (
  `para_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `paragraph` varchar(12000) NOT NULL,
  PRIMARY KEY (`para_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `paragraph`
--

INSERT INTO `paragraph` (`para_id`, `title`, `paragraph`) VALUES
(1, 'Why do we classify organism?', 'there is vast number of living organism in the biosphere and they have great diversity in shape, size and form and it is practically not possible to advisable to study the organism by classifying them in orderly manner, so it is important to classify the organism'),
(2, 'India', 'India is a highly populated country located in the center of South Asia. It is an extremely diverse nation with major differences in culture, climate, religion and languages.\r\n\r\nIndia has chosen various symbols that portray our nation’s image. Indian National flag is tricolored – saffron, white and green. The Ashok chakra in the Centre has a 24 spoke wheel in navy blue colour that denotes righteousness.\r\n\r\nOur national anthem is Jana Ganna Mana and the national song is Vande Matram respectively. Our national emblem consists is of four lions sitting back to back on a cylindrical base that has four Ashok chakras on each side out of which only one is visible in the front. Three lions are visible and one is hidden. It is the symbol of sovereignty and denotes strength and courage.\r\n\r\nThe national animal of India is Bengal Tiger which is a symbol of strength, grace and agility, unparalleled by other animals. National bird of India is the beautiful, colourful and graceful Peacock. It symbolizes elegance. National flower of India is lotus that symbolizes purity. It represents beauty and has special Importance in Hindi religion and mythology. National fruit of our nation is Mango and it is the symbol of tropical climate in our country. Our national tree is banyan tree that symbolizes immortality and country’s unity. Ganga is our national river as in Hinduism it is the most sacred river. Elephant has been declared our national heritage animal in 2010. Ganga river dolphin is declared our national aquatic animal and it can only survive in clean water so it is said that this mammal represents the purity of our holy river Ganga. National reptile of our nation is snake.\r\n\r\nThese symbols represent the essence of our nation.\r\n\r\n'),
(3, 'Tiger', 'The tiger is a wild animal. It lives in deep forests. It is a carnivorous mammal. It preys on animals like the deer, buffaloes, boar and goats. Other smaller animals of the forest are also preyed on by tigers.\r\n\r\nThe tiger chases its prey and kills it, and then feeds on its kill. Other animals too feed on the carcass after the tiger feeds on it. When a tigress hunts an animal for food, she and her cubs feed on it.\r\n\r\nThe coat of the tiger is orange in colour with black stripes. Each tiger has a unique set of stripes on its coat. A tiger can, therefore, be identified by its stripes.\r\n\r\nThe tiger is also called a big cat. There are many sub-species of the tiger in the world. In India the royal Bengal tiger is found. It is a critically endangered animal. It is, therefore, a protected species, and is listed in Schedule I of the Indian Wild life (Protection) Act, 1972. Many factors have contributed to the fall in the population of the tiger. The tiger sits at the apex of the food chain. When tiger numbers fall, a disturbance to the food chain is caused.'),
(4, 'Earth day', 'Many countries around the world celebrate Earth Day. It is a day that is meant to raise awareness and appreciation about the Earth\'s natural environment.\r\n\r\nThe first Earth Day was held in the USA. It was founded by United States Senator Gaylord Nelson as an environmental teach-in - a sort of general educational forum or seminar. That was on April 22, 1970. While this first Earth Day was focused on the United States, an organization launched by Denis Hayes, who was the original national coordinator in 1970, took it international in 1990 and organized events in 141 nations.\r\n\r\nEarth Day is now coordinated globally by the Earth Day Network, and is celebrated in more than 175 countries every year. Numerous communities celebrate Earth Week, an entire week of activities focused on environmental issues. In 2009, the United Nations designated April 22 International Mother Earth Day.');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

DROP TABLE IF EXISTS `records`;
CREATE TABLE IF NOT EXISTS `records` (
  `user_id` int(11) DEFAULT NULL,
  `best_id` int(11) NOT NULL,
  `worst_id` int(11) NOT NULL,
  `average` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_password` varchar(1000) NOT NULL,
  `age` varchar(6) NOT NULL,
  `country` varchar(40) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf16;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `user_password`, `age`, `country`, `profile_pic`) VALUES
(18, 'Sahil', 'Verma', 'iamsahil1910@gmail.com', '$2y$10$UsVanjsSFxE3iq2jH6nD3eISOutsa7jvaCFFjwsddsxHt/LxFmQQu', '19', 'India', ''),
(21, 'Sahil', 'Pahuja', 'pahuja@gmail.com', '$2y$10$XpokZNdzvp0qMXGxSgf7fOyQlIhxyjlTMjwJUNezELQFbYwyWFndu', '19', 'India', ''),
(22, 'Rahul', 'Gurung', 'rahul@gmail.com', '$2y$10$VkKPC6wEK7CNBwApbyrNr.NSpMvjWOYaaue/z/JGDeC89BATXIWu2', '21', 'India', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
