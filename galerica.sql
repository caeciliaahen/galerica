-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2020 at 06:00 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galerica`
--

-- --------------------------------------------------------

--
-- Table structure for table `pakaian`
--

CREATE TABLE `pakaian` (
  `no` int(11) NOT NULL,
  `koleksi` varchar(30) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `pilihan` int(1) DEFAULT NULL,
  `baru` int(1) DEFAULT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `jenis` varchar(20) DEFAULT NULL,
  `bahan` varchar(50) DEFAULT NULL,
  `ukuran` varchar(30) DEFAULT NULL,
  `harga` varchar(15) DEFAULT NULL,
  `shopee` varchar(100) DEFAULT NULL,
  `tokopedia` varchar(100) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pakaian`
--

INSERT INTO `pakaian` (`no`, `koleksi`, `nama`, `pilihan`, `baru`, `deskripsi`, `jenis`, `bahan`, `ukuran`, `harga`, `shopee`, `tokopedia`, `image`) VALUES
(1, 'Pakaian Wanita', 'BATIK PARANG BARONG BLOUSE SABRINA', 1, 0, 'Blouse cantik ini terbuat dari kain katun dengan motif batik parang barong. Tekstur kainnya adem dan menyerap keringat, sehingga nyaman dan tidak gerah dikenakan saat beraktivitas. Desain kerah sabrina yang simpel dan original. Tetap trendi walau mengenakan batik!', 'Blouse', 'Katun', 'S, M, L, XL', 'Rp 175.000,-', 'https://shopee.co.id/galerica/produk1', 'https://tokopedia.com/galerica/produk1', 'images/produkw1.png'),
(2, 'Pakaian Wanita', 'BATIK DIRGA QUENETTA', 2, 0, 'Siap tampil stylish dengan koleksi terbaru dari Galerica! Memperkenalkan Quenetta Series dengan motif batik dirga yang siap menemani hari-harimu. Dengan bahan katun toyobo yang adem dan nyaman, dikemas dalam desain yang trendi, simpel, dan chic.', 'Blouse', 'Katun', 'M, L', 'Rp 195.000,-', 'https://shopee.co.id/galerica/produk2', 'https://tokopedia.com/galerica/produk2', 'images/produkw2.png'),
(3, 'Pakaian Wanita', 'BATIK OTENTIK SERIES MERAH', 0, 1, '<i>Tidak ada deskripsi produk.</i>', 'Blouse', 'Katun', 'S, M, L', 'Rp 225.000,-', 'https://shopee.co.id/galerica/produk3', 'https://tokopedia.com/galerica/produk3', 'images/produkw3.png'),
(4, 'Pakaian Wanita', 'BATIK SEKARPUTRI TRIASIH', 0, 1, '<i>Tidak ada deskripsi produk.</i>', 'Blouse', 'Katun', 'S, M, L, XL', 'Rp 185.000,-', 'https://shopee.co.id/galerica/produk4', 'https://tokopedia.com/galerica/produk4', 'images/produkw4.png'),
(5, 'Pakaian Wanita', 'BATIK MAUDY', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Dress', 'Cotton Batik Strech + Tile', 'S, M, L', 'Rp 250.000,-', 'https://shopee.co.id/galerica/produk5', 'https://tokopedia.com/galerica/produk5', 'images/produkw5.png'),
(6, 'Pakaian Wanita', 'BATIK DIRGA QUENETTA II', 0, 0, 'Siap tampil stylish dengan koleksi terbaru dari Galerica! Memperkenalkan Quenetta Series dengan motif batik dirga yang siap menemani hari-harimu. Dengan bahan katun toyobo yang adem dan nyaman, dikemas dalam desain yang trendi, simpel, dan chic.', 'Blouse', 'Katun', 'M, L', 'Rp 195.000,-', 'https://shopee.co.id/galerica/produk6', 'https://tokopedia.com/galerica/produk6', 'images/produkw2.png'),
(7, 'Pakaian Wanita', 'BATIK OTENTIK SERIES MERAH II', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Blouse', 'Katun', 'S, M, L', 'Rp 225.000,-', 'https://shopee.co.id/galerica/produk5', 'https://tokopedia.com/galerica/produk5', 'images/produkw3.png'),
(8, 'Pakaian Wanita', 'BATIK SEKARPUTRI TRIASIH II', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Blouse', 'Katun', 'S, M, L, XL', 'Rp 185.000,-', 'https://shopee.co.id/galerica/produk5', 'https://tokopedia.com/galerica/produk5', 'images/produkw4.png'),
(9, 'Pakaian Wanita', 'BATIK MAUDY II', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Dress', 'Cotton Batik Strech + Tile', 'S, M, L', 'Rp 250.000,-', 'https://shopee.co.id/galerica/produk9', 'https://tokopedia.com/galerica/produk9', 'images/produkw5.png'),
(10, 'Pakaian Wanita', 'BATIK DIRGA QUENETTA III', 0, 0, 'Siap tampil stylish dengan koleksi terbaru dari Galerica! Memperkenalkan Quenetta Series dengan motif batik dirga yang siap menemani hari-harimu. Dengan bahan katun toyobo yang adem dan nyaman, dikemas dalam desain yang trendi, simpel, dan chic.', 'Blouse', 'Katun', 'M, L', 'Rp 195.000,-', 'https://shopee.co.id/galerica/produk10', 'https://tokopedia.com/galerica/produk10', 'images/produkw2.png'),
(11, 'Pakaian Wanita', 'BATIK OTENTIK SERIES MERAH III', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Blouse', 'Katun', 'S, M, L', 'Rp 225.000,-', 'https://shopee.co.id/galerica/produk11', 'https://tokopedia.com/galerica/produk11', 'images/produkw3.png'),
(12, 'Pakaian Wanita', 'BATIK SEKARPUTRI TRIASIH III', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Blouse', 'Katun', 'S, M, L, XL', 'Rp 185.000,-', 'https://shopee.co.id/galerica/produk12', 'https://tokopedia.com/galerica/produk12', 'images/produkw4.png'),
(13, 'Pakaian Wanita', 'BATIK MAUDY III', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Dress', 'Cotton Batik Strech + Tile', 'S, M, L', 'Rp 250.000,-', 'https://shopee.co.id/galerica/produk13', 'https://tokopedia.com/galerica/produk13', 'images/produkw5.png'),
(14, 'Pakaian Wanita', 'BATIK DIRGA QUENETTA IV', 0, 0, 'Siap tampil stylish dengan koleksi terbaru dari Galerica! Memperkenalkan Quenetta Series dengan motif batik dirga yang siap menemani hari-harimu. Dengan bahan katun toyobo yang adem dan nyaman, dikemas dalam desain yang trendi, simpel, dan chic.', 'Blouse', 'Katun', 'M, L', 'Rp 195.000,-', 'https://shopee.co.id/galerica/produk14', 'https://tokopedia.com/galerica/produk14', 'images/produkw2.png'),
(15, 'Pakaian Wanita', 'BATIK OTENTIK SERIES MERAH IV', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Blouse', 'Katun', 'S, M, L', 'Rp 225.000,-', 'https://shopee.co.id/galerica/produk15', 'https://tokopedia.com/galerica/produk15', 'images/produkw3.png'),
(16, 'Pakaian Wanita', 'BATIK SEKARPUTRI TRIASIH IV', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Blouse', 'Katun', 'S, M, L, XL', 'Rp 185.000,-', 'https://shopee.co.id/galerica/produk16', 'https://tokopedia.com/galerica/produk16', 'images/produkw4.png'),
(17, 'Pakaian Wanita', 'BATIK MAUDY IV', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Dress', 'Cotton Batik Strech + Tile', 'S, M, L', 'Rp 250.000,-', 'https://shopee.co.id/galerica/produk17', 'https://tokopedia.com/galerica/produk17', 'images/produkw5.png'),
(18, 'Pakaian Wanita', 'BATIK DIRGA QUENETTA V', 0, 0, 'Siap tampil stylish dengan koleksi terbaru dari Galerica! Memperkenalkan Quenetta Series dengan motif batik dirga yang siap menemani hari-harimu. Dengan bahan katun toyobo yang adem dan nyaman, dikemas dalam desain yang trendi, simpel, dan chic.', 'Blouse', 'Katun', 'M, L', 'Rp 195.000,-', 'https://shopee.co.id/galerica/produk18', 'https://tokopedia.com/galerica/produk18', 'images/produkw2.png'),
(19, 'Pakaian Wanita', 'BATIK OTENTIK SERIES MERAH V', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Blouse', 'Katun', 'S, M, L', 'Rp 225.000,-', 'https://shopee.co.id/galerica/produk19', 'https://tokopedia.com/galerica/produk19', 'images/produkw3.png'),
(20, 'Pakaian Pria', 'BATIK KAWUNG HEM PENDEK', 3, 0, 'Pria sejati mencintai budayanya. Untuk kebutuhan penampilan formal namun tetap santai, fashion item ini adalah jagonya. Dengan pola yang simetris dan beraturan, menunjukkan karakter pria gagah dan berwibawa. Bahannya adem dan nyaman, cocok untuk melengkapi penampilanmu. Jadilah pria sejati!', 'Kemeja', 'Katun', 'M, L, XL', 'Rp 175.000,-', 'https://shopee.co.id/galerica/produk20', 'https://tokopedia.com/galerica/produk20', 'images/produkp1.png'),
(21, 'Pakaian Pria', 'BATIK PARANG KERIS KUNING', 0, 1, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L', 'Rp 150.000,-', 'https://shopee.co.id/galerica/produk21', 'https://tokopedia.com/galerica/produk21', 'images/produkp2.png'),
(22, 'Pakaian Pria', 'BATIK SOLO HITAM', 0, 1, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L, XL', 'Rp 210.000,-', 'https://shopee.co.id/galerica/produk22', 'https://tokopedia.com/galerica/produk22', 'images/produkp3.png'),
(23, 'Pakaian Pria', 'BATIK KAWUNG HEM PENDEK II', 0, 0, 'Pria sejati mencintai budayanya. Untuk kebutuhan penampilan formal namun tetap santai, fashion item ini adalah jagonya. Dengan pola yang simetris dan beraturan, menunjukkan karakter pria gagah dan berwibawa. Bahannya adem dan nyaman, cocok untuk melengkapi penampilanmu. Jadilah pria sejati!', 'Kemeja', 'Katun', 'M, L, XL', 'Rp 175.000,-', 'https://shopee.co.id/galerica/produk23', 'https://tokopedia.com/galerica/produk23', 'images/produkp1.png'),
(24, 'Pakaian Pria', 'BATIK PARANG KERIS KUNING II', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L', 'Rp 150.000,-', 'https://shopee.co.id/galerica/produk24', 'https://tokopedia.com/galerica/produk24', 'images/produkp2.png'),
(25, 'Pakaian Pria', 'BATIK SOLO HITAM II', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L, XL', 'Rp 210.000,-', 'https://shopee.co.id/galerica/produk25', 'https://tokopedia.com/galerica/produk25', 'images/produkp3.png'),
(26, 'Pakaian Pria', 'BATIK KAWUNG HEM PENDEK III', 0, 0, 'Pria sejati mencintai budayanya. Untuk kebutuhan penampilan formal namun tetap santai, fashion item ini adalah jagonya. Dengan pola yang simetris dan beraturan, menunjukkan karakter pria gagah dan berwibawa. Bahannya adem dan nyaman, cocok untuk melengkapi penampilanmu. Jadilah pria sejati!', 'Kemeja', 'Katun', 'M, L, XL', 'Rp 175.000,-', 'https://shopee.co.id/galerica/produk26', 'https://tokopedia.com/galerica/produk26', 'images/produkp1.png'),
(27, 'Pakaian Pria', 'BATIK PARANG KERIS KUNING III', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L', 'Rp 150.000,-', 'https://shopee.co.id/galerica/produk27', 'https://tokopedia.com/galerica/produk27', 'images/produkp2.png'),
(28, 'Pakaian Pria', 'BATIK SOLO HITAM III', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L, XL', 'Rp 210.000,-', 'https://shopee.co.id/galerica/produk28', 'https://tokopedia.com/galerica/produk28', 'images/produkp3.png'),
(29, 'Pakaian Wanita', 'BATIK SEKARPUTRI TRIASIH V', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Blouse', 'Katun', 'S, M, L, XL', 'Rp 185.000,-', 'https://shopee.co.id/galerica/produk29', 'https://tokopedia.com/galerica/produk29', 'images/produkw4.png'),
(30, 'Pakaian Wanita', 'BATIK MAUDY V', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Dress', 'Cotton Batik Strech + Tile', 'S, M, L', 'Rp 250.000,-', 'https://shopee.co.id/galerica/produk30', 'https://tokopedia.com/galerica/produk30', 'images/produkw5.png'),
(31, 'Pakaian Wanita', 'BATIK DIRGA QUENETTA VI', 0, 0, 'Siap tampil stylish dengan koleksi terbaru dari Galerica! Memperkenalkan Quenetta Series dengan motif batik dirga yang siap menemani hari-harimu. Dengan bahan katun toyobo yang adem dan nyaman, dikemas dalam desain yang trendi, simpel, dan chic.', 'Blouse', 'Katun', 'M, L', 'Rp 195.000,-', 'https://shopee.co.id/galerica/produk31', 'https://tokopedia.com/galerica/produk31', 'images/produkw2.png'),
(32, 'Pakaian Wanita', 'BATIK OTENTIK SERIES MERAH VI', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Blouse', 'Katun', 'S, M, L', 'Rp 225.000,-', 'https://shopee.co.id/galerica/produk32', 'https://tokopedia.com/galerica/produk32', 'images/produkw3.png'),
(33, 'Pakaian Wanita', 'BATIK SEKARPUTRI TRIASIH VI', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Blouse', 'Katun', 'S, M, L, XL', 'Rp 185.000,-', 'https://shopee.co.id/galerica/produk33', 'https://tokopedia.com/galerica/produk33', 'images/produkw4.png'),
(34, 'Pakaian Wanita', 'BATIK MAUDY VI', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Dress', 'Cotton Batik Strech + Tile', 'S, M, L', 'Rp 250.000,-', 'https://shopee.co.id/galerica/produk34', 'https://tokopedia.com/galerica/produk34', 'images/produkw5.png'),
(35, 'Pakaian Wanita', 'BATIK DIRGA QUENETTA VII', 0, 0, 'Siap tampil stylish dengan koleksi terbaru dari Galerica! Memperkenalkan Quenetta Series dengan motif batik dirga yang siap menemani hari-harimu. Dengan bahan katun toyobo yang adem dan nyaman, dikemas dalam desain yang trendi, simpel, dan chic.', 'Blouse', 'Katun', 'M, L', 'Rp 195.000,-', 'https://shopee.co.id/galerica/produk35', 'https://tokopedia.com/galerica/produk35', 'images/produkw2.png'),
(36, 'Pakaian Wanita', 'BATIK OTENTIK SERIES MERAH VII', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Blouse', 'Katun', 'S, M, L', 'Rp 225.000,-', 'https://shopee.co.id/galerica/produk36', 'https://tokopedia.com/galerica/produk36', 'images/produkw3.png'),
(37, 'Pakaian Wanita', 'BATIK SEKARPUTRI TRIASIH VII', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Blouse', 'Katun', 'S, M, L, XL', 'Rp 185.000,-', 'https://shopee.co.id/galerica/produk37', 'https://tokopedia.com/galerica/produk37', 'images/produkw4.png'),
(38, 'Pakaian Wanita', 'BATIK MAUDY VII', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Dress', 'Cotton Batik Strech + Tile', 'S, M, L', 'Rp 250.000,-', 'https://shopee.co.id/galerica/produk38', 'https://tokopedia.com/galerica/produk38', 'images/produkw5.png'),
(39, 'Pakaian Pria', 'BATIK KAWUNG HEM PENDEK IV', 0, 0, 'Pria sejati mencintai budayanya. Untuk kebutuhan penampilan formal namun tetap santai, fashion item ini adalah jagonya. Dengan pola yang simetris dan beraturan, menunjukkan karakter pria gagah dan berwibawa. Bahannya adem dan nyaman, cocok untuk melengkapi penampilanmu. Jadilah pria sejati!', 'Kemeja', 'Katun', 'M, L, XL', 'Rp 175.000,-', 'https://shopee.co.id/galerica/produk39', 'https://tokopedia.com/galerica/produk39', 'images/produkp1.png'),
(40, 'Pakaian Pria', 'BATIK PARANG KERIS KUNING IV', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L', 'Rp 150.000,-', 'https://shopee.co.id/galerica/produk40', 'https://tokopedia.com/galerica/produk40', 'images/produkp2.png'),
(41, 'Pakaian Pria', 'BATIK SOLO HITAM IV', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L, XL', 'Rp 210.000,-', 'https://shopee.co.id/galerica/produk41', 'https://tokopedia.com/galerica/produk41', 'images/produkp3.png'),
(42, 'Pakaian Pria', 'BATIK KAWUNG HEM PENDEK V', 0, 0, 'Pria sejati mencintai budayanya. Untuk kebutuhan penampilan formal namun tetap santai, fashion item ini adalah jagonya. Dengan pola yang simetris dan beraturan, menunjukkan karakter pria gagah dan berwibawa. Bahannya adem dan nyaman, cocok untuk melengkapi penampilanmu. Jadilah pria sejati!', 'Kemeja', 'Katun', 'M, L, XL', 'Rp 175.000,-', 'https://shopee.co.id/galerica/produk42', 'https://tokopedia.com/galerica/produk42', 'images/produkp1.png'),
(43, 'Pakaian Pria', 'BATIK PARANG KERIS KUNING V', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L', 'Rp 150.000,-', 'https://shopee.co.id/galerica/produk43', 'https://tokopedia.com/galerica/produk43', 'images/produkp2.png'),
(44, 'Pakaian Pria', 'BATIK SOLO HITAM V', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L, XL', 'Rp 210.000,-', 'https://shopee.co.id/galerica/produk44', 'https://tokopedia.com/galerica/produk44', 'images/produkp3.png'),
(45, 'Pakaian Pria', 'BATIK KAWUNG HEM PENDEK VI', 0, 0, 'Pria sejati mencintai budayanya. Untuk kebutuhan penampilan formal namun tetap santai, fashion item ini adalah jagonya. Dengan pola yang simetris dan beraturan, menunjukkan karakter pria gagah dan berwibawa. Bahannya adem dan nyaman, cocok untuk melengkapi penampilanmu. Jadilah pria sejati!', 'Kemeja', 'Katun', 'M, L, XL', 'Rp 175.000,-', 'https://shopee.co.id/galerica/produk45', 'https://tokopedia.com/galerica/produk45', 'images/produkp1.png'),
(46, 'Pakaian Pria', 'BATIK PARANG KERIS KUNING VI', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L', 'Rp 150.000,-', 'https://shopee.co.id/galerica/produk46', 'https://tokopedia.com/galerica/produk46', 'images/produkp2.png'),
(47, 'Pakaian Pria', 'BATIK SOLO HITAM VI', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L, XL', 'Rp 210.000,-', 'https://shopee.co.id/galerica/produk47', 'https://tokopedia.com/galerica/produk47', 'images/produkp3.png'),
(48, 'Pakaian Pria', 'BATIK KAWUNG HEM PENDEK VII', 0, 0, 'Pria sejati mencintai budayanya. Untuk kebutuhan penampilan formal namun tetap santai, fashion item ini adalah jagonya. Dengan pola yang simetris dan beraturan, menunjukkan karakter pria gagah dan berwibawa. Bahannya adem dan nyaman, cocok untuk melengkapi penampilanmu. Jadilah pria sejati!', 'Kemeja', 'Katun', 'M, L, XL', 'Rp 175.000,-', 'https://shopee.co.id/galerica/produk48', 'https://tokopedia.com/galerica/produk48', 'images/produkp1.png'),
(49, 'Pakaian Pria', 'BATIK PARANG KERIS KUNING VII', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L', 'Rp 150.000,-', 'https://shopee.co.id/galerica/produk49', 'https://tokopedia.com/galerica/produk49', 'images/produkp2.png'),
(50, 'Pakaian Pria', 'BATIK SOLO HITAM VII', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L, XL', 'Rp 210.000,-', 'https://shopee.co.id/galerica/produk50', 'https://tokopedia.com/galerica/produk50', 'images/produkp3.png'),
(51, 'Pakaian Pria', 'BATIK KAWUNG HEM PENDEK VIII', 0, 0, 'Pria sejati mencintai budayanya. Untuk kebutuhan penampilan formal namun tetap santai, fashion item ini adalah jagonya. Dengan pola yang simetris dan beraturan, menunjukkan karakter pria gagah dan berwibawa. Bahannya adem dan nyaman, cocok untuk melengkapi penampilanmu. Jadilah pria sejati!', 'Kemeja', 'Katun', 'M, L, XL', 'Rp 175.000,-', 'https://shopee.co.id/galerica/produk51', 'https://tokopedia.com/galerica/produk51', 'images/produkp1.png'),
(52, 'Pakaian Pria', 'BATIK PARANG KERIS KUNING VIII', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L', 'Rp 150.000,-', 'https://shopee.co.id/galerica/produk52', 'https://tokopedia.com/galerica/produk52', 'images/produkp2.png'),
(53, 'Pakaian Pria', 'BATIK SOLO HITAM VIII', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L, XL', 'Rp 210.000,-', 'https://shopee.co.id/galerica/produk53', 'https://tokopedia.com/galerica/produk53', 'images/produkp3.png'),
(54, 'Pakaian Pria', 'BATIK KAWUNG HEM PENDEK IX', 0, 0, 'Pria sejati mencintai budayanya. Untuk kebutuhan penampilan formal namun tetap santai, fashion item ini adalah jagonya. Dengan pola yang simetris dan beraturan, menunjukkan karakter pria gagah dan berwibawa. Bahannya adem dan nyaman, cocok untuk melengkapi penampilanmu. Jadilah pria sejati!', 'Kemeja', 'Katun', 'M, L, XL', 'Rp 175.000,-', 'https://shopee.co.id/galerica/produk54', 'https://tokopedia.com/galerica/produk54', 'images/produkp1.png'),
(55, 'Pakaian Pria', 'BATIK PARANG KERIS KUNING IX', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L', 'Rp 150.000,-', 'https://shopee.co.id/galerica/produk55', 'https://tokopedia.com/galerica/produk55', 'images/produkp2.png'),
(56, 'Pakaian Pria', 'BATIK SOLO HITAM IX', 0, 0, '<i>Tidak ada deskripsi produk.</i>', 'Kemeja', 'Katun', 'S, M, L, XL', 'Rp 210.000,-', 'https://shopee.co.id/galerica/produk56', 'https://tokopedia.com/galerica/produk56', 'images/produkp3.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `no` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `usia` varchar(9) DEFAULT NULL,
  `pekerjaan` varchar(50) DEFAULT NULL,
  `komentar` varchar(300) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`no`, `nama`, `usia`, `pekerjaan`, `komentar`, `image`) VALUES
(1, 'Gilang Permana', '27 tahun', 'Karyawan Swasta', 'Batik dari Galerica sangat nyaman dikenakan. Dipakai ke kantor bisa, dipakai untuk hangout juga nyaman. Bahannya adem dan modelnya juga trendi.', 'images/testi1.png'),
(2, 'Agata', '20 tahun', 'Mahasiswi', 'Batiknya keren banget. Nyaman dipakai kuliah. Tampil rapi, sopan, sekaligus juga kece.', 'images/testi2.jpg'),
(3, 'Hana A. Devina', '34 tahun', 'Ibu Rumah Tangga', 'Buat ke kondangan, arisan, acara, maupun ngumpul sama teman-teman, bisa banget! Jemput anak sekolah, jalan sama suami, nyaman dipakai dan modelnya cantik-cantik. Teman-teman saya sampai tanya beli di mana.', 'images/testi3.png');

-- --------------------------------------------------------

--
-- Table structure for table `toko_offline`
--

CREATE TABLE `toko_offline` (
  `image` varchar(100) DEFAULT NULL,
  `alamat` varchar(500) DEFAULT NULL,
  `senin` varchar(15) DEFAULT NULL,
  `selasa` varchar(15) DEFAULT NULL,
  `rabu` varchar(15) DEFAULT NULL,
  `kamis` varchar(15) DEFAULT NULL,
  `jumat` varchar(15) DEFAULT NULL,
  `sabtu` varchar(15) DEFAULT NULL,
  `minggu` varchar(15) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko_offline`
--

INSERT INTO `toko_offline` (`image`, `alamat`, `senin`, `selasa`, `rabu`, `kamis`, `jumat`, `sabtu`, `minggu`, `telepon`) VALUES
('toko-offline.jpg', 'Jalan Jenderal Ahmad Yani No. 116<br>Bangka Belitung Laut, Pontianak Tenggara, Bansir Darat, Kec. Pontianak Tenggara<br>Kota Pontianak, Kalimantan Barat 78112', '09.00-20.00 WIB', '09.00-20.00 WIB', '09.00-20.00 WIB', '09.00-20.00 WIB', '09.00-20.00 WIB', '09.00-22.00 WIB', '11.00-22.00 WIB', '(0561) 712345');

-- --------------------------------------------------------

--
-- Table structure for table `toko_online`
--

CREATE TABLE `toko_online` (
  `toko` varchar(30) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `link` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko_online`
--

INSERT INTO `toko_online` (`toko`, `nama`, `image`, `link`) VALUES
('Shopee', 'Galerica', 'shopee.png', 'https://shopee.co.id/galerica'),
('Tokopedia', 'Galerica', 'tokopedia.png', 'https://www.tokopedia.com/galerica');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pakaian`
--
ALTER TABLE `pakaian`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `toko_online`
--
ALTER TABLE `toko_online`
  ADD PRIMARY KEY (`toko`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pakaian`
--
ALTER TABLE `pakaian`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
