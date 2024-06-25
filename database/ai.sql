-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Apr 15, 2024 alle 11:42
-- Versione del server: 10.4.25-MariaDB
-- Versione PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ai`
--

CREATE DATABASE ai;
USE ai;

-- --------------------------------------------------------

--
-- Struttura della tabella `networks`
--

CREATE TABLE `networks` (
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `training`
--

CREATE TABLE `training` (
  `code` int(11) NOT NULL,
  `network` varchar(20) NOT NULL,
  `accuracy` decimal(7,5) NOT NULL,
  `training_rate` decimal(7,5) NOT NULL,
  `training_time` decimal(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `date`, `mail`, `password`) VALUES
(1, 'Daniele', 'Campana', '2005-01-05', 'danielecampana05@gmail.com', '04f9e27a277de15b751ad39adc658fc80cc41f46'),
(2, 'Stefano', 'Cavassa', '2005-12-30', 'stefanocavassa30@gmail.com', 'd46e56245cbfc70f3ffb220265c5b2afee665e2a');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `networks`
--
ALTER TABLE `networks`
  ADD PRIMARY KEY (`name`);

--
-- Indici per le tabelle `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`code`),
  ADD KEY `network` (`network`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `training`
--
ALTER TABLE `training`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `training`
--
ALTER TABLE `training`
  ADD CONSTRAINT `training_ibfk_1` FOREIGN KEY (`network`) REFERENCES `networks` (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
