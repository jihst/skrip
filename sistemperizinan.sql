-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2017 at 07:19 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemperizinan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id_admin` int(11) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_admin`, `Nama`, `Username`, `Password`) VALUES
(1, 'Septi Manjani', 'septimanjani', 'septi123');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIDN` int(10) NOT NULL,
  `Nama_Dsn` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `Jenis_Kelamin` enum('L','P') NOT NULL,
  `No_Hp` varchar(12) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `infotugas`
--

CREATE TABLE `infotugas` (
  `Id_info` int(11) NOT NULL,
  `NIDN` int(10) NOT NULL,
  `Kode_Matkul` varchar(7) NOT NULL,
  `Tugas` varchar(30) NOT NULL,
  `Deadline` date NOT NULL,
  `Keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` char(11) NOT NULL,
  `Nama_Mhs` varchar(30) NOT NULL,
  `Tempat_Lahir` varchar(20) NOT NULL,
  `Tgl_Lahir` date NOT NULL,
  `Alamat` text NOT NULL,
  `Jenis_Kelamin` enum('L','P') NOT NULL,
  `No_Hp` varchar(12) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `Kode_Matkul` varchar(7) NOT NULL,
  `Nama_Matkul` varchar(30) NOT NULL,
  `Semester` enum('1','2','3','4','5','6','7','8') NOT NULL,
  `Jumlah_SKS` int(11) NOT NULL,
  `Jumlah_Sesi` int(11) NOT NULL,
  `Batas_Izin` int(11) NOT NULL,
  `NIDN` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `perizinan`
--

CREATE TABLE `perizinan` (
  `Id_izin` int(11) NOT NULL,
  `NIM` char(11) NOT NULL,
  `Kode_Matkul` varchar(7) NOT NULL,
  `Tanggal` date NOT NULL,
  `Alasan` varchar(20) NOT NULL,
  `Bukti_Izin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id_user` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`NIDN`),
  ADD KEY `Id_user` (`Id_user`);

--
-- Indexes for table `infotugas`
--
ALTER TABLE `infotugas`
  ADD PRIMARY KEY (`Id_info`),
  ADD KEY `NIDN` (`NIDN`),
  ADD KEY `Kode_Matkul` (`Kode_Matkul`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`),
  ADD KEY `Id_user` (`Id_user`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`Kode_Matkul`),
  ADD KEY `NIDN` (`NIDN`);

--
-- Indexes for table `perizinan`
--
ALTER TABLE `perizinan`
  ADD PRIMARY KEY (`Id_izin`),
  ADD KEY `NIM` (`NIM`),
  ADD KEY `Kode_Matkul` (`Kode_Matkul`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `infotugas`
--
ALTER TABLE `infotugas`
  MODIFY `Id_info` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perizinan`
--
ALTER TABLE `perizinan`
  MODIFY `Id_izin` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `dosen`
--
ALTER TABLE `dosen`
  ADD CONSTRAINT `dosen_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `users` (`Id_user`);

--
-- Constraints for table `infotugas`
--
ALTER TABLE `infotugas`
  ADD CONSTRAINT `infotugas_ibfk_1` FOREIGN KEY (`NIDN`) REFERENCES `dosen` (`NIDN`),
  ADD CONSTRAINT `infotugas_ibfk_2` FOREIGN KEY (`Kode_Matkul`) REFERENCES `matakuliah` (`Kode_Matkul`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`Id_user`) REFERENCES `users` (`Id_user`);

--
-- Constraints for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD CONSTRAINT `matakuliah_ibfk_1` FOREIGN KEY (`NIDN`) REFERENCES `dosen` (`NIDN`);

--
-- Constraints for table `perizinan`
--
ALTER TABLE `perizinan`
  ADD CONSTRAINT `perizinan_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `mahasiswa` (`NIM`),
  ADD CONSTRAINT `perizinan_ibfk_2` FOREIGN KEY (`Kode_Matkul`) REFERENCES `matakuliah` (`Kode_Matkul`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
