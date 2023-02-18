-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Feb 17. 12:59
-- Kiszolgáló verziója: 10.4.27-MariaDB
-- PHP verzió: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `uniteduniversities`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `summary` varchar(150) DEFAULT NULL,
  `place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `registered_users`
--

CREATE TABLE `registered_users` (
  `neptun` varchar(6) NOT NULL,
  `firstName` varchar(35) NOT NULL,
  `lastName` varchar(35) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- A tábla adatainak kiíratása `registered_users`
--

INSERT INTO `registered_users` (`neptun`, `firstName`, `lastName`, `email`, `password`, `timestamp`) VALUES
('1HB23A', 'Próba', 'Tamás', 'proba@gmail.com', 'e4d628c920d30787e192cb4ad64b1e44', '2023-02-14 13:18:05'),
('AAAAAA', 'Teszt', 'Bejelentkezés', 'teszt@gmail.com', '3ce4860ca304d9eeef7218008a0d8926', '2023-02-14 13:51:57'),
('ASDFGH', 'Béla', 'Feri', 'lepke@gmail.com', 'e43771239388e610aeba32583816c949', '2023-02-11 16:56:45'),
('CVBNMG', 'Nagy', 'Teszt', 'valami@gmail.com', 'e4d628c920d30787e192cb4ad64b1e44', '2023-02-14 12:35:18'),
('CZ7V5S', 'Rentler', 'Ferenc', 'rentler.feri@gmail.com', '3ce4860ca304d9eeef7218008a0d8926', '2023-02-14 13:42:55');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `taken_classes`
--

CREATE TABLE `taken_classes` (
  `id` int(11) NOT NULL,
  `neptun` varchar(6) NOT NULL,
  `classes_id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- A tábla indexei `registered_users`
--
ALTER TABLE `registered_users`
  ADD PRIMARY KEY (`neptun`),
  ADD KEY `neptun` (`neptun`,`password`);

--
-- A tábla indexei `taken_classes`
--
ALTER TABLE `taken_classes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `neptun` (`neptun`),
  ADD KEY `classes_id` (`classes_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `taken_classes`
--
ALTER TABLE `taken_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `taken_classes`
--
ALTER TABLE `taken_classes`
  ADD CONSTRAINT `taken_classes_ibfk_1` FOREIGN KEY (`classes_id`) REFERENCES `classes` (`id`),
  ADD CONSTRAINT `taken_classes_ibfk_2` FOREIGN KEY (`neptun`) REFERENCES `registered_users` (`neptun`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
