-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2018 at 08:45 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ydbks`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id_artikel` int(11) NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` enum('terbit','draft') NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE IF NOT EXISTS `galery` (
  `id_galery` int(11) NOT NULL AUTO_INCREMENT,
  `id_foreign` int(11) NOT NULL,
  `caption` text NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id_galery`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_kegiatan` int(11) NOT NULL,
  `deskripsi` int(11) NOT NULL,
  `tanggal` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengurus`
--

CREATE TABLE IF NOT EXISTS `pengurus` (
  `id_pengurus` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `jabatan` text NOT NULL,
  PRIMARY KEY (`id_pengurus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE IF NOT EXISTS `proker` (
  `id_proker` int(11) NOT NULL AUTO_INCREMENT,
  `bidang` text NOT NULL,
  `proker` text NOT NULL,
  PRIMARY KEY (`id_proker`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE IF NOT EXISTS `sejarah` (
  `tahun` year(4) NOT NULL,
  `sejarah` text NOT NULL,
  PRIMARY KEY (`tahun`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`tahun`, `sejarah`) VALUES
(1978, '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: Questrial;">&nbsp;</span><span lang="IT" style="font-size:12.0pt;font-family:\r\n" arial","sans-serif";mso-fareast-font-family:"times="" new="" roman";mso-ansi-language:="" it;mso-fareast-language:en-us;mso-bidi-language:ar-sa"=""><span style="font-family: Questrial;">Pada tahun <b>1978</b> di\r\nBengkulu telah berdiri Badan Koordinasi Kegiatan Sosial (BKKS) Propinsi\r\nBengkulu, dengan Akte Notaris Nawawi Bengkulu No 9 tanggal 8 Agustus 1978 yang\r\ndipimpin oleh&nbsp; </span><span style="font-family: Questrial;">Ibu Hj Hindun Maurice.\r\nBKKS bertanggung jawab kepada DNIKS (Dewan</span><span style="font-family: Questrial;">&nbsp;\r\n</span><span style="font-family: Questrial;">Nasional untuk Kesejahteraan Sosial) di Jakarta dan Pemerintah Daerah Tk\r\nI Bengkulu.</span></span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE IF NOT EXISTS `visi` (
  `id_visi` int(11) NOT NULL AUTO_INCREMENT,
  `visi` text NOT NULL,
  PRIMARY KEY (`id_visi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
