-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2020 at 08:15 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idesia`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'gunturdarmawan', 'gunturdarmawan@', 'hesoyam123'),
(2, 'kmlmaw', 'gntut@gmail.com', 'hesoyam123'),
(3, 'alamfaisal', 'faisal123@gmail', 'abogoboga123'),
(4, 'diraputri', 'dira@gmail.com', '$2y$10$x8hOyLJikFIf66wtpHLeDu5GOmuBTntT5BAgbHjz41jrAMYBMFcG.'),
(5, 'testing', 'hey@gmail.com', '$2y$10$NBV0Ts2Ul38vhox7WPMxd.90mD/mjy.gop5iBJFKCEkRFvOYXUY4m'),
(6, 'hero123', 'guntur@gmail.co', '$2y$10$y3f7lPD8kvJp42CRxYEK1O89iLGUA.nNGPgWhQQQcLRpZ6aZsMY4y'),
(7, 'hero123', 'guntur@gmail.co', '$2y$10$R.1fOYuMz/i3PM/ebAbpBOxH0.3zq0aCNs3lEWbBYRTZsaqOlwuJO'),
(8, 'fooooo', 'foooo@gmail.com', '$2y$10$gJMwbrPQVtdcVw9s04qz1eJ3C1WWz4i1yVzvSq51ProBn8E0jJGwS'),
(9, 'guntur', 'guntur@negatice', '$2y$10$XXMnQskXDt2JJs6U5frgUO3/UDcLqpWhP6iJCJGYmowJghxIS6DyC'),
(10, 'abdul13', 'abdul123@gmail.', '$2y$10$dkulAqmpoFCiAvBHIOeja.cceHo.kxDkh4bg7dtBd.rEwUXL638se');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
