-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2017 at 04:52 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `idattendance` int(30) NOT NULL,
  `iduser` int(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `approve` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`idattendance`, `iduser`, `date`, `approve`) VALUES
(10, 11, '2017-03-01 23:03:18', 1),
(11, 15, '2017-03-01 23:04:18', 1),
(12, 16, '2017-03-01 23:35:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chart_of_account`
--

CREATE TABLE `chart_of_account` (
  `idcoa` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `account_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chart_of_account`
--

INSERT INTO `chart_of_account` (`idcoa`, `name`, `account_type`) VALUES
(1, 'as', 'aktiva');

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `idjurnal` int(30) NOT NULL,
  `idcoa` int(30) NOT NULL,
  `posisi_dr_cr` varchar(5) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `idpatient` int(30) NOT NULL,
  `patientname` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `bod` date NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`idpatient`, `patientname`, `gender`, `bod`, `address`, `phone`) VALUES
(1, 'Taufan Fadhilah Iskandar', 'L', '0000-00-00', 'jln. Perak no.32', '87781884330'),
(2, 'Fadhilah', 'P', '0000-00-00', 'jln. Perak no.32', '87781884330');

-- --------------------------------------------------------

--
-- Table structure for table `ptkp`
--

CREATE TABLE `ptkp` (
  `idptkp` varchar(30) NOT NULL,
  `name_status` varchar(100) NOT NULL,
  `tarif` int(50) NOT NULL,
  `year` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ptkp`
--

INSERT INTO `ptkp` (`idptkp`, `name_status`, `tarif`, `year`) VALUES
('K/0', 'KAWIN/0 TANGGUNGAN', 58500000, 2016),
('K/1', 'KAWIN/ 1 TANGGUNGAN', 63000000, 2016),
('K/2', 'KAWIN/ 2 TANGGUNGAN', 67500000, 2016),
('K/3', 'KAWIN/ 3 TANGGUNGAN', 72000000, 2016),
('TK/0', 'Tidak Kawin/0 Tanggungan', 54000000, 2016),
('TK/1', 'TIDAK KAWIN/ 1 TANGGUNGAN', 58500000, 2016),
('TK/2', 'TIDAK KAWIN/ 2 TANGGUNGAN', 63000000, 2016),
('TK/3', 'TIDAK KAWIN/3 TANGGUNGAN', 67500000, 2016);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `idregistration` int(30) NOT NULL,
  `idpatient` int(30) NOT NULL,
  `iduser` int(30) NOT NULL,
  `idservice` int(30) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`idregistration`, `idpatient`, `iduser`, `idservice`, `reg_date`) VALUES
(9, 1, 11, 4, '2017-03-02'),
(10, 2, 16, 1, '2017-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `salary_type`
--

CREATE TABLE `salary_type` (
  `idsalary_type` int(30) NOT NULL,
  `salaryname` varchar(50) NOT NULL,
  `nominal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary_type`
--

INSERT INTO `salary_type` (`idsalary_type`, `salaryname`, `nominal`) VALUES
(1, 's1', 6000000),
(2, 's2', 8000000),
(3, 'tunjangan makan', 100000),
(4, 'lembur', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `idschdule` int(30) NOT NULL,
  `idregistration` int(30) NOT NULL,
  `date_time` datetime NOT NULL,
  `extra` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`idschdule`, `idregistration`, `date_time`, `extra`) VALUES
(4, 9, '2017-03-02 00:00:00', 0),
(5, 10, '2017-03-02 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `idservice` int(5) NOT NULL,
  `servicename` varchar(50) NOT NULL,
  `service_hour` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`idservice`, `servicename`, `service_hour`) VALUES
(1, 'Konseling', 3),
(2, 'Pemeriksaan Psikologis', 2),
(3, 'Observasi', 4),
(4, 'Terapi', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `usertype` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `password`, `usertype`) VALUES
(11, 'karyawan', '9e014682c94e0f2cc834bf7348bda428', 4),
(15, 'admin', '21232f297a57a5a743894a0e4a801fc3', 3),
(16, 'karyawan2', '9e014682c94e0f2cc834bf7348bda428', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE `user_detail` (
  `iduser` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `idptkp` varchar(4) NOT NULL,
  `idsalary_type` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`iduser`, `name`, `gender`, `phone`, `address`, `photo`, `npwp`, `idptkp`, `idsalary_type`) VALUES
(11, 'Karyawan', 'P', '87781884330', 'jln. Perak no.32', '1233.JPG', '', 'TK/0', 1),
(15, 'Admin', 'L', '85352909966', 'jln. Perak no.32', 'admin3.JPG', '16901', 'TK/0', 1),
(16, 'Karyawan2', 'L', '85790624194', 'Jl Dadali No 11', 'karyawan2.jpg', '31397', 'TK/0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id_usertype` int(5) NOT NULL,
  `name_usertype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id_usertype`, `name_usertype`) VALUES
(1, 'pemilik'),
(2, 'keuangan'),
(3, 'administrasi'),
(4, 'karyawan'),
(5, 'pasien');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`idattendance`),
  ADD KEY `iduser` (`iduser`);

--
-- Indexes for table `chart_of_account`
--
ALTER TABLE `chart_of_account`
  ADD PRIMARY KEY (`idcoa`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`idjurnal`),
  ADD KEY `idcoa` (`idcoa`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`idpatient`);

--
-- Indexes for table `ptkp`
--
ALTER TABLE `ptkp`
  ADD PRIMARY KEY (`idptkp`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`idregistration`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idpatient` (`idpatient`),
  ADD KEY `idservice` (`idservice`);

--
-- Indexes for table `salary_type`
--
ALTER TABLE `salary_type`
  ADD PRIMARY KEY (`idsalary_type`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`idschdule`),
  ADD KEY `idregistration` (`idregistration`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`idservice`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `usertype` (`usertype`);

--
-- Indexes for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD UNIQUE KEY `npwp` (`npwp`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `iduser` (`iduser`),
  ADD KEY `idsalary_type` (`idsalary_type`),
  ADD KEY `idptkp` (`idptkp`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id_usertype`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `idattendance` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `chart_of_account`
--
ALTER TABLE `chart_of_account`
  MODIFY `idcoa` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `idjurnal` int(30) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `idpatient` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `idregistration` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `salary_type`
--
ALTER TABLE `salary_type`
  MODIFY `idsalary_type` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `idschdule` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `idservice` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id_usertype` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);

--
-- Constraints for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD CONSTRAINT `jurnal_ibfk_1` FOREIGN KEY (`idcoa`) REFERENCES `chart_of_account` (`idcoa`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`idservice`) REFERENCES `service` (`idservice`),
  ADD CONSTRAINT `registration_ibfk_2` FOREIGN KEY (`idpatient`) REFERENCES `patient` (`idpatient`),
  ADD CONSTRAINT `registration_ibfk_3` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `schedule_ibfk_1` FOREIGN KEY (`idregistration`) REFERENCES `registration` (`idregistration`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`usertype`) REFERENCES `user_type` (`id_usertype`);

--
-- Constraints for table `user_detail`
--
ALTER TABLE `user_detail`
  ADD CONSTRAINT `user_detail_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`iduser`),
  ADD CONSTRAINT `user_detail_ibfk_2` FOREIGN KEY (`idsalary_type`) REFERENCES `salary_type` (`idsalary_type`),
  ADD CONSTRAINT `user_detail_ibfk_3` FOREIGN KEY (`idptkp`) REFERENCES `ptkp` (`idptkp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
