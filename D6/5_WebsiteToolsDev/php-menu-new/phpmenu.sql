-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 03:41 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phpmenu`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`id` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  `name_gr` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sequence` int(11) DEFAULT NULL,
  `published` tinyint(4) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent`, `name_gr`, `sequence`, `published`) VALUES
(9, 0, 'ΠΟΔΟΣΦΑΙΡΟ', 1, 1),
(12, 0, 'ΜΠΑΣΚΕΤ', 2, 1),
(18, 0, 'ΒΟΛΛΕΫ', 3, 1),
(26, 0, 'ΣΤΙΒΟΣ', 5, 1),
(102, 9, 'Super League', 1, 1),
(88, 0, 'ΠΟΛΟ', 6, 1),
(89, 12, 'A1', 1, 1),
(90, 12, 'A2', 2, 1),
(91, 12, 'NBA', 3, 1),
(92, 12, 'A1 Γυναικών', 4, 1),
(93, 18, 'A1', 1, 1),
(94, 18, 'ΕΥΡΩΠΗ', 2, 1),
(95, 18, 'ΚΥΠΡΟΣ', 1, 1),
(99, 88, 'Α1', 1, 1),
(100, 88, 'Euroleague', 2, 1),
(120, 109, 'Formula 1', 1, 1),
(103, 9, 'Β΄ Εθνική', 2, 1),
(104, 9, 'Γ΄ Εθνική', 3, 1),
(105, 9, 'Εθνική Ελλάδος', 4, 1),
(106, 9, 'Κύπελλο Hellas online', 5, 1),
(107, 9, 'Champions League', 6, 1),
(108, 9, 'Κύπελλο UEFA', 7, 1),
(109, 0, 'AUTO-MOTO', 7, 1),
(110, 9, 'Ευρώπη', 8, 1),
(111, 0, 'ΑΛΛΑ ΣΠΟΡ', 7, 1),
(112, 12, 'Euroleague', 4, 1),
(113, 12, 'Eurobasket 09', 5, 1),
(114, 110, 'Αγγλία', 1, 1),
(115, 110, 'Γαλλία', 2, 1),
(116, 110, 'Γερμανία', 3, 1),
(117, 110, 'Ιταλία', 4, 1),
(118, 110, 'Ισπανία', 5, 1),
(119, 110, 'Ολλανδία', 6, 1),
(121, 109, 'WRC', 2, 1),
(122, 109, 'Moto GP', 3, 1),
(123, 111, 'Ρυθμική Γυμναστική', 1, 1),
(124, 111, 'Τέννις', 2, 1),
(125, 119, 'Ajax', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=126;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
