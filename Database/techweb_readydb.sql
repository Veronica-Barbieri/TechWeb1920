-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 06, 2019 alle 15:54
-- Versione del server: 5.7.17
-- Versione PHP: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techweb`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `carta`
--

CREATE TABLE `carta` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Colore` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Costo_verde` tinyint(1) UNSIGNED DEFAULT NULL,
  `Costo_rosso` tinyint(1) UNSIGNED DEFAULT NULL,
  `Costo_blu` tinyint(1) UNSIGNED DEFAULT NULL,
  `Costo_bianco` tinyint(1) UNSIGNED DEFAULT NULL,
  `Costo_nero` tinyint(1) UNSIGNED DEFAULT NULL,
  `Costo_nocolor` tinyint(1) UNSIGNED DEFAULT NULL,
  `Tipo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descrizione` text COLLATE utf8mb4_unicode_ci,
  `Flavour_text` tinytext COLLATE utf8mb4_unicode_ci,
  `Espansione` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Rarita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Artista` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DEF` tinyint(2) UNSIGNED DEFAULT NULL,
  `ATK` tinyint(2) UNSIGNED DEFAULT NULL,
  `Img_path` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `carta`
--

INSERT INTO `carta` (`Id`, `Nome`, `Colore`, `Costo_verde`, `Costo_rosso`, `Costo_blu`, `Costo_bianco`, `Costo_nero`, `Costo_nocolor`, `Tipo`, `Descrizione`, `Flavour_text`, `Espansione`, `Rarita`, `Artista`, `DEF`, `ATK`, `Img_path`) VALUES
(1, 'Time Sieve', 'Blu', 0, 0, 1, 0, 1, 0, 'Artefatto', 'Sacrifice five artifacts: Take an extra turn\n  after this one.', '\"Prego di non essere mai considerata vecchia o inutile\" -- Sharuum Egemone', 'Alara Reborn', 'Rara', 'Franz', NULL, NULL, 'Resources/carta1.jpg'),
(2, 'Forest', 'Verde', NULL, NULL, NULL, NULL, NULL, NULL, 'Terra', NULL, NULL, 'Duel Decks', 'Terra', 'John Avon', NULL, NULL, 'Resources/carta4.jpeg'),
(3, 'Magmaw', 'Rosso', 0, 2, 0, 0, 0, 3, 'Creatura', 'Sacrifice a nonland permanent:\n  Magmaw deals 1 damage to any target.', '\"The purpose of existence is simple:\n  everything is fuel for the magmaw.\" —Jaji, magmaw worshipper', 'Rise of the Eldrazi', 'Rara', 'Karl Kopinski', 4, 4, 'Resources/carta5.jpeg'),
(4, 'Plant Elemental', 'Verde', 1, 0, 0, 0, 0, 1, 'Creatura', 'When Plant\n  Elemental enters the battlefield, sacrifice it unless you sacrifice a Forest.', NULL, 'Portal', 'Non comune', 'Ted Naifeh', 4, 3, 'Resources/carta6.jpeg'),
(5, 'Barren Moor', 'Nero', NULL, NULL, NULL, NULL, NULL, NULL, 'Terra', 'Barren Moor enters the\n  battlefield tapped.', 'Commander 2018', 'Archenemy', 'Comune', ' Heather Hudson', NULL, NULL, 'Resources/carta7.png'),
(6, 'Mind Raker', 'Nero', 0, 0, 0, 0, 1, 3, 'Creatura', 'Devoid (This card has\n  no color.) When Mind Raker enters the battlefield, you may put a card an\n  opponent owns from exile into that player\'s graveyard. If you do, each\n  opponent discards a card.', 'It consumes any dreams of victory.', 'Battle for\n  Zendika', 'Comune', 'Lius Lasahido', 3, 3, 'Resources/carta8.png'),
(7, 'Cabal Patriarch', 'Nero', 0, 0, 0, 0, 3, 3, 'Creatura', '(2+B) Sacrifice a\n  creature: Target creature gets -2/-2 until end of turn. (2+B) Exile a creature card\n  from your graveyard: Target creature gets -2/-2 until end of turn.', NULL, 'Odyssey', 'Rara', 'Mark Zug', 5, 5, 'Resources/carta9.jpeg'),
(8, 'Oriss, Samite Guardian', 'Blu', 0, 0, 2, 0, 1, 0, 'Creatura', 'Prevent\n  all damage that would be dealt to target creature this turn. Grandeur — Discard\n  another card named Oriss, Samite Guardian: Target player can\'t cast spells\n  this turn, and creatures that player controls can\'t attack this turn.', NULL, 'Future Sight', 'Rara', 'Michael Komarck', 3, 1, 'Resources/carta10.jpeg'),
(9, 'Island', 'Verde', NULL, NULL, NULL, NULL, NULL, NULL, 'Terra', NULL, NULL, ' Throne of\n  Eldrain', 'Terra', 'John Avon', NULL, NULL, 'Resources/carta11.png'),
(10, 'Swamp', 'Verde', NULL, NULL, NULL, NULL, NULL, NULL, 'Palude', NULL, NULL, ' Throne of\n  Eldrain', 'Terra', 'Paul Scott Canavan', NULL, NULL, 'Resources/carta12.png'),
(11, 'Battle Mastery', 'Bianco', 0, 0, 0, 1, 0, 2, 'Incantesimo', 'Enchant creature: Enchanted\n  creature has double strike. (It deals both first-strike and regular combat\n  damage.)', '\"There is elegance in all the Ojutai do—even their killing.\"—Kirada\n  , Silumgar enforcer', 'Battlebond', 'Non comune', 'Viktor Titov', NULL, NULL, 'Resources/carta13.png'),
(12, 'Cobra Trap', 'Verde', 2, 0, 0, 0, 0, 4, 'Istantanea', 'If a noncreature permanent under\n  your control was destroyed this turn by a spell or ability an opponent\n  controlled, you may pay Green rather than pay this spell\'s mana cost. Create\n  four 1/1 green Snake creature tokens.', NULL, ' Magic: The Gatherin', 'Non comune', 'Scott Chou', NULL, NULL, 'Resources/carta14.jpeg'),
(13, 'Aerial Caravan', 'Bianco', 0, 0, 2, 0, 0, 4, 'Creatura', 'Flying (1+2B): Exile\n  the top card of your library. Until end of turn, you may play that card.\n  (Reveal the card as you exile it.)', 'Successful delivery is not guaranteed.', 'Mercadian Masques', 'Rara', 'DiTerlizzi', 3, 4, 'Resources/carta15.jpeg'),
(14, 'Act of Aggression', 'Rosso', 0, 2, 0, 0, 0, 2, 'Istantanea', 'Gain control of target\n  creature an opponent controls until the end of turn. Untap that creature. It gains\n  haste until the end of the turn.', NULL, 'Commander 2015', 'Uncommon', 'Whit Brachna', NULL, NULL, 'Resources/carta16.jpg'),
(15, 'Abbey Griffin', 'Bianco', 0, 0, 0, 1, 0, 3, 'Creatura', 'Flying, vigilance', 'The darkness swarms with vampires and ghouls, but allies are not lacking. —\n   Mikaeus, the Lunarca', 'Innistrad', 'Common', 'Jaime Jones', 2, 2, 'Resources/carta1.jpg'),
(16, 'Alhammarret, High Arbiter', 'Blu', 0, 0, 2, 0, 0, 5, 'Creatura', 'Flying.\n  As Alhammarret, High Arbiter enters the battlefield, each opponent reveals their hand. You choose\n  the name of a nonland card revealed this way. Your opponents can \'t cast spells with the chosen name\n  (as long as this creature is on the battlefield).)', NULL, 'Magic Origins', 'Rare', 'Richard Wright', 5, 5, 'Resources/carta2.jpg'),
(17, 'Anowon, the Ruin Sage', 'Nero', 0, 0, 0, 0, 2, 3, 'Creatura', 'At the beginning of your upkeep, each player sacrifices a non-Vampire creature.', '\"Too many have\n  died looking for that map. And now here it is in the hands of the arrogant little girl Chandra Nalaar.\"', 'Commander 2017', 'Rare', 'Dan Scott', 4, 3, 'Resources/carta3.jpg'),
(18, 'Abundant Growth', 'Verde', 1, 0, 0, 0, 0, 0, 'Incantesimo', 'Enchant land\n  When Abundant Growth enters the battlefield, draw a card. Enchanted land has\n  Tap: Add one mana of any color.', NULL, 'Avacyn Restored', 'Common', 'Vincent Proce', NULL, NULL, 'Resources/carta17.jpg'),
(19, 'Acid Web Spider', 'Verde', 2, 0, 0, 0, 0, 3, 'Creatura', 'Reach. When Acid Web Spider enters\n  the battlefield, you may destroy target Equipment.', 'His canvas is an excellent source of molten\n  copper for the brave or the foolish.', 'Scars of Mirrodin', 'Uncommon', 'Austin Hsu', 3, 5, 'Resources/carta18.jpg'),
(20, 'Academy Drake', 'Blu', 0, 0, 1, 0, 0, 2, 'Creatura', 'Kicker 4 (You may pay an additional 4 as you\n  cast this spell). Flying. If Academy Drake was kicked, it enters the battlefield with two +1/+1 counters on it.', NULL, 'Dominaria', 'Common', 'Svetlin Velinov', 2, 2, 'Resources/carta19.jpg'),
(21, "Spirito Maledetto","nero",0,0,0,0,1,3,"Creatura","Intimidate (This creature can't be blocked except by artifact creatures and/or creatures that share a color with it.)","Molti hanno udito il rumore della sua armatura trascinata e il debole gorgoglio della sua voce. Ma solo le sue vittime ne incontrano lo sguardo di ghiaccio.","Set Base 2015","Comune","Kev Walker",3,2,"Resources/carta21.png"),
(22, "Agire d'Impulso","rosso",0,1,0,0,0,2,"Stregoneria","Exile the top three cards of your library. Until end of turn, you may play cards exiled this way. (If you cast a spell this way, you still pay its costs. You can play a land this way only if you have an available land play remaining.)","Non vuoi sapere cosa succede quando mi metto gli occhialoni.","Set Base 2015","Non comune","Ron Paul",NULL,NULL,"Resources/carta22.png"),
(23, "Angelo dell'Egida","bianco",0,0,0,2,0,4,"Creatura","Flying (This creature can't be blocked except by creatures with flying or reach.) When Aegis Angel enters the battlefield, another target permanent gains indestructible for as long as you control Aegis Angel. (Effects that say 'destroy' don't destroy it. A creature with indestructible can't be destroyed by damage.)",NULL,"Set Base 2016","Rara","Aleksi Briclot",5,5,"Resources/carta23.png"),
(24, "Aeronauta Sperimentatore","Blu",0,0,1,0,0,2,"Creatura","Aeronaut Tinkerer has flying as long as you control an artifact. (It can't be blocked except by creatures with flying or reach.)","Tutti gli inventori hanno la testa fra le nuvole. Io voglio spingermi più in alto.","Set Base 2015","Rara","Willian Murai",2,3,"Resources/carta24.png"),
(25, "Vortici d'Etere","Blu",0,0,2,0,0,3,"Istantanea","For each attacking creature, its owner puts it on the top or bottom of their library.","Non preoccuparti, ne ho in abbondanza per tutti. —Vickon, maga combattente dell'Undicesima Compagnia","Set Base 2017","Rara","Dan Scott",NULL,NULL,"Resources/carta25.png"),
(26, "Escavazione Aggressiva","Rosso",0,1,0,0,0,3,"Incantesimo","You can't play lands.Sacrifice a land: Draw two cards. Activate this ability only once each turn.",NULL,"Set Base 2015","Rara","Franz Vohwinkel",NULL,NULL,"Resources/carta26.png"),
(27, "Ajani l'Incrollabile","Bianco",0,0,0,1,0,3,"Planeswalker","+1: Until end of turn, up to one target creature gets +1/+1 and gains first strike, vigilance, and lifelink. −2: Put a +1/+1 counter on each creature you control and a loyalty counter on each other planeswalker you control. −7: You get an emblem with If a source would deal damage to you or a planeswalker you control, prevent all but 1 of that damage.",NULL,"Set Base 2015","Mitica Rara","Chris Rahn",NULL,NULL,"Resources/carta27.png"),
(28, "Compagno di Ajani","Bianco",0,0,0,1,0,1,"Creatura","Whenever you gain life, put a +1/+1 counter on Ajani's Pridemate.","Quando uno di noi ha successo, l'intero branco ha successo. -Jazal Criniera D'Oro","Set Base 2015","Non comune","Svetlin Velinov",2,2,"Resources/carta28.png"),
(29, "Cercasangue di Altac","Rosso",0,1,0,0,0,1,"Creatura","Whenever a creature an opponent controls dies, Altac Bloodseeker gets +2/+0 and gains first strike and haste until end of turn. (It deals combat damage before creatures without first strike, and it can attack and Tap as soon as it comes under your control.)",NULL,"Set Base 2015","Non Comune","Cynthia Sheppard",2,1,"Resources/carta29.png");

-- --------------------------------------------------------

--
-- Struttura della tabella `carte_in_mazzo`
--

CREATE TABLE `carte_in_mazzo` (
  `Id_mazzo` int(11) NOT NULL,
  `Id_carta` int(11) NOT NULL,
  `Q_ta` tinyint(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `carte_in_mazzo`
--

INSERT INTO `carte_in_mazzo` (`Id_mazzo`, `Id_carta`, `Q_ta`) VALUES
(1, 1, 1),
(1, 2, 3),
(1, 3, 2),
(1, 12, 1),
(1, 13, 2),
(1, 10, 7),
(1, 5, 2),
(1, 4, 2),
(1, 11, 4),
(2, 6, 1),
(2, 4, 1),
(2, 3, 1),
(2, 9, 3),
(2, 1, 3),
(2, 2, 1),
(2, 13, 1),
(2, 10, 1),
(2, 11, 3),
(4, 1, 3),
(4, 2, 7),
(4, 6, 2),
(4, 4, 1),
(4, 8, 1),
(4, 13, 1),
(4, 12, 4),
(4, 10, 1),
(5, 3, 1),
(5, 2, 2),
(5, 4, 3),
(5, 7, 5),
(5, 8, 2),
(5, 12, 1),
(6, 12, 4),
(6, 13, 1),
(6, 11, 1),
(6, 1, 2),
(6, 2, 3),
(6, 4, 1),
(6, 6, 2),
(6, 7, 1),
(7, 4, 1),
(7, 5, 1),
(7, 6, 1),
(7, 7, 1),
(7, 8, 1),
(7, 9, 1),
(7, 10, 1),
(7, 11, 1),
(8, 5, 4),
(8, 6, 1),
(8, 12, 1),
(8, 10, 2);

-- --------------------------------------------------------

--
-- Struttura della tabella `mazzo`
--

CREATE TABLE `mazzo` (
  `Id` int(11) NOT NULL,
  `Nome` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Autore` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tipo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Colore_rosso` tinyint(1) DEFAULT NULL,
  `Colore_verde` tinyint(1) DEFAULT NULL,
  `Colore_blu` tinyint(1) DEFAULT NULL,
  `Colore_nero` tinyint(1) DEFAULT NULL,
  `Colore_bianco` tinyint(1) DEFAULT NULL,
  `Upvote` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `mazzo`
--

INSERT INTO `mazzo` (`Id`, `Nome`, `Autore`, `Tipo`, `Colore_rosso`, `Colore_verde`, `Colore_blu`, `Colore_nero`, `Colore_bianco`, `Upvote`) VALUES
(1, 'Aggro 1', 'giacomo', 'Aggro', 0, 0, 1, 0, 0, 0),
(2, 'Control 1', 'giacomo', 'Control', 0, 0, 1, 1, 0, 0),
(3, 'Primo mazzo', 'usr2', 'Misto', 0, 1, 1, 0, 0, 0),
(4, 'Mono Black Control', 'usr3', 'Mono Black', 0, 0, 0, 1, 0, 0),
(5, 'Mono White Angels', 'usr2', 'Mono White', 0, 0, 0, 0, 1, 0),
(6, 'Grixis Mill', 'usr2', 'Mill', 1, 0, 1, 1, 0, 0),
(7, 'Elves', 'giacomo', 'Mono Green', 0, 1, 0, 0, 0, 0),
(8, 'Mazeura\'s Nightmares', 'usr2', 'Mono Black Sacrifice', 0, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE `user` (
  `Username` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Pwd` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`Username`, `Pwd`, `Email`, `Admin`) VALUES
('usr1', '618fbd94eef8c715da619a6f77b746d59ad599e48f8296580ba851151610ef9c', 'ciccio.pasticcio@gmail.com', 0),
('usr2', 'db2a60410d32e19766d6205a5011e0e25ac1f16744b8185a530b50af91951dcb', 'paolo@rossi.com', 0),
('usr3', '42c132b447f5fbcf548054b0ef541e1033cf87620270e07a18e7bc4708bf39e5', 'magic.lol@gmail.com', 0),
('amm1', 'cdd76addd13ae0b93c363b5202f17cb4c0843a68e80c5cea5f21d8b15e642f2c', 'amministratore1@gmail.com', 0),
('amm2', 'c57b0de93d96274d60af9cd57540737e368043162cfd4b039fdfe4321b3227ff', 'amministratore2@gmail.com', 0);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `carta`
--
ALTER TABLE `carta`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `carte_in_mazzo`
--
ALTER TABLE `carte_in_mazzo`
  ADD PRIMARY KEY (`Id_mazzo`,`Id_carta`);

--
-- Indici per le tabelle `mazzo`
--
ALTER TABLE `mazzo`
  ADD PRIMARY KEY (`Id`);

--
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`) USING BTREE;

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `carta`
--
ALTER TABLE `carta`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT per la tabella `mazzo`
--
ALTER TABLE `mazzo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
