-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2016 at 07:12 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `koppaja`
--
CREATE DATABASE IF NOT EXISTS `koppaja` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `koppaja`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `beasiswa`
--

CREATE TABLE IF NOT EXISTS `beasiswa` (
  `id_beasiswa` varchar(5) NOT NULL,
  `nama_beasiswa` varchar(20) NOT NULL,
  `logo_beasiswa` varchar(15) NOT NULL,
  `ket_beasiswa` varchar(30) NOT NULL,
  `link_beasiswa` varchar(100) NOT NULL,
  PRIMARY KEY (`id_beasiswa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `beasiswa`
--

INSERT INTO `beasiswa` (`id_beasiswa`, `nama_beasiswa`, `logo_beasiswa`, `ket_beasiswa`, `link_beasiswa`) VALUES
('BE001', 'Rumah Gemilang', '1-gemilang.png', 'Info Lengkap', 'http://rumahgemilang.com/'),
('BE002', 'Titian Foundation', '2-titian.png', 'Info Lengkap', 'http://id.titianfoundation.org/program/program-beasiswa/'),
('BE003', 'Sampoerna', '3-sampoerna.png', 'Info Lengkap', 'http://www.sampoernafoundation.org/bak/program'),
('BE004', 'Tnp2k', '4-tnp2k.png', 'Info Lengkap', 'http://www.tnp2k.go.id/id/tanya-jawab/klaster-i/program-bantuan-siswa-miskin-bsm/'),
('BE005', 'Yasporbi', '5-yasporbi.png', 'Info Lengkap', 'http://www.yasporbi.sch.id/profil/program-yasporbi/program-beasiswa-anak-tidak-mampu/');

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `id_anak` varchar(5) NOT NULL,
  `nama_anak` varchar(25) NOT NULL,
  `tempat_lahir` varchar(10) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `pendidikan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pengalaman` varchar(50) NOT NULL,
  `prestasi` varchar(80) NOT NULL,
  `kata_kunci` varchar(30) NOT NULL,
  `foto` varchar(30) NOT NULL,
  PRIMARY KEY (`id_anak`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id_anak`, `nama_anak`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `pendidikan`, `status`, `pengalaman`, `prestasi`, `kata_kunci`, `foto`) VALUES
('1', 'Nala Yuliana', 'Bogor', '2003-06-09', 'Ciheleut Pakuan', 'Putus Sekolah kelas ', 'Aktif di jalan', '- Tertangkap satpol PP 1 kali', '- Juara 1 lomba kerajinan tangan\r\n', 'Nala, Nala Yuliana', 'IMG_0321.J'),
('2', 'Adin Safanadinar', 'Bogor', '2005-09-03', 'Ciheleut Pakuan', 'Kelas 3 di MI Siraju', 'Jarang ke jalan', '', '- Ranking 2 saat kelas 2\r\n- Juara 1 lomba kelereng\r\n- Juara 2 lomba ma', 'Adin, Adin Safanadinar', 'IMG_0393.J'),
('3', 'Siti Laniah', 'Bogor', '2000-03-02', 'Ciheleut Pakuan, RT 04/06', 'Kelas 10 di SMA PGRI', 'tidak aktif', '', '- Juara 6 lomba LKBB Paskibra\r\n- Juara 5 lomba Paskibra di Regina Pacis', 'Siti, Siti Laniah', 'sitilaniah.jpg'),
('5', 'Sandra Dewi', 'Bogor', '0000-00-00', 'Ciheleut Pakuan', 'Putus Sekolah kelas ', '', '', '', 'Sandra, Sandra Dewi, Dewi', 'IMG_0771.J'),
('A004', 'Lisnawati', 'Bogor', '2003-12-10', 'Ciheleut Pakuan', 'Kelas 6 di SDN Tegal', 'tidak aktif', '', '- Juara 3 lomba kelereng', 'Lisnawati', 'lisna.jpg'),
('A006', 'Tiara Mutiara', 'Bogor', '0000-00-00', 'Ciheleud Pakuan', 'Terakhir Kelas 3 Sek', 'Aktif di jalan', 'Ketangkap Satpol PP karena minta-minta', 'Peringkat 2 di Kelas 2', 'Tiara , Tiara Mutiara', ''),
('A007', 'Violista', 'Cilendek', '0000-00-00', 'Ciheleud Pakuan', 'Kelas 6 di SDN Tegal', 'Aktif di jalan', '', 'Masuk 10 Besar Kelas 2 SD', 'Violista', ''),
('A008', 'Rindi Santika', 'Bogor', '0000-00-00', 'Ciheleud Pakuan', 'Terakhir Kelas 4 Sek', 'Aktif di jalan', '', 'Juara 3 Joget Balon di Kampung Mongol ', 'Rindi , Rindi Santika', 'rindisantika.jpg'),
('A009', 'Aisya Janahtul Firdaus', 'Bogor', '0000-00-00', 'Cihelud Pakuan', 'Mts Al Hidatah Kelas', 'tidak aktif', '', '- Juara 1 Lomba Tari di Kp.Mongol\r\n- Peringkat 5 saat kelas 5 SD', 'Aisya , Aisya Janahtul Firdaus', 'aisyafirdaus.jpg'),
('A010', 'Sofiya Nur Azizah', 'Bandung', '0000-00-00', 'Ciheleud Pakuan', 'SMK BW 2 Kelas 1', 'tidak aktif', '', '- Peringkat 1 Kelas ! SMP YPB\r\n\r\n-Peringkat 5 Kelas 1 SMK BW', 'Sofiyah , Sofiyah Nur Azizah', 'sofiyanur.jpg'),
('A011', 'Ines Fadillah', 'Bogor', '0000-00-00', 'Ciheleud Pakuan', 'Mts Al Hidayah ', 'tidak aktif', '', '- Peringkat 11 di kelas 1 SMP\r\n\r\n- Juara 1 Hasta Karya bikin topi dari', 'Ines , Ines Fadillah', 'inesfadillah.jpg'),
('A012', 'Rismawati Atika', 'Bogor', '0000-00-00', 'Ciheleud Pakuan', 'Terakhir Kelas 4 Sek', 'Aktif di jalan', '', 'Peringkat 5 di kelas 3', 'Rismawati , Rismawati Atika', 'rismawatiatika.jpg'),
('A013', 'Dymas Awalludin Ramadita', 'Bogor', '0000-00-00', 'Ciheleud Pakuan', 'Mts Al Hidatah Kelas', 'tidak aktif', '', '- Pesrta Tausiah di Sekolah\r\n\r\n- Peringkat 3 saat SD', 'Dymas , Dymas Awalludin Ramadi', 'dymasawalludin.jpg'),
('A014', 'Muhammad Rasyid ', 'Bogor', '0000-00-00', 'Ciheleud Pakuan', 'Terakhir Kelas 4 SD', 'aktif di jalan', 'Tertangkap Satpol PP ', 'Juara 3 Joget Balon di Kp.Mongol', 'Rasyid', 'muhammadrasyid.jpg'),
('A015', 'Ikis', 'Tanggerang', '0000-00-00', 'Ciheleud Pakuan', 'Kelas 6 di SDN Tegal', 'tidak aktif', 'Ketangkap Serse ', 'Juara 1 Futsal di Kp.Mongol', 'Ikis', 'ikis1.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
