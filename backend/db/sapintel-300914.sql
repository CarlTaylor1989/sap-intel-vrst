-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Sep 30, 2014 at 01:23 PM
-- Server version: 5.1.73
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sapintel`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(128) NOT NULL,
  `first_name` varchar(128) NOT NULL,
  `last_name` varchar(128) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `address` varchar(512) NOT NULL,
  `town` varchar(128) NOT NULL,
  `organization` varchar(512) NOT NULL,
  `country` varchar(128) NOT NULL,
  `zip` varchar(128) NOT NULL,
  `october6` bit(1) NOT NULL,
  `october7` bit(1) NOT NULL,
  `october8` bit(1) NOT NULL,
  `october9` bit(1) NOT NULL,
  `october10` bit(1) NOT NULL,
  `msg_email` bit(1) NOT NULL,
  `msg_phone` bit(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=246 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `phone`, `address`, `town`, `organization`, `country`, `zip`, `october6`, `october7`, `october8`, `october9`, `october10`, `msg_email`, `msg_phone`) VALUES
(18, 'daniel.ashby@ispygolf.com', 'Daniel', 'Ashby', '014204479881', '4 oak tree road', 'Guildford', 'DNX', 'AL', 'GU35 9DF', '1', '0', '1', '0', '0', '1', '1'),
(19, 'daniel.ashby@ispygolf.com', 'Daniel', 'Ashby', '01292388237237', 'hgh house farm', 'guildford', 'dnx', 'AE', 'asdasdasd', '1', '0', '1', '0', '0', '1', '0'),
(20, 'Ak.mahmoud@diyarme.com', 'Akram', 'Awadah', '+96597192920', 'Hawalli', 'Hawalli', 'Diyar United Company', 'KW', '5585', '1', '1', '1', '1', '1', '1', '0'),
(21, 'daniele.franchini78@gmail.com', 'Franchini', 'Daniele', '3929788115', 'Via Reduzzi 9', 'Torino', 'ICT Consultant', 'IT', '10100', '1', '1', '1', '1', '1', '1', '0'),
(22, 'andrew.brown@baesystems.com', 'Andrew', 'Brown', '01622660261', 'BAE Systems, Glascoed', 'Usk', 'BAE Systems', 'GB', 'np151xl', '1', '0', '1', '1', '1', '0', '0'),
(23, 'carlos.antunes@telecom.pt', 'Carlos', 'Antunes', '966021061', 'Rua MÃ¡rio Eloy 6 - 5ÂºA', 'LISBOA', 'PT', 'PT', '1750-311', '1', '1', '1', '1', '1', '1', '0'),
(24, 'alberto.biasuzzi@danone.com', 'alberto', 'biasuzzi', '003902637871', 'via farini 41', 'milan', 'Mellin Group Danone', 'IT', '20159', '1', '0', '0', '1', '1', '1', '0'),
(25, 'ayman.Shaker23@gmail.com', 'Ayman', 'Shaker', '+96550250860', 'Kuwait', 'Kuwait', 'Diyar United Compnay', 'KW', '12345', '1', '1', '1', '1', '1', '1', '0'),
(26, 'adeel.sikandar@gfg.com.pk', 'adeel', 'sikandar', '00923007013830', 'modern motor house beaoumnot road karachi', 'karachi', 'gfg', 'PK', '75210', '1', '1', '1', '1', '1', '1', '1'),
(27, 'ragip@toki.gov.tr', 'RagÄ±p', 'GÃ¼lpÄ±nar', '03125652294', 'TOKI Bilkent Plaza B1 Blok', 'Ã‡ankaya/ANKARA', 'TC BaÅŸbakanlÄ±k Toplu Konut Ä°daresi TOKÄ°', 'TR', '06800', '1', '1', '1', '1', '1', '1', '0'),
(28, 'ana.arias@simosait.abengoa.com', 'Ana', 'Arias', '0034606358220', 'Comandante Zorita, 38, 4D', 'Madrid', 'Abengoa', 'ES', '28020', '1', '1', '1', '1', '1', '1', '0'),
(29, 'andrew.wells@uk.bp.com', 'Andy', 'Wells', '07584108443', '4 Longwalk Road', 'Uxbridge', 'BP', 'UM', 'UB11 1FE', '1', '1', '1', '1', '1', '1', '0'),
(30, 'tony.cann@bt.com', 'Tony', 'Cann', '01314485395', 'pp HWB378, PO Box67501, BT Centre', 'London', 'BT', 'GB', 'EC1P 1PG', '1', '1', '1', '1', '1', '1', '0'),
(31, 'dario.gentile@capgemini.com', 'Dario', 'Gentile', '0654955849', 'via dell''esperanto, 71', 'roma', 'Capgemini Italia', 'IT', '00144', '1', '1', '1', '1', '1', '1', '0'),
(32, 'ghori@mbtksa.com', 'GHOUSUDDIN ', 'GHORI', '+966556274743', 'JEDDAH ', 'JEDDAH', 'MOHAMMED BAWAZIR TRADING FO LTD', 'SA', '16129', '1', '1', '1', '1', '1', '1', '0'),
(33, 'abdelaali.maher@eisti.eu', 'Abdelaali', 'Maher', '0777300213', 'avenue du Parc', 'CERGY', 'EISTI', 'FR', '95011', '1', '1', '1', '1', '1', '1', '0'),
(34, 'yanokuchi-masaaki@mki.co.jp', 'Masaaki', 'Yanokuchi', '+44-77-4753-2870', '20 King William Street', 'London', 'MKI(U.K.),LTD', 'GB', '', '1', '1', '1', '1', '1', '1', '0'),
(35, 'bafaloukasa@gmail.com', 'Apostolos', 'Bafaloukas', '306946068925', '30 Proteos st', 'P. Faliro', 'Self employed', 'GR', '17561', '1', '1', '1', '1', '1', '1', '0'),
(36, 'minna.puisto@nordea.com', 'Minna', 'Puisto', '358505144184', 'Satamaradankatu 5', 'Helsinki', 'Nordea bank Finland ', 'FI', '00010', '1', '0', '0', '0', '1', '1', '0'),
(37, 'muhammad.arshad@hp.com', 'Muhammad', 'Arshad', '00966530231577', '28th Street Alkhobar', 'ALkhobar', 'HP', 'SA', '31952', '1', '1', '1', '1', '1', '1', '1'),
(38, 'jude.orazulike@unicem.com.ng', 'Jude', 'Orazulike', '+2347034155912', '5A MCC Estate', 'Calabar', 'UniCem Calabar', 'NG', '1234', '1', '1', '1', '1', '1', '1', '0'),
(39, 'david.beale@capgemini.com', 'David', 'Beale', '441180000000', 'woking,surry', 'Woking', 'capgemini', 'GB', 'GU21 6DB', '1', '0', '0', '1', '1', '1', '0'),
(40, 'myr15290@gsk.com ', 'Margaret', 'oriordan', '00353868054906', 'Stonemasons way ', 'dublin', 'GSK', 'IE', '00000', '1', '1', '1', '0', '0', '0', '0'),
(41, 'magnus.olsson@web.de', 'Magnus', 'Olsson', '+49 176 567 344 76', 'Luxemburgplatz 3', 'Wiesbaden', 'Freelancer', 'DE', '65185', '1', '1', '1', '1', '1', '1', '0'),
(42, 'dmbugua@ktdateas.com', 'DAVID', 'MBUGUA', '+254203227110', 'BOX 13565- 0100', 'NAIROBI', 'KTDA', 'KE', '00100', '1', '0', '1', '0', '0', '1', '0'),
(43, 'david.llamas@realtech.es', 'David', 'Llamas Morente', '+34915560013', 'Torrelaguna, 77 planta 4', 'Madrid', 'Realtech', 'ES', '28043', '1', '1', '1', '1', '1', '1', '0'),
(44, 'emreozensoy@gmail.com', 'YUSUF EMRE', 'OZENSOY', '905548503083', 'ANKARA', 'ANKARA', 'BAYINDIR HASTANESI', 'TR', '06520', '1', '1', '1', '1', '1', '1', '1'),
(45, 'mario-j-gomes@telecom.pt', 'Mario', 'Gomes', '+351217901466', 'Av. Ãlvaro Pais', 'Lisbon', 'Portugal Telecom', 'PT', '1069-300', '1', '1', '1', '1', '1', '1', '0'),
(46, 'tuncayaydin@thy.com', 'TUNCAY', 'AYDIN', '902124440849', 'istanbul', 'ISTANBUL', 'THY', 'TR', '34212', '1', '1', '1', '1', '1', '1', '0'),
(47, 'usman.saleem@ebm.com.pk', 'Usman', 'Saleem', '+92-314-2291762', 'Plot-1-4, Sector-23, Korangi Industrial Area, Karachi-74900 Pakistan', 'Karachi', 'English Biscuit Manufacturers Pvt Ltd.', 'PK', '74900', '1', '1', '1', '1', '1', '1', '0'),
(48, 'atul_varshney@infosys.com', 'Atul', 'Varshney ', '07432679623', '14 Floor, 10 Upper Bank Street, canary wharf, E14 5NP', 'Canary Wharf, London', 'Infosys Limited', 'GB', 'e14 5np', '1', '1', '1', '1', '1', '1', '0'),
(49, 's.habib@moe.edu.eg', 'Said', 'Habib', '+201221179224', 'El Falky St, ', 'cairo', 'MOE', 'EG', '11243', '1', '1', '0', '1', '1', '1', '0'),
(50, 'sander.hermsen@achmea.nl', 'Sander', 'Hermsen', '+31653261462', 'Albatroslaan 152', 'Lelystad', 'Achmea', 'NL', '8241CJ', '1', '1', '1', '1', '1', '1', '0'),
(51, 'amir.shehzad@atlashonda.com.pk', 'Amir ', 'Shehzad', '0333-3871930', 'F-36, Estate Avenue, SITE ', 'Karachi', 'Atlas Honda Limited', 'PK', '75400', '1', '1', '1', '1', '1', '1', '0'),
(52, 'a.adel@americanafoods.com', 'Ahmed', 'Adel', '+966568787087', 'Jeddah', 'Jeddah', 'Americana', 'SA', '21543/51048', '1', '1', '1', '1', '1', '1', '0'),
(53, 'tore.lasn@tallinnlv.ee', 'Tore', 'Lasn', '4445', 'Rotermanni 12', 'Tallinn', 'TLV', 'EE', '10111', '1', '1', '1', '1', '1', '0', '0'),
(54, 'anne-francoise.herbeuval@ucb.com', 'Anne-Francoise', 'Herbeuval', '+32.497.462716', 'Chemin du Foriest', 'Braine-l''Alleud', 'UCB', 'BE', '1421', '1', '1', '1', '1', '1', '1', '0'),
(55, 'michael.garcia@effem.com', 'michael', 'garcia', '+3361887704', '3 chemin de la sandlach', 'Haguenau', 'Mars IQ', 'FR', '67500', '1', '1', '1', '1', '1', '1', '0'),
(56, 'ychatzop@cosmote.gr', 'Ioannis', 'Chatzopoulos', '+302102501263', 'Kifissias 99', 'Maroussi', 'OTE/COSMOTE', 'GR', '15124', '1', '1', '1', '0', '0', '1', '0'),
(57, 'kadirokan.cerrah@bp.com', 'Okan', 'Cerrah', '+902165712000', 'Asia OfisPark', 'Istanbul', 'IT&S', 'TR', '34742', '1', '1', '1', '1', '1', '1', '0'),
(58, 'ramzan_fattani@colpal.com', 'Muhamad', 'Ramzan', '00923002171789', '401, Iqra Palace Moosa Lane Karachi.', 'Karachi', 'Colgate Palmolive Pakistan', 'PK', '74000', '1', '1', '1', '1', '1', '1', '0'),
(59, 'shujakhan@hiltonpharma.com', 'Shuja', 'Khan', '923008207307', '9th Floor Progressive Plaza', 'Karachi', 'Hilton pharma', 'PK', '75400', '1', '1', '1', '1', '1', '0', '0'),
(60, 'secooper.cooper@gmail.com', 'Stephen', 'Cooper', '07775538605', '79 Evans Wharf', 'Hemel Hempstead', 'AceAxis', 'GB', 'HP3 9WN', '1', '1', '1', '1', '1', '1', '0'),
(61, 'm.sanad@mld.gov.eg', 'mohamed', 'sanad', '+201223557562', '4 Shooting Club St.,10th Floor, Dokki, Cairo, Egypt', ' Dokki, Cairo, Egypt', ' Ministry of Local Development', 'EG', '12611', '1', '0', '0', '0', '1', '1', '0'),
(62, 'alberto.fabiani@intel.com', 'Alberto', 'Fabiani', '+3902575441', 'Palazzo E4 - Milanofiori', 'Assago (MI)', 'Intel Corporation', 'IT', '20090', '1', '1', '1', '1', '1', '0', '0'),
(63, 'PAUL.CRESSWELL@EXPERIAN.COM', 'PAUL', 'CRESSWELL', '901159410888', 'EMBANKMENT HOUSE, ELECTIC AVENUE', 'NOTTINGHAM', 'EXPERIAN MARKETING SERVICES', 'GB', 'NG80 1EH', '1', '1', '1', '1', '1', '1', '0'),
(64, 'hafeezsheikh@hotmail.com', 'Hafeez', 'Sheikh Muhammad', '+923310067244', '1367, Block B, MPCHS, B17, Islamabad', 'Islamabad', 'Abacus Consulting', 'PK', '44000', '0', '0', '0', '1', '1', '1', '0'),
(65, '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0'),
(66, 'nicolas.casariego@mrm-mccann.com', 'Nicolas', 'Casariego', '+34.914.360.148', 'Paseo de la Castellana 165', 'Madrid', 'MRM // McCann', 'ES', '28046', '1', '0', '1', '0', '1', '1', '0'),
(67, 'pavr@stepstone.be', 'Patrick', 'Vrancken', '+32 477 36 21 44', 'Rue Royale 47', 'Bruxelles', 'StepStone GmbH', 'BE', '1000', '1', '1', '1', '0', '1', '0', '0'),
(68, 'michel.provoost@mccain.com', 'Michel', 'Provoost', '+31113615902', 'Oranjeplaatweg 4a', 'Lewedorp', 'McCain Foods', 'NL', '4458 NM', '1', '1', '1', '1', '1', '1', '0'),
(69, 'annra@danskebank.dk', 'Anne Sofie ', 'Roed Rasmussen ', '0045 51 31 84 44', 'Frederiksborgvej 161, 2 mf. ', 'Copenhagen ', 'Danske Bank', 'DK', '1069', '1', '1', '1', '1', '1', '0', '0'),
(70, 's_mohsinali@yahoo.com', 'Mohsin ', 'Syed Ali', '00923032162024', 'H.No R-1700 , Block 14 , F.B. Area Karachi', 'Karachi', 'Cherat cement Co Ltd', 'PK', '75950', '1', '1', '1', '1', '1', '1', '0'),
(71, 'kylli.kivi@tallinnlv.ee', 'Kylli', 'Kivi', '6404754', 'Rotermanni 12', 'Tallinn', 'Tallinn City Office', 'EE', '10111', '1', '1', '1', '1', '1', '1', '0'),
(72, 'farman71@gmail.com', 'Syed Farman', 'Iqbal', '+966552978517', 'Industrial Area 1st ', 'Jeddah', 'Dehlawi Optical Industrial Co. Ltd', 'SA', '21311', '1', '1', '1', '1', '1', '1', '0'),
(73, 'thiemo.bubel@stepstone.de', 'Thiemo', 'Bubel', '+49 211 934935734', 'Hammer StraÃŸe 19', 'DÃ¼sseldorf', 'StepStone Deutschland GmbH', 'DE', '40219', '1', '1', '1', '1', '1', '1', '0'),
(74, 'dagwin.stox@atos.net', 'Dagwin', 'Stox', '+3226903746', 'Zweefvliegtuigstraat 6', 'Brussels', 'Atos', 'BE', '1130', '1', '1', '1', '1', '1', '1', '0'),
(75, 'zaidhaque@yahoo.co.uk', 'zaid', 'haque', '447970925430', '342 Whitton Avenue East', 'Greenford', 'Consultant', 'GB', 'ub6 0jp', '1', '1', '1', '1', '1', '1', '0'),
(76, 'jplopez@grupopa.es', 'jose pedro', 'lopez', '34', 'plaza valle de la jarosa 75', 'madrid', 'grupo pa', 'ES', '28035', '1', '1', '1', '1', '1', '1', '0'),
(77, 'msv@infotrust.lv', 'MÄris', 'SvilÄns', '67805585', 'MÅ«kusalas 41', 'Riga', 'Infotrust', 'LV', 'LV1004', '1', '1', '1', '1', '1', '0', '0'),
(78, 'sreelekha.nediya@bsigroup.com', 'sreelekha', 'Nediya', '99', '', 'London', 'BSI group', 'GB', 'W4 4al', '1', '1', '1', '1', '1', '1', '0'),
(79, 'enaam.hashim@btc.com.bh', 'Enaam ', 'Hashim', '+973 17 88 44 71', 'PO BOX 14', 'Manama', 'BATELCO', 'BH', '14', '1', '1', '1', '1', '1', '0', '0'),
(80, 'tja@infotrust.lt', 'Tomas', 'Jankovski', '+37061111985', 'Konstitucijos 7', 'Vilnius', 'Infotrust', 'LT', '09320', '1', '1', '1', '1', '1', '1', '0'),
(81, 'rob.sheppard@intel.com', 'Rob', 'Sheppard', '441793403000', 'Pipers Way', 'Swindon', 'Intel', 'GB', 'SN3 1RJ', '1', '1', '1', '1', '1', '0', '0'),
(82, 'walid.al-hammadi@agt-it.com', 'WALID', 'ALHAMADI', '+971 506248030', 'Manama St. Dubai Outsource Zone (DOZ) Lot 031', 'Dubai', 'Arab Gulf for IT Services L.L.C', 'AE', '11364', '0', '1', '0', '1', '0', '1', '0'),
(83, '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0'),
(84, 'walid.al-hammadi@agt-it.com', 'WALID', 'ALHAMADI', '+971 506248030', 'Manama St. Dubai Outsource Zone (DOZ) Lot 031', 'Dubai', 'Arab Gulf for IT Services L.L.C', 'AE', '11364', '0', '1', '0', '1', '0', '1', '0'),
(85, 'asi@infotrust.lt', 'Almantas', 'Silinskas', '+37062052024', 'Konstitucijos ave. 7', 'Vilnius', 'Infotrust', 'LT', '09308', '1', '1', '1', '1', '1', '1', '0'),
(86, 'paulcrisp@yahoo.com', 'Paul', 'Crisp', '07764143762', 'CTE Carliol Sq', 'Newcastle', 'BT Advise', 'GB', 'NE1', '1', '1', '1', '1', '1', '1', '0'),
(87, 'jacques.vanthemsche@kone.com', 'Jacques', 'Van Themsche', '+32 676 99 29', 'rue de Bretagne 24', 'BRuxelles', 'KONE International', 'BE', '1200', '1', '1', '1', '1', '1', '1', '0'),
(88, 'david.starck@relyit.se', 'David', 'Starck', '+46739224686', 'Kyrkogatan 11', 'NorrtÃ¤lje', 'Rely IT', 'SE', '76130', '1', '1', '1', '1', '1', '0', '0'),
(89, 'julian.pert@sophos.com', 'Julian', 'Pert', '07733 100149', 'Abingdon Science Park', 'Abingdon', 'Sophos', 'GB', 'OX14 3YP', '1', '1', '1', '1', '1', '1', '0'),
(90, 'gharbi79@gmail.com', 'Mohamed', 'Gharbi', '+34 609812262', 'Pau clarÃ­s', 'Barcelona', 'itelligence Spain', 'ES', '08022', '1', '1', '1', '1', '1', '1', '0'),
(91, 'avinuelasrap@csc.com', 'Ana', 'ViÃ±uelas', '655355555', 'Pedro Teixeira', 'Madrid', 'CSC', 'ES', '28020', '1', '1', '1', '1', '1', '1', '0'),
(92, 'dkpijq@chr-hansen.com', 'Pia', 'Joenck', '30833879', 'Boege Alle', 'Hoersholm', 'Healthcare', 'DK', '3970', '1', '0', '0', '0', '0', '0', '0'),
(93, 'frederic.bonomo@staples.com', 'FREDERIC', 'BONOMO', '0033617114426', '63 GRANDE RUE', 'SURVILLIERS', 'STAPLES EU', 'FR', '95680', '1', '1', '1', '1', '1', '1', '0'),
(94, 'antonina.santos@broadensolutions.com', 'Antonina', 'Santos', '+351932664104', 'Lugar do Espido, Via Norte - Apartado 1129', 'Maia', 'Sonae Industria', 'PT', '4471-909', '1', '1', '1', '1', '1', '1', '0'),
(95, 'pedro.gameiro@pt.linde-gas.com', 'Pedro', 'Gameiro', '+351218310420', 'Lisbon', 'Lisbon', 'Linde', 'PT', '1800', '1', '1', '1', '1', '1', '1', '0'),
(96, 'bruno.lallement@honeywell.com', 'Bruno', 'Lallement', '+33 3 29813000', 'ZI inova 3000', 'Thaon Les Vosges', 'HOneywell ', 'FR', '88155', '1', '1', '1', '1', '1', '0', '0'),
(97, 'H.Fawaz@diyarme.com', 'Hamada', 'Fawaz', '0096550722215', 'Kuwait', 'Kuwait', 'Diyar United Company', 'KW', '895675', '1', '1', '1', '1', '0', '1', '0'),
(98, 'H.Fawaz@diyarme.com', 'Hamada', 'Fawaz', '0096550722215', 'Kuwait', 'Kuwait', 'Diyar United Company', 'KW', '647845', '1', '1', '1', '1', '1', '1', '0'),
(99, 'oussama.meraghni@capgemini.com', 'Oussama', 'MERAGHNI', '0660427994', 'Grenoble', 'FRANCe', 'Capgemini', 'FR', '38000', '1', '1', '1', '1', '1', '0', '0'),
(100, 'yubhaska@in.ibm.com', 'Yuvaraj', 'M B', '8754441724', 'IBM,Block 7, 6th Floor, A-Wing, DLF IT Park, Ramapuram', 'Chennai', 'IBM', 'IN', '600089', '1', '1', '1', '1', '1', '1', '0'),
(101, 'yubhaska@in.ibm.com', 'Yuvaraj', 'M B', '8754441724', 'IBM,Block 7, 6th Floor, A-Wing, DLF IT Park, Ramapuram', 'Chennai', 'IBM', 'IN', '600089', '1', '1', '1', '1', '1', '1', '0'),
(102, 'xuefeng.lacroix-xu@capgemini.com', 'Xuefeng', 'LACROIX XU', '', '', 'Paris', '', 'FR', '75016', '1', '1', '1', '1', '1', '1', '0'),
(103, 'seyieniayewu@yahoo.com', 'SHEYI', 'ENIAYEWU', '4692260272', 'P O Box 110627 75011, Carrollton', 'ADDISON', 'SELF EMPLOYED SAP B1 IMPLEMENTATION CONSULTANT', 'NG', 'P O Box 110627 75011, Carrollton Texas ', '1', '1', '1', '1', '1', '1', '0'),
(104, 'carlo.cella@qualical.com', 'carlo', 'cella', '+39348225062', 'Via Verdi, 3', 'Bergamo', 'QualiCal International Srl', 'IT', '24121', '1', '1', '1', '1', '1', '0', '0'),
(105, 'abraham.gimenez@hp.com', 'Abraham', 'Gimenez', '916311151', 'jose echegaray 8 ', 'Las Rozas', 'HP', 'ES', '28230', '1', '1', '1', '1', '1', '0', '0'),
(106, 'eric.boson@sial.com', 'Eric', 'BOSON', '0474822911', '80 Rue de Luzais', 'SAINT QUENTIN FALLAVIER', 'SIGMA-ALDRICH', 'FR', '38070', '0', '0', '0', '1', '1', '1', '0'),
(107, 'mahdy@outlook.com', 'Mohamed', 'ElMahdy', '201005051052', '0764-6826 Borderlinx/DHL DIDC2', 'Daventry', 'Mohamed ElMahdy', 'GB', 'NN6 7GW', '1', '1', '1', '1', '1', '1', '0'),
(108, '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0'),
(109, 'shoeb@mansab.com', 'Shoeb Ghazi', 'Ghazi', '+966535345103', 'Al Murabba', 'Riyadh', 'MANSAB Solutions', 'SA', '11355', '1', '1', '1', '1', '1', '1', '0'),
(110, 'sara_garcia@itelligence.es', 'Garcia Las heras', 'Sara', '934674690', 'Pau Claris 162', 'Barcelona', 'Itelligence', 'ES', '08027', '1', '1', '1', '1', '1', '0', '0'),
(111, 'ejubilar@everis.com', 'Edgar', 'Vera', '+34605971024', 'Av. Diagonal 605 4th floor', 'Barcelona', 'everis', 'ES', '08028', '1', '1', '1', '1', '1', '1', '0'),
(112, 'kamtuas@gmail.com', 'David', 'Mutua', '254203754670', 'Box 48867', 'Nairobi', 'Circuit Business Systems', 'KE', '00100', '1', '1', '1', '1', '1', '1', '0'),
(113, 'mhelal@mcit.gov.eg', 'Mohamed', 'Helal', '201006087189', 'smart village', 'Giza', 'MCIT', 'EG', '12411', '1', '1', '1', '1', '1', '1', '0'),
(114, 'aremu_temitope@yahoo.com', 'Aremu', 'Temitope', '08038028065', 'FRCN, P.M.B 5003, Dugbe, Ibadan', 'Ibadan', 'Media', 'NG', '234', '1', '1', '1', '1', '1', '1', '0'),
(115, 'shaankaleem@gmail.com', 'Mohammed', 'Kaleemullah', '00971 55 9420046', 'Dubai', 'Dubai', 'Fewa', 'AE', '1672', '1', '1', '1', '1', '1', '1', '0'),
(116, 'yysabagh@hotmail.com', 'Yousef', 'Sabbagh', '+96899231512', 'Muscat', 'Muscat', 'GBM', 'OM', '114', '1', '1', '0', '1', '1', '1', '0'),
(117, 'wagdy_sm@yahoo.com', 'Wagdy Samy Mahmoud', 'El-Sherbiny', '65803161', ' Farwaniya, Kuwait', ' Farwaniya', 'Diyar United Company', 'KW', '80000', '1', '1', '1', '1', '1', '1', '0'),
(118, 'ccalado@its.jnj.com', 'Carlos', 'Calado', '00351 912799317', 'Est Consiglieri Pedroso 69 A', 'Barcarena', 'Johnson & Johnson', 'PT', '2730-055', '1', '1', '1', '1', '1', '1', '0'),
(119, 'mdessouky@orientalweavers.com', 'Mohamed ', 'El Desouky', '00201221489864', '8 El Shaheed Zakaria Khalil St. ,Oriental Weavers Complex,Heliopoils', 'Cairo', 'Oriental Weavers Company', 'EG', '', '1', '1', '1', '1', '1', '1', '0'),
(120, 'thomas.huitric@capgemini.com', 'Thomas', 'Huitric', '+33643359517', 'Blvd. Paul Langevin Residence Leonard de Vinci F124B', 'Lille', 'Capgemini', 'FR', '59650', '1', '1', '1', '1', '1', '0', '0'),
(121, 'wagdy_sm@yahoo.com', 'Wagdy Samy Mahmoud', 'El_Sherbiny', '96565803161', 'farwaniya , kuwait', 'farwaniya ', 'Diyar United Company', 'KW', '80000', '1', '1', '1', '1', '1', '1', '0'),
(122, 'dmoreno@seidor.es', 'Daniel', 'Moreno', '607450462', 'Pujades, 350 ', 'Barcelona', 'Seidor', 'ES', '08019', '1', '1', '1', '1', '1', '1', '0'),
(123, 'karem.naguib@gmail.com', 'Kareem', 'Naguib', '201226605069', 'Egypt', 'Cairo', 'Vision Valley', 'EG', '11312', '1', '1', '1', '1', '1', '1', '0'),
(124, 'santhosh.bhukya@capgemini.com', 'Santhosh', 'Bhukya', '442079174914', 'London', 'London', 'Capgemini', 'GB', 'EC1N 2PB', '1', '1', '1', '1', '1', '1', '0'),
(125, 'm.khiry@outlook.com', 'mohamed', 'khiry', '01091900817', 'cairo', 'Cairo', 'ministry of state for administrative development', 'EG', '144', '1', '1', '0', '0', '0', '1', '1'),
(126, 'dargen64@yahoo.it', 'Dario', 'Gentile', '0654955849', 'via dell''esperanto, 71', 'roma', 'Capgemini Italia', 'IT', '00144', '1', '1', '1', '1', '1', '1', '0'),
(127, 'alexandre.g.david@gmail.com', 'Alexandre', 'David', '+351917832157', 'Rua Prof. JoÃ£o Barreira, 18', 'Lisboa', 'AXA Group Solutions', 'PT', '1600-625', '1', '1', '1', '1', '1', '1', '0'),
(128, 'moustafa.soliman@hp.com', 'Moustafa ', 'Soliman', '0702262125', 'Gustav III:s boulevard 36', 'Solna', 'Hewlwtt-packard', 'SE', '16985', '1', '1', '1', '1', '1', '0', '0'),
(129, '', '', '', '', '', '', '', '', '', '0', '0', '0', '0', '0', '0', '0'),
(130, 'oktay.isik@arcelik.com', 'Mehmet Oktay', 'IÅŸÄ±k', '00905324837452', 'ArÃ§elik Genel MÃ¼dÃ¼rlÃ¼k, KaraaÄŸaÃ§ Cad. 2-6, SÃ¼tlÃ¼ce/BeyoÄŸlu', 'Ä°stanbul', 'ArÃ§elik A.Åž.', 'TR', '34445', '1', '1', '1', '1', '1', '1', '0'),
(131, 'afarreres@logista.es', 'AMALIA', 'FARRERES ALMAGRO', '+34914819923', 'C/ TRIGO 39', 'LEGANES / MADRID', 'LOGISTA', 'ES', '28914', '1', '1', '0', '1', '1', '1', '0'),
(132, 'eric.francois@lu.pwc.com', 'eric', 'francois', '4948481', 'rue d esch', 'luxembourg', 'pwc', 'LU', 'L-1014', '1', '1', '0', '0', '1', '1', '0'),
(133, 'pretia@ima.it', 'arturo', 'preti', '00390516514264', 'via emilia. 235', 'ozzano emilia', 'IMA SPA', 'IT', '40064', '1', '1', '1', '0', '0', '1', '0'),
(134, 'gbengaoso@yahoo.com', 'GBENGA', 'OSO', '08033277987', '1 FOLORUNSO OSO CRESCENT', 'OSOGBO', 'STATE OF OSUN PLANNING COMMISSION', 'NG', '1', '1', '1', '1', '1', '1', '1', '0'),
(135, 'mohammed.samir.contractor@pepsico.com', 'Mohamed', 'Samir', '00201063550099', 'Ain Shams', 'Cairo', 'Pepsico Int', 'EG', '11311', '1', '1', '1', '1', '1', '1', '0'),
(136, 'shaker@alsayedgroup.com', 'shaker', 'lotfy', '966 556776966', 'Riaydh', 'Riyadh', 'Sap Baiss', 'SA', '11466', '1', '1', '1', '1', '1', '1', '1'),
(137, 'radu.druta@gmail.com', 'Radu', 'Druta', '0624900141', '4, rue de la Culaz', 'Seynod', 'Axis', 'FR', '74600', '1', '1', '1', '1', '1', '1', '0'),
(138, 'abdullah_abusaan@adf.org.qa', 'Abdullah', 'Abusaan', '+97455831080', 'Al-Duhail', 'Doha', 'Arab Democracy Foundation', 'QA', '21775', '1', '1', '1', '1', '1', '1', '0'),
(139, 'patrick.borde@unilever.com', 'Patrick', 'BORDE', '+33 1 41 96 40 45', '23 Rue Francois Jacob', 'RUEIL MALMAISON', 'Unilever', 'FR', '92500', '1', '1', '1', '1', '1', '0', '0'),
(140, 'natasja.naessens@sap.com', 'Natasja', 'Naessens', '+32486136773', 'Olympiadenlaan 2', 'Evere', 'SAP', 'BE', '1140', '0', '1', '0', '0', '0', '1', '0'),
(141, 'antonio.dionisio@wedotechnologies.com', 'AntÃ³nio', 'DionÃ­sio', '0', 'Lisboa', 'lisboa', 'WeDo Technologies', 'PT', '1000', '1', '0', '1', '1', '1', '1', '0'),
(142, 'kenneth.stevens@sap.com', 'Kenneth', 'Stevens', '+32486136438', 'Avenue des Olympiades 1', 'Brussels', 'SAP - EMEA Presales', 'BE', '1040', '1', '1', '1', '1', '1', '0', '0'),
(143, 'thierry.donnadieu@sap.com', 'thierry', 'Donnadieu', '+33141252122', '157-159, rue Anatole France ', 'Levallois-Perret', 'SAP', 'FR', '92309 ', '1', '1', '1', '1', '1', '1', '0'),
(144, 'atiq@safraco.com', 'Atiq', 'Chaudhry', '+966558585633', 'P.O. Box 2824', 'Jeddah', 'Safra Co. Ltd.', 'SA', '21461', '1', '1', '1', '1', '1', '1', '0'),
(145, 'rgreen3179@aol.com', 'richard', 'green', '00 41 78 760 03 07', 'route du Monteliza 58', 'st-LÃ©gier', 'Nestle', 'CH', '1806', '1', '1', '0', '0', '1', '1', '0'),
(146, 't.rabeay@gmail.com', 'Tamer', 'Alrabeay', '9660503650903', 'jeddah', 'jeddah', 'Dar Al Fikr', 'SA', '14279', '1', '1', '1', '1', '1', '1', '0'),
(147, 'sanjeev.gulati@enterpriseblueprints.com', 'Sanjeev', 'Gulati', '07758881971', '93 icon building', 'London', 'EV', 'GB', 'Ig12dg', '1', '1', '1', '1', '1', '1', '0'),
(148, 'akhtarjan@hotmail.com', 'Akhtar ', 'Gul', '+923339177662', 'Islamabad Pakistan', 'Islamabad', 'Ora-tech system ', 'PK', '48000', '1', '1', '1', '1', '1', '1', '1'),
(149, 'ftribo@escorpion.com', 'Francesc', 'Tribo', '+34938030500', 'Caritat, 60', 'Igualada', 'escorpion', 'ES', '08700', '1', '1', '1', '1', '1', '1', '0'),
(151, 'sti.simutec@gmail.com', 'pierre', 'gauthier', '+33140838778', '15 AVENUE DESCARTES', 'PLESSIS ROBINSON', 'SIMUTEC TECHNOLOGIES', 'FR', '92350', '0', '0', '1', '0', '0', '1', '0'),
(152, 'sinan.ciklacevik@itelligence.com.tr', 'Sinan', 'Ciklacevik', '905532965538', 'dinc sk. no:28', 'istanbul', 'itelligence', 'TR', '34000', '1', '1', '1', '1', '1', '1', '0'),
(153, 'onur.pekerten@detaysoft.com', 'Onur', 'Pekerten', '905331358937', 'Alemdag cad.no:109 uskudar', 'Ä°stanbul', 'Detaysoft', 'TR', '34000', '1', '1', '1', '1', '1', '1', '0'),
(154, 'muratbkr88@hotmail.com', 'MURAT', 'BAKIR', '00905416026685', 'HIZIRREIS SOK. 9/10 KADIKOY', 'ISTANBUL', 'Itelligence Analytics', 'TR', '34060', '1', '1', '1', '1', '1', '1', '0'),
(155, 'ercan.ay@itelligence.com.tr', 'Ercan', 'AY', '05355182597', 'Ã‡amlÄ±k Mah. Ä°kbal Cad. DinÃ§ Sk. No:28 34774 Ãœmraniye ', 'ISTANBUL', 'ITELLIGENCE TR', 'TR', '34774', '1', '1', '1', '1', '1', '1', '0'),
(156, 'ozlem.yaren@itelligence.com.tr', 'Ã–zlem', 'Yaren', '05544439296', 'Turkey', 'Ä°stanbul', 'Itelligence', 'TR', '34010', '1', '0', '0', '0', '0', '1', '0'),
(157, 'arin.ariman@itelligence.com.tr', 'ArÄ±n', 'ArÄ±man', '00905325696010', 'Tesvikiye Mah. Ipek sok. 19/7 Sisli', 'Istanbul', 'Itelligence Analytics', 'TR', '34365', '1', '1', '1', '1', '1', '1', '0'),
(158, 'yakup.arslan@itelligence.com.tr', 'Yakup', 'Arslan', '5543555177', 'Kadikoy', 'Istanbul', 'Itelligence', 'TR', '34700', '1', '1', '1', '1', '1', '1', '0'),
(159, 'huseyin.bilgen@coretoedge.com.tr', 'Huseyin', 'Bilgen', '902164696408', 'Flora Residence Kayisdagi Cad. No:3 Daire: 1905', 'Atasehir', 'C2E Teknoloji Servisleri Ltd', 'TR', '34750', '0', '0', '1', '1', '0', '1', '0'),
(160, 'ercan.guler@yontem.biz.tr', 'ERCAN', 'GÃœLER', '905326464751', 'ATAÅžEHÄ°R', 'Ä°STANBUL', 'YONTEM', 'TR', '34000', '1', '1', '1', '1', '1', '1', '0'),
(161, 'umit.ozsehir@itelligence.com.tr', 'Ãœmit', 'Ã–zÅŸehir', '00905326945421', 'Mehmet Akif Mh. ÅžanlÄ± Cd. No:32A Da:40 Ãœmraniye', 'Ä°stanbul', 'itelligence TR', 'TR', '34774', '1', '1', '1', '1', '1', '1', '0'),
(162, 'umit.toptas@coretoegde.com.tr', 'Ã¼mit', 'toptaÅŸ', '0532 220 26 29', 'Flora Residence Kayisdagi Cad. No:3 Kat:7 Daire:710 34750 Kucukbakkalkoy Atasehir/Ä°stanbul', 'istanbul', 'CoretoEdge', 'TR', '34750', '1', '1', '1', '1', '1', '1', '0'),
(163, 'melek.cetin@itelligence.com.tr', 'MELEK', 'Ã‡ETÄ°N', '+905325216196', 'ATASEHIR', 'ISTANBUL', 'itelligence', 'TR', '34750', '1', '1', '1', '1', '1', '1', '0'),
(164, 'tarik.yilmaz@coretoedge.com.tr', 'MUSA TARIK', 'YILMAZ', '904781231234', 'istanbul', 'istanbul', 'c2e', 'TR', '34810', '1', '1', '1', '1', '1', '1', '0'),
(165, 'sofi.amundsen@verisure.com', 'Sofi', 'Amundsen', '+46706661362', 'Box 392', 'MalmÃ¶', 'Verisure Innovation AB', 'SE', '20123', '1', '1', '1', '1', '1', '1', '0'),
(166, 'marina.norden@opoint.se', 'Marina', 'NordÃ©n', '+ 46 (0) 702445466', 'RingvÃ¤gen 100', 'Stockholm', 'Opoint', 'SE', '104 62 ', '0', '1', '0', '0', '1', '1', '0'),
(167, 'simon.thompson@fqml.com', 'Simon', 'Thompson', '+44 207 612 8680', 'Tennyson House, 159-165 Great Portland Street', 'London', 'First Quantum Minerals', 'GB', 'W1W 5PA', '1', '1', '1', '1', '1', '0', '0'),
(168, 'soelebo@gmail.com', 'Stanley ', 'Elebo', '0722926397', '21 Fairwood Road, ', 'Parklands', 'Trendenet ', 'ZA', '7441', '1', '1', '1', '1', '1', '1', '0'),
(169, 'pranay.dave@keyrus.com', 'Pranay', 'Dave', '33760707202', '155 rue Anatole', 'Levallois-Perret', 'Keyrus', 'FR', '75001', '1', '1', '1', '1', '1', '0', '0'),
(170, 'nicolejeruto2@gmail.com', 'Nicole', 'Kilach', '254726942252', 'P.O BOX 7054', 'Eldoret', 'OneConnect Technologies', 'KE', '30100', '1', '1', '1', '1', '1', '1', '0'),
(171, 'marco.scheepmaker@sap.com', 'Marco', 'Scheepmaker', '+31651201285', 'Amerikastraat 10', 'Den Bosch', 'SAP', 'NL', '5223DG', '1', '1', '1', '1', '1', '0', '0'),
(172, 'gianni.rumi@volkswagengroup.it', 'Giovambattista', 'Rumi', '+39.0458091152', 'viale Gumpert, 1', 'Verona', 'Volkswagen Group Italia', 'IT', '37137', '0', '0', '1', '0', '1', '1', '0'),
(173, 'jgarciav@prisa.com', 'javier', 'garcia vizcaino', '0034913301183', 'Miguel Yuste, 42', 'Madrid', 'Prisa', 'ES', '28037', '1', '1', '1', '1', '1', '1', '0'),
(174, 'globaltech4u@yahoo.com', 'Rizwan', 'Mohammed', '923332373122', 'C-62, CMCHS, KDA 7, near AKUH, Karachi 74800, Pakistan', 'Karachi', 'GTS Solutions', '', '74800', '1', '1', '1', '1', '1', '1', '0'),
(175, 'laurent.fretard@laposte.net', 'Laurent', 'FrÃ©tard', '33389779516', '1, rue Denis Papin', 'Colmar', 'Koyo Bearings - JTEKT group', 'FR', '68000', '1', '1', '1', '1', '1', '1', '0'),
(176, 'accermohamed@yahoo.com', 'accer', 'mohamed', '+20301010065992', 'Alexandria', 'Alexandria', 'Marketing', 'EG', '+203', '1', '1', '1', '1', '1', '1', '0'),
(177, 'huseyin.sungur@boydak.com', 'hÃ¼seyin ', 'sungur', '+905365440230', 'kayseri', 'turkey/kayseri', 'boydak holding', 'TR', '38090', '1', '1', '1', '1', '1', '1', '1'),
(181, 'alexis.fouquier@sap.com', 'Alexis', 'fouquier', '07787154910', 'vanwall business park', 'maidenhead', 'SAP', 'GB', 'SL6 4UB', '1', '1', '1', '1', '1', '0', '0'),
(203, 'seyieniayewu@yahoo.com', 'Oluseyi', 'Eniayewu', '469-2260272', 'P O Box 110627', 'Carrollton, Texas', 'Self Employed', 'US', '75011', '1', '1', '1', '1', '1', '1', '0'),
(204, 'wagdy_sm@yahoo.com', 'wagdy ', 'samy', '96565803161', 'salmayia', 'kuwait', 'diyar', 'KW', '80000', '1', '1', '1', '1', '1', '1', '0'),
(205, 'smet.gert@gmail.com', 'Gert', 'Smet', '+32476283028', 'Klaasdekkerstraat 12', 'Beveren-Waas', 'KONE', 'BE', '9120', '1', '0', '1', '1', '1', '1', '0'),
(207, 'toon.eysakkers@gmail.com', 'Toon', 'Eysakkers', '0032 495 224 363', 'Kanarieweg 6', 'Keerbergen', 'Babam Bites', 'BE', '3140', '1', '1', '1', '1', '1', '1', '0'),
(208, 'dargen64@yahoo.it', 'Dario', 'Gentile', '0654955849', 'via dell''Esperanto, 71', 'Rome', 'Capgemini Italia', 'IT', '00144', '1', '1', '1', '1', '1', '1', '0'),
(209, 'thierry.renier@sap.com', 'Thierry', 'Renier', '+32486136707', 'SAP Belgium', 'Brussels', 'SAP', 'BE', '1170', '1', '1', '1', '1', '0', '1', '0'),
(210, 'didier.heck@sap.com', 'Didier', 'Heck', '0496576190', 'av des Olympiades 2', 'Evere', 'SAP', 'BE', '1140', '1', '1', '1', '1', '1', '0', '0'),
(211, 'didier.heck@sap.com', 'Didier', 'Heck', '0496576190', 'av des Olympiades 2', 'Evere', 'SAP', 'BE', '1140', '1', '1', '1', '1', '1', '0', '0'),
(213, 'thierry.bruyere@hp.com', 'Thierry', 'Bruyeer', '+32498945284', 'Hermeslaan 1A', 'Diegem', 'HP', 'BE', '1831', '1', '1', '1', '1', '1', '0', '0'),
(214, 'vincent.bronner@sap.com', 'Vincent', 'BRONNER', '+33611998685', '157-159 rue Anatole France', 'Levallois-Perret Cedex', 'EMEA Services Solution Sales', 'FR', '92309', '1', '1', '1', '1', '1', '1', '0'),
(215, 'chris.ofoezie@schibsted.se', 'Chris', 'Ofoezie', '+46761350765', 'VÃ¤stra JÃ¤rnvÃ¤gsgatan 21', 'Stockholm', 'Schibsted Centralen', 'SE', '11164', '1', '0', '1', '1', '1', '0', '0'),
(216, 'tamas.szirtes@intenzz.nl', 'Tamas', 'Szirtes', '+31621106317', 'Amersfoortsestraat 78', 'Soesterberg', 'Intenzz Group', 'NL', '3769 AL', '1', '1', '1', '1', '1', '1', '0'),
(217, 'pedro.guerreiro@axa-groupsolutions.com', 'Pedro', 'Guerreiro', '+351 218547756', 'Avenida Infante D. Henrique, Lote 320, Porta 2, 5ÂºPiso', 'Lisboa', 'AXA', 'PT', '1800-220', '1', '1', '1', '1', '1', '1', '0'),
(218, 'leonie.byrne@sap.com', 'Leonie ', 'Byrne', '00353872863913', 'SAP SSC Ireland LTD., 1012-1014 Kingswood Ave. ', 'CityWest Business Campus', 'AGS SAP', 'IE', 'Dubin24', '1', '1', '1', '1', '1', '1', '0'),
(219, 'bmarques747@gmail.com', 'Bruno ', 'Marques', '969443528', 'Av-AmÃ©lia Rey ColaÃ§o NÂº 7, 3 DTO', 'Corroios', 'Insurance Industry', 'PT', '2855-701', '1', '1', '1', '1', '1', '1', '0'),
(220, 'dirk-jan.slingenberg@sap.com', 'Dirk-Jan', 'Slingenberg', '+31 6 51 30 20 95   ', 'Amerikastraat 10  ', '''s-Hertogenbosch ', 'SAP', 'NL', '5232 BE ', '0', '1', '0', '0', '0', '1', '0'),
(221, 'antonina.santos@sonaeindustria.com', 'Antonina', 'Santos', '+351220100657', 'Lugar do Espido, Via Norte - Apartado 1129', 'Maia', 'Sonae Industria', 'PT', '4471-909 MAIA', '1', '1', '1', '1', '1', '1', '0'),
(222, 'jevgeni.suslov@gmail.com', 'Evgeny', 'Suslov', '+358503839450', 'Karakaari 10 ', 'Espoo', 'TCS', 'FI', '02610', '1', '1', '1', '1', '1', '1', '0'),
(223, 'matthew.stapleton@sap.com', 'matthew', 'stapleton', '+35314717280', 'citywest dublin', 'dublin', 'sap', 'IE', 'none', '1', '1', '1', '1', '1', '1', '0'),
(224, 'ANAND.REDDY@KPIT.com', 'Anand', 'Reddy', '4082031215', '655 S Fair Oaks Ave', 'Sunnyvale', 'KPIT', 'US', '94086', '1', '1', '1', '1', '1', '1', '0'),
(225, 'khani.ramatlo@sap.com', 'Khani', 'Ramatlo', '+27112356000', '1 Woodmead drive', 'Johannesburg', 'SAP', 'ZA', '2000', '1', '1', '1', '1', '1', '1', '0'),
(226, 'avish.narandas@gmail.com', 'Avish', 'Narandas', '0845554319', '94 New Road', 'Johannesburg', 'SAP', 'ZA', '1686', '1', '1', '1', '1', '1', '1', '0'),
(227, 'gabriel.andrews@sap.com', 'Gabriel', 'Andrews', '0027787429217', '4 Waterford Close ', 'Cape Town', 'SAP Africa', 'ZA', '7441', '1', '1', '1', '1', '1', '0', '0'),
(228, 'noelia.soleres@sap.com', 'NoÃ¨lia', 'Soleres', '0034934833500', 'Josep Pla 2', 'Barcelona', 'SAP', 'ES', '08019', '1', '1', '1', '1', '1', '1', '0'),
(229, 'michael_amani@hotmail.com', 'Amani', 'Michael', '0628039699', 'Rosa Spierlaan 32', 'Amstelveen ', 'Vrije Universiteit Student', 'NL', '1187PE', '1', '1', '0', '0', '0', '1', '0'),
(230, 'ines.abraham@sap.com', 'Ines', 'Abraham', '015157118016', 'Hasso Plattner Ring', 'Walldorf', 'SAP Deutschland SE&Co.KG', 'DE', '69190', '1', '1', '1', '1', '1', '0', '0'),
(231, 'thierry.donnadieu@sap.com', 'Thierry', 'Donnadieu', '+33141252122', '157-159, rue Anatole France ', 'Levallois-Perret', 'SAP Services', 'FR', '92309 ', '1', '1', '0', '0', '1', '0', '0'),
(232, 'bruno.lallement@honeywell.com', 'Bruno', 'LALLEMENT', '+33329813000', 'ZI inova 3000', 'Thaon Les Vosges', 'HOneywell ', 'FR', '88155', '1', '1', '1', '1', '1', '0', '0'),
(233, 'richard.mooney@sap.com', 'Richard', 'Mooney', '+353879621295', 'Waterside Building, Citywest', 'Dublin', 'SAP', 'IE', 'n/a', '1', '1', '1', '1', '1', '1', '0'),
(234, 'eddy.reimerink@sap.com', 'Eddy', 'Reimerink', '+31 6 108 03 774', 'Amerikastraat 10', '''s-Hertogenbosch', 'SAP The Netherlands', 'NL', '5232 BE', '1', '0', '0', '0', '1', '1', '0'),
(235, 'ajay.arya@jumbo.ae', 'Ajay', 'Arya', '0097143367999', 'P.O.Box:3426', 'Dubai', 'Jumbo Electronics', 'AE', '3426', '1', '1', '1', '1', '1', '1', '0'),
(236, 'mi_sheta@hotmail.com', 'Mohamed', 'Sheta', '+201223582680', 'Maadi, Cairo - Egypt', 'Cairo', 'Gozour', 'EG', '12612', '1', '1', '1', '1', '1', '1', '0'),
(237, 'ersan@hisbim.com', 'Ersan', 'Gurdogan', '+902222362194', 'Teknoloji Bulvari ATAP Yazilimkule', 'Eskisehir', 'Hisbim Information and Innovation Center', 'TR', '26110', '1', '1', '1', '1', '1', '1', '0'),
(238, 'colin.campbell@uk.hjheinz.com', 'Colin', 'Campbell', '07736572244', 'Spring Road', 'Wigan', 'HJ Heinz', 'GB', 'WN5 0JL', '1', '1', '1', '1', '1', '0', '0'),
(239, 'carolina.fernandes@pt.ibm.com', 'Maria Carolina Magusteiro', 'Fernandes', '000351 915602159', 'Rua Nova dos Mercadores, NÂº 25 - 3Âº B', 'Lisboa', 'IBM', 'PT', '1990-178', '1', '0', '1', '1', '1', '1', '0'),
(240, 'scottyjuk@gmail.com', 'Scott', 'Jackson', '+353868160906', 'Pruglish, Keshcarrigan', 'Carrick on Shannon', 'HP / Accomplish Consulting Ltd', 'IE', 'EIRE', '1', '1', '1', '1', '1', '1', '0'),
(241, 'russell.plummer@kcom.com', 'Russell', 'Plummer', '01924 888888', 'Melbourne House', 'Wakefield', 'KCOM Group plc', 'GB', 'Wf2 0UG', '0', '0', '0', '1', '1', '1', '0'),
(242, 'g.dooley@cranfield.ac.uk', 'Gary', 'Dooley', '01234 752905', 'IT Department', 'Cranfield', 'Cranfield University', 'GB', 'MK43 0AL', '1', '0', '1', '0', '0', '0', '0'),
(243, 'grinaldi@its.jnj.com', 'Gianluca', 'Rinaldi', '+39 06 91 19 42 93', 'Via del Mare, 56 ', 'Pratica di Mare (RM)', 'Johnson & Johnson Medical SpA', 'IT', '00040', '1', '1', '1', '1', '1', '1', '0'),
(244, 'githaga@yahoo.com', 'Simon', 'Muchiri', '254720681749', 'PO Box 47210 ', 'Nairobi', 'Kenyatta University', 'KE', '00100', '1', '1', '1', '1', '1', '0', '0'),
(245, 'mustafa.cikrikci@ingbank.com.tr', 'mustafa sabri', 'cikrikci', '905308347085', 'umraniye', 'Istanbul', 'Ingbank', 'TR', '34768', '1', '1', '1', '1', '1', '1', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;