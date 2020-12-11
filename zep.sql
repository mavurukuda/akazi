-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2020 at 04:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zep`
--

-- --------------------------------------------------------

--
-- Table structure for table `alerts`
--

CREATE TABLE `alerts` (
  `id` int(11) NOT NULL,
  `zan_id` int(50) DEFAULT NULL,
  `alertstatus` varchar(30) DEFAULT NULL,
  `frequency` varchar(30) DEFAULT NULL,
  `alertlocation` varchar(50) DEFAULT NULL,
  `alertname` varchar(50) DEFAULT NULL,
  `alertdate` varchar(30) DEFAULT NULL,
  `keywords` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alerts`
--

INSERT INTO `alerts` (`id`, `zan_id`, `alertstatus`, `frequency`, `alertlocation`, `alertname`, `alertdate`, `keywords`) VALUES
(1, 610138968, '2', 'hhh', 'Harare', 'Alert Name ', '2020-Jun-Sat', 'not applicable');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `app_id` int(11) NOT NULL,
  `zan_id` int(10) NOT NULL,
  `mobile_no` varchar(25) NOT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(25) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`app_id`, `zan_id`, `mobile_no`, `email`, `password`, `role`, `username`) VALUES
(1, 610138968, '0772108420', 'gman@gmail.com', '1234', 'Admin', NULL),
(2, 2, '0899', 'gvgv', 'hhhh', 'User', NULL),
(3, 3, '0783840332', NULL, 'gee', 'Admin', NULL),
(4, 4, '0775396756', NULL, '1234', NULL, 'tawanda'),
(5, 5, '0774891161', NULL, 'gee', NULL, 'mhandu');

-- --------------------------------------------------------

--
-- Table structure for table `candidatesapplyed`
--

CREATE TABLE `candidatesapplyed` (
  `id` int(11) NOT NULL,
  `zen_id` varchar(50) DEFAULT NULL,
  `skiil_id` varchar(30) DEFAULT NULL,
  `dateapplied` varchar(30) DEFAULT NULL,
  `isApplied` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `rate` int(30) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `notes` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidatesapplyed`
--

INSERT INTO `candidatesapplyed` (`id`, `zen_id`, `skiil_id`, `dateapplied`, `isApplied`, `status`, `rate`, `fname`, `notes`) VALUES
(7, '610138968', ' 9', '2020-Jun-Sun', 'Yes', 'interviewed', 4, NULL, NULL),
(8, '234344', '9', NULL, NULL, NULL, NULL, NULL, NULL),
(10, '610138968', '', '20202020-JulJul-WedWed', NULL, NULL, NULL, 'nn', 'sssss'),
(11, '610138968', '', '20202020-JulJul-WedWed', NULL, NULL, NULL, 'nn', 'sssss'),
(12, '610138968', '', '20202020-JulJul-WedWed', NULL, NULL, NULL, 'Greatman Mhandu', 'hhgdhdgg hfhrhrh'),
(13, '610138968', '', '20202020-JulJul-WedWed', NULL, NULL, NULL, 'Greatman Mhandu', 'hhgdhdgg hfhrhrh');

-- --------------------------------------------------------

--
-- Table structure for table `computer_literacy`
--

CREATE TABLE `computer_literacy` (
  `literacy_id` int(11) NOT NULL,
  `zan_id` varchar(25) NOT NULL,
  `computer_skill` varchar(25) NOT NULL,
  `proficiency` varchar(25) NOT NULL,
  `certificate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer_literacy`
--

INSERT INTO `computer_literacy` (`literacy_id`, `zan_id`, `computer_skill`, `proficiency`, `certificate`) VALUES
(1, '610138968', 'MSWORD', 'VERY GOOD', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `COUNTRY_ID` double DEFAULT NULL,
  `COUNTRY_NAME` varchar(24) DEFAULT NULL,
  `COUNTRY_NATIONALITY` varchar(24) DEFAULT NULL,
  `COUNTRY_ICAO` char(3) DEFAULT NULL,
  `ENABLE_FLAG` tinyint(4) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`COUNTRY_ID`, `COUNTRY_NAME`, `COUNTRY_NATIONALITY`, `COUNTRY_ICAO`, `ENABLE_FLAG`) VALUES
(135, 'MEXICO', 'MEXICO', 'MEX', 1),
(136, 'MICRONESIAFEDSTATES', 'MICRONESIAFEDSTATES', 'FSM', 1),
(137, 'MONACO', 'MONACO', 'MCO', 1),
(138, 'MONGOLIA', 'MONGOLIA', 'MNG', 1),
(139, 'MONTSERRAT', 'MONTSERRAT', 'MSR', 1),
(140, 'MOROCCO', 'MOROCCO', 'MAR', 1),
(141, 'MOZAMBIQUE', 'MOZAMBIQUE', 'MOZ', 1),
(142, 'MYANMAR', 'MYANMAR', 'MMR', 1),
(143, 'NAMIBIA', 'NAMIBIA', 'NAM', 1),
(144, 'NAURU', 'NAURU', 'NRU', 1),
(145, 'NEPAL', 'NEPAL', 'NPL', 1),
(146, 'NETHERLANDSKINGDOM', 'NETHERLANDSKINGDOM', 'NLD', 1),
(147, 'NETHERLANDS ANTILLES', 'NETHERLANDS ANTILLES', 'ANT', 1),
(148, 'NEUTRAL ZONE', 'NEUTRAL ZONE', 'NTZ', 1),
(149, 'NEW CALEDONIA', 'NEW CALEDONIA', 'NCL', 1),
(150, 'NEW ZEALAND', 'NEW ZEALAND', 'NZL', 1),
(151, 'NICARAGUA', 'NICARAGUA', 'NIC', 1),
(152, 'NIGER', 'NIGER', 'NER', 1),
(153, 'NIGERIA', 'NIGERIA', 'NGA', 1),
(154, 'NIUE', 'NIUE', 'NIU', 1),
(155, 'NORFOLK ISLAND', 'NORFOLK ISLAND', 'NFK', 1),
(156, 'NORTHERNMARIANAISLANDS', 'NORTHERNMARIANAISLANDS', 'MNP', 1),
(157, 'NORWAY', 'NORWAY', 'NOR', 1),
(158, 'OMAN', 'OMAN', 'OMN', 1),
(159, 'PAKISTAN', 'PAKISTAN', 'PAK', 1),
(160, 'PALAU', 'PALAU', 'PLW', 1),
(161, 'PANAMA', 'PANAMA', 'PAN', 1),
(162, 'PAPUA NEW GUINEA', 'PAPUA NEW GUINEA', 'PNG', 1),
(163, 'PARAGUAY', 'PARAGUAY', 'PRY', 1),
(164, 'PERU', 'PERU', 'PER', 1),
(165, 'PHILIPPINES', 'PHILIPPINES', 'PHL', 1),
(166, 'PITCAIRN', 'PITCAIRN', 'PCN', 1),
(167, 'POLAND', 'POLAND', 'POL', 1),
(168, 'PORTUGAL', 'PORTUGAL', 'PRT', 1),
(169, 'PUERTO RICO', 'PUERTO RICO', 'PRI', 1),
(170, 'QATAR', 'QATAR', 'QAT', 1),
(171, 'REPUBLIC OF KOREA', 'REPUBLIC OF KOREA', 'KOR', 1),
(172, 'REPUBLIC OF MOLDOVA', 'REPUBLIC OF MOLDOVA', 'MDA', 1),
(173, 'R?UNION', 'R?UNION', 'REU', 1),
(174, 'ROMANIA', 'ROMANIA', 'ROM', 1),
(175, 'RUSSIAN FEDERATION', 'RUSSIAN FEDERATION', 'RUS', 1),
(176, 'RWANDA', 'RWANDA', 'RWA', 1),
(177, 'SAINT HELENA', 'SAINT HELENA', 'SHN', 1),
(178, 'SAINT KITTS AND NEVIS', 'SAINT KITTS AND NEVIS', 'KNA', 1),
(179, 'SAINT LUCIA', 'SAINT LUCIA', 'LCA', 1),
(180, 'SAINT PIERRE MIQUELON', 'SAINT PIERRE MIQUELON', 'SPM', 1),
(181, 'SAINTVINCENTGRENADINES', 'SAINTVINCENTGRENADINES', 'VCT', 1),
(182, 'SAMOA', 'SAMOA', 'WSM', 1),
(183, 'SAN MARINO', 'SAN MARINO', 'SMR', 1),
(184, 'SAO TOME AND PRINCIPE', 'SAO TOME AND PRINCIPE', 'STP', 1),
(185, 'SAUDI ARABIA', 'SAUDI ARABIA', 'SAU', 1),
(186, 'SENEGAL', 'SENEGAL', 'SEN', 1),
(187, 'SEYCHELLES', 'SEYCHELLES', 'SYC', 1),
(188, 'SIERRA LEONE', 'SIERRA LEONE', 'SLE', 1),
(189, 'SINGAPORE', 'SINGAPORE', 'SGP', 1),
(190, 'SLOVAKIA', 'SLOVAKIA', 'SVK', 1),
(191, 'SLOVENIA', 'SLOVENIA', 'SVN', 1),
(192, 'SOLOMON ISLANDS', 'SOLOMON ISLANDS', 'SLB', 1),
(193, 'AFGHANISTAN', 'AFGHANISTAN', 'AFG', 1),
(194, 'SOMALIA', 'SOMALIA', 'SOM', 1),
(195, 'SOUTH AFRICA', 'SOUTH AFRICA', 'ZAF', 1),
(196, 'SOUTHGEORGIASANDWICH', 'SOUTHGEORGIASANDWICH', 'SGS', 1),
(197, 'SPAIN', 'SPAIN', 'ESP', 1),
(198, 'SRI LANKA', 'SRI LANKA', 'LKA', 1),
(199, 'SUDAN', 'SUDAN', 'SDN', 1),
(200, 'SURINAME', 'SURINAME', 'SUR', 1),
(201, 'SVALBARDJANMAYENISLANDS', 'SVALBARDJANMAYENISLANDS', 'SJM', 1),
(202, 'SWAZILAND', 'SWAZILAND', 'SWZ', 1),
(203, 'SWEDEN', 'SWEDEN', 'SWE', 1),
(204, 'SWITZERLAND', 'SWITZERLAND', 'CHE', 1),
(205, 'SYRIAN ARAB REPUBLIC', 'SYRIAN ARAB REPUBLIC', 'SYR', 1),
(206, 'TAIWAN PROVINCE OF CHINA', 'TAIWAN PROVINCE OF CHINA', 'TWN', 1),
(207, 'TAJIKISTAN', 'TAJIKISTAN', 'TJK', 1),
(208, 'THAILAND', 'THAILAND', 'THA', 1),
(209, 'MACEDONIA', 'MACEDONIA', 'MKD', 1),
(210, 'TOGO', 'TOGO', 'TGO', 1),
(211, 'TOKELAU', 'TOKELAU', 'TKL', 1),
(212, 'TONGA', 'TONGA', 'TON', 1),
(213, 'TRINIDAD AND TOBAGO', 'TRINIDAD AND TOBAGO', 'TTO', 1),
(214, 'TUNISIA', 'TUNISIA', 'TUN', 1),
(215, 'TURKEY', 'TURKEY', 'TUR', 1),
(216, 'TURKMENISTAN', 'TURKMENISTAN', 'TKM', 1),
(217, 'TURKS AND CAICOS ISLANDS', 'TURKS AND CAICOS ISLANDS', 'TCA', 1),
(218, 'TUVALU', 'TUVALU', 'TUV', 1),
(219, 'UGANDA', 'UGANDA', 'UGA', 1),
(220, 'UKRAINE', 'UKRAINE', 'UKR', 1),
(221, 'UNITED ARAB EMIRATES', 'UNITED ARAB EMIRATES', 'ARE', 1),
(222, 'UNITED KINGDOM CITIZEN', 'UNITED KINGDOM CITIZEN', 'GBR', 1),
(223, 'UNITED KINGDOM DTCITIZEN', 'UNITED KINGDOM DTCITIZEN', 'GBD', 1),
(224, 'UNITED KINGDOM  NATIONAL', 'UNITED KINGDOM  NATIONAL', 'GBN', 1),
(225, 'UNITED KINGDOM OVERSEAC', 'UNITED KINGDOM OVERSEAC', 'GBO', 1),
(226, 'UNITED KINGDOM PROTECTP', 'UNITED KINGDOM PROTECTP', 'GBP', 1),
(227, 'UNITED KINGDOM  SUBJECT', 'UNITED KINGDOM  SUBJECT', 'GBS', 1),
(228, 'UNITED REPUBLIC TANZANIA', 'TANZANIAN', 'TZA', 1),
(229, 'UNITED STATES OF AMERICA', 'UNITED STATES OF AMERICA', 'USA', 1),
(230, 'UNITED STATES MOI', 'UNITED STATES MOI', 'UMI', 1),
(231, 'URUGUAY', 'URUGUAY', 'URY', 1),
(232, 'UZBEKISTAN', 'UZBEKISTAN', 'UZB', 1),
(233, 'VANUATU', 'VANUATU', 'VUT', 1),
(234, 'VENEZUELA', 'VENEZUELA', 'VEN', 1),
(235, 'VIET NAM', 'VIET NAM', 'VNM', 1),
(236, 'VIRGIN ISLANDS GB', 'VIRGIN ISLANDS GB', 'VGB', 1),
(237, 'VIRGIN ISLANDS US', 'VIRGIN ISLANDS US', 'VIR', 1),
(238, 'WALLISFUTUNA ISLANDS', 'WALLISFUTUNA ISLANDS', 'WLF', 1),
(239, 'WESTERN SAHARA', 'WESTERN SAHARA', 'ESH', 1),
(240, 'YEMEN', 'YEMEN', 'YEM', 1),
(241, 'ZAIRE', 'ZAIRE', 'ZAR', 1),
(242, 'ZAMBIA', 'ZAMBIA', 'ZMB', 1),
(243, 'ZIMBABWE', 'ZIMBABWE', 'ZWE', 1),
(244, 'UNITED NATIONS ORG', 'UNITED NATIONS ORG', 'UNO', 1),
(245, 'UNITED NATIONS', 'UNITED NATIONS', 'UNA', 1),
(246, 'STATELESS', 'STATELESS', 'XXA', 1),
(247, 'REFUGEE', 'REFUGEE', 'XXB', 1),
(248, 'REFUGEE NON-CONVENTION', 'REFUGEE NON-CONVENTION', 'XXC', 1),
(249, 'UNSPECIFIED / UNKNOWN', 'UNSPECIFIED / UNKNOWN', 'XXX', 1),
(1, 'ALBANIA', 'ALBANIA', 'ALB', 1),
(2, 'ALGERIA', 'ALGERIA', 'DZA', 1),
(3, 'AMERICAN SAMOA', 'AMERICAN SAMOA', 'ASM', 1),
(4, 'ANDORRA', 'ANDORRA', 'AND', 1),
(5, 'ANGOLA', 'ANGOLA', 'AGO', 1),
(6, 'ANGUILLA', 'ANGUILLA', 'AIA', 1),
(7, 'ANTARCTICA', 'ANTARCTICA', 'ATA', 1),
(8, 'ANTIGUA AND BARBUDA', 'ANTIGUA AND BARBUDA', 'ATG', 1),
(9, 'ARGENTINA', 'ARGENTINA', 'ARG', 1),
(10, 'ARMENIA', 'ARMENIA', 'ARM', 1),
(11, 'ARUBA', 'ARUBA', 'ABW', 1),
(12, 'AUSTRALIA', 'AUSTRALIA', 'AUS', 1),
(13, 'AUSTRIA', 'AUSTRIA', 'AUT', 1),
(14, 'AZERBAIJAN', 'AZERBAIJAN', 'AZE', 1),
(15, 'BAHAMAS', 'BAHAMAS', 'BHS', 1),
(16, 'BAHRAIN', 'BAHRAIN', 'BHR', 1),
(17, 'BANGLADESH', 'BANGLADESH', 'BGD', 1),
(18, 'BARBADOS', 'BARBADOS', 'BRB', 1),
(19, 'BELARUS', 'BELARUS', 'BLR', 1),
(20, 'BELGIUM', 'BELGIUM', 'BEL', 1),
(21, 'BELIZE', 'BELIZE', 'BLZ', 1),
(22, 'BENIN', 'BENIN', 'BEN', 1),
(23, 'BERMUDA', 'BERMUDA', 'BMU', 1),
(24, 'BHUTAN', 'BHUTAN', 'BTN', 1),
(25, 'BOLIVIA', 'BOLIVIA', 'BOL', 1),
(26, 'BOSNIA AND HERZEGOVINA', 'BOSNIA AND HERZEGOVINA', 'BIH', 1),
(27, 'BOTSWANA', 'BOTSWANA', 'BWA', 1),
(28, 'BOUVET ISLAND', 'BOUVET ISLAND', 'BVT', 1),
(29, 'BRAZIL', 'BRAZIL', 'BRA', 1),
(30, 'BRITISH INDIAN OCEAN TR', 'BRITISH INDIAN OCEAN TR', 'IOT', 1),
(31, 'BRUNEI DARUSSALAM', 'BRUNEI DARUSSALAM', 'BRN', 1),
(32, 'BULGARIA', 'BULGARIA', 'BGR', 1),
(33, 'BURKINA FASO', 'BURKINA FASO', 'BFA', 1),
(34, 'BURUNDI', 'BURUNDI', 'BDI', 1),
(35, 'CAMBODIA', 'CAMBODIA', 'KHM', 1),
(36, 'CAMEROON', 'CAMEROON', 'CMR', 1),
(37, 'CANADA', 'CANADA', 'CAN', 1),
(38, 'CAPE VERDE', 'CAPE VERDE', 'CPV', 1),
(39, 'CAYMAN ISLANDS', 'CAYMAN ISLANDS', 'CYM', 1),
(40, 'CENTRALAFRICANREPUBLIC', 'CENTRALAFRICANREPUBLIC', 'CAF', 1),
(41, 'CHAD', 'CHAD', 'TCD', 1),
(42, 'CHILE', 'CHILE', 'CHL', 1),
(43, 'CHINA', 'CHINA', 'CHN', 1),
(44, 'CHRISTMAS ISLAND', 'CHRISTMAS ISLAND', 'CXR', 1),
(45, 'COCOS(KEELING)ISLANDS', 'COCOS(KEELING)ISLANDS', 'CCK', 1),
(46, 'COLOMBIA', 'COLOMBIA', 'COL', 1),
(47, 'COMOROS', 'COMOROS', 'COM', 1),
(48, 'CONGO', 'CONGO', 'COG', 1),
(49, 'COOK ISLANDS', 'COOK ISLANDS', 'COK', 1),
(50, 'COSTA RICA', 'COSTA RICA', 'CRI', 1),
(51, 'CTE D\'IVOIRE', 'CTE D\'IVOIRE', 'CIV', 1),
(52, 'CROATIA', 'CROATIA', 'HRV', 1),
(53, 'CUBA', 'CUBA', 'CUB', 1),
(54, 'CYPRUS', 'CYPRUS', 'CYP', 1),
(55, 'CZECH REPUBLIC', 'CZECH REPUBLIC', 'CZE', 1),
(56, 'PEOPLE\'SREPUBLICKOREA', 'PEOPLE\'SREPUBLICKOREA', 'PRK', 1),
(57, 'DEMOCRATICREPUBLICCONGO', 'DEMOCRATICREPUBLICCONGO', 'COD', 1),
(58, 'DENMARK', 'DENMARK', 'DNK', 1),
(59, 'DJIBOUTI', 'DJIBOUTI', 'DJI', 1),
(60, 'DOMINICA', 'DOMINICA', 'DMA', 1),
(61, 'DOMINICAN REPUBLIC', 'DOMINICAN REPUBLIC', 'DOM', 1),
(62, 'EAST TIMOR', 'EAST TIMOR', 'TMP', 1),
(63, 'ECUADOR', 'ECUADOR', 'ECU', 1),
(64, 'EGYPT', 'EGYPT', 'EGY', 1),
(65, 'EL SALVADOR', 'EL SALVADOR', 'SLV', 1),
(66, 'EQUATORIAL GUINEA', 'EQUATORIAL GUINEA', 'GNQ', 1),
(67, 'ERITREA', 'ERITREA', 'ERI', 1),
(68, 'ESTONIA', 'ESTONIA', 'EST', 1),
(69, 'ETHIOPIA', 'ETHIOPIA', 'ETH', 1),
(70, 'FALKLAND MALVINAS', 'FALKLAND MALVINAS', 'FLK', 1),
(71, 'FAEROE ISLANDS', 'FAEROE ISLANDS', 'FRO', 1),
(72, 'FIJI', 'FIJI', 'FJI', 1),
(73, 'FINLAND', 'FINLAND', 'FIN', 1),
(74, 'FRANCE', 'FRANCE', 'FRA', 1),
(75, 'FRANCEMETROPOLITAN', 'FRANCEMETROPOLITAN', 'FXX', 1),
(76, 'FRENCH GUIANA', 'FRENCH GUIANA', 'GUF', 1),
(77, 'FRENCH POLYNESIA', 'FRENCH POLYNESIA', 'PYF', 1),
(78, 'GABON', 'GABON', 'GAB', 1),
(79, 'GAMBIA', 'GAMBIA', 'GMB', 1),
(80, 'GEORGIA', 'GEORGIA', 'GEO', 1),
(81, 'GERMANY', 'GERMANY', 'D', 1),
(82, 'GHANA', 'GHANA', 'GHA', 1),
(83, 'GIBRALTAR', 'GIBRALTAR', 'GIB', 1),
(84, 'GREECE', 'GREECE', 'GRC', 1),
(85, 'GREENLAND', 'GREENLAND', 'GRL', 1),
(86, 'GRENADA', 'GRENADA', 'GRD', 1),
(87, 'GUADELOUPE', 'GUADELOUPE', 'GLP', 1),
(88, 'GUAM', 'GUAM', 'GUM', 1),
(89, 'GUATEMALA', 'GUATEMALA', 'GTM', 1),
(90, 'GUINEA', 'GUINEA', 'GIN', 1),
(91, 'GUINEA-BISSAU', 'GUINEA-BISSAU', 'GNB', 1),
(92, 'GUYANA', 'GUYANA', 'GUY', 1),
(93, 'HAITI', 'HAITI', 'HTI', 1),
(94, 'HEARDMCDONALD ISLANDS', 'HEARDMCDONALD ISLANDS', 'HMD', 1),
(95, 'VATICAN CITY STATE', 'VATICAN CITY STATE', 'VAT', 1),
(96, 'HONDURAS', 'HONDURAS', 'HND', 1),
(97, 'HONG KONG', 'HONG KONG', 'HKG', 1),
(98, 'HUNGARY', 'HUNGARY', 'HUN', 1),
(99, 'ICELAND', 'ICELAND', 'ISL', 1),
(100, 'INDIA', 'INDIA', 'IND', 1),
(101, 'INDONESIA', 'INDONESIA', 'IDN', 1),
(102, 'IRAN ISLAMIC REPUBLIC', 'IRAN ISLAMIC REPUBLIC', 'IRN', 1),
(103, 'IRAQ', 'IRAQ', 'IRQ', 1),
(104, 'IRELAND', 'IRELAND', 'IRL', 1),
(105, 'ISRAEL', 'ISRAEL', 'ISR', 1),
(106, 'ITALY', 'ITALY', 'ITA', 1),
(107, 'JAMAICA', 'JAMAICA', 'JAM', 1),
(108, 'JAPAN', 'JAPAN', 'JPN', 1),
(109, 'JORDAN', 'JORDAN', 'JOR', 1),
(110, 'KAZAKHSTAN', 'KAZAKHSTAN', 'KAZ', 1),
(111, 'KENYA', 'KENYA', 'KEN', 1),
(112, 'KIRIBATI', 'KIRIBATI', 'KIR', 1),
(113, 'KUWAIT', 'KUWAIT', 'KWT', 1),
(114, 'KYRGYZSTAN', 'KYRGYZSTAN', 'KGZ', 1),
(115, 'LAO PEOPLE\'S REPUBLIC', 'LAO PEOPLE\'S REPUBLIC', 'LAO', 1),
(116, 'LATVIA', 'LATVIA', 'LVA', 1),
(117, 'LEBANON', 'LEBANON', 'LBN', 1),
(118, 'LESOTHO', 'LESOTHO', 'LSO', 1),
(119, 'LIBERIA', 'LIBERIA', 'LBR', 1),
(120, 'LIBYANARABJAMAHIRIYA', 'LIBYANARABJAMAHIRIYA', 'LBY', 1),
(121, 'LIECHTENSTEIN', 'LIECHTENSTEIN', 'LIE', 1),
(122, 'LITHUANIA', 'LITHUANIA', 'LTU', 1),
(123, 'LUXEMBOURG', 'LUXEMBOURG', 'LUX', 1),
(124, 'MADAGASCAR', 'MADAGASCAR', 'MDG', 1),
(125, 'MALAWI', 'MALAWI', 'MWI', 1),
(126, 'MALAYSIA', 'MALAYSIA', 'MYS', 1),
(127, 'MALDIVES', 'MALDIVES', 'MDV', 1),
(128, 'MALI', 'MALI', 'MLI', 1),
(129, 'MALTA', 'MALTA', 'MLT', 1),
(130, 'MARSHALL ISLANDS', 'MARSHALL ISLANDS', 'MHL', 1),
(131, 'MARTINIQUE', 'MARTINIQUE', 'MTQ', 1),
(132, 'MAURITANIA', 'MAURITANIA', 'MRT', 1),
(133, 'MAURITIUS', 'MAURITIUS', 'MUS', 1),
(134, 'MAYOTTE', 'MAYOTTE', 'MYT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `language_details`
--

CREATE TABLE `language_details` (
  `language_id` int(11) NOT NULL,
  `zan_id` varchar(25) NOT NULL,
  `language_type` varchar(25) NOT NULL,
  `speaking` varchar(25) NOT NULL,
  `reading` varchar(25) NOT NULL,
  `writing` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `language_details`
--

INSERT INTO `language_details` (`language_id`, `zan_id`, `language_type`, `speaking`, `reading`, `writing`) VALUES
(1, '610138968', 'ENGLISH', 'VERY GOOD', 'VERY GOOD', 'VERY GOOD');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `zen_id` varchar(30) DEFAULT NULL,
  `messageDescption` varchar(300) DEFAULT NULL,
  `messageDate` varchar(30) DEFAULT NULL,
  `sender` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `zen_id`, `messageDescption`, `messageDate`, `sender`) VALUES
(7, '610138968', 'Hello, Welcome to the number one online platform that connects clients with service providers of a broad range of needs', '2020-Jun-Sun', ''),
(8, '61013896834', 'Hello, Am okay how has been u', '2020-Jun-Sun', ''),
(9, '610138968', 'I need a help on developing a websited', '2020-Jun-Sun', ''),
(10, '61013896834', 'I can help you, where are you?', '2020-Jun-Sun', ''),
(11, '610138968', 'hie ashton\r\n', '2020-Jun-Mon', ''),
(12, '610138968', 'hie there', '2020-Jun-Mon', ''),
(13, '610138968', 'kjlhjkhefjkhertjkertjke', '2020-Jul-Wed', ''),
(14, '3', 'nnn', '2020-Jul-Sun', NULL),
(15, '3', 'jkk', '2020-Jul-Sun', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `other_attachments`
--

CREATE TABLE `other_attachments` (
  `attachment_id` int(11) NOT NULL,
  `zan_id` varchar(25) NOT NULL,
  `attachment_type` varchar(25) NOT NULL,
  `attachment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_attachments`
--

INSERT INTO `other_attachments` (`attachment_id`, `zan_id`, `attachment_type`, `attachment`) VALUES
(1, '610138968', 'CV', '610138968-CV.send health263 log first');

-- --------------------------------------------------------

--
-- Table structure for table `other_qualifications`
--

CREATE TABLE `other_qualifications` (
  `qualification_id` int(11) NOT NULL,
  `zan_id` varchar(25) NOT NULL,
  `education` varchar(25) NOT NULL,
  `qualification_type` varchar(25) NOT NULL,
  `certificate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `other_qualifications`
--

INSERT INTO `other_qualifications` (`qualification_id`, `zan_id`, `education`, `qualification_type`, `certificate`) VALUES
(1, '610138968', 'DEGREE', 'TRANSCRIPT', '610138968-DEGREE.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `person_details`
--

CREATE TABLE `person_details` (
  `person_id` int(11) NOT NULL,
  `zan_id` varchar(25) NOT NULL,
  `fname` varchar(25) NOT NULL,
  `mname` varchar(25) NOT NULL,
  `sname` varchar(25) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `marital_status` varchar(25) NOT NULL,
  `mobile_no` varchar(25) NOT NULL,
  `alt_email` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `region` varchar(25) NOT NULL,
  `district` varchar(25) NOT NULL,
  `shehia` varchar(25) NOT NULL,
  `proftitle` varchar(25) NOT NULL,
  `resumecontent` varchar(100) NOT NULL,
  `notes` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person_details`
--

INSERT INTO `person_details` (`person_id`, `zan_id`, `fname`, `mname`, `sname`, `gender`, `dob`, `marital_status`, `mobile_no`, `alt_email`, `country`, `region`, `district`, `shehia`, `proftitle`, `resumecontent`, `notes`) VALUES
(1, '610138968', 'greatman mhandu', 'Gman', 'Mhandu', 'MALE', '1993-08-04', 'SINGLE', '0783840332', 'gman@gmail.com', 'Harare', 'MJINI-MAGHARIBI', 'KASKAZINI-PEMBA', '', 'Software developer', '', NULL),
(2, '234344', 'Ashton Chiruka', 'Tawaz', 'Chiruka', 'Male', '', '', '0899', 'ashton@gmail.com', '', '', '', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `qualifications`
--

CREATE TABLE `qualifications` (
  `qualification_id` int(11) NOT NULL,
  `zan_id` varchar(25) DEFAULT NULL,
  `education` varchar(25) DEFAULT NULL,
  `country` varchar(25) DEFAULT NULL,
  `institution` varchar(25) DEFAULT NULL,
  `course` varchar(25) DEFAULT NULL,
  `file_name` varchar(25) DEFAULT NULL,
  `startdate` varchar(50) DEFAULT NULL,
  `enddate` varchar(50) DEFAULT NULL,
  `notes` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualifications`
--

INSERT INTO `qualifications` (`qualification_id`, `zan_id`, `education`, `country`, `institution`, `course`, `file_name`, `startdate`, `enddate`, `notes`) VALUES
(1, '610138968', 'DEGREE', 'UNITED REPUBLIC TANZANIA', 'SUZA', 'COMPUTER SCIENCE', '610138968-DEGREE.pdf', NULL, NULL, NULL),
(2, '610138968', 'CERTIFICATE', 'ANGOLA', 'ssss', '29-281864 M77', '610138968-CERTIFICATE.pdf', NULL, NULL, NULL),
(3, '610138968', '', NULL, '', NULL, NULL, '', '', ''),
(4, '610138968', '', NULL, '', NULL, NULL, '', '', ''),
(5, '610138968', '', NULL, '', NULL, NULL, '', '', ''),
(6, '610138968', '', NULL, '', NULL, NULL, '', '', ''),
(7, '610138968', '', NULL, '', NULL, NULL, '', '', ''),
(8, '610138968', '', NULL, '', NULL, NULL, '', '', ''),
(9, '610138968', '', NULL, '', NULL, NULL, '', '', ''),
(10, '610138968', '', NULL, '', NULL, NULL, '', '', ''),
(11, '610138968', '', NULL, '', NULL, NULL, '', '', ''),
(12, '610138968', '', NULL, '', NULL, NULL, '', '', ''),
(13, '610138968', '', NULL, '', NULL, NULL, '', '', ''),
(14, '610138968', '', NULL, '', NULL, NULL, '', '', ''),
(15, '610138968', '', NULL, '', NULL, NULL, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `referees`
--

CREATE TABLE `referees` (
  `referee_id` int(11) NOT NULL,
  `zan_id` varchar(25) NOT NULL,
  `referee_name` varchar(25) NOT NULL,
  `referee_organization` varchar(50) NOT NULL,
  `referee_title` varchar(25) NOT NULL,
  `referee_mobile` varchar(25) NOT NULL,
  `referee_email` varchar(25) NOT NULL,
  `referee_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referees`
--

INSERT INTO `referees` (`referee_id`, `zan_id`, `referee_name`, `referee_organization`, `referee_title`, `referee_mobile`, `referee_email`, `referee_address`) VALUES
(1, '610138968', 'xx', 's', 'xsx', 'xss', 'ssx', 'ss'),
(2, '610138968', 'gee', 'gee', 'gee', 'gee', 'gee', 'gee');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `zan_id` int(50) NOT NULL,
  `EMAIL` varchar(50) NOT NULL,
  `CATEGORY` varchar(30) NOT NULL,
  `SKILLTAGS` varchar(50) NOT NULL,
  `JOBDESCRIPTION` varchar(300) NOT NULL,
  `OCCUPATIONTYPE` varchar(50) NOT NULL,
  `COMPANYSITE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `zan_id`, `EMAIL`, `CATEGORY`, `SKILLTAGS`, `JOBDESCRIPTION`, `OCCUPATIONTYPE`, `COMPANYSITE`) VALUES
(2, 610138968, 'gee', 'gee', 'gee', 'gee', 'gee', 'gee'),
(3, 610138968, 'gee', 'gee', 'gee', 'gee', 'gee', 'gee');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `FEEDBACKID` int(11) NOT NULL,
  `APPLICANTID` int(11) NOT NULL,
  `REGISTRATIONID` int(11) NOT NULL,
  `FEEDBACK` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblfeedback`
--

INSERT INTO `tblfeedback` (`FEEDBACKID`, `APPLICANTID`, `REGISTRATIONID`, `FEEDBACK`) VALUES
(1, 1, 1, 'Your listing Marketing Coordinator - SEO / SEM Experience has been approved!');

-- --------------------------------------------------------

--
-- Table structure for table `tblskills`
--

CREATE TABLE `tblskills` (
  `JOBID` int(11) NOT NULL,
  `zan_id` int(11) NOT NULL,
  `CATEGORY` varchar(90) DEFAULT NULL,
  `OCCUPATIONTITLE` varchar(90) DEFAULT NULL,
  `JOBDESCRIPTION` text DEFAULT NULL,
  `APPLICATIONS` int(50) DEFAULT NULL,
  `LOCATIONNAME` varchar(50) DEFAULT NULL,
  `SKILLTAGS` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(50) DEFAULT NULL,
  `APPLICATIONEMAIL` varchar(50) DEFAULT NULL,
  `COMPANYNAME` varchar(50) DEFAULT NULL,
  `COMPANYSITE` varchar(50) DEFAULT NULL,
  `COMPANYTAGS` varchar(30) DEFAULT NULL,
  `COMPANYTWITTER` varchar(30) DEFAULT NULL,
  `COMPANYLOGO` varchar(50) DEFAULT NULL,
  `OCCUPATIONTYPE` varchar(50) DEFAULT NULL,
  `CLOSINGDATE` varchar(50) DEFAULT NULL,
  `JOBSTATUS` varchar(50) DEFAULT NULL,
  `DATEPOSTED` varchar(50) DEFAULT NULL,
  `rateHr` varchar(100) DEFAULT NULL,
  `STARTDATE` varchar(50) DEFAULT NULL,
  `ENDDATE` varchar(50) DEFAULT NULL,
  `liked` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblskills`
--

INSERT INTO `tblskills` (`JOBID`, `zan_id`, `CATEGORY`, `OCCUPATIONTITLE`, `JOBDESCRIPTION`, `APPLICATIONS`, `LOCATIONNAME`, `SKILLTAGS`, `EMAIL`, `APPLICATIONEMAIL`, `COMPANYNAME`, `COMPANYSITE`, `COMPANYTAGS`, `COMPANYTWITTER`, `COMPANYLOGO`, `OCCUPATIONTYPE`, `CLOSINGDATE`, `JOBSTATUS`, `DATEPOSTED`, `rateHr`, `STARTDATE`, `ENDDATE`, `liked`) VALUES
(16, 610138968, NULL, 'Java Developer', 'test desc', NULL, 'Harare', NULL, 'greatmanmhandu@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'Part-Time', '', 'Open', '2020-Jul-Sat', 'Rwf 50,000 - Rwf 100,000(0)', '2020-07-08', '2020-07-30', 5),
(18, 610138968, NULL, 'PLUMBER', 'UNDERGROUND AND SURFACE', NULL, 'Harare', NULL, 'ashtonchiruka@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'Full', '', 'Open', '2020-Jul-Sat', 'Rwf 0 - Rwf 25,000 (0)', '2020-07-04', '2020-07-31', NULL),
(20, 610138968, NULL, 'MATHS TEACHER', 'EXTRA LESSONS', NULL, 'Harare', NULL, 'mikel.alfred@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'Part-Time', '', 'Open', '2020-Jul-Sat', 'Rwf 25,000 - Rwf 50,000 (0)', '2020-07-04', '2020-07-09', NULL),
(21, 610138968, NULL, 'BARBER', 'NICE HAIR CUTS', NULL, 'Gweru', NULL, 'moyo@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'Full', '', 'Open', '2020-Jul-Sat', 'Rwf 25,000 - Rwf 50,000 (0)', '2020-07-05', '2020-07-16', NULL),
(22, 3, NULL, 'Shoe Maker', '', NULL, 'Gweru', NULL, 'fmaronje@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'Full-Time', '', 'Open', '2020-Jul-Sun', 'Rwf 0 - Rwf 25,000 (0)', '2020-07-15', '2020-07-30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `working_experience`
--

CREATE TABLE `working_experience` (
  `working_id` int(11) NOT NULL,
  `zan_id` varchar(25) DEFAULT NULL,
  `working_organization` varchar(50) DEFAULT NULL,
  `working_title` varchar(25) DEFAULT NULL,
  `working_supervisor` varchar(25) DEFAULT NULL,
  `working_mobile` varchar(25) DEFAULT NULL,
  `working_start` varchar(25) DEFAULT NULL,
  `working_end` varchar(25) DEFAULT NULL,
  `working_current` varchar(25) DEFAULT NULL,
  `working_responsibilities` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `working_experience`
--

INSERT INTO `working_experience` (`working_id`, `zan_id`, `working_organization`, `working_title`, `working_supervisor`, `working_mobile`, `working_start`, `working_end`, `working_current`, `working_responsibilities`) VALUES
(1, '610138968', 'ZANTEL', 'CALL CENTER', 'MR OMAR', '0777200121', '2016-01-01', '2018-01-01', 'NO', 'Receiving Calls'),
(2, '610138968', 'ZANTEL', 'CALL CENTER', NULL, NULL, '2016-01-01', NULL, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alerts`
--
ALTER TABLE `alerts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`app_id`);

--
-- Indexes for table `candidatesapplyed`
--
ALTER TABLE `candidatesapplyed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `computer_literacy`
--
ALTER TABLE `computer_literacy`
  ADD PRIMARY KEY (`literacy_id`);

--
-- Indexes for table `language_details`
--
ALTER TABLE `language_details`
  ADD PRIMARY KEY (`language_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_attachments`
--
ALTER TABLE `other_attachments`
  ADD PRIMARY KEY (`attachment_id`);

--
-- Indexes for table `other_qualifications`
--
ALTER TABLE `other_qualifications`
  ADD PRIMARY KEY (`qualification_id`);

--
-- Indexes for table `person_details`
--
ALTER TABLE `person_details`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `qualifications`
--
ALTER TABLE `qualifications`
  ADD PRIMARY KEY (`qualification_id`);

--
-- Indexes for table `referees`
--
ALTER TABLE `referees`
  ADD PRIMARY KEY (`referee_id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblskills`
--
ALTER TABLE `tblskills`
  ADD PRIMARY KEY (`JOBID`);

--
-- Indexes for table `working_experience`
--
ALTER TABLE `working_experience`
  ADD PRIMARY KEY (`working_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alerts`
--
ALTER TABLE `alerts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `app_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `candidatesapplyed`
--
ALTER TABLE `candidatesapplyed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `computer_literacy`
--
ALTER TABLE `computer_literacy`
  MODIFY `literacy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `language_details`
--
ALTER TABLE `language_details`
  MODIFY `language_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `other_attachments`
--
ALTER TABLE `other_attachments`
  MODIFY `attachment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `other_qualifications`
--
ALTER TABLE `other_qualifications`
  MODIFY `qualification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `person_details`
--
ALTER TABLE `person_details`
  MODIFY `person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `qualifications`
--
ALTER TABLE `qualifications`
  MODIFY `qualification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `referees`
--
ALTER TABLE `referees`
  MODIFY `referee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblskills`
--
ALTER TABLE `tblskills`
  MODIFY `JOBID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `working_experience`
--
ALTER TABLE `working_experience`
  MODIFY `working_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
