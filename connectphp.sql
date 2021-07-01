-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2021 at 01:28 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `connectphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `UserName` varchar(50) NOT NULL,
  `Street` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `County` varchar(50) NOT NULL,
  `PostCode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`UserName`, `Street`, `City`, `County`, `PostCode`) VALUES
('abartell', '150 Morley St', 'Dee Ward', 'Dumfries and Galloway', 'DG8 7DE'),
('bbashirian', '9165 Primrose St', 'Darnall Ward', 'Yorkshire, South', 'S4 7WN'),
('bbrown', '53 Forth Street', 'Greets Green and Lyng Ward', 'West Midlands', 'B70 9DT'),
('bsipes', '63 Elstow St', 'Castle Ward', 'West Sussex', 'BN12 6PR'),
('chartmann6', '29 Augustine St', 'Staple Hill Ward', 'South Gloucestershire', 'BS16 4LL'),
('chettinger', '4 Forrest St', 'Weston-Super-Mare', 'North Somerset', 'BS23 3HG'),
('djohns', '99 Guthrie St', 'New Milton', 'Hampshire', 'BH25 5DF'),
('druecker', '9 Pengwern St', 'Marldon', 'Devon', 'TQ3 1SA'),
('dwindler', '89 Cadogan St', 'South Ward', 'North Eart Lincolnshire', 'DN33 1AU'),
('ecruickshank', '11 Hobart St', 'Newquay', 'Cornwall', 'TR7 1LS'),
('eheaney', '5 Exeter Rd', 'Hawerby cum Beesby', 'Lincolnshire', 'DN36 5RP'),
('ekerluke', '72 Lind St', 'Desborough', 'Northamptonshire', 'NN14 2GH'),
('frogahn', '41 Canning St', 'Steornabhagh a Deas Ward', 'Western Isles', 'HS1 2PZ'),
('gdoyle', '2 Birchfield Rd', 'Whittington', 'Shropshire', 'SY11 4PH'),
('gkohler', '5 Binney St', 'Abbey Ward', 'Buckinghamshire', 'HP11 2AX'),
('hfisher', '89 Noon St', 'Carbrooke', 'Norfolk', 'IP25 6JQ'),
('hhettinger', '8 Moor Place', 'East Southbourne and Tuckton W', 'Bournemouth', 'BH6 3BE'),
('jmclaughlin', '5 Hygeia St', 'Loundsley Green Ward', 'Derbyshire', 'S40 4LY'),
('jwuckert', '23 Kempton Rd', 'Cockerton West Ward', 'Darlington', 'DL3 0JF'),
('kbergnaum', '24 Bolton St', 'Broxburn, Uphall and Winchburg', 'West Lothian', 'EH52 5TL'),
('mauer7', '44 Tarlton St', 'Prestatyn Community', 'Denbighshire', 'LL19 9EG'),
('mbuckridge', '14 Taylor St', 'St. Stephens Ward', 'Kent', 'CT2 7PP'),
('mwilliamson', '62 Northampton St', 'Wilmington', 'Kent', 'DA2 7PP'),
('nsanford', '1 Birkett St', 'Shard End Ward', 'West Midlands', 'B33 0NH'),
('rkirlin', '147 Blackstone St', 'Letchworth South West Ward', 'Hertfordshire', 'SG6 3LE'),
('thane9', '148 Rembrandt St', 'Warlingham', 'Surrey', 'CR6 9SW'),
('tnitzsche', '61 Rossett St', 'Chichester', 'West Sussex', 'PO19 1RH'),
('wsporer', '129 Alexander Pope St', 'Franche Ward', 'Hereford and Worcester', 'DY11 9BW'),
('zsmith', '68 Bourne St', 'Lye and Stourbridge North Ward', 'West Midlands', 'DY5 2QP');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `FName` varchar(50) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`FName`, `LName`, `UserName`, `Password`, `Email`) VALUES
('Aylin', 'Bartell', 'abartell', 'RWrqlUmJD', 'ronaldo12@gmail.com'),
('Brenda', 'Bashirian', 'bbashirian', 'G6EeSurZ', 'vladimir.maggio@mclaughlin.com'),
('Blair', 'Brown', 'bbrown', 'mJUvjqpS', 'uhowe@christiansen.org'),
('Brenna', 'Sipes', 'bsipes', 'f5UetJh4MgAC', 'tpfannerstill@hotmail.com'),
('Clementine', 'Hartmann', 'chartmann6', 'iyxMo62SraE', 'margarette46@hotmail.com'),
('Casandra', 'Hettinger', 'chettinger', 'PCYvfIicE', 'greta.tremblay@bergstrom.com'),
('Dwight', 'Johns', 'djohns', '0W8FsoNz', 'juston.haley@yahoo.com'),
('Demarco', 'Ruecker', 'druecker', '2IVw7AEm', 'kiel.rolfson@nienow.org'),
('Damian', 'Windler', 'dwindler', 'Cu7HG2YO', 'emmerich.trey@gmail.com'),
('Elmira', 'Cruickshank', 'ecruickshank', 'GAxLXzulgP', 'bkris@dach.com'),
('Elvis', 'Heaney', 'eheaney', 'NFb78w9G1cE', 'izaiah92@gmail.com'),
('Emma', 'Kerluke', 'ekerluke', 'V8pCY2A5sk', 'ella.nolan@hill.com'),
('Fae', 'Rogahn', 'frogahn', '7cXBzOMVd', 'benjamin.block@gmail.com'),
('Gia', 'Doyle', 'gdoyle', 'hPx3YKJi0', 'timmothy.lemke@senger.info'),
('Granville', 'Kohler', 'gkohler', '5DqILkbOlr', 'beaulah29@fisher.com'),
('Hubert', 'Fisher', 'hfisher', 'IUgnC2mkO', 'tromp.elinor@mann.com'),
('Hope', 'Hettinger', 'hhettinger', 'hJSOmXKfIA', 'moore.antonietta@tremblay.com'),
('Jaydon', 'McLaughlin', 'jmclaughlin', 'xQPEeS7A58tn', 'mabelle.luettgen@olson.com'),
('Joe', 'Wuckert', 'jwuckert', 'vLjs94lxgB', 'lowe.gillian@gmail.com'),
('Kenya', 'Bergnaum', 'kbergnaum', 'H7tSbiRwh', 'stephen73@gmail.com'),
('Marvin', 'Auer', 'mauer7', '9ENA0Bli', 'cronin.neoma@gmail.com'),
('Marietta', 'Buckridge', 'mbuckridge', 'iMOlmrVAeI', 'kareem16@hotmail.com'),
('Mathew', 'Williamson', 'mwilliamson', 'as8e4o0Or1I', 'wkassulke@maggio.com'),
('Nia', 'Sanford', 'nsanford', 'R0opkUXAFeQn', 'erwin.runolfsson@yahoo.com'),
('Reta', 'Kirlin', 'rkirlin', 'hlP9BnaW4', 'pwehner@gmail.com'),
('Talon', 'Hane', 'thane9', 'M4azVCBDT7iY', 'wwalter@gutmann.info'),
('Tom', 'Nitzsche', 'tnitzsche', 'TFkXxiWvM', 'katherine06@gmail.com'),
('Wilson', 'Sporer', 'wsporer', 'KDHrczlBpP', 'adolf64@gusikowski.com'),
('Zetta', 'Smith', 'zsmith', 'K03zJfUhw', 'kulas.hope@pfeffer.net');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserName`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `FK` FOREIGN KEY (`UserName`) REFERENCES `users` (`UserName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
