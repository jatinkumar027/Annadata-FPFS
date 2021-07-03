
-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed','','') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`PID`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`PID`, `user_id`, `item_id`, `status`) VALUES
(1, 9, 1, 'Added to cart'),
(2, 3, 3, 'Confirmed'),
(3, 7, 5, 'Confirmed'),
(4, 5, 2, 'Confirmed'),
(5, 10, 4, 'Confirmed'),
(6, 8, 6, 'Added to cart'),
(7, 4, 7, 'Added to cart'),
(8, 6, 9, 'Added to cart'),
(9, 2, 8, 'Confirmed'),
(10, 1, 10, 'Added to cart'),
(11, 13, 11, 'Confirmed'),
(12, 11, 7, 'Confirmed'),
(13, 15, 5, 'Added to cart'),
(14, 17, 3, 'Confirmed'),
(15, 19, 1, 'Added to cart'),
(16, 21, 2, 'Confirmed'),
(17, 22, 4, 'Added to cart'),
(18, 20, 8, 'Confirmed'),
(19, 18, 10, 'Added to cart'),
(20, 16, 6, 'Confirmed'),
(21, 14, 9, 'Added to cart'),
(22, 12, 11, 'Confirmed');
