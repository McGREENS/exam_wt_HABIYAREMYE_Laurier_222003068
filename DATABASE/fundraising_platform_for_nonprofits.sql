-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2024 at 11:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fundraising_platform_for_nonprofits`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminID` int(10) NOT NULL,
  `Name` text NOT NULL,
  `PhoneNumber` text NOT NULL,
  `Email` text NOT NULL,
  `Role` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminID`, `Name`, `PhoneNumber`, `Email`, `Role`, `Password`) VALUES
(1, 'Laurier HABIYAREMYE', '+250 780 115 654', 'laurier@fpnp.com', 'System Admin', 'laurier123'),
(2, 'Blessing KALISA MPUNDU', '+250 780 456 678', 'blessing@gmail.com', 'System Admin', 'blessing123');

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `CampaignID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `CategoryID` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Goal` decimal(10,2) NOT NULL,
  `StartDate` date NOT NULL,
  `EndDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`CampaignID`, `UserID`, `Title`, `CategoryID`, `Description`, `Goal`, `StartDate`, `EndDate`) VALUES
(7, 2024001, 'Clean Water Initiative', 1, 'This campaign will dedicated to provide clean water to local population.', 950000.00, '2024-05-22', '2024-06-28');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CategoryID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CategoryID`, `Name`) VALUES
(1, 'Healthcare'),
(2, 'Education'),
(3, 'Environment');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentID` int(11) NOT NULL,
  `Name` text DEFAULT NULL,
  `Comment` text DEFAULT NULL,
  `CommentDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentID`, `Name`, `Comment`, `CommentDate`) VALUES
(1, 'Frank MUKUIZA', 'Great initiative! Happy to contribute.', '2024-05-06 10:30:00'),
(2, 'Alain BUGINGO', 'Keep up the good work!', '2024-05-08 14:45:00'),
(3, 'Kenia ISHIMWE', 'Excited to see the impact of this campaign.', '2024-06-12 09:15:00'),
(2024001, 'DAN', 'tttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt', '2024-05-22 18:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `DonationID` int(11) NOT NULL,
  `CampaignID` int(11) DEFAULT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Amount` decimal(10,2) DEFAULT NULL,
  `DonationDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`DonationID`, `CampaignID`, `Name`, `Email`, `Amount`, `DonationDate`) VALUES
(1, 1, '', '', 100.00, '2024-05-05'),
(2, 1, '', '', 250.00, '2024-05-07'),
(3, 2, '', '', 150.00, '2024-06-10'),
(2024001, 5, 'Alex DUSHIME', 'alex@gmail.com', 75474.00, '2024-05-22');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `EventID` int(11) NOT NULL,
  `NonprofitID` int(11) DEFAULT NULL,
  `Title` varchar(100) NOT NULL,
  `Description` text DEFAULT NULL,
  `EventDate` date DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`EventID`, `NonprofitID`, `Title`, `Description`, `EventDate`, `Location`) VALUES
(3, 1, 'Community Cleanup Day', 'Join us for a day of cleaning up our neighborhood!', '2024-06-15', 'City Park'),
(4, 1, 'Fundraising Gala', 'An evening of dinner, entertainment, and fundraising for our programs.', '2024-07-20', 'Grand Hall'),
(2024001, 1, 'Gala Night', 'An evening of dinner, entertainment, and fundraising for our programs.', '2024-05-28', 'Huye Campus');

-- --------------------------------------------------------

--
-- Table structure for table `impactreports`
--

CREATE TABLE `impactreports` (
  `ReportID` int(11) NOT NULL,
  `CampaignID` int(11) DEFAULT NULL,
  `ReportDate` date DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `impactreports`
--

INSERT INTO `impactreports` (`ReportID`, `CampaignID`, `ReportDate`, `Description`) VALUES
(1, 1, '2024-07-15', 'Reached our fundraising goal and started implementing water filtration systems.'),
(2, 2, '2024-09-05', 'Distributed educational supplies to 300 children in need.'),
(2024001, 1, '2024-05-22', 'Reached our fundraising goal and started implementing water filtration systems.');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `MessageID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` text NOT NULL,
  `Subject` varchar(255) DEFAULT NULL,
  `Message` text DEFAULT NULL,
  `SendDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`MessageID`, `Name`, `Email`, `Subject`, `Message`, `SendDate`) VALUES
(1, '', '', 'Volunteer Opportunity', 'We have a volunteer event coming up next week. Are you available to help?', '2024-05-08 11:00:00'),
(2, '', '', 'Thank You!', 'Thank you for your generous donation to our campaign.', '2024-06-12 15:30:00'),
(3, 'Laurier', 'Laurier@gmail.com', 'Thanking', 'Thank you so much', '2024-05-18 14:44:07'),
(4, 'Tout Jour IZZY', 'toutjour@gmail.com', 'Thanking', 'Thank you so much for the help you deriverd.', '2024-05-18 14:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `NewsletterID` int(10) NOT NULL,
  `Email` text NOT NULL,
  `Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`NewsletterID`, `Email`, `Date`) VALUES
(2024, 'laurier@gmail.com', '2024-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `nonprofits`
--

CREATE TABLE `nonprofits` (
  `NonprofitID` int(11) NOT NULL,
  `UserID` int(11) DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` text DEFAULT NULL,
  `Website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nonprofits`
--

INSERT INTO `nonprofits` (`NonprofitID`, `UserID`, `Name`, `Description`, `Website`) VALUES
(1, 2, 'Community Outreach Organization', 'Dedicated to supporting local communities through various initiatives.', 'http://www.communityoutreach.org'),
(2024001, 2024001, 'Arlande Foundation Int', 'Dedicated to supporting local communities through various initiatives.', 'https://arlandefoundation.com');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `NotificationID` int(11) NOT NULL,
  `ActionType` enum('Insert','Update','Delete') NOT NULL,
  `TableName` varchar(100) NOT NULL,
  `RecordID` int(11) NOT NULL,
  `ActionDate` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`NotificationID`, `ActionType`, `TableName`, `RecordID`, `ActionDate`) VALUES
(1, 'Insert', 'Campaigns', 1, '2024-05-06 12:09:38'),
(2, 'Insert', 'Campaigns', 2, '2024-05-06 12:09:38'),
(2024001, 'Update', 'Campaigns', 1, '2024-05-18 15:39:27'),
(2024002, 'Update', 'Campaigns', 2, '2024-05-18 15:39:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `UserType` enum('Donor','Nonprofit') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `Username`, `Email`, `Password`, `UserType`) VALUES
(2, 'Mary MUHIZI', 'mary@gmail.com', 'mary123', 'Nonprofit'),
(2024001, 'Rashidah MUMU', 'rashid@gmail.com', 'rashid123', 'Nonprofit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminID`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`CampaignID`),
  ADD UNIQUE KEY `CategoryID` (`CategoryID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentID`),
  ADD KEY `UserID` (`Name`(768));

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`DonationID`),
  ADD KEY `CampaignID` (`CampaignID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`EventID`),
  ADD KEY `NonprofitID` (`NonprofitID`);

--
-- Indexes for table `impactreports`
--
ALTER TABLE `impactreports`
  ADD PRIMARY KEY (`ReportID`),
  ADD KEY `CampaignID` (`CampaignID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`MessageID`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`NewsletterID`);

--
-- Indexes for table `nonprofits`
--
ALTER TABLE `nonprofits`
  ADD PRIMARY KEY (`NonprofitID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`NotificationID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `CampaignID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024001;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024002;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `DonationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024002;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `EventID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024002;

--
-- AUTO_INCREMENT for table `impactreports`
--
ALTER TABLE `impactreports`
  MODIFY `ReportID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024002;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `MessageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `NewsletterID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2025;

--
-- AUTO_INCREMENT for table `nonprofits`
--
ALTER TABLE `nonprofits`
  MODIFY `NonprofitID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024002;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `NotificationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024003;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024002;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD CONSTRAINT `campaigns_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`),
  ADD CONSTRAINT `campaigns_ibfk_2` FOREIGN KEY (`CategoryID`) REFERENCES `categories` (`CategoryID`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`NonprofitID`) REFERENCES `nonprofits` (`NonprofitID`);

--
-- Constraints for table `nonprofits`
--
ALTER TABLE `nonprofits`
  ADD CONSTRAINT `nonprofits_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
