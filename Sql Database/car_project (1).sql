-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 12:04 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-login`
--

CREATE TABLE `admin-login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin-login`
--

INSERT INTO `admin-login` (`username`, `password`) VALUES
('vishnu', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `car_detail`
--

CREATE TABLE `car_detail` (
  `Id` int(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `car name` varchar(30) NOT NULL,
  `km driven` varchar(30) NOT NULL,
  `fuel type` varchar(30) NOT NULL,
  `transmission` varchar(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `price` double NOT NULL,
  `registration year` int(20) NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `RTO` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_detail`
--

INSERT INTO `car_detail` (`Id`, `Category`, `brand`, `car name`, `km driven`, `fuel type`, `transmission`, `model`, `price`, `registration year`, `image`, `RTO`) VALUES
(1, 'Sedan', 'Chevrolet', '2017 Cheverolet Cruze', '78000', 'Diesel', 'Automatic', 'LTZ AT', 7.25, 0, '2017 Chevrolet Cruze LTZ AT.webp', 'DL1C'),
(2, 'SUV', 'Ford', '2019 Ford Endeavour', '35000', 'Diesel', 'Manual', 'Titanium 2.2 4x2 MT', 24.97, 2019, '2019 Ford Endeavour Titanium 2.2 4x2 MT.avif', 'DL12'),
(3, 'Hatchback', 'Maruti', '2019 Maruti Suzuki Baleno', '29000', 'Petrol', 'Manual', 'Alpha', 6.53, 2019, '2019 Maruti Suzuki Baleno Alpha Petrol.avif', 'DL12'),
(4, 'Hatchback', 'Renault', '2023 Renualt Kwid Climber', '5000', 'Petrol', 'Automatic', '1.0 AMT', 5.59, 2023, '2023 Renault Kwid CLIMBER 1.0 AMT.webp', 'HR26'),
(5, 'Hatchback', 'Tata', '2023 Tata Altroz ', '12000', 'Petrol', 'Manual', 'XZ Plus 1.2 Dark Edition', 9.59, 2023, '2023 Tata Altroz XZ Plus 1.2 Dark Edition.webp', 'TS15'),
(6, 'SUV', 'Mercedes', '2016 Mercedes Benz ', '27000', 'Petrol', 'Automatic', 'G63 AMG', 135, 2017, '2016 MERCEDES BENZ G63 AMG.jpg', 'HR26'),
(7, 'Sedan', 'Hundai', '2019 Hyundai Verna ', '27000', 'Petrol', 'Manual', '1.6 VT SX(O)', 9.92, 2019, '2019 Hyundai Verna 1.6 VTVT SX (O).webp', 'DL11'),
(8, 'MUV', 'Toyota', '2021 Tyota Innova', '60000', 'Diesel', 'Manual', '2.4 VX 8 STR', 15, 2021, '2021 Toyota Innova Crysta 2.4 VX 8 STR.webp', 'RJ19'),
(9, 'MUV', 'Kia', '2020 Kia Carnival', '66619', 'Diesel', 'Automatic', 'Premium 2.2 & STR', 19.57, 2021, '2020 KIA CARNIVAL PREMIUM 2.2 7 STR.webp', 'RJ04'),
(10, 'Hatchback', 'Mercedes', '2022 Mercedes AMG', '8300', 'Petrol', 'Automatic', 'A45S 4MATIC+', 75, 2022, '2022 MERCEDES AMG A45S 4MATIC+.jpg', 'HR26'),
(11, 'Sedan', 'Audi', '2015 Audi A6', '59000', 'Petrol', 'Automatic', '35 TFSI Premium', 22.72, 2016, '2015 Audi A6 35 TFSI Premium.webp', 'RJ27'),
(12, 'Sedan', 'Honda', '2021 Honda WR-V', '41000', 'Diesel', 'Manual', 'i-Dtec VX', 9.94, 2021, '2021 Honda WR-V i-DTEC VX.webp', 'RJ27'),
(13, 'SUV', 'Land-Rover', '2021 Land Rover Defender', '20600', 'Petrol', 'Automatic', '90 P300 SE', 89, 2021, '2021 LAND ROVER DEFENDER 90 P300 SE.jpeg', 'RJ19'),
(14, 'Sedan', 'Skoda', '2019 Skoda Superb', '38503', 'Petrol', 'Automatic', '1.8 TSI AT', 15.25, 2019, '2019 Skoda Superb Style 1.8 TSI AT.webp', 'Rj27'),
(15, 'SUV', 'Nissan', '2022 Nissan Magnite ', '23907', 'Petrol', 'Manual', 'Turbo XV Premium BSVI', 7.8, 2022, '2022 Nissan Magnite Turbo XV Premium BSVI.webp', 'DL12'),
(16, 'SUV', 'Jeep', '2024 Jeep Wrangler', '11000', 'Petrol', 'Automatic', 'Rubicon BSVI', 55, 2024, '2024 Jeep Wrangler Rubicon BSVI', 'HR26'),
(17, 'Sedan', 'Volkswagen', '2019 Volkswagen Vento', '75000', 'Petrol', 'Manual', '1.6 Highline', 7.75, 2019, '2019 Volkswagen Vento 1.6 Highline.webp', 'RJ27'),
(18, 'SUV', 'Porshe', '2023 Porshe Macan', '5500', 'Petrol', 'Automatic', 'Standard BSVI', 84, 2023, '2023 Porsche Macan Standard BSVI.webp', 'DL1C'),
(19, 'SUV', 'Jeep', '2018 Jeep Compass 2.0 Limited', '92908', 'Petrol', 'Manua', 'Rubicon BSVI', 10.6, 2024, '2018 Jeep Compass 2.0 Limited', 'HR26'),
(20, 'SUV', 'Jeep', '2019 Jeep Compass 1.4 Sport Pl', '66960', 'Petrol', 'Manual', '2019', 10.47, 2019, '2019 Jeep Compass 1.4 Sport Plus BSIV', ' Mohali');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `Id` int(10) NOT NULL,
  `category` varchar(30) NOT NULL,
  `pname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Id`, `category`, `pname`) VALUES
(2, 'Sedan', 'Hyundai-Verna-Side.webp'),
(3, 'Hatchback', 'Hatchback'),
(4, 'MUV', 'MUV'),
(5, 'Coupe', 'Coupe');

-- --------------------------------------------------------

--
-- Table structure for table `cimage`
--

CREATE TABLE `cimage` (
  `Id` int(30) NOT NULL,
  `img1` varchar(50) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `img3` varchar(50) NOT NULL,
  `img4` varchar(50) NOT NULL,
  `img5` varchar(50) NOT NULL,
  `img6` varchar(50) NOT NULL,
  `img7` varchar(50) NOT NULL,
  `img8` varchar(50) NOT NULL,
  `img9` varchar(50) NOT NULL,
  `img10` varchar(50) NOT NULL,
  `img11` varchar(50) NOT NULL,
  `img12` varchar(50) NOT NULL,
  `img13` varchar(50) NOT NULL,
  `img14` varchar(50) NOT NULL,
  `img15` varchar(50) NOT NULL,
  `car_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cimage`
--

INSERT INTO `cimage` (`Id`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `img11`, `img12`, `img13`, `img14`, `img15`, `car_id`) VALUES
(1, '2017 Chevrolet Cruze LTZ AT.webp', '2017 Chevrolet Cruze LTZ AT1.webp', '2017 Chevrolet Cruze LTZ AT2.webp', '2017 Chevrolet Cruze LTZ AT3.webp', '2017 Chevrolet Cruze LTZ AT4.webp', '2017 Chevrolet Cruze LTZ AT5.webp', '2017 Chevrolet Cruze LTZ AT6.webp', '2017 Chevrolet Cruze LTZ AT7.webp', '2017 Chevrolet Cruze LTZ AT8.webp', '2017 Chevrolet Cruze LTZ AT9.webp', '', '', '', '', '', 1),
(2, '2019 Ford Endeavour Titanium 2.2 4x2 MT.avif', '2019 Ford Endeavour Titanium 2.2 4x2 MT1.avif', '2019 Ford Endeavour Titanium 2.2 4x2 MT2.avif', '2019 Ford Endeavour Titanium 2.2 4x2 MT3.avif', '2019 Ford Endeavour Titanium 2.2 4x2 MT4.avif', '2019 Ford Endeavour Titanium 2.2 4x2 MT5.avif', '2019 Ford Endeavour Titanium 2.2 4x2 MT6.avif', '2019 Ford Endeavour Titanium 2.2 4x2 MT7.avif', '2019 Ford Endeavour Titanium 2.2 4x2 MT8.avif', '2019 Ford Endeavour Titanium 2.2 4x2 MT9.avif', '', '', '', '', '', 2),
(3, '2019 Maruti Suzuki Baleno Alpha Petrol.avif', '2019 Maruti Suzuki Baleno Alpha Petrol1.avif', '2019 Maruti Suzuki Baleno Alpha Petrol2.avif', '2019 Maruti Suzuki Baleno Alpha Petrol3.avif', '2019 Maruti Suzuki Baleno Alpha Petrol4.avif', '2019 Maruti Suzuki Baleno Alpha Petrol5.avif', '2019 Maruti Suzuki Baleno Alpha Petrol6.avif', '2019 Maruti Suzuki Baleno Alpha Petrol7.avif', '2019 Maruti Suzuki Baleno Alpha Petrol8.avif', '2019 Maruti Suzuki Baleno Alpha Petrol9.avif', '', '', '', '', '', 3),
(4, '1.avif', '2.avif', '3.avif', '4.avif', '5.avif', '6.avif', '7.avif', '8.avif', '9.avif', '10.avif', '', '', '', '', '', 4),
(5, '1.avif', '2.avif', '3.avif', '4.avif', '5.avif', '6.avif', '7.avif', '8.avif', '9.avif', '10.avif', '', '', '', '', '', 5),
(6, '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg', '', '', '', '', '', 6),
(7, '1.avif', '2.avif', '3.avif', '4.avif', '5.avif', '6.avif', '7.avif', '8.avif', '9.avif', '10.avif', '', '', '', '', '', 7),
(8, '1.webp', '2.webp', '3.webp', '4.webp', '5.webp', '6.webp', '7.webp', '8.webp', '9.webp', '10.webp', '', '', '', '', '', 8),
(9, '2020 KIA CARNIVAL PREMIUM 2.2 7 STR.webp', '2020 KIA CARNIVAL PREMIUM 2.2 7 STR2.webp', '2020 KIA CARNIVAL PREMIUM 2.2 7 STR3.webp', '2020 KIA CARNIVAL PREMIUM 2.2 7 STR4.webp', '2020 KIA CARNIVAL PREMIUM 2.2 7 STR5.webp', '2020 KIA CARNIVAL PREMIUM 2.2 7 STR6.webp', '2020 KIA CARNIVAL PREMIUM 2.2 7 STR7.webp', '2020 KIA CARNIVAL PREMIUM 2.2 7 STR8.webp', '2020 KIA CARNIVAL PREMIUM 2.2 7 STR9.webp', '2020 KIA CARNIVAL PREMIUM 2.2 7 STR10.webp', '', '', '', '', '', 9),
(10, '1.jpg', '2.jpg', '3.jpg', '4.jpg', '5.jpg', '6.jpg', '7.jpg', '8.jpg', '9.jpg', '10.jpg', '', '', '', '', '', 10),
(11, '1.avif', '2.avif', '3.avif', '4.avif', '5.avif', '6.avif', '7.avif', '8.avif', '9.avif', '10.avif', '', '', '', '', '', 11),
(12, '1.avif', '2.avif', '3.avif', '4.avif', '5.avif', '6.avif', '7.avif', '8.avif', '9.avif', '10.avif', '', '', '', '', '', 12),
(13, '2021 LAND ROVER DEFENDER 90 P300 SE.jpeg', '2021 LAND ROVER DEFENDER 90 P300 SE1.jpeg', '2021 LAND ROVER DEFENDER 90 P300 SE2.jpeg', '2021 LAND ROVER DEFENDER 90 P300 SE3.jpeg', '2021 LAND ROVER DEFENDER 90 P300 SE4.jpeg', '2021 LAND ROVER DEFENDER 90 P300 SE5.jpeg', '2021 LAND ROVER DEFENDER 90 P300 SE6.jpeg', '2021 LAND ROVER DEFENDER 90 P300 SE7.jpeg', '2021 LAND ROVER DEFENDER 90 P300 SE8.jpeg', '', '', '', '', '', '', 13),
(14, '1.webp', '2.webp', '3.webp', '4.webp', '5.webp', '6.webp', '7.webp', '8.webp', '', '', '', '', '', '', '', 14),
(15, '1.webp', '2.webp', '3.webp', '4.webp', '5.webp', '6.webp', '7.webp', '8.webp', '9.webp', '', '', '', '', '', '', 15),
(16, '1.webp', '2.webp', '3.webp', '4.webp', '5.webp', '6.webp', '7.webp', '8.webp', '9.webp', '', '', '', '', '', '', 16),
(17, '2019 Volkswagen Vento 1.6 Highline.webp', '2019 Volkswagen Vento 1.6 Highline1.webp', '2019 Volkswagen Vento 1.6 Highline3.webp', '2019 Volkswagen Vento 1.6 Highline4.webp', '2019 Volkswagen Vento 1.6 Highline5.webp', '2019 Volkswagen Vento 1.6 Highline6.webp', '2019 Volkswagen Vento 1.6 Highline7.webp', '2019 Volkswagen Vento 1.6 Highline8.webp', '2019 Volkswagen Vento 1.6 Highline9.webp', '', '', '', '', '', '', 17),
(18, '1.webp', '2.webp', '3.webp', '4.webp', '5.webp', '6.webp', '7.webp', '8.webp', '9.webp', '', '', '', '', '', '', 18),
(19, '2018 Jeep Compass 2.0 Limited', '2.webp', '3.webp', '4.webp', '5.webp', '6.webp', '7.webp', '8.webp', '9.webp', '', '', '', '', '', '', 19),
(20, '2015 Audi A6 35 TFSI Premium.w', '2016 MERCEDES BENZ G63 AMG.jpg', '2017 Chevrolet Cruze LTZ AT.we', '', '', '', '', '', '', '', '', '', '', '', '', 20);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `carname` varchar(30) NOT NULL,
  `carmodel` int(30) NOT NULL,
  `carprice` double NOT NULL,
  `note` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `name`, `phone`, `email`, `carname`, `carmodel`, `carprice`, `note`) VALUES
(1, 'CAR SELLING', 0, '', '2019 Volkswagen Vento', 2, 7.75, ''),
(2, 'CAR SELLING', 0, '', '2019 Volkswagen Vento', 2, 7.75, ''),
(3, 'CAR SELLING', 0, '', '2019 Volkswagen Vento', 2, 7.75, ''),
(4, 'asas', 0, '', '2021 Land Rover Defender', 90, 89, ''),
(5, 'qwq', 0, '', '2021 Land Rover Defender', 90, 89, ''),
(6, '', 0, '', '', 0, 0, ''),
(7, '', 0, '', '', 0, 0, ''),
(8, '', 0, '', '', 0, 0, ''),
(9, '', 0, '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(30) NOT NULL,
  `features` varchar(500) NOT NULL,
  `car_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `features`, `car_id`) VALUES
(1, 'Power Steering,Power Window Front,Air Conditioner,Heater,Adjustable Head Lights,Anti Lock Braking System,Cd Player,Keyless Entry,Rear AC Vents,Sun Roof', 1),
(2, 'Power Steering,Power Window Front,Air Conditioner,Anti Lock Braking System,Central Locking,Power Window Rear,Keyless Entry,Trunk Light,Cruise Control,Rear AC Vents,Leather Steering Wheel,Sun Roof', 2),
(3, 'Power Steering,Power Window Front,Air Conditioner,Anti Lock Braking System,Central Locking,Power Window Rear,Keyless Entry,Trunk Light,Multifunction Steering Wheel,Rear AC Vents,Electric Folding Rear View Mirror,Anti Theft Alarm', 3),
(4, 'Power Steering,Power Window Front,Air Conditioner,Heater,Central Locking,Cd Player,Power Window Rear,Keyless Entry,Leather Steering Wheel,Anti Theft Alarm', 4),
(5, 'Power Steering,Power Window Front,Air Conditioner,Anti Lock Braking System,Central Locking,Power Window Rear,Keyless Entry,Trunk Light,Multifunction Steering Wheel,Cruise Control,Cooled GloveBox,Leather Steering Wheel,Electric Folding Rear View Mirror,Anti Theft Alarm', 5),
(6, 'Power Steering,Power Window Front,Air Conditioner,Adjustable Head Lights,Anti Lock Braking System,Central Locking,Power Window Rear,Keyless Entry,Trunk Light,Multifunction Steering Wheel,Cruise Control,Rear AC Vents,Cooled GloveBox,Leather Steering Wheel,Electric Folding Rear View Mirror,Anti Theft Alarm', 6),
(7, 'Power Steering,Power Window Front,Air Conditioner,Anti Lock Braking System,Central Locking,Keyless Entry,Multifunction Steering Wheel,Cruise Control,Rear AC Vents,Cooled GloveBox,Leather Steering Wheel,Sun Roof,Electric Folding Rear View Mirror,Anti Theft Alarm', 7),
(8, 'Power Steering,Power Window Front,Air Conditioner,Adjustable Head Lights,Central Locking,Power Window Rear,Keyless Entry,Trunk Light,Rear AC Vents,Leather Steering Wheel,Electric Folding Rear View Mirror,Anti Theft Alarm', 8),
(9, 'Power Steering,Power Window Front,Air Conditioner,Anti Lock Braking System,Keyless Entry,Trunk Light,Multifunction Steering Wheel,Cruise Control,Cooled GloveBox,Leather Steering Wheel,Sun Roof,Anti Theft Alarm', 9),
(10, 'Power Steering,Power Window Front,Air Conditioner,Anti Lock Braking System,Central Locking,Power Window Rear,Keyless Entry,Multifunction Steering Wheel,Cruise Control,Leather Steering Wheel,Electric Folding Rear View Mirror,Anti Theft Alarm', 10),
(11, 'Power Steering,Power Window Front,Adjustable Head Lights,Anti Lock Braking System,Keyless Entry,Trunk Light,Multifunction Steering Wheel,Cruise Control,Leather Steering Wheel,Sun Roof,Electric Folding Rear View Mirror,Anti Theft Alarm', 11),
(12, 'Power Steering,Air Conditioner,Central Locking,Power Window Rear,Keyless Entry,Trunk Light,Multifunction Steering Wheel,Rear AC Vents,Cooled GloveBox,Leather Steering Wheel,Sun Roof,Anti Theft Alarm', 12),
(13, 'Power Steering,Anti Lock Braking System,Central Locking,Keyless Entry,Trunk Light,Multifunction Steering Wheel,Cruise Control,Cooled GloveBox,Leather Steering Wheel,Sun Roof,Electric Folding Rear View Mirror,Anti Theft Alarm', 13),
(14, 'Power Steering,Anti Lock Braking System,Central Locking,Keyless Entry,Trunk Light,Multifunction Steering Wheel,Cruise Control,Rear AC Vents,Cooled GloveBox,Leather Steering Wheel,Electric Folding Rear View Mirror,Anti Theft Alarm', 14),
(15, 'Power Steering,Heater,Adjustable Head Lights,Cd Player,Power Window Rear,Keyless Entry,Multifunction Steering Wheel,Cruise Control,Rear AC Vents,Cooled GloveBox,Electric Folding Rear View Mirror,Anti Theft Alarm', 15),
(16, 'Power Steering,Air Conditioner,Anti Lock Braking System,Keyless Entry,Multifunction Steering Wheel,Cruise Control,Cooled GloveBox,Leather Steering Wheel,Electric Folding Rear View Mirror,Anti Theft Alarm', 16),
(17, 'Power Steering,Power Window Front,Air Conditioner,Anti Lock Braking System,Central Locking,Keyless Entry,Trunk Light,Multifunction Steering Wheel,Leather Steering Wheel,Electric Folding Rear View Mirror', 17),
(18, 'Power Steering,Fog Lights Rear,Anti Lock Braking System,Central Locking,Keyless Entry,Trunk Light,Multifunction Steering Wheel,Cruise Control,Cooled GloveBox,Leather Steering Wheel,Electric Folding Rear View Mirror,Anti Theft Alarm', 18),
(19, 'Power Steering,Fog Lights Rear,Anti Lock Braking System,Central Locking,Keyless Entry,Trunk Light,Multifunction Steering Wheel,Cruise Control,Cooled GloveBox,Leather Steering Wheel,Electric Folding Rear View Mirror,Anti Theft Alarm', 19),
(20, 'Power Steering,Power Window Front,Air Conditioner,Adjustable Head Lights,Fog Lights Rear,Anti Lock Braking System,Central Locking,Cd Player,Power Window Rear,Trunk Light,Cruise Control,Leather Steering Wheel', 20);

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE `specification` (
  `s_id` int(10) NOT NULL,
  `Mileage` varchar(30) NOT NULL,
  `Engine` varchar(30) NOT NULL,
  `Max Power` varchar(30) NOT NULL,
  `Torque` varchar(30) NOT NULL,
  `Seats` varchar(30) NOT NULL,
  `Ownership` varchar(30) NOT NULL,
  `Engine Type` varchar(30) NOT NULL,
  `No of Cylinder` varchar(30) NOT NULL,
  `Length` varchar(30) NOT NULL,
  `Width` varchar(30) NOT NULL,
  `Height` varchar(30) NOT NULL,
  `Wheel Base` varchar(30) NOT NULL,
  `Kerb Weight` varchar(30) NOT NULL,
  `Gear Box` varchar(30) NOT NULL,
  `Drive Type` varchar(30) NOT NULL,
  `Steering Type` varchar(30) NOT NULL,
  `Front Brake` varchar(30) NOT NULL,
  `Rear Brake` varchar(30) NOT NULL,
  `Alloy Wheel Size` varchar(30) NOT NULL,
  `car_id` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`s_id`, `Mileage`, `Engine`, `Max Power`, `Torque`, `Seats`, `Ownership`, `Engine Type`, `No of Cylinder`, `Length`, `Width`, `Height`, `Wheel Base`, `Kerb Weight`, `Gear Box`, `Drive Type`, `Steering Type`, `Front Brake`, `Rear Brake`, `Alloy Wheel Size`, `car_id`) VALUES
(1, '18.1', '1991', '147.9', '327', '5', 'Second Hand', '4 Cylinder,VCDI', '4', '4597', '1788', '1477', '2685', '1520', '6', 'RWD', 'Power', 'Disc', 'Disc', '16', '1'),
(2, '14.2', '2198', '158', '385', '7', 'First Hand', '4 Cylinder,VCDI', '4', '4892', '1860', '1837', '2850', '2310', '6', 'RWD', 'Power', 'Disc', 'Disc', '18', '2'),
(3, '21', '1197', '81.80', '113', '5', 'First Hand', '4 Cylinder', '4', '3995', '1745', '1510', '2520', '1340', '5', 'FWD', 'Power', 'Disc', 'Drum', '16', '3'),
(4, '22', '999', '67', '91', '5', 'First Hand', '3 Cyclinder', '3', '3731', '1579', '1490', '2500', '765', '5', 'FWD', 'Power', 'Disc', 'Drum', '14', '4'),
(5, '19.1', '1199', '84.82', '113', '5', 'First Hand', '4 Cylinder', '4', '3990', '1755', '1523', '2501', '800', '5', 'FWD', 'Power', 'Disc', 'Drum', '16', '5'),
(6, '7.24', '5461', '571', '760', '5', 'First Hand', 'Turbocharged, V-8 ', '8', '4673', '1855', '1938', '2850', '2550', '7', 'AWD', 'Power', 'Disc', 'Disc', '20', '6'),
(7, '17.4', '1591', '121', '158', '5', 'First Hand', '4 Cylinder', '4', '4440', '1729', '1475', '2600', '1248', '6', 'FWD', 'Power', 'Disc', 'Disc', '16', '7'),
(8, '14', '2393', '147.5', '343', '8', 'First Hand', '4 Cylinder', '4', '4735', '1830', '1795', '2750', '1840', '5', 'RWD', 'Power', 'Disc', 'Drum', '16', '8'),
(9, '13', '2199', '380', '440', '8', 'First Hand', '4 Cylinder', '4', '5115', '1985', '1740', '3060', '2150', '8', 'FWD', 'Power', 'Disc', 'Disc', '19', '9'),
(10, '8', '1991', '450', '500', '5', 'First Hand', 'Turbocharged 4 Cylinder', '4', '4453', '1850', '1414', '2729', '1680', '8', 'AWD', 'Power', 'Disc', 'Disc', '19', '10'),
(11, '13.53', '1968', '150', '320', '5', 'First Hand', '4 Cylinder', '4', '4927', '1874', '1465', '2921', '2145', '6', 'RWD', 'Power', 'Disc', 'Disc', '17', '11'),
(12, '23.7', '1498', '360', '200', '5', 'First Hand', '4 Cylinder', '4', '3999', '1840', '1620', '2655', '1510', '6', 'FWD', 'Power', 'Disc', 'Drum', '16', '12'),
(13, '', '1997', '290', '400', '5', 'First Hand', 'Turbocharged 4 Cylinder', '4', '4583', '2008', '1974', '2587', '2286', '8', 'AWD', 'Power', 'Disc', 'Disc', '20', '13'),
(14, '14.67', '1798', '177.46', '250', '5', 'Second Hand', 'Petrol Engine', '4', '4861', '1864', '1483', '2841', '2030', '7', 'FWD', 'Power', 'Disc ', 'Disc', '17', '14'),
(15, '20', '999', '98.63', '160', '5', 'First Hand', '1.0 Turbo Petrol', '3', '3994', '1758', '1572', '2500', '1014', '5', 'FWD', 'Elecronic', 'Disc', 'Drum', '16', '15'),
(16, '12.1', '1998', '268', '400', '5', 'First Hand', '2.0L GME T4 DI TC', '4', '4882', '1894', '1848', '3008', '2027', '8', '4WD', 'Power', 'Ventilated Disc', 'Ventilated Disc', '17', '16'),
(17, '16.09', '1598', '103.2', '153', '5', 'First Hand', 'MPI Petrol Engine', '4', '4390', '1699', '1467', '2553', '1145', '5', 'FWD', 'Power', 'Ventilated Disc', 'Drum', '15', '17'),
(18, '12', '1984', '261.49', '400', '5', 'First Hand', 'Twin Turbocharged Engine', '4', '4726', '2097', '1621', '2807', '1845', '7', 'AWD', 'Power', 'Ventilated Disc', 'Ventilated Disc', '19', '18'),
(19, '8', '1991', '450', '500', '5', 'First Hand', 'Turbocharged 4 Cylinder', '4', '4453', '1850', '1414', '2729', '1680', '8', 'AWD', 'Power', 'Disc', 'Disc', '19', '19\r\n'),
(20, '16', '1368', '160', '400', '5', 'First Hand', 'Twin Turbocharged Engine', '4', '4726', '2097', '1621', '2807', '1845', '7', 'AWD', 'Power', 'Ventilated Disc', 'Ventilated Disc', '19', '20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car_detail`
--
ALTER TABLE `car_detail`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `cimage`
--
ALTER TABLE `cimage`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specification`
--
ALTER TABLE `specification`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car_detail`
--
ALTER TABLE `car_detail`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cimage`
--
ALTER TABLE `cimage`
  MODIFY `Id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `specification`
--
ALTER TABLE `specification`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
