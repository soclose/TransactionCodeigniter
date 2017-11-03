-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2017 at 12:41 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ci.track`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dtlsekolahcv`
--

CREATE TABLE IF NOT EXISTS `tbl_dtlsekolahcv` (
  `vidcv` varchar(10) NOT NULL,
  `nid` int(11) NOT NULL,
  `vnamesekolah` varchar(100) NOT NULL,
  `vstatus` enum('Y','N') NOT NULL,
  `vyear` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dtlsekolahcv`
--

INSERT INTO `tbl_dtlsekolahcv` (`vidcv`, `nid`, `vnamesekolah`, `vstatus`, `vyear`) VALUES
('CVP2017001', 1, 'MI Nurul Huda', 'Y', '2000'),
('CVP2017001', 2, 'Mts Nurul Huda', 'Y', '2003'),
('CVP2017001', 3, 'SMK YP Karya 2', 'Y', '2006'),
('CVP2017002', 4, 'MI Nurul Huda', 'Y', '2000'),
('CVP2017002', 5, 'Mts Nurul Huda', 'Y', '2003'),
('CVP2017002', 6, 'SMK YP Karya 2', 'Y', '2006');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_headercv`
--

CREATE TABLE IF NOT EXISTS `tbl_headercv` (
  `vidcv` varchar(10) NOT NULL,
  `vname` varchar(100) NOT NULL,
  `valamat` text NOT NULL,
  `vtelp` varchar(13) NOT NULL,
  `vemail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_headercv`
--

INSERT INTO `tbl_headercv` (`vidcv`, `vname`, `valamat`, `vtelp`, `vemail`) VALUES
('CVP2017001', 'Nurjalih', 'Neroktog', '9999', 'test@gmail.com'),
('CVP2017002', 'Edi Wibawa', 'Jogjakarta', '5555', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_historypekerjaan`
--

CREATE TABLE IF NOT EXISTS `tbl_historypekerjaan` (
  `vidcv` varchar(10) NOT NULL,
  `nid` int(11) NOT NULL,
  `vnameperusahaan` varchar(100) NOT NULL,
  `vlamapengalaman` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_historypekerjaan`
--

INSERT INTO `tbl_historypekerjaan` (`vidcv`, `nid`, `vnameperusahaan`, `vlamapengalaman`) VALUES
('CVP2017001', 1, 'SPBU KM 13,5', '3.5 tahun'),
('CVP2017001', 2, 'MC Donalds ST Mark Square', '9 Bulan'),
('CVP2017001', 3, 'KMK Global Sport', '9 Bulan'),
('CVP2017002', 4, 'SPBU KM 13,5', '3.5 tahun'),
('CVP2017002', 5, 'MC Donalds ST Mark Square', '9 Bulan'),
('CVP2017002', 6, 'KMK Global Sport', '9 Bulan');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
