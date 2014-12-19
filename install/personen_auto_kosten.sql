SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `vehicle_runningcosts`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personen_auto_kosten`
--

DROP TABLE IF EXISTS `personen_auto_kosten`;
CREATE TABLE IF NOT EXISTS `personen_auto_kosten` (
  `id`                 INT(11)     NOT NULL,
  `provincie_naam`     VARCHAR(30) NOT NULL,
  `gewichts_klasse`    TINYINT(4)  NOT NULL,
  `benzine_prijs`      FLOAT       NOT NULL,
  `diesel_prijs`       FLOAT       NOT NULL,
  `lpg3_aardgas_prijs` FLOAT       NOT NULL,
  `lpg_overige_prijs`  FLOAT       NOT NULL
)
  ENGINE =InnoDB
  DEFAULT CHARSET =latin1
  AUTO_INCREMENT =1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `personen_auto_kosten`
--
ALTER TABLE `personen_auto_kosten`
ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `personen_auto_kosten`
--
ALTER TABLE `personen_auto_kosten`
MODIFY `id` INT(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
