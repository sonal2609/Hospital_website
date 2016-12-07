-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2016 at 04:05 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user` varchar(15) NOT NULL,
  `pass` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user`, `pass`) VALUES
('diksha', 'diksha'),
('nehal', 'nehal'),
('nishant', 'nishant'),
('sonal', 'sonal'),
('varda', 'varda');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `d_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `specilaisation` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`d_id`, `name`, `specilaisation`, `username`) VALUES
(1, 'Dr. Diksha Chaudhary', 'M.S.,M. Phil', 'diksha'),
(2, 'Dr. Nishant Bhatia', 'Cardiologist', 'nishant'),
(3, 'Dr. Sonal Kumar', 'Dermatologist', 'sonal'),
(4, 'Dr. Nehal Bansal', 'Gynaecologist', 'nehal'),
(5, 'Dr. Varda Khanna', 'Neurologist', 'varda');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `p_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `fathersname` varchar(20) NOT NULL,
  `age` varchar(2) NOT NULL,
  `sex` varchar(7) NOT NULL,
  `bloodgroup` varchar(3) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `phone` int(10) NOT NULL,
  `visited` varchar(3) NOT NULL,
  `doctor` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `symptoms` varchar(100) NOT NULL DEFAULT 'Not diagnosed',
  `treatment` varchar(100) NOT NULL DEFAULT 'Not diagnosed',
  `medicines` varchar(100) NOT NULL DEFAULT 'Not diagnosed',
  `d_date` date DEFAULT NULL,
  `bill` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`p_id`, `firstname`, `lastname`, `fathersname`, `age`, `sex`, `bloodgroup`, `email`, `address`, `phone`, `visited`, `doctor`, `date`, `symptoms`, `treatment`, `medicines`, `d_date`, `bill`) VALUES
(1, 'ashish', 'Ranjan', 'manal', '52', 'male', 'b+', 'sina@gmail.com', 'jaipur', 12454646, 'no', 'Dr. Sonal Kumar', '2016-11-16', 'fever', 'nima', 'pcm', '2016-11-22', 200),
(2, 'kunal', 'rao', 'hinger', '10', 'male', 'b+', 'asajkdh@gmail.com', 'himalaya', 462165456, 'no', 'Dr. Sonal Kumar', '2016-11-18', 'Not diagnosed', 'Not diagnosed', 'Not diagnosed', NULL, 0),
(3, 'hinjak', 'kumar', 'dsghds', '45', 'male', 'b+', 'kumarsonalmnit@gmail', 'aurbindo hostel,mnit campus,MNIT,malviya', 2147483647, 'no', 'Dr. Diksha Chaudhary', '2016-11-17', 'Not diagnosed', 'Not diagnosed', 'Not diagnosed', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pat_hosp`
--

CREATE TABLE `pat_hosp` (
  `p_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `fathersname` varchar(40) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `bloodgroup` varchar(8) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `visited` varchar(4) NOT NULL,
  `doctor` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `symptoms` varchar(100) NOT NULL DEFAULT 'Not diagnosed',
  `treatment` varchar(100) NOT NULL DEFAULT 'Not diagnosed',
  `medicines` varchar(100) NOT NULL DEFAULT 'Not diagnosed',
  `d_date` date DEFAULT NULL,
  `bill` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pat_hosp`
--

INSERT INTO `pat_hosp` (`p_id`, `firstname`, `lastname`, `fathersname`, `age`, `sex`, `bloodgroup`, `email`, `address`, `phone`, `visited`, `doctor`, `date`, `symptoms`, `treatment`, `medicines`, `d_date`, `bill`) VALUES
(2, 'kunal', 'rao', 'hinger', 10, 'male', 'b+', 'asajkdh@gmail.com', 'himalaya', 462165456, 'no', 'Sonal Kumar', '2016-11-18', 'Not diagnosed', 'Not diagnosed', 'Not diagnosed', NULL, 0),
(3, 'hinjak', 'kumar', 'dsghds', 45, 'male', 'b+', 'kumarsonalmnit@gmail.com', 'aurbindo hostel,mnit campus,MNIT,malviya nagar', 2147483647, 'no', 'Dr. Diksha Chaudhary', '2016-11-17', 'Not diagnosed', 'Not diagnosed', 'Not diagnosed', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `query`
--

CREATE TABLE `query` (
  `qid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` varchar(8) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `answer` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `query`
--

INSERT INTO `query` (`qid`, `name`, `age`, `sex`, `email`, `phone`, `address`, `message`, `answer`) VALUES
(1, 'anil', 20, 'Male', 'sdfghj', '96385', 'sasd', 'fghjkl', ''),
(2, 'ashok', 25, 'Male', 'sdfghj', '2345678', 'jainagar', 'Diabetes', 'jhVkjcx\r\n'),
(3, 'ankita', 27, 'Female', 'xhjhfahbk', '85274163', 'hillside', 'fever', 'pcm'),
(4, 'sumedha', 14, 'Female', 'gin@gmail.com', '75454', 'himalaya', 'fever', 'djkddhwk'),
(5, 'vardggha', 25, 'Female', 'cjhjgkwd', '93742', 'punjab', 'headache', 'hidhjbd');

-- --------------------------------------------------------

--
-- Table structure for table `reception`
--

CREATE TABLE `reception` (
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reception`
--

INSERT INTO `reception` (`user`, `pass`) VALUES
('sonal', 'sonal'),
('diksha', 'diksha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `pat_hosp`
--
ALTER TABLE `pat_hosp`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `query`
--
ALTER TABLE `query`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pat_hosp`
--
ALTER TABLE `pat_hosp`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `query`
--
ALTER TABLE `query`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
