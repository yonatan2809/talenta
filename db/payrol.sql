-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2022 at 12:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payrol`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id_absen` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `id_shift` varchar(30) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `nip`, `id_shift`, `waktu`, `keterangan`) VALUES
(12, '17144642022', '', '2022-06-03 10:36:44', 'IN'),
(13, '17144642022', '', '2022-06-03 10:36:49', 'OUT'),
(14, '17126862022', '', '2022-06-03 11:20:38', 'IN'),
(15, '17126862022', '', '2022-06-03 11:20:40', 'OUT'),
(16, '17126862022', '', '2022-06-04 14:38:34', 'IN'),
(17, '17126862022', '', '2022-06-04 14:38:40', 'OUT'),
(18, '17126862022', '', '2022-06-06 08:41:58', 'IN'),
(19, '17126862022', '', '2022-06-06 08:42:09', 'OUT'),
(20, '17185092022', '', '2022-06-06 12:07:14', 'IN'),
(21, '17185092022', '', '2022-06-06 12:07:15', 'OUT'),
(22, '12200528', '', '2022-06-14 06:11:51', 'IN'),
(23, '12200528', '', '2022-06-14 06:11:52', 'OUT'),
(24, '17126862022', '', '2022-06-14 06:14:35', 'IN'),
(25, '17126862022', '', '2022-06-14 06:14:36', 'OUT'),
(26, '17185092022', '', '2022-06-14 06:16:38', 'IN'),
(27, '17185092022', '', '2022-06-14 06:16:39', 'OUT'),
(28, '17141842022', '', '2022-06-14 09:45:37', 'IN'),
(29, '17141842022', '', '2022-06-14 09:45:58', 'OUT');

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `nip` varchar(30) NOT NULL,
  `jenis_cuti` varchar(100) NOT NULL,
  `file` varchar(100) DEFAULT NULL,
  `alasan` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `waktu_pengajuan` date NOT NULL,
  `waktu_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `date_created`, `nip`, `jenis_cuti`, `file`, `alasan`, `status`, `waktu_pengajuan`, `waktu_selesai`) VALUES
(7, '2022-06-06 07:07:18', '17185092022', 'Izin', '', 'Mau Pergi Liburan', '2', '2022-06-07', '2022-06-20'),
(8, '2022-06-14 03:23:56', '17185092022', 'Sakit', '', 'Mau Pergi Liburan', '2', '2022-06-15', '2022-06-22'),
(9, '2022-06-14 04:46:12', '17141842022', 'Sakit', '', 'Sakit flu & batuk', '2', '2022-06-15', '2022-06-18');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `kode_divisi` char(30) NOT NULL,
  `nama_divisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `kode_divisi`, `nama_divisi`) VALUES
(1, 'DV-9618779', 'Keuangan'),
(2, 'DV-7754670', 'Human Resources'),
(3, 'DV-5116191', 'IT Division'),
(4, 'DV-6122392', 'Logistik Pangan'),
(5, 'DV-5748006', 'Logistik Sarana dan Prasarana'),
(9, 'DV-8022149', 'Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `kode_jabatan` char(30) NOT NULL,
  `nama_jabatan` char(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `kode_jabatan`, `nama_jabatan`) VALUES
(1, 'JB-1012021', 'Founder'),
(4, 'JB-4012021', 'Direksi'),
(5, 'JB-6015090', 'Manager'),
(6, 'JB-6577616', 'Assistant Manager'),
(7, 'JB-9741201', 'Supervisor'),
(8, 'JB-8843355', 'Assistant Supervisor'),
(9, 'JB-2876430', 'Kepala Gudang');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_depan` char(100) NOT NULL,
  `nama_belakang` char(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` char(30) NOT NULL,
  `status_nikah` char(50) NOT NULL,
  `gol_darah` char(20) NOT NULL,
  `agama` char(50) NOT NULL,
  `jenis_identitas` char(50) NOT NULL,
  `no_identitas` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `status_karyawan` varchar(50) NOT NULL,
  `tgl_gabung` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `id_divisi` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_shift` int(11) NOT NULL,
  `gaji_pokok` varchar(100) NOT NULL,
  `tunjangan` varchar(100) NOT NULL,
  `jenis_pembayaran` varchar(50) NOT NULL,
  `no_rek` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `nama_akun` varchar(100) NOT NULL,
  `npwp` varchar(100) NOT NULL,
  `pph21` char(10) NOT NULL,
  `ptkp` varchar(100) NOT NULL,
  `metode_pajak` varchar(50) NOT NULL,
  `no_bpjs` varchar(100) NOT NULL,
  `npp_bpjs` varchar(100) DEFAULT NULL,
  `biaya_bpjs` varchar(50) NOT NULL,
  `biaya_jht` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_depan`, `nama_belakang`, `email`, `no_hp`, `tempat_lahir`, `tgl_lahir`, `gender`, `status_nikah`, `gol_darah`, `agama`, `jenis_identitas`, `no_identitas`, `alamat`, `nip`, `status_karyawan`, `tgl_gabung`, `tgl_selesai`, `cabang`, `id_divisi`, `id_jabatan`, `id_shift`, `gaji_pokok`, `tunjangan`, `jenis_pembayaran`, `no_rek`, `bank`, `nama_akun`, `npwp`, `pph21`, `ptkp`, `metode_pajak`, `no_bpjs`, `npp_bpjs`, `biaya_bpjs`, `biaya_jht`) VALUES
(7, 'efraim', 'verdika', 'sihalohoefraim@gmail.com', '+6282124624890', 'jakarta', '2000-02-29', 'Male', 'Single', 'A', 'Christian', 'KTP', '234222334555332222', 'bekasi										', '17144642022', 'Permanent', '2022-06-03', '2024-01-03', 'Pusat', 3, 5, 1, '1000000000', '20000000000', 'Monthly', '12312231344', 'mandiri', '111234211', '1234567890123456', '-', 'TK/3', 'Netto', '23442211344', 'LL078922', 'By employee', 'By employee'),
(8, 'yanto', 'nurlama', 'yanto@gmail.com', '089283746378', 'jakarta', '1999-01-03', 'Male', 'Single', 'O', 'Hindu', 'KTP', '8374783839292020', 'babakan				', '17126862022', 'Probation', '2022-06-03', '2025-10-16', 'Lapangan', 5, 7, 3, '6000000', '3000000', 'Monthly', '27783899', 'mandiri', '22134532', '1233211234567432', '-', 'K/1', 'Netto', '778822873736672', 'LL078922', 'By employee', 'By employee'),
(9, 'Uzi', 'Jonathan', 'ujonathan@outlook.com', '2312312312', 'Bekasi', '2000-12-01', 'Male', 'Married', 'A', 'Christian', 'KTP', '124214214', 'Bekasi', '17185092022', 'Permanent', '2000-01-01', '2100-12-12', 'Lapangan', 9, 6, 3, '25000000', '5000000', 'Monthly', '123414141', 'BCA', 'Uzi Jonathan', '214124124124', '-', 'K/0', 'Netto', '124124124124124', 'LL078922', 'By employee', 'By employee'),
(10, 'Yonatan', 'Arif', 'yonatan@gmail.com', '12442141431414', 'Bekasi', '2002-09-28', 'Male', 'Single', 'O', 'Christian', 'KTP', '13535151353131', 'Bekasi						', '17141842022', 'Permanent', '2022-06-14', '2022-06-30', 'Pusat', 2, 5, 1, '7000000', '3000000', 'Monthly', '1244314134141414', 'BCA', 'Yonathan Arif', '1241241241424', '-', 'TK/0', 'Netto', '4124214124144141', 'LL078922', 'By employee', 'By employee');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id_shift` int(11) NOT NULL,
  `shift` char(50) NOT NULL,
  `jadwal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id_shift`, `shift`, `jadwal`) VALUES
(1, 'OFFICE SCHEDULE', 'Pagi'),
(3, 'OFFICE SCHEDULE', 'Malam');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(30) NOT NULL,
  `user` varchar(50) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `tgl_gaji` date NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL,
  `nama_divisi` varchar(30) NOT NULL,
  `hadir` varchar(50) NOT NULL,
  `izin` varchar(50) NOT NULL,
  `alpha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `user`, `tgl_transaksi`, `tgl_gaji`, `nip`, `nama_jabatan`, `nama_divisi`, `hadir`, `izin`, `alpha`) VALUES
('TR-4824171', 'admin', '2022-06-14', '2022-06-15', '17141842022', 'Manager', 'Human Resources', '25', '1', '1'),
('TR-7567414', 'admin', '2022-06-06', '2022-05-31', '17185092022', 'Assistant Manager', 'Marketing', '31', '0', '0'),
('TR-9136775', 'Efraim', '2022-06-03', '2022-06-03', '17126862022', 'Supervisor', 'Logistik Sarana dan Prasarana', '30', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nip` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nip`, `nama`, `password`, `role_id`) VALUES
('17141842022', 'Yonatan Arif', '123456789', '3'),
('17144642022', 'Efraim Verdika', '123456789', '3'),
('17185092022', 'Uzi Jonathan', '123456789', '3'),
('admin', 'admin', '123456789', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id_absen`);

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id_shift`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id_absen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `id_divisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id_shift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
