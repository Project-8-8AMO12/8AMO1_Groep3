DROP DATABASE IF EXISTS imkleiden;
CREATE DATABASE imkleiden;
USE imkleiden;

--
-- Tabelstructuur voor tabel manager_gegevens
--
CREATE TABLE manager_gegevens (
  userid int(11) NOT NULL,
  naam  varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  wachtwoord varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  email_adress varchar(22) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel manager_gegevens
--
INSERT INTO manager_gegevens (userid, naam, wachtwoord, email_adress) VALUES
(1, 'Eloy', 'qwerty123', 'el.maddamin@gmail.com');

--
-- Tabelstructuur voor tabel admin_gegevens
--
CREATE TABLE admin_gegevens (
  userid int(11) NOT NULL,
  naam  varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  wachtwoord varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  email_adress varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  toegang boolean
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel admin_gegevens
--
INSERT INTO admin_gegevens (userid, naam, wachtwoord, email_adress, toegang) VALUES
(1, 'Sander', 'pander123', 'sander.pander@gmail.com', true);

--
-- Tabelstructuur voor tabellen van alle pagina's
--

--
-- Tabelstructuur voor tabel cursussen
--
CREATE TABLE cursussen (
  cursusnaam  varchar(22) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel cursussen
--

--
-- Tabelstructuur voor tabel vereniging
--

--
-- Gegevens worden geëxporteerd voor tabel vereniging
--

--
-- Tabelstructuur voor tabel zwerm
--
CREATE TABLE zwerm (
  zwermnaam  varchar(22) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel zwerm
--

--
-- Tabelstructuur voor tabel lidworden
--
CREATE TABLE lidworden (
  lidworden  varchar(22) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel lidworden
--


--
-- Tabelstructuur voor tabel activiteiten
--
CREATE TABLE activiteiten (
  activiteitnaam  varchar(22) CHARACTER SET utf8 DEFAULT NULL,
  beschrijving varchar(1022) CHARACTER SET utf8 DEFAULT NULL,
  plaats varchar(22) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel activiteiten
--
INSERT INTO activiteiten (activiteitnaam, beschrijving, plaats) VALUES
('Koninginneteelt', 'Het imkeren in Nederland en meer specifiek in de stad vraagt om een type bij dat zachtaardig is: je wilt geen ruzie met de buren omdat ze last hebben van je bijen. We hebben een werkgroep die aan koninginnenteelt doet en ieder jaar naar Ameland gaat. We komen bij elkaar voor de start van de teelt en bespreken de aanpak van het teeltseizoen. We helpen elkaar met kennis, en als er iets fout gaat helpen we om toch moeren te kunnen zenden naar het bevruchtingsstation. Wij gebruiken Buckfast-moeren als startpunt, waar we larven en eitjes van verzamelen om verder te telen. De moeren zijn allen P-moeren, dus bevrucht door zuivere Buckfast darren.
Ieder jaar is het weer een uitdaging om mooie moeren te kweken, het enthousiasme is groot en we leren er iedere keer veel van.
De kosten die hiermee gemoeid zijn worden omgeslagen over het aantal moeren waarmee men wil deelnemen en bedragen rond de 25 euro per moer. Je zorgt wel voor eigen kastjes om naar Ameland te gaan.', 
'Ameland');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel manager_gegevens
--
ALTER TABLE manager_gegevens
  ADD PRIMARY KEY (`userid`);

--
-- Indexen voor tabel admin_gegevens
--
ALTER TABLE admin_gegevens
  ADD PRIMARY KEY (`userid`);

--
-- Indexen voor tabel admin_gegevens
--
ALTER TABLE activiteiten
  ADD PRIMARY KEY (`activiteitnaam`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel manager_gegevens
--
ALTER TABLE manager_gegevens
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2535;

--
-- AUTO_INCREMENT voor een tabel admin_gegevens
--
ALTER TABLE admin_gegevens
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2535;
