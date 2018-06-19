-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2017 at 06:17 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tg_report`
--

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `branch` varchar(255) NOT NULL,
  `year` varchar(15) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `session` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `eno` varchar(15) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branch` varchar(5) NOT NULL,
  `batch` varchar(10) NOT NULL,
  `bg` varchar(5) NOT NULL,
  `domicile` varchar(30) NOT NULL,
  `category` varchar(15) NOT NULL,
  `xboard` varchar(255) NOT NULL,
  `xiiboard` varchar(255) NOT NULL,
  `jeemains` varchar(15) NOT NULL,
  `hostler` varchar(5) NOT NULL,
  `roomno` int(5) DEFAULT NULL,
  `xboardp` varchar(15) NOT NULL,
  `xiiboardp` varchar(15) NOT NULL,
  `xschool` varchar(255) NOT NULL,
  `xiischool` varchar(255) NOT NULL,
  `localadd` varchar(255) NOT NULL,
  `permanentadd` varchar(255) NOT NULL,
  `contactno` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `annualincome` varchar(20) NOT NULL,
  `mobileno` int(15) NOT NULL,
  `tg` varchar(255) NOT NULL,
  `minorpro` varchar(60) NOT NULL,
  `feedue` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`eno`, `name`, `branch`, `batch`, `bg`, `domicile`, `category`, `xboard`, `xiiboard`, `jeemains`, `hostler`, `roomno`, `xboardp`, `xiiboardp`, `xschool`, `xiischool`, `localadd`, `permanentadd`, `contactno`, `email`, `fname`, `mname`, `designation`, `annualincome`, `mobileno`, `tg`, `minorpro`, `feedue`) VALUES
('0186cs141040', 'Kunal Pawar', 'CSE', '2014-2018', 'A+', 'M.P.', 'General', 'C.B.S.E', 'C.B.S.E', 'Jee-Mains', 'No', 0, '7 C.G.P.A', '60%', 'Kendriya Vidhayalay', 'Kendriya Vidhayalay', 'Lig-14 Gautum Nagar,Bhopal', 'Khandwa', 2147483647, 'pawarkunal1996@gmail.com', 'Mr. Ashok Pawar', 'Mrs. Pawar', 'Service', 'lac', 2147483647, 'Harish Sir', 'T.G Report', 'Nill'),
('0186cs141044', 'Manali Srivastava', 'CSE', '2014-2018', 'A+', 'U.P.', 'General', 'C.B.S.E', 'C.B.S.E', 'Jee-Mains', 'No', 0, '8 C.G.P.A', '60%', 'Lions Sr. School,Mirzapur', 'Lions Sr. School,Mirzapur', 'Kalpana Chawla Girls Hostel,SIRTS College,Bhopal', 'Kalpana Chawla Girls Hostel,SIRTS College,Bhopal', 2147483647, 'manalisrivastava17@gmail.com', 'Mr. Naresh Srivastava', 'Mrs. Srivastava', 'Business Man', 'lac', 2147483647, 'Harish Sir', 'T.G Report', 'Nill'),
('0186cs141047', 'Manmohan Talwar', 'CSE', '2014-2018', 'A+', 'M.P.', 'General', 'C.B.S.E', 'C.B.S.E', 'Jee-Mains', 'No', 0, '8.6 C.G.P.A', '68%', 'St. Joseph''s Co-Ed School,Bhopal', 'St. Joseph''s Co-Ed School,Bhopal', 'E-7/64 Arera Colony,Bhopal', 'E-7/64 Arera Colony,Bhopal', 2147483647, 'mohittalwar9296@gmail.com', 'Mr. Anil Talwar', 'Mrs. Manju Talwar', 'Service', 'lac', 2147483647, 'Harish Sir', 'T.G Report', 'Nill'),
('0186cs141059', 'Nikhil Pandey', 'CSE', '2014-2018', 'A+', 'M.P.', 'General', 'C.B.S.E', 'C.B.S.E', 'Jee-Mains', 'No', 0, '8 C.G.P.A', '60%', 'mvm sr. school', 'mvm sr. school', 'Lig-14 Gautum Nagar,Bhopal', 'police colony mahiyar', 2147483647, 'nikhilpandey274@gmail.com', 'Mr. Surendra Pandey', 'Mrs. Pandey', 'Service', 'lac', 2147483647, 'Harish Sir', 'T.G Report', 'Nill');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`eno`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
