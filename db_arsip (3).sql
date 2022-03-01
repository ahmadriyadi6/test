-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 11, 2022 at 02:01 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal`
--

CREATE TABLE `tb_jadwal` (
  `id` int(11) NOT NULL,
  `no_agenda` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `agenda` varchar(200) NOT NULL,
  `tahun_sidang` varchar(200) NOT NULL,
  `rapat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jadwal`
--

INSERT INTO `tb_jadwal` (`id`, `no_agenda`, `tanggal`, `agenda`, `tahun_sidang`, `rapat`) VALUES
(2, 'Kode-001', '2022-01-01', 'kaodwkawodk', '2021', '1'),
(3, 'Kode-002', '2022-01-01', 'awdhawudh', '2022', '2'),
(4, 'Kode-003', '2022-01-01', 'hauwdha', '2022', '3'),
(5, 'Kode-004', '2022-01-01', 'hauwdha', '2022', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id` int(11) NOT NULL,
  `kd_petugas` varchar(50) NOT NULL,
  `nm_petugas` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id`, `kd_petugas`, `nm_petugas`, `nama`, `alamat`, `no_hp`, `tanggal`, `jam`) VALUES
(18, '1555', 'Ahmad', '', 'kepala dinas', 'hadir', '2022-02-09', '03:52:00'),
(19, '12awdawd', 'awdawd', '', 'awdawd', 'awdawdawd', '2022-01-02', '01:00:00'),
(20, 'ID-001', 'Ahmad', '', 'Kandangan', '(+62)881-2381-290_', '2022-01-01', '01:00:00'),
(21, 'ID-001', 'ahwudhaw', 'AHMAD RIYADI ARRIDHO', 'JL.KUIN', '(+62)899-9999-9999', '2022-01-01', '01:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratkeluar`
--

CREATE TABLE `tb_suratkeluar` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nm_petugas` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `surat` varchar(200) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_surat` date NOT NULL,
  `tgl_dikeluarkan` date NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suratkeluar`
--

INSERT INTO `tb_suratkeluar` (`id`, `tanggal`, `nm_petugas`, `pengirim`, `alamat`, `surat`, `no_surat`, `tgl_surat`, `tgl_dikeluarkan`, `perihal`, `file`) VALUES
(12, '2022-01-01', 'ahwudhaw', 'kiajwidj', 'huawdgy', 'jawudjiawd', 'SK/2022/DRPD/001', '2022-01-01', '2022-01-01', 'kjawidj', ''),
(13, '2022-01-01', 'adawd', 'awdawd', 'awdawd', 'awdawd', 'SK/2022/DRPD/002', '2022-01-01', '2022-01-01', 'awdawd', ''),
(14, '2022-01-01', 'adawd', 'awidjawdj', 'jaiwdijw', 'huagwduhawd', 'SK/2022/DRPD/003', '2022-01-01', '2022-01-01', '123123123', 'Alfin_Nafis_18120034_REG_PAGI_BJM_KEPEMIMPINAN.pdf'),
(15, '2022-01-01', 'Ahmad', 'iawjdiajd', 'okaowdkawd', 'awopdlapwdl', 'SK/2022/DRPD/004', '2022-01-01', '2022-01-01', 'geawda', ''),
(16, '2022-01-01', 'Ahmad', 'kaowkdaokdw', 'haywgdyadw', 'trwtawd', 'SK/2022/DRPD/005', '2022-01-01', '2022-01-01', '213123', ''),
(17, '2022-01-01', 'Ahmad', 'kawidojawidk', 'hy12u11yu', 'lakwdkowdk', 'SK/2022/DRPD/006', '2022-01-01', '2022-01-01', 'aokwodkawod', '2__Topik_Penelitian.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratmasuk`
--

CREATE TABLE `tb_suratmasuk` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nm_petugas` varchar(50) NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `surat` varchar(50) NOT NULL,
  `no_surat` varchar(200) NOT NULL,
  `tgl_surat` date NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suratmasuk`
--

INSERT INTO `tb_suratmasuk` (`id`, `tanggal`, `nm_petugas`, `pengirim`, `alamat`, `surat`, `no_surat`, `tgl_surat`, `perihal`, `file`) VALUES
(6, '2022-01-01', 'ahwudhaw', 'ajwdijawd', 'jiawjdij', 'ijawidj', '001/SM/2022/DPRD', '2022-01-01', 'ajwidjwd', ''),
(7, '2022-01-01', 'ahwudhaw', 'ahwduhawd', 'ljawidj', 'ijaiwdj', 'ID-002', '2022-01-01', 'oakwdo', ''),
(9, '2022-01-01', 'adawd', 'awdawd', 'awdawd', 'awdawd', 'SK/2022/DRPD/003', '2022-01-01', 'ajwidj', ''),
(10, '2022-01-01', 'adawd', 'awdawd', 'jawidjwd', '781728173', 'SK/2022/DRPD/004', '2022-01-01', 'abccd', 'BANK_KALSEL.pdf'),
(11, '2022-01-01', 'Ahmad', 'awdjadw', 'ijiajwdiajwd', 'akowdkaowd', 'SK/2022/DRPD/005', '2022-01-01', 'awdawd', 'alfin_nafis,_18120034,_uas_tauhid1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratreview`
--

CREATE TABLE `tb_suratreview` (
  `id` int(11) NOT NULL,
  `nomor_surat` varchar(200) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `tgl_surat` date NOT NULL,
  `surat` varchar(50) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `ket` varchar(200) NOT NULL,
  `verif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suratreview`
--

INSERT INTO `tb_suratreview` (`id`, `nomor_surat`, `no_surat`, `tgl_surat`, `surat`, `perihal`, `keterangan`, `ket`, `verif`) VALUES
(12, 'SHB/2022/DRPD/001', '001/SM/2022/DPRD', '2022-01-01', 'ijawidj', 'ajwidjwd', 'Tidak Diterima', 'awdawd', 'x'),
(13, 'SHB/2022/DRPD/002', 'ID-002', '2022-01-01', 'ijaiwdj', 'oakwdo', 'Diterima', 'awdawd', ''),
(16, 'SHB/2022/DRPD/005', '001/SM/2022/DPRD', '2022-01-01', 'ijawidj', 'ajwidjwd', 'Tidak Diterima', 'diterima', 'V'),
(17, 'SHB/2022/DRPD/006', '001/SM/2022/DPRD', '2022-01-01', 'ijawidj', 'ajwidjwd', 'Diterima', 'iuuuu', ''),
(18, 'SHB/2022/DRPD/007', 'SK/2022/DRPD/003', '2022-01-01', 'awdawd', 'ajwidj', 'Tidak Diterima', 'akwdoakwd', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suratumum`
--

CREATE TABLE `tb_suratumum` (
  `id` int(11) NOT NULL,
  `sdr` varchar(200) NOT NULL,
  `tanggal` date NOT NULL,
  `isi` varchar(200) NOT NULL,
  `tanggapan` varchar(200) NOT NULL,
  `sifat` varchar(200) NOT NULL,
  `ket` varchar(100) NOT NULL,
  `verif` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_suratumum`
--

INSERT INTO `tb_suratumum` (`id`, `sdr`, `tanggal`, `isi`, `tanggapan`, `sifat`, `ket`, `verif`) VALUES
(7, 'Ahmad Riyadi', '2021-12-10', 'Manajement Pemasaran', 'Proses Lebih Lanjut', 'Tertutup', 'iuuuu', 'x'),
(8, '12jajdwjdaijs', '2022-01-01', 'lawdjwd', 'Tunda', 'Terbuka', 'diterima', ''),
(9, 'Ahmad Riyadi', '2022-01-01', 'kajwdijawd', 'Sudah Diterima', 'Terbuka', 'iajdwijawd', 'V');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` enum('admin','pegawai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `nama`, `password`, `email`, `level`) VALUES
(1, 'admin', '?????????', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin'),
(2, 'pegawai', 'pegawai', '047aeeb234644b9e2d4138ed3bc7976a', 'pegawai', 'pegawai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_suratreview`
--
ALTER TABLE `tb_suratreview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_suratumum`
--
ALTER TABLE `tb_suratumum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jadwal`
--
ALTER TABLE `tb_jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_suratkeluar`
--
ALTER TABLE `tb_suratkeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_suratmasuk`
--
ALTER TABLE `tb_suratmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_suratreview`
--
ALTER TABLE `tb_suratreview`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_suratumum`
--
ALTER TABLE `tb_suratumum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
