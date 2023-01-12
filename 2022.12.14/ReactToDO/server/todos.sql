-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Jan 10. 12:53
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `todo`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `todos`
--

CREATE TABLE `todos` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `description` varchar(250) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `todos`
--

INSERT INTO `todos` (`id`, `name`, `description`, `timestamp`, `status`) VALUES
(168, 'kenyér', NULL, '2022-12-12 19:31:49', 0),
(169, 'víz', NULL, '2022-12-12 19:31:54', 0),
(170, 'benzin', NULL, '2022-12-12 19:32:06', 0),
(171, 'fodrászat', NULL, '2022-12-12 19:32:12', 1),
(227, 'auto', NULL, '2023-01-08 12:22:49', 0);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `todos`
--
ALTER TABLE `todos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
