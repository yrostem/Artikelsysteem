-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 jun 2018 om 11:15
-- Serverversie: 10.1.32-MariaDB
-- PHP-versie: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dtt`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `article_title` varchar(65) NOT NULL,
  `article_summary` text NOT NULL,
  `article_text` varchar(550) NOT NULL,
  `creation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `article_title`, `article_summary`, `article_text`, `creation_date`) VALUES
(22, 'Drie Nederlanders opgepakt na DNA-match op wapens van IS ', 'De politie heeft maandag drie mannen aangehouden wiens DNA-sporen zijn aangetroffen op vuurwapens van Islamitische Staat (IS). De wapens zijn gevonden in een voorstad van Parijs, twee dagen na de aanslagen in Brussel. ', 'Dit heeft het Openbaar Ministerie (OM) dinsdag bekendgemaakt. Het gaat om een 26-jarige man uit Groningen, een 30-jarige man zonder vaste woon- of verblijfplaats en een 53-jarige man die vastzit in een gevangenis in Zaanstad. Een vierde man, die in Sassenheim gedetineerd is vanwege een geweldsdelict, wordt ook verdacht. De 22-jarige is nog niet opgepakt. De vier verdachten worden deze week nog door de politie verhoord, aldus justitie. &#34;Hun sporen bleken op de binnenkant van enkele vuurwapens en ook op een aangetroffen sporttas te zijn a    ', '2018-06-19'),
(24, 'ABN AMRO ziet winstgevendheid bouwsector achterblijven ', 'De winstgevendheid in de bouw blijft achter ondanks de recordomzet in de sector. Bouwbedrijven hebben vooral te kampen met stijgende kosten voor personeel en materialen, waardoor de winstmarges laag blijven. ', '                                                                                                                Volgens ABN AMRO is de bouw de afgelopen jaren structureel sterker gegroeid dan de algemene economie, schrijft de bank in een dinsdag verschenen rapport over de branche. De omzet ligt bijna op het niveau van het recordjaar 2009.De orderportefeuilles van bouw- en installatiebedrijven breken recordniveaus. Met name kleinere bouwondernemingen doen het de afgelopen jaren erg goed.De bank stelt dat bouwbedrijven hun winstgevendheid kunnen ', '2018-06-19'),
(25, 'Russische bondscoach: \'Klaar om Salah af te stoppen en gaan we do', 'De Russische bondscoach Stanislav Cherchesov heeft een tactisch plan bedacht om Mohamed Salah af te stoppen. Hij denkt dat zijn spelers daarmee in staat zijn om de Egyptische ster dinsdag in de tweede groepswedstrijd op het WK aan banden te leggen.', '\"Ik geloof in mijn spelers. Wij zijn klaar om Salah af te stoppen en dat gaan we doen ook. Hoe? Dat ziet iedereen dinsdag wel\", zei Cherchesov maandag op zijn persconferentie in Sint-Petersburg.\r\n\r\nHet vertrouwen bij Rusland is groot na de royale zege van vorige week donderdag op Saoedi-Arabië in de openingswedstrijd in Moskou (5-0).\r\n\r\nDe verwachtingen rond de nationale ploeg waren aanvankelijk laag in het gastland, maar na de vliegende start op het WK hebben de Russen volop kans op een plek in de volgende ronde.\r\n\r\nTegenstander Egypte verloor', '2018-06-19'),
(26, 'Oudste Sumatraanse orang-oetan (62) ter wereld overleden ', ' De oudste Sumatraanse orang-oetan ter wereld is op 62-jarige leeftijd in de dierentuin van de Australische stad Perth overleden, melden Australische media dinsdag.', 'Orang-oetan Puan werd geëuthanaseerd, omdat ouderdomskwalen haar leven ondraaglijk hadden gemaakt.\r\n\r\nApenverzorger Holly Thompson zei dat het een moeilijke, maar juiste beslissing was om de oude aap een eerbiedig einde te geven.\r\n\r\nPuan leefde sinds 1968 in de dierentuin. Ze is officieel in Guinness Book of Records opgenomen als de oudste van haar soort. Volgens het Wereld Natuur Fonds (WNF) worden Sumatraanse orang-oetans normaal gesproken zo\'n 45 jaar.\r\n\r\nJungle\r\nAlgemeen wordt aangenomen dat Puan in 1956 is geboren in de jungle van het Indo', '2018-06-19');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `active` char(1) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `created_at`, `active`) VALUES
(1, 'yad', 'haha', '2018-06-06 10:36:33', 'Y');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
