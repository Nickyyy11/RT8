-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 19, 2024 at 10:04 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rute8`
--

-- --------------------------------------------------------

--
-- Table structure for table `formulir`
--

CREATE TABLE `formulir` (
  `id` int(11) NOT NULL,
  `id_iuran` int(11) NOT NULL,
  `kepala_keluarga` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `formulir`
--

INSERT INTO `formulir` (`id`, `id_iuran`, `kepala_keluarga`, `nik`, `alamat`, `email`, `telp`, `created_at`, `updated_at`) VALUES
(1, 3, '12313142saads', '213131', 'asdasd', '', '', '2024-08-16 04:05:04', '2024-08-16 04:05:04'),
(2, 5, 'asdad', '23234', 'asfdada', '', '21313', '2024-08-16 04:05:37', '2024-08-16 04:05:37'),
(3, 3, 'asdad', '21313', 'asdsad', 'nickymuhammadiqbal@gmaill.com', '21313', '2024-08-16 04:06:44', '2024-08-16 04:06:44'),
(4, 3, 'asdad', '12313', 'asdad', 'nickymuhammadiqbal@gmaill.com', '2132', '2024-08-16 04:14:02', '2024-08-16 04:14:02'),
(5, 3, '12313142saads', '12313', 'asdasd', 'nickymuhammadiqbal@gmaill.com', '23424', '2024-08-16 04:28:15', '2024-08-16 04:28:15'),
(6, 4, 'niki', '123123133123', 'asfdada', 'nicky@gmail.com', '41241243', '2024-08-16 04:44:05', '2024-08-16 04:44:05'),
(8, 3, '12313142saads', '123123123', 'adsad', 'admin@gmail.com', '2121211', '2024-08-19 01:08:28', '2024-08-19 01:08:28'),
(9, 3, 'aaaaaassaaa', '123123', 'asdasd', 'nickymuhammadiqbal@gmaill.com', '2131', '2024-08-19 01:56:28', '2024-08-19 01:56:28'),
(10, 4, 'niki', '12131', '1231', '123@gmail.com', '1231', '2024-08-19 02:17:10', '2024-08-19 02:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `iuran`
--

CREATE TABLE `iuran` (
  `id` int(11) NOT NULL,
  `nama_iuran` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `iuran`
--

INSERT INTO `iuran` (`id`, `nama_iuran`, `harga`, `created_at`, `updated_at`) VALUES
(3, 'Sampah', '25.000', '2024-08-16 02:53:47', '2024-08-16 04:03:48'),
(4, 'Bulanan', '15.000', '2024-08-16 02:54:01', '2024-08-16 04:03:48'),
(5, 'Satpam', '10.000\r\n', '2024-08-16 02:54:59', '2024-08-16 04:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `nama_level` varchar(50) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `nama_level`, `keterangan`, `created_at`, `updated_at`) VALUES
(9, 'Admin', 'Sipaling admin', '2024-07-12 06:08:36', '2024-07-12 06:08:36'),
(10, 'user44', 'sipaling user', '2024-07-12 06:08:43', '2024-07-12 06:08:43');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(100) NOT NULL,
  `tanggal_lahir` date NOT NULL DEFAULT current_timestamp(),
  `alamat` text NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `deleted_at` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama_lengkap`, `email`, `password`, `tanggal_lahir`, `alamat`, `no_hp`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'Nicky', 'nicky@gmail.com', 123456, '2024-08-19', 'Jakarta', '', 0, '2024-07-18 04:06:21', '2024-07-18 04:13:42'),
(4, 'Lazuardi', 'abc@gmail.com', 0, '2024-08-13', 'asdasd', '03612651262', 0, '2024-08-19 07:28:28', '2024-08-19 07:28:28'),
(5, 'test', 'test@gmail.com', 0, '2222-02-22', 'awdawdad', '1123132123123', 0, '2024-08-19 07:30:55', '2024-08-19 07:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `email_website` varchar(50) NOT NULL,
  `notlp_website` varchar(20) NOT NULL,
  `alamat_website` text NOT NULL,
  `ig` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `email_website`, `notlp_website`, `alamat_website`, `ig`, `twitter`, `fb`, `linkedin`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'websitesss@gmail.com', '087840295950', '  Griya Manunggal 2C', 'https://www.instagram.com/', 'https://x.com/?lang=id', 'https://www.facebook.com/', 'https://x.com/?lang=id', '', '2024-07-17 07:49:49', '2024-07-19 03:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `id_level`, `nama_lengkap`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 9, 'nickydssafasa', 'nicky@gmail.com', '9adcb29710e807607b683f62e555c22dc5659713', '2024-07-22 06:51:13', '2024-07-22 06:51:13'),
(20, 9, 'Nicky Muhammad Iqbal', 'nickymuhammadiqbal@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-07-12 06:09:02', '2024-07-12 06:09:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formulir`
--
ALTER TABLE `formulir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_iuran` (`id_iuran`);

--
-- Indexes for table `iuran`
--
ALTER TABLE `iuran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_lever` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formulir`
--
ALTER TABLE `formulir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `iuran`
--
ALTER TABLE `iuran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `formulir`
--
ALTER TABLE `formulir`
  ADD CONSTRAINT `id_iuran` FOREIGN KEY (`id_iuran`) REFERENCES `iuran` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_id_lever` FOREIGN KEY (`id_level`) REFERENCES `level` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
