-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Ápr 15. 15:13
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `forma1`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `eredmenyek`
--

CREATE TABLE `eredmenyek` (
  `id` int(11) NOT NULL,
  `pilotaid` int(11) NOT NULL,
  `nagydij` varchar(100) NOT NULL,
  `helyezes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `eredmenyek`
--

INSERT INTO `eredmenyek` (`id`, `pilotaid`, `nagydij`, `helyezes`) VALUES
(1, 2, 'Australian Grand Prix', 1),
(2, 6, 'Australian Grand Prix', 2),
(3, 19, 'Australian Grand Prix', 3),
(4, 20, 'Australian Grand Prix', 8),
(5, 10, 'Australian Grand Prix', 4),
(6, 11, 'Australian Grand Prix', 9),
(7, 7, 'Australian Grand Prix', 12),
(8, 14, 'Australian Grand Prix', 11),
(9, 18, 'Australian Grand Prix', 7),
(10, 9, 'Australian Grand Prix', 6),
(11, 3, 'Australian Grand Prix', 5),
(12, 12, 'Australian Grand Prix', 16),
(13, 13, 'Australian Grand Prix', 15),
(14, 1, 'Australian Grand Prix', 10),
(15, 4, 'Australian Grand Prix', 14),
(16, 16, 'Australian Grand Prix', 17),
(17, 8, 'Australian Grand Prix', 18),
(18, 5, 'Australian Grand Prix', 13),
(19, 15, 'Australian Grand Prix', 19),
(20, 17, 'Australian Grand Prix', 20),
(21, 6, 'Bahrain Grand Prix', 2),
(22, 2, 'Bahrain Grand Prix', 3),
(23, 10, 'Bahrain Grand Prix', 1),
(24, 19, 'Bahrain Grand Prix', 9),
(25, 20, 'Bahrain Grand Prix', 4),
(26, 12, 'Bahrain Grand Prix', 12),
(27, 14, 'Bahrain Grand Prix', 11),
(28, 3, 'Bahrain Grand Prix', 8),
(29, 1, 'Bahrain Grand Prix', 16),
(30, 13, 'Bahrain Grand Prix', 14),
(31, 4, 'Bahrain Grand Prix', 7),
(32, 9, 'Bahrain Grand Prix', 5),
(33, 11, 'Bahrain Grand Prix', 13),
(34, 18, 'Bahrain Grand Prix', 17),
(35, 16, 'Bahrain Grand Prix', 19),
(36, 8, 'Bahrain Grand Prix', 20),
(37, 7, 'Bahrain Grand Prix', 6),
(38, 15, 'Bahrain Grand Prix', 15),
(39, 17, 'Bahrain Grand Prix', 10),
(40, 5, 'Bahrain Grand Prix', 18),
(41, 6, 'Chinese Grand Prix', 5),
(42, 2, 'Chinese Grand Prix', 4),
(43, 20, 'Chinese Grand Prix', 2),
(44, 19, 'Chinese Grand Prix', 6),
(45, 10, 'Chinese Grand Prix', 3),
(46, 3, 'Chinese Grand Prix', 1),
(47, 15, 'Chinese Grand Prix', 16),
(48, 13, 'Chinese Grand Prix', 17),
(49, 14, 'Chinese Grand Prix', 12),
(50, 1, 'Chinese Grand Prix', 18),
(51, 5, 'Chinese Grand Prix', 8),
(52, 18, 'Chinese Grand Prix', 7),
(53, 11, 'Chinese Grand Prix', 10),
(54, 17, 'Chinese Grand Prix', 11),
(55, 4, 'Chinese Grand Prix', 14),
(56, 16, 'Chinese Grand Prix', 9),
(57, 8, 'Chinese Grand Prix', 20),
(58, 12, 'Chinese Grand Prix', 15),
(59, 9, 'Chinese Grand Prix', 13),
(60, 7, 'Chinese Grand Prix', 19),
(61, 2, 'Azerbaijan Grand Prix', 2),
(62, 6, 'Azerbaijan Grand Prix', 3),
(63, 20, 'Azerbaijan Grand Prix', 4),
(64, 19, 'Azerbaijan Grand Prix', 5),
(65, 10, 'Azerbaijan Grand Prix', 1),
(66, 13, 'Azerbaijan Grand Prix', 7),
(67, 17, 'Azerbaijan Grand Prix', 10),
(68, 12, 'Azerbaijan Grand Prix', 6),
(69, 18, 'Azerbaijan Grand Prix', 12),
(70, 14, 'Azerbaijan Grand Prix', 13),
(71, 1, 'Azerbaijan Grand Prix', 9),
(72, 4, 'Azerbaijan Grand Prix', 11),
(73, 11, 'Azerbaijan Grand Prix', 14),
(74, 7, 'Azerbaijan Grand Prix', 17),
(75, 16, 'Azerbaijan Grand Prix', 16),
(76, 8, 'Azerbaijan Grand Prix', 19),
(77, 3, 'Azerbaijan Grand Prix', 8),
(78, 5, 'Azerbaijan Grand Prix', 20),
(79, 9, 'Azerbaijan Grand Prix', 18),
(80, 15, 'Azerbaijan Grand Prix', 15),
(81, 6, 'Spanish Grand Prix', 1),
(82, 2, 'Spanish Grand Prix', 2),
(83, 19, 'Spanish Grand Prix', 3),
(84, 20, 'Spanish Grand Prix', 4),
(85, 10, 'Spanish Grand Prix', 5),
(86, 3, 'Spanish Grand Prix', 6),
(87, 11, 'Spanish Grand Prix', 9),
(88, 17, 'Spanish Grand Prix', 10),
(89, 9, 'Spanish Grand Prix', 8),
(90, 5, 'Spanish Grand Prix', 12),
(91, 1, 'Spanish Grand Prix', 11),
(92, 15, 'Spanish Grand Prix', 7),
(93, 7, 'Spanish Grand Prix', 13),
(94, 14, 'Spanish Grand Prix', 14),
(95, 13, 'Spanish Grand Prix', 16),
(96, 4, 'Spanish Grand Prix', 15),
(97, 16, 'Spanish Grand Prix', 17),
(98, 8, 'Spanish Grand Prix', 19),
(99, 18, 'Spanish Grand Prix', 20),
(100, 12, 'Spanish Grand Prix', 18),
(101, 6, 'Monaco Grand Prix', 6),
(102, 20, 'Monaco Grand Prix', 9),
(103, 2, 'Monaco Grand Prix', 2),
(104, 19, 'Monaco Grand Prix', 7),
(105, 3, 'Monaco Grand Prix', 1),
(106, 17, 'Monaco Grand Prix', 5),
(107, 9, 'Monaco Grand Prix', 10),
(108, 1, 'Monaco Grand Prix', 3),
(109, 15, 'Monaco Grand Prix', 4),
(110, 5, 'Monaco Grand Prix', 16),
(111, 12, 'Monaco Grand Prix', 13),
(112, 11, 'Monaco Grand Prix', 17),
(113, 13, 'Monaco Grand Prix', 15),
(114, 7, 'Monaco Grand Prix', 8),
(115, 16, 'Monaco Grand Prix', 18),
(116, 18, 'Monaco Grand Prix', 12),
(117, 14, 'Monaco Grand Prix', 14),
(118, 8, 'Monaco Grand Prix', 19),
(119, 4, 'Monaco Grand Prix', 11),
(120, 10, 'Monaco Grand Prix', 20),
(121, 6, 'Canadian Grand Prix', 4),
(122, 20, 'Canadian Grand Prix', 5),
(123, 10, 'Canadian Grand Prix', 2),
(124, 2, 'Canadian Grand Prix', 1),
(125, 19, 'Canadian Grand Prix', 3),
(126, 15, 'Canadian Grand Prix', 9),
(127, 7, 'Canadian Grand Prix', 7),
(128, 3, 'Canadian Grand Prix', 10),
(129, 18, 'Canadian Grand Prix', 8),
(130, 9, 'Canadian Grand Prix', 11),
(131, 17, 'Canadian Grand Prix', 15),
(132, 13, 'Canadian Grand Prix', 13),
(133, 4, 'Canadian Grand Prix', 14),
(134, 5, 'Canadian Grand Prix', 12),
(135, 14, 'Canadian Grand Prix', 6),
(136, 16, 'Canadian Grand Prix', 17),
(137, 11, 'Canadian Grand Prix', 19),
(138, 8, 'Canadian Grand Prix', 18),
(139, 1, 'Canadian Grand Prix', 16),
(140, 12, 'Canadian Grand Prix', 20),
(141, 6, 'French Grand Prix', 2),
(142, 2, 'French Grand Prix', 3),
(143, 10, 'French Grand Prix', 4),
(144, 19, 'French Grand Prix', 5),
(145, 20, 'French Grand Prix', 1),
(146, 17, 'French Grand Prix', 6),
(147, 14, 'French Grand Prix', 8),
(148, 7, 'French Grand Prix', 10),
(149, 12, 'French Grand Prix', 7),
(150, 3, 'French Grand Prix', 15),
(151, 15, 'French Grand Prix', 14),
(152, 13, 'French Grand Prix', 11),
(153, 18, 'French Grand Prix', 9),
(154, 9, 'French Grand Prix', 16),
(155, 1, 'French Grand Prix', 12),
(156, 4, 'French Grand Prix', 13),
(157, 11, 'French Grand Prix', 18),
(158, 8, 'French Grand Prix', 20),
(159, 16, 'French Grand Prix', 19),
(160, 5, 'French Grand Prix', 17),
(161, 19, 'Austrian Grand Prix', 1),
(162, 10, 'Austrian Grand Prix', 3),
(163, 2, 'Austrian Grand Prix', 7),
(164, 20, 'Austrian Grand Prix', 2),
(165, 6, 'Austrian Grand Prix', 5),
(166, 12, 'Austrian Grand Prix', 8),
(167, 3, 'Austrian Grand Prix', 9),
(168, 17, 'Austrian Grand Prix', 6),
(169, 14, 'Austrian Grand Prix', 15),
(170, 4, 'Austrian Grand Prix', 13),
(171, 13, 'Austrian Grand Prix', 14),
(172, 15, 'Austrian Grand Prix', 4),
(173, 7, 'Austrian Grand Prix', 16),
(174, 18, 'Austrian Grand Prix', 17),
(175, 1, 'Austrian Grand Prix', 11),
(176, 5, 'Austrian Grand Prix', 12),
(177, 9, 'Austrian Grand Prix', 18),
(178, 16, 'Austrian Grand Prix', 19),
(179, 11, 'Austrian Grand Prix', 10),
(180, 8, 'Austrian Grand Prix', 20),
(181, 6, 'British Grand Prix', 1),
(182, 2, 'British Grand Prix', 2),
(183, 10, 'British Grand Prix', 5),
(184, 3, 'British Grand Prix', 8),
(185, 19, 'British Grand Prix', 4),
(186, 17, 'British Grand Prix', 11),
(187, 15, 'British Grand Prix', 9),
(188, 14, 'British Grand Prix', 14),
(189, 9, 'British Grand Prix', 12),
(190, 7, 'British Grand Prix', 13),
(191, 12, 'British Grand Prix', 10),
(192, 1, 'British Grand Prix', 15),
(193, 18, 'British Grand Prix', 6),
(194, 16, 'British Grand Prix', 16),
(195, 8, 'British Grand Prix', 17),
(196, 20, 'British Grand Prix', 3),
(197, 13, 'British Grand Prix', 7),
(198, 4, 'British Grand Prix', 18),
(199, 5, 'British Grand Prix', 20),
(200, 11, 'British Grand Prix', 19),
(201, 19, 'German Grand Prix', 1),
(202, 20, 'German Grand Prix', 2),
(203, 9, 'German Grand Prix', 6),
(204, 18, 'German Grand Prix', 8),
(205, 17, 'German Grand Prix', 9),
(206, 1, 'German Grand Prix', 10),
(207, 5, 'German Grand Prix', 7),
(208, 11, 'German Grand Prix', 5),
(209, 6, 'German Grand Prix', 12),
(210, 8, 'German Grand Prix', 13),
(211, 16, 'German Grand Prix', 3),
(212, 14, 'German Grand Prix', 15),
(213, 4, 'German Grand Prix', 14),
(214, 3, 'German Grand Prix', 4),
(215, 2, 'German Grand Prix', 11),
(216, 7, 'German Grand Prix', 17),
(217, 10, 'German Grand Prix', 16),
(218, 12, 'German Grand Prix', 18),
(219, 15, 'German Grand Prix', 19),
(220, 13, 'German Grand Prix', 0),
(221, 6, 'Hungarian Grand Prix', 2),
(222, 19, 'Hungarian Grand Prix', 1),
(223, 20, 'Hungarian Grand Prix', 4),
(224, 10, 'Hungarian Grand Prix', 5),
(225, 17, 'Hungarian Grand Prix', 10),
(226, 3, 'Hungarian Grand Prix', 12),
(227, 14, 'Hungarian Grand Prix', 9),
(228, 2, 'Hungarian Grand Prix', 3),
(229, 12, 'Hungarian Grand Prix', 13),
(230, 1, 'Hungarian Grand Prix', 7),
(231, 13, 'Hungarian Grand Prix', 15),
(232, 7, 'Hungarian Grand Prix', 14),
(233, 11, 'Hungarian Grand Prix', 11),
(234, 15, 'Hungarian Grand Prix', 8),
(235, 9, 'Hungarian Grand Prix', 16),
(236, 16, 'Hungarian Grand Prix', 17),
(237, 18, 'Hungarian Grand Prix', 6),
(238, 4, 'Hungarian Grand Prix', 19),
(239, 8, 'Hungarian Grand Prix', 20),
(240, 5, 'Hungarian Grand Prix', 18),
(241, 10, 'Belgian Grand Prix', 4),
(242, 6, 'Belgian Grand Prix', 3),
(243, 2, 'Belgian Grand Prix', 2),
(244, 20, 'Belgian Grand Prix', 1),
(245, 1, 'Belgian Grand Prix', 5),
(246, 13, 'Belgian Grand Prix', 13),
(247, 9, 'Belgian Grand Prix', 7),
(248, 7, 'Belgian Grand Prix', 9),
(249, 3, 'Belgian Grand Prix', 17),
(250, 18, 'Belgian Grand Prix', 10),
(251, 12, 'Belgian Grand Prix', 8),
(252, 11, 'Belgian Grand Prix', 11),
(253, 5, 'Belgian Grand Prix', 16),
(254, 15, 'Belgian Grand Prix', 18),
(255, 16, 'Belgian Grand Prix', 14),
(256, 14, 'Belgian Grand Prix', 12),
(257, 8, 'Belgian Grand Prix', 15),
(258, 4, 'Belgian Grand Prix', 6),
(259, 17, 'Belgian Grand Prix', 0),
(260, 19, 'Belgian Grand Prix', 0),
(261, 10, 'Italian Grand Prix', 4),
(262, 2, 'Italian Grand Prix', 3),
(263, 6, 'Italian Grand Prix', 1),
(264, 15, 'Italian Grand Prix', 7),
(265, 7, 'Italian Grand Prix', 8),
(266, 1, 'Italian Grand Prix', 6),
(267, 13, 'Italian Grand Prix', 9),
(268, 19, 'Italian Grand Prix', 5),
(269, 4, 'Italian Grand Prix', 15),
(270, 12, 'Italian Grand Prix', 11),
(271, 3, 'Italian Grand Prix', 10),
(272, 18, 'Italian Grand Prix', 12),
(273, 20, 'Italian Grand Prix', 2),
(274, 16, 'Italian Grand Prix', 16),
(275, 14, 'Italian Grand Prix', 13),
(276, 5, 'Italian Grand Prix', 17),
(277, 8, 'Italian Grand Prix', 18),
(278, 11, 'Italian Grand Prix', 14),
(279, 9, 'Italian Grand Prix', 20),
(280, 17, 'Italian Grand Prix', 19),
(281, 20, 'Singapore Grand Prix', 5),
(282, 10, 'Singapore Grand Prix', 4),
(283, 19, 'Singapore Grand Prix', 8),
(284, 6, 'Singapore Grand Prix', 7),
(285, 2, 'Singapore Grand Prix', 2),
(286, 1, 'Singapore Grand Prix', 9),
(287, 12, 'Singapore Grand Prix', 11),
(288, 3, 'Singapore Grand Prix', 13),
(289, 7, 'Singapore Grand Prix', 12),
(290, 4, 'Singapore Grand Prix', 10),
(291, 5, 'Singapore Grand Prix', 16),
(292, 17, 'Singapore Grand Prix', 15),
(293, 18, 'Singapore Grand Prix', 6),
(294, 15, 'Singapore Grand Prix', 14),
(295, 9, 'Singapore Grand Prix', 3),
(296, 8, 'Singapore Grand Prix', 18),
(297, 11, 'Singapore Grand Prix', 1),
(298, 14, 'Singapore Grand Prix', 19),
(299, 13, 'Singapore Grand Prix', 17),
(300, 16, 'Singapore Grand Prix', 20),
(301, 6, 'Russian Grand Prix', 1),
(302, 2, 'Russian Grand Prix', 3),
(303, 10, 'Russian Grand Prix', 2),
(304, 19, 'Russian Grand Prix', 5),
(305, 1, 'Russian Grand Prix', 4),
(306, 17, 'Russian Grand Prix', 6),
(307, 13, 'Russian Grand Prix', 7),
(308, 12, 'Russian Grand Prix', 11),
(309, 11, 'Russian Grand Prix', 8),
(310, 7, 'Russian Grand Prix', 12),
(311, 18, 'Russian Grand Prix', 15),
(312, 9, 'Russian Grand Prix', 9),
(313, 14, 'Russian Grand Prix', 13),
(314, 3, 'Russian Grand Prix', 14),
(315, 4, 'Russian Grand Prix', 16),
(316, 8, 'Russian Grand Prix', 19),
(317, 16, 'Russian Grand Prix', 18),
(318, 20, 'Russian Grand Prix', 10),
(319, 15, 'Russian Grand Prix', 17),
(320, 5, 'Russian Grand Prix', 0),
(321, 2, 'Japanese Grand Prix', 4),
(322, 20, 'Japanese Grand Prix', 5),
(323, 6, 'Japanese Grand Prix', 1),
(324, 1, 'Japanese Grand Prix', 8),
(325, 17, 'Japanese Grand Prix', 12),
(326, 10, 'Japanese Grand Prix', 11),
(327, 3, 'Japanese Grand Prix', 2),
(328, 13, 'Japanese Grand Prix', 17),
(329, 18, 'Japanese Grand Prix', 7),
(330, 9, 'Japanese Grand Prix', 15),
(331, 12, 'Japanese Grand Prix', 14),
(332, 14, 'Japanese Grand Prix', 10),
(333, 5, 'Japanese Grand Prix', 13),
(334, 4, 'Japanese Grand Prix', 9),
(335, 11, 'Japanese Grand Prix', 16),
(336, 16, 'Japanese Grand Prix', 6),
(337, 8, 'Japanese Grand Prix', 3),
(338, 19, 'Japanese Grand Prix', 18),
(339, 15, 'Japanese Grand Prix', 19),
(340, 7, 'Japanese Grand Prix', 20),
(341, 6, 'Mexican Grand Prix', 4),
(342, 20, 'Mexican Grand Prix', 3),
(343, 2, 'Mexican Grand Prix', 5),
(344, 10, 'Mexican Grand Prix', 1),
(345, 1, 'Mexican Grand Prix', 2),
(346, 19, 'Mexican Grand Prix', 11),
(347, 13, 'Mexican Grand Prix', 12),
(348, 15, 'Mexican Grand Prix', 9),
(349, 3, 'Mexican Grand Prix', 6),
(350, 7, 'Mexican Grand Prix', 14),
(351, 9, 'Mexican Grand Prix', 7),
(352, 18, 'Mexican Grand Prix', 15),
(353, 17, 'Mexican Grand Prix', 10),
(354, 4, 'Mexican Grand Prix', 16),
(355, 11, 'Mexican Grand Prix', 20),
(356, 16, 'Mexican Grand Prix', 17),
(357, 5, 'Mexican Grand Prix', 18),
(358, 8, 'Mexican Grand Prix', 13),
(359, 14, 'Mexican Grand Prix', 8),
(360, 12, 'Mexican Grand Prix', 19),
(361, 2, 'United States Grand Prix', 2),
(362, 6, 'United States Grand Prix', 7),
(363, 19, 'United States Grand Prix', 5),
(364, 10, 'United States Grand Prix', 1),
(365, 1, 'United States Grand Prix', 3),
(366, 15, 'United States Grand Prix', 14),
(367, 12, 'United States Grand Prix', 4),
(368, 17, 'United States Grand Prix', 15),
(369, 7, 'United States Grand Prix', 6),
(370, 13, 'United States Grand Prix', 11),
(371, 14, 'United States Grand Prix', 9),
(372, 9, 'United States Grand Prix', 8),
(373, 18, 'United States Grand Prix', 13),
(374, 4, 'United States Grand Prix', 10),
(375, 5, 'United States Grand Prix', 18),
(376, 3, 'United States Grand Prix', 16),
(377, 16, 'United States Grand Prix', 17),
(378, 11, 'United States Grand Prix', 12),
(379, 8, 'United States Grand Prix', 20),
(380, 20, 'United States Grand Prix', 19),
(381, 19, 'Brazilian Grand Prix', 2),
(382, 3, 'Brazilian Grand Prix', 9),
(383, 17, 'Brazilian Grand Prix', 16),
(384, 14, 'Brazilian Grand Prix', 15),
(385, 4, 'Brazilian Grand Prix', 14),
(386, 15, 'Brazilian Grand Prix', 11),
(387, 6, 'Brazilian Grand Prix', 3),
(388, 12, 'Brazilian Grand Prix', 7),
(389, 13, 'Brazilian Grand Prix', 12),
(390, 9, 'Brazilian Grand Prix', 8),
(391, 11, 'Brazilian Grand Prix', 17),
(392, 16, 'Brazilian Grand Prix', 19),
(393, 5, 'Brazilian Grand Prix', 18),
(394, 1, 'Brazilian Grand Prix', 4),
(395, 7, 'Brazilian Grand Prix', 13),
(396, 8, 'Brazilian Grand Prix', 20),
(397, 20, 'Brazilian Grand Prix', 5),
(398, 10, 'Brazilian Grand Prix', 6),
(399, 18, 'Brazilian Grand Prix', 10),
(400, 2, 'Brazilian Grand Prix', 1),
(401, 6, 'Abu Dhabi Grand Prix', 1),
(402, 19, 'Abu Dhabi Grand Prix', 5),
(403, 10, 'Abu Dhabi Grand Prix', 4),
(404, 2, 'Abu Dhabi Grand Prix', 2),
(405, 20, 'Abu Dhabi Grand Prix', 3),
(406, 1, 'Abu Dhabi Grand Prix', 8),
(407, 13, 'Abu Dhabi Grand Prix', 11),
(408, 12, 'Abu Dhabi Grand Prix', 12),
(409, 9, 'Abu Dhabi Grand Prix', 9),
(410, 17, 'Abu Dhabi Grand Prix', 7),
(411, 15, 'Abu Dhabi Grand Prix', 6),
(412, 7, 'Abu Dhabi Grand Prix', 16),
(413, 14, 'Abu Dhabi Grand Prix', 14),
(414, 11, 'Abu Dhabi Grand Prix', 19),
(415, 5, 'Abu Dhabi Grand Prix', 18),
(416, 4, 'Abu Dhabi Grand Prix', 15),
(417, 16, 'Abu Dhabi Grand Prix', 13),
(418, 3, 'Abu Dhabi Grand Prix', 10),
(419, 8, 'Abu Dhabi Grand Prix', 20),
(420, 18, 'Abu Dhabi Grand Prix', 17);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `pilotak`
--

CREATE TABLE `pilotak` (
  `id` int(11) NOT NULL,
  `vezeteknev` varchar(30) NOT NULL,
  `keresztnev` varchar(30) NOT NULL,
  `szuletesidatum` date NOT NULL,
  `csapatnev` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `pilotak`
--

INSERT INTO `pilotak` (`id`, `vezeteknev`, `keresztnev`, `szuletesidatum`, `csapatnev`, `foto`) VALUES
(1, 'Albon', 'Alexander', '1996-03-23', 'Red Bull & Toro Rosso', 'Alex.jpg'),
(2, 'Bottas', 'Valtteri', '1989-08-28', 'Mercedes', 'Valtteri.jpg'),
(3, 'Gasly', 'Pierre', '1996-02-07', 'Red Bull & Toro Rosso', 'Pierre.jpg'),
(4, 'Giovinazzi', 'Antonio', '1993-12-14', 'Alfa Romeo', 'Giovinazzi.jpg'),
(5, 'Grosjean', 'Romain', '1986-04-17', 'Haas F1 Team', 'Romain.jpg'),
(6, 'Hamilton', 'Lewis', '1985-01-07', 'Mercedes', 'Hamilton.jpg'),
(7, 'Hülkenberg', 'Nico', '1987-08-19', 'Renault', 'Nico.jpg'),
(8, 'Kubica', 'Robert', '1984-12-07', 'Williams', 'Kubica.jpg'),
(9, 'Kvyat', 'Daniil', '1994-04-26', 'Toro Rosso', 'Kvyat.jpg'),
(10, 'Leclerc', 'Charles', '1997-10-16', 'Ferrari', 'Charles-Leclerc.jpg'),
(11, 'Magnussen', 'Kevin', '1992-10-05', 'Haas F1 Team', 'Magnussen.jpg'),
(12, 'Norris', 'Lando', '1999-11-13', 'McLaren', 'Lando.jpg'),
(13, 'Pérez', 'Sergio', '1990-01-26', 'Racing Point', 'Pérez.jpg'),
(14, 'Räikkönen', 'Kimi', '1979-10-17', 'Alfa Romeo', 'Kimi.jpg'),
(15, 'Ricciardo', 'Daniel', '1989-07-01', 'Renault', 'Daniel.jpg'),
(16, 'Russell', 'George', '1998-02-15', 'Williams', 'George_Russell.jpg'),
(17, 'Sainz', 'Carlos', '1994-09-01', 'McLaren', 'Carlos.jpg'),
(18, 'Stroll', 'Lance', '1998-10-29', 'Racing Point', 'Stroll.jpg'),
(19, 'Verstappen', 'Max', '1997-09-30', 'Red Bull', 'Max.jpg'),
(20, 'Vettel', 'Sebastian', '1987-07-03', 'Ferrari', 'Sebastian_Vettel.jpg');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `eredmenyek`
--
ALTER TABLE `eredmenyek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_futamok_pilotaid` (`pilotaid`);

--
-- A tábla indexei `pilotak`
--
ALTER TABLE `pilotak`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `eredmenyek`
--
ALTER TABLE `eredmenyek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=421;

--
-- AUTO_INCREMENT a táblához `pilotak`
--
ALTER TABLE `pilotak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `eredmenyek`
--
ALTER TABLE `eredmenyek`
  ADD CONSTRAINT `fk_futamok_pilotaid` FOREIGN KEY (`pilotaid`) REFERENCES `pilotak` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
