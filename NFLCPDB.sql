-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 01:10 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `NFLCPDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `C_ID` int(11) NOT NULL,
  `U_ID` int(11) NOT NULL,
  `Time/Date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fanteam`
--

CREATE TABLE `fanteam` (
  `FT_ID` int(11) NOT NULL,
  `T_ID` int(11) NOT NULL,
  `Team_Name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `G_ID` int(11) NOT NULL,
  `Team1` int(11) NOT NULL,
  `Team2` int(11) NOT NULL,
  `Time-date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `P_ID` int(11) NOT NULL,
  `T_ID` int(11) NOT NULL,
  `Name` int(11) NOT NULL,
  `U_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `T_ID` int(11) NOT NULL,
  `Name` int(11) NOT NULL,
  `Location` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `U_ID` int(11) NOT NULL,
  `Email` int(11) NOT NULL,
  `Password` int(11) NOT NULL,
  `Ft_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `votestally`
--

CREATE TABLE `votestally` (
  `V_ID` int(11) NOT NULL,
  `YT_ID` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ytcomp`
--

CREATE TABLE `ytcomp` (
  `YT_ID` int(11) NOT NULL,
  `U_ID` int(11) NOT NULL,
  `Yturl` int(11) NOT NULL,
  `TotalVotes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`C_ID`),
  ADD UNIQUE KEY `U_ID` (`U_ID`);

--
-- Indexes for table `fanteam`
--
ALTER TABLE `fanteam`
  ADD PRIMARY KEY (`FT_ID`),
  ADD UNIQUE KEY `T_ID` (`T_ID`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`G_ID`),
  ADD UNIQUE KEY `Team1` (`Team1`),
  ADD UNIQUE KEY `Team2` (`Team2`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`P_ID`),
  ADD UNIQUE KEY `T_ID` (`T_ID`),
  ADD UNIQUE KEY `U_ID` (`U_ID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`T_ID`),
  ADD UNIQUE KEY `Name` (`Name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`U_ID`),
  ADD UNIQUE KEY `Ft_id` (`Ft_id`);

--
-- Indexes for table `votestally`
--
ALTER TABLE `votestally`
  ADD PRIMARY KEY (`V_ID`),
  ADD UNIQUE KEY `YT_ID` (`YT_ID`);

--
-- Indexes for table `ytcomp`
--
ALTER TABLE `ytcomp`
  ADD PRIMARY KEY (`YT_ID`),
  ADD UNIQUE KEY `U_ID` (`U_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fanteam`
--
ALTER TABLE `fanteam`
  MODIFY `FT_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `G_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `P_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `U_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `votestally`
--
ALTER TABLE `votestally`
  MODIFY `V_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ytcomp`
--
ALTER TABLE `ytcomp`
  MODIFY `YT_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat`
--
ALTER TABLE `chat`
  ADD CONSTRAINT `chat_ibfk_1` FOREIGN KEY (`U_ID`) REFERENCES `user` (`U_ID`);

--
-- Constraints for table `fanteam`
--
ALTER TABLE `fanteam`
  ADD CONSTRAINT `fanteam_ibfk_1` FOREIGN KEY (`T_ID`) REFERENCES `team` (`T_ID`);

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`T_ID`) REFERENCES `player` (`T_ID`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Ft_id`) REFERENCES `fanteam` (`FT_ID`);

--
-- Constraints for table `votestally`
--
ALTER TABLE `votestally`
  ADD CONSTRAINT `votestally_ibfk_1` FOREIGN KEY (`YT_ID`) REFERENCES `ytcomp` (`YT_ID`);

--
-- Constraints for table `ytcomp`
--
ALTER TABLE `ytcomp`
  ADD CONSTRAINT `ytcomp_ibfk_1` FOREIGN KEY (`U_ID`) REFERENCES `user` (`U_ID`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
