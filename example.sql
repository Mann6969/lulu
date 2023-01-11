-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2002 at 01:51 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodatas`
--

CREATE TABLE `biodatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `height` varchar(50) DEFAULT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `employed_in` varchar(100) DEFAULT NULL,
  `fathername` varchar(255) NOT NULL,
  `mothername` varchar(255) NOT NULL,
  `grandfathername` varchar(255) DEFAULT NULL,
  `grandmothername` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `education` varchar(255) DEFAULT NULL,
  `annualincome` varchar(255) DEFAULT NULL,
  `rashi` varchar(255) DEFAULT NULL,
  `nakshatra` varchar(255) DEFAULT NULL,
  `religion` varchar(255) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `gotra` varchar(255) NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `manglik` tinyint(4) DEFAULT 0 COMMENT '1= Manglik,0=Non Manglik',
  `img` varchar(255) DEFAULT NULL,
  `dob` date NOT NULL,
  `phone` varchar(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(555) DEFAULT NULL,
  `fid` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodatas`
--

INSERT INTO `biodatas` (`id`, `name`, `age`, `gender`, `height`, `city`, `state`, `employed_in`, `fathername`, `mothername`, `grandfathername`, `grandmothername`, `address`, `occupation`, `education`, `annualincome`, `rashi`, `nakshatra`, `religion`, `caste`, `gotra`, `marital_status`, `manglik`, `img`, `dob`, `phone`, `created_at`, `updated_at`, `description`, `fid`) VALUES
(1, 'Tatiana Zimmerman', 22, 'female', '25', 'jaipur', 'Maharashtra', 'Corporate', 'Howard Mccoy', 'Devin Rivera', 'Chelsea Crawford', 'Shelley Good', 'Officia maiores eos', 'Et mollit enim omnis', 'Velit nesciunt ipsa', '320', 'Aries (Mesha)', 'Ashwini', 'Jain', 'Digambar', 'Qui saepe obcaecati', 'Never Married', 0, '100984195216.jpg', '2018-02-10', '6976584687', '2022-12-26 03:41:55', '2001-12-31 18:10:39', NULL, 1),
(2, 'Brock Cochran', 0, 'female', '5ft 6in - 167cm', 'Jodhpur', 'Rajasthan', 'Corporate', 'Nita Graves', 'Jonah Holloway', 'Alvin Goodman', 'Marvin Sanders', 'Enim deserunt amet', 'Eum nostrum obcaecat', 'Laudantium deleniti', '953', 'Aries (Mesha)', 'Ashwini', 'Jain', 'Digambar', 'Itaque veniam volup', 'Never Married', 0, '100984182467.jpg', '2014-02-15', '5987963564', '2022-12-26 03:42:35', '2001-12-31 18:10:59', NULL, 2),
(3, 'Hall Copeland', 0, 'male', NULL, 'Unde non et voluptat', 'Bihar', 'Corporate', 'Aubrey Kidd', 'Felicia Herrera', 'Jeanette Green', 'Martena Mcdaniel', 'Distinctio Sed expl', 'Sint reprehenderit', 'Autem dolorem aut co', '407', 'Aries (Mesha)', 'Ashwini', 'Jain', 'Digambar', 'Maxime recusandae N', 'Never Married', 0, NULL, '2009-01-11', '6659875548', '2022-12-26 03:43:08', '2001-12-31 17:53:25', NULL, 3),
(4, 'Cain Vaughn', 0, 'male', '5ft 6in - 167cm', 'Dhwarka', 'Bihar', 'Corporate', 'Cain Wilkins', 'Katell Lester', 'Belle Luna', 'George Spencer', 'Voluptate dolor aute', 'Laboris magnam volup', 'Consequat Ratione e', '994', 'Aries (Mesha)', 'Ashwini', 'Jain', 'Digambar', 'Aut sint architecto', 'Never Married', 0, '100984265128.jpg', '1974-12-03', '6151367993', '2022-12-26 03:43:40', '2001-12-31 19:17:47', NULL, 4),
(5, 'Jeanette Fitzgerald', 7, 'male', 'Ullam lorem iste nem', 'Aliquip quae ex sit', 'Odit voluptates eius', 'Corporate', 'Zena Gentry', 'Ivory Parks', 'Whoopi Andrews', 'Chastity Levy', 'Earum laborum Est l', 'Libero rem et esse', 'Odit excepturi ducim', '944', 'Aries (Mesha)', 'Ashwini', 'Jain', 'Digambar', 'Illum recusandae D', 'Never Married', 0, '100983730537.jpg', '1973-12-07', '3653563452', '2022-12-26 05:16:54', '2001-12-31 16:51:45', NULL, 5),
(6, 'Yuri Walter', 93, 'female', 'Et nisi facere dolor', 'Lorem beatae incidun', 'Karnataka', 'Corporate', 'Lance Morrow', 'Isadora Norton', 'Lance Quinn', 'Harper Vaughan', 'Est eius quaerat cup', 'Laboriosam ipsa el', 'Sit deserunt sed ali', '890', 'Aries (Mesha)', 'Ashwini', 'Jain', 'Digambar', 'Qui inventore cumque', 'Never Married', 0, '167205444769.jpg', '1994-12-16', '9489848949', '2022-12-26 06:04:07', '2001-12-31 19:12:12', 'hello muje shadi karni h', 6),
(7, 'Yuri Barrett', 35, 'male', 'Ut consequatur quia', 'Quis eum est harum', 'Himachal Pradesh', 'Corporate', 'Rahim Fuller', 'Camille Wagner', 'Audrey Reyes', 'Lee Montoya', 'Consectetur odit bla', 'Corrupti est paria', 'Iusto ex doloribus e', '13', 'Aries (Mesha)', 'Ashwini', 'Jain', 'Digambar', 'Vero cupidatat qui v', 'Never Married', 0, '100982792222.jpg', '1980-02-15', '9876543210', '2001-12-31 13:55:58', '2001-12-31 18:11:42', NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(3) NOT NULL,
  `name` varchar(19) DEFAULT NULL,
  `nickname` varchar(38) DEFAULT NULL,
  `state_code` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `nickname`, `state_code`) VALUES
(1, 'Delhi', 'Dehli; Dilli', 'DL'),
(2, 'Kolkata', 'Calcutta; Howrah', 'WB'),
(3, 'Mumbai', 'Bombay', 'MH'),
(4, 'Hyderabad', '', 'TG'),
(5, 'Bengaluru', 'Bangalore', 'KA'),
(6, 'Chennai', 'Madras', 'TN'),
(7, 'Ahmedabad', '', 'GJ'),
(8, 'Surat', '', 'GJ'),
(9, 'Pune', 'Poona; Puna', 'MH'),
(10, 'Jaipur', '', 'RJ'),
(11, 'Kanpur', 'Cawnpore', 'UP'),
(12, 'Lucknow', '', 'UP'),
(13, 'Nagpur', '', 'MH'),
(14, 'Ghaziabad', '', 'UP'),
(15, 'Indore', '', 'MP'),
(16, 'Coimbatore', 'Kovai', 'TN'),
(17, 'Patna', '', 'BR'),
(18, 'Visakhapatnam', 'Vizag', 'AP'),
(19, 'Bhopal', '', 'MP'),
(20, 'Nashik', '', 'MH'),
(21, 'Pimpri-Chinchwad', '', 'MH'),
(22, 'Agra', '', 'UP'),
(23, 'Vadodara', 'Baroda', 'GJ'),
(24, 'Ludhiana', '', 'PB'),
(25, 'Madurai', '', 'TN'),
(26, 'Varanasi', 'Kashi; Banaras; Benaras', 'UP'),
(27, 'Meerut', '', 'UP'),
(28, 'Faridabad', '', 'HR'),
(29, 'Jamshedpur', '', 'JH'),
(30, 'Rajkot', '', 'GJ'),
(31, 'Jabalpur', 'Jubbulpore', 'MP'),
(32, 'Asansol', '', 'WB'),
(33, 'Allahabad', 'Ilahabad; Prayag', 'UP'),
(34, 'Dhanbad', '', 'JH'),
(35, 'Srinagar', '', 'JK'),
(36, 'Aurangabad', '', 'MH'),
(37, 'Jodhpur', '', 'RJ'),
(38, 'Amritsar', '', 'PB'),
(39, 'Ranchi', '', 'JH'),
(40, 'Gwalior', '', 'MP'),
(41, 'Chandigarh', '', 'CH'),
(42, 'Vijayawada', '', 'AP'),
(43, 'Tiruchirappalli', 'Trichy; Tiruchi; Trichinopoly', 'TN'),
(44, 'Raipur', '', 'CT'),
(45, 'Kota', '', 'RJ'),
(46, 'Bareilly', '', 'UP'),
(47, 'Guwahati', 'Gauhati', 'AS'),
(48, 'Tirupur', 'Tiruppur', 'TN'),
(49, 'Thiruvananthapuram', 'Trivandrum', 'KL'),
(50, 'Solapur', '', 'MH'),
(51, 'Hubli', 'Hubballi; Hubli-Dharwad', 'KA'),
(52, 'Salem', '', 'TN'),
(53, 'Aligarh', 'Allygurh', 'UP'),
(54, 'Gurgaon', 'Guru Gram', 'HR'),
(55, 'Durg', 'Durg - Bhilai', 'CT'),
(56, 'Moradabad', '', 'UP'),
(57, 'Mysore', 'Mysuru', 'KA'),
(58, 'Bhubaneswar', 'Bhubaneshwar', 'OR'),
(59, 'Jalandhar', 'Jullundur', 'PB'),
(60, 'Warangal', '', 'TG'),
(61, 'Guntur', '', 'AP'),
(62, 'Dehradun', '', 'UT'),
(63, 'Bhiwandi', '', 'MH'),
(64, 'Saharanpur', '', 'UP'),
(65, 'Siliguri', '', 'WB'),
(66, 'Gorakhpur', '', 'UP'),
(67, 'Cuttack', '', 'OR'),
(68, 'Pondicherry', 'Puducherry; Pondy', 'PY'),
(69, 'Amravati', 'Ambanagari', 'MH'),
(70, 'Bikaner', '', 'RJ'),
(71, 'Faizabad', '', 'UP'),
(72, 'Kochi', 'Cochin', 'KL'),
(73, 'Firozabad', '', 'UP'),
(74, 'Bhavnagar', '', 'GJ'),
(75, 'Durgapur', '', 'WB'),
(76, 'Bokaro Steel City', '', 'JH'),
(77, 'Naya Raipur', '', 'CT'),
(78, 'Rourkela', 'Raurkela', 'OR'),
(79, 'Ajmer', '', 'RJ'),
(80, 'Nanded', '', 'MH'),
(81, 'Kolhapur', '', 'MH'),
(82, 'Jhansi', '', 'UP'),
(83, 'Gulbarga', 'Kalaburagi', 'KA'),
(84, 'Agartala', '', 'TR'),
(85, 'Erode', '', 'TN'),
(86, 'Ujjain', '', 'MP'),
(87, 'Sangli-Miraj-Kupwad', '', 'MH'),
(88, 'Jammu', '', 'JK'),
(89, 'Nellore', '', 'AP'),
(90, 'Mangalore', 'Mangaluru', 'KA'),
(91, 'Tirunelveli', 'Nellai; Tinnevelly', 'TN'),
(92, 'Muzaffarnagar', '', 'UP'),
(93, 'Belgaum', 'Belagavi; Belgaon; Venugrama', 'KA'),
(94, 'Vellore', '', 'TN'),
(95, 'Jamnagar', '', 'GJ'),
(96, 'Udaipur', '', 'RJ'),
(97, 'Gaya', '', 'BR'),
(98, 'Jalgaon', '', 'MH'),
(99, 'Mathura', '', 'UP'),
(100, 'Patiala', '', 'PB'),
(101, 'Panipat', '', 'HR'),
(102, 'Davangere', '', 'KA'),
(103, 'Calicut', 'Kozhikode', 'KL'),
(104, 'Akola', '', 'MH'),
(105, 'Kurnool', '', 'AP'),
(106, 'Rajamahendravaram', 'Rajahmundry', 'AP'),
(107, 'Latur', '', 'MH'),
(108, 'Tuticorin', 'Thoothukudi', 'TN'),
(109, 'Bhagalpur', '', 'BR'),
(110, 'Malegaon', '', 'MH'),
(111, 'Bellary', 'Ballari', 'KA'),
(112, 'Ambala', '', 'HR'),
(113, 'Muzaffarpur', '', 'BR'),
(114, 'Yamunanagar', '', 'HR'),
(115, 'Dhule', '', 'MH'),
(116, 'Dimapur', '', 'NL'),
(117, 'Tirupati', '', 'AP'),
(118, 'Rohtak', '', 'HR'),
(119, 'Sagar', 'Saugor', 'MP'),
(120, 'Budaun', 'Badaun', 'UP'),
(121, 'Korba', '', 'CT'),
(122, 'Bhilwara', '', 'RJ'),
(123, 'Rampur', '', 'UP'),
(124, 'Shahjahanpur', '', 'UP'),
(125, 'Berhampur', 'Brahmapur', 'OR'),
(126, 'Ahmednagar', 'Ahmadnagar', 'MH'),
(127, 'Kollam', 'Quilon; Desinganadu; Coulao', 'KL'),
(128, 'Bardhaman', 'Burdwan', 'WB'),
(129, 'Kadapa', 'Cuddapah', 'AP'),
(130, 'Alwar', '', 'RJ'),
(131, 'Bilaspur', '', 'CT'),
(132, 'Nandurbar', '', 'MH'),
(133, 'Bijapur', 'Vijayapur', 'KA'),
(134, 'Ichalkaranji', '', 'MH'),
(135, 'Thrissur', 'Trichur; Thiru Siva Peroor', 'KL'),
(136, 'Chandrapur', '', 'MH'),
(137, 'Malda', 'English Bazar; Ingraj Bazar', 'WB'),
(138, 'Shimoga', 'Shivamogga', 'KA'),
(139, 'Junagadh', '', 'GJ'),
(140, 'Farrukhabad', '', 'UP'),
(141, 'Kakinada', '', 'AP'),
(142, 'Nizamabad', '', 'TG'),
(143, 'Purnia', 'Purnea', 'BR'),
(144, 'Haridwar', '', 'UT'),
(145, 'Hisar', 'Hissar', 'HR'),
(146, 'Darbhanga', '', 'BR'),
(147, 'Tumkur', 'Tumakuru', 'KA'),
(148, 'Baharampur', '', 'WB'),
(149, 'Habra', '', 'WB'),
(150, 'Jalpaiguri', '', 'WB'),
(151, 'Karnal', '', 'HR'),
(152, 'Ozhukarai', 'Uzhavarkarai', 'PY'),
(153, 'Bihar Sharif', '', 'BR'),
(154, 'Kharagpur', '', 'WB'),
(155, 'Aizawl', '', 'MZ'),
(156, 'Sonipat', 'Sonepat', 'HR'),
(157, 'Gudiyatham', 'Gudiyattam; Gudiyettram', 'TN'),
(158, 'Dewas', '', 'MP'),
(159, 'Shantipur', 'Santipur', 'WB'),
(160, 'Bathinda', 'Bhatinda', 'PB'),
(161, 'Jalna', '', 'MH'),
(162, 'Satna', '', 'MP'),
(163, 'Mau', 'Maunath Bhanjan', 'UP'),
(164, 'Roorkee', '', 'UT'),
(165, 'Ratlam', 'Ratnapuri', 'MP'),
(166, 'Parbhani', '', 'MH'),
(167, 'Sambalpur', '', 'OR'),
(168, 'Anantapur', '', 'AP'),
(169, 'Imphal', '', 'MN'),
(170, 'Rajnandgaon', '', 'CT'),
(171, 'Hapur', 'Haripur', 'UP'),
(172, 'Karimnagar', '', 'TG'),
(173, 'Arrah', 'Ara', 'BR'),
(174, 'Noida', '', 'UP'),
(175, 'Etawah', '', 'UP'),
(176, 'Haldwani', 'Kathgodam', 'UT'),
(177, 'Bharatpur', '', 'RJ'),
(178, 'Begusarai', '', 'BR'),
(179, 'Sri Ganganagar', '', 'RJ'),
(180, 'Dankuni', '', 'WB'),
(181, 'Gandhidham', '', 'GJ'),
(182, 'Mirzapur', '', 'UP'),
(183, 'Sikar', '', 'RJ'),
(184, 'Katihar', '', 'BR'),
(185, 'Dhulian', '', 'WB'),
(186, 'Ranaghat', '', 'WB'),
(187, 'Rewa', '', 'MP'),
(188, 'Bulandshahr', '', 'UP'),
(189, 'Kannur', 'Cannanore', 'KL'),
(190, 'Raichur', '', 'KA'),
(191, 'Pali', '', 'RJ'),
(192, 'Ramagundam', '', 'TG'),
(193, 'Silchar', '', 'AS'),
(194, 'Vizianagaram', '', 'AP'),
(195, 'Nagercoil', 'Nagerkovil', 'TN'),
(196, 'Thanjavur', 'Tanjore', 'TN'),
(197, 'Katni', 'Murwara; Mudwara', 'MP'),
(198, 'Sambhal', '', 'UP'),
(199, 'Singrauli', '', 'MP'),
(200, 'Nadiad', '', 'GJ'),
(201, 'Eluru', '', 'AP'),
(202, 'Bidar', '', 'KA'),
(203, 'Munger', '', 'BR'),
(204, 'Chhapra', 'Chapra', 'BR'),
(205, 'Burhanpur', '', 'MP'),
(206, 'Panchkula', '', 'HR'),
(207, 'Dindigul', '', 'TN'),
(208, 'Gandhinagar', '', 'GJ'),
(209, 'Hospet', 'Hosapete', 'KA'),
(210, 'Bhusawal', 'Bhusaval', 'MH'),
(211, 'Deoghar', '', 'JH'),
(212, 'Ongole', '', 'AP'),
(213, 'Puri', 'Jagannath Puri', 'OR'),
(214, 'Haldia', '', 'WB'),
(215, 'Nandyal', '', 'AP'),
(216, 'Khandwa', '', 'MP'),
(217, 'Morena', '', 'MP'),
(218, 'Raiganj', '', 'WB'),
(219, 'Anand', '', 'GJ'),
(220, 'Bhiwani', '', 'HR'),
(221, 'Bhind', '', 'MP'),
(222, 'Amroha', '', 'UP'),
(223, 'Hardoi', '', 'UP'),
(224, 'Vaniyambadi', '', 'TN'),
(225, 'Morbi', 'Morvi', 'GJ'),
(226, 'Fatehpur', '', 'UP'),
(227, 'Kasaragod', '', 'KL'),
(228, 'Raebareli', '', 'UP'),
(229, 'Daman', '', 'DD'),
(230, 'Orai', '', 'UP'),
(231, 'Chhindwara', '', 'MP'),
(232, 'Barmer', '', 'RJ'),
(233, 'Sitapur', '', 'UP'),
(234, 'Bahraich', '', 'UP'),
(235, 'Phusro', '', 'JH'),
(236, 'Khammam', '', 'TG'),
(237, 'Khambhat', 'Cambay', 'GJ'),
(238, 'Sirsa', '', 'HR'),
(239, 'Modinagar', '', 'UP'),
(240, 'Krishnanagar', '', 'WB'),
(241, 'Guna', '', 'MP'),
(242, 'Shivpuri', '', 'MP'),
(243, 'Unnao', '', 'UP'),
(244, 'Surendranagar', '', 'GJ'),
(245, 'Balasore', 'Baleshwar', 'OR'),
(246, 'Nabadwip', 'Naodah; Navadvip', 'WB'),
(247, 'Bongaigaon', '', 'AS'),
(248, 'Alappuzha', 'Alleppey', 'KL'),
(249, 'Alappuzha', 'Alleppey', 'KL'),
(250, 'Cuddalore', '', 'TN'),
(251, 'Hassan', '', 'KA'),
(252, 'Gadag', 'Betgeri; Betageri; Betigeri', 'KA'),
(253, 'Shimla', 'Simla', 'HP'),
(254, 'Komarapalayam', 'Kumarapalayam', 'TN'),
(255, 'Bahadurgarh', '', 'HR'),
(256, 'Machilipatnam', '', 'AP'),
(257, 'Midnapore', 'Medinipur', 'WB'),
(258, 'Bharuch', 'Broach', 'GJ'),
(259, 'Hoshiarpur', '', 'PB'),
(260, 'Jaunpur', '', 'UP'),
(261, 'Adoni', '', 'AP'),
(262, 'Jind', '', 'HR'),
(263, 'Udupi', 'Udipi; Odipu', 'KA'),
(264, 'Tonk', '', 'RJ'),
(265, 'Tenali', '', 'AP'),
(266, 'Lakhimpur', '', 'UP'),
(267, 'Balurghat', '', 'WB'),
(268, 'Kanchipuram', 'Kanchi; Kancheepuram', 'TN'),
(269, 'Vapi', 'Wapi', 'GJ'),
(270, 'Proddatur', '', 'AP'),
(271, 'Ambur', '', 'TN'),
(272, 'Robertsonpet', '', 'KA'),
(273, 'Hathras', '', 'UP'),
(274, 'Navsari', '', 'GJ'),
(275, 'Banda', '', 'UP'),
(276, 'Pilibhit', '', 'UP'),
(277, 'Mahbubnagar', 'Palamoor', 'TG'),
(278, 'Bettiah', '', 'BR'),
(279, 'Vidisha', '', 'MP'),
(280, 'Saharsa', '', 'BR'),
(281, 'Kishangarh', '', 'RJ'),
(282, 'Thanesar', 'Thaneswar; Sthanishvara', 'HR'),
(283, 'Barabanki', 'Nawabganj', 'UP'),
(284, 'Mughalsarai', '', 'UP'),
(285, 'Veraval', '', 'GJ'),
(286, 'Rudrapur', '', 'UT'),
(287, 'Chittorgarh', 'Chittaurgarh; Chittor', 'RJ'),
(288, 'Dibrugarh', '', 'AS'),
(289, 'Chittoor', '', 'AP'),
(290, 'Hazaribagh', '', 'JH'),
(291, 'Jorhat', '', 'AS'),
(292, 'Hindupur', '', 'AP'),
(293, 'Porbandar', 'Porbander', 'GJ'),
(294, 'Batala', '', 'PB'),
(295, 'Beawar', '', 'RJ'),
(296, 'Bhadravati', '', 'KA'),
(297, 'Hanumangarh', '', 'RJ'),
(298, 'Satara', '', 'MH'),
(299, 'Chhatarpur', '', 'MP'),
(300, 'Hajipur', '', 'BR'),
(301, 'Damoh', '', 'MP'),
(302, 'Sasaram', 'Sahsaram', 'BR'),
(303, 'Nagaon', '', 'AS'),
(304, 'Beed', '', 'MH'),
(305, 'Mohali', 'Ajitgarh; Sahibzada Ajit Singh Nagar', 'PB'),
(306, 'Chitradurga', '', 'KA'),
(307, 'Tiruvannamalai', 'Thiruvannamalai; Trinomali; Trinomalee', 'TN'),
(308, 'Abohar', '', 'PB'),
(309, 'Harihar', 'Harihara; Hurryhur', 'KA'),
(310, 'Basirhat', '', 'WB'),
(311, 'Kaithal', '', 'HR'),
(312, 'Pudukkottai', '', 'TN'),
(313, 'Godhra', '', 'GJ'),
(314, 'Giridih', '', 'JH'),
(315, 'Pathankot', '', 'PB'),
(316, 'Shillong', '', 'ML'),
(317, 'Bhuj', '', 'GJ'),
(318, 'Khurja', '', 'UP'),
(319, 'Bhimavaram', '', 'AP'),
(320, 'Pakhanjore', '', 'CT'),
(321, 'Mandsaur', 'Mandsour', 'MP'),
(322, 'Moga', '', 'PB'),
(323, 'Rewari', '', 'HR'),
(324, 'Ankleshwar', 'Ankleshvar', 'GJ'),
(325, 'Kumbakonam', 'Coombaconum', 'TN'),
(326, 'Pandharpur', '', 'MH'),
(327, 'Gonda', '', 'UP'),
(328, 'Kolar', '', 'KA'),
(329, 'Yavatmal', '', 'MH'),
(330, 'Bankura', '', 'WB'),
(331, 'Mandya', '', 'KA'),
(332, 'Dehri', 'Dehri on Sone', 'BR'),
(333, 'Kamptee', 'Kamthi', 'MH'),
(334, 'Nalgonda', '', 'TG'),
(335, 'Madanapalle', '', 'AP'),
(336, 'Malerkotla', '', 'PB'),
(337, 'Siwan', '', 'BR'),
(338, 'Khargone', '', 'MP'),
(339, 'Mainpuri', '', 'UP'),
(340, 'Dholpur', 'Dhaulpur', 'RJ'),
(341, 'Lalitpur', '', 'UP'),
(342, 'Chakdaha', '', 'WB'),
(343, 'Gondia', 'Gondiya', 'MH'),
(344, 'Ramgarh', '', 'JH'),
(345, 'Darjeeling', 'Darjiling', 'WB'),
(346, 'Palwal', '', 'HR'),
(347, 'Etah', '', 'UP'),
(348, 'Palakkad', 'Palghat', 'KL'),
(349, 'Rajapalayam', '', 'TN'),
(350, 'Botad', '', 'GJ'),
(351, 'Gangapur', '', 'RJ'),
(352, 'Kottayam', '', 'KL'),
(353, 'Deoria', '', 'UP'),
(354, 'Bhadrak', '', 'OR'),
(355, 'Neemuch', 'Nimach', 'MP'),
(356, 'Khanna', '', 'PB'),
(357, 'Alipurduar', '', 'WB'),
(358, 'Purulia', 'Puruliya', 'WB'),
(359, 'Guntakal', '', 'AP'),
(360, 'Pithampur', '', 'MP'),
(361, 'Ujhani', '', 'UP'),
(362, 'Srikakulam', '', 'AP'),
(363, 'Tinsukia', '', 'AS'),
(364, 'Patan', '', 'GJ'),
(365, 'Jagdalpur', '', 'CT'),
(366, 'Motihari', '', 'BR'),
(367, 'Jangipur', 'Jahangirpur', 'WB'),
(368, 'Palanpur', '', 'GJ'),
(369, 'Dharmavaram', '', 'AP'),
(370, 'Kashipur', '', 'UT'),
(371, 'Ghazipur', 'Ghazeepore; Ghazipour; Gauspur', 'UP'),
(372, 'Sawai Madhopur', '', 'RJ'),
(373, 'Churu', '', 'RJ'),
(374, 'Medininagar', 'Daltonganj', 'JH'),
(375, 'Dahod', 'Dohad', 'GJ'),
(376, 'Chirkunda', '', 'JH'),
(377, 'Nawada', '', 'BR'),
(378, 'Chikkamagallooru', 'Chikmagalur', 'KA'),
(379, 'Chikmagalur', 'Chikkamagaluru', 'KA'),
(380, 'Jetpur', 'Jetpur Navagadh; Kathi', 'GJ'),
(381, 'Gudivada', '', 'AP'),
(382, 'Baran', '', 'RJ'),
(383, 'Hoshangabad', '', 'MP'),
(384, 'Adilabad', '', 'TG'),
(385, 'Muktasar', 'Sri Muktsar Sahib', 'PB'),
(386, 'Baripada', '', 'OR'),
(387, 'Hosur', '', 'TN'),
(388, 'Barnala', '', 'PB'),
(389, 'Makrana', '', 'RJ'),
(390, 'Narasaraopet', '', 'AP'),
(391, 'Sultanpur', '', 'UP'),
(392, 'Azamgarh', '', 'UP'),
(393, 'Bijnor', 'Bijnaur; Bijnour', 'UP'),
(394, 'Sahaswan', '', 'UP'),
(395, 'Basti', '', 'UP'),
(396, 'Gangawati', '', 'KA'),
(397, 'Kothamangalam', 'Kotamangalam', 'KL'),
(398, 'Valsad', 'Bulsar', 'GJ'),
(399, 'Ambikapur', '', 'CT'),
(400, 'Itarsi', '', 'MP'),
(401, 'Panaji', 'Panjim', 'GA'),
(402, 'Chandausi', '', 'UP'),
(403, 'Siddipet', '', 'TG'),
(404, 'Kalol', '', 'GJ'),
(405, 'Bagaha', '', 'BR'),
(406, 'Achalpur', 'Ellichpur; Illychpur; Paratwada', 'MH'),
(407, 'Gondal', '', 'GJ'),
(408, 'Osmanabad', 'Usmanabad', 'MH'),
(409, 'Akbarpur', '', 'UP'),
(410, 'Ballia', '', 'UP'),
(411, 'Deesa', 'Disa', 'GJ'),
(412, 'Nagaur', '', 'RJ'),
(413, 'Bangaon', 'Bongaon', 'WB'),
(414, 'Buxar', '', 'BR'),
(415, 'Firozpur', 'Ferozpur', 'PB'),
(416, 'Hindaun', '', 'RJ'),
(417, 'Mubarakpur', '', 'UP'),
(418, 'Tanda', '', 'UP'),
(419, 'Dhubri', '', 'AS'),
(420, 'Sehore', '', 'MP'),
(421, 'Anantnag', '', 'JK'),
(422, 'Tadipatri', 'Tadpatri', 'AP'),
(423, 'Port Blair', '', 'AN'),
(424, 'Greater Noida', '', 'UP'),
(425, 'Shikohabad', '', 'UP'),
(426, 'Shamli', '', 'UP'),
(427, 'Kishanganj', '', 'BR'),
(428, 'Hinganghat', '', 'MH'),
(429, 'Cooch Behar', 'Koch Bihar', 'WB'),
(430, 'Karaikudi', '', 'TN'),
(431, 'Wardha', '', 'MH'),
(432, 'Ranebennuru', 'Ranibennur', 'KA'),
(433, 'Sitamarhi', '', 'BR'),
(434, 'Neyveli', '', 'TN'),
(435, 'Amreli', '', 'GJ'),
(436, 'Amreli', '', 'GJ'),
(437, 'Suryapet', '', 'TG'),
(438, 'Jamalpur', 'Monghyr', 'BR'),
(439, 'Bhiwadi', '', 'RJ'),
(440, 'Barshi', 'Barsi', 'MH'),
(441, 'Bundi', '', 'RJ'),
(442, 'Tadepalligudem', '', 'AP'),
(443, 'Miryalaguda', 'Miryalguda', 'TG'),
(444, 'Chirmiri', '', 'CT'),
(445, 'Betul', 'Badnur', 'MP'),
(446, 'Amaravati', '', 'AP'),
(447, 'Nagapattinam', 'Nagapatnam; Negapatam', 'TN'),
(448, 'Baraut', '', 'UP'),
(449, 'Jehanabad', 'Jahanabad', 'BR'),
(450, 'Seoni', '', 'MP'),
(451, 'Rishikesh', '', 'UT'),
(452, 'Khair', '', 'UP'),
(453, 'Dhamtari', '', 'CT'),
(454, 'Kapurthala', '', 'PB'),
(455, 'Sujangarh', '', 'RJ'),
(456, 'Aurangabad', '', 'BR'),
(457, 'Chilakaluripet', '', 'AP'),
(458, 'Malappuram', 'Malapuram', 'KL'),
(459, 'Kasganj', '', 'UP'),
(460, 'Vasco', 'Vasco da Gama', 'GA'),
(461, 'Tezpur', '', 'AS'),
(462, 'Jhunjhunu', '', 'RJ'),
(463, 'Datia', '', 'MP'),
(464, 'Banswara', '', 'RJ'),
(465, 'Raigarh', '', 'CT'),
(466, 'Nagda', '', 'MP'),
(467, 'Lakhisarai', 'Luckeesarai', 'BR'),
(468, 'Auraiya', '', 'UP'),
(469, 'Kohima', '', 'NL'),
(470, 'Gangtok', '', 'SK'),
(471, 'Mahuva', '', 'GJ'),
(472, 'Silvassa', '', 'DN'),
(473, 'Balangir', '', 'OR'),
(474, 'Phagwara', '', 'PB'),
(475, 'Jharsuguda', '', 'OR'),
(476, 'Chalisgaon', '', 'MH'),
(477, 'Khatauli', '', 'UP'),
(478, 'Manjeri', '', 'KL'),
(479, 'Mormugao', '', 'GA'),
(480, 'Deoband', '', 'UP'),
(481, 'Mahasamund', '', 'CT'),
(482, 'Jagtial', '', 'TG'),
(483, 'Viluppuram', 'Villupuram; Vizhupuram', 'TN'),
(484, 'Amalner', '', 'MH'),
(485, 'Sardarshahar', '', 'RJ'),
(486, 'Paramakudi', '', 'TN'),
(487, 'Zirakpur', '', 'PB'),
(488, 'Tiruchengode', '', 'TN'),
(489, 'Nagina', '', 'UP'),
(490, 'Mahoba', '', 'UP'),
(491, 'Muradnagar', '', 'UP'),
(492, 'Ramanagara', 'Shamserabad', 'KA'),
(493, 'Kovilpatti', 'Covilpatti', 'TN'),
(494, 'Dhanpuri', '', 'MP'),
(495, 'Bhadohi', 'Sant Ravidas Nagar', 'UP'),
(496, 'Theni-Allinagaram', '', 'TN'),
(497, 'Khamgaon', '', 'MH'),
(498, 'Dhar', '', 'MP'),
(499, 'Balaghat', '', 'MP'),
(500, 'Akot', '', 'MH'),
(501, 'Fatehpur', '', 'RJ'),
(502, 'Thalassery', 'Tellicherry', 'KL'),
(503, 'Bolpur', '', 'WB'),
(504, 'Kanthi', 'Contai', 'WB'),
(505, 'Rajpura', '', 'PB'),
(506, 'Udgir', '', 'MH'),
(507, 'Bhandara', '', 'MH'),
(508, 'Dadri', '', 'UP'),
(509, 'Ponnani', 'Ponani; Paniyani', 'KL'),
(510, 'Kadayanallur', '', 'TN'),
(511, 'Pratapgarh', 'Bela Pratapgarh', 'UP'),
(512, 'Pollachi', '', 'TN'),
(513, 'Najibabad', '', 'UP'),
(514, 'Parli', '', 'MH'),
(515, 'Ooty', 'Ootacamund; Udhagamandalam; Udhagai', 'TN'),
(516, 'Jhumri Telaiya', '', 'JH'),
(517, 'Margao', 'Madgaon', 'GA'),
(518, 'Mancherial', '', 'TG'),
(519, 'Karaikal', '', 'PY'),
(520, 'Dausa', '', 'RJ'),
(521, 'Jeypore', 'Jaypur', 'OR'),
(522, 'Mehsana', 'Mahesana', 'GJ'),
(523, 'Karauli', 'Karoli; Kerowlee', 'RJ'),
(524, 'Sahibganj', '', 'JH'),
(525, 'Kothagudem', 'Kottagudem', 'TG'),
(526, 'Itanagar', '', 'AR'),
(527, 'Bagalkot', 'Bagalkote', 'KA'),
(528, 'Kavaratti', '', 'LD');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filenames` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `filenames`, `status`, `created_at`, `updated_at`) VALUES
(1, '[\"167179804190.jpg\"]', 1, '2022-12-23 06:50:41', '2022-12-26 03:41:55'),
(2, '[\"167204053386.jpg\"]', 1, '2022-12-26 02:12:13', '2022-12-26 03:42:36'),
(3, '[\"167204054898.jpg\"]', 1, '2022-12-26 02:12:28', '2022-12-26 03:43:08'),
(4, '[\"167204055983.jpg\"]', 1, '2022-12-26 02:12:39', '2022-12-26 03:43:40'),
(5, '[\"167204058052.jpg\"]', 1, '2022-12-26 02:13:00', '2022-12-26 05:16:54'),
(6, '[\"167205109724.jpg\"]', 1, '2022-12-26 05:08:17', '2022-12-26 06:04:07'),
(7, '[\"167205525948.jpeg\"]', 1, '2022-12-26 06:17:39', '2001-12-31 13:55:58'),
(8, '[\"167205579570.jpeg\"]', 0, '2022-12-26 06:26:35', '2022-12-26 06:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_23_120456_create_files_tbl', 2),
(6, '2022_12_23_120657_create_promotion_table', 3),
(7, '2022_12_23_120756_create_biodata_table', 4),
(8, '2022_12_23_121840_create_files_table', 5),
(9, '2022_12_26_072612_add_foreignkey_to_biodatas_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('nhibatarha69@gmail.com', '$2y$10$L4b.I3EJy50lqgMGXft/OeGV2HM2cNxctPtHpFhJBwllkUwe.zxwG', '2022-12-28 05:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'lavishjain2002@gmail.com', '2022-12-26 06:27:15', '2022-12-26 06:27:15');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(2) NOT NULL,
  `state_code` varchar(2) DEFAULT NULL,
  `name` varchar(27) DEFAULT NULL,
  `nickname` varchar(11) DEFAULT NULL,
  `type` varchar(5) DEFAULT NULL,
  `capital` varchar(18) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_code`, `name`, `nickname`, `type`, `capital`) VALUES
(1, 'AP', 'Andhra Pradesh', '', 'State', 'Hyderabad'),
(2, 'AR', 'Arunachal Pradesh', '', 'State', 'Itanagar'),
(3, 'AS', 'Assam', '', 'State', 'Guwahati'),
(4, 'BR', 'Bihar', '', 'State', 'Patna'),
(5, 'CT', 'Chhattisgarh', '', 'State', 'Naya Raipur'),
(6, 'GA', 'Goa', '', 'State', 'Panaji'),
(7, 'GJ', 'Gujarat', '', 'State', 'Gandhinagar'),
(8, 'HR', 'Haryana', '', 'State', 'Chandigarh'),
(9, 'HP', 'Himachal Pradesh', '', 'State', 'Shimla'),
(10, 'JK', 'Jammu and Kashmir', '', 'State', 'Srinagar; Jammu'),
(11, 'JH', 'Jharkhand', '', 'State', 'Rnachi'),
(12, 'KA', 'Karnataka', '', 'State', 'Bengaluru'),
(13, 'KL', 'Kerala', '', 'State', 'Thiruvananthapuram'),
(14, 'MP', 'Madhya Pradesh', '', 'State', 'Bhopal'),
(15, 'MH', 'Maharashtra', '', 'State', 'Mumbai'),
(16, 'MN', 'Manipur', '', 'State', 'Imphal'),
(17, 'ML', 'Meghalaya', '', 'State', 'Shilong'),
(18, 'MZ', 'Mizoram', '', 'State', 'Aizwal'),
(19, 'NL', 'Nagaland', '', 'State', 'Kohima'),
(20, 'OR', 'Odisha', 'Orissa', 'State', 'Bhubaneswar'),
(21, 'PB', 'Punjab', '', 'State', 'Chandigarh'),
(22, 'RJ', 'Rajasthan', '', 'State', 'Jaipur'),
(23, 'SK', 'Sikkim', '', 'State', 'Gangtok'),
(24, 'TN', 'Tamil Nadu', '', 'State', 'Chennai'),
(25, 'TG', 'Telangana', '', 'State', 'Hyderabad'),
(26, 'TR', 'Tripura', '', 'State', 'Agartala'),
(27, 'UP', 'Uttar Pradesh', '', 'State', 'Lucknow'),
(28, 'UT', 'Uttarakhand', 'Uttaranchal', 'State', 'Dehradun'),
(29, 'WB', 'West Bengal', '', 'State', 'Kolkata'),
(30, 'AN', 'Andaman and Nicobar Islands', '', 'UT', 'Port Blair'),
(31, 'CH', 'Chandigarh', '', 'UT', 'Chandigarh'),
(32, 'DN', 'Dadra and Nagar Haveli', '', 'UT', 'Silvassa'),
(33, 'DD', 'Daman and Diu', '', 'UT', 'Daman'),
(34, 'LD', 'Lakshadweep', '', 'UT', 'Kavaratti'),
(35, 'DL', 'Delhi', '', 'UT', 'Delhi'),
(36, 'PY', 'Puducherry', '', 'UT', 'Pondicherry');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'nhibatarha69@gmail.com', NULL, '$2y$10$eToIfzKC5O2jMjckmqptIOcaf.bpOzQgl3yO1Ht45pp81nRs9pYsy', NULL, '2022-12-23 06:35:19', '2022-12-23 06:35:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodatas`
--
ALTER TABLE `biodatas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `biodatas_fid_foreign` (`fid`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodatas`
--
ALTER TABLE `biodatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=529;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `biodatas`
--
ALTER TABLE `biodatas`
  ADD CONSTRAINT `biodatas_fid_foreign` FOREIGN KEY (`fid`) REFERENCES `files` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
