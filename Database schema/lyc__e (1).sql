-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 12:10 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lycée`
--

-- --------------------------------------------------------

--
-- Table structure for table `classe`
--

CREATE TABLE `classe` (
  `idClasse` int(11) NOT NULL,
  `nomClasse` text NOT NULL,
  `nombreE` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classe`
--

INSERT INTO `classe` (`idClasse`, `nomClasse`, `nombreE`) VALUES
(100, '4 scTch 4', 5),
(254, '2 sc 4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `eleve`
--

CREATE TABLE `eleve` (
  `codeEleve` int(11) NOT NULL,
  `nomEleve` text DEFAULT NULL,
  `prenomEleve` text DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `specialité` text DEFAULT NULL,
  `idClasse` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `eleve`
--

INSERT INTO `eleve` (`codeEleve`, `nomEleve`, `prenomEleve`, `age`, `specialité`, `idClasse`) VALUES
(1, '1', '1', 1, 'Pas de Spécialité', 100),
(123, '123', '23', 12, 'Sciences Informatiques', 100),
(5784, 'Zallouz', 'naaki', 22, 'Sciences Informatiques', 100),
(8565, 'Physique', 'dadad', 14, 'Lettres', 100),
(8582, 'Magherbi', 'Mohamed', 22, 'Mathématiques', 254),
(123456, 'Zallouz', 'Mohamed hedi', 14, 'Sciences Techniques', 100);

-- --------------------------------------------------------

--
-- Table structure for table `enseignement`
--

CREATE TABLE `enseignement` (
  `ID` int(11) NOT NULL,
  `CIN` int(11) NOT NULL,
  `codeM` int(11) NOT NULL,
  `idClasse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enseignement`
--

INSERT INTO `enseignement` (`ID`, `CIN`, `codeM`, `idClasse`) VALUES
(3, 14606601, 5789, 254),
(5, 3971537, 7548, 100),
(6, 14606601, 5784, 254),
(7, 14606601, 5789, 100),
(8, 3971537, 5789, 100);

-- --------------------------------------------------------

--
-- Table structure for table `horaire`
--

CREATE TABLE `horaire` (
  `idH` int(11) NOT NULL,
  `CIN` int(11) NOT NULL,
  `codeM` int(11) DEFAULT NULL,
  `idClasse` int(11) DEFAULT NULL,
  `nombreH` double DEFAULT NULL,
  `DateModif` timestamp NOT NULL DEFAULT current_timestamp(),
  `jour` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `horaire`
--

INSERT INTO `horaire` (`idH`, `CIN`, `codeM`, `idClasse`, `nombreH`, `DateModif`, `jour`) VALUES
(162, 3971537, 7548, 100, 3, '2023-05-16 06:19:33', 's1/7548/100:s2/7548/100:/:/:,s1/7548/100:/:/:/:,/:/:/:/:,/:/:/:/:,/:/:/:/:,/:/:/:/:'),
(163, 3971537, 7548, 100, 2, '2023-05-16 06:19:43', 's1/7548/100:s2/7548/100:/:/,s1/7548/100:/:s3/7548/100:s4/7548/100,/:/:/:/,/:/:/:/,/:/:/:/,/:/:/:/'),
(164, 3971537, 7548, 254, 2, '2023-05-16 06:19:53', 's1/7548/100:s2/7548/100:/:/,s1/7548/100:/:s3/7548/100:s4/7548/100,/:/:/:/,/:/:/:/,/:/:/:/,/:/:s3/7548/254:s4/7548/254'),
(165, 14606600, NULL, NULL, 2, '2023-05-16 06:20:37', '::::,::::,::s3:s4:,::::,::::,::::'),
(166, 14606600, NULL, NULL, 5, '2023-05-16 06:20:45', '::::,::::,::s3:s4:,s1::::,s1:s2:::,s1:s2:::'),
(167, 3971537, 1254, 254, 1, '2023-05-16 06:20:54', 's1/7548/100:s2/7548/100:/:/,s1/7548/100:/:s3/7548/100:s4/7548/100,/:/:/:s4/1254/254,/:/:/:/,/:/:/:/,/:/:s3/7548/254:s4/7548/254'),
(168, 14606608, NULL, NULL, 5, '2023-05-17 09:40:15', 's1:s2:::,::::,::::,::::,::s3::,:s2:s3::'),
(170, 3971537, 1254, 100, 2, '2023-05-18 11:24:23', 's1/7548/100:s2/7548/100:/:/,s1/7548/100:/:s3/7548/100:s4/7548/100,/:/:/:s4/1254/254,/:/:/:/,s1/1254/100:s2/1254/100:/:/,/:/:s3/7548/254:s4/7548/254'),
(172, 3971537, 1254, 100, 2, '2023-05-18 11:26:23', 's1/1254/100:s2/1254/100:/:/,s1/7548/100:/:s3/7548/100:s4/7548/100,/:/:/:s4/1254/254,/:/:/:/,s1/1254/100:s2/1254/100:/:/,/:/:s3/7548/254:s4/7548/254'),
(173, 3971537, 7548, 100, 2, '2023-05-18 11:26:40', 's1/7548/100:s2/7548/100:/:/,s1/7548/100:/:s3/7548/100:s4/7548/100,/:/:/:s4/1254/254,/:/:/:/,s1/1254/100:s2/1254/100:/:/,/:/:s3/7548/254:s4/7548/254'),
(175, 14606601, 5789, 254, 3, '2024-03-28 10:44:37', '/:/:/:/:,/:/:/:/:,/:/:/:s4/5789/254:,/:/:/:/:,/:/:/:s4/5789/254:,/:s2/5789/254:/:/:'),
(176, 14606601, 5784, 100, 2, '2024-03-28 10:45:03', 's1/5784/100:/:/:/,/:s2/5784/100:/:/,/:/:/:s4/5789/254,/:/:/:/,/:/:/:s4/5789/254,/:s2/5789/254:/:/');

-- --------------------------------------------------------

--
-- Table structure for table `matiere`
--

CREATE TABLE `matiere` (
  `codeM` int(11) NOT NULL,
  `nomM` text DEFAULT NULL,
  `coeff` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `matiere`
--

INSERT INTO `matiere` (`codeM`, `nomM`, `coeff`) VALUES
(1254, 'Chimie', 2),
(5784, 'Développement Web 2', 3),
(5789, 'Développement Web', 2.5),
(7548, 'Physique', 4);

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `idNote` int(11) NOT NULL,
  `ID` int(11) DEFAULT NULL,
  `codeEleve` int(11) DEFAULT NULL,
  `noteDC` double DEFAULT NULL,
  `noteDS` double DEFAULT NULL,
  `noteTP` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`idNote`, `ID`, `codeEleve`, `noteDC`, `noteDS`, `noteTP`) VALUES
(46, 5, 5784, 15, 11, 41),
(47, 5, 8565, 15, 2.5, 55.5),
(48, 5, 123456, 4, 5.6, 0),
(49, 7, 5784, 25, 12, 1),
(50, 7, 8565, 245, 11, 1.25),
(51, 7, 123456, 25, 56, 0.66),
(52, 6, 8582, 10, 30, 0),
(53, 3, 8582, 10, 30, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `type` text NOT NULL,
  `sujet` text NOT NULL,
  `notif` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `type`, `sujet`, `notif`) VALUES
(1, 'Enseignant', 'dada da', 'dadada'),
(2, 'Surveillant', 'xqxqxq', 'winek labes bro\r\nok ay');

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `CIN` int(11) NOT NULL,
  `nomP` text DEFAULT NULL,
  `prenomP` text DEFAULT NULL,
  `grade` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `num_telephone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`CIN`, `nomP`, `prenomP`, `grade`, `password`, `num_telephone`) VALUES
(123, 'azer', 'azer', 'Surveillant', 'azer', 2021),
(3971537, 'Gaaloul', 'Sarra', 'Enseignant', 'gaaloul1', 92261252),
(14606600, 'Magherbi', 'Mohamed', 'Directeur', 'mohamed1234', 20526895),
(14606601, 'Magherbi', 'Mohamed hedi', 'Enseignant', 'mohamed1234', 20526895),
(14606608, 'Magherbi', 'Mohamed hedi', 'Surveillant', 'mohamed1234', 20526895);

-- --------------------------------------------------------

--
-- Table structure for table `registre`
--

CREATE TABLE `registre` (
  `ID` int(11) NOT NULL,
  `idE` int(11) NOT NULL,
  `codeEleve` int(11) NOT NULL,
  `dateAbsence` timestamp NULL DEFAULT current_timestamp(),
  `nbrA` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registre`
--

INSERT INTO `registre` (`ID`, `idE`, `codeEleve`, `dateAbsence`, `nbrA`) VALUES
(57, 7, 5784, '2023-05-17 10:03:19', 2),
(58, 7, 8565, '2023-05-17 10:03:19', 2),
(59, 7, 8565, '2023-05-17 10:03:30', 2),
(60, 7, 123456, '2023-05-17 10:03:30', 1),
(61, 6, 8582, '2023-05-17 10:03:38', 2),
(62, 3, 8582, '2023-05-17 10:03:47', 1),
(63, 6, 8582, '2023-05-17 10:07:12', 2),
(64, 7, 1, '2023-05-18 11:36:26', 4),
(65, 7, 123, '2023-05-18 11:36:26', 3),
(66, 7, 1, '2023-05-18 11:36:48', 4),
(67, 7, 123, '2023-05-18 11:36:48', 3),
(68, 7, 1, '2023-05-18 11:37:57', 4),
(69, 7, 1, '2024-03-28 10:52:31', 4),
(70, 7, 123, '2024-03-28 10:52:31', 3),
(71, 7, 5784, '2024-03-28 10:52:31', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `classe`
--
ALTER TABLE `classe`
  ADD PRIMARY KEY (`idClasse`);

--
-- Indexes for table `eleve`
--
ALTER TABLE `eleve`
  ADD PRIMARY KEY (`codeEleve`),
  ADD KEY `idClasse` (`idClasse`);

--
-- Indexes for table `enseignement`
--
ALTER TABLE `enseignement`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CIN` (`CIN`),
  ADD KEY `codeM` (`codeM`),
  ADD KEY `idClasse` (`idClasse`);

--
-- Indexes for table `horaire`
--
ALTER TABLE `horaire`
  ADD PRIMARY KEY (`idH`),
  ADD KEY `codeM` (`codeM`),
  ADD KEY `CIN` (`CIN`),
  ADD KEY `idClasse` (`idClasse`);

--
-- Indexes for table `matiere`
--
ALTER TABLE `matiere`
  ADD PRIMARY KEY (`codeM`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`idNote`),
  ADD KEY `ID` (`ID`),
  ADD KEY `codeEleve` (`codeEleve`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`CIN`);

--
-- Indexes for table `registre`
--
ALTER TABLE `registre`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `idE` (`idE`),
  ADD KEY `codeEleve` (`codeEleve`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enseignement`
--
ALTER TABLE `enseignement`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `horaire`
--
ALTER TABLE `horaire`
  MODIFY `idH` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `idNote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registre`
--
ALTER TABLE `registre`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eleve`
--
ALTER TABLE `eleve`
  ADD CONSTRAINT `eleve_ibfk_1` FOREIGN KEY (`idClasse`) REFERENCES `classe` (`idClasse`);

--
-- Constraints for table `enseignement`
--
ALTER TABLE `enseignement`
  ADD CONSTRAINT `enseignement_ibfk_1` FOREIGN KEY (`CIN`) REFERENCES `personnel` (`CIN`),
  ADD CONSTRAINT `enseignement_ibfk_2` FOREIGN KEY (`codeM`) REFERENCES `matiere` (`codeM`),
  ADD CONSTRAINT `enseignement_ibfk_3` FOREIGN KEY (`idClasse`) REFERENCES `classe` (`idClasse`);

--
-- Constraints for table `horaire`
--
ALTER TABLE `horaire`
  ADD CONSTRAINT `horaire_ibfk_2` FOREIGN KEY (`codeM`) REFERENCES `matiere` (`codeM`),
  ADD CONSTRAINT `horaire_ibfk_3` FOREIGN KEY (`CIN`) REFERENCES `personnel` (`CIN`),
  ADD CONSTRAINT `horaire_ibfk_4` FOREIGN KEY (`idClasse`) REFERENCES `classe` (`idClasse`);

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `enseignement` (`ID`),
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`codeEleve`) REFERENCES `eleve` (`codeEleve`);

--
-- Constraints for table `registre`
--
ALTER TABLE `registre`
  ADD CONSTRAINT `registre_ibfk_1` FOREIGN KEY (`idE`) REFERENCES `enseignement` (`ID`),
  ADD CONSTRAINT `registre_ibfk_2` FOREIGN KEY (`codeEleve`) REFERENCES `eleve` (`codeEleve`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
