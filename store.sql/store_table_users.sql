
-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `city` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`PID`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'Rajat Malik', 'rjmalik@ymail.com', 'rjm123', '6545987565', 'Noida', 'Sector 21, Noida'),
(2, 'Rahul Sharma', 'Rs11@ym.com', 'rsharma', '5698756545', 'Amritsar', 'Naval Vihar Amritsar'),
(3, 'Mandeep Singh', 'mansingh@ymail.com', 'mannsingh', '6598745852', 'Chandigarh', 'Javedkar Colony, Chandigarh'),
(4, 'Pushpak Sinha', 'pushpak2@ymail.com', 'pushpak4567', '6985741236', 'Lucknow', 'Banarsi Area,Lucknow'),
(5, 'Riya Sharma', 'sharmariya@tmail.com', '6998659745', '69986', 'Kanpur', 'Raghu Vihar Kanpur'),
(6, 'Himesh Goutham', 'Goutham099@ymail.com', 'gouthamm', '9855555563', 'Jaipur', 'Nagar Vihar Jaipur'),
(7, 'Sangeeta Rahul Singh', 'sangee@ymail.com', 'sangee1234', '6985214578', 'Pune', 'Jagriti Vihar,Pune'),
(8, 'Johny Siddharth', 'johnyym@ymail.com', 'johnjohn', '5698874523', 'Mumbai', 'Gokuldham Thane,Mumbai'),
(9, 'Maira khan', 'mairak@ymail.com', 'maira099', '9855566545', 'vellore', 'Vellore'),
(10, 'Amber Mishra', 'Ambermish@ymail.com', '6985Bana', '6985451236', 'Banaras', 'Hindu Colony, Banaras'),
(11, 'Niya Sharma', 'niya6789@ymail.com', '6985456545', '6985456545', 'Ghaziabad', 'Vaidya Vihar Ghaziabad'),
(12, 'Shubham Singh', 'ssingh12@ymail.com', 'ss1122', '6456752698', 'Delhi', 'Pratap Vihar Delhi'),
(13, 'Jyoti Rana', 'jyotirana2345@ymail.com', 'jyrana1234', '6987413698', 'Mumbai', 'Jagdeep colony Mumbai');
