-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 02:51 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lyca`
--

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `action` varchar(50) NOT NULL,
  `date` datetime NOT NULL,
  `HTTP_response` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `action`, `date`, `HTTP_response`) VALUES
(26, 'add_subscriber', '2021-04-06 08:23:49', '0'),
(27, 'add_subscriber', '2021-04-06 08:35:10', '0'),
(28, 'subscribers', '2021-04-07 00:00:00', '200'),
(29, 'subscribers', '2021-04-07 00:00:00', '200'),
(30, 'subscribers', '2021-04-07 00:00:00', '200'),
(31, 'subscribers', '0000-00-00 00:00:00', '200'),
(32, 'subscribers', '0000-00-00 00:00:00', '200'),
(33, 'subscribers', '0000-00-00 00:00:00', '200'),
(34, 'subscribers', '2021-04-07 08:19:29', '200'),
(35, 'subscribers', '2021-04-07 08:19:35', '200'),
(36, 'subscribers', '2021-04-07 08:21:16', '200'),
(37, 'subscribers', '2021-04-07 08:21:17', '200'),
(38, 'subscribers', '2021-04-07 08:21:24', '200'),
(39, 'Show Logs', '2021-04-07 08:27:15', '200'),
(40, 'Show subscriber by id', '2021-04-07 08:27:36', '200'),
(41, 'test1', '0000-00-00 00:00:00', '0'),
(42, 'test2', '2021-04-07 09:29:41', '0'),
(43, 'Show subscriber by id', '2021-04-07 09:30:03', '200'),
(44, 'Show Logs', '2021-04-07 09:30:06', '200'),
(45, 'Show Logs', '2021-04-07 09:31:06', '200'),
(46, 'Show Logs', '2021-04-07 10:18:57', '200'),
(47, 'Add service to Subscriber', '2021-04-07 10:29:15', '204'),
(48, 'Add service to Subscriber', '2021-04-07 10:37:23', '204'),
(49, 'Add service to Subscriber', '2021-04-07 10:37:24', '204'),
(50, 'Add service to Subscriber', '2021-04-07 10:37:24', '204'),
(51, 'Add service to Subscriber', '2021-04-07 10:37:25', '204'),
(52, 'Add service to Subscriber', '2021-04-07 10:37:26', '204'),
(53, 'Add service to Subscriber', '2021-04-07 10:37:27', '204'),
(54, 'Add service to Subscriber', '2021-04-07 10:37:40', '204'),
(55, 'Add service to Subscriber', '2021-04-07 10:37:41', '204'),
(56, 'Add service to Subscriber', '2021-04-07 10:38:18', '204'),
(57, 'Add service to Subscriber', '2021-04-07 10:38:19', '204'),
(58, 'Add service to Subscriber', '2021-04-07 10:38:20', '204'),
(59, 'Add service to Subscriber', '2021-04-07 10:38:21', '204'),
(60, 'Delete service from Subscriber', '2021-04-07 10:39:09', '204'),
(61, 'Delete service from Subscriber', '2021-04-07 10:39:33', '204'),
(62, 'Delete service from Subscriber', '2021-04-07 10:39:51', '204'),
(63, 'Delete service from Subscriber', '2021-04-07 10:40:04', '204'),
(64, 'Delete service from Subscriber', '2021-04-07 10:40:36', '204'),
(65, 'Delete service from Subscriber', '2021-04-07 10:41:19', '204'),
(66, 'Delete service from Subscriber', '2021-04-07 10:41:34', '204'),
(67, 'Delete service from Subscriber', '2021-04-07 10:41:58', '204'),
(68, 'Delete service from Subscriber', '2021-04-07 10:41:59', '204'),
(69, 'Delete service from Subscriber', '2021-04-07 10:41:59', '204'),
(70, 'Delete service from Subscriber', '2021-04-07 10:42:00', '204'),
(71, 'Delete service from Subscriber', '2021-04-07 10:42:21', '204'),
(72, 'Delete service from Subscriber', '2021-04-07 10:42:21', '204'),
(73, 'Delete service from Subscriber', '2021-04-07 10:42:22', '204'),
(74, 'Delete service from Subscriber', '2021-04-07 10:42:23', '204'),
(75, 'Delete service from Subscriber', '2021-04-07 10:42:23', '204'),
(76, 'Delete service from Subscriber', '2021-04-07 10:42:48', '204'),
(77, 'Delete service from Subscriber', '2021-04-07 10:42:52', '204'),
(78, 'Delete service from Subscriber', '2021-04-07 10:43:00', '204'),
(79, 'Delete service from Subscriber', '2021-04-07 10:44:07', '204'),
(80, 'Delete service from Subscriber', '2021-04-07 10:44:46', '204'),
(81, 'Delete service from Subscriber', '2021-04-07 10:45:19', '204'),
(82, 'Add Service', '2021-04-07 10:46:59', '200'),
(83, 'Add Service', '2021-04-07 10:47:00', '200'),
(84, 'Add Service', '2021-04-07 10:47:00', '200'),
(85, 'Add Service', '2021-04-07 10:47:01', '200'),
(86, 'Add Service', '2021-04-07 10:47:02', '200'),
(87, 'Add service to Subscriber', '2021-04-07 10:48:03', '200'),
(88, 'Add service to Subscriber', '2021-04-07 10:48:10', '204'),
(89, 'Add service to Subscriber', '2021-04-07 10:48:10', '204'),
(90, 'Add service to Subscriber', '2021-04-07 10:48:11', '204'),
(91, 'Add service to Subscriber', '2021-04-07 10:48:16', '200'),
(92, 'Add service to Subscriber', '2021-04-07 10:48:21', '200'),
(93, 'Add service to Subscriber', '2021-04-07 10:48:24', '200'),
(94, 'Add service to Subscriber', '2021-04-07 10:48:26', '200'),
(95, 'Add service to Subscriber', '2021-04-07 10:48:28', '200'),
(96, 'Delete service from Subscriber', '2021-04-07 10:49:00', '204'),
(97, 'Delete service from Subscriber', '2021-04-07 10:49:02', '204'),
(98, 'Delete service from Subscriber', '2021-04-07 10:49:09', '200'),
(99, 'Delete service from Subscriber', '2021-04-07 10:49:21', '200'),
(100, 'Delete service from Subscriber', '2021-04-07 10:49:34', '200'),
(101, 'Delete service from Subscriber', '2021-04-07 10:49:47', '200'),
(102, 'Delete service from Subscriber', '2021-04-07 10:49:47', '204'),
(103, 'Delete service from Subscriber', '2021-04-07 10:49:51', '200'),
(104, 'Add service to Subscriber', '2021-04-07 10:50:13', '200'),
(105, 'Delete service from Subscriber', '2021-04-07 10:50:15', '200'),
(106, 'Add service to Subscriber', '2021-04-07 10:50:18', '200'),
(107, 'Add service to Subscriber', '2021-04-07 10:50:18', '204'),
(108, 'Delete service from Subscriber', '2021-04-07 10:50:20', '200'),
(109, 'Delete service from Subscriber', '2021-04-07 10:50:20', '204'),
(110, 'Show Logs', '2021-04-07 10:50:23', '200'),
(111, 'Show Logs', '2021-04-07 10:51:34', '200'),
(112, 'Show Logs', '2021-04-07 10:51:34', '200'),
(113, 'Show Service by id', '2021-04-07 10:54:00', '200'),
(114, 'Show Services', '2021-04-07 10:54:02', ''),
(115, 'Show subscriber by id', '2021-04-07 10:54:05', '200'),
(116, 'Show subscriber by id', '2021-04-07 10:54:19', '200'),
(117, 'Show subscriber by id', '2021-04-07 10:54:36', '200'),
(118, 'Delte Service', '2021-04-07 10:54:54', '200'),
(119, 'Delete subscriber', '2021-04-07 10:55:05', '200'),
(120, 'Delete subscriber', '2021-04-07 10:55:06', '200'),
(121, 'Delete subscriber', '2021-04-07 10:55:07', '200'),
(122, 'Modify subscriber', '2021-04-07 10:55:19', '200'),
(123, 'Modify subscriber', '2021-04-07 10:55:20', '200'),
(124, 'Modify Service', '2021-04-07 10:55:25', '200'),
(125, 'Add service to Subscriber', '2021-04-07 10:55:32', '200'),
(126, 'Add service to Subscriber', '2021-04-07 10:55:33', '204'),
(127, 'Delete service from Subscriber', '2021-04-07 10:55:38', '200'),
(128, 'Delete service from Subscriber', '2021-04-07 10:55:39', '204'),
(129, 'Add Subscriber', '2021-04-07 10:55:44', '201'),
(130, 'Add Subscriber', '2021-04-07 10:55:44', '201'),
(131, 'Add Subscriber', '2021-04-07 10:55:45', '201'),
(132, 'Add Subscriber', '2021-04-07 10:55:45', '201'),
(133, 'Add Service', '2021-04-07 10:55:49', '200'),
(134, 'Add Service', '2021-04-07 10:55:49', '200'),
(135, 'Show subscriber by id', '2021-04-07 11:06:19', '200'),
(136, 'Show subscriber by id', '2021-04-07 11:06:29', ''),
(137, 'Show subscriber by id', '2021-04-07 11:06:36', ''),
(138, 'Show subscriber by id', '2021-04-07 11:06:49', ''),
(139, 'Show Subscribers', '2021-04-07 11:06:57', '200'),
(140, 'Show Subscribers', '2021-04-07 11:07:08', '200'),
(141, '/subscriber/13', '2021-04-07 11:07:16', '400'),
(142, 'Show subscriber by id', '2021-04-07 11:07:34', '200'),
(143, 'Delete subscriber', '2021-04-07 11:08:20', '200'),
(144, 'Delete subscriber', '2021-04-07 11:08:27', '200'),
(145, 'Delete subscriber', '2021-04-07 11:08:30', '200'),
(146, '/test/', '2021-04-07 12:41:57', '400'),
(147, '/favicon.ico', '2021-04-07 12:41:57', '400'),
(148, '/subscriber/13', '2021-04-07 12:47:37', '400'),
(149, '/subscriber/12', '2021-04-07 12:47:43', '400'),
(150, '/sudsbscriber', '2021-04-07 12:47:55', '400'),
(151, '$_SERVER[\"REQUEST_URI\"]', '2021-04-07 12:52:39', '400'),
(152, '$_SERVER[\"REQUEST_URI\"]', '2021-04-07 12:53:15', '400'),
(153, '/sudsbscriber', '2021-04-07 12:53:29', '400'),
(154, '/sudsbscriber', '2021-04-07 12:53:38', '400'),
(155, '/sudsbscriber', '2021-04-07 12:53:40', '400'),
(156, '/sudsbscribers', '2021-04-07 12:53:42', '400'),
(157, 'Show Subscribers', '2021-04-07 12:53:52', '200'),
(158, 'Show Logs', '2021-04-07 12:53:57', '200'),
(159, 'Show Logs', '2021-04-07 12:54:01', '200'),
(160, '/logsds/dsadsa', '2021-04-07 12:54:04', '400'),
(161, 'Show Logs', '2021-04-07 12:54:08', '200'),
(162, 'Show subscriber by id', '2021-04-07 12:54:14', ''),
(163, 'Show subscriber by id', '2021-04-07 12:54:27', ''),
(164, 'Show subscriber by id', '2021-04-07 12:55:23', ''),
(165, 'Show subscriber by id', '2021-04-07 12:56:05', ''),
(166, 'Show subscriber by id', '2021-04-07 12:56:37', ''),
(167, 'Show subscriber by id', '2021-04-07 12:56:47', ''),
(168, 'Show subscriber by id', '2021-04-07 12:57:18', ''),
(169, 'Show subscriber by id', '2021-04-07 12:57:23', ''),
(170, 'Show subscriber by id', '2021-04-07 12:57:33', ''),
(171, 'Show subscriber by id', '2021-04-07 12:57:39', ''),
(172, 'Show subscriber by id', '2021-04-07 12:57:43', ''),
(173, 'Show subscriber by id', '2021-04-07 12:58:15', ''),
(174, 'Show subscriber by id', '2021-04-07 12:58:36', '200'),
(175, 'Show subscriber by id', '2021-04-07 12:58:52', '200'),
(176, 'Show subscriber by id', '2021-04-07 12:58:55', ''),
(177, 'Show subscriber by id', '2021-04-07 12:59:15', ''),
(178, 'Show subscriber by id', '2021-04-07 13:02:15', ''),
(179, 'Show subscriber by id', '2021-04-07 13:03:14', '404'),
(180, 'Show subscriber by id', '2021-04-07 13:03:16', '404'),
(181, '/subscribedsar_by_id', '2021-04-07 13:06:47', '400'),
(182, 'Show subscriber by id', '2021-04-07 13:06:53', '200'),
(183, 'Show subscriber by id', '2021-04-07 13:06:56', '404'),
(184, 'Show subscriber by id', '2021-04-07 13:07:02', '404'),
(185, 'Show subscriber by id', '2021-04-07 13:07:04', '200'),
(186, 'Show subscriber by id', '2021-04-07 13:07:06', '200'),
(187, 'Show subscriber by id', '2021-04-07 13:07:07', '200'),
(188, 'Show Services', '2021-04-07 13:07:10', ''),
(189, 'Show Services', '2021-04-07 13:07:14', ''),
(190, 'Show Services', '2021-04-07 13:07:17', ''),
(191, '/servicessds', '2021-04-07 13:07:19', '400'),
(192, 'Show Services', '2021-04-07 13:07:22', ''),
(193, 'Show Service by id', '2021-04-07 13:07:25', '200'),
(194, 'Show Service by id', '2021-04-07 13:07:27', ''),
(195, 'Show Service by id', '2021-04-07 13:08:39', '404'),
(196, 'Show Service by id', '2021-04-07 13:08:42', '200'),
(197, 'Show Service by id', '2021-04-07 13:08:45', '404'),
(198, 'Show Service by id', '2021-04-07 13:08:51', '200'),
(199, 'Delte Service', '2021-04-07 13:08:55', '200'),
(200, 'Delte Service', '2021-04-07 13:08:56', '200'),
(201, 'Delte Service', '2021-04-07 13:08:56', '200'),
(202, 'Delte Service', '2021-04-07 13:08:57', '200'),
(203, 'Delte Service', '2021-04-07 13:08:57', '200'),
(204, 'Delte Service', '2021-04-07 13:08:58', '200'),
(205, 'Delte Service', '2021-04-07 13:08:58', '200'),
(206, 'Delte Service', '2021-04-07 13:08:59', '200'),
(207, 'Delte Service', '2021-04-07 13:08:59', '200'),
(208, 'Add Subscriber', '2021-04-07 13:09:12', '201'),
(209, 'Add Subscriber', '2021-04-07 13:09:16', '204'),
(210, 'Add Subscriber', '2021-04-07 13:09:19', '204'),
(211, 'Add Subscriber', '2021-04-07 13:09:23', '201'),
(212, 'Add Subscriber', '2021-04-07 13:09:26', '204'),
(213, 'Add Subscriber', '2021-04-07 13:09:28', '201'),
(214, 'Add Service', '2021-04-07 13:09:31', '200'),
(215, 'Add Service', '2021-04-07 13:09:33', '400'),
(216, '/services', '2021-04-07 13:09:36', '400'),
(217, 'Add Service', '2021-04-07 13:09:39', '200'),
(218, 'Add Service', '2021-04-07 13:09:41', '400'),
(219, 'Add Service', '2021-04-07 13:09:44', '200'),
(220, '/subscribers', '2021-04-07 13:09:48', '400'),
(221, 'Add Subscriber', '2021-04-07 13:09:50', '201'),
(222, 'Add Subscriber', '2021-04-07 13:09:52', '204'),
(223, 'Add Subscriber', '2021-04-07 13:10:56', '400'),
(224, 'Add Subscriber', '2021-04-07 13:11:30', '204'),
(225, 'Add Subscriber', '2021-04-07 13:11:38', '204'),
(226, 'Add Subscriber', '2021-04-07 13:11:42', '201'),
(227, 'Add Subscriber', '2021-04-07 13:12:00', '204'),
(228, 'Add Subscriber', '2021-04-07 13:12:02', '201'),
(229, 'Add Service', '2021-04-07 13:12:05', '200'),
(230, 'Add Service', '2021-04-07 13:12:07', '400'),
(231, 'Add Service', '2021-04-07 13:12:11', '200'),
(232, 'Add Service', '2021-04-07 13:12:53', '201'),
(233, 'Add Service', '2021-04-07 13:12:56', '400'),
(234, 'Add Service', '2021-04-07 13:32:37', '400'),
(235, 'Add Service', '2021-04-07 13:33:41', '400'),
(236, 'Add Service', '2021-04-07 13:33:53', '400'),
(237, 'Add Service', '2021-04-07 13:34:07', '400'),
(238, 'Add Service', '2021-04-07 13:34:15', '201'),
(239, 'Add Service', '2021-04-07 13:34:17', '400'),
(240, 'Add Service', '2021-04-07 13:34:21', '201'),
(241, 'Add Subscriber', '2021-04-07 13:34:24', '201'),
(242, 'Add Subscriber', '2021-04-07 13:34:26', '400'),
(243, 'Add Subscriber', '2021-04-07 13:34:44', '400'),
(244, 'Add Subscriber', '2021-04-07 13:34:46', '201'),
(245, 'Show Subscribers', '2021-04-07 13:35:01', '200'),
(246, 'Show Logs', '2021-04-07 13:35:03', '200'),
(247, 'Show subscriber by id', '2021-04-07 13:35:05', '200'),
(248, 'Show Services', '2021-04-07 13:35:08', ''),
(249, 'Show Service by id', '2021-04-07 13:35:11', '200'),
(250, 'Delte Service', '2021-04-07 13:35:13', '200'),
(251, 'Delte Service', '2021-04-07 13:35:24', '200'),
(252, 'Delte Service', '2021-04-07 13:35:25', '200'),
(253, 'Delete subscriber', '2021-04-07 13:35:30', '200'),
(254, 'Delete subscriber', '2021-04-07 13:35:30', '200'),
(255, 'Delete subscriber', '2021-04-07 13:35:31', '200'),
(256, 'Delete subscriber', '2021-04-07 13:35:32', '200'),
(257, 'Delete subscriber', '2021-04-07 13:35:32', '200'),
(258, 'Delete subscriber', '2021-04-07 13:36:19', '204'),
(259, 'Delete subscriber', '2021-04-07 13:36:22', '200'),
(260, 'Delete subscriber', '2021-04-07 13:38:28', '200'),
(261, 'Delete subscriber', '2021-04-07 13:38:28', '200'),
(262, 'Delete subscriber', '2021-04-07 13:38:29', '200'),
(263, 'Delete subscriber', '2021-04-07 13:38:29', '200'),
(264, 'Delte Service', '2021-04-07 13:38:32', '200'),
(265, 'Show subscriber by id', '2021-04-07 13:39:01', '404'),
(266, 'Delete subscriber', '2021-04-07 13:39:06', '200'),
(267, 'Show subscriber by id', '2021-04-07 13:39:10', '404'),
(268, 'Show subscriber by id', '2021-04-07 13:43:02', '404'),
(269, 'Show subscriber by id', '2021-04-07 13:43:06', '200'),
(270, 'Show subscriber by id', '2021-04-07 13:43:26', '200'),
(271, 'Show subscriber by id', '2021-04-07 13:43:50', '200'),
(272, 'Show Subscriber by id', '2021-04-07 13:43:56', '404'),
(273, 'Show subscriber by id', '2021-04-07 13:43:59', '200'),
(274, 'Show Services', '2021-04-07 13:44:01', ''),
(275, 'Show Service by id', '2021-04-07 13:44:06', '200'),
(276, 'Show Service by id', '2021-04-07 13:44:59', '200'),
(277, 'Delete subscriber', '2021-04-07 13:45:01', '200'),
(278, 'Delete subscriber', '2021-04-07 13:45:01', '200'),
(279, 'Delete subscriber', '2021-04-07 13:45:03', '200'),
(280, 'Delete subscriber', '2021-04-07 13:45:03', '200'),
(281, 'Delete subscriber', '2021-04-07 13:45:04', '200'),
(282, 'Delete subscriber', '2021-04-07 13:45:05', '200'),
(283, 'Delete subscriber', '2021-04-07 13:45:05', '200'),
(284, 'Delete subscriber', '2021-04-07 13:45:06', '200'),
(285, 'Delete subscriber', '2021-04-07 13:47:35', '200'),
(286, 'Delete subscriber', '2021-04-07 13:47:38', '200'),
(287, 'Show Subscribers', '2021-04-07 13:48:57', '200'),
(288, '/subscriberss', '2021-04-07 13:48:59', '400'),
(289, 'Show Subscribers', '2021-04-07 13:49:01', '200'),
(290, '/s/ubscribers', '2021-04-07 13:49:03', '400'),
(291, 'Show Subscribers', '2021-04-07 13:49:08', '200'),
(292, 'Show Logs', '2021-04-07 13:49:10', '200'),
(293, 'Show Subscribers', '2021-04-07 13:49:13', '200'),
(294, 'Show subscriber by id', '2021-04-07 13:49:16', '200'),
(295, 'Show Subscriber by id', '2021-04-07 13:49:19', '404'),
(296, 'Show subscriber by id', '2021-04-07 13:49:21', '200'),
(297, 'Show Services', '2021-04-07 13:49:23', ''),
(298, '/servicess', '2021-04-07 13:49:25', '400'),
(299, 'Show Services', '2021-04-07 13:49:29', ''),
(300, 'Show Service by id', '2021-04-07 13:49:32', '200'),
(301, 'Show Service by id', '2021-04-07 13:49:34', '404'),
(302, 'Show Service by id', '2021-04-07 13:49:37', '404'),
(303, 'Show Service by id', '2021-04-07 13:49:41', '404'),
(304, 'Show Service by id', '2021-04-07 13:49:44', '200'),
(305, 'Modify subscriber', '2021-04-07 13:50:01', '200'),
(306, 'Delete subscriber', '2021-04-07 14:41:39', '200'),
(307, '/logssda', '2021-04-07 14:42:01', '400'),
(308, 'Show Logs', '2021-04-07 14:42:05', '200'),
(309, 'Add Subscriber', '2021-04-07 14:42:15', '201'),
(310, 'Add Subscriber', '2021-04-07 14:42:22', '400'),
(311, 'Add Subscriber', '2021-04-07 14:42:25', '400'),
(312, 'Add Subscriber', '2021-04-07 14:42:29', '400'),
(313, 'Add Subscriber', '2021-04-07 14:42:33', '201'),
(314, 'Delete service from Subscriber', '2021-04-07 14:47:37', '204'),
(315, 'Delete service from Subscriber', '2021-04-07 14:47:42', '204'),
(316, 'Delete service from Subscriber', '2021-04-07 14:47:46', '204'),
(317, 'Delete service from Subscriber', '2021-04-07 14:47:49', '204'),
(318, 'Delete service from Subscriber', '2021-04-07 14:48:12', '204'),
(319, 'Delete service from Subscriber', '2021-04-07 14:48:44', '204'),
(320, 'Delete service from Subscriber', '2021-04-07 14:49:02', '204'),
(321, 'Delete service from Subscriber', '2021-04-07 14:49:17', '204'),
(322, 'Add service to Subscriber', '2021-04-07 14:49:27', '200'),
(323, 'Delete service from Subscriber', '2021-04-07 14:49:35', '200'),
(324, 'Delete service from Subscriber', '2021-04-07 14:49:37', '204'),
(325, 'Add service to Subscriber', '2021-04-07 14:49:41', '200'),
(326, 'Add service to Subscriber', '2021-04-07 14:49:42', '204'),
(327, 'Add service to Subscriber', '2021-04-07 14:49:43', '204'),
(328, 'Add service to Subscriber', '2021-04-07 14:49:44', '204'),
(329, 'Delte Service', '2021-04-07 14:50:21', '200'),
(330, 'Delete subscriber', '2021-04-07 14:50:25', '200'),
(331, 'Show Service by id', '2021-04-07 16:03:39', '200'),
(332, 'Delete subscriber', '2021-04-07 16:03:41', '200'),
(333, 'Delete subscriber', '2021-04-07 16:08:59', '200'),
(334, 'Delete subscriber', '2021-04-07 16:09:00', '200'),
(335, 'Delete subscriber', '2021-04-07 16:09:01', '200'),
(336, 'Delete subscriber', '2021-04-07 16:09:13', '200'),
(337, 'Delete subscriber', '2021-04-07 16:09:14', '200'),
(338, 'Delete subscriber', '2021-04-07 16:09:15', '200'),
(339, 'Delete subscriber', '2021-04-07 16:09:42', '200'),
(340, 'Delete subscriber', '2021-04-07 16:09:49', '200'),
(341, 'Delete subscriber', '2021-04-07 16:10:09', '204'),
(342, 'Delte Service', '2021-04-07 16:11:25', '200'),
(343, 'Delte Service', '2021-04-07 16:11:28', '200'),
(344, 'Delte Service', '2021-04-07 16:11:28', '200'),
(345, 'Delte Service', '2021-04-07 16:11:46', '200'),
(346, 'Delte Service', '2021-04-07 16:11:47', '200'),
(347, 'Delte Service', '2021-04-07 16:11:48', '200'),
(348, 'Delete Service', '2021-04-07 16:11:59', '204'),
(349, 'Delete Service', '2021-04-07 16:12:00', '204'),
(350, 'Show Subscribers', '2021-04-07 16:53:35', '200'),
(351, 'Show Logs', '2021-04-07 16:53:36', '200'),
(352, 'Show subscriber by id', '2021-04-07 16:53:39', '200'),
(353, 'Show subscriber by id', '2021-04-07 16:53:40', '200'),
(354, 'Show Services', '2021-04-07 16:53:42', ''),
(355, 'Show Service by id', '2021-04-07 16:53:44', '200'),
(356, 'Delete subscriber', '2021-04-07 16:53:46', '204'),
(357, 'Delete subscriber', '2021-04-07 16:53:50', '204'),
(358, 'Delete Service', '2021-04-07 16:53:52', '204'),
(359, 'Delete Service', '2021-04-07 16:53:53', '204'),
(360, 'Modify subscriber', '2021-04-07 16:53:55', '200'),
(361, 'Modify Service', '2021-04-07 16:54:04', '200'),
(362, 'Add service to Subscriber', '2021-04-07 16:54:07', '204'),
(363, 'Add service to Subscriber', '2021-04-07 16:54:09', '204'),
(364, 'Add service to Subscriber', '2021-04-07 16:54:09', '204'),
(365, 'Delete service from Subscriber', '2021-04-07 16:54:12', '200'),
(366, 'Add Subscriber', '2021-04-07 16:54:15', '201'),
(367, 'Add Service', '2021-04-07 16:54:17', '201'),
(368, 'Delete subscriber', '2021-04-08 08:56:15', '204'),
(369, 'Show Subscribers', '2021-04-08 09:25:06', '200'),
(370, '/subscribersd6', '2021-04-08 09:25:24', '400'),
(371, '/k/subscribers', '2021-04-08 09:25:38', '400'),
(372, '//subscribers', '2021-04-08 09:25:43', '400'),
(373, 'Show Subscribers', '2021-04-08 09:25:48', '200'),
(374, '/subscribers', '2021-04-08 09:25:54', '400'),
(375, 'Show Subscribers', '2021-04-08 09:26:04', '200'),
(376, '/subscriber_by_id5/12', '2021-04-08 09:26:27', '400'),
(377, 'Show subscriber by id', '2021-04-08 09:26:31', '200'),
(378, 'Show subscriber by id', '2021-04-08 09:26:36', '404'),
(379, 'Show subscriber by id', '2021-04-08 09:26:40', '200'),
(380, 'Show Subscriber by id', '2021-04-08 09:26:56', '404'),
(381, 'Show Subscriber by id', '2021-04-08 09:27:01', '404'),
(382, 'Show subscriber by id', '2021-04-08 09:27:05', '200'),
(383, 'Show Services', '2021-04-08 09:27:31', ''),
(384, '/subscribers', '2021-04-08 09:27:54', '400'),
(385, 'Delete subscriber', '2021-04-08 09:27:59', '204'),
(386, 'Delete subscriber', '2021-04-08 09:28:29', '200'),
(387, 'Delete subscriber', '2021-04-08 09:28:52', '204'),
(388, 'Delete subscriber', '2021-04-08 09:29:05', '204'),
(389, 'Delete subscriber', '2021-04-08 09:29:06', '204'),
(390, 'Delete subscriber', '2021-04-08 09:29:06', '204'),
(391, 'Delete Service', '2021-04-08 09:29:32', '204'),
(392, 'Show Services', '2021-04-08 09:32:00', ''),
(393, 'Add Subscriber', '2021-04-08 09:32:27', '201'),
(394, 'Add Subscriber', '2021-04-08 09:32:58', '400'),
(395, 'Add Subscriber', '2021-04-08 09:33:03', '201'),
(396, 'Add Subscriber', '2021-04-08 09:33:05', '201'),
(397, 'Add Subscriber', '2021-04-08 09:33:05', '201'),
(398, 'Show Subscribers', '2021-04-08 09:33:12', '200'),
(399, 'Add Subscriber', '2021-04-08 09:33:30', '201'),
(400, 'Add Subscriber', '2021-04-08 09:33:35', '400'),
(401, 'Add service to Subscriber', '2021-04-08 09:34:24', '200'),
(402, 'Add service to Subscriber', '2021-04-08 09:34:25', '204'),
(403, 'Add service to Subscriber', '2021-04-08 09:34:26', '204'),
(404, 'Add service to Subscriber', '2021-04-08 09:34:30', '204'),
(405, 'Add service to Subscriber', '2021-04-08 09:34:32', '204'),
(406, 'Add service to Subscriber', '2021-04-08 09:34:41', '200'),
(407, 'Add service to Subscriber', '2021-04-08 09:34:43', '204'),
(408, 'Add service to Subscriber', '2021-04-08 09:34:44', '204'),
(409, 'Show Subscribers', '2021-04-08 09:34:56', '200'),
(410, 'Show subscriber by id', '2021-04-08 09:35:04', '200'),
(411, 'Add service to Subscriber', '2021-04-08 09:35:48', '200'),
(412, 'Show subscriber by id', '2021-04-08 09:35:52', '200'),
(413, 'Delete service from Subscriber', '2021-04-08 09:36:12', '200'),
(414, 'Show subscriber by id', '2021-04-08 09:36:22', '200'),
(415, 'Delete Service', '2021-04-08 09:36:41', '204'),
(416, 'Show Services', '2021-04-08 09:36:54', ''),
(417, 'Add service to Subscriber', '2021-04-08 09:37:06', '200'),
(418, 'Show subscriber by id', '2021-04-08 09:37:15', '200'),
(419, 'Show subscriber by id', '2021-04-08 09:37:20', '200'),
(420, 'Delete service from Subscriber', '2021-04-08 09:37:32', '204'),
(421, 'Show subscriber by id', '2021-04-08 09:37:40', '200'),
(422, 'Show subscriber by id', '2021-04-08 09:37:42', '200'),
(423, 'Delete service from Subscriber', '2021-04-08 09:37:53', '204'),
(424, 'Add service to Subscriber', '2021-04-08 09:38:01', '200'),
(425, 'Delete service from Subscriber', '2021-04-08 09:38:08', '204'),
(426, 'Delete service from Subscriber', '2021-04-08 09:38:09', '204'),
(427, 'Delete service from Subscriber', '2021-04-08 09:38:13', '200');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id_services` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(5) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id_subscriber` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Birthdate` date NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNumber` varchar(50) NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `Services` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id_services`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id_subscriber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=428;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id_services` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id_subscriber` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
