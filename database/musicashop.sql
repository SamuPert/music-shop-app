-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Apr 19, 2020 at 02:55 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `musica`
--

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(30) NOT NULL,
  `descrizione` varchar(50) NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categoria_sottocategoria`
--

DROP TABLE IF EXISTS `categoria_sottocategoria`;
CREATE TABLE IF NOT EXISTS `categoria_sottocategoria` (
  `id_categoria` int(11) NOT NULL,
  `id_sotto_categoria` int(11) NOT NULL,
  PRIMARY KEY (`id_categoria`,`id_sotto_categoria`),
  KEY `fk_categoria_sotto` (`id_sotto_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodotto`
--

DROP TABLE IF EXISTS `prodotto`;
CREATE TABLE IF NOT EXISTS `prodotto` (
  `id_prodotto` int(11) NOT NULL,
  `nome_prodotto` varchar(20) NOT NULL,
  `descrizione_breve` varchar(30) NOT NULL,
  `descrizione_estesa` varchar(30) NOT NULL,
  `foto` blob NOT NULL,
  `prezzo` float NOT NULL,
  PRIMARY KEY (`id_prodotto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prodotto_sottocategoria`
--

DROP TABLE IF EXISTS `prodotto_sottocategoria`;
CREATE TABLE IF NOT EXISTS `prodotto_sottocategoria` (
  `id_sotto_categoria` int(11) NOT NULL,
  `id_prodotto` int(11) NOT NULL,
  PRIMARY KEY (`id_sotto_categoria`,`id_prodotto`),
  KEY `id_prodotto` (`id_prodotto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sotto_categoria`
--

DROP TABLE IF EXISTS `sotto_categoria`;
CREATE TABLE IF NOT EXISTS `sotto_categoria` (
  `id_sotto_categoria` int(11) NOT NULL,
  `nome_sotto_categoria` varchar(20) NOT NULL,
  `descrizione` varchar(20) NOT NULL,
  PRIMARY KEY (`id_sotto_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categoria_sottocategoria`
--
ALTER TABLE `categoria_sottocategoria`
  ADD CONSTRAINT `fk_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `prodotto_sottocategoria`
--
ALTER TABLE `prodotto_sottocategoria`
  ADD CONSTRAINT `prodotto_sottocategoria_ibfk_1` FOREIGN KEY (`id_prodotto`) REFERENCES `prodotto` (`id_prodotto`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `prodotto_sottocategoria_ibfk_2` FOREIGN KEY (`id_sotto_categoria`) REFERENCES `sotto_categoria` (`id_sotto_categoria`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `sotto_categoria`
--
ALTER TABLE `sotto_categoria`
  ADD CONSTRAINT `sotto_categoria_ibfk_1` FOREIGN KEY (`id_sotto_categoria`) REFERENCES `categoria_sottocategoria` (`id_sotto_categoria`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
