-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2021 at 10:18 AM
-- Server version: 5.7.34
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `morowali_wisata`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(144) NOT NULL,
  `password` varchar(144) NOT NULL,
  `email` varchar(144) NOT NULL,
  `admin_name` varchar(144) NOT NULL,
  `gambar` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `email`, `admin_name`, `gambar`) VALUES
(3, 'arsalam', '12345', 'suakomoana@gmail.com', 'Arsalam', 'ririrka.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(11) NOT NULL,
  `jenis_kategori` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `jenis_kategori`) VALUES
(1, 'Tiket Wisata'),
(3, 'Kendaraan'),
(4, 'Penginapan'),
(7, 'Tempat Wisata');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pembayaran`
--

CREATE TABLE `tb_pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bukti_bayar` varchar(144) NOT NULL,
  `status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pembayaran`
--

INSERT INTO `tb_pembayaran` (`id_pembayaran`, `id_transaksi`, `tgl_bayar`, `bukti_bayar`, `status`) VALUES
(1, 1, '2021-03-12', 'bukti.jpg', '0'),
(3, 1065726067, '2021-03-24', 'Midtrans', '1'),
(4, 579247995, '2021-03-24', 'Midtrans', '0'),
(5, 1672655197, '2021-03-24', 'Midtrans', '0'),
(6, 1450353494, '2021-04-14', 'Midtrans', '0'),
(7, 1941525522, '2021-04-14', 'Midtrans', '0'),
(8, 1258141974, '2021-04-14', 'Midtrans', '0'),
(9, 210368505, '2021-04-14', 'Midtrans', '1'),
(10, 2033491380, '2021-04-14', 'Midtrans', '1'),
(11, 1443436096, '2021-04-14', 'Midtrans', '0'),
(12, 1958189171, '2021-04-14', 'Midtrans', '0'),
(13, 768775202, '2021-04-14', 'Midtrans', '0'),
(14, 641175498, '2021-04-16', 'Midtrans', '0'),
(15, 1740278620, '2021-04-16', 'Midtrans', '0'),
(16, 88815204, '2021-04-16', 'Midtrans', '1'),
(17, 1207028353, '2021-04-16', 'Midtrans', '1'),
(18, 152616739, '2021-04-16', 'Midtrans', '1'),
(19, 1762930034, '2021-04-16', 'Midtrans', '1'),
(20, 1881732925, '2021-04-18', 'Midtrans', '1'),
(21, 2086537869, '2021-04-20', 'Midtrans', '0'),
(22, 1685569459, '2021-04-20', 'Midtrans', '1'),
(23, 6249293, '2021-04-20', 'Midtrans', '0'),
(24, 107505608, '2021-04-20', 'Midtrans', '1'),
(25, 1974398195, '2021-04-20', 'Midtrans', '1'),
(26, 804738435, '2021-04-20', 'Midtrans', '1'),
(27, 2107254744, '2021-04-20', 'Midtrans', '0'),
(28, 1248059387, '2021-04-21', 'Midtrans', '1'),
(29, 815181720, '2021-04-21', 'Midtrans', '1'),
(30, 1392614003, '2021-04-21', 'Midtrans', '1'),
(31, 514433826, '2021-04-21', 'Midtrans', '1'),
(32, 1021891600, '2021-04-21', 'Midtrans', '0'),
(33, 2145584444, '2021-04-22', 'Midtrans', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_produk` varchar(144) NOT NULL,
  `stok` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(144) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `id_kategori`, `nama_produk`, `stok`, `deskripsi`, `gambar`, `harga`) VALUES
(1, 1, 'Pulau Sambori', 10, '	Angin lembut yang bertiup, air laut yang jernih.', 'Pulau Sambori.jpg', 250000),
(4, 1, 'Pantai Puluti', 7, 'Pemandangan pantai pasir putih cantik.', 'pantai puluti.PNG', 80000),
(7, 1, 'Permandian Mata Air Tompaika', 20, 'Nikmatnya air terjun dengan air yang segar dan jernih', 'Tompaika.jpg', 10000),
(9, 1, 'Bukit Kembar', 25, 'Pemandangan Bukit Kembar', 'Bukit Kembar.jpg', 15000),
(10, 1, 'Gua Allo', 10, 'Laut  yang tenang', 'Gua Allo.jpg', 200000),
(11, 1, 'Kebun Binatang Wosu', 25, 'Melihat rusa di padang savana', 'kebun binatang.jpg', 20000),
(12, 1, 'Matansala Mangrove', 10, 'Berwisata melihat hamparan mangrove disertai belajar tentang mangrove itu sendiri', 'wisata mangrove.jpg', 15000),
(13, 1, 'Permandian Veranomata', 20, 'Dinginnya air yang langsung dari mata air', 'permandian veranomata.jpg', 15000),
(14, 1, 'Air Terjun Sampala', 15, 'Derasnya air yang jatuh dari ketinggian', 'air terjun sampala.jpg', 15000),
(15, 1, 'Pasir Panjang Tangofa', 20, 'Bersantai dipinggir pantai dengan pasir putih yang terbentang luas memanjang', 'pasir panjang tangofa.jpg', 20000),
(16, 4, 'Hotel Metro', 20, 'Menginap dengan nyaman bersama kami', 'hotel metro.jpg', 350000),
(17, 4, 'Penginapan Latanete', 10, 'Istrahat dengan aman dan nyaman', 'Latanete 1.jpg', 165000),
(18, 4, 'Hotel Galang', 16, 'Tidur dengan aman dan nyaman', 'hotel galang.PNG', 200000),
(19, 4, 'Penginapan Kafqa', 8, 'Suasana asri yang membuat badan jadi rileks', 'penginapan kafqa.PNG', 120000),
(20, 4, 'Penginapan Lima Satu', 7, 'Penginapan pinggir pantai yang membuat anda rileks', 'penginapan lima satu.PNG', 75000),
(21, 4, 'Penginapan Bintang', 10, 'Menginap dengan nyaman', 'penginapan bintang.PNG', 80000),
(22, 4, 'Penginapan Mawar Indah', 6, 'Penginapan yang cocok untuk anda', 'penginapan mawar indah.PNG', 75000),
(23, 4, 'Penginapan Anunta Baru', 12, 'Penginapan yang memiliki fasilitas pertemuan', 'penginapan anunta baru.PNG', 100000),
(24, 3, 'Avanza', 3, 'Berkendara keliling Morowali dengan nyaman dan aman', 'Avanza.jpg', 250000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_titik`
--

CREATE TABLE `tb_titik` (
  `id_titik` int(11) NOT NULL,
  `id_wisata` int(11) NOT NULL,
  `longtitude` varchar(144) NOT NULL,
  `latitude` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_titik`
--

INSERT INTO `tb_titik` (`id_titik`, `id_wisata`, `longtitude`, `latitude`) VALUES
(20, 4, '122.39814510000575', '-3.2713291832241223'),
(21, 5, '121.99882032766403', '-2.616251089559522'),
(22, 9, '121.950873', '-2.559917'),
(23, 12, '121.36336118001918', '-1.9459698472766591'),
(24, 13, '122.4226660451288', '-3.276257627616319'),
(25, 14, '121.82665817130241', '-2.3528926005945006'),
(26, 15, '121.96044630199054', '-2.5249564166927887'),
(27, 16, '121.91017994569171', '-2.528390069761679'),
(28, 17, '121.91017994569171', '-2.5655549284756223'),
(29, 18, '122.305147', '-2.960416');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `tgl_pakai` date NOT NULL,
  `banyak` int(11) NOT NULL,
  `totBayar` int(14) NOT NULL,
  `status` varchar(156) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_produk`, `id_user`, `tgl_transaksi`, `tgl_pakai`, `banyak`, `totBayar`, `status`) VALUES
(1, 1, 1, '2021-03-12', '2021-03-12', 4, 400000, ''),
(6249293, 9, 7, '2021-04-20', '2021-04-21', 1, 15000, '0'),
(88815204, 7, 7, '2021-04-16', '2021-04-18', 2, 2000000, '0'),
(107505608, 9, 7, '2021-04-20', '2021-04-21', 1, 15000, '0'),
(152616739, 4, 7, '2021-04-16', '2021-04-20', 1, 5000000, '0'),
(210368505, 4, 2, '2021-04-14', '2021-04-30', 1, 5000000, '0'),
(514433826, 19, 7, '2021-04-21', '2021-04-26', 1, 120000, '0'),
(579247995, 1, 1, '2021-03-24', '2021-03-31', 2, 6000000, '0'),
(641175498, 7, 7, '2021-04-16', '2021-04-17', 1, 1000000, '0'),
(768775202, 1, 7, '2021-04-14', '2021-04-16', 1, 3000000, '0'),
(804738435, 21, 7, '2021-04-20', '2021-04-23', 5, 400000, '0'),
(815181720, 13, 7, '2021-04-21', '2021-04-24', 1, 15000, '0'),
(1021891600, 23, 7, '2021-04-21', '2021-04-23', 1, 100000, '0'),
(1065726067, 4, 2, '2021-03-24', '2021-03-31', 2, 10000000, '0'),
(1207028353, 4, 7, '2021-04-16', '2021-04-19', 1, 5000000, '0'),
(1248059387, 4, 8, '2021-04-21', '2021-04-27', 3, 240000, '0'),
(1258141974, 1, 2, '2021-04-14', '2021-04-21', 1, 3000000, '0'),
(1392614003, 14, 7, '2021-04-21', '2021-04-23', 1, 15000, '0'),
(1443436096, 1, 7, '2021-04-14', '2021-04-15', 1, 3000000, '0'),
(1450353494, 1, 2, '2021-04-14', '2021-05-05', 2, 6000000, '0'),
(1672655197, 7, 1, '2021-03-24', '2021-03-29', 2, 2000000, '0'),
(1685569459, 11, 7, '2021-04-20', '2021-04-23', 5, 100000, '0'),
(1740278620, 7, 7, '2021-04-16', '2021-04-17', 1, 1000000, '0'),
(1762930034, 1, 7, '2021-04-16', '2021-04-19', 1, 3000000, '0'),
(1881732925, 4, 7, '2021-04-18', '2021-04-21', 1, 80000, '0'),
(1941525522, 4, 2, '2021-04-14', '2021-04-15', 2, 10000000, '0'),
(1958189171, 4, 7, '2021-04-14', '2021-04-16', 1, 5000000, '0'),
(1974398195, 24, 7, '2021-04-20', '2021-04-23', 3, 750000, '0'),
(2033491380, 7, 2, '2021-04-14', '2021-04-01', 2, 2000000, '0'),
(2086537869, 15, 7, '2021-04-20', '2021-04-25', 1, 20000, '0'),
(2107254744, 1, 7, '2021-04-20', '2021-04-23', 1, 250000, '0'),
(2145584444, 7, 7, '2021-04-22', '2021-04-23', 1, 10000, '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `fname` varchar(144) NOT NULL,
  `lname` varchar(144) NOT NULL,
  `email` varchar(144) NOT NULL,
  `telephone` varchar(144) NOT NULL,
  `username` varchar(144) NOT NULL,
  `password` varchar(144) NOT NULL,
  `gambar` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `fname`, `lname`, `email`, `telephone`, `username`, `password`, `gambar`) VALUES
(1, 'Arsalam', 'Launu', 'arsalam@gmail.com', '08389675788', 'arsalam', '12345', 'arsalam.jpg'),
(2, 'M', 'Dhifta', 'dhifta48@gmail.com', '085791419622', 'mdhifta', '123456', 'IMG_20200617_132751 (1).jpg'),
(6, 'ssss', 'wwww', 'modira@gmail.com', '', '', '1233333', ''),
(7, 'Ismail', 'Alex', 'launualam@gmail.com', '08123456789', 'ismailalex', '12345', 'nozomohana.jpg'),
(8, 'M', 'Dhifta', 'selvyerhita@gmail.com', '', '', '12345', ''),
(9, 'yusriandi', 'alfian ', 'yusriandi20@gmail.com', '', '', 'singkalu', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nama_tempat` varchar(144) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(144) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `id_kategori`, `nama_tempat`, `deskripsi`, `gambar`) VALUES
(4, 7, 'Pulau Sambori', 'Angin lembut yang bertiup, air laut yang jernih.', 'Pulau Sambori.jpg'),
(5, 7, 'Pantai Puluti', 'Pemandangan pantai pasir putih cantik.', 'pantai puluti.PNG'),
(9, 7, 'Permandian Mata Air Tompaika', 'Nikmatnya air terjun dengan air yang segar dan jernih', 'Tompaika.jpg'),
(12, 7, 'Bukit Kembar', 'Pemandangan Bukit Kembar', 'Bukit Kembar.jpg'),
(13, 7, 'Gua Allo', 'Laut yang Tenang ', 'Gua Allo.jpg'),
(14, 7, 'Kebun Binatang Wosu', 'Melihat rusa di padang savana', 'kebun binatang.jpg'),
(15, 7, 'Matansala Mangrove', 'Berwisata melihat hamparan mangrove disertai belajar tentang mangrove itu sendiri', 'wisata mangrove.jpg'),
(16, 7, 'Permandian Veranomata', 'Dinginnya air yang langsung dari mata air', 'permandian veranomata.jpg'),
(17, 7, 'Air Terjun Sampala', 'Derasnya air yang jatuh dari ketinggian', 'air terjun sampala.jpg'),
(18, 7, 'Pasir Panjang Tangofa', 'Bersantai dipinggir pantai dengan pasir putih yang terbentang luas memanjang', 'pasir panjang tangofa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tb_titik`
--
ALTER TABLE `tb_titik`
  ADD PRIMARY KEY (`id_titik`),
  ADD KEY `id_wisata` (`id_wisata`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_titik`
--
ALTER TABLE `tb_titik`
  MODIFY `id_titik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2145584445;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  ADD CONSTRAINT `tb_pembayaran_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tb_transaksi` (`id_transaksi`);

--
-- Constraints for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);

--
-- Constraints for table `tb_titik`
--
ALTER TABLE `tb_titik`
  ADD CONSTRAINT `tb_titik_ibfk_1` FOREIGN KEY (`id_wisata`) REFERENCES `tb_wisata` (`id_wisata`);

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`),
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`);

--
-- Constraints for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD CONSTRAINT `tb_wisata_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
