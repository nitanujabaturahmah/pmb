-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmb`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `Id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nama_admin` varchar(255) DEFAULT NULL,
  `role_user` varchar(255) DEFAULT NULL,
  `id_camaba` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

--
-- Table structure for table `detail_pendaftaran`
--

CREATE TABLE `detail_pendaftaran` (
  `Id` int(11) NOT NULL,
  `id_camaba` int(11) DEFAULT NULL,
  `id_admin` int(11) DEFAULT NULL,
  `tanggal_daftar` date DEFAULT NULL,
  `metode_pembayaran_pendaftaran` varchar(255) DEFAULT NULL COMMENT 'metode_pembayaran',
  `ruangan` varchar(255) DEFAULT NULL,
  `gelombang` varchar(255) DEFAULT NULL,
  `status_pendaftaran` varchar(255) DEFAULT NULL,
  `status_kegiatan` int(11) NOT NULL DEFAULT 0,
  `biaya_kegiatan` int(11) DEFAULT 0,
  `tanggal_kegiatan` date DEFAULT NULL,
  `bukti_konfirmasi_pembayaran_kegiatan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_kegiatan`
--

CREATE TABLE `jadwal_kegiatan` (
  `id_jadwal` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `jenis_kegiatan` varchar(100) NOT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_akhir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table ``
--

CREATE TABLE `tb_prodi` (
  `Id_prodi` varchar(15) NOT NULL,
  `nama_prodi` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `tb_camaba`
--

CREATE TABLE `tb_camaba` (
  `Id_camaba` int(11) NOT NULL,
  'nisn' varchar(30) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nama_panggilan` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `nohp` varchar(30) DEFAULT NULL,
   `nama_ayah` varchar(100) DEFAULT NULL,
  `pekerjaan_ayah` varchar(255) DEFAULT NULL,
  `penghasilan_ayah` varchar(50) DEFAULT NULL,
  `no_ayah` varchar(30) DEFAULT NULL,
  `nama_ibu` varchar(255) DEFAULT NULL,
  `pekerjaan_ibu` varchar(255) DEFAULT NULL,
  `penghasilan_ibu` varchar(50) DEFAULT NULL,
  `no_ibu` varchar(30) DEFAULT NULL,
  'alamat_ortu' varchar (255) DEFAULT NULL,
)  ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `tb_dokumen`
--

CREATE TABLE `tb_dokumen` (
  `id_dokumen` varchar(255) DEFAULT NULL,
  `scan_akte` varchar(255) DEFAULT NULL,
  `scan_kk` varchar(255) DEFAULT NULL,
  `pas_poto` varchar(255) DEFAULT NULL,
  `scan_ktp` varchar(255) DEFAULT NULL,
  `scan_ijazah` varchar(255) DEFAULT NULL,
  `scan_raport` varchar(255) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran ` char(6) NOT NULL DEFAULT '0',
  `bukti_pembayaran` varchar(255) DEFAULT NULL,
  `status_pembayaran` int(11) DEFAULT NULL,
  `tgl_pembayaran` varchar(255) DEFAULT NULL,
  `tgl_pembayaran` varchar(255) DEFAULT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_2` (`id_user`);

--
-- Indexes for table `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `id_camaba` (`id_camaba`),
  ADD KEY `id_admin` (`id_admin`);


--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`Id_pembayaran`);

--
-- Indexes for table `tb_camaba`
--
ALTER TABLE `tb_camaba`
  ADD PRIMARY KEY (`Id_camaba`);


--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- for table `tb_prodi`
--
ALTER TABLE `tb_prodi`
  MODIFY `Id_prodi` varchar(15) NOT NULL;

--
-- AUTO_INCREMENT for table `detail_pendaftaran`
--
ALTER TABLE `detail_pendaftaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `pendaftaran`
--
ALTER TABLE `pendaftaran`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

