-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 11 jun 2020 om 10:18
-- Serverversie: 10.4.10-MariaDB
-- PHP-versie: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imkleiden`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `activiteiten`
--

CREATE TABLE `activiteiten` (
  `activiteitnaam` varchar(22) CHARACTER SET utf8 NOT NULL,
  `beschrijving` varchar(1022) CHARACTER SET utf8 DEFAULT NULL,
  `plaats` varchar(22) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `activiteiten`
--

INSERT INTO `activiteiten` (`activiteitnaam`, `beschrijving`, `plaats`) VALUES
('Koninginneteelt', 'Het imkeren in Nederland en meer specifiek in de stad vraagt om een type bij dat zachtaardig is: je wilt geen ruzie met de buren omdat ze last hebben van je bijen. We hebben een werkgroep die aan koninginnenteelt doet en ieder jaar naar Ameland gaat. We komen bij elkaar voor de start van de teelt en bespreken de aanpak van het teeltseizoen. We helpen elkaar met kennis, en als er iets fout gaat helpen we om toch moeren te kunnen zenden naar het bevruchtingsstation. Wij gebruiken Buckfast-moeren als startpunt, waar we larven en eitjes van verzamelen om verder te telen. De moeren zijn allen P-moeren, dus bevrucht door zuivere Buckfast darren.\nIeder jaar is het weer een uitdaging om mooie moeren te kweken, het enthousiasme is groot en we leren er iedere keer veel van.\nDe kosten die hiermee gemoeid zijn worden omgeslagen over het aantal moeren waarmee men wil deelnemen en bedragen rond de 25 euro per moer. Je zorgt wel voor eigen kastjes om naar Ameland te gaan.', 'Ameland');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `admin_gegevens`
--

CREATE TABLE `admin_gegevens` (
  `userid` int(11) NOT NULL,
  `naam` varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  `wachtwoord` varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  `email_adress` varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  `toegang` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `admin_gegevens`
--

INSERT INTO `admin_gegevens` (`userid`, `naam`, `wachtwoord`, `email_adress`, `toegang`) VALUES
(1, 'Sander', 'pander123', 'sander.pander@gmail.co', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `cursussen`
--

CREATE TABLE `cursussen` (
  `cursusnaam` varchar(22) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lidworden`
--

CREATE TABLE `lidworden` (
  `lidworden` varchar(22) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `manager_gegevens`
--

CREATE TABLE `manager_gegevens` (
  `userid` int(11) NOT NULL,
  `naam` varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  `wachtwoord` varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  `email_adress` varchar(22) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `manager_gegevens`
--

INSERT INTO `manager_gegevens` (`userid`, `naam`, `wachtwoord`, `email_adress`) VALUES
(1, 'Eloy', 'qwerty123', 'el.maddamin@gmail.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `vereniging`
--

CREATE TABLE `vereniging` (
  `verenigingnaam` varchar(22) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `zwerm`
--

CREATE TABLE `zwerm` (
  `zwermnaam` varchar(22) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `activiteiten`
--
ALTER TABLE `activiteiten`
  ADD PRIMARY KEY (`activiteitnaam`);

--
-- Indexen voor tabel `admin_gegevens`
--
ALTER TABLE `admin_gegevens`
  ADD PRIMARY KEY (`userid`);

--
-- Indexen voor tabel `manager_gegevens`
--
ALTER TABLE `manager_gegevens`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `admin_gegevens`
--
ALTER TABLE `admin_gegevens`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2535;

--
-- AUTO_INCREMENT voor een tabel `manager_gegevens`
--
ALTER TABLE `manager_gegevens`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2535;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
