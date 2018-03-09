-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 09 mrt 2018 om 12:05
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umair_saeed_guestbook`
--
CREATE DATABASE IF NOT EXISTS `umair_saeed_guestbook` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `umair_saeed_guestbook`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `guestbook`
--

CREATE TABLE `guestbook` (
  `guestbookId` int(3) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `datetime` datetime(6) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `Insertion` varchar(100) NOT NULL,
  `messageTitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `guestbook`
--

INSERT INTO `guestbook` (`guestbookId`, `firstName`, `lastName`, `comment`, `datetime`, `email`, `website`, `Insertion`, `messageTitle`) VALUES
(7, 'Umair', 'Saeed', 'ROC', '2018-03-07 09:02:27.000000', 'umairsaeed28@gmail.com', 'google.com', '', 'ROC'),
(27, 'Albion', 'Zogaj', 'League of legends is best!', '2018-03-08 05:17:56.000000', 'meneertjealbion@hotmail.com', 'www.leagueoflegends.com', '', 'League'),
(28, 'Daan', 'Hertogs', 'CR is best!', '2018-03-08 05:19:12.000000', 'djhertogs@hotmail.nl', 'www.clashroyale.com', '', 'Clash Royale'),
(29, 'Alper', 'Kuyumcu', 'bier en wiet zijn lekkr!!!', '2018-03-09 09:23:52.000000', 'Alper@gmail.com', 'www.pubG.com', 'B', 'Bier!');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`guestbookId`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `guestbookId` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
