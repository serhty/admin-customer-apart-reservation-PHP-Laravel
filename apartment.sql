-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 20 Ara 2022, 13:57:49
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `apartment`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `apart_images`
--

CREATE TABLE `apart_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `apart_id` int(11) DEFAULT NULL,
  `cover` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `apart_images`
--

INSERT INTO `apart_images` (`id`, `status`, `apart_id`, `cover`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0, 'images/mAONuTEHBK.jpg', '2022-12-20 09:45:14', '2022-12-20 09:45:14'),
(2, 1, 1, 0, 'images/WHG0PotLg3.jpeg', '2022-12-20 09:45:14', '2022-12-20 09:45:14'),
(3, 1, 1, 1, 'images/Y7W2lLHFam.jpeg', '2022-12-20 09:45:14', '2022-12-20 09:45:19'),
(4, 1, 1, 0, 'images/PRF1uYDqMc.jpeg', '2022-12-20 09:45:14', '2022-12-20 09:45:14'),
(5, 1, 2, 1, 'images/y3kIOPvMWV.jpg', '2022-12-20 09:46:06', '2022-12-20 09:46:14'),
(6, 1, 2, 0, 'images/rhK0JECHnc.jpeg', '2022-12-20 09:46:06', '2022-12-20 09:46:06'),
(7, 1, 2, 0, 'images/30bC2DyEv5.jpeg', '2022-12-20 09:46:06', '2022-12-20 09:46:06'),
(8, 1, 2, 0, 'images/tXEirYS4a7.jpeg', '2022-12-20 09:46:06', '2022-12-20 09:46:06'),
(9, 1, 2, 0, 'images/9ZM8VAT2tI.jpeg', '2022-12-20 09:46:06', '2022-12-20 09:46:06'),
(10, 1, 3, 0, 'images/WIEhSXRtlU.jpeg', '2022-12-20 12:44:07', '2022-12-20 12:44:07'),
(11, 1, 3, 0, 'images/Puo7jbGkO9.jpeg', '2022-12-20 12:44:07', '2022-12-20 12:44:07'),
(12, 1, 3, 0, 'images/Tqp9siMYHC.jpg', '2022-12-20 12:44:07', '2022-12-20 12:44:07'),
(13, 1, 3, 0, 'images/ZB2uR5sw4q.jpg', '2022-12-20 12:44:07', '2022-12-20 12:44:07'),
(14, 1, 3, 1, 'images/gWZy7NtioJ.jpeg', '2022-12-20 12:44:07', '2022-12-20 12:44:12'),
(15, 1, 3, 0, 'images/czRTOAZVk3.jpeg', '2022-12-20 12:44:07', '2022-12-20 12:44:07'),
(16, 1, 4, 0, 'images/UjlIFfGcnT.jpg', '2022-12-20 12:56:14', '2022-12-20 12:56:14'),
(17, 1, 4, 0, 'images/SveXE8Puaf.jpeg', '2022-12-20 12:56:14', '2022-12-20 12:56:14'),
(18, 1, 4, 0, 'images/Q8tmHTUY9h.jpeg', '2022-12-20 12:56:14', '2022-12-20 12:56:14'),
(19, 1, 4, 1, 'images/UQfek0qyZt.jpeg', '2022-12-20 12:56:14', '2022-12-20 12:56:21');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `apart_infos`
--

CREATE TABLE `apart_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `apart_name` text DEFAULT NULL,
  `apart_concept` varchar(255) DEFAULT NULL,
  `apart_link` text DEFAULT NULL,
  `apart_address` text DEFAULT NULL,
  `apart_phone1` varchar(255) DEFAULT NULL,
  `apart_phone2` varchar(255) DEFAULT NULL,
  `apart_whatsapp` varchar(255) DEFAULT NULL,
  `apart_location` text DEFAULT NULL,
  `apart_mail` varchar(255) DEFAULT NULL,
  `apart_facebook` text DEFAULT NULL,
  `apart_instagram` text DEFAULT NULL,
  `apart_youtube` text DEFAULT NULL,
  `apart_twitter` text DEFAULT NULL,
  `apart_bank1` text DEFAULT NULL,
  `apart_bank2` text DEFAULT NULL,
  `apart_description` text DEFAULT NULL,
  `apart_info` text DEFAULT NULL,
  `populer` int(11) DEFAULT NULL,
  `recommended` int(11) DEFAULT NULL,
  `last_visited` int(11) DEFAULT NULL,
  `apart_note` int(11) DEFAULT NULL,
  `apart_price` decimal(10,2) DEFAULT NULL,
  `apart_discount` int(11) DEFAULT NULL,
  `apart_discounted_price` decimal(10,2) DEFAULT NULL,
  `apart_final_price` decimal(10,2) DEFAULT NULL,
  `next_sea` int(11) DEFAULT NULL,
  `spa` int(11) DEFAULT NULL,
  `restaurant` int(11) DEFAULT NULL,
  `disabled_friendly` int(11) DEFAULT NULL,
  `laundry` int(11) DEFAULT NULL,
  `car_park` int(11) DEFAULT NULL,
  `wifi` int(11) DEFAULT NULL,
  `rent_car` int(11) DEFAULT NULL,
  `transfer` int(11) DEFAULT NULL,
  `bath` int(11) DEFAULT NULL,
  `pool` int(11) DEFAULT NULL,
  `wheelchair` int(11) DEFAULT NULL,
  `kid_friendly` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `apart_infos`
--

INSERT INTO `apart_infos` (`id`, `status`, `customer_id`, `apart_name`, `apart_concept`, `apart_link`, `apart_address`, `apart_phone1`, `apart_phone2`, `apart_whatsapp`, `apart_location`, `apart_mail`, `apart_facebook`, `apart_instagram`, `apart_youtube`, `apart_twitter`, `apart_bank1`, `apart_bank2`, `apart_description`, `apart_info`, `populer`, `recommended`, `last_visited`, `apart_note`, `apart_price`, `apart_discount`, `apart_discounted_price`, `apart_final_price`, `next_sea`, `spa`, `restaurant`, `disabled_friendly`, `laundry`, `car_park`, `wifi`, `rent_car`, `transfer`, `bath`, `pool`, `wheelchair`, `kid_friendly`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'Test Apart', 'Test Concept', 'test-apart', 'Test Apart Adress', '09999', '0998', '0997', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d204203.91479233315!2d30.578020565177265!3d36.897855327118855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c39aaeddadadc1%3A0x95c69f73f9e32e33!2sAntalya!5e0!3m2!1str!2str!4v1671529357047!5m2!1str!2str', 'test@test.com', 'https://www.google.com', 'https://www.google.com', 'https://www.google.com', 'https://www.google.com', 'bank info', 'bank info', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p><p>Why do we use Lorem Ipsum?</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br></p><p>Where does Lorem Ipsum come from?</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p><p>Why do we use Lorem Ipsum?</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br></p><p>Where does Lorem Ipsum come from?</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', 1, 1, 1, NULL, '100.00', 10, '90.00', '90.00', NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2022-12-20 06:05:01', '2022-12-20 09:45:14'),
(2, 1, 7, 'Demo Apart', 'Demo Concept', 'demo-apart', 'Demo Address', '0254', NULL, NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d204203.91479233315!2d30.578020565177265!3d36.897855327118855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c39aaeddadadc1%3A0x95c69f73f9e32e33!2sAntalya!5e0!3m2!1str!2str!4v1671529357047!5m2!1str!2str', 'demo@demo.com', 'https://www.google.com', 'https://www.google.com', 'https://www.google.com', 'https://www.google.com', NULL, NULL, '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p><br></p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p><br></p><p>Where can I get Lorem Ipsum?</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div>', 1, 1, 1, NULL, '150.00', 3, '145.50', '145.50', 1, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2022-12-20 06:16:34', '2022-12-20 09:47:54'),
(3, 1, 8, 'Holiday Apart', 'Holiday Apart', 'holiday-apart', 'Holiday Apart', '222222', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p><br></p><p>Where can I get Lorem Ipsum?</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', NULL, 1, 1, 1, NULL, '360.00', NULL, '360.00', '360.00', NULL, 1, NULL, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-12-20 12:38:51', '2022-12-20 12:43:28'),
(4, 1, 9, 'Sunday Apart', 'Sunday Concept', 'sunday-apart', 'Sunday Address', '098765', NULL, NULL, '', NULL, 'https://www.google.com', 'https://www.google.com', 'https://www.google.com', NULL, NULL, NULL, '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p><br></p><p>Where can I get Lorem Ipsum?</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', NULL, 1, 1, 1, NULL, '360.00', NULL, '360.00', '360.00', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2022-12-20 12:53:19', '2022-12-20 12:56:43');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `apart_rooms`
--

CREATE TABLE `apart_rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `apart_id` int(11) DEFAULT NULL,
  `room_name` text DEFAULT NULL,
  `room_concept` text DEFAULT NULL,
  `room_description` text DEFAULT NULL,
  `room_info` text DEFAULT NULL,
  `room_price` decimal(10,2) DEFAULT NULL,
  `room_discount` int(11) DEFAULT NULL,
  `room_discounted_price` decimal(10,2) DEFAULT NULL,
  `room_final_price` decimal(10,2) DEFAULT NULL,
  `wifi` int(11) DEFAULT NULL,
  `mini_bar` int(11) DEFAULT NULL,
  `bathtub` int(11) DEFAULT NULL,
  `ac_dryer_machine` int(11) DEFAULT NULL,
  `tv` int(11) DEFAULT NULL,
  `safe` int(11) DEFAULT NULL,
  `balcony` int(11) DEFAULT NULL,
  `kitchen` int(11) DEFAULT NULL,
  `washing_machine` int(11) DEFAULT NULL,
  `refrigerator` int(11) DEFAULT NULL,
  `dishwasher` int(11) DEFAULT NULL,
  `air_conditioning` int(11) DEFAULT NULL,
  `smoke_detector` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `apart_rooms`
--

INSERT INTO `apart_rooms` (`id`, `status`, `apart_id`, `room_name`, `room_concept`, `room_description`, `room_info`, `room_price`, `room_discount`, `room_discounted_price`, `room_final_price`, `wifi`, `mini_bar`, `bathtub`, `ac_dryer_machine`, `tv`, `safe`, `balcony`, `kitchen`, `washing_machine`, `refrigerator`, `dishwasher`, `air_conditioning`, `smoke_detector`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Test Room', 'Test Room Concept', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p><br></p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p><br></p><p>Where can I get Lorem Ipsum?</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<br></p>', '300.00', 10, '270.00', '270.00', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, '2022-12-20 09:25:19', '2022-12-20 09:25:19'),
(2, 1, 1, 'Room Test', 'Room Test', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p><p>Why do we use Lorem Ipsum?</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<br></p>', '500.00', 10, '450.00', '450.00', 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 1, 1, NULL, 1, '2022-12-20 09:27:40', '2022-12-20 09:27:40'),
(3, 1, 2, 'Demo Room', 'Demo Room Concept', '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p><br></p><p>Where can I get Lorem Ipsum?</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><div><br></div>', '160.00', 5, '152.00', '152.00', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, '2022-12-20 09:48:36', '2022-12-20 09:48:36'),
(4, 1, 3, 'Holiday Room', 'Holiday Room', '<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p><br></p><p>Where can I get Lorem Ipsum?</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', NULL, '360.00', 5, '342.00', '342.00', NULL, NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2022-12-20 12:44:39', '2022-12-20 12:44:39');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `apart_supports`
--

CREATE TABLE `apart_supports` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `apart_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `support_date` datetime DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blogs`
--

INSERT INTO `blogs` (`id`, `status`, `title`, `link`, `description`, `keywords`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'What is Lorem Ipsum?', 'what-is-lorem-ipsum', 'What is Lorem Ipsum?', 'What is Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p><p>Why do we use Lorem Ipsum?</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)..</p><p><br></p><p>Where does Lorem Ipsum come from?</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p><br></p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p><br></p><p>Where can I get Lorem Ipsum?</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'images/2BDMiZ5GT0.jpeg', '2022-12-20 06:23:42', '2022-12-20 06:24:27'),
(2, 1, 'Why do we use Lorem Ipsum?', 'why-do-we-use-lorem-ipsum', 'Why do we use Lorem Ipsum?', 'Why do we use Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p><p>Why do we use Lorem Ipsum?</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br></p><p>Where does Lorem Ipsum come from?</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p><br></p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p><br></p><p>Where can I get Lorem Ipsum?</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'images/Un2BwYgUVr.jpeg', '2022-12-20 06:25:13', '2022-12-20 06:25:13'),
(3, 1, 'Where can I get Lorem Ipsum?', 'where-can-i-get-lorem-ipsum', 'Where can I get Lorem Ipsum?', 'Where can I get Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p><p>Why do we use Lorem Ipsum?</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br></p><p>Where does Lorem Ipsum come from?</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p><br></p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p><br></p><p>Where can I get Lorem Ipsum?</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'images/vx6YwlfyMX.jpg', '2022-12-20 06:25:35', '2022-12-20 06:25:35');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `contact`
--

CREATE TABLE `contact` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `location` text DEFAULT NULL,
  `facebook` text DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `twitter` text DEFAULT NULL,
  `youtube` text DEFAULT NULL,
  `linkedin` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `contact`
--

INSERT INTO `contact` (`id`, `status`, `phone`, `mail`, `address`, `location`, `facebook`, `instagram`, `twitter`, `youtube`, `linkedin`, `created_at`, `updated_at`) VALUES
(1, 1, '999999', 'test@test.com', 'test', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d204203.91479233315!2d30.578020565177265!3d36.897855327118855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c39aaeddadadc1%3A0x95c69f73f9e32e33!2sAntalya!5e0!3m2!1str!2str!4v1671518038377!5m2!1str!2str', 'https://www.google.com', 'https://www.google.com', 'https://www.google.com', 'https://www.google.com', 'https://www.google.com', '0000-00-00 00:00:00', '2022-12-20 06:34:50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `apart_name` text DEFAULT NULL,
  `started_date` date DEFAULT NULL,
  `ended_date` date DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `customers`
--

INSERT INTO `customers` (`id`, `status`, `name`, `surname`, `phone`, `mail`, `username`, `password`, `apart_name`, `started_date`, `ended_date`, `description`, `created_at`, `updated_at`) VALUES
(6, 1, 'Test', 'Test', '99999', 'test@test.com', 'testuser', '$2y$10$40Z62VgzodkYzqcCYRKefeyPcaRaJj4LFGpb6hwEgwgQ5oSZCsIRO', 'Test Apart', '2022-12-20', '2024-11-08', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum..<br></p>', '2022-12-20 06:05:01', '2022-12-20 07:29:33'),
(7, 1, 'Demo', 'Demo', '999999', 'demo@demo.com', 'demouser', '$2y$10$40Z62VgzodkYzqcCYRKefeyPcaRaJj4LFGpb6hwEgwgQ5oSZCsIRO', 'Demo Apart', '1970-01-01', '1970-01-01', '<p>Demo<br></p>', '2022-12-20 06:16:34', '2022-12-20 06:50:58'),
(8, 1, 'Holiday', 'Holiday', NULL, NULL, 'holidayuser', '$2y$10$40Z62VgzodkYzqcCYRKefeyPcaRaJj4LFGpb6hwEgwgQ5oSZCsIRO', 'Holiday Apart', '1970-01-01', '1970-01-01', NULL, '2022-12-20 12:38:51', '2022-12-20 12:38:51'),
(9, 1, 'Sunday Apart', 'Sunday Apart', NULL, NULL, 'sundayapart', '$2y$10$40Z62VgzodkYzqcCYRKefeyPcaRaJj4LFGpb6hwEgwgQ5oSZCsIRO', 'Sunday Apart', '2022-12-20', '2024-06-08', NULL, '2022-12-20 12:53:19', '2022-12-20 12:53:31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `customer_notes`
--

CREATE TABLE `customer_notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `customer_notes`
--

INSERT INTO `customer_notes` (`id`, `status`, `customer_id`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2022-12-20 09:41:11', '2022-12-20 09:41:27'),
(2, 2, 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2022-12-20 09:41:33', '2022-12-20 09:41:33'),
(3, 1, 7, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2022-12-20 09:49:50', '2022-12-20 09:49:53'),
(4, 2, 7, 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2022-12-20 09:49:59', '2022-12-20 09:49:59');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_12_20_022912_apart_infos', 1),
(3, '2022_12_20_023135_apart_supports', 1),
(4, '2022_12_20_023203_apart_rooms', 1),
(5, '2022_12_20_023223_apart_images', 1),
(6, '2022_12_20_023244_settings', 1),
(7, '2022_12_20_023346_blogs', 1),
(8, '2022_12_20_023405_supports', 1),
(9, '2022_12_20_023423_contact', 1),
(10, '2022_12_20_023441_users', 1),
(11, '2022_12_20_023518_customers', 1),
(12, '2022_12_20_023536_customer_notes', 1),
(13, '2022_12_20_023601_notes', 1),
(14, '2022_12_20_023618_room_periods', 1),
(15, '2022_12_20_023641_room_images', 1),
(16, '2022_12_20_023659_reservations', 1),
(17, '2022_12_20_023716_sales', 1),
(18, '2022_12_20_023733_pages', 1),
(19, '2022_12_20_023750_sliders', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `notes`
--

CREATE TABLE `notes` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `notes`
--

INSERT INTO `notes` (`id`, `status`, `note`, `created_at`, `updated_at`) VALUES
(1, 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2022-12-20 06:43:40', '2022-12-20 06:43:40'),
(2, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '2022-12-20 06:43:52', '2022-12-20 06:43:55');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `content` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `pages`
--

INSERT INTO `pages` (`id`, `status`, `title`, `link`, `description`, `keywords`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Why do we use Lorem Ipsum?', 'why-do-we-use-lorem-ipsum', 'Why do we use Lorem Ipsum?', 'Why do we use Lorem Ipsum?', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p><p>Why do we use Lorem Ipsum?</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br></p><p>Where does Lorem Ipsum come from?</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p><br></p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p><br></p><p>Where can I get Lorem Ipsum?</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 'images/AnUq1OK0VW.jpg', '2022-12-20 06:26:18', '2022-12-20 06:27:43');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `apart_id` int(11) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `reservation_date` datetime DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `final_price` decimal(10,2) DEFAULT NULL,
  `booker` varchar(255) DEFAULT NULL,
  `count_people` int(11) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_surname` varchar(255) DEFAULT NULL,
  `customer_phone` varchar(255) DEFAULT NULL,
  `customer_mail` varchar(255) DEFAULT NULL,
  `customer_address` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `reservations`
--

INSERT INTO `reservations` (`id`, `status`, `room_id`, `apart_id`, `start_date`, `end_date`, `reservation_date`, `price`, `discount`, `final_price`, `booker`, `count_people`, `customer_name`, `customer_surname`, `customer_phone`, `customer_mail`, `customer_address`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2022-12-20', '2022-12-25', '2022-12-20 12:40:19', '750.00', 5, '712.50', 'Apart', 2, 'test', 'test', '0999', 'test@test.com', 'test address.', '2022-12-20 09:40:19', '2022-12-20 09:40:40'),
(2, 1, 3, 2, '2022-12-20', '2022-12-31', '2022-12-20 12:49:34', '990.00', 5, '940.50', 'Apart', 3, 'demo', 'demo', '3654', 'demo@demo.com', 'demo address', '2022-12-20 09:49:34', '2022-12-20 09:49:34'),
(3, 1, 1, 1, '2023-03-07', '2023-04-05', '2022-12-20 15:36:25', '4350.00', 5, '4132.50', 'Site', 1, 'test res', 'test res', '3333', 'test res', 'test res', '2022-12-20 12:36:25', '2022-12-20 12:36:25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `room_images`
--

CREATE TABLE `room_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `apart_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `cover` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `room_images`
--

INSERT INTO `room_images` (`id`, `status`, `apart_id`, `room_id`, `cover`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 0, 'images/3rn0cGt8B1.jpg', '2022-12-20 09:25:19', '2022-12-20 09:25:19'),
(2, 1, 1, 1, 1, 'images/5CQTHX2h1U.jpeg', '2022-12-20 09:25:19', '2022-12-20 09:25:24'),
(3, 1, 1, 1, 0, 'images/KJn1Ldz7c2.jpeg', '2022-12-20 09:25:19', '2022-12-20 09:25:19'),
(4, 1, 1, 1, 0, 'images/GBEkQD6U8W.jpeg', '2022-12-20 09:25:19', '2022-12-20 09:25:19'),
(5, 1, 1, 2, 0, 'images/XeMpRrDLVA.jpeg', '2022-12-20 09:27:40', '2022-12-20 09:27:40'),
(6, 1, 1, 2, 1, 'images/8tB6Kj5lGp.jpeg', '2022-12-20 09:27:40', '2022-12-20 09:27:40'),
(7, 1, 1, 2, 0, 'images/XOV8eobzGy.jpeg', '2022-12-20 09:27:40', '2022-12-20 09:27:40'),
(8, 1, 1, 2, 0, 'images/rT3ltKRUiP.jpg', '2022-12-20 09:27:40', '2022-12-20 09:27:40'),
(9, 1, 2, 3, 0, 'images/HDIs1JYvnU.jpg', '2022-12-20 09:48:36', '2022-12-20 09:48:36'),
(10, 1, 2, 3, 0, 'images/opOLDEiuHS.jpeg', '2022-12-20 09:48:36', '2022-12-20 09:48:36'),
(11, 1, 2, 3, 1, 'images/m6P4osqf7C.jpeg', '2022-12-20 09:48:36', '2022-12-20 09:59:37'),
(12, 1, 2, 3, 0, 'images/eSVzn3BDyR.jpeg', '2022-12-20 09:48:36', '2022-12-20 09:48:36'),
(13, 1, 3, 4, 1, 'images/iDcsCUVr38.jpg', '2022-12-20 12:44:39', '2022-12-20 12:44:44'),
(14, 1, 3, 4, 0, 'images/3qoNGnZCFd.jpeg', '2022-12-20 12:44:39', '2022-12-20 12:44:39'),
(15, 1, 3, 4, 0, 'images/Ggi9YaPleq.jpeg', '2022-12-20 12:44:39', '2022-12-20 12:44:39'),
(16, 1, 3, 4, 0, 'images/iBYgckN1mJ.jpeg', '2022-12-20 12:44:39', '2022-12-20 12:44:39');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `room_periods`
--

CREATE TABLE `room_periods` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `apart_id` int(11) DEFAULT NULL,
  `room_id` int(11) DEFAULT NULL,
  `room_count` int(11) DEFAULT NULL,
  `period_start` date DEFAULT NULL,
  `period_end` date DEFAULT NULL,
  `period_price` decimal(10,2) DEFAULT NULL,
  `period_discount` int(11) DEFAULT NULL,
  `period_discounted_price` decimal(10,2) DEFAULT NULL,
  `period_final_price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `room_periods`
--

INSERT INTO `room_periods` (`id`, `status`, `apart_id`, `room_id`, `room_count`, `period_start`, `period_end`, `period_price`, `period_discount`, `period_discounted_price`, `period_final_price`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 25, '2022-12-20', '2024-01-31', '150.00', 5, '142.50', '142.50', '2022-12-20 09:26:49', '2022-12-20 09:26:49'),
(2, 1, 1, 2, 30, '2022-12-20', '2024-02-29', '350.00', 10, '315.00', '315.00', '2022-12-20 09:28:03', '2022-12-20 09:28:03'),
(3, 1, 2, 3, 40, '2022-12-20', '2024-11-17', '90.00', 5, '85.50', '85.50', '2022-12-20 09:49:03', '2022-12-20 09:49:03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sales`
--

CREATE TABLE `sales` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_surname` varchar(255) DEFAULT NULL,
  `customer_phone` varchar(255) DEFAULT NULL,
  `customer_mail` varchar(255) DEFAULT NULL,
  `customer_address` text DEFAULT NULL,
  `customer_apart` text DEFAULT NULL,
  `sale_date` date DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `payable` decimal(10,2) DEFAULT NULL,
  `paid` decimal(10,2) DEFAULT NULL,
  `remaining` decimal(10,2) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sales`
--

INSERT INTO `sales` (`id`, `status`, `customer_name`, `customer_surname`, `customer_phone`, `customer_mail`, `customer_address`, `customer_apart`, `sale_date`, `price`, `discount`, `payable`, `paid`, `remaining`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'test', 'test', '09999', 'test@test.com', 'test', 'Test Apart', '2022-12-20', '1000.00', 10, '600.00', '100.00', '200.00', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p><br></p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p><p><br></p><p>Where can I get Lorem Ipsum?</p><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '2022-12-20 06:31:41', '2022-12-20 06:31:59');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `site_url` text DEFAULT NULL,
  `site_title` text DEFAULT NULL,
  `site_description` text DEFAULT NULL,
  `site_keywords` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `about` text DEFAULT NULL,
  `user_agreement` text DEFAULT NULL,
  `cookie_policy` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`id`, `status`, `site_url`, `site_title`, `site_description`, `site_keywords`, `logo`, `about`, `user_agreement`, `cookie_policy`, `created_at`, `updated_at`) VALUES
(1, 1, 'http://localhost', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'images/OWg3jfXwoe.png', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p><p>Why do we use Lorem Ipsum?</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br></p><p>Where does Lorem Ipsum come from?</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p><p>Why do we use Lorem Ipsum?</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br></p><p>Where does Lorem Ipsum come from?</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p><br></p><p>Why do we use Lorem Ipsum?</p><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><p><br></p><p>Where does Lorem Ipsum come from?</p><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', NULL, '2022-12-20 05:55:41');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `url` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`id`, `status`, `title`, `description`, `url`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Demo', 'Demo', 'http://localhost', 'images/o02YZpxy7V.jpg', '2022-12-20 06:17:12', '2022-12-20 06:17:59'),
(2, 1, 'Test', 'Test', 'http://localhost', 'images/RcUO8N3DxP.jpg', '2022-12-20 06:18:39', '2022-12-20 06:18:39');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `supports`
--

CREATE TABLE `supports` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `support_date` datetime DEFAULT NULL,
  `reply` text DEFAULT NULL,
  `reply_date` datetime DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `supports`
--

INSERT INTO `supports` (`id`, `status`, `name`, `surname`, `mail`, `phone`, `message`, `support_date`, `reply`, `reply_date`, `description`, `created_at`, `updated_at`) VALUES
(1, 2, 'test', NULL, 'test@test.com', '02587', 'Message test', '2022-12-20 13:05:14', 'reply', '2022-12-20 13:09:18', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry..<br></p>', '2022-12-20 10:05:14', '2022-12-20 10:09:28'),
(2, 2, 'Holiday', NULL, 'hliday@mail.com', '03698', 'Request from Membership Form', '2022-12-20 15:37:31', 'reply', '2022-12-20 15:38:15', NULL, '2022-12-20 12:37:31', '2022-12-20 12:38:15');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` int(11) DEFAULT NULL,
  `username` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `status`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', '$2y$10$EyXUseX0qsDu10yvIRU3GOfib.fB9dvp641Pv9IBUpfXU0msjBH2m', NULL, NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `apart_images`
--
ALTER TABLE `apart_images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `apart_infos`
--
ALTER TABLE `apart_infos`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `apart_rooms`
--
ALTER TABLE `apart_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `apart_supports`
--
ALTER TABLE `apart_supports`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `customer_notes`
--
ALTER TABLE `customer_notes`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `room_images`
--
ALTER TABLE `room_images`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `room_periods`
--
ALTER TABLE `room_periods`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `supports`
--
ALTER TABLE `supports`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `apart_images`
--
ALTER TABLE `apart_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `apart_infos`
--
ALTER TABLE `apart_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `apart_rooms`
--
ALTER TABLE `apart_rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `apart_supports`
--
ALTER TABLE `apart_supports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `customer_notes`
--
ALTER TABLE `customer_notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `room_images`
--
ALTER TABLE `room_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Tablo için AUTO_INCREMENT değeri `room_periods`
--
ALTER TABLE `room_periods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `supports`
--
ALTER TABLE `supports`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
