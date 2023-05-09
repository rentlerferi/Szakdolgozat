-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Máj 06. 10:26
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
  `id` varchar(9) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `name` varchar(50) NOT NULL,
  `summary` varchar(500) DEFAULT NULL,
  `place` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- A tábla adatainak kiíratása `classes`
--

INSERT INTO `classes` (`id`, `start`, `end`, `name`, `summary`, `place`) VALUES
('CZ7V5S0', '2023-04-10 14:00:00', '2023-04-10 16:00:00', 'Numerikus módszerek (VEMKMA1144C) - 01 - Dr. Mihál', '', 'A.AL.A01 (A.AL.A01)'),
('CZ7V5S1', '2023-04-17 14:00:00', '2023-04-17 16:00:00', 'Numerikus módszerek (VEMKMA1144C) - 01 - Dr. Mihál', '', 'A.AL.A01 (A.AL.A01)'),
('CZ7V5S10', '2023-04-10 11:00:00', '2023-04-10 12:00:00', 'Mesterséges intelligencia alapjai (VEMISA3242M) - ', '', 'A.AL.A02 (A.AL.A02)'),
('CZ7V5S11', '2023-04-17 11:00:00', '2023-04-17 12:00:00', 'Mesterséges intelligencia alapjai (VEMISA3242M) - ', '', 'A.AL.A02 (A.AL.A02)'),
('CZ7V5S12', '2023-04-24 11:00:00', '2023-04-24 12:00:00', 'Mesterséges intelligencia alapjai (VEMISA3242M) - ', '', 'A.AL.A02 (A.AL.A02)'),
('CZ7V5S13', '2023-05-01 11:00:00', '2023-05-01 12:00:00', 'Mesterséges intelligencia alapjai (VEMISA3242M) - ', '', 'A.AL.A02 (A.AL.A02)'),
('CZ7V5S14', '2023-04-10 10:00:00', '2023-04-10 11:00:00', 'Mesterséges intelligencia alapjai (VEMISA3242M) - ', '', 'A.AL.A02 (A.AL.A02)'),
('CZ7V5S15', '2023-04-17 10:00:00', '2023-04-17 11:00:00', 'Mesterséges intelligencia alapjai (VEMISA3242M) - ', '', 'A.AL.A02 (A.AL.A02)'),
('CZ7V5S16', '2023-04-24 10:00:00', '2023-04-24 11:00:00', 'Mesterséges intelligencia alapjai (VEMISA3242M) - ', '', 'A.AL.A02 (A.AL.A02)'),
('CZ7V5S17', '2023-05-01 10:00:00', '2023-05-01 11:00:00', 'Mesterséges intelligencia alapjai (VEMISA3242M) - ', '', 'A.AL.A02 (A.AL.A02)'),
('CZ7V5S2', '2023-04-24 14:00:00', '2023-04-24 16:00:00', 'Numerikus módszerek (VEMKMA1144C) - 01 - Dr. Mihál', '', 'A.AL.A01 (A.AL.A01)'),
('CZ7V5S3', '2023-05-01 14:00:00', '2023-05-01 16:00:00', 'Numerikus módszerek (VEMKMA1144C) - 01 - Dr. Mihál', '', 'A.AL.A01 (A.AL.A01)'),
('CZ7V5S4', '2023-04-10 16:00:00', '2023-04-10 17:00:00', 'Numerikus módszerek (VEMKMA1144C) - 02 - Dr. Mihál', '', 'A.AL.A01 (A.AL.A01)'),
('CZ7V5S5', '2023-04-17 16:00:00', '2023-04-17 17:00:00', 'Numerikus módszerek (VEMKMA1144C) - 02 - Dr. Mihál', '', 'A.AL.A01 (A.AL.A01)'),
('CZ7V5S6', '2023-04-24 16:00:00', '2023-04-24 17:00:00', 'Numerikus módszerek (VEMKMA1144C) - 02 - Dr. Mihál', '', 'A.AL.A01 (A.AL.A01)'),
('CZ7V5S7', '2023-05-01 16:00:00', '2023-05-01 17:00:00', 'Numerikus módszerek (VEMKMA1144C) - 02 - Dr. Mihál', '', 'A.AL.A01 (A.AL.A01)'),
('CZ7V5S8', '2023-04-10 12:00:00', '2023-04-10 14:00:00', 'Numerikus módszerek (VEMKMA1144C) - 05 - Pozsgai T', '', 'I.fsz.I3 (I.fsz.I3)'),
('CZ7V5S9', '2023-04-24 12:00:00', '2023-04-24 14:00:00', 'Numerikus módszerek (VEMKMA1144C) - 05 - Pozsgai T', '', 'I.fsz.I3 (I.fsz.I3)');

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
('ASDFGH', 'Béla', 'Feri', 'lepke@gmail.com', 'e43771239388e610aeba32583816c949', '2023-02-11 16:56:45'),
('CVBNMG', 'Változtat', 'Balázs', 'pont@gmail.com', 'e4d628c920d30787e192cb4ad64b1e44', '2023-02-14 12:35:18'),
('CZ7V5S', 'Rentler', 'Ferenc', 'rentler.feri@gmail.com', '3ce4860ca304d9eeef7218008a0d8926', '2023-02-14 13:42:55'),
('GHJKLB', 'Balázs', 'Kiss', 'kissbalazs@gmail.com', 'da65892da5e5bba0caa7b891d495efb1', '2023-05-04 19:08:24'),
('POIUZT', 'Regi', 'Balázs', 'regi@gmail.com', 'da65892da5e5bba0caa7b891d495efb1', '2023-04-23 08:42:33'),
('QWERTZ', 'Kalap', 'Teszt', 'teszt2@gmail.com', '3cc42e0acb71b93b1cdebdc9ddf76278', '2023-04-14 11:49:45');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `taken_classes`
--

CREATE TABLE `taken_classes` (
  `id` int(11) NOT NULL,
  `neptun` varchar(6) NOT NULL,
  `classes_id` varchar(9) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- A tábla adatainak kiíratása `taken_classes`
--

INSERT INTO `taken_classes` (`id`, `neptun`, `classes_id`, `timestamp`) VALUES
(667, 'CZ7V5S', 'CZ7V5S0', '2023-05-01 13:02:11'),
(668, 'CZ7V5S', 'CZ7V5S1', '2023-05-01 13:02:11'),
(669, 'CZ7V5S', 'CZ7V5S2', '2023-05-01 13:02:11'),
(670, 'CZ7V5S', 'CZ7V5S3', '2023-05-01 13:02:11'),
(671, 'CZ7V5S', 'CZ7V5S4', '2023-05-01 13:02:11'),
(672, 'CZ7V5S', 'CZ7V5S5', '2023-05-01 13:02:11'),
(673, 'CZ7V5S', 'CZ7V5S6', '2023-05-01 13:02:11'),
(674, 'CZ7V5S', 'CZ7V5S7', '2023-05-01 13:02:11'),
(675, 'CZ7V5S', 'CZ7V5S8', '2023-05-01 13:02:11'),
(676, 'CZ7V5S', 'CZ7V5S9', '2023-05-01 13:02:11'),
(677, 'CZ7V5S', 'CZ7V5S10', '2023-05-01 13:02:11'),
(678, 'CZ7V5S', 'CZ7V5S11', '2023-05-01 13:02:11'),
(679, 'CZ7V5S', 'CZ7V5S12', '2023-05-01 13:02:11'),
(680, 'CZ7V5S', 'CZ7V5S13', '2023-05-01 13:02:11'),
(681, 'CZ7V5S', 'CZ7V5S14', '2023-05-01 13:02:11'),
(682, 'CZ7V5S', 'CZ7V5S15', '2023-05-01 13:02:11'),
(683, 'CZ7V5S', 'CZ7V5S16', '2023-05-01 13:02:11'),
(684, 'CZ7V5S', 'CZ7V5S17', '2023-05-01 13:02:11');

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
-- AUTO_INCREMENT a táblához `taken_classes`
--
ALTER TABLE `taken_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=685;

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
