-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 06, 2022 at 06:58 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrentals`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblbooking`
--

DROP TABLE IF EXISTS `tblbooking`;
CREATE TABLE IF NOT EXISTS `tblbooking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userEmail` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `PostingDate`) VALUES
(4, 'rhea.123@gmail.com', 1, '2022-07-28', '2022-07-28', 'no', '2022-07-31 09:09:52'),
(5, 'ayushi123@gmail.com', 1, '2022-08-30', '2022-08-31', 'No special requirements', '2022-08-06 16:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `tblbrands`
--

DROP TABLE IF EXISTS `tblbrands`;
CREATE TABLE IF NOT EXISTS `tblbrands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`) VALUES
(1, 'Maruti', '2022-07-26 05:13:55'),
(2, 'Mahindra', '2022-07-26 05:16:43'),
(3, 'Tata', '2022-07-26 05:17:35'),
(4, 'Nissan', '2022-08-06 17:47:31'),
(5, 'Hyundai', '2022-08-06 17:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontactusquery`
--

DROP TABLE IF EXISTS `tblcontactusquery`;
CREATE TABLE IF NOT EXISTS `tblcontactusquery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `EmailId` varchar(120) DEFAULT NULL,
  `ContactNumber` char(11) DEFAULT NULL,
  `Message` longtext,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblcontactusquery`
--

INSERT INTO `tblcontactusquery` (`id`, `name`, `EmailId`, `ContactNumber`, `Message`, `PostingDate`) VALUES
(3, 'Medha Jha', 'medha.phu@gmail.com', '5689643323', 'hii all', '2022-07-28 14:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

DROP TABLE IF EXISTS `tblusers`;
CREATE TABLE IF NOT EXISTS `tblusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Street` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `City`, `RegDate`, `Street`) VALUES
(5, 'Rhea Singh', 'rhea.123@gmail.com', '5d41402abc4b2a76b9719d911017c592', '6543281199', NULL, '2022-07-29 14:59:29', ''),
(6, 'Manasa', 'mansa.123@gmail.com', '900150983cd24fb0d6963f7d28e17f72', '7864512345', NULL, '2022-07-30 03:30:46', ''),
(9, 'Ayushi', 'ayushi123@gmail.com', '3e44e7ddd8c1c14677d4043253c67833', '7895342356', 'Ranchi', '2022-08-06 16:14:37', 'Flat no.1A, Sadafal Raghunath');

-- --------------------------------------------------------

--
-- Table structure for table `tblvehicles`
--

DROP TABLE IF EXISTS `tblvehicles`;
CREATE TABLE IF NOT EXISTS `tblvehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `VehicleNo` varchar(20) NOT NULL,
  `Airbag` int(10) NOT NULL,
  `Mileage` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `SeatingCapacity`, `Vimage1`, `AirConditioner`, `RegDate`, `VehicleNo`, `Airbag`, `Mileage`) VALUES
(1, 'Ertiga', 1, 'Maruti Suzuki Ertiga MUV Car is available in 6 exciting colours, 3 smart hybrid models - Lxi, Vxi, Zxi and 1.5L Engine option that offer the best-in-class ...\r\n', 8000, 'Petrol', 7, 'ertiga-2.jpg', 1, '2022-07-26 05:26:17', 'KA03HA1985', 2, '20.51 kmpl'),
(2, 'Dzire', 1, 'Features that take care of the safety of all passengers, across all variants. Get brochure. Move to a smoother drive with the Auto Gear Shift Technology of the Dzire. Dual Airbags. Auto Gear Shift Tech. Low-Fuel Warning Lamp. 378 L Boot Space. 37 L Fuel Tank Capacity.', 4000, 'Diesel', 5, 'dzire-2.jpg', 2, '2022-07-26 05:28:29', 'MH19AG5465', 2, '24.1 kmpl'),
(26, 'Scorpio', 2, 'Commanding outside. Intelligent inside. The All-New Scorpio-N makes every drive an experience with its unmissable design, thrilling performance', 12000, 'Diesel', 7, 'scorpio-1.jpg', 2, '2022-07-31 09:25:31', 'KA04FH6854', 2, '14 kmpl'),
(28, 'Marazzo', 2, 'Mahindra Marazzo is a 7 & 8 seater luxury SUV. Check our Marazzo model, specs, features, price, mileage, colours, variants, interior & exterior.\r\n', 16000, 'Diesel', 7, 'marazzo-1.jpg', 1, '2022-08-06 16:58:27', 'BR09HH9067', 2, '17.3 kmpl'),
(29, 'Tiago', 3, 'The Tata Tiago is the latest entry level mid-range compact hatchback by Tata Motors which competes with Maruti Suzuki Celerio, Hyundai Grand i10 and Honda', 5000, 'Petrol', 5, 'tiago-1.jpg', 2, '2022-08-06 18:30:54', 'KA11BH7821', 2, '27 kmpl'),
(30, 'Altroz', 3, 'The Altroz is Tata’s premium hatchback that sits above the Tiago in the brand’s model range. It is available with a 1.2-litre naturally aspirated petrol engine, a turbocharged version of the same unit and a 1.5-litre diesel mill. While all engines get a 5-speed manual gearbox as standard, only the naturally aspirated petrol gets a 6-speed DCT auto gearbox.', 7000, 'Diesel', 5, 'altroz-1.jpg', 1, '2022-08-06 18:37:07', 'MH20KR3456', 2, '23.03 kmpl'),
(31, 'Magnite', 4, 'In the Nissan Magnite, we’ve ensured every journey is a lavish one. Now, always drive in an environment where incredible versatility and extravagance intersect. All this, to match the bold, new exterior design. Time to experience beautiful.', 5500, 'Petrol', 5, 'magnite-1.jpg', 2, '2022-08-06 18:42:44', 'BR67HK7489', 2, '20 kmpl'),
(32, 'Kicks', 4, 'Nissan Kicks is a 5 seater SUV available in a price range of Rs. 9.50 - 14.90 Lakh*. It is available in 8 variants, 2 engine options that are BS6 compliant', 6000, 'Petrol', 5, 'kicks-1.jpg', 2, '2022-08-06 18:45:27', 'HR34BI6903', 2, '16 kmpl'),
(33, 'Creta', 5, 'The New CRETA Is Equipped With Advanced Blue Link Featuring For the Ultimate Connectivity. Packed With World-Class Safety Features To Ensure a Secure Drive For You & Your Family. Wireliess Phone Charger. D-Cut Steering Wheel.', 7000, 'Diesel', 5, 'creta-1.jpg', 2, '2022-08-06 18:48:39', 'BR65MH1267', 2, '21 kmpl'),
(34, 'i20', 5, 'The New i20 is a Seamless Harmony Of Sleek Looks & Cutting-Edge Technological Innovation. Best-in-segment features, Blue Link technology, Incredible safety & Powerful Performance. Sensuous Sportiness. ', 6000, 'Petrol', 5, 'i20-1.jpg', 1, '2022-08-06 18:51:36', 'MH04BK3986', 1, '25 kmpl');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
