-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Mar 14, 2021 at 10:56 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reaksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `reaksi`
--

CREATE TABLE `reaksi` (
  `id_reaksi` int(11) NOT NULL,
  `nik` varchar(65) NOT NULL,
  `reaksi` enum('senang','sedih','marah','puas') NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reaksi`
--

INSERT INTO `reaksi` (`id_reaksi`, `nik`, `reaksi`, `tanggal`) VALUES
(1, '123456789', 'senang', '2021-03-14'),
(2, '12345678912321312', 'senang', '2021-03-14'),
(3, '55555', 'marah', '2021-03-14'),
(4, '55556', 'senang', '2021-03-14'),
(9, '55556', 'senang', '2021-03-14'),
(10, '123', 'puas', '2021-03-14'),
(20, '123', 'senang', '2021-03-14'),
(22, '123', 'senang', '2021-03-14'),
(25, '11311911022834', 'senang', '2021-03-14'),
(26, '9999999999999', 'sedih', '2021-03-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reaksi`
--
ALTER TABLE `reaksi`
  ADD PRIMARY KEY (`id_reaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reaksi`
--
ALTER TABLE `reaksi`
  MODIFY `id_reaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
