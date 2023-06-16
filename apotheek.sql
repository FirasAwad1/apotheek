-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 09:43 PM
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
-- Database: `apotheek`
--

-- --------------------------------------------------------

--
-- Table structure for table `gebruikers`
--

CREATE TABLE `gebruikers` (
  `gebruikerid` int(11) NOT NULL,
  `gebruikernaam` varchar(30) NOT NULL,
  `gebruikerleeftijd` varchar(30) NOT NULL,
  `gebruikeremail` varchar(100) NOT NULL,
  `gebruikerwachtwoord` varchar(75) NOT NULL,
  `gebruikerrol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gebruikers`
--

INSERT INTO `gebruikers` (`gebruikerid`, `gebruikernaam`, `gebruikerleeftijd`, `gebruikeremail`, `gebruikerwachtwoord`, `gebruikerrol`) VALUES
(14, 'medewerker', '1998-02-22', 'medewerker@gmail.com', '1234', 'Medewerker'),
(15, 'dokter', '1999-12-02', 'dokter@gmail.com', '1234', 'Dokter'),
(16, 'apotheker', '1999-12-02', 'apotheker@gmial.com', '1234', 'Apotheker');

-- --------------------------------------------------------

--
-- Table structure for table `klanten`
--

CREATE TABLE `klanten` (
  `klantid` int(10) NOT NULL,
  `klantnaam` varchar(20) DEFAULT NULL,
  `klantemail` varchar(30) DEFAULT NULL,
  `klantadres` varchar(30) DEFAULT NULL,
  `klantpostcode` varchar(6) DEFAULT NULL,
  `klantwoonplaats` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `klanten`
--

INSERT INTO `klanten` (`klantid`, `klantnaam`, `klantemail`, `klantadres`, `klantpostcode`, `klantwoonplaats`) VALUES
(5, 'Gani2', 'schuttersveld 15', '1234DD', 'Schtie', NULL),
(6, 'Gani2', 'schuttersveld 15', '1234DD', 'Schtie', NULL),
(7, NULL, 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(8, NULL, 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(9, NULL, 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(10, NULL, 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(11, 'schuttersveld 15 ', '1234DD ', 'Schtie ', ' ', NULL),
(12, 'Gani 2 ', 'test@gmail.com     ', 'schuttersveld 15     ', '1234DD', 'Rotterdam   '),
(13, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(14, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(16, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(17, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(18, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(19, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(20, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(21, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(22, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(23, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(24, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(25, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(26, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(27, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(28, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(29, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(30, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(31, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(32, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(33, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(34, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(35, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(36, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(37, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(38, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(39, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(40, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(41, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(42, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(43, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(44, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(45, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(46, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(47, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(48, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(49, 'Gani2', 'test@gmail.com', 'schuttersveld 15', '1234DD', 'Schtieam'),
(50, NULL, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medicijnen`
--

CREATE TABLE `medicijnen` (
  `mediId` int(11) NOT NULL,
  `mediNaam` varchar(45) DEFAULT NULL,
  `mediHovelheid` int(11) DEFAULT NULL,
  `mediPrijs` int(11) DEFAULT NULL,
  `mediBeschrijving` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medicijnen`
--

INSERT INTO `medicijnen` (`mediId`, `mediNaam`, `mediHovelheid`, `mediPrijs`, `mediBeschrijving`) VALUES
(26, NULL, NULL, NULL, NULL),
(27, NULL, NULL, NULL, NULL),
(28, NULL, NULL, NULL, NULL),
(29, NULL, NULL, NULL, NULL),
(30, '2502', 5, 0, NULL),
(31, 'paracetamol2', 2502, 5, 'hoofdpijn'),
(32, 'paracetamol2', 2502, 5, 'hoofdpijn'),
(34, 'paracetamol2', 2502, 5, 'hoofdpijn'),
(35, 'paracetamol1', 2502, 5, 'hoofdpijn2'),
(36, 'paracetamol2', 2502, 5, 'hoofdpijn'),
(37, 'paracetamol2', 2502, 5, 'hoofdpijn'),
(38, 'paracetamol2', 2502, 5, 'hoofdpijn'),
(39, 'paracetamol2', 2502, 5, 'hoofdpijn'),
(40, NULL, NULL, NULL, NULL),
(41, NULL, NULL, NULL, NULL),
(42, NULL, NULL, NULL, NULL),
(43, NULL, NULL, NULL, NULL),
(44, NULL, NULL, NULL, NULL),
(45, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL),
(50, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL),
(54, NULL, NULL, NULL, NULL),
(55, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL),
(57, NULL, NULL, NULL, NULL),
(58, NULL, NULL, NULL, NULL),
(59, NULL, NULL, NULL, NULL),
(60, NULL, NULL, NULL, NULL),
(61, NULL, NULL, NULL, NULL),
(62, NULL, NULL, NULL, NULL),
(63, NULL, NULL, NULL, NULL),
(64, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `recepten`
--

CREATE TABLE `recepten` (
  `receptid` int(11) NOT NULL,
  `receptnaam` varchar(45) DEFAULT NULL,
  `dokternaam` varchar(45) DEFAULT NULL,
  `mediId` int(11) DEFAULT NULL,
  `klantid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recepten`
--

INSERT INTO `recepten` (`receptid`, `receptnaam`, `dokternaam`, `mediId`, `klantid`) VALUES
(1, NULL, 'martin', NULL, 33),
(3, 'test', 'martin', NULL, 5),
(4, 'test', 'martin', NULL, 5),
(5, 'test', 'martin', NULL, 5),
(6, 'test     ', 'Martin', 38, 5),
(8, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gebruikers`
--
ALTER TABLE `gebruikers`
  ADD PRIMARY KEY (`gebruikerid`);

--
-- Indexes for table `klanten`
--
ALTER TABLE `klanten`
  ADD PRIMARY KEY (`klantid`);

--
-- Indexes for table `medicijnen`
--
ALTER TABLE `medicijnen`
  ADD PRIMARY KEY (`mediId`);

--
-- Indexes for table `recepten`
--
ALTER TABLE `recepten`
  ADD PRIMARY KEY (`receptid`),
  ADD KEY `fk_recepten_medicijnen_idx` (`mediId`),
  ADD KEY `fk_recepten_klanten1_idx` (`klantid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gebruikers`
--
ALTER TABLE `gebruikers`
  MODIFY `gebruikerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `klanten`
--
ALTER TABLE `klanten`
  MODIFY `klantid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `medicijnen`
--
ALTER TABLE `medicijnen`
  MODIFY `mediId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `recepten`
--
ALTER TABLE `recepten`
  MODIFY `receptid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `recepten`
--
ALTER TABLE `recepten`
  ADD CONSTRAINT `fk_recepten_klanten1` FOREIGN KEY (`klantid`) REFERENCES `klanten` (`klantid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_recepten_medicijnen` FOREIGN KEY (`mediId`) REFERENCES `medicijnen` (`mediId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
