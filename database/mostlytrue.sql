-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 03:35 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mostlytrue`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `UserName` varchar(20) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`UserName`, `Name`, `Password`) VALUES
('admin', 'Admin', 'admin@123'),
('admin2', 'Tushar', 'admin123'),
('admin3', 'admin3', '$2y$10$Bx5ThotGZ02er76Ow9HLo.BCXoOAoxtGK5PpDlyfBGm'),
('admin4', 'admin4', '$2y$10$w0tMcV6uvQ0QPcxkzbzF.et.pZjw9EiN8vm2/R8TqQu5BQEiYeSwO'),
('Mihir', 'Mihir', '$2y$10$/z3fCA4j3twRcK8/.ZV8Xu/jPrdOIh2hoEx2g/k9AeP');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `ID` int(5) NOT NULL,
  `Fname` varchar(15) NOT NULL,
  `Lname` varchar(15) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Number` varchar(10) NOT NULL,
  `Message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`ID`, `Fname`, `Lname`, `Email`, `Number`, `Message`) VALUES
(21, 'Tushar', 'Soni', 'tsoni142001@gmail.com', '9123456789', 'Can improve time taken to predict news'),
(22, 'Sunil', 'Yadav', 'sunil@gmail.com', '9123456789', 'I am having problem with weather detection, its showing wrong city for me.'),
(23, 'Pritam', 'Kumar', 'pritam@gmail.com', '9123456789', 'Website is good but it takes time to load in my pc.'),
(24, 'Rohan', 'Singh', 'rohan@gmail.com', '9784561343', 'Do you have app for your website, if not when can we expect it.');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` varchar(30) NOT NULL,
  `amount` int(3) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `amount`, `date`) VALUES
('pay_IeOYDKF6pqpQic', 150, '2022-01-01'),
('pay_IeOZD3XkRJkmZG', 150, '2022-01-01'),
('pay_IiNU5ggzLBYGgZ', 150, '2022-01-11'),
('pay_IiOYzSjt6gzdFi', 150, '2022-01-11'),
('pay_IiPU6FVC37c6DN', 150, '2022-01-11'),
('pay_IismY6cKgZh1kh', 150, '2022-01-12'),
('pay_IlfdDj1JMdj94j', 150, '2022-01-19'),
('pay_ImtKfPddB1QYCO', 150, '2022-01-22'),
('pay_ImtLHrO7SgwPZX', 150, '2022-01-22'),
('pay_InGpMp6lBDnPTE', 150, '2022-01-23'),
('pay_InS3jO5oF6Gm2x', 150, '2022-01-24'),
('pay_InS4J1gKnH75SE', 150, '2022-01-24'),
('pay_InSRA9TYOvekR7', 150, '2022-01-24'),
('pay_IntupadzTESURF', 150, '2022-01-25'),
('pay_IyXPhtGnbBdasX', 150, '2022-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `payuser_join`
--

CREATE TABLE `payuser_join` (
  `PayUserJoinID` int(5) NOT NULL,
  `RUserID` int(5) NOT NULL,
  `payment_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payuser_join`
--

INSERT INTO `payuser_join` (`PayUserJoinID`, `RUserID`, `payment_id`) VALUES
(1, 1, 'pay_IeOYDKF6pqpQic'),
(4, 1, 'pay_IiNU5ggzLBYGgZ'),
(5, 1, 'pay_IiOYzSjt6gzdFi'),
(10, 1, 'pay_IlfdDj1JMdj94j'),
(11, 30, 'pay_InS3jO5oF6Gm2x'),
(12, 30, 'pay_InS4J1gKnH75SE'),
(13, 30, 'pay_InSRA9TYOvekR7');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `RUserID` int(5) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`RUserID`, `Name`, `Email`, `Password`) VALUES
(1, 'Tushar', 'tsoni142001@gmail.com', 'tushar'),
(2, 'mihir', 'mihir@gmail.com', '12345'),
(8, 'Sample 6', 'sample6@gmail.com', 'sample123'),
(9, 'Sample 7', 'sample7@gmail.com', 'sample123'),
(10, 'Sample 8', 'sample8@gmail.com', 'sample123'),
(11, 'Tushar123', 'sample9@gmail.com', '$2y$10$euXJ7iMDkCt2t8UbPBM1HezlK78KQiJ8UC1PgeJlejg'),
(22, 'Sunil', 'sunil@gmail.com', '$2y$10$wreBT7xbJJgodE1exgpn9.b3bZmkdfm5EduGOtgKrk9'),
(24, 'amod', 'amod@gmail.com', '$2y$10$c7rRYOG3pfqI23ikGYwTIePk9DkD9/sEe9jYPfWr/2Y'),
(26, 'amdy', 'amdy@gmail.com', '$2y$10$FLs8VWmr689PNtNS1EuEouzCXiv8BtaMrguHXsDVH98'),
(28, 'Pritam', 'pritam@gmail.com', '$2y$10$rFmGu6S3ZGlEg2QOK/2iZOhdJncwuiMrfDQ4Xoq/.i1'),
(30, 'New User', 'new@gmail.com', '$2y$10$33oC4xHl87b6pt5xcUi.VO.ip4.S9pp4RnPmN4QDqj2l4jrjn9IOu'),
(32, 'Mihir', 'm122@gmail.com', '$2y$10$5kZ4xmovJCH.yDyEzmN3iuqj6T44dwRZbaAtfhnvdR5vr7mN6L/su');

-- --------------------------------------------------------

--
-- Table structure for table `ruser_join`
--

CREATE TABLE `ruser_join` (
  `RUserJoinID` int(5) NOT NULL,
  `RUserID` int(5) NOT NULL,
  `SearchID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ruser_join`
--

INSERT INTO `ruser_join` (`RUserJoinID`, `RUserID`, `SearchID`) VALUES
(14, 1, 18),
(15, 1, 28),
(16, 1, 29),
(17, 1, 30),
(18, 2, 31),
(19, 2, 32),
(20, 30, 34),
(23, 30, 36),
(24, 30, 38),
(28, 30, 58);

-- --------------------------------------------------------

--
-- Table structure for table `search_result`
--

CREATE TABLE `search_result` (
  `SearchID` int(5) NOT NULL,
  `Headline` varchar(250) NOT NULL,
  `Result` varchar(5) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `search_result`
--

INSERT INTO `search_result` (`SearchID`, `Headline`, `Result`, `Date`) VALUES
(7, 'Headline 4', 'True', '2021-12-28'),
(8, 'Headline 5', 'True', '2021-12-28'),
(9, 'Headline 6', 'True', '2021-12-28'),
(10, 'Headline 7', 'False', '2021-12-27'),
(11, 'Headline 8', 'False', '2021-12-27'),
(12, 'Headline 9', 'False', '2021-12-29'),
(14, 'Headline Test', 'False', '2021-12-30'),
(16, 'Headline 13', 'False', '2022-01-14'),
(17, 'By Amanda Froelich This tree-like skyscraper is capable of growing 24 acres-worth of crops and will be powered entirely by renewable resources. By 2050, the worldâ€™s population is estimated to reach... ', 'False', '2022-01-22'),
(18, 'The world watched in shock on Wednesday as French satirical publication Charlie Hebdo became the site of a grisly terror attack. Gunmen opened fire on a second-floor editorial meeting, killing 12 people in total. Among them were eight journalists and', 'True', '2022-01-22'),
(19, 'abcdef', 'False', '2022-01-22'),
(20, 'U.S. Secretary of State John F. Kerry said Monday that he will stop in Paris later this week, amid criticism that no top American officials attended Sundayâ€™s unity march against terrorism.', 'True', '2022-01-22'),
(21, 'U.S. Secretary of State John F. Kerry said Monday that he will stop in Paris later this week, amid criticism that no top American officials attended Sundayâ€™s unity march against terrorism.', 'True', '2022-01-22'),
(22, '1', 'False', '2022-01-22'),
(23, '122', 'False', '2022-01-22'),
(24, '122', 'False', '2022-01-22'),
(25, '122', 'False', '2022-01-22'),
(26, '122', 'False', '2022-01-22'),
(27, '122', 'False', '2022-01-22'),
(28, 'Washington (CNN) For months, the White House and Congress have wrangled over a bill that would give lawmakers a greater say in the Iran nuclear deal the administration is hammering out along with other world powers.', 'True', '2022-01-23'),
(29, 'Hillary Clinton has barely just lost the presidential election and here she is already getting herself caught in another one of her tangled web of lies.  The day after losing, a picture was posted of her taking her dog out for a walk. The picture was', 'False', '2022-01-23'),
(30, 'New Wikileaks email dumps have revealed massive corruption surrounding Hillary Clinton campaign chair John Podesta . In one email dated February 29, 2016, an article sent by Hillary advisor Sara Solow to Podesta and Hillaryâ€™s foreign policy advisor', 'False', '2022-01-23'),
(31, 'A third suspect has turned himself in. Prime Minister Valls said several arrests had been made overnight in connection with the deadliest terror attack in France in a generation.', 'True', '2022-01-23'),
(32, 'Late last week, the US Department of Agriculture (USDA) approved two new strains of genetically engineered potatoes. The potatoes, created by JR Simplot, have been engineered to resist potato blight,... ', 'False', '2022-01-23'),
(33, 'The move would make it easier for the Trump administration to demolish the exchanges.', 'True', '2022-01-23'),
(34, 'A Czech stockbroker who saved more than 650 Jewish children from Nazi Germany has died at the age of 106. Dubbed â€œBritainâ€™s Schindler,â€ Nicholas Winton arranged to transport Jewish youngsters from Prague after Germany annexed Czechoslovakia in ', 'True', '2022-01-24'),
(36, 'Ying and Yang (the Gold and Silver Set-Up) Posted on Home Â» Silver Â» Silver News Â» Ying and Yang (the Gold and Silver Set-Up) No, this is not a post about some new Chinese law firm. Instead, itâ€™s just an update on the gold and silver markets whi', 'False', '2022-01-23'),
(37, 'Ying and Yang (the Gold and Silver Set-Up) Posted on Home Â» Silver Â» Silver News Â» Ying and Yang (the Gold and Silver Set-Up) No, this is not a post about some new Chinese law firm. Instead, itâ€™s just an update on the gold and silver markets whi', 'False', '2022-01-24'),
(38, 'Print  [Ed. â€“ How to take the fun out of Halloween.]  As Halloween approaches, hair-raising yard displays can often cause people to stop, gawk and whip out their cellphones.  Larethia Haddon is well aware of that, and is using it to shine some ligh', 'False', '2022-01-24'),
(39, 'WikiLeaks: Neera Tanden has ANOTHER ringing endorsement for Hillary! (No, not really) Posted at 3:21 pm on October 29, 2016 by Doug P.  As emails released by WikiLeaks have revealed, Hillary Clinton adviser and Center for American Progress President ', 'False', '2022-01-24'),
(40, 'Anyone writing sentences like â€˜nevertheless fuels the perception that the Clintons may haveâ€¦â€™ might want to stop and think about whether they are reporting news or innuendo.', 'False', '2022-01-24'),
(43, 'Mysterious, middle-of-the-night drone flights by the U.S. Secret Service during the next several weeks over parts of Washington -- usually off-limits as a strict no-fly zone -- are part of secret government testing intended to find ways to interfere ', 'False', '2022-01-24'),
(57, 'Notable names include Ray Washburne (Commerce), a Dallas-based investor, is reported to be under consideration to lead the department.', 'True', '2022-01-25'),
(58, 'In the 2008 presidential primary campaign, Mitch Stewart devoted himself to defeating Hillary Rodham Clinton, overcoming the advantages of a well-funded Democratic front-runner through grass-roots organizing, and propelling Barack Obama to victory.', 'True', '2022-01-25'),
(60, 'The warming of the oceans due to climate change is now unstoppable after record temperatures last year, bringing additional sea-level rise, and raising the risks of severe storms, US government climate scientists said on Thursday.', 'True', '2022-02-21'),
(62, 'Share This Baylee Luciani (left), Screenshot of what Baylee caught on FaceTime (right)  The closest Baylee Luciani could get to her boyfriend, whoâ€™s attending college in Austin, was through video online chat. The couple had regular â€œdatesâ€ this', 'False', '2022-02-21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `payuser_join`
--
ALTER TABLE `payuser_join`
  ADD PRIMARY KEY (`PayUserJoinID`),
  ADD KEY `RUserID` (`RUserID`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`RUserID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `ruser_join`
--
ALTER TABLE `ruser_join`
  ADD PRIMARY KEY (`RUserJoinID`),
  ADD KEY `RUserID` (`RUserID`),
  ADD KEY `SearchID` (`SearchID`);

--
-- Indexes for table `search_result`
--
ALTER TABLE `search_result`
  ADD PRIMARY KEY (`SearchID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `payuser_join`
--
ALTER TABLE `payuser_join`
  MODIFY `PayUserJoinID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
  MODIFY `RUserID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `ruser_join`
--
ALTER TABLE `ruser_join`
  MODIFY `RUserJoinID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `search_result`
--
ALTER TABLE `search_result`
  MODIFY `SearchID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payuser_join`
--
ALTER TABLE `payuser_join`
  ADD CONSTRAINT `payuser_join_ibfk_1` FOREIGN KEY (`RUserID`) REFERENCES `registered_user` (`RUserID`),
  ADD CONSTRAINT `payuser_join_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`payment_id`);

--
-- Constraints for table `ruser_join`
--
ALTER TABLE `ruser_join`
  ADD CONSTRAINT `ruser_join_ibfk_1` FOREIGN KEY (`RUserID`) REFERENCES `registered_user` (`RUserID`),
  ADD CONSTRAINT `ruser_join_ibfk_2` FOREIGN KEY (`SearchID`) REFERENCES `search_result` (`SearchID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
