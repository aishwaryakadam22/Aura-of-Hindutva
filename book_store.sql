-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 14, 2023 at 05:11 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `name`, `price`, `quantity`, `image`) VALUES
(57, 8, 'vedas', 2500, 1, 'book-5.png'),
(91, 10, 'Vedas', 1500, 1, 'vedas.jpg'),
(94, 9, 'Mahabharata ', 1800, 1, 'Mahabharata .jpg'),
(95, 9, 'Puranas', 1700, 1, 'puranas.jpg'),
(96, 11, 'Mahabharata ', 1800, 1, 'Mahabharata .jpg'),
(119, 13, 'Puranas', 290, 1, 'puranas.jpg'),
(120, 13, 'Mahabharata ', 290, 1, 'Mahabharata .jpg'),
(121, 13, 'Garuda-Puran', 460, 1, 'garud-puran 1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `number`, `message`) VALUES
(10, 13, 'Aastha Purwar', 'aastha5@gmail.com', '8543964956', 'Hi, I\'m interested in the Bhagavad Gita. Do you have it in stock?'),
(12, 15, 'Aishwarya ', 'kadam1@gmail.com', '9623967888', 'I\'m new to Hindu scriptures. Can you suggest a good introductory book for someone with no prior knowledge?'),
(13, 20, 'Sakshee', 'sakshee123@gmail.com', '6758934567', 'I\'m having trouble adding items to my cart. Can you help me with this issue?'),
(14, 18, 'Priyanka', 'priyanka1@gmail.com', '2356423378', 'I\'m interested in the \'Mahabharata.\' Can you provide some background information about its authorship and historical significance?'),
(15, 13, 'Shruti', 'shruti2@gmail.com', '2374625458', 'I\'m curious about the concept of karma in Hinduism. Can you explain it briefly?'),
(16, 20, 'Aaditya', 'aaditya12@gmail.com', '8623964898', 'I\'m a professor, and I\'d like to order 50 copies of \'The Ramayana\' for my class. Do you offer bulk discounts');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `method` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `total_products` varchar(1000) NOT NULL,
  `total_price` int(100) NOT NULL,
  `placed_on` varchar(50) NOT NULL,
  `payment_status` varchar(20) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `method`, `address`, `total_products`, `total_price`, `placed_on`, `payment_status`) VALUES
(25, 13, 'Aishwarya Kadam', '8623964956', 'kadam@gmail.com', 'cash on delivery', 'flat no. 347, Navi peth, Pune, India - 411030', ', Mahabharata  (1) , Puranas (1) , Ramayana  (2) ', 1260, '30-Sep-2023', 'completed'),
(26, 13, 'Aastha purwar', '5645674877', 'aastha1@gmail.com', 'cash on delivery', 'flat no. 4545, kothrud, pune, India - 411030', ', Mahabharata  (1) , Puranas (1) , Bhagavad Gita (1) , Vedas (1) ', 1190, '30-Sep-2023', 'pending'),
(27, 13, 'Aishwarya Kadam', '8623964956', 'kadam@gmail.com', 'cash on delivery', 'flat no. 23, SBDJE, Pune, India - 411030', ', Puranas (1) ', 290, '12-Oct-2023', 'pending'),
(28, 13, 'Aishwarya Kadam', '8623964956', 'kadam@gmail.com', 'Cash On Delivery', 'flat no. 564, Navi Peh, Yashwantnagar, Pune, Maharashtra, India - 411030', 'Mahabharata  (1) , Ramayana  (1) ', 630, '12-Oct-2023', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `audiobook` varchar(255) DEFAULT NULL,
  `ebook` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `audiobook`, `ebook`, `category`) VALUES
(75, 'Atharva-Veda', 490, 'atharvaveda.png', '', 'AtharvaVeda.pdf', 'Vedas'),
(76, 'Isha', 200, 'isa Upanishad 1.jpg', '', 'isha-upanishad.pdf', 'Upanishads '),
(77, 'Kena', 230, 'kena Upanishad 1.jpg', '', 'Kena-upanishad.pdf', 'Upanishads '),
(79, 'Mundaka', 240, 'mundaka Upanishad 1.jpg', '', 'Mundaka-Upanishad.pdf', 'Upanishads '),
(80, 'Prashna', 230, 'prasna Upanishad 1.jpg', '', 'Prashna-Upanishad.pdf', 'Upanishads '),
(82, 'Taittiriya', 290, 'taittiriya Upanishad 1.jpg', '', 'Taittiriya-Upanishad.pdf', 'Upanishads '),
(83, 'Aitareya', 280, 'aitareya Upanishad 1.jpg', '', 'Aitareya-Upanishad.pdf', 'Upanishads '),
(84, 'Chandogya', 260, 'chandogya Upanishad 1.jpg', '', 'Chhandogya_Upanishad.pdf', 'Upanishads '),
(85, 'Brihadaranyaka', 300, 'brihadarnyaka Upanishad 1.jpg', '', 'Brihadaranyaka-Upanishad.pdf', 'Upanishads'),
(86, 'Bhagvatgeeta-Sampurna', 800, 'Bhagvatgeeta_sampurna 1.jpg', '', 'Bhagvatgeeta_sampurna.pdf', 'Bhagavad-Gita'),
(89, 'Shrimad Bhagwat Geeta - Geeta Press Gorakhpur', 490, 'Shrimad Bhagwat Geeta - Geeta Press Gorakhpur 1.png', '', 'Shrimad Bhagwat Geeta - Geeta Press Gorakhpur.pdf', 'Bhagavad-Gita'),
(131, 'Anushasana-Parva', 540, 'Mahabharata-Anusasana Parva.png', '', 'Mahabharata-Anusasana Parva.pdf', 'Mahabharata'),
(132, 'Awamedha-parva', 560, 'Mahabharata-Awamedha, Asramav.png', '', 'Mahabharata-Awamedha, Asramavasika, Mahaprasthanika, Swarga-Rohanika Parvas.pdf', 'Mahabharata'),
(133, 'Bhisma-parva', 450, 'Mahabharata-bhisma-parva.png', '', 'Mahabharata-bhisma-parva.pdf', 'Mahabharata'),
(134, 'Drona-Parva', 500, 'Mahabharata-drona-parva.png', '', 'Mahabharata-drona-parva.pdf', 'Mahabharata'),
(136, 'Sabha-Parva', 600, 'Mahabharata-sabha-parva.png', '', 'Mahabharata-sabha-parva.pdf', 'Mahabharata'),
(137, 'Santi-Parva 1', 500, 'Mahabharata-Santi Parva I.png', '', 'Mahabharata-Santi Parva I.pdf', 'Mahabharata'),
(138, 'Shanti-parva 2', 500, 'Mahabharata-Santi Parva II.png', '', 'Mahabharata-Santi Parva II.pdf', 'Mahabharata'),
(140, 'vana-parva', 540, 'Mahabharata-vana-parva.png', '', 'Mahabharata-vana-parva.pdf', 'Mahabharata'),
(141, 'Virata and Udyoga-Parva', 570, 'Mahabharata-virata-and-udyoga-parva.png', '', 'Mahabharata-virata-and-udyoga-parva.pdf', 'Mahabharata'),
(143, 'Bala-Ayodhya-Kanda', 520, 'Ramayana-Bala-Ayodhya-Kanda.png', '', 'Ramayana-Bala-Ayodhya-Kanda.pdf', 'Ramayana'),
(145, 'Yuddha-Kanda', 500, 'Ramayana-Yuddha-Kanda.png', '', 'Ramayana-Yuddha-Kanda.pdf', 'Ramayana'),
(146, 'Uttara-Kanda', 540, 'Ramayana-Uttara-Kanda 1.jpg', '', 'Ramayana-Uttara-Kanda.pdf', 'Ramayana '),
(148, 'Bhavishya-Puran', 390, 'puranas.jpg', 'Bhavishy Puran.mp3', 'bavishya-puran.pdf', 'Puranas'),
(152, 'Karana,Salya Sauptika,Stree-parvas', 540, 'Mahabharata-Karna, Salya Sauptika, Stree Parvas 1.jpg', '', 'Mahabharata-Karna, Salya Sauptika, Stree Parvas.pdf', 'Mahabharata'),
(153, 'Shanti-parva 3', 500, 'Mahabharata-Santi Parva III 1.jpg', '', 'Mahabharata-Santi Parva II.pdf', 'Mahabharata'),
(154, 'Mahabharata-In-Hindi', 690, 'Mahabharata-in-Hindi 1.jpg', '', 'Mahabharata-in-Hindi.pdf', 'Mahabharata'),
(155, 'Aranya-Kishkindha-Sundara-kanda', 400, 'Ramayana-Aranya-Kishkindha-Sundara-Kanda 1.jpg', '', 'Ramayana-Aranya-Kishkindha-Sundara-Kanda.pdf', 'Ramayana'),
(156, 'Agni-Purana', 540, 'agni-puran 1.jpeg', 'Agni Puran.mp3', 'agni-puran.pdf', 'Puranas'),
(157, 'Bhagwat-Puran', 430, 'bhagvat-puran 1.jpg', 'Bhagvat Puran.mp3', 'bhagwat-puran.pdf', 'Puranas'),
(158, 'Bramha-Puran', 450, 'bramha-puran 1.jpeg', 'Brahma Puran.mp3', 'bramha-puran.pdf', 'Puranas'),
(160, 'Garuda-Puran', 460, 'garud-puran 1.jpg', 'Garuda Puran.mp3', 'garuda-puran.pdf', 'Puranas'),
(161, 'Kurma-Puran', 390, 'kurma-puran 1.jpg', 'Kurma Puran.mp3', 'kurma-puran.pdf', 'Puranas'),
(162, 'Ling-Puran', 500, 'ling-puran 1.jpg', 'Ling Puran.mp3', 'kurma-puran.pdf', 'Puranas'),
(165, 'Padma-Puran', 500, 'padma-puran 1.jpg', 'Padma Puran.mp3', 'padam-puran.pdf', 'Puranas'),
(166, 'skand-Puran', 380, 'skand-puran 1.jpg', 'Skanda Puran.mp3', 'sakand-puran.pdf', 'Puranas'),
(167, 'Shiv Puran', 490, 'shiv-puran 1.jpg', 'Shiv Puran.mp3', 'shiv-puran.pdf', 'Puranas'),
(168, 'Vaivarta-Puran', 500, 'vaivat-puran 1.jpg', 'Vaivatra Puran.mp3', 'vaivtpuran.pdf', 'Puranas'),
(169, 'Vaman Purana', 470, 'vaman-puran 1.png', 'Vaman Puran.mp3', 'vamanpuran.pdf', 'Puranas'),
(170, 'Varaha-Puran', 380, 'varah-puran 1.jpg', 'Varaha Puran.mp3', 'varaha-puran.pdf', 'Puranas'),
(171, 'Vishnu-Puran', 390, 'vishnu-puran 1.jpg', 'Vishnu Puran.mp3', 'vishnu-puran.pdf', 'Puranas'),
(176, 'Guru Shishya', 300, 'guru shishya.jpg', '', 'guru-shishya_english.pdf', 'Spiritual '),
(177, 'The Science of Karma', 290, 'the science of karma.jpg', '', 'the-Science-of-Karma.pdf', 'Spiritual '),
(178, 'Who am I', 300, 'who am i.jpg', '', 'who-am-i.pdf', 'Spiritual '),
(179, 'Tri Mantra', 300, 'tri mantra.jpg', '', 'trimantra.pdf', 'Spiritual '),
(180, 'Avoid Clashes', 280, 'Avoid Clashes.jpg', '', 'avoidclash.pdf', 'Spiritual '),
(181, 'Adjust  Everywhere ', 200, 'adjust everywhere.jpg', '', 'adjust-everywhere.pdf', 'Spiritual '),
(182, 'Death', 310, 'death.jpg', '', 'Death.pdf', 'Spiritual '),
(183, 'Anger', 290, 'anger.jpg', '', 'anger.pdf', 'Spiritual '),
(184, 'Generation Gap', 300, 'generation gap.jpg', '', 'generation_gap.pdf', 'Spiritual '),
(185, 'The Fault Is Of The Suffer', 290, 'the fault is of the suffer.jpg', '', 'the-Science-of-Karma.pdf', 'Spiritual '),
(186, 'Pratikraman', 300, 'pratikraman.jpg', '', 'pratikraman-Abr.pdf', 'Spiritual '),
(187, 'Life Without Conflict', 400, 'life without conflict.jpg', '', 'life-without-conflict.pdf', 'Spiritual '),
(188, 'Self Realization', 320, 'self realisation.jpg', '', 'Self-Realization.pdf', 'Spiritual '),
(189, 'Worries', 320, 'worries.jpg', '', 'worries.pdf', 'Spiritual '),
(190, 'Whatever Has Happened Is Justice', 320, 'whatever has happened is justice.jpg', '', 'whatever-happens-justice.pdf', 'Spiritual '),
(191, 'Katha', 300, 'Katha Upanishad 1.jpg', '', 'kathopanishad-hindi.pdf', 'Upanishads'),
(192, 'Mandukya', 290, 'mandukya Upanishad 1.jpg', '', 'Mandukya_Upanishad.pdf', 'Upanishads'),
(193, 'Rigveda ', 200, 'rigved.png', '', 'Rigveda.pdf', 'Vedas'),
(194, 'Yajurveda', 320, 'yajurveda.png', '', 'Yajurveda.pdf', 'Vedas'),
(195, 'Samaveda', 300, 'samaveda.png', '', 'Samveda.pdf', 'Vedas'),
(196, 'Adi-Parva', 310, 'mahabharata-adi-parva 1.png', '', 'Mahabharata-Anusasana Parva.pdf', 'Mahabharata '),
(197, 'श्रीमद् भगवत गीता ( यथारुप ) ', 200, 'श्रीमद् भगवत गीता ( यथारुप ) 1.jpg', '', 'श्रीमद् भगवत गीता ( यथारुप ).pdf', 'Bhagavad-Gita '),
(198, 'Srimad Bhagavad Gita (Sanskrit, Hindi & English) ', 310, 'Srimad Bhagavad Gita (Sanskrit, Hindi & English) 1.jpg', '', 'Srimad Bhagavad Gita (Sanskrit, Hindi & English).pdf', 'Bhagavad-Gita'),
(199, 'Bramhand-Puran', 210, 'bramhand-puran 1.jpg', 'Brahamand Puran.mp3', 'bramhand-puran.pdf', 'Puranas'),
(200, 'Markendey-Puran', 220, 'markandey-puran 1.jpg', 'Markendey Puran.mp3', 'markende-puran.pdf', 'Puranas'),
(201, 'Narad-Puran', 240, 'narad-puran 1.jpg', 'Narad Puran.mp3', 'nard-puran.pdf', 'Puranas'),
(202, 'Mimansa-Shastra', 320, 'mimansa-shastra.jpg', '', 'mimansa-shastra.pdf', 'Shastras'),
(203, 'Sankhya-Shastra', 310, 'sankhya shastra.png', '', 'sankhya-shastra.pdf', 'Shastras'),
(204, 'Vaisheshik-Shastra', 340, 'vaisheshik-shastra.jpg', '', 'Vaisheshik-shastra.pdf', 'Shastras'),
(205, 'Vedant-Shastra', 390, 'vedant-shastra.png', '', 'vedant-shastra.pdf', 'Shastras'),
(206, 'Yog-Shastra', 310, 'yog-shastra.jpg', '', 'Yog-Shastra.pdf', 'Shastras'),
(207, 'Nyay-Shastra', 310, 'nyay-shastra.png', '', 'nyay-shastra.pdf', 'Shastras');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(13, 'Aishwarya ', 'aishwarya1@gmail.com', '467b05602d56c14661b9e670cc40c7a6', 'user'),
(15, 'Priyanka', 'priyanka1@gmail.com', 'bfa04c7244ae997cab2b7fc2fcd5e915', 'user'),
(16, 'Priyanka k', 'priyanka2@gmail.com', 'd4073c991743d08211e42acf5a4c92dd', 'admin'),
(17, 'Aishwarya K', 'aishwarya2@gmail.com', '49a750e41978e0c5a0d8587bac34e5ea', 'admin'),
(18, 'Aastha P', 'aastha1234@gmail.com', '8921db98858279044fc46e507b8f0d01', 'user'),
(20, 'Sakshee', 'sakshee123@gmail.com', '888328274c6268dfb5e327404b8dc171', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
