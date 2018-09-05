-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 05, 2018 at 04:32 AM
-- Server version: 5.6.39-83.1
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tenison_reportdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `backbonedb`
--

CREATE TABLE `backbonedb` (
  `id` int(11) NOT NULL,
  `summary` text NOT NULL,
  `fault` text NOT NULL,
  `solution` text NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `year` year(4) NOT NULL,
  `Cart` text NOT NULL,
  `subcart` text NOT NULL,
  `status` varchar(11) NOT NULL,
  `area` text NOT NULL,
  `empuser` text,
  `apvuser` text,
  `superuser` text,
  `apvl_status` int(11) NOT NULL DEFAULT '0',
  `apvl_comment` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backbonedb`
--

INSERT INTO `backbonedb` (`id`, `summary`, `fault`, `solution`, `date`, `time`, `year`, `Cart`, `subcart`, `status`, `area`, `empuser`, `apvuser`, `superuser`, `apvl_status`, `apvl_comment`) VALUES
(254, 'Updated - Updated - Updated - NDB TX1', 'Ksi NDB TX1 unserviceable due to high VSWR', 'Solved', '2018-07-16', '12:58:24', 2018, 'Weather System', '', 'Solved', 'Kotoka', 'Lawrence Sowah', NULL, 'Jonathan K. Arthur', 0, NULL),
(244, 'LLZ  Alarms @ Kumasi', 'Pre Alarm On the NF RF Level', '------', '2018-07-16', '10:36:23', 2018, 'Navigation', 'Instrument Landing System (ILS)', 'Solved', 'Kumasi', 'Ebenezer Lartey', 'Admin', NULL, 1, ''),
(246, 'Updated - vsat block N failure', 'Fault', 'solved ', '2018-07-16', '11:23:06', 2018, 'Communication', 'Very Small Aperture Terminal (VSAT)', 'Solved', 'Kumasi', 'Ebenezer Lartey', 'Osei-Owusu Yaw Ofosu', 'Osei-Owusu Yaw Ofosu', 1, 'All logs checked '),
(251, 'NDB TX1', 'Ksi NDB TX1 unserviceable due to high VSWR', '-', '2018-07-16', '12:05:28', 2018, 'Navigation', 'Instrument Landing System (ILS)', 'Pending', 'Kumasi', 'Lawrence Sowah', NULL, NULL, 0, NULL),
(247, 'Updated - Updated - vsat block N failure', 'Fault', 'solved ', '2018-07-16', '11:37:43', 2018, 'Weather System', '', 'Solved', 'Kumasi', 'Ebenezer Lartey', NULL, 'Admin', 0, NULL),
(248, 'Updated - Updated - vsat block N failure', 'Fault', 'solved ', '2018-07-16', '11:38:46', 2018, 'Communication', 'Veryhigh Frequency Radios (VHF)', 'Solved', 'Kotoka', 'Ebenezer Lartey', NULL, 'Admin', 0, NULL),
(249, 'Updated - VSAT BUC-B FAULT', 'ALARM: POWER AMPLIFIER (PA)', '', '2018-07-16', '11:54:09', 2018, 'Communication', 'Very Small Aperture Terminal (VSAT)', 'Solved', 'Kumasi', 'Ebenezer Lartey', NULL, 'Admin', 0, NULL),
(250, 'Correction on Error spread', 'CVOR @ Kumasi', 'All parameters and sectors were checked and re-aligned ', '2018-07-16', '11:55:17', 2018, 'Navigation', 'Instrument Landing System (ILS)', 'Solved', 'Kumasi', 'Ebenezer Lartey', 'Admin', NULL, 1, 'VSAT BUC-B A was replaced by POLARSAT on 10th July 2018'),
(253, 'Updated - Updated - NDB TX1', 'Ksi NDB TX1 unserviceable due to high VSWR', 'Solved', '2018-07-16', '12:33:21', 2018, 'Navigation', 'Instrument Landing System (ILS)', 'Solved', 'Kumasi', 'Lawrence Sowah', 'Admin', 'Admin', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `section` text NOT NULL,
  `header` text NOT NULL,
  `content` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `section`, `header`, `content`) VALUES
(1, 'coms', 'ATSEP', 'Air Traffic Safety Electronics Personnel (ATSEP) is the ICAO-recognized terminology for personnel involved in the operation, maintenance and installation of a CNS/ATM system'),
(2, 'sur', 'NOTAM', 'To  ensure   prompt    distribution      of  information   of  temporary   nature   and  of  short   duration   or operationally   significant   permanent   changes   or  temporary   changes   of  long  duration   at  short  notice NOTAM  is originated.   NOTAM, an acronym for Notice to Airmen, are purely text messages transmitted over     the    Aeronautical      Fixed     Service     (AFS),     predominantly      via    the    Aeronautical      Fixed Telecommunications    Network (AFTN).'),
(3, 'coms', 'COMMUNICATION', 'Communication is the exchange of thoughts, messages, or information, as by speech, visuals, signals, writing, or behaviour.  \r\nCommunication requires a sender, a message, and a recipient, although the receiver need not be present or aware of the sender\'s intent to communicate at the time of communication; thus communication can occur across vast distances in time and space. Communication requires that the communicating parties share an area of communicative commonality. '),
(4, 'coms', 'Air – Ground or Ground - Air communication ', 'Communication between aircraft and stations or locations on the surface of the earth.  '),
(5, 'coms', 'Air – Air communication ', 'Communication on a designated air-to-air channel to enable aircraft engaged in flights over remote and oceanic areas out of range of VHF ground stations to exchange necessary operational information and to facilitate the resolution of operational problems.  '),
(6, 'coms', 'Ground - Ground communication ', 'Communication between stations or locations on the surface of the earth. '),
(7, 'coms', 'ATIS ', 'ATIS stands for Automatic Terminal Information Service of an airport. The continuous message service provides safety-critical information for pilots preparing their landing on, or departure from that airport. An ATIS message consists of a standardised number of data about the local status of aerodrome and meteorological conditions on and around an aerodrome. '),
(8, 'coms', 'Transmitter', 'Transmitters radiate modulated radio signals of sufficient power and of highly stable carrier frequencies.  \r\nFor ATC VHF communication amplitude modulated radio waves with vertical polarization are used. \r\nThe audio part (microphone and audio amplifier) is at the controllers working position. \r\nThe transmitter and the antenna are placed at elevated sites as buildings, hills or mountains. \r\n'),
(9, 'nav', 'NAVIGATION', 'Navigation   is the  process  of determination   of the  aircraft\'s   position,  controlling   the  movement   of the aircraft  from  one place to another  and planning  of the next route. In the beginning  of the aviation  visual  navigation  was  used. Visual  navigation  is done by observing terrain  and ground  objects  and comparing   them with  a map.'),
(10, 'nav', 'VOR', 'The principle on which the VOR operates is based on the measurement of the phase angle of two 30 Hz signals radiated by the station. One signal (reference signal) is radiated with the same phase in all directions. For the second 30 Hz signal (variable signal), the phase relationship relative to the first signal changes as a function of the azimuth. The electric phase angle measured in the airborne receiver corresponds to the azimuth angle.\r\n\r\nUsing the VOR receiver installed in his aircraft the pilot is able to obtain the following information from a VOR radio navigation installation\r\n'),
(11, 'nav', 'INSTRUMENT LANDING SYSTEM (ILS)', 'The ILS means Instrument Landing System. It is an instrument Approach Aid to a visual landing, which is presented to and interpreted by the pilot in his aircraft. It is a short range Navigational aids. The function of the Instrument Landing System (ILS) is to provide the pilot of Landing Aircraft guidance to and along the surface of the runway. This guidance must be of sufficient integrity to ensure that each landing has a high probability of success. '),
(12, 'sur', 'Automatic Dependent Surveillance   - Broadcast', 'Automatic Dependent Surveillance   - Broadcast (ADS-B) is a surveillance   technique that allows the transmission   of parameters, such as position and identification, via a broadcast mode data link for use by any air and/or ground users. Each ADS-B emitter periodically broadcasts its position and other data provided by the onboard aircraft avionic systems. Any user, either airborne or ground-based, within range of the emitter may choose to receive and process the information.'),
(13, 'sur', 'Automatic Dependent Surveillance - Contract', 'Automatic Dependent Surveillance - Contract(ADS-C) is a surveillance technique in which aircraft automatically  provide, via a data link,  data such as position and identification, derived from the onboard aircraft avionic systems.   '),
(14, 'sur', 'Surveillance Display Processing System (SDPS)', 'Surveillance Display Processing and Distribution Surveillance Display  Processor and Server systems(SDPS) have  nothing to do with the collection of data from aircraft but are essential for the processing of the data and its display  to the controller.');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `emp_name` text NOT NULL,
  `emp_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `emp_name`, `emp_id`) VALUES
(5, 'Bless Kevin Adjei', '2838'),
(6, 'Sadiq Osman', '2671'),
(7, 'Henry N.K Nartey', '2865'),
(8, 'Isaac Kweku Boakye', '2669'),
(9, 'Solomon Agoe', '2835'),
(10, 'Charles S.K Adoboe', '1459'),
(11, 'Benjamin NT Kwao', '2837'),
(12, 'Bawa Marafa A.S', '2819'),
(13, 'Michael Bless Gyandoo', '2813'),
(14, 'Theophilus Joe Quaye', '2809'),
(15, 'Martin Kwasi Gozey', '2817'),
(16, 'Essuman Bassaw', '2811'),
(17, 'Samuel Tandoh', '2269'),
(18, 'David Annan Mensah', '2862'),
(19, 'Edem Gayina', '2816'),
(20, 'Prosper Kwaku Dorlah', '2812'),
(21, 'Silvanus K.O Lamptey', '2839'),
(22, 'David Kwaku Celestin', '2815'),
(23, 'Anani Adanlete-Adjanoh', '2292'),
(24, 'Adams M. Mahama', '2909'),
(25, 'Mark E. Amedzro', '2823'),
(26, 'Benjamin Kunudji', '2821'),
(27, 'Benjamin Asiedu', '2810'),
(28, 'Ebenezer Lartey', '2712'),
(29, 'Bismark Atta Opoku', '2820'),
(30, 'FRANCIS ANYETEI AKOGYERAM', '1657'),
(33, 'Lawrence Sowah', '2814'),
(34, 'Benjamin Wireko Asibey', '2824'),
(35, 'Jonathan K Arthur', '2197!');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user` text NOT NULL,
  `Name` text NOT NULL,
  `pass` varchar(255) NOT NULL,
  `level` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `Name`, `pass`, `level`) VALUES
(15, 'admin', 'Admin', '$2y$12$XyYIDdoP1Sme//OLYyNJnugYGyM6nRKchaxH.LlKUKx/pRdvKOuJ6', 0),
(8, 'mit', 'Mit', '$2y$12$jXsyD0I6Lg2wVN1xvzqBqe2QE74DdCNulTSKKYrGNv7G8akB0.ztq', 0),
(23, 'osei123', 'Osei-Owusu Yaw Ofosu', '$2y$12$dpJByvdmh3RauySsCZBKjuY27aPgszh32sL6QJrrKuCfjbVBGPgb6', 1),
(24, 'Nat-kofi', 'Jonathan K. Arthur', '$2y$12$qrOtrzktMz38xxy0MBf51e1rERcRH.A1IKr1mFeKxqJWn61FCH9xe', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `backbonedb`
--
ALTER TABLE `backbonedb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `backbonedb`
--
ALTER TABLE `backbonedb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=255;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
