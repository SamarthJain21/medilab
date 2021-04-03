-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 11:50 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medic`
--

-- --------------------------------------------------------

--
-- Table structure for table `emergency`
--

CREATE TABLE `emergency` (
  `mail` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phn` varchar(13) NOT NULL,
  `addr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emergency`
--

INSERT INTO `emergency` (`mail`, `name`, `phn`, `addr`) VALUES
('', '', '', ''),
('a@a', '', '', ''),
('aa@5ss', '', '', ''),
('AA@A', '', '', ''),
('abc@def@ff', 'samarth', '95925', 'djiifjicof'),
('abccc@gmail.com', '', '', ''),
('ccc@cc', 'aaaa', '5555', '55ddd'),
('fff@1234', '', '', ''),
('jainsamarth786@gmail.comdd', 'div', '9598888', '34ffff'),
('jjjjjhhhkkkkk@gmail.com', '', '', ''),
('nnn@nnn', 'rrttt', '4445554', 'gg655g'),
('rrrrr@rrrrrrr', 'rr3r', '', ''),
('sss@FFf', '', '', ''),
('sss@FFff', '', '', ''),
('sss@sss', 'jjj', '88888', '88hhhh'),
('ttt@yyy', 'qwerghnm', '85296', '234567456'),
('zxc@ccc', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `mail` varchar(50) NOT NULL,
  `cb` varchar(7) NOT NULL,
  `dis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`mail`, `cb`, `dis`) VALUES
('hhhh@hhhhhh', 'c1', 'hhh,hhh,jjj,jih');

-- --------------------------------------------------------

--
-- Table structure for table `pers`
--

CREATE TABLE `pers` (
  `first` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `phn` varchar(13) NOT NULL,
  `gender` varchar(7) NOT NULL,
  `addd` varchar(100) NOT NULL,
  `pin` int(7) NOT NULL,
  `aadhar` varchar(13) NOT NULL,
  `dob` date NOT NULL,
  `blood` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pers`
--

INSERT INTO `pers` (`first`, `last`, `mail`, `pass`, `phn`, `gender`, `addd`, `pin`, `aadhar`, `dob`, `blood`) VALUES
('', '', '', 'kkjjJJJJjj', '', 'male', '', 0, '', '0000-00-00', '-sele'),
('aa', 'aa', 'a@a', 'aa', '', '', '', 0, '', '0000-00-00', '-sele'),
('aa', '', 'aa@5ss', '4254wwwSSs', '', '', '', 0, '', '0000-00-00', '-sele'),
('', '', 'AA@A', 'AA', '', '', '', 0, '', '0000-00-00', '-sele'),
('', '', 'afg@mm', '', '', '', '', 0, '', '0000-00-00', '-sele'),
('', '', 'ccc@cc', '', '', '', '', 0, '', '0000-00-00', '-sele'),
('eeee', 'eeeee', 'eeeee@ee', 'ee', '88888', '', '', 0, '', '2021-04-20', ''),
('', '', 'fff@1234', 'rrr', '', '', '', 0, '', '0000-00-00', '-sele'),
('', '', 'jjjjjhhhkkkkk@gmail.com', 'jjjjj', '', 'male', '', 0, '', '0000-00-00', '-sele'),
('', '', 'nnn@nnn', 'iii', '', 'male', '', 0, '', '0000-00-00', 'B-'),
('', '', 'okkkmmm@hnmm', '', '', '', '', 0, '', '0000-00-00', 'B-'),
('', '', 'okok/@lok', '', '', 'male', '', 0, '', '0000-00-00', '-sele'),
('', '', 'rrrrr@rrrrrrr', 'rrrrrrr', '', 'others', 'rr', 0, '', '0000-00-00', '-sele'),
('ss', 'ff', 'sss@FFf', 'ffffJffJFff', '', '', '', 0, '', '0000-00-00', '-sele'),
('esf', 'jain', 'sss@FFff', 'qwertydf', '', 'male', '', 0, '', '0000-00-00', '-sele'),
('ssssss', 'sss', 'sss@sss', 'mmmm', '', 'male', '', 0, '', '0000-00-00', '-sele'),
('wqw', 'aaaaaaa', 'ttt@yyy', '', '', 'others', '', 0, '', '0000-00-00', 'A-'),
('', '', 'zxc@ccc', '', '', 'female', '', 0, '', '0000-00-00', ''),
('abc', 'def', 'mail@mail', '', '9999999999', 'male', 'address', 141002, '111111111111', '2001-03-22', 'B+'),
('Samarth', 'jain', 'jainsamarth786@gmail.comdd', '', '959595', 'male', 'jaiajaj', 141100, '1212121', '2021-03-02', 'A-'),
('abc', 'def', 'abc@def', '', '9999999999', 'male', '14ffff', 141002, '121212121', '2000-02-12', 'A+'),
('Samarth', 'jain', 'abccc@gmail.com', '', '959222222', 'male', 'hjjjj78', 141100, '123456', '2015-12-29', 'A-'),
('', '', 'zzz@zzz', '', '', 'male', '', 0, '8525', '0000-00-00', 'A+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emergency`
--
ALTER TABLE `emergency`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `pers`
--
ALTER TABLE `pers`
  ADD PRIMARY KEY (`aadhar`,`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
