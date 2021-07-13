-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 03:30 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(3, 'arsalam', '12345', 'suakomoana@gmail.com', 'Arsalam', '82474155_p0 - Copy.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jual`
--

CREATE TABLE `tb_jual` (
  `id_jual` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tanggal_jual` date NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jual`
--

INSERT INTO `tb_jual` (`id_jual`, `id_produk`, `tanggal_jual`, `stock`) VALUES
(1, 4, '2021-04-24', 0),
(2, 1, '2021-04-23', 7),
(6, 1, '2021-04-27', 10),
(10, 1, '2021-05-01', 10),
(23, 4, '2021-04-30', 10),
(34, 7, '2021-04-27', 20),
(35, 7, '2021-04-28', 20),
(48, 9, '2021-04-27', 21),
(72, 10, '2021-05-07', 9),
(90, 12, '2021-04-27', 17),
(103, 13, '2021-04-26', 19),
(118, 14, '2021-04-27', 20),
(132, 15, '2021-04-27', 20),
(160, 16, '2021-04-27', 14),
(175, 17, '2021-04-27', 8),
(188, 18, '2021-04-26', 12),
(203, 19, '2021-04-27', 8),
(355, 1, '2021-06-03', -1),
(356, 1, '2021-06-04', 8),
(357, 1, '2021-06-05', 10),
(358, 1, '2021-06-06', 10),
(359, 1, '2021-06-07', 10),
(360, 1, '2021-06-08', 10),
(361, 1, '2021-06-09', 10),
(362, 1, '2021-06-10', 10),
(363, 1, '2021-06-11', 10),
(364, 1, '2021-06-12', 10),
(365, 1, '2021-06-13', 10),
(366, 1, '2021-06-14', 10),
(367, 1, '2021-06-15', 10),
(368, 1, '2021-06-16', 10),
(369, 1, '2021-06-17', 10),
(370, 4, '2021-06-04', 8),
(371, 4, '2021-06-05', 10),
(372, 4, '2021-06-06', 10),
(373, 4, '2021-06-07', 10),
(374, 4, '2021-06-08', 10),
(375, 4, '2021-06-09', 10),
(376, 4, '2021-06-10', 10),
(377, 4, '2021-06-11', 10),
(378, 4, '2021-06-12', 10),
(379, 4, '2021-06-13', 10),
(380, 4, '2021-06-14', 10),
(381, 4, '2021-06-15', 10),
(382, 4, '2021-06-16', 10),
(383, 4, '2021-06-17', 10),
(384, 7, '2021-06-04', 15),
(385, 7, '2021-06-05', 15),
(386, 7, '2021-06-06', 15),
(387, 7, '2021-06-07', 15),
(388, 7, '2021-06-08', 15),
(389, 7, '2021-06-09', 15),
(390, 7, '2021-06-10', 15),
(391, 7, '2021-06-11', 15),
(392, 7, '2021-06-12', 15),
(393, 7, '2021-06-13', 15),
(394, 7, '2021-06-14', 15),
(395, 7, '2021-06-15', 15),
(396, 7, '2021-06-16', 15),
(397, 7, '2021-06-17', 15),
(398, 9, '2021-06-04', 10),
(399, 9, '2021-06-05', 10),
(400, 9, '2021-06-06', 10),
(401, 9, '2021-06-07', 10),
(402, 9, '2021-06-08', 10),
(403, 9, '2021-06-09', 10),
(404, 9, '2021-06-10', 10),
(405, 9, '2021-06-11', 10),
(406, 9, '2021-06-12', 10),
(407, 9, '2021-06-13', 10),
(408, 9, '2021-06-14', 10),
(409, 9, '2021-06-15', 10),
(410, 9, '2021-06-16', 10),
(411, 9, '2021-06-17', 10),
(412, 10, '2021-06-04', 10),
(413, 10, '2021-06-05', 10),
(414, 10, '2021-06-06', 10),
(415, 10, '2021-06-07', 10),
(416, 10, '2021-06-08', 10),
(417, 10, '2021-06-09', 10),
(418, 10, '2021-06-10', 10),
(419, 10, '2021-06-11', 10),
(420, 10, '2021-06-12', 10),
(421, 10, '2021-06-13', 10),
(422, 10, '2021-06-14', 10),
(423, 10, '2021-06-15', 10),
(424, 10, '2021-06-16', 10),
(425, 10, '2021-06-17', 10),
(426, 11, '2021-06-04', 15),
(427, 11, '2021-06-05', 15),
(428, 11, '2021-06-06', 15),
(429, 11, '2021-06-07', 15),
(430, 11, '2021-06-08', 15),
(431, 11, '2021-06-09', 15),
(432, 11, '2021-06-10', 15),
(433, 11, '2021-06-11', 15),
(434, 11, '2021-06-12', 15),
(435, 11, '2021-06-13', 15),
(436, 11, '2021-06-14', 15),
(437, 11, '2021-06-15', 15),
(438, 11, '2021-06-16', 15),
(439, 11, '2021-06-17', 15),
(440, 12, '2021-06-04', 14),
(441, 12, '2021-06-05', 15),
(442, 12, '2021-06-06', 15),
(443, 12, '2021-06-07', 15),
(444, 12, '2021-06-08', 15),
(445, 12, '2021-06-09', 15),
(446, 12, '2021-06-10', 15),
(447, 12, '2021-06-11', 15),
(448, 12, '2021-06-12', 15),
(449, 12, '2021-06-13', 15),
(450, 12, '2021-06-14', 15),
(451, 12, '2021-06-15', 15),
(452, 12, '2021-06-16', 15),
(453, 12, '2021-06-17', 15),
(454, 13, '2021-06-04', 15),
(455, 13, '2021-06-05', 15),
(456, 13, '2021-06-06', 15),
(457, 13, '2021-06-07', 15),
(458, 13, '2021-06-08', 15),
(459, 13, '2021-06-09', 15),
(460, 13, '2021-06-10', 15),
(461, 13, '2021-06-11', 15),
(462, 13, '2021-06-12', 15),
(463, 13, '2021-06-13', 15),
(464, 13, '2021-06-14', 15),
(465, 13, '2021-06-15', 15),
(466, 13, '2021-06-16', 15),
(467, 13, '2021-06-17', 15),
(468, 14, '2021-06-04', 15),
(469, 14, '2021-06-05', 15),
(470, 14, '2021-06-06', 15),
(471, 14, '2021-06-07', 15),
(472, 14, '2021-06-08', 15),
(473, 14, '2021-06-09', 15),
(474, 14, '2021-06-10', 15),
(475, 14, '2021-06-11', 15),
(476, 14, '2021-06-12', 15),
(477, 14, '2021-06-13', 15),
(478, 14, '2021-06-14', 15),
(479, 14, '2021-06-15', 15),
(480, 14, '2021-06-16', 15),
(481, 14, '2021-06-17', 15),
(482, 15, '2021-06-04', 15),
(483, 15, '2021-06-05', 15),
(484, 15, '2021-06-06', 15),
(485, 15, '2021-06-07', 15),
(486, 15, '2021-06-08', 15),
(487, 15, '2021-06-09', 15),
(488, 15, '2021-06-10', 15),
(489, 15, '2021-06-11', 15),
(490, 15, '2021-06-12', 15),
(491, 15, '2021-06-13', 15),
(492, 15, '2021-06-14', 15),
(493, 15, '2021-06-15', 15),
(494, 15, '2021-06-16', 15),
(495, 15, '2021-06-17', 15),
(496, 24, '2021-06-04', 2),
(497, 24, '2021-06-05', 2),
(498, 24, '2021-06-06', 2),
(499, 24, '2021-06-07', 2),
(500, 24, '2021-06-08', 2),
(501, 24, '2021-06-09', 2),
(502, 24, '2021-06-10', 2),
(503, 24, '2021-06-11', 2),
(504, 24, '2021-06-12', 2),
(505, 24, '2021-06-13', 2),
(506, 24, '2021-06-14', 2),
(507, 24, '2021-06-15', 2),
(508, 24, '2021-06-16', 2),
(509, 24, '2021-06-17', 2),
(510, 16, '2021-06-04', 15),
(511, 16, '2021-06-05', 15),
(512, 16, '2021-06-06', 15),
(513, 16, '2021-06-07', 15),
(514, 16, '2021-06-08', 15),
(515, 16, '2021-06-09', 15),
(516, 16, '2021-06-10', 15),
(517, 16, '2021-06-11', 15),
(518, 16, '2021-06-12', 15),
(519, 16, '2021-06-13', 15),
(520, 16, '2021-06-14', 15),
(521, 16, '2021-06-15', 15),
(522, 16, '2021-06-16', 15),
(523, 16, '2021-06-17', 15),
(524, 17, '2021-06-04', 7),
(525, 17, '2021-06-05', 7),
(526, 17, '2021-06-06', 7),
(527, 17, '2021-06-07', 7),
(528, 17, '2021-06-08', 7),
(529, 17, '2021-06-09', 7),
(530, 17, '2021-06-10', 7),
(531, 17, '2021-06-11', 7),
(532, 17, '2021-06-12', 7),
(533, 17, '2021-06-13', 7),
(534, 17, '2021-06-14', 7),
(535, 17, '2021-06-15', 7),
(536, 17, '2021-06-16', 7),
(537, 17, '2021-06-17', 7),
(538, 18, '2021-06-04', 12),
(539, 18, '2021-06-05', 12),
(540, 18, '2021-06-06', 12),
(541, 18, '2021-06-07', 12),
(542, 18, '2021-06-08', 12),
(543, 18, '2021-06-09', 12),
(544, 18, '2021-06-10', 12),
(545, 18, '2021-06-11', 12),
(546, 18, '2021-06-12', 12),
(547, 18, '2021-06-13', 12),
(548, 18, '2021-06-14', 12),
(549, 18, '2021-06-15', 12),
(550, 18, '2021-06-16', 12),
(551, 18, '2021-06-17', 12),
(552, 19, '2021-06-04', 9),
(553, 19, '2021-06-05', 9),
(554, 19, '2021-06-06', 9),
(555, 19, '2021-06-07', 9),
(556, 19, '2021-06-08', 9),
(557, 19, '2021-06-09', 9),
(558, 19, '2021-06-10', 9),
(559, 19, '2021-06-11', 9),
(560, 19, '2021-06-12', 9),
(561, 19, '2021-06-13', 9),
(562, 19, '2021-06-14', 9),
(563, 19, '2021-06-15', 9),
(564, 19, '2021-06-16', 9),
(565, 19, '2021-06-17', 9),
(566, 20, '2021-06-04', 7),
(567, 20, '2021-06-05', 7),
(568, 20, '2021-06-06', 7),
(569, 20, '2021-06-07', 7),
(570, 20, '2021-06-08', 7),
(571, 20, '2021-06-09', 7),
(572, 20, '2021-06-10', 7),
(573, 20, '2021-06-11', 7),
(574, 20, '2021-06-12', 7),
(575, 20, '2021-06-13', 7),
(576, 20, '2021-06-14', 7),
(577, 20, '2021-06-15', 7),
(578, 20, '2021-06-16', 7),
(579, 20, '2021-06-17', 7),
(580, 21, '2021-06-04', 8),
(581, 21, '2021-06-05', 8),
(582, 21, '2021-06-06', 8),
(583, 21, '2021-06-07', 8),
(584, 21, '2021-06-08', 8),
(585, 21, '2021-06-09', 8),
(587, 21, '2021-06-10', 8),
(588, 21, '2021-06-11', 8),
(589, 21, '2021-06-12', 8),
(590, 21, '2021-06-13', 8),
(591, 21, '2021-06-14', 8),
(592, 21, '2021-06-15', 8),
(593, 21, '2021-06-16', 8),
(594, 21, '2021-06-17', 8),
(595, 22, '2021-06-04', 6),
(596, 22, '2021-06-05', 6),
(597, 22, '2021-06-06', 6),
(598, 22, '2021-06-07', 6),
(599, 22, '2021-06-08', 6),
(600, 22, '2021-06-09', 6),
(601, 22, '2021-06-10', 6),
(602, 22, '2021-06-11', 6),
(603, 22, '2021-06-12', 6),
(604, 22, '2021-06-13', 6),
(605, 22, '2021-06-14', 6),
(606, 22, '2021-06-15', 6),
(607, 22, '2021-06-16', 6),
(608, 22, '2021-06-17', 6),
(609, 23, '2021-06-04', 7),
(610, 23, '2021-06-05', 7),
(611, 23, '2021-06-06', 7),
(612, 23, '2021-06-07', 7),
(613, 23, '2021-06-08', 7),
(614, 23, '2021-06-09', 7),
(615, 23, '2021-06-10', 7),
(616, 23, '2021-06-11', 7),
(617, 23, '2021-06-12', 7),
(618, 23, '2021-06-13', 7),
(619, 23, '2021-06-14', 7),
(620, 23, '2021-06-15', 7),
(621, 23, '2021-06-16', 7),
(622, 23, '2021-06-17', 7),
(623, 26, '2021-06-04', 6),
(624, 26, '2021-06-05', 7),
(625, 26, '2021-06-06', 7),
(626, 26, '2021-06-07', 7),
(627, 26, '2021-06-08', 7),
(628, 23, '2021-06-09', 7),
(629, 26, '2021-06-09', 7),
(630, 26, '2021-06-10', 7),
(631, 26, '2021-06-11', 7),
(632, 26, '2021-06-12', 7),
(633, 26, '2021-06-13', 7),
(634, 26, '2021-06-14', 7),
(635, 26, '2021-06-15', 7),
(636, 26, '2021-06-16', 7),
(637, 27, '2021-06-04', 22),
(638, 27, '2021-06-05', 22),
(639, 27, '2021-06-06', 22),
(640, 27, '2021-06-07', 22),
(641, 27, '2021-06-08', 22),
(642, 27, '2021-06-09', 22),
(643, 27, '2021-06-10', 22),
(644, 27, '2021-06-11', 22),
(645, 27, '2021-06-12', 22),
(646, 27, '2021-06-13', 22),
(647, 27, '2021-06-14', 22),
(648, 27, '2021-06-15', 22),
(649, 27, '2021-06-16', 22),
(650, 27, '2021-06-17', 22),
(651, 26, '2021-06-17', 7);

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
(34, 735207483, '2021-04-22', '87748242226', '1'),
(35, 1839446077, '2021-04-22', '9888774828805703', '1'),
(36, 1156210428, '2021-04-23', '9888774815424153', '1'),
(37, 193194326, '2021-04-23', '87748892298', '1'),
(38, 1742150027, '2021-04-23', '9888774892434769', '1'),
(39, 188582467, '2021-04-23', '87748831408', '0'),
(40, 578615152, '2021-04-23', '87748219609', '1'),
(43, 617309876, '2021-04-26', '9888774869966218', '1'),
(44, 46075710, '2021-04-26', '9888774831891581', '1'),
(45, 1195263976, '2021-04-26', '9888774815883783', '1'),
(46, 1435980043, '2021-04-26', '9888774846008153', '0'),
(47, 1568127345, '2021-04-26', '9888774842278373', '0'),
(48, 1973459808, '2021-04-26', '9888774814649879', '0'),
(49, 1557831602, '2021-04-26', '9888774813437928', '1'),
(50, 1339502611, '2021-04-26', '9888774850184432', '1'),
(51, 1188478473, '2021-04-26', '87748766292', '1'),
(52, 845481565, '2021-04-26', '9888774841949169', '0'),
(54, 1556746857, '2021-04-27', '87748978833', '0'),
(55, 1246833167, '2021-04-27', '9888774834505864', '0'),
(56, 581220120, '2021-04-27', '87748274340', '0'),
(57, 925462135, '2021-04-27', '87748172472', '0'),
(58, 1544999763, '2021-04-27', '87748923387', '0'),
(59, 1795089270, '2021-04-29', '87748094946', '0'),
(60, 1285483608, '2021-06-02', '87748090935', '1'),
(61, 548178411, '2021-06-03', '9888774888751250', '1'),
(62, 710938704, '2021-06-03', '9888774869312948', '1'),
(63, 196227752, '2021-06-04', '9888774882477221', '0');

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
(1, 1, 'Pulau Sambori', 0, 'Perjalanan menuju pulau sambori dengan perjalanan darat selama 2 jam dari ibu kota Morowali menuju desa lafeu, kemudian dilanjutkan dengan menggunakan kapal laut selama 2 jam. Harga tiket sudah termasuk biaya pulang pergi menggunakan kapal laut.', 'Pulau Sambori.jpg', 250000),
(4, 1, 'Pantai Puluti', 0, 'Pantai Puluti merupakan pantai yang terletak di desa lahuafu, Morowali, Sulawesi Tengah. Perjalanan menuju pantai puluti memakan waktu selama  40 menit dengan perjalanan darat dari ibukota Morowali. Harga tiket ini tidak termasuk biaya sewa fasilitas', 'pantai puluti.PNG', 10000),
(7, 1, 'Permandian Mata Air Tompaika', 0, 'Permandian Mata Air Tompaika terletak di desa Sakita, Morowali. Perjalanan dapat ditempuh dengan berkendara dari ibukota Morowali selama 15 menit. Setelah itu dilanjutkan dengan berjalan kaki selama 10 menit untuk sampai ke tempat permandian Tompaika', 'Tompaika.jpg', 10000),
(9, 1, 'Bukit Kembar', 0, 'Perjalanan menuju bukit kembar dapat ditempuh dengan perjalanan darat selama +-2 jam dari ibukota Morowali. Dilanjutkan dengan kapal laut selama kurang lebih 45 menit. Harga tiket belum termasuk biaya perjalanan kapal laut menuju lokasi Bukit Kembar.', 'Bukit Kembar.jpg', 15000),
(10, 1, 'Gua Allo', 0, 'Perjalanan menuju Gua Allo dengan perjalanan darat selama 2 jam dari ibu kota Morowali menuju desa lafeu. Kemudian dilanjutkan dengan menggunakan kapal laut selama 1,5 jam. Harga tiket ini sudah termasuk biaya pulang pergi menggunakan kapal laut.', 'Gua Allo.jpg', 200000),
(11, 1, 'Kebun Binatang Wosu', 0, 'Kebun binatang wosu baru memelihara jenis hewan rusa saja, kebun binatang masih tahap pembangunan. Perjalanan menuju kebun binatang Wosu melalui perjalanan darat selama 1 jam dari ibukota Morowali. Harga tiket sudah termasuk 1 pack makanan untuk rusa', 'kebun binatang.jpg', 20000),
(12, 1, 'Matansala Mangrove', 0, 'Perjalanan menuju Matansala Mangrove dari ibukota Morowali melalui perjalanan darat selama 15 menit. Harga tiket ini termasuk izin untuk dapat melakukan penanaman bibit bakau secara langsung. Tidak termasuk  biaya pembelian bibit bakau untuk ditanam.', 'wisata mangrove.jpg', 15000),
(13, 1, 'Permandian Veranomata', 0, 'Perjalanan menuju permandian Veranomata dapat ditempuh dengan perjalanan darat selama 30 menit dari ibukota Morowali. Harga tiket sudah termasuk 3 tingkat permandian yang ada di veranomata. Tidak termasuk biaya sewa fasilitas wisata seperti pelampung', 'permandian veranomata.jpg', 15000),
(14, 1, 'Air Terjun Sampala', 0, 'Perjalanan menuju Air Terjun Sampala dapat ditempuh selama 10 menit dari ibukota Morowali dengan perjalanan darat.  Kemudian dilanjutkan dengan berjalan kaki selama 10 menit. Harga tiket tidak termasuk biaya sewa fasilitas wisata yang ada dilokasi.', 'air terjun sampala.jpg', 15000),
(15, 1, 'Pasir Panjang Tangofa', 0, 'Perjalanan menuju Pasir Panjang Tangofa dapat ditempuh dengan perjalanan darat selama 2 jam dari ibukota Morowali menuju desa Tangofa. Harga tiket tidak termasuk biaya ke tempat wisata dan biaya sewa fasilitas wisata alat renang dan perahu karet.', 'pasir panjang tangofa.jpg', 10000),
(16, 4, 'Hotel Metro', 0, 'Hotel Metro terletak di kompleks perkantoran Bumi Fonuasingko. 17 menit perjalanan darat dari ibukota Morowali. Memiliki parkiran yang luas dengan fasilitas lengkap. Harga tiket tertera untuk 1 malam. Gratis sarapan pagi yang disediakan oleh hotel.', 'hotel metro.jpg', 180000),
(17, 4, 'Penginapan Latanete', 0, 'Penginapan ini berlokasi di Fonuasingko. Lokasi yang dekat dengan pantai membuat penginapan ini cocok untuk anda yang ingin bersantai menikmati hembusan angin pantai dan memiliki halaman penginapan yang luas. Harga tiket tertera untuk 1 malam.', 'Latanete 1.jpg', 165000),
(18, 4, 'Hotel Galang', 0, 'Hotel galang berlokasi di kelurahan marsaoleh ibukota Morowali. Hotel ini memiliki halaman yang luas dan sangat dekat dengan pusat perbelanjaan yang dapat anda jangkau hanya dengan berjalan kaki saja. Harga tiket yang tertera hanya untuk 1 malam.', 'hotel galang.PNG', 170000),
(19, 4, 'Penginapan Kafqa', 0, 'Penginapan ini beralamat di Fonuasingko, Morowali dapat ditempuh selama 18 menit dari ibukota Morowali. Penginapan ini memiliki tempat perbelanjaan tersendiri untuk melengkapi kebutuhan anda. Untuk harga tiket yang tertera hanya untuk 1 malam.', 'penginapan kafqa.PNG', 120000),
(20, 4, 'Penginapan Lima Satu', 0, 'Penginapan Lima Satu terletak di kelurahan Matano di ibukota Morowali. Penginapan ini sangat cocok untuk anda yang mencari penginapan murah. Untuk harga tiket yang tertera berlaku untuk 1 malam. Penginapan mempunyai parkiran yang luas dan aman.', 'penginapan lima satu.PNG', 75000),
(21, 4, 'Penginapan Bintang', 0, 'Penginapan Bintang terletak di kelurahan Marsaoleh di ibukota Morowali. Penginapan ini sangat cocok untuk anda yang mencari penginapan murah. Untuk harga tiket yang tertera berlaku untuk 1 malam. Penginapan mempunyai parkiran yang luas dan aman.', 'penginapan bintang.PNG', 80000),
(22, 4, 'Penginapan Mawar Indah', 0, 'Penginapan Mawar Indah beralamat di Fonuasingko, Morowali dapat ditempuh selama 20 menit dari ibukota Morowali. Penginapan ini sangat cocok untuk anda yang mencari penginapan murah. Untuk harga tiket yang tertera berlaku untuk 1 malam.', 'penginapan mawar indah.PNG', 75000),
(23, 4, 'Penginapan Anunta Baru', 0, 'Penginapan Anunta Baru terletak di kelurahan Bungki di ibukota Morowali. Penginapan Anunta Baru memiliki lingkungan yang sangat tenang, asri dan mempunyai halaman yang sangat luas. Untuk harga tiket yang tertera berlaku untuk 1 malam. ', 'penginapan anunta baru.PNG', 100000),
(24, 3, 'Avanza', 3, 'Berkendara keliling Morowali dengan nyaman dan aman', 'Avanza.jpg', 250000),
(26, 4, 'Penginapan Tenang', 0, 'Penginapan Tenang beralamat di Fonuasingko, Morowali dapat ditempuh selama 20 menit dari ibukota Morowali. Penginapan ini cocok untuk anda yang mencari penginapan murah dan halaman yang luas. Untuk harga tiket yang tertera berlaku untuk 1 malam', 'penginapan tenang.PNG', 75000),
(27, 4, 'Sambori Hotel', 0, 'Sambori Hotel terletak di pulau Sambori yang dapat ditempuh dengan  waktu 2 jam perjalanan darat menuju desa lafeu dan dilanjutkan dengan perjalanan laut selama 2 jam.  Harga tertera sudah termasuk biaya kapal untuk pulang dan pergi ke desa lafeu.', 'sambori hotel.jpg', 200000);

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
  `id_jual` int(11) NOT NULL,
  `banyak` int(11) NOT NULL,
  `totBayar` int(14) NOT NULL,
  `status` varchar(156) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_produk`, `id_user`, `tgl_transaksi`, `id_jual`, `banyak`, `totBayar`, `status`) VALUES
(46075710, 10, 7, '2021-04-26', 72, 1, 200000, '0'),
(188582467, 1, 7, '2021-04-23', 2, 1, 250000, '0'),
(193194326, 1, 7, '2021-04-23', 2, 1, 250000, '0'),
(196227752, 12, 7, '2021-06-04', 440, 1, 15000, '0'),
(548178411, 1, 7, '2021-06-03', 356, 1, 250000, '0'),
(578615152, 4, 7, '2021-04-23', 1, 1, 80000, '0'),
(581220120, 7, 7, '2021-04-27', 35, 1, 10000, '0'),
(617309876, 13, 7, '2021-04-26', 103, 1, 15000, '0'),
(710938704, 4, 7, '2021-06-03', 370, 1, 10000, '0'),
(735207483, 4, 2, '2021-04-22', 1, 2, 160000, '0'),
(845481565, 9, 7, '2021-04-26', 48, 1, 15000, '0'),
(925462135, 15, 7, '2021-04-27', 132, 1, 10000, '0'),
(1156210428, 1, 7, '2021-04-23', 2, 1, 250000, '0'),
(1188478473, 18, 7, '2021-04-26', 188, 2, 340000, '0'),
(1195263976, 12, 7, '2021-04-26', 90, 3, 45000, '0'),
(1246833167, 7, 7, '2021-04-27', 34, 1, 10000, '0'),
(1285483608, 1, 7, '2021-06-02', 355, 1, 250000, '0'),
(1339502611, 19, 7, '2021-04-26', 203, 1, 120000, '0'),
(1435980043, 4, 7, '2021-04-26', 23, 2, 20000, '0'),
(1544999763, 15, 7, '2021-04-27', 132, 1, 10000, '0'),
(1556746857, 1, 2, '2021-04-27', 6, 2, 500000, '0'),
(1557831602, 16, 7, '2021-04-26', 160, 1, 350000, '0'),
(1568127345, 14, 7, '2021-04-26', 118, 1, 15000, '0'),
(1742150027, 1, 7, '2021-04-23', 2, 1, 250000, '0'),
(1795089270, 1, 2, '2021-04-29', 10, 2, 500000, '0'),
(1839446077, 4, 7, '2021-04-22', 1, 9, 720000, '0'),
(1973459808, 17, 7, '2021-04-26', 175, 1, 165000, '0'),
(2145584445, 1, 2, '2021-04-23', 2, 8, 2000000, '0'),
(2145584446, 1, 2, '2021-04-23', 2, 8, 2000000, '0');

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
(2, 'M', 'Dhifta', 'dhifta48@gmail.com', '085791419622', 'mdhifta', '123456', 'IMG-20210422-WA0010.jpg'),
(6, 'ssss', 'wwww', 'modira@gmail.com', '', '', '1233333', ''),
(7, 'Ismail', 'Alex', 'launualam@gmail.com', '08123456789', 'ismailalex', '12345', 'ririrka.jpg'),
(8, 'M', 'Dhifta', 'selvyerhita@gmail.com', '085791419625', 'miaanggita', '12345', 'IMG_20170314_132011.jpg'),
(9, 'yusriandi', 'alfian ', 'yusriandi20@gmail.com', '', '', 'singkalu', ''),
(10, 'anak', 'setan', 'lalala@gmail.com', '', '', 'admin123', '');

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
(4, 7, 'Pulau Sambori', 'Pulau Sombori adalah salah satu pulau yang terdapat di Kabupaten Morowali Provinsi Sulawesi Tengah, Indonesia. Pulau ini sangat cocok anda jadikan sebagai destinasi wisata untuk melepaskan penat dengan menikmati pemandangan dan angin laut yang indah.', 'Pulau Sambori.jpg'),
(5, 7, 'Pantai Puluti', 'Pantai Puluti merupakan pantai yang terletak di desa lahuafu, Morowali, Sulawesi Tengah. Pantai ini mempunya pasir putih yang terbentang dengan  sangat indah yang bisa anda nikmati dengan berswafoto bersama teman dan keluarga untuk melepas lelah anda', 'pantai puluti.PNG'),
(9, 7, 'Permandian Mata Air Tompaika', 'Permandian Mata Air Tompaika merupakan permandian dengan mata air yang terbentuk secara alami keluar deras dari celah bebatuan di desa Sakita, Morowali. Air permandian ini sangat segar dan dingin, dengan kedalaman permandian yang berkisar 2-4 meter. ', 'Tompaika.jpg'),
(12, 7, 'Bukit Kembar', 'Bukit Kembar atau biasa disebut Bukit Teletubies merupakan bukit savana yang terletak di Kolonodale, Morowali. Anda bisa menikmati dan mengabadikan pemandangan gugusan pulau dan hijaunya savana Bukit Kembar menikmati hembusan angin dan birunya lautan', 'Bukit Kembar.jpg'),
(13, 7, 'Gua Allo', 'Goa Allo atau yang disebut Goa Berlian terletak di Menui Kepulauan, Morowali. Goa ini hanya berisi air laut dengan arus yang tenang dan disukai oleh wisatawan sebagai tempat belajar berenang ataupun menggunakan perahu karet untuk memutari sekitar goa', 'Gua Allo.jpg'),
(14, 7, 'Kebun Binatang Wosu', 'Kebun Binatang Wosu terletak di desa Wosu Morowali. Kebun Binatang sangat bersih dan terjaga dengan baik namun baru berisi hewan dengan jenis rusa. Anda bisa berekreasi bersama keluarga dengan mempelajari dan memberikan makan hewan secara langsung.', 'kebun binatang.jpg'),
(15, 7, 'Matansala Mangrove', 'Anda dapat menikmati pemandangan hutan yang tumbuh di air payau dan dipengaruhi oleh pasang-surut air laut. Anda bisa wisata sambil mempelajari mangrove dengan turun langsung untuk menanam bibit bakau dilokasi yang sudah ditentukan pengelola wisata. ', 'wisata mangrove.jpg'),
(16, 7, 'Permandian Veranomata', 'Permandian Veranomata terletak di desa Ipi, Morowali. Terdapat 3 lokasi permandian yang bertingkat, yaitu permandian bawah, tengah dan air terjun dari veranomata. Anda dapat menikmati semua tingkat permandian dengan segarnya  mata air yang mengalir.', 'permandian veranomata.jpg'),
(17, 7, 'Air Terjun Sampala', 'Derasnya air yang jatuh dari ketinggian dan segarnya air yang berasal dari mata air langsung membuat anda merasakan rileksasi tubuh dan juga pikiran. Terdapat kolam yang terbentuk secara alami yang dapat anda gunakan untuk berendam dan berwisata air.', 'air terjun sampala.jpg'),
(18, 7, 'Pasir Panjang Tangofa', 'Pasir Panjang Tangofa terletak di desa Tangofa, Morowali. Anda bisa bersantai meinkmati birunya laut ataupun bermain air laut yang menyegarkan. Pantainya cocok untuk anda yang ingin belajar berenang karena arus ombak yang tenang dan kedalaman rendah', 'pasir panjang tangofa.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_jual`
--
ALTER TABLE `tb_jual`
  ADD PRIMARY KEY (`id_jual`),
  ADD KEY `id_produk` (`id_produk`);

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
  ADD KEY `id_produk` (`id_produk`),
  ADD KEY `id_jual` (`id_jual`);

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
-- AUTO_INCREMENT for table `tb_jual`
--
ALTER TABLE `tb_jual`
  MODIFY `id_jual` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=652;

--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_pembayaran`
--
ALTER TABLE `tb_pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_titik`
--
ALTER TABLE `tb_titik`
  MODIFY `id_titik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2145584447;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_jual`
--
ALTER TABLE `tb_jual`
  ADD CONSTRAINT `tb_jual_ibfk_1` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`);

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
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tb_produk` (`id_produk`),
  ADD CONSTRAINT `tb_transaksi_ibfk_3` FOREIGN KEY (`id_jual`) REFERENCES `tb_jual` (`id_jual`);

--
-- Constraints for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD CONSTRAINT `tb_wisata_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tb_kategori` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
