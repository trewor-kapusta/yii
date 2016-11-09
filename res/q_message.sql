-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 09 Lis 2016, 23:49
-- Wersja serwera: 5.5.47-0ubuntu0.14.04.1
-- Wersja PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `yii`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `q_message`
--

CREATE TABLE IF NOT EXISTS `q_message` (
  `id` int(11) NOT NULL DEFAULT '0',
  `id_from` int(11) NOT NULL,
  `id_to` int(11) NOT NULL,
  `message` text NOT NULL,
  `add_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `test` (`id_from`),
  KEY `test2` (`id_to`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `q_message`
--
ALTER TABLE `q_message`
  ADD CONSTRAINT `q_message_ibfk_2` FOREIGN KEY (`id_to`) REFERENCES `q_user` (`id`),
  ADD CONSTRAINT `q_message_ibfk_1` FOREIGN KEY (`id_from`) REFERENCES `q_user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
