-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 07:30 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menara`
--

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE `monitoring` (
  `id_menara` int(11) NOT NULL,
  `kec` varchar(255) NOT NULL,
  `deskel` varchar(255) NOT NULL,
  `nama_jalan` varchar(255) NOT NULL,
  `alamat_no` varchar(255) NOT NULL,
  `nama_dukuh` varchar(255) NOT NULL,
  `rt` varchar(255) NOT NULL,
  `rw` varchar(255) NOT NULL,
  `nama_perusahaan_menara` varchar(255) NOT NULL,
  `titik_koordinat_longitude` varchar(255) NOT NULL,
  `titik_koordinat_latitude` varchar(255) NOT NULL,
  `radius_rebahan_menara` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `monitoring`
--

INSERT INTO `monitoring` (`id_menara`, `kec`, `deskel`, `nama_jalan`, `alamat_no`, `nama_dukuh`, `rt`, `rw`, `nama_perusahaan_menara`, `titik_koordinat_longitude`, `titik_koordinat_latitude`, `radius_rebahan_menara`) VALUES
(1, 'BANYUURIP', 'POPONGAN', 'Jl. Yogyakarta Km. 45', '-', '-', '1', '2', 'TELKOMSEL (PT. Telkomsel)', '110.0043546', '', '72'),
(2, 'BANYUURIP', 'POPONGAN', '', '-', '-', '7', '2', 'TRIVIEW (PT. Triview Geospatial Mandiri)', '110.003648', '-7.75821761', '42'),
(3, 'BANYUURIP', 'POPONGAN', '-', '-', '-', '4', '2', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '110.0074735', '-7. 76099234', '72'),
(4, 'BANYUURIP', 'POPONGAN', '-', '-', '-', '6', '2', 'PROTELINDO (PT. Protelindo)', '110.0043478', '-7.76362253', '42'),
(5, 'BANYUURIP', 'WANGUNREJO', '-', '-', '-', '4', '2', 'PROTELINDO (PT. Protelindo)', '110.0039727', '-7. 77628215', '42'),
(6, 'BANYUURIP', 'TANJUNGANOM', '-', '-', '-', '1', '1', 'PROTELINDO (PT. Protelindo)', '109.9442266', '-7.74642313', '42'),
(7, 'BANYUURIP', 'KLEDUNGKRADENAN', '-', '-', 'Pelahan', '3', '3', 'CMI (PT. Centratama Menara Indonesia)', '109.9877698', '-7.7286337', '42'),
(8, 'BRUNO', 'CEPEDAK', 'Jl songolopo', '', 'Singolopo', '3', '5', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '109.889373', '-7.560198', '72'),
(9, 'BRUNO', 'TEGALSARI', '', '', 'Silo', '2', '1', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '-75,452,359', '1,099,590,522', '92'),
(10, 'BRUNO', 'KALIWUNGU', '', '', 'Kalibang', '5', '5', 'PROTELINDO (PT. Protelindo)', '-75,436,871', '1,099,481,064', '70'),
(11, 'BRUNO', 'BRUNOREJO', '', '', 'Brunorejo', '2', '3', 'TELKOMSEL (PT. Telkomsel)', '-75,707,116', '1,099,264,774', '72'),
(13, 'BRUNO', 'BRUNOREJO', 'Jl brondong', '', 'Bruno kulon', '3', '2', 'TELKOMSEL (PT. Telkomsel)', '-75,697,162', '1,099,263,179', '72'),
(14, 'BAGELEN', 'SOKO', '-', '-', '-', '1', '1', 'TELKOMSEL (PT. Telkomsel)', '110.0284191', '-7. 7770134', '72'),
(15, 'BAGELEN', 'DURENSARI', '-', '-', '-', '1', '5', 'MITRATEL (Ex. Telkomsel)', '110.0809434', '-7. 80532432', '72'),
(16, 'BAGELEN', 'BAPANGSARI', '-', '-', '-', '2', '2', 'TBG (PT. Tower Bersama Group)', '110.0147015', '-7. 84136244', '72'),
(17, 'BAGELEN', 'BAPANGSARI', '-', '-', '-', '3', '3', 'TELKOMSEL (PT. Telkomsel)', '110.0195826', '-7. 84467556', '72'),
(18, 'BAGELEN', 'BAPANGSARI', '-', '-', '-', '4', '6', 'IBS (PT. Inti Bangun Sejahtera)', '110.0295046', '-7.8545', '72'),
(19, 'BAGELEN', 'BAPANGSARI', '-', '-', '-', '1', '4', 'TBG (PT. Tower Bersama Group)', '110.0147015', '-7.84136244', '72'),
(20, 'BAGELEN', 'DADIREJO', '-', '-', '-', '4', '4', 'TELKOMSEL (PT. Telkomsel)', '110.0430795', '-7. 86927386', '72'),
(21, 'BAGELEN', 'DADIREJO', '-', '-', '-', '1', '5', 'Lainnya', '110.0405837', '-7.8627931', '22'),
(22, 'BAGELEN', 'DADIREJO', '-', '-', '-', '2', '3', 'PROTELINDO (PT. Protelindo)', '110.0419418', '-7. 878222341', '42'),
(23, 'BAGELEN', 'BAGELEN', '-', '-', '-', '2', '1', 'TELKOMSEL (PT. Telkomsel)', '110.0145345', '-7.80957237', '72'),
(24, 'BAGELEN', 'BAGELEN', '-', '-', '-', '2', '3', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '110.017069', '-7.81543636', '72'),
(25, 'BAYAN', 'SUCENJURUTENGAH', 'lingkar barat', '', 'sucenjurutengah', '5', '1', 'TELKOMSEL (PT. Telkomsel)', '109.9758909', '-7.7030038', '72'),
(26, 'BAYAN', 'SUCENJURUTENGAH', 'Lingkar Barat', '', 'SucenJuruTengah', '3', '1', 'TELKOMSEL (PT. Telkomsel)', '109.9758909', '-7.7030038', '72'),
(27, 'BAYAN', 'SUCENJURUTENGAH', 'Jl Pahlawan', '-', 'Sucenjurutengah', '5', '1', 'PROTELINDO (PT. Protelindo)', '109.975989', '-7.701823', '25'),
(28, 'BAYAN', 'BRINGIN', 'Bringin', '', 'Bringin', '5', '1', 'MITRATEL (Ex. Telkomsel)', '109,956,768', '-7.709028', '40'),
(29, 'BAYAN', 'BRINGIN', 'Tanjungan', '', 'bringin', '3', '1', 'CMI (PT. Centratama Menara Indonesia)', '109.957591', '-7.70666', '30'),
(30, 'BAYAN', 'PEKUTAN', 'Jl Sampurna', '-', '', '5', '2', 'TELKOMSEL (PT. Telkomsel)', '109.941', '-7.6992778', '72'),
(31, 'BAYAN', 'PEKUTAN', 'Sampurna', '', 'Empat', '4', '2', 'KIN (PT. Komet Infra Nusantara)', '109.940968', '-7.699137', '72'),
(32, 'BAYAN', 'BESOLE', 'Jl Dungus', '', 'Besole', '1', '2', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '109.9294', '-7.72172', '42'),
(33, 'BAYAN', 'DEWI', 'Ngaglik', '', 'Ngaglik', '3', '2', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '109.94849', '-7.73473,', '62'),
(34, 'BAYAN', 'BOTODALEMAN', '-', '-', 'Dusun IV', '2', '1', 'KIN (PT. Komet Infra Nusantara)', '10,956,257', '-743,259', '30'),
(35, 'BAYAN', 'GRANTUNG', 'Jl. Raya Grantung, Dusun I, Grantung, Kec. Bayan, Kab. Purworejo', '-', '-', '1', '2', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '-7.71718267', '109.9567329', '42'),
(36, 'BAYAN', 'BANDUNGKIDUL', '-', '-', '-', '2', '2', 'TRIVIEW (PT. Triview Geospatial Mandiri)', '10,992,055,411', '-772,043,408', '42'),
(37, 'BAYAN', 'JATINGARANG', 'Jl. Jatingarang, Dusun IV, Jatingarang, Kec. Bayan, Kab. Purworejo', '-', '-', '1', '1', 'PROTELINDO (PT. Protelindo)', '109.9123593', '-7.73695999', '50'),
(38, 'BAYAN', 'KRANDEGAN', 'Krajan II, Krandegan, Kec Bayan, Kab Purworejo', '-', '-', '1', '1', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '103.9224354', '-7.75338274', '50'),
(39, 'BANYUURIP', 'BOROKULON', '-', '-', '-', '2', '1', 'Lainnya', '110.0038367', '-7.739348333', '42'),
(40, 'BANYUURIP', 'BOROKULON', '-', '-', '-', '3', '4', 'TRIVIEW (PT. Triview Geospatial Mandiri)', '110.00072', '-7.749048333', '42'),
(41, 'BANYUURIP', 'BOROKULON', '-', '-', '-', '3', '4', 'IBS (PT. Inti Bangun Sejahtera)', '110.0396667', '-7.747711667', '72'),
(42, 'BANYUURIP', 'SUMBERSARI', '-', '-', '-', '1', '1', 'XL (PT. XL Axiata Tbk)', '109.972435', '-7.75611', '70'),
(43, 'BANYUURIP', 'BANYUURIP', '-', '-', '-', '2', '2', 'TELKOMSEL (PT. Telkomsel)', '109.9728056', '-7758', '42'),
(44, 'BANYUURIP', 'MALANGREJO', '-', '-', '-', '1', '2', 'TBG (PT. Tower Bersama Group)', '109.9703', '-7.76531', '52'),
(45, 'BANYUURIP', 'KLIWONAN', '-', '-', '-', '1', '3', 'Lainnya', '109.95381', '-7.756575', '42'),
(46, 'BANYUURIP', 'CONDONGSARI', '-', '-', 'TRUKAN', '3', '2', 'TELKOMSEL (PT. Telkomsel)', '109.9634444', '-7.7263611', '72'),
(47, 'BANYUURIP', 'CONDONGSARI', 'Lingkar Selatan Purworejo', '-', '-', '3', '2', 'TBG (PT. Tower Bersama Group)', '109.9721', '-7.72929', '70'),
(48, 'PURWOREJO', 'PANGENREJO', 'BRIGJEN KHATAMSO', '-', '-', '2', '6', 'TBG (PT. Tower Bersama Group)', '110.0047', '-7.73685', '72'),
(49, 'PURWOREJO', 'PANGENREJO', 'BRIGJEN KATAMSO', '-', '-', '1', '5', 'Lainnya', '110.0026583', '-7.731018333', '25'),
(50, 'PURWOREJO', 'PANGENREJO', 'BRIGJEN KATAMSO', '-', '-', '1', '5', 'MITRATEL (Ex. Telkomsel)', '110.0056133', '-7.72745E+14', '42'),
(51, 'PURWOREJO', 'PANGENJURUTENGAH', 'Jl. Suryo Kusuman', '139', 'NGUPASAN', '4', '10', 'PROTELINDO (PT. Protelindo)', '110.002', '-7.7151', '42'),
(52, 'PURWOREJO', 'SINDURJAN', '-', '-', '-', '2', '7', 'TBG (PT. Tower Bersama Group)', '110.00362', '-7.71446', '72'),
(53, 'GRABAG', 'KEDUNGKAMAL', '-', '-', '-', '1', '1', 'Lainnya', '109.9183817', '-7.782251667', '42'),
(54, 'GRABAG', 'GRABAG', '-', '-', '-', '1', '5', 'TELKOMSEL (PT. Telkomsel)', '109.9056667', '-779855', '72'),
(55, 'GRABAG', 'GRABAG', '-', '-', '-', '3', '2', 'STP (PT. Solusi Tunas Pratama)', '109.9057', '-7.79944', '51'),
(56, 'GRABAG', 'GRABAG', '-', '-', '-', '1', '6', 'Lainnya', '109.9087167', '-7.801895', '72'),
(57, 'GRABAG', 'PATUTREJO', '-', '-', 'JETIS', '4', '1', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '109.8955833', '-7.832521667', '72'),
(58, 'GRABAG', 'KETAWANGREJO', '-', '-', '-', '1', '5', 'TBG (PT. Tower Bersama Group)', '109.88618', '-7.82336', '72'),
(59, 'GRABAG', 'PASARANOM', '-', '-', '-', '2', '3', 'TBG (PT. Tower Bersama Group)', '109.86175', '-7.813375', '52'),
(60, 'GRABAG', 'UKIRSARI', 'Jl. DEANDELS', '-', '-', '2', '1', 'TBG (PT. Tower Bersama Group)', '109.83968', '-7.8153', '72'),
(61, 'GRABAG', 'UKIRSARI', 'Jl DEANDELS', '-', '-', '2', '1', 'Lainnya', '109.838905', '-7.816341667', '72'),
(62, 'GRABAG', 'UKIRSARI', 'Jl DEANDELS', '-', '-', '2', '2', 'STP (PT. Solusi Tunas Pratama)', '109.8334', '-7.81506', '51'),
(63, 'GRABAG', 'SUMBERAGUNG', '-', '-', '-', '1', '2', 'TBG (PT. Tower Bersama Group)', '109.846062', '-7.810517', '62'),
(64, 'GRABAG', 'BAKUREJO', '-', '-', '-', '1', '2', 'Lainnya', '109.861845', '-7.813496667', '42'),
(65, 'GRABAG', 'TLEPOKKULON', '-', '-', '-', '1', '1', 'Lainnya', '109.89308', '-7.78297', '42'),
(66, 'PURWODADI', 'BRONDONGREJO', '-', '-', '-', '1', '1', 'PROTELINDO (PT. Protelindo)', '109.9809616', '-7.77861298', '40'),
(67, 'PURWODADI', 'BRAGOLAN', '-', '-', '-', '1', '3', 'XL (PT. XL Axiata Tbk)', '110.0015992', '-7.79506804', '56'),
(68, 'PURWODADI', 'BRAGOLAN', '-', '-', '-', '1', '1', 'STP (PT. Solusi Tunas Pratama)', '110.0027254', '-7.79660078', '40'),
(69, 'PURWODADI', 'JENARKIDUL', '-', '-', '-', '2', '1', 'XL (PT. XL Axiata Tbk)', '109.995282', '-7.80778473', '40'),
(70, 'PURWODADI', 'GEPARANG', '-', '-', '-', '1', '2', 'STP (PT. Solusi Tunas Pratama)', '109.9918939', '-7.86664834', '70'),
(71, 'PURWODADI', 'NAMPUREJO', '-', '-', '-', '1', '2', 'STP (PT. Solusi Tunas Pratama)', '109.9918939', '-7. 86664834', '70'),
(72, 'PURWODADI', 'GEPARANG', '-', '-', '-', '1', '2', 'TELKOMSEL (PT. Telkomsel)', '109.9925621', '-7. 86804418', '70'),
(73, 'PURWODADI', 'GEPARANG', '-', '-', '-', '1', '1', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '109.9938274', '-7. 86984212', '52'),
(74, 'PURWODADI', 'JOGORESAN', '-', '-', '-', '3', '2', 'PROTELINDO (PT. Protelindo)', '110.0180866', '-7. 87263339', '40'),
(75, 'PURWODADI', 'JATIKONTAL', '-', '-', '-', '3', '1', 'Lainnya', '110.0081456', '-7. 88362557', '40'),
(76, 'PURWODADI', 'JOGOBOYO', '-', '-', '-', '4', '1', 'Lainnya', '110.032669', '-7.88422276', '40'),
(77, 'PURWOREJO', 'PANGENJURUTENGAH', '', '', '', '2', '3', 'Lainnya', '109.9988654', '-7.7257126', '42'),
(78, 'KUTOARJO', 'KUTOARJO', 'S. Parman', '', '', '2', '5', 'TBG (PT. Tower Bersama Group)', '109.91479', '-7.71592', '70'),
(79, 'KUTOARJO', 'KUTOARJO', '', '', '', '2', '5', 'TELKOMSEL (PT. Telkomsel)', '109.914138', '-7.721736', '70'),
(80, 'KUTOARJO', 'BANDUNG', 'PATOK GAMBRENG', '', '', '3', '9', 'TBG (PT. Tower Bersama Group)', '109.9177', '-772531', '32'),
(81, 'KUTOARJO', 'SIDARUM', '', '', '', '1', '2', 'Lainnya', '109.9995117', '-7.73855', '35'),
(82, 'KUTOARJO', 'SUREN', '-', '-', '-', '2', '4', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '109.8875', '-7.74526', '72'),
(83, 'KUTOARJO', 'BAYEM', '-', '-', '-', '2', '4', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '109.8960617', '-7.734965', '45'),
(84, 'KUTOARJO', 'KATERBAN', '-', '-', '-', '2', '3', 'PROTELINDO (PT. Protelindo)', '109.896', '-7.72517', '52'),
(85, 'KUTOARJO', 'KATERBAN', 'JL. TENTARA PELAJAR', '-', '-', '1', '7', 'Lainnya', '109.9034717', '-7.720583333', '72'),
(86, 'KUTOARJO', 'KUTOARJO', 'JL. S. PARMAN', '-', '-', '5', '10', 'TBG (PT. Tower Bersama Group)', '109.9087633', '-7.718035', '25'),
(87, 'NGOMBOL', 'WONOSRI', '-', '-', '-', '1', '1', 'PROTELINDO (PT. Protelindo)', '109.9685081', '-7. 85432838', '52'),
(88, 'KUTOARJO', 'KUTOARJO', 'DIPONEGORO ', '179', '-', '1', '11', 'TELKOMSEL (PT. Telkomsel)', '109.90788', '-7.72343', '42'),
(89, 'KUTOARJO', 'PACOR', '-', '-', '-', '2', '4', 'Lainnya', '109.9147091', '-7.7155753', '42'),
(90, 'NGOMBOL', 'PEJAGRAN', '-', '-', '-', '2', '1', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '109.9410858', '-7.84403704', '72'),
(91, 'KUTOARJO', 'PACOR', '-', '-', '-', '2', '6', 'CMI (PT. Centratama Menara Indonesia)', '109.9040017', '-7.70331E+15', '42'),
(92, 'KUTOARJO', 'TEPUS KULON', '-', '-', '-', '2', '1', 'Lainnya', '109.903555', '-7.708616667', '42'),
(93, 'KUTOARJO', 'TURSINO', '-', '-', '-', '2', '3', 'TELKOMSEL (PT. Telkomsel)', '109.9283855', '-7.6727254', '72'),
(94, 'NGOMBOL', 'PEJAGRAN', '-', '-', '-', '1', '1', 'Lainnya', '109.9426138', '-7. 84594615', '52'),
(95, 'NGOMBOL', 'PEJAGRAN', '-', '-', '-', '1', '1', 'TBG (PT. Tower Bersama Group)', '109.9447331', '-7.84750108', '72'),
(96, 'NGOMBOL', 'KUMPULSARI', '-', '-', '-', '1', '3', 'TBG (PT. Tower Bersama Group)', '109.929638', '-7.83965405', '72'),
(97, 'NGOMBOL', 'COKROYASAN', '-', '-', '-', '2', '1', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '109.9227061', '-7. 82186516', '52'),
(98, 'NGOMBOL', 'JOMBANG', '-', '-', '-', '1', '1', 'TBG (PT. Tower Bersama Group)', '109.9510898', '-7.81774676', '72'),
(99, 'NGOMBOL', 'KEMBANGKUNING', '-', '-', '-', '1', '5', 'TELKOMSEL (PT. Telkomsel)', '109.9673009', '-7.8220864', '72'),
(100, 'NGOMBOL', 'WINGKOMULYO', '-', '-', '-', '1', '2', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '109.9467716', '-7. 79294748', '72'),
(101, 'KEMIRI', 'BEDONO KARANGDUWUR', '-', '-', '-', '2', '2', 'Lainnya', '109.9145967', '-7.672563333', '42'),
(102, 'KEMIRI', 'KEREP', '-', '-', '-', '2', '1', 'STP (PT. Solusi Tunas Pratama)', '109.8911', '-7.682', '71'),
(103, 'PURWODADI', 'WATUKURO', '-', '-', '-', '1', '2', 'TBG (PT. Tower Bersama Group)', '110.0331593', '-7. 88093365', '52'),
(104, 'KEMIRI', 'KEMIRI KIDUL', '-', '-', '-', '1', '2', 'TBG (PT. Tower Bersama Group)', '109.89079', '-7.6837', '70'),
(105, 'KEMIRI', 'KEMIRI KIDUL', '-', '-', '-', '1', '2', 'TELKOMSEL (PT. Telkomsel)', '109.8925', '-7.683775', '72'),
(106, 'PURWODADI', 'PURWODADI', '-', '-', '-', '1', '2', 'PROTELINDO (PT. Protelindo)', '109.9967665', '-7. 8255416', '52'),
(107, 'KEMIRI', 'SUKOGELAP', '-', '-', '-', '3', '1', 'TELKOMSEL (PT. Telkomsel)', '109.8715417', '-7.632865', '72'),
(108, 'PURWODADI', 'PURWODADI', '-', '-', '-', '3', '2', 'CMI (PT. Centratama Menara Indonesia)', '109.998111', '-7.82536026', '52'),
(109, 'PURWODADI', 'PURWODADI', '-', '-', '-', '1', '3', 'STP (PT. Solusi Tunas Pratama)', '109.9964713', '-7. 82437351', '72'),
(110, 'PURWODADI', 'PURWODADI', '-', '-', '-', '1', '2', 'TELKOMSEL (PT. Telkomsel)', '109.9961384', '-7. 82247084', '72'),
(111, 'PURWODADI', 'PURWODADI', '-', '-', '-', '3', '2', 'TELKOMSEL (PT. Telkomsel)', '110.0003467', '-7.82357831', '72'),
(112, 'KALIGESING', 'DONOREJO', '-', '-', '-', '7', '1', 'INDOSAT/H3I (PT. Indosat Ooredoo Hutchinson )', '110.1146788', '-7. 76202768', '72'),
(113, 'KALIGESING', 'DONOREJO', '-', '-', '-', '7', '1', 'TELKOMSEL (PT. Telkomsel)', '110.1149121', '-7. 76145311', '72'),
(114, 'KALIGESING', 'DONOREJO', '-', '-', '-', '7', '1', 'PROTELINDO (PT. Protelindo)', '110.1149538', '-7. 76119742', '72'),
(115, 'KALIGESING', 'DONOREJO', '-', '-', '-', '7', '1', 'IBS (PT. Inti Bangun Sejahtera)', '110.1149649', '-7. 76108089', '72'),
(116, 'PURWOREJO', 'GANGGENG', '-', '-', '-', '3', '1', 'CMI (PT. Centratama Menara Indonesia)', '110.0301664', '-7.74669996', '72'),
(117, 'PURWOREJO', 'CANGKREPKIDUL', '-', '-', '-', '5', '3', 'TBG (PT. Tower Bersama Group)', '110.0297339', '-7. 73175943', '72'),
(118, 'PURWOREJO', 'CANGKREPLOR', '-', '-', '-', '1', '4', 'TELKOMSEL (PT. Telkomsel)', '110.0305146', '-7. 72747339', '72'),
(119, 'PURWOREJO', 'CANGKREPLOR', '-', '-', '-', '2', '1', 'TBG (PT. Tower Bersama Group)', '110.029911', '-7. 72470481', '72'),
(120, 'LOANO', 'TRIREJO', '-', '-', '-', '4', '2', 'PROTELINDO (PT. Protelindo)', '110.0287385', '-7. 6930605', '52'),
(121, 'LOANO', 'TRIREJO', '-', '-', '-', '4', '2', 'TELKOMSEL (PT. Telkomsel)', '110.0291168', '-7. 69270579', '72'),
(122, 'LOANO', 'TRIREJO', '-', '-', '-', '1', '3', 'Lainnya', '110.0273747', '-7. 68957854', '40'),
(123, 'LOANO', 'KALINONGKO', '-', '-', '-', '1', '1', 'IBS (PT. Inti Bangun Sejahtera)', '110.0248037', '-7. 68050818', '52'),
(124, 'LOANO', 'KALINONGKO', '-', '-', '-', '2', '1', 'Lainnya', '110.0240673', '-7. 67907173', '72'),
(125, 'LOANO', 'KALINONGKO', '-', '-', '-', '3', '1', 'CMI (PT. Centratama Menara Indonesia)', '110.0225609', '-7. 67717523', '72'),
(126, 'LOANO', 'MARON', '-', '-', '-', '3', '1', 'TELKOMSEL (PT. Telkomsel)', '110.0361035', '-7. 66259692', '72'),
(127, 'LOANO', 'KEBONGUNUNG', '-', '-', '-', '1', '3', 'Lainnya', '110.0475283', '-7.65272882', '72'),
(128, 'LOANO', 'KEBONGUNUNG', '-', '-', '-', '2', '1', 'Lainnya', '110.0478246', '-7. 65613946', '72'),
(129, 'LOANO', 'LOANO', '-', '-', '-', '3', '1', 'INDOSAT/H3I (PT. Indosat Ooredoo Hutchinson )', '110.0387695', '-7. 66907541', '72'),
(130, 'KEMIRI', 'KARANGLUAS', '', '', '', '1', '2', 'TELKOMSEL (PT. Telkomsel)', '109.89494', '-7.612078333', '72'),
(131, 'KEMIRI', 'KEDUNGPOMAHANWETAN', '', '', '', '1', '4', 'TELKOMSEL (PT. Telkomsel)', '109.9104933', '-7.63987', '72'),
(132, 'KEMIRI', 'GIRIMULYO', '', '', '', '1', '2', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '109.9221767', '-7.637835', '72'),
(133, 'KEMIRI', 'WINONG', '', '', '', '2', '3', 'CMI (PT. Centratama Menara Indonesia)', '109.9542083', '-7.668625', '52'),
(134, 'LOANO', 'BANYUASIN SEPARE', '-', '-', '-', '1', '3', 'TELKOMSEL (PT. Telkomsel)', '110.1003056', '-7. 6673306', '72'),
(135, 'LOANO', 'BANYUASIN SEPARE', '-', '-', '-', '1', '2', 'TBG (PT. Tower Bersama Group)', '-7.6685', '110.09959', '72'),
(136, 'LOANO', 'BANYUASIN SEPARE', '-', '-', '-', '1', '2', 'STP (PT. Solusi Tunas Pratama)', '110.0997', '-7.66817', '72'),
(137, 'KALIGESING', 'SOMONGARI', '-', '-', '-', '4', '1', 'TELKOMSEL (PT. Telkomsel)', '-', '-', '72'),
(138, 'KALIGESING', 'JELOK', '-', '-', '-', '1', '5', 'MITRATEL (Ex. Telkomsel)', '-', '-', '72'),
(139, 'KALIGESING', 'KALIHARJO', '-', '-', '-', '3', '3', 'TELKOMSEL (PT. Telkomsel)', '110.0692778', '-7.7361667', '72'),
(140, 'KALIGESING', 'KALIHARJO', '-', '-', '-', '3', '3', 'PROTELINDO (PT. Protelindo)', '110.0692778', '-7.7301667', '52'),
(141, 'KALIGESING', 'KALIHARJO', '-', '-', '-', '2', '3', 'STP (PT. Solusi Tunas Pratama)', '-', '-', '52'),
(142, 'BUTUH', 'WIRONATAN', 'Jalan Kutoarjo - Kebumen', '-', 'Sidomukti', '2', '3', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '109.8429462', '-7.713928227', '72'),
(143, 'BUTUH', 'WIRONATAN', '-', '-', 'Gebangrejo', '1', '1', 'XL (PT. XL Axiata Tbk)', '109.8328907', '-7.720145378', '72'),
(144, 'BUTUH', 'WIRONATAN', '-', '0', '-', '1', '1', 'IBS (PT. Inti Bangun Sejahtera)', '109.8306371', '-7.72069016', '72'),
(145, 'BUTUH', 'BUTUH', '-', '0', 'Adinegaran', '1', '7', 'STP (PT. Solusi Tunas Pratama)', '109.8560088', '-7.723765899', '71'),
(146, 'BUTUH', 'BUTUH', '-', '0', '-', '1', '8', 'TBG (PT. Tower Bersama Group)', '109.8558', '-7.72351', '52'),
(147, 'BUTUH', 'ANDONG', 'Jalan Raya Purworejo - Kebumen', '-', '-', '2', '2', 'XL (PT. XL Axiata Tbk)', '109.8726574', '-7.72463923', '52'),
(148, 'BUTUH', 'ANDONG', 'Sembaon', '-', 'Krajan Wetan', '3', '3', 'PROTELINDO (PT. Protelindo)', '10,988,132,889', '-772,745,862', '50'),
(149, 'BUTUH', 'SRUWOHREJO', '-', '-', 'Krajan', '1', '1', 'EMS (PT Era Mandiri Sejahtera)', '10,987,030,218,355,300', '-775,006,412,062,794', '30'),
(150, 'BUTUH', 'WARENG', '', '', 'Wareng Dukuh Kidul', '2', '5', 'TBG (PT. Tower Bersama Group)', '10,987,124,355,509,800', '-7,771,177,925,169,460', '0'),
(151, 'BUTUH', 'WARENG', '', '', 'Wareng Dukuh Kidul', '1', '5', 'TELKOMSEL (PT. Telkomsel)', '10,987,107,164,226,400', '-7,772,432,025,521,990', '72'),
(152, 'BUTUH', 'SRUWOHDUKUH', '', '', 'Wonorejo Kulon', '1', '1', 'TELKOMSEL (PT. Telkomsel)', '10,984,245,775,267,400', '-7,751,862,960,867,580', '72'),
(153, 'BUTUH', 'KEDUNGSRI', '', '', 'Krajan', '1', '1', 'Lainnya', '1,098,459,351,528,430', '-7,750,792,130,827,900', '0'),
(154, 'GRABAG', 'WINONGLOR', '', '', '', '2', '5', 'Lainnya', '109.9650467', '-7.66873', '72'),
(155, 'GEBANG', 'WINONGLOR', '', '', '', '2', '4', 'TELKOMSEL (PT. Telkomsel)', '109.9663861', '-7.8703306', '72'),
(156, 'KEMIRI', 'KEMIRI KIDUL', '', '', '', '1', '2', 'TBG (PT. Tower Bersama Group)', '109.89079', '-7.6837', '70'),
(157, 'KEMIRI', 'KEMIRI KIDUL', '', '', '', '1', '2', 'TELKOMSEL (PT. Telkomsel)', '109.8925', '-7.683775', '72'),
(158, 'KEMIRI', 'GEDONG', '', '', '', '3', '1', 'Lainnya', '109.886565', '-7.69465E+15', '25'),
(159, 'KEMIRI', 'DILEM', '', '', '', '1', '3', 'Lainnya', '109.9294833', '-7.621811667', '42'),
(160, 'KEMIRI', 'BEDONO KARANGDUWUR', '', '', '', '1', '1', 'TBG (PT. Tower Bersama Group)', '109.9169483', '-7.674658333', '52'),
(161, 'KEMIRI', 'BEDONO KARANGDUWUR', '', '', '', '2', '2', 'Lainnya', '109.9145967', '-7.672563333', '42'),
(162, 'PITURUH', 'KALIKOTES', '', '', '', '1', '1', 'Lainnya', '109.839815', '-7.66086', '52'),
(163, 'PITURUH', 'KESAWEN', '', '', '', '4', '1', 'TELKOMSEL (PT. Telkomsel)', '109.8471667', '-7.6603333', '72'),
(164, 'PITURUH', 'KALIGINTUNG', '', '', 'MUNGANGSARI', '2', '5', 'TELKOMSEL (PT. Telkomsel)', '109.8325556', '-7.6274444', '72'),
(165, 'PITURUH', 'KALIGINTUNG', '', '', '', '2', '2', 'Lainnya', '109.8397283', '-7.624778333', '52'),
(166, 'GEBANG', 'SEREN', '', '', '', '4', '5', 'STP (PT. Solusi Tunas Pratama)', '109.9781', '-7.67817', '51'),
(167, 'GEBANG', 'LUGOSOBO', '', '', '', '3', '1', 'Lainnya', '109.99562', '-7.697061667', '42'),
(168, 'KUTOARJO', 'TEPUS KULON', '', '', '', '2', '1', 'Lainnya', '109.903555', '-7.700861667', '42'),
(169, 'KEMIRI', 'KALIMENENG', '', '', '', '3', '1', 'TBG (PT. Tower Bersama Group)', '109.89423', '-7.6425', '42'),
(170, 'KEMIRI', 'KEREP', '', '', '', '2', '1', 'STP (PT. Solusi Tunas Pratama)', '109.8911', '-7.682', '71'),
(171, 'PITURUH', 'KEMBANGKUNING', '', '', '', '3', '1', 'MITRATEL (PT. Daya Mitra Telekomunikasi)', '109.81963', '-7.66991', '72'),
(172, 'PITURUH', 'TAPEN', '', '', '', '2', '1', 'TBG (PT. Tower Bersama Group)', '109.82382', '-7.70184', '72'),
(173, 'PITURUH', 'PITURUH', '', '', '', '1', '5', 'TELKOMSEL (PT. Telkomsel)', '109.8453039', '-7.6806408', '72'),
(174, 'GEBANG', 'REDIN', '', '', '', '1', '1', 'TBG (PT. Tower Bersama Group)', '110.11095', '-7.609838333', '72'),
(175, 'GEBANG', 'REDIN', '', '', '', '3', '1', 'TELKOMSEL (PT. Telkomsel)', '110.0109117', '-7.609283333', '72'),
(176, 'GEBANG', 'GEBANG', '', '', '', '1', '1', 'CMI (PT. Centratama Menara Indonesia)', '109.54462', '-7.38152', '52'),
(177, 'GEBANG', 'GEBANG', '', '', '', '1', '3', 'INDOSAT/H3I (PT. Indosat Ooredoo Hutchinson )', '109.99544', '-7.655995', '52'),
(178, 'PITURUH', 'PITURUH', '', '', '', '4', '5', 'STP (PT. Solusi Tunas Pratama)', '109.8433', '-7.67036', '51'),
(179, 'PITURUH', 'PITURUH', '', '', '', '4', '5', 'TBG (PT. Tower Bersama Group)', '109.84321', '-7.67895', '70'),
(180, 'BENER', 'PEKACANGAN', '', '', 'KRAJAN', '1', '1', 'TELKOMSEL (PT. Telkomsel)', '110.978811', '-7.6153889', '72'),
(181, 'BENER', 'KALIJAMBE', '', '', '', '2', '3', 'CMI (PT. Centratama Menara Indonesia)', '110.0745933', '-7.588568333', '52'),
(182, 'BENER', 'KALIJAMBE', '', '', '', '1', '4', 'TELKOMSEL (PT. Telkomsel)', '110.0723517', '-7.589126667', '72'),
(183, 'BENER', 'KEDUNGPUCANG', '', '', '', '1', '1', 'TBG (PT. Tower Bersama Group)', '110.0498', '-7.64303', '70'),
(184, 'BENER', 'KEDUNGPUCANG', '', '', '', '1', '1', 'TELKOMSEL (PT. Telkomsel)', '110.0498056', '-7.6436083', '72'),
(185, 'BENER', 'NGLARIS', '', '', '', '2', '2', 'MITRATEL (Ex. Telkomsel)', '110.0295883', '-7.566343333', '72'),
(186, 'BENER', 'KALIWADER', '', '', '', '6', '2', 'PROTELINDO (PT. Protelindo)', '110.0882233', '-7.63818', '52'),
(187, 'BENER', 'KETOSARI', '', '', '', '2', '1', 'PROTELINDO (PT. Protelindo)', '110.05748', '-7.606453333', '52'),
(188, 'BENER', 'KETOSARI', '', '', '', '2', '1', 'MITRATEL (Ex. Telkomsel)', '110.0576', '-7.6056', '72');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `nama_users` varchar(255) NOT NULL,
  `jk` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `nama_users`, `jk`, `jabatan`, `email`, `password`, `level`) VALUES
(1, 'Admin', 'Laki-Laki', 'Programmer', 'monevmenara2022@gmail.com', 'menara123', 'admin'),
(2, 'User 1', 'Laki-Laki', 'Pramubakti', 'usermenara@gmail.com', 'usermenara123', 'pengguna'),
(14, 'user2', 'Laki-Laki', 'Administrator Jaringan', 'user2@gmail.com', 'user212', 'pengguna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `monitoring`
--
ALTER TABLE `monitoring`
  ADD PRIMARY KEY (`id_menara`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `monitoring`
--
ALTER TABLE `monitoring`
  MODIFY `id_menara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
