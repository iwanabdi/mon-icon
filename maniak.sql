-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2021 at 04:58 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maniak`
--

-- --------------------------------------------------------

--
-- Table structure for table `baps`
--

CREATE TABLE `baps` (
  `no_baps` varchar(100) NOT NULL,
  `tanggal_baps` date NOT NULL,
  `create_on` date NOT NULL,
  `create_by` int(11) NOT NULL,
  `hardcopy_on` date NOT NULL,
  `tanggal_ttd` date NOT NULL,
  `tanggal_ambil` date NOT NULL,
  `perpanjangan` int(11) NOT NULL,
  `alasan` text NOT NULL,
  `mitra_id` int(11) NOT NULL,
  `project_id` varchar(50) NOT NULL,
  `pegawai_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dlaporan`
--

CREATE TABLE `dlaporan` (
  `laporan_id` int(11) NOT NULL,
  `dlaporan_id` int(11) NOT NULL,
  `file_laporan` text NOT NULL,
  `type_laporan` int(11) NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_on` date NOT NULL,
  `update_by` int(11) NOT NULL,
  `update_on` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dstg`
--

CREATE TABLE `dstg` (
  `dstg_no` int(11) NOT NULL,
  `no_stg` varchar(50) NOT NULL,
  `project_id` varchar(50) NOT NULL,
  `target_date` date NOT NULL,
  `create_on` date NOT NULL,
  `create_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gi`
--

CREATE TABLE `gi` (
  `no_gi` varchar(20) NOT NULL,
  `project_id` varchar(50) NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_on` date NOT NULL,
  `file_gi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gr`
--

CREATE TABLE `gr` (
  `no_gr` varchar(20) NOT NULL,
  `tanggal_gr` date NOT NULL,
  `nilai_gr` varchar(100) NOT NULL,
  `create_on` date NOT NULL,
  `create_by` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `file_gr` text NOT NULL,
  `mitra_id` int(11) NOT NULL,
  `project_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hstg`
--

CREATE TABLE `hstg` (
  `nomer_stg` varchar(50) NOT NULL,
  `pegawai_id` int(11) NOT NULL,
  `mitra_id` int(11) NOT NULL,
  `create_on` date NOT NULL,
  `create_by` int(11) NOT NULL,
  `update_on` date NOT NULL,
  `update_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kendala`
--

CREATE TABLE `kendala` (
  `kendala_id` int(11) NOT NULL,
  `tipe_kendala` text NOT NULL,
  `nama_kendala` text NOT NULL,
  `create_on` date NOT NULL,
  `create_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `laporan_id` int(11) NOT NULL,
  `mitra_id` int(11) NOT NULL,
  `project_id` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `create on` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `mitra_id` int(10) NOT NULL,
  `nama_mitra` text NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `create_on` int(11) NOT NULL,
  `create_by` date NOT NULL,
  `update_on` int(11) NOT NULL,
  `update_by` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notifikasi`
--

CREATE TABLE `notifikasi` (
  `notifi_id` int(11) NOT NULL,
  `project_id` varchar(50) NOT NULL,
  `tipe_notif` text NOT NULL,
  `keterangan_notif` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` varchar(50) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `kendala_id` int(11) DEFAULT NULL,
  `pelanggan` text NOT NULL,
  `alamat` text NOT NULL,
  `io` text NOT NULL,
  `sid` text NOT NULL,
  `layanan` text NOT NULL,
  `bandwith` text NOT NULL,
  `status_project` int(11) NOT NULL,
  `created_on` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `update_on` date NOT NULL,
  `update_by` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `detail_kendala` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prpo`
--

CREATE TABLE `prpo` (
  `no_pr` varchar(20) NOT NULL,
  `nilai_pr` int(64) NOT NULL,
  `tanggal_pr` date NOT NULL,
  `request_date` date NOT NULL,
  `type_kerjaan` int(11) NOT NULL,
  `tarikan` int(11) NOT NULL,
  `no_po` varchar(20) NOT NULL,
  `nilai_po` int(64) NOT NULL,
  `keterangan` text NOT NULL,
  `project_id` varchar(50) NOT NULL,
  `mitra_id` int(11) NOT NULL,
  `delivery_date` date NOT NULL,
  `file_po` text NOT NULL,
  `create_by` int(11) NOT NULL,
  `create_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `no_reservasi` varchar(20) NOT NULL,
  `project_id` varchar(50) NOT NULL,
  `file_reservasi` text NOT NULL,
  `create_on` date NOT NULL,
  `create_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `survey_id` int(11) NOT NULL,
  `mitra_id` int(11) NOT NULL,
  `project_id` varchar(50) NOT NULL,
  `file_gdb` text NOT NULL,
  `file_bom` text NOT NULL,
  `create_on` date NOT NULL,
  `keterangan` text NOT NULL,
  `dokumentasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teamlapangan`
--

CREATE TABLE `teamlapangan` (
  `teamlap_id` int(10) NOT NULL,
  `mitra_id` int(10) NOT NULL,
  `nama_orang` text NOT NULL,
  `status` int(1) NOT NULL,
  `create_by` int(10) NOT NULL,
  `create_on` date NOT NULL,
  `update_by` int(10) NOT NULL,
  `update_on` date NOT NULL,
  `nama_pekerja` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `testcom`
--

CREATE TABLE `testcom` (
  `testcom_id` int(11) NOT NULL,
  `project_id` varchar(50) NOT NULL,
  `bai_date` date NOT NULL,
  `file_bai` text NOT NULL,
  `file_testcom` text NOT NULL,
  `create_on` date NOT NULL,
  `create_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `email_user` varchar(200) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `password` varchar(32) NOT NULL,
  `jabatan` int(4) NOT NULL,
  `status` int(1) NOT NULL,
  `create_on` date NOT NULL,
  `create_by` int(10) NOT NULL,
  `update_on` date NOT NULL,
  `update_by` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baps`
--
ALTER TABLE `baps`
  ADD PRIMARY KEY (`no_baps`),
  ADD KEY `pegawai_id` (`pegawai_id`),
  ADD KEY `mitra_id` (`mitra_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `dlaporan`
--
ALTER TABLE `dlaporan`
  ADD PRIMARY KEY (`dlaporan_id`),
  ADD KEY `laporan_id` (`laporan_id`);

--
-- Indexes for table `dstg`
--
ALTER TABLE `dstg`
  ADD PRIMARY KEY (`dstg_no`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `no_stg` (`no_stg`);

--
-- Indexes for table `gi`
--
ALTER TABLE `gi`
  ADD PRIMARY KEY (`no_gi`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `gr`
--
ALTER TABLE `gr`
  ADD PRIMARY KEY (`no_gr`),
  ADD KEY `mitra_id` (`mitra_id`),
  ADD KEY `create_by` (`create_by`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `hstg`
--
ALTER TABLE `hstg`
  ADD PRIMARY KEY (`nomer_stg`),
  ADD KEY `mitra_id` (`mitra_id`);

--
-- Indexes for table `kendala`
--
ALTER TABLE `kendala`
  ADD PRIMARY KEY (`kendala_id`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`laporan_id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `mitra_id` (`mitra_id`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`mitra_id`);

--
-- Indexes for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `kendala_id` (`kendala_id`);

--
-- Indexes for table `prpo`
--
ALTER TABLE `prpo`
  ADD KEY `mitra_id` (`mitra_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`no_reservasi`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`survey_id`),
  ADD KEY `mitra_id` (`mitra_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `teamlapangan`
--
ALTER TABLE `teamlapangan`
  ADD PRIMARY KEY (`teamlap_id`),
  ADD KEY `mitra_id` (`mitra_id`);

--
-- Indexes for table `testcom`
--
ALTER TABLE `testcom`
  ADD PRIMARY KEY (`testcom_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dlaporan`
--
ALTER TABLE `dlaporan`
  MODIFY `dlaporan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dstg`
--
ALTER TABLE `dstg`
  MODIFY `dstg_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `laporan_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `mitra_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `survey_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teamlapangan`
--
ALTER TABLE `teamlapangan`
  MODIFY `teamlap_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testcom`
--
ALTER TABLE `testcom`
  MODIFY `testcom_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baps`
--
ALTER TABLE `baps`
  ADD CONSTRAINT `baps_ibfk_1` FOREIGN KEY (`pegawai_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `baps_ibfk_2` FOREIGN KEY (`mitra_id`) REFERENCES `mitra` (`mitra_id`),
  ADD CONSTRAINT `baps_ibfk_3` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `dlaporan`
--
ALTER TABLE `dlaporan`
  ADD CONSTRAINT `dlaporan_ibfk_1` FOREIGN KEY (`laporan_id`) REFERENCES `laporan` (`laporan_id`);

--
-- Constraints for table `dstg`
--
ALTER TABLE `dstg`
  ADD CONSTRAINT `dstg_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `dstg_ibfk_2` FOREIGN KEY (`no_stg`) REFERENCES `hstg` (`nomer_stg`);

--
-- Constraints for table `gi`
--
ALTER TABLE `gi`
  ADD CONSTRAINT `gi_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `gr`
--
ALTER TABLE `gr`
  ADD CONSTRAINT `gr_ibfk_1` FOREIGN KEY (`mitra_id`) REFERENCES `mitra` (`mitra_id`),
  ADD CONSTRAINT `gr_ibfk_3` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `hstg`
--
ALTER TABLE `hstg`
  ADD CONSTRAINT `hstg_ibfk_1` FOREIGN KEY (`mitra_id`) REFERENCES `mitra` (`mitra_id`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`),
  ADD CONSTRAINT `laporan_ibfk_2` FOREIGN KEY (`mitra_id`) REFERENCES `mitra` (`mitra_id`);

--
-- Constraints for table `notifikasi`
--
ALTER TABLE `notifikasi`
  ADD CONSTRAINT `notifikasi_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`kendala_id`) REFERENCES `kendala` (`kendala_id`);

--
-- Constraints for table `prpo`
--
ALTER TABLE `prpo`
  ADD CONSTRAINT `prpo_ibfk_1` FOREIGN KEY (`mitra_id`) REFERENCES `mitra` (`mitra_id`),
  ADD CONSTRAINT `prpo_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `survey`
--
ALTER TABLE `survey`
  ADD CONSTRAINT `survey_ibfk_1` FOREIGN KEY (`mitra_id`) REFERENCES `mitra` (`mitra_id`),
  ADD CONSTRAINT `survey_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Constraints for table `teamlapangan`
--
ALTER TABLE `teamlapangan`
  ADD CONSTRAINT `teamlapangan_ibfk_1` FOREIGN KEY (`mitra_id`) REFERENCES `mitra` (`mitra_id`);

--
-- Constraints for table `testcom`
--
ALTER TABLE `testcom`
  ADD CONSTRAINT `testcom_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
