-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2016 at 06:25 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `img` varchar(30) NOT NULL,
  `id` varchar(5) NOT NULL,
  `type` varchar(20) NOT NULL,
  `title` varchar(40) NOT NULL,
  `brief` varchar(100) NOT NULL,
  `discription` varchar(1500) NOT NULL,
  `Inclusions` varchar(150) NOT NULL,
  `Venue` varchar(100) NOT NULL,
  `timings` varchar(50) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `cost` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`img`, `id`, `type`, `title`, `brief`, `discription`, `Inclusions`, `Venue`, `timings`, `duration`, `city`, `cost`) VALUES
('img/bowling.jpg', '1', 'Bowling', 'Fun of crazy bowling', 'Have unlimited fun and entertainment with this activity with your best friends', 'Come to this place in your leisure time and have loads of fun with this bowling activity.This will offer you limitless entertainment. The duration of the activity is about 10 minutes. Kids above 7 years of age can participate in the event.', '20 balls, Instructor', 'SH-17, Krazy Bowl, Columbia Asia Hospital', 'everyday from 12pm to 9pm', '10 mins', 'Mysuru', 100),
('img/zoo.jpg', '2', 'city tour', 'Half day Sightseeing', 'Make the best use of this opportunity to explore Mysore with family and friends', 'During city tour you will be visiting places like Brindavan Gardens, Bird Sanctury and Srirangapatna. The cost is 1,200 per car, that can accommodate 3 people.', 'A/C indica car, Transport, Water bottle', 'Dewans Road, Sunnadakeri, Lakshmipuram', 'Everyday 3pm', '5 hrs', 'Mysuru', 1200),
('img/palace1.jpg', '3', 'city tour', 'Explore mysore''s historical locales', 'Visit the interesting locales of the magnificent and royal city of mysuru', 'Spend time at the zoo, Chamundi hills and the asia''s second largest church St. Philomina. The cost of Rs. 1400 is for 4 people. ', 'Transport by indica', 'Shurabi Tours and Travels,Maharaja Shopping Complex, Nilgiri Rd,Lashkar Mohalla, Nazarabad', 'Everyday 8pm', '14 hrs', 'Mysuru', 1400),
('img/snow_park.jpg', '4', 'Snow park', 'Snow park entry ticket', 'Enjoy the different types of snow activities at the Snow Park', 'Beat the heat at our snow park with your family and friends. Create snow caves and igloos and unleash your creativity. We offer a mixture of real snow in -5'' C Temperature ', 'DJ Dancing on Snow, Igloo and Snowman, Sledging Car, Slide on Ice, Snow Thunder', 'Snow park, Titos'' Lane-2, Baga', 'Everyday 11am to 11pm', '12hrs', 'Goa', 750),
('img/scuba_diving.jpg', '5', 'Scuba diving', 'Scuba diving session - 7 hours', 'Explore the amazing life underwater as you engage in a session of scuba diving.', 'Get training from experienced instructors to avoid any unnecessary hindrances while scuba diving. You will also be able to take a boat ride for sight seeing ', 'Beer, Food, Juices, Life jackets, One-to-one training, photos and videos on FB page, pick & drop services, Snacks and Water', 'Calangute', 'Everyday 7am', '7 hrs', 'Goa', 3200);

-- --------------------------------------------------------

--
-- Table structure for table `activity_review`
--

CREATE TABLE IF NOT EXISTS `activity_review` (
  `ar_id` int(5) NOT NULL,
  `a_id` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `review` varchar(2000) NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booked_activity`
--

CREATE TABLE IF NOT EXISTS `booked_activity` (
  `book_id` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `activity_id` varchar(5) NOT NULL,
  `no_of_people` int(5) NOT NULL,
  `date` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_activity`
--

INSERT INTO `booked_activity` (`book_id`, `email`, `activity_id`, `no_of_people`, `date`) VALUES
(1, 'ravishkg@gmail.com', '4', 1, '00:20:16'),
(2, 'ravishkg@gmail.com', '4', 1, '00:20:16'),
(3, 'ravishkg@gmail.com', '4', 7, '00:20:16'),
(4, 'ravishkg@gmail.com', '4', 2, '00:20:16'),
(5, 'ravishkg@gmail.com', '4', 2, '00:20:16'),
(6, 'ravishkg@gmail.com', '', 2, '00:20:16'),
(7, '', '', 2, '00:20:16'),
(8, '', '', 2, '00:20:16'),
(9, '', '', 2, '00:20:16'),
(10, '', '', 2, '00:20:16'),
(11, '', '', 2, '00:20:16'),
(12, '', '', 2, '00:20:16'),
(13, '', '', 2, '00:20:16'),
(14, 'vsm021294@gmail.com', '', 2, '00:20:16'),
(15, 'vsm021294@gmail.com', '', 2, '00:20:16'),
(16, 'vsm021294@gmail.com', '', 1, '00:20:16'),
(17, 'vsm021294@gmail.com', '', 1, '00:20:16'),
(18, 'vsm021294@gmail.com', '', 1, '00:20:16'),
(19, 'vsm021294@gmail.com', '', 1, '00:20:16'),
(20, 'vsm021294@gmail.com', '1', 1, '00:20:16'),
(21, 'sagar@gmail.com', '1', 1, '00:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `booked_package`
--

CREATE TABLE IF NOT EXISTS `booked_package` (
  `email` varchar(30) NOT NULL,
  `package_id` varchar(5) NOT NULL,
  `no_of_people` int(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_package`
--

INSERT INTO `booked_package` (`email`, `package_id`, `no_of_people`, `date`) VALUES
('vsm021294@gmail.com', '', 3, '2016-04-21'),
('vsm021294@gmail.com', '1', 1, '2016-04-07'),
('sagar@gmail.com', '4', 2, '2016-04-13'),
('sagar@gmail.com', '2', 4, '2016-05-14'),
('sagar@gmail.com', '3', 1, '2016-04-20'),
('sagar@gmail.com', '', 1, '2016-04-19'),
('sagar@gmail.com', '1', 1, '2016-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `booked_rooms`
--

CREATE TABLE IF NOT EXISTS `booked_rooms` (
  `bookid` int(4) NOT NULL,
  `email` varchar(40) NOT NULL,
  `hotel_id` varchar(5) NOT NULL,
  `no_of_rooms` int(5) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_rooms`
--

INSERT INTO `booked_rooms` (`bookid`, `email`, `hotel_id`, `no_of_rooms`, `checkin`, `checkout`) VALUES
(1, 'vsm021294@gmail.com', '1', 2, '2016-04-05', '2016-04-06'),
(2, 'vsm021294@gmail.com', '2', 2, '2016-04-04', '2016-04-06'),
(7, 'ravishkg@gmail.com', '3', 1, '2016-04-03', '2016-04-05'),
(8, 'ravishkg@gmail.com', '2', 5, '2016-04-05', '2016-04-08'),
(9, 'ravishkg@gmail.com', '1', 1, '2016-04-05', '2016-04-06'),
(10, 'ravishkg@gmail.com', '3', 1, '2016-04-01', '2016-04-07'),
(11, 'ravishkg@gmail.com', '2', 1, '2016-04-29', '2016-04-07'),
(12, 'vsm021294@gmail.com', '9', 1, '2016-04-13', '2016-04-14'),
(13, 'vsm021294@gmail.com', '9', 1, '2016-04-05', '2016-04-06'),
(14, 'vsm021294@gmail.com', '9', 1, '2016-04-05', '2016-04-06'),
(15, 'vsm021294@gmail.com', '6', 2, '2016-04-05', '2016-04-14'),
(16, 'vsm021294@gmail.com', '6', 2, '2016-04-12', '2016-04-13'),
(17, 'vsm021294@gmail.com', '4', 3, '2016-04-06', '2016-04-14'),
(18, 'vsm021294@gmail.com', '4', 3, '2016-04-06', '2016-04-14'),
(19, 'vsm021294@gmail.com', '4', 3, '2016-04-06', '2016-04-14'),
(20, 'ravishkg@gmail.com', '3', 2, '2016-04-03', '2016-04-04'),
(21, 'vsm021294@gmail.com', '6', 1, '2016-04-07', '2016-04-08'),
(22, 'vsm021294@gmail.com', '6', 1, '2016-04-07', '2016-04-08'),
(23, 'vsm021294@gmail.com', '1', 2, '2016-03-07', '2016-04-04'),
(24, 'ravishkg@gmail.com', '1', 2, '2016-03-07', '2016-04-04'),
(25, 'ravishkg@gmail.com', '1', 2, '2016-03-07', '2016-04-04'),
(26, 'ravishkg@gmail.com', '6', 2, '2016-04-04', '2016-04-05'),
(27, 'ravishkg@gmail.com', '6', 2, '2016-04-04', '2016-04-05'),
(29, 'ravishkg@gmail.com', '2', 2, '2016-04-21', '2016-04-15'),
(30, 'ravishkg@gmail.com', '2', 2, '2016-04-21', '2016-04-15'),
(31, 'ravishkg@gmail.com', '6', 2, '2016-04-11', '2016-04-12'),
(32, 'ravishkg@gmail.com', '1', 1, '0000-00-00', '0000-00-00'),
(33, 'rishab@gmail.com', '9', 2, '2016-04-13', '2016-04-15'),
(34, 'sagar@gmail.com', '7', 2, '2016-04-15', '2016-04-17'),
(35, 'sagar@gmail.com', '4', 1, '2016-05-25', '2016-05-28'),
(36, 'sagar@gmail.com', '11', 2, '2016-05-09', '2016-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `holiday_review`
--

CREATE TABLE IF NOT EXISTS `holiday_review` (
  `hl_id` int(4) NOT NULL,
  `p_id` varchar(4) NOT NULL,
  `email` varchar(40) NOT NULL,
  `review` varchar(1500) NOT NULL,
  `rating` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holiday_review`
--

INSERT INTO `holiday_review` (`hl_id`, `p_id`, `email`, `review`, `rating`) VALUES
(1, '4', 'sagar@gmail.com', 'Awesome package!!!\r\nGreat arrangements....A must go package!!', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE IF NOT EXISTS `hotel` (
  `id` varchar(5) NOT NULL,
  `name` varchar(40) NOT NULL,
  `no_of_rooms` int(32) NOT NULL,
  `area` varchar(60) NOT NULL,
  `city` varchar(20) NOT NULL,
  `cost` int(6) NOT NULL,
  `img1` varchar(30) NOT NULL,
  `img2` varchar(30) NOT NULL,
  `img3` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `name`, `no_of_rooms`, `area`, `city`, `cost`, `img1`, `img2`, `img3`) VALUES
('1', 'Hotel Imperior Lake View', 18, 'Nehru Park Boulevard Road', 'Srinagar', 1450, 'img\\4.jpg', 'img\\5.jpg', 'img\\61.jpg'),
('10', 'Olde Main Bellevue Heritage Hotel', 25, 'Chowrasta, The Mall, Above KFC', 'Darjeeling', 1626, 'img\\28.jpg', 'img\\29.jpg', 'img\\30.jpg'),
('11', 'Hotel Sonar Bangla', 28, '1/1, Robertson Road', 'Darjeeling', 2513, 'img\\31.jpg', 'img\\32.jpg', 'img\\33.jpg'),
('2', 'The Residency Hotel', 34, '"M.S. Mall", Residency Road', 'Srinagar', 1400, 'img\\7.jpg', 'img\\8.jpg', 'img\\9.jpg'),
('3', 'Hotel Star of Kashmir', 23, ' Hyderpora Chowk, Near Bridge Opposite Al-Hyder Complex', 'Srinagar', 1350, 'img\\1.jpg', 'img\\2.jpg', 'img\\3.jpg'),
('4', 'Hotel Regaalis', 10, ' 13-14, Vinobha Road', 'Mysore', 1550, 'img\\10.jpg', 'img\\11.jpg', 'img\\12.jpg'),
('5', 'Sandesh The Prince', 30, '#3, Nethra Nivas, Nazarbad Main Road', 'Mysore', 1500, 'img\\13.jpg', 'img\\14.jpg', 'img\\15.jpg'),
('6', 'Cidade De Goa', 22, 'Cidade de Goa, Vainguinim Beach', 'Goa', 7196, 'img\\16.jpg', 'img\\17.jpg', 'img\\18.jpg'),
('7', 'Vivanta By Taj - Fort Aguada', 23, ' Candolim, Sinquerim Road, Bardez', 'Goa', 10860, 'img\\19.jpg', 'img\\20.jpg', 'img\\21.jpg'),
('8', 'Hotel Mira', 30, 'Dr Afonso Road, Umtavaddo, Bardez, Calangute', 'Goa', 1542, 'img\\22.jpg', 'img\\23.jpg', 'img\\24.jpg'),
('9', 'MAYFAIR Darjeeling', 23, 'The Mall, Opposite Governor House', 'Darjeeling', 10707, 'img\\25.jpg', 'img\\26.jpg', 'img\\27.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_review`
--

CREATE TABLE IF NOT EXISTS `hotel_review` (
  `hr_id` int(4) NOT NULL,
  `h_id` varchar(5) NOT NULL,
  `email` varchar(40) NOT NULL,
  `review` varchar(2000) NOT NULL,
  `rating` int(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_review`
--

INSERT INTO `hotel_review` (`hr_id`, `h_id`, `email`, `review`, `rating`) VALUES
(1, '1', 'vsm021294@gmail.com', 'Nice Hotel!!\r\nDelicious Food!\r\n', 3),
(2, '1', 'ravishkg@gmail.com', 'Good but not excellent!\r\nRoom Heaters must be installed.\r\n', 4),
(3, '3', 'ravishkg@gmail.com', 'Awesome hotel!\r\nSpacious rooms!\r\n', 4),
(4, '3', 'ravishkg@gmail.com', 'Sucks....\r\n', 1),
(5, '2', 'ravishkg@gmail.com', 'Good\r\n', 4),
(6, '6', 'ravishkg@gmail.com', 'Excellent\r\n', 5),
(7, '6', 'ravishkg@gmail.com', 'Best Hotel', 4),
(8, '3', 'ravishkg@gmail.com', 'Excellent!!!!!\r\n', 5),
(9, '6', 'ravishkg@gmail.com', 'Awesome Hotel!!!!', 4);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `img_id` tinyint(3) NOT NULL,
  `img_type` varchar(25) NOT NULL,
  `img` blob NOT NULL,
  `img_name` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`img_id`, `img_type`, `img`, `img_name`) VALUES
(1, '', '', ''),
(2, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `id` varchar(5) NOT NULL,
  `img` varchar(30) NOT NULL,
  `img1` varchar(30) NOT NULL,
  `destn` varchar(20) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(3000) NOT NULL,
  `duration` varchar(20) NOT NULL,
  `cost_per_person` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `img`, `img1`, `destn`, `title`, `description`, `duration`, `cost_per_person`) VALUES
('1', 'img/p1.jpg', 'img/p11.jpg', 'Darjeeling', 'Sikkim & Darjeeling Delight', 'Gangtok(2N) Darjeeling(3N) \r\n3 star hotels included in package\r\n\r\nReturn economy class airfare to Bagdogra.\r\n-2 nights stay at hotel in Gangtok\r\n-3 nights stay at hotel in Darjeeling\r\n-Buffet Breakfast \r\n-Intercity transportation and local sightseeing on sharing basis by air-conditioned \r\nluxury vehicles such as Innova / Xylo/ Scorpio/TAVERA (Please note that air condition will not be working while uphill drives)\r\n-Point to point sightseeing tours as per the itinerary (Vehicle will not be at disposal \r\nbasis)\r\n-Miscellaneous charges like permits for Changu Lake, all applicable luxury/ Road tax.\r\n-One way Toy Train Ride.\r\n-Visit to Happy Valley Tea Estate.', '5 Nights | 6 Days', 6000),
('2', 'img/p2.jpg', 'img/p22.jpg', 'Darjeeling', 'North East Delight with Pelling - Summer Special', 'Gangtok (2N) Lachung (1N) Gangtok (1N) Pelling (1N) Darjeeling (2N)\r\n\r\n-Accommodation for 6 nights in Standard Hotels\r\n- Return economy class airfare to Bagdogra.\r\n- 3 nights stay at hotel in Gangtok\r\n- 1 night stay at hotel in Pelling\r\n- 2 nights stay at hotel in Darjeeling\r\n- Buffet Breakfast and Dinner\r\n- Intercity transportation and local sightseeing on sharing basis by air-conditioned \r\nluxury vehicles such as Innova / Xylo/ Scorpio/TAVERA (Please note that air condition will not be working while uphill drives) \r\n- Point to point sightseeing tours as per the itinerary (Vehicle will not be at disposal basis)\r\n- One time entrance fee as per itinerary \r\n- Accompanying tour manager throughout the tour.\r\n- Assistance at the airport at the time of arrival and departure.\r\n- Miscellaneous charges like permits for Changu Lake, all applicable luxury/ Road taxes.\r\n-One way Toy Train Ride.\r\n-Visit to Happy Valley Tea Estate.', '7 Nights | 6 Days', 8000),
('3', 'img/p3.jpg', 'img/p33.jpg', 'Jaipur', 'Golden Triangle With Shimla - Flight Inclusive', 'Agra 1 Night(s) - Jaipur 2 Night(s) - New Delhi 1 Night(s) - Shimla 2 Night(s) - Chandigarh 1 Night(s)\r\n\r\n-Return economy class airfare to & from New Delhi from respective hubs \r\nincluding taxes. (Ahmedabad, Hyderabad, Chennai, Vadodara, Pune, Bangalore) \r\n-1 night stay at hotel in Agra \r\n-2 night stay at hotel in Jaipur\r\n-1 night stay at Hotel in Delhi \r\n-2 night stay at Hotel in Shimla\r\n-1 night stay at Hotel in Chandigarh\r\n-Buffet Breakfast & Dinner as per itinerary \r\n-Transfers & sightseeing by an air-conditioned individual Indigo/Dzire.\r\n (On hills the AC shall be switched off) \r\n-One Dinner in Jaipur at Chokhi Dhani \r\n-Packaged drinking water bottle per person every day \r\n-All applicable Hotel & Transport taxes', '7 Nights  8 Days', 6800),
('4', 'img/p4.jpg', 'img/p44.jpg', 'Jaipur', 'Forts and Tigers - Land only', 'Jaipur (2N) Ranthambhore (2N)\r\nHotels Included in package\r\n\r\n-Accommodation in A/C Room.\r\n-Daily breakfast and dinner at the hotel in Jaipur.\r\n-Daily breakfast, lunch and dinner at the hotel in Ranthambhore.\r\n-One Jungle Safari during the visit in Ranthambhore.\r\n-One lunch at Park Regis Jaipur once during the stay.\r\n-Jeep ride at Amer Fort in Standard and Deluxe Package\r\n-Elephant ride at Amer Fort in Luxury Package\r\n-Transfers & sightseeing by A/C Car as per itinerary.\r\n-All currently applicable hotel & transport taxes (excluding gst)', '4 Nights 5 Days', 7100);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_type` varchar(10) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`firstname`, `lastname`, `email`, `password`, `user_type`) VALUES
('Gautam', 'PC', 'gautam@gmail.com', '12345678', 'admin'),
('Shrinidhi', 'Pandurangi', 'pandu@gmail.com', '12365478', 'user'),
('Ravish', 'KG', 'ravishkg@gmail.com', '22222222', 'user'),
('Rishab', 'Patil', 'rishab@gmail.com', '12345678', 'user'),
('Sagar', 'Sankannavar', 'sagar@gmail.com', '12345789', 'user'),
('SGV', 'Admin', 'sgvadmin@gmail.com', 'sgv12345', 'admin'),
('vaibhav', 'melinamani', 'vsm021294@gmail.com', '11111111', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_review`
--
ALTER TABLE `activity_review`
  ADD PRIMARY KEY (`ar_id`);

--
-- Indexes for table `booked_activity`
--
ALTER TABLE `booked_activity`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `booked_rooms`
--
ALTER TABLE `booked_rooms`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `holiday_review`
--
ALTER TABLE `holiday_review`
  ADD PRIMARY KEY (`hl_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_review`
--
ALTER TABLE `hotel_review`
  ADD PRIMARY KEY (`hr_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_review`
--
ALTER TABLE `activity_review`
  MODIFY `ar_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `booked_activity`
--
ALTER TABLE `booked_activity`
  MODIFY `book_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `booked_rooms`
--
ALTER TABLE `booked_rooms`
  MODIFY `bookid` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `holiday_review`
--
ALTER TABLE `holiday_review`
  MODIFY `hl_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hotel_review`
--
ALTER TABLE `hotel_review`
  MODIFY `hr_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `img_id` tinyint(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
