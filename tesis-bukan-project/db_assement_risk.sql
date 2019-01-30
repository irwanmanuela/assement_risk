-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2019 at 06:24 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_assement_risk`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_master`
--

CREATE TABLE `db_master` (
  `id` int(11) NOT NULL,
  `bagian` varchar(255) DEFAULT NULL,
  `task` varchar(255) DEFAULT NULL,
  `masalah` text,
  `risiko` text,
  `solusi` text,
  `proyek` text,
  `keyword` text
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `db_master`
--

INSERT INTO `db_master` (`id`, `bagian`, `task`, `masalah`, `risiko`, `solusi`, `proyek`, `keyword`) VALUES
(1, 'PEDAHULUAN', 'Kontrak', 'Pengesahan dan penandatanganan kontrak terlambat sampai dengan 3 bulan dikarenakan project fisik belum dilelang', 'Indikasi Gagal Kontrak dan lelang ulang', 'Meminta Satker untuk melakukan percepatan lelang untuk Project Fisik', 'Supervisi PDAM Kota Binaan Pematang Siantar (MYC)', 'kontrak'),
(2, 'PEDAHULUAN', 'Kontrak', 'Kesulitan dalam membuat audit payroll terkait penentuan dasar remunerasi', 'Menjadi temuan BPK dikarenakan tidak ada dasar penentuan penawaran remunerasi', 'Melakukan assesment remunerasi  berdasarkan untuk audit payroll berdasarkan Pajak personil Form 1721', 'Manajemen Konstruksi Pembangunan Landmark Perbatasan Kapsul Waktu Papua', 'Remunerasi, Auditpayroll, BPK, Papua'),
(3, 'PEDAHULUAN', 'Kontrak', 'Kontrak mundur dikarenakan satker tidak ditempat', 'Indikasi Gagal Kontrak dan lelang ulang', 'Kontrak  dilakukan backdate', 'Penyusunan Kajian Risiko Bencana', 'BNPB, KRB, Kontrak, lelang'),
(4, 'PENDAHULUAN', 'Kontrak', 'Kesulitan dalam membuat audit payroll terkait penentuan dasar remunerasi', 'Menjadi temuan BPK dikarenakan tidak ada dasar penentuan penawaran remunerasi', 'Melakukan assesment remunerasi  berdasarkan untuk audit payroll berdasarkan Pajak personil Form 1721', 'Supervisi jalan dan jembatan Morotai 1', 'Audit payroll, remunerasi, BPK, morotai, ternate'),
(5, 'PEDAHULUAN', 'Mobilisasi Tenaga ahli', 'Tenaga Ahli sudah digunakan proyek lain', 'Tidak ada yang melakukan analisa engineer\rDapat menjadi temuan dan pengembalian BPK senilai 15.000.000 x 7bln =', 'test', 'Supervisi PDAM Kota Binaan Pematang Siantar (MYC)', 'mobilisasi, tenaga ahli, BPK, Team Leader'),
(6, 'PEDAHULUAN', 'Mobilisasi Tenaga ahli', 'Tenaga Ahli Mengundurkan diri', 'Tidak ada yang mengkoordinasi team secara subtansial\rDapat menjadi temuan dan pengembalian BPK senilai 21.000.000 x 7bln =', 'Melakukan replace team leader pada saat kontrak awal dengan meminta rekomendasi pengganti kepada team leader sebelumnya', 'Manajemen Konstruksi Pembangunan Landmark Perbatasan Kapsul Waktu Papua', 'test'),
(7, 'PEDAHULUAN', 'Mobilisasi Tenaga ahli', 'Surat Keterangan Ahli habis', 'Dapat menjadi temuan BPK dikarenakan indikasi tidak sesuai standard TOR', 'SKA tenaga ahli diurus melalui jaringan ITAKINDO', 'Supervisi Jalan dan Jembatan Morotai', 'test'),
(8, 'PEDAHULUAN', 'Mobilisasi Tenaga ahli', 'Tenaga Ahli yang diproposed dikontrak tidak sanggup melaksanakan output yang dituangkan pada TOR pekerjaan', 'Output Kontrak tidak tercapai/tidak maksimal\rDapat menjadi temuan BPK', 'Dilakukan double kontrak terhadap TA yang diproposed dan yang membantu dalam substansial', 'Penyusunan Kajian Risiko Bencana 2018', 'test'),
(9, 'PEDAHULUAN', 'Mobilisasi Tenaga ahli', 'Fasilitator yang diproposed dikontrak tidak dapat dimobilisasi', 'tidak ada fasilitator yang diperintahkan untuk mengunjungi lapangan\rdapat menjadi temuan BPK', 'Melakukan replace fasilitator secara menyeluruh dengan izin terhadapap PPK dengan Skema addendum', 'Penyusunan Kajian Risiko Bencana 2017', 'test'),
(10, 'PENDAHULUAN', 'Pengadaan Data', 'Data RTRW tidak berhasil didapatkan', 'tidak mempunya babsis data induk dalam penyusunan RDTR', 'Melakukan pencarian data ke bappeda setempat melalui backdoor dengan konsekuensi finansial', 'Penyusunan Rencana Detatil Tata Ruang PKSN Saumlaki 2015', 'test'),
(11, 'PEDAHULUAN', 'Pengadaan Data', 'Data SHP RDTR atau file dengan skala 1:5000 tidak berhasil didapatkan', 'Tidak mempunya basis data yang baik dalam analisa kesesuaian lahan dalam penyusunan buku bisnisplan', 'Melakukan pembelian terhadap vendor pihak ke tiga (geojaya teknik)', 'Penyusunan Businessplan PKSN Kefamenanu', 'test'),
(12, 'PEDAHULUAN', 'Pengadaan Data', 'Data SHP RDTR atau file dengan skala 1:5000 tidak berhasil didapatkan', 'Tidak mempunya basis data yang baik dalam analisa lahan dilokasi rawan bencana', 'Melakukan mapping sendiri dibantu badan penanggulangan Daerah setempat', 'Penyusunan Kajian penyusunan risiko Bencana 2013', 'test'),
(13, 'PEDAHULUAN', 'Pengadaan Data', 'Data Topografi dan koordinat untuk lokasi Sondir Pembangunan tower tidak berhasil didapatkan', 'Ragu mobilisasi alat dan surveyor dikarenakan tidak mempunyai ketepatan gambaran lokasi', 'menerbitkan surat permohonan permintaan data terhadap client agar PPK dapat membuat surat untuk menjembatani dalam proses pencarian data govement to government', 'Pembangunan Tower peringatan dini sistem kebakaran hutan dan lahan', 'test'),
(14, 'PEDAHULUAN', 'Pengadaan Data', 'Data Tata Guna lahan tidakberhasil didapatkan', 'tidak mempunya basis data dalam penyusunan taa guna lahan eksisting', 'Melakukan pencarian data ke bappeda setempat melalui backdoor dengan konsekuensi finansial', 'Penyusunan Rencana Detatil Tata Ruang PKSN Saumlaki 2015', 'test'),
(15, 'PEDAHULUAN', 'Pengadaan Data', 'Data sarana dan prasarana kawasan tidak didapatkan', 'tidak mempunya basis data dalam melekukan identifikasi saran dan prasarana eksisting', 'Melakukan pencarian data ke bappeda setempat melalui backdoor dengan konsekuensi finansial', 'Penyusunan Rencana Detatil Tata Ruang PKSN Saumlaki 2015', 'test'),
(16, 'PEDAHULUAN', 'Pengadaan Data', 'Data kependudukan belum didapatkan', 'tidak mempunyai basis data dalam melakukan identifikasi kepadatan dan seebaran penduduk', 'Melakukan pencarian data ke bappeda setempat melalui backdoor dengan konsekuensi finansial', 'Penyusunan Rencana Detail Tata Ruang PKSN Jagoi Babang', 'test'),
(17, 'ANTARA', 'Kunjungan lapangan', 'Kesediaan waktu TA yang tidak sesuai dengan jadwal yang di sepakati pemberi kerja', 'mundurnya jadwal kunjungan menyebabkan efek domino pada kegiatan yang lainya', 'Meminta TA melakukan reschedule pada kegiatan lainya dan berkoordinasi kepada satkerterkait penyesuaian jadwal', 'Sistem Informasi Air Minum', 'test'),
(18, 'ANTARA', 'Kunjungan lapangan', 'Waktu kunjungan tidak sesuai dengan jadwal satker daerah', 'mundurnya jadwal kunjungan menyebabkan efek domino pada kegiatan yang lainya\rtidak ada pendampingan pada saat kunjungan kedaerah', 'Reschedule kunjungan lapangan', 'Penyusunan Kajian Risiko Bencana 2017', 'test'),
(19, 'ANTARA', 'Kunjungan lapangan', 'Peninjauan tata guna lahan tidak sesuai dengan data yang dimiliki', 'rombak laporan Pendahuluan terkait tidak validnya dokumen aal yang didapat terkait tata guna lahan', 'Melakukan crosscheck kepada kementerian ATR dan Bappeda terkait perbedaan data', 'Penyusunan Kajian Risiko Bencana 2017', 'test'),
(20, 'ANTARA', 'Kunjungan lapangan', 'Peninjauan sinkronisasi data peruntukan lahan mendapatkan penolakan dari pihak swasta', 'tidak dapat melakukan validasi data perencanaan dengan kondisi eksisiting', 'Melkukan koordinasi kepada sekda untuk melakukan fasilitasi pendampingan kunjungan', 'Penyusunan Kajian Risiko Bencana 2017', 'test'),
(21, 'ANTARA', 'Kunjungan lapangan', 'Peninjauan daerah rawan konflik menghadapi resistensi', 'Tidak dapat melakukan survei lapangan ke lokasi', 'Melakukan koordinasi ke Badan pengelolaperbatasan untuk meminta fasilitasi berkoordinasi dengan bappeda dan aparat keamanan setempat untuk mendapat pengawalan survey lapangan', 'Penyusunan rencana detail tata ruang lokpri bovendigoel Papua', 'test'),
(22, 'ANTARA', 'Kunjungan lapangan', 'Peninjauan daerah rawan konflik menghadapi resistensi', 'Tidak dapat melakukan survei lapangan ke lokasi', 'Melakukan koordinasi kepada tokoh setempat (pemuka Agama)', 'Penyusunan rencana detail tata ruang PKSN Saumlaki', 'test'),
(23, 'ANTARA', 'Focus group Discussion', 'Dana tidak sesuai dengan yang ada dikotrak', 'pelaksanaan mekanisme FGD tidak sesuai dengan tunutan output TOR', 'Tetap melaksanakan FGD dengan tambal sulam dari pendanaan pada item lain', 'Pembangunan Tower peringatan dini sistem kebakaran hutan dan lahan', 'test'),
(24, 'ANTARA', 'Focus group Discussion', 'Ada beberapa undangan yang tidak hadir', 'Targert peserta tidak terpenuhi', 'Tetap melaksanakan FGD dengan konsekuensi Sekretaris Daerah tidak hadir', 'Penyusunan Bussinesplan PKSN Kefamenanu', 'test'),
(25, 'ANTARA', 'Sondir Tanah', 'Dana yang ada pada kontrak tidak sesuai dengan sondir test dilapangan', 'Tidak dapat melakukan sondir test', 'Tetap melaksanakan Sondir dengan tambal sulam dari pendanaan pada item lain', 'Pembangunan Tower peringatan dini sistem kebakaran hutan dan lahan', 'test'),
(26, 'ANTARA', 'Sondir Tanah', 'Dana yang ada pada kontrak tidak sesuai dengan sondir test dilapangan', 'Tidak dapat melakukan sondir test', 'Tetap melaksanakan Sondir dengan tambal sulam dari pendanaan pada item lain', 'Pembangunan jalan dan jembatan sula2', 'test'),
(27, 'ANTARA', 'Presentasi Laporan Antara', 'Laporan Antara belum siap', 'Jadwal presentasi mundur dan tidak dapat melakukan penagihan termin', 'Reschedule jadwal dengan konsekuensi mundur penagihan termin', 'Penerapan sistem informasi air minum', 'test'),
(28, 'ANTARA', 'Presentasi Laporan Antara', 'Tenaga Ahli Geografi dan pemetaan tidak dapat menghadiri', 'tidak ada yang backup dengan subtansi tersebut', 'izin terhadap satker dan meminta tenaga ahli menyiapkan narasi subtansial yang aan dibackup oleh team leader', 'Penyusuan RDTR PKSN Saumlaki', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_akhir`
--

CREATE TABLE `laporan_akhir` (
  `id` int(10) unsigned NOT NULL,
  `project_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activity_id` int(11) unsigned NOT NULL,
  `activity_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_risk` text COLLATE utf8mb4_unicode_ci,
  `activity_solution` text COLLATE utf8mb4_unicode_ci,
  `duration_date` int(11) NOT NULL,
  `pinalty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_akhir`
--

INSERT INTO `laporan_akhir` (`id`, `project_id`, `created_at`, `updated_at`, `activity_id`, `activity_name`, `activity_desc`, `activity_risk`, `activity_solution`, `duration_date`, `pinalty`, `keywords`) VALUES
(1, 1, '2018-11-27 06:06:53', '2019-01-19 06:15:28', 1, 'Mobilisasi Peralatan', 'sdasdasd', NULL, 'Tambah Tenaga Kerja', 3, '3', 'a:2:{i:0;s:10:"Mobilisasi";i:1;s:9:"Peralatan";}'),
(2, 2, '2018-11-27 06:31:42', '2019-01-19 06:15:28', 22, 'Penyempurnaan Zoning Regulation', 'asasd', NULL, 'Dilakukan oleh tenaga ahli', 3, '5', 'a:3:{i:0;s:13:"Penyempurnaan";i:1;s:6:"Zoning";i:2;s:10:"Regulation";}'),
(3, 3, '2018-11-27 06:33:17', '2019-01-19 06:15:28', 22, 'Penyempurnaan Zoning Regulation', '555', NULL, 'Dilakukan oleh tenaga ahli', 5, '4', 'a:3:{i:0;s:13:"Penyempurnaan";i:1;s:6:"Zoning";i:2;s:10:"Regulation";}'),
(4, 4, '2018-11-27 06:34:04', '2019-01-19 06:15:28', 22, 'Penyempurnaan Zoning Regulation', 'asasd', NULL, 'Dilakukan oleh tenaga ahli', 6, '70', 'a:3:{i:0;s:13:"Penyempurnaan";i:1;s:6:"Zoning";i:2;s:10:"Regulation";}'),
(5, 5, '2018-11-27 06:46:08', '2019-01-19 06:15:28', 22, 'Penyempurnaan Zoning Regulation', 'asdasdas', NULL, 'Dilakukan oleh tenaga ahli', 800, '700', 'a:3:{i:0;s:13:"Penyempurnaan";i:1;s:6:"Zoning";i:2;s:10:"Regulation";}'),
(6, 6, '2018-11-28 00:58:37', '2019-01-19 06:15:28', 22, 'Penyempurnaan Zoning Regulation', '700', NULL, 'Dilakukan oleh tenaga ahli', 400, '500', 'a:3:{i:0;s:13:"Penyempurnaan";i:1;s:6:"Zoning";i:2;s:10:"Regulation";}'),
(7, 8, '2019-01-19 03:57:44', '2019-01-19 03:57:44', 1, 'parah amat', 'udah tau', NULL, NULL, 500, '300', 'a:2:{i:0;s:5:"parah";i:1;s:4:"amat";}');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_akhir_draft`
--

CREATE TABLE `laporan_akhir_draft` (
  `id` int(10) unsigned NOT NULL,
  `project_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activity_id` int(11) unsigned NOT NULL,
  `activity_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_risk` text COLLATE utf8mb4_unicode_ci,
  `activity_solution` text COLLATE utf8mb4_unicode_ci,
  `duration_date` int(11) NOT NULL,
  `pinalty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_akhir_draft`
--

INSERT INTO `laporan_akhir_draft` (`id`, `project_id`, `created_at`, `updated_at`, `activity_id`, `activity_name`, `activity_desc`, `activity_risk`, `activity_solution`, `duration_date`, `pinalty`, `keywords`) VALUES
(1, 1, '2018-11-27 06:06:53', '2019-01-19 06:15:28', 1, 'Mobilisasi Peralatan', 'abobom', NULL, 'Tambah Tenaga Kerja', 3, '3', 'a:2:{i:0;s:10:"Mobilisasi";i:1;s:9:"Peralatan";}'),
(2, 2, '2018-11-27 06:31:42', '2019-01-19 06:15:28', 20, 'Menyusun Indikasi Program', 'abobom', NULL, 'Dilakukan oleh tenaga ahli', 3, '5', 'a:3:{i:0;s:8:"Menyusun";i:1;s:8:"Indikasi";i:2;s:7:"Program";}'),
(3, 3, '2018-11-27 06:33:17', '2019-01-19 06:15:28', 20, 'Menyusun Indikasi Program', 'boom', NULL, 'Dilakukan oleh tenaga ahli', 50, '100', 'a:3:{i:0;s:8:"Menyusun";i:1;s:8:"Indikasi";i:2;s:7:"Program";}'),
(4, 4, '2018-11-27 06:34:04', '2019-01-19 06:15:28', 20, 'Menyusun Indikasi Program', 'asdadsd', NULL, 'Dilakukan oleh tenaga ahli', 5, '3', 'a:3:{i:0;s:8:"Menyusun";i:1;s:8:"Indikasi";i:2;s:7:"Program";}'),
(5, 5, '2018-11-27 06:46:08', '2019-01-19 06:15:28', 20, 'Menyusun Indikasi Program', 'asdasds', NULL, 'Dilakukan oleh tenaga ahli', 500, '800', 'a:3:{i:0;s:8:"Menyusun";i:1;s:8:"Indikasi";i:2;s:7:"Program";}'),
(6, 6, '2018-11-28 00:58:37', '2019-01-19 06:15:28', 20, 'Menyusun Indikasi Program', 'asdadsd', NULL, 'Dilakukan oleh tenaga ahli', 50, '5000', 'a:3:{i:0;s:8:"Menyusun";i:1;s:8:"Indikasi";i:2;s:7:"Program";}'),
(7, 8, '2019-01-19 03:57:44', '2019-01-19 03:57:44', 1, 'booom', 'meledak', NULL, NULL, 400, '500', 'a:1:{i:0;s:5:"booom";}');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_antara`
--

CREATE TABLE `laporan_antara` (
  `id` int(10) unsigned NOT NULL,
  `project_id` int(11) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activity_id` int(11) unsigned DEFAULT NULL,
  `activity_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_risk` text COLLATE utf8mb4_unicode_ci,
  `activity_solution` text COLLATE utf8mb4_unicode_ci,
  `duration_date` int(11) NOT NULL,
  `pinalty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_antara`
--

INSERT INTO `laporan_antara` (`id`, `project_id`, `created_at`, `updated_at`, `activity_id`, `activity_name`, `activity_desc`, `activity_risk`, `activity_solution`, `duration_date`, `pinalty`, `keywords`) VALUES
(1, 1, '2018-11-27 06:06:53', '2019-01-18 08:04:32', 1, 'Mobilisasi Peralatan', 'sdsadasd', NULL, 'Tambah Tenaga kerja', 3, '3', 'a:2:{i:0;s:10:"Mobilisasi";i:1;s:9:"Peralatan";}'),
(2, 1, '2018-11-27 06:06:53', '2019-01-18 08:04:32', 1, 'Mobilisasi Peralatan', 'adasd', NULL, 'Tambah Tenaga Kerja', 5, '3', 'a:2:{i:0;s:10:"Mobilisasi";i:1;s:9:"Peralatan";}'),
(3, 2, '2018-11-27 06:31:42', '2019-01-18 08:04:32', 14, 'Perumusan masalah potensi dan peluang', 'adasdas', NULL, 'Dilakukan oleh tenaga ahli', 5, '100', 'a:5:{i:0;s:9:"Perumusan";i:1;s:7:"masalah";i:2;s:7:"potensi";i:3;s:3:"dan";i:4;s:7:"peluang";}'),
(4, 3, '2018-11-27 06:33:17', '2019-01-18 08:04:32', 10, 'Analisis Strukture Ruang', '55', NULL, 'Dilakukan oleh tenaga ahli', 3, '55', 'a:3:{i:0;s:8:"Analisis";i:1;s:9:"Strukture";i:2;s:5:"Ruang";}'),
(5, 4, '2018-11-27 06:34:04', '2019-01-18 08:04:32', 14, 'Perumusan masalah potensi dan peluang', 'sdfsdf', NULL, 'Dilakukan oleh tenaga ahli', 5, '50', 'a:5:{i:0;s:9:"Perumusan";i:1;s:7:"masalah";i:2;s:7:"potensi";i:3;s:3:"dan";i:4;s:7:"peluang";}'),
(6, 5, '2018-11-27 06:46:08', '2019-01-18 08:04:32', 14, 'Perumusan masalah potensi dan peluang', 'Boom', NULL, 'Dilakukan oleh tenaga ahli', 500, '700', 'a:5:{i:0;s:9:"Perumusan";i:1;s:7:"masalah";i:2;s:7:"potensi";i:3;s:3:"dan";i:4;s:7:"peluang";}'),
(7, 6, '2018-11-28 00:58:37', '2019-01-18 08:04:32', 11, 'Analisis Pola Ruang', '55', NULL, 'Dilakukan oleh tenaga ahli', 3, '700', 'a:3:{i:0;s:8:"Analisis";i:1;s:4:"Pola";i:2;s:5:"Ruang";}'),
(9, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Kesediaan waktu TA yang tidak sesuai dengan jadwal yang di sepakati pemberi kerja', 'Sistem Informasi Air Minum', 'mundurnya jadwal kunjungan menyebabkan efek domino pada kegiatan yang lainya', 'Meminta TA melakukan reschedule pada kegiatan lainya dan berkoordinasi kepada satkerterkait penyesuaian jadwal', 0, '', 'a:13:{i:0;s:9:"Kesediaan";i:1;s:5:"waktu";i:2;s:2:"TA";i:3;s:4:"yang";i:4;s:5:"tidak";i:5;s:6:"sesuai";i:6;s:6:"dengan";i:7;s:6:"jadwal";i:8;s:4:"yang";i:9;s:2:"di";i:10;s:8:"sepakati";i:11;s:7:"pemberi";i:12;s:5:"kerja";}'),
(10, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Waktu kunjungan tidak sesuai dengan jadwal satker daerah', 'Penyusunan Kajian Risiko Bencana 2017', 'mundurnya jadwal kunjungan menyebabkan efek domino pada kegiatan yang lainya\rtidak ada pendampingan pada saat kunjungan kedaerah', 'Reschedule kunjungan lapangan', 0, '', 'a:8:{i:0;s:5:"Waktu";i:1;s:9:"kunjungan";i:2;s:5:"tidak";i:3;s:6:"sesuai";i:4;s:6:"dengan";i:5;s:6:"jadwal";i:6;s:6:"satker";i:7;s:6:"daerah";}'),
(11, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Peninjauan tata guna lahan tidak sesuai dengan data yang dimiliki', 'Penyusunan Kajian Risiko Bencana 2017', 'rombak laporan Pendahuluan terkait tidak validnya dokumen aal yang didapat terkait tata guna lahan', 'Melakukan crosscheck kepada kementerian ATR dan Bappeda terkait perbedaan data', 0, '', 'a:10:{i:0;s:10:"Peninjauan";i:1;s:4:"tata";i:2;s:4:"guna";i:3;s:5:"lahan";i:4;s:5:"tidak";i:5;s:6:"sesuai";i:6;s:6:"dengan";i:7;s:4:"data";i:8;s:4:"yang";i:9;s:8:"dimiliki";}'),
(12, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Peninjauan sinkronisasi data peruntukan lahan mendapatkan penolakan dari pihak swasta', 'Penyusunan Kajian Risiko Bencana 2017', 'tidak dapat melakukan validasi data perencanaan dengan kondisi eksisiting', 'Melkukan koordinasi kepada sekda untuk melakukan fasilitasi pendampingan kunjungan', 0, '', 'a:10:{i:0;s:10:"Peninjauan";i:1;s:12:"sinkronisasi";i:2;s:4:"data";i:3;s:10:"peruntukan";i:4;s:5:"lahan";i:5;s:11:"mendapatkan";i:6;s:9:"penolakan";i:7;s:4:"dari";i:8;s:5:"pihak";i:9;s:6:"swasta";}'),
(13, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Peninjauan daerah rawan konflik menghadapi resistensi', 'Penyusunan rencana detail tata ruang lokpri bovendigoel Papua', 'Tidak dapat melakukan survei lapangan ke lokasi', 'Melakukan koordinasi ke Badan pengelolaperbatasan untuk meminta fasilitasi berkoordinasi dengan bappeda dan aparat keamanan setempat untuk mendapat pengawalan survey lapangan', 0, '', 'a:6:{i:0;s:10:"Peninjauan";i:1;s:6:"daerah";i:2;s:5:"rawan";i:3;s:7:"konflik";i:4;s:10:"menghadapi";i:5;s:10:"resistensi";}'),
(14, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Peninjauan daerah rawan konflik menghadapi resistensi', 'Penyusunan rencana detail tata ruang PKSN Saumlaki', 'Tidak dapat melakukan survei lapangan ke lokasi', 'Melakukan koordinasi kepada tokoh setempat (pemuka Agama)', 0, '', 'a:6:{i:0;s:10:"Peninjauan";i:1;s:6:"daerah";i:2;s:5:"rawan";i:3;s:7:"konflik";i:4;s:10:"menghadapi";i:5;s:10:"resistensi";}'),
(15, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Dana tidak sesuai dengan yang ada dikotrak', 'Pembangunan Tower peringatan dini sistem kebakaran hutan dan lahan', 'pelaksanaan mekanisme FGD tidak sesuai dengan tunutan output TOR', 'Tetap melaksanakan FGD dengan tambal sulam dari pendanaan pada item lain', 0, '', 'a:7:{i:0;s:4:"Dana";i:1;s:5:"tidak";i:2;s:6:"sesuai";i:3;s:6:"dengan";i:4;s:4:"yang";i:5;s:3:"ada";i:6;s:8:"dikotrak";}'),
(16, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Ada beberapa undangan yang tidak hadir', 'Penyusunan Bussinesplan PKSN Kefamenanu', 'Targert peserta tidak terpenuhi', 'Tetap melaksanakan FGD dengan konsekuensi Sekretaris Daerah tidak hadir', 0, '', 'a:6:{i:0;s:3:"Ada";i:1;s:8:"beberapa";i:2;s:8:"undangan";i:3;s:4:"yang";i:4;s:5:"tidak";i:5;s:5:"hadir";}'),
(17, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Dana yang ada pada kontrak tidak sesuai dengan sondir test dilapangan', 'Pembangunan Tower peringatan dini sistem kebakaran hutan dan lahan', 'Tidak dapat melakukan sondir test', 'Tetap melaksanakan Sondir dengan tambal sulam dari pendanaan pada item lain', 0, '', 'a:11:{i:0;s:4:"Dana";i:1;s:4:"yang";i:2;s:3:"ada";i:3;s:4:"pada";i:4;s:7:"kontrak";i:5;s:5:"tidak";i:6;s:6:"sesuai";i:7;s:6:"dengan";i:8;s:6:"sondir";i:9;s:4:"test";i:10;s:10:"dilapangan";}'),
(18, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Dana yang ada pada kontrak tidak sesuai dengan sondir test dilapangan', 'Pembangunan jalan dan jembatan sula2', 'Tidak dapat melakukan sondir test', 'Tetap melaksanakan Sondir dengan tambal sulam dari pendanaan pada item lain', 0, '', 'a:11:{i:0;s:4:"Dana";i:1;s:4:"yang";i:2;s:3:"ada";i:3;s:4:"pada";i:4;s:7:"kontrak";i:5;s:5:"tidak";i:6;s:6:"sesuai";i:7;s:6:"dengan";i:8;s:6:"sondir";i:9;s:4:"test";i:10;s:10:"dilapangan";}'),
(19, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Laporan Antara belum siap', 'Penerapan sistem informasi air minum', 'Jadwal presentasi mundur dan tidak dapat melakukan penagihan termin', 'Reschedule jadwal dengan konsekuensi mundur penagihan termin', 0, '', 'a:4:{i:0;s:7:"Laporan";i:1;s:6:"Antara";i:2;s:5:"belum";i:3;s:4:"siap";}'),
(20, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Tenaga Ahli Geografi dan pemetaan tidak dapat menghadiri', 'Penyusuan RDTR PKSN Saumlaki', 'tidak ada yang backup dengan subtansi tersebut', 'izin terhadap satker dan meminta tenaga ahli menyiapkan narasi subtansial yang aan dibackup oleh team leader', 0, '', 'a:8:{i:0;s:6:"Tenaga";i:1;s:4:"Ahli";i:2;s:8:"Geografi";i:3;s:3:"dan";i:4;s:8:"pemetaan";i:5;s:5:"tidak";i:6;s:5:"dapat";i:7;s:10:"menghadiri";}'),
(24, 8, '2019-01-19 03:57:44', '2019-01-19 03:57:44', 1, 'noob', 'pemain cupu', 'GG', 'Boom', 4, '5000', 'a:1:{i:0;s:4:"noob";}');

-- --------------------------------------------------------

--
-- Table structure for table `laporan_khusus`
--

CREATE TABLE `laporan_khusus` (
  `id` int(10) unsigned NOT NULL,
  `project_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration_date` int(11) NOT NULL,
  `pinalty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan_pendahuluan`
--

CREATE TABLE `laporan_pendahuluan` (
  `id` int(10) unsigned NOT NULL,
  `project_id` int(11) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activity_id` int(11) unsigned DEFAULT NULL,
  `activity_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity_risk` text COLLATE utf8mb4_unicode_ci,
  `activity_solution` text COLLATE utf8mb4_unicode_ci,
  `duration_date` int(11) NOT NULL,
  `pinalty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan_pendahuluan`
--

INSERT INTO `laporan_pendahuluan` (`id`, `project_id`, `created_at`, `updated_at`, `activity_id`, `activity_name`, `activity_desc`, `activity_risk`, `activity_solution`, `duration_date`, `pinalty`, `keywords`) VALUES
(1, 1, '2018-11-27 06:06:53', '2019-01-18 07:59:09', 1, 'Mobilisasi Peralatan', 'asasds', '', 'Tambah Tenaga kerja', 3, '3', 'a:2:{i:0;s:10:"Mobilisasi";i:1;s:9:"Peralatan";}'),
(2, 2, '2018-11-27 06:31:42', '2019-01-18 08:04:32', 7, 'Menyiapkan Laporan Pendahuluan', 'boom', '', 'Dilakukan oleh tenaga ahli', 3, '500', 'a:3:{i:0;s:10:"Menyiapkan";i:1;s:7:"Laporan";i:2;s:11:"Pendahuluan";}'),
(3, 4, '2018-11-27 06:31:42', '2019-01-18 08:04:32', 4, 'Menyusun Rencana Kerja', 'adasds', '', 'Prioritas', 5, '300', 'a:3:{i:0;s:8:"Menyusun";i:1;s:7:"Rencana";i:2;s:5:"Kerja";}'),
(4, 3, '2018-11-27 06:33:17', '2019-01-18 08:04:32', 5, 'Menyusun Metodologi', 'asdas', '', 'Dilakukan oleh tenaga ahli', 5, '234', 'a:2:{i:0;s:8:"Menyusun";i:1;s:10:"Metodologi";}'),
(5, 4, '2018-11-27 06:34:04', '2019-01-18 08:04:32', 7, 'Menyiapkan Laporan Pendahuluan', '445', '', 'Dilakukan oleh tenaga ahli', 45, '55', 'a:3:{i:0;s:10:"Menyiapkan";i:1;s:7:"Laporan";i:2;s:11:"Pendahuluan";}'),
(6, 5, '2018-11-27 06:46:08', '2019-01-18 08:04:32', 7, 'Menyiapkan Laporan Pendahuluan', 'asdasd', '', 'Dilakukan oleh tenaga ahli', 5, '500', 'a:3:{i:0;s:10:"Menyiapkan";i:1;s:7:"Laporan";i:2;s:11:"Pendahuluan";}'),
(7, 6, '2018-11-28 00:58:37', '2019-01-18 08:04:32', 7, 'Menyiapkan Laporan Pendahuluan', 'boom', '', 'Dilakukan oleh tenaga ahli', 3, '500', 'a:3:{i:0;s:10:"Menyiapkan";i:1;s:7:"Laporan";i:2;s:11:"Pendahuluan";}'),
(8, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Pengesahan dan penandatanganan kontrak terlambat sampai dengan 3 bulan dikarenakan project fisik belum dilelang', 'Supervisi PDAM Kota Binaan Pematang Siantar (MYC)', 'Indikasi Gagal Kontrak dan lelang ulang', 'Meminta Satker untuk melakukan percepatan lelang untuk Project Fisik', 0, '', 'a:14:{i:0;s:10:"Pengesahan";i:1;s:3:"dan";i:2;s:15:"penandatanganan";i:3;s:7:"kontrak";i:4;s:9:"terlambat";i:5;s:6:"sampai";i:6;s:6:"dengan";i:7;s:1:"3";i:8;s:5:"bulan";i:9;s:11:"dikarenakan";i:10;s:7:"project";i:11;s:5:"fisik";i:12;s:5:"belum";i:13;s:8:"dilelang";}'),
(9, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Kesulitan dalam membuat audit payroll terkait penentuan dasar remunerasi', 'Manajemen Konstruksi Pembangunan Landmark Perbatasan Kapsul Waktu Papua', 'Menjadi temuan BPK dikarenakan tidak ada dasar penentuan penawaran remunerasi', 'Melakukan assesment remunerasi  berdasarkan untuk audit payroll berdasarkan Pajak personil Form 1721', 0, '', 'a:9:{i:0;s:9:"Kesulitan";i:1;s:5:"dalam";i:2;s:7:"membuat";i:3;s:5:"audit";i:4;s:7:"payroll";i:5;s:7:"terkait";i:6;s:9:"penentuan";i:7;s:5:"dasar";i:8;s:10:"remunerasi";}'),
(10, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Kontrak mundur dikarenakan satker tidak ditempat', 'Penyusunan Kajian Risiko Bencana', 'Indikasi Gagal Kontrak dan lelang ulang', 'Kontrak  dilakukan backdate', 0, '', 'a:6:{i:0;s:7:"Kontrak";i:1;s:6:"mundur";i:2;s:11:"dikarenakan";i:3;s:6:"satker";i:4;s:5:"tidak";i:5;s:8:"ditempat";}'),
(11, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Kesulitan dalam membuat audit payroll terkait penentuan dasar remunerasi', 'Supervisi jalan dan jembatan Morotai 1', 'Menjadi temuan BPK dikarenakan tidak ada dasar penentuan penawaran remunerasi', 'Melakukan assesment remunerasi  berdasarkan untuk audit payroll berdasarkan Pajak personil Form 1721', 0, '', 'a:9:{i:0;s:9:"Kesulitan";i:1;s:5:"dalam";i:2;s:7:"membuat";i:3;s:5:"audit";i:4;s:7:"payroll";i:5;s:7:"terkait";i:6;s:9:"penentuan";i:7;s:5:"dasar";i:8;s:10:"remunerasi";}'),
(12, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Tenaga Ahli Mengundurkan diri', 'Manajemen Konstruksi Pembangunan Landmark Perbatasan Kapsul Waktu Papua', 'Tidak ada yang mengkoordinasi team secara subtansial\rDapat menjadi temuan dan pengembalian BPK senilai 21.000.000 x 7bln =', 'Melakukan replace team leader pada saat kontrak awal dengan meminta rekomendasi pengganti kepada team leader sebelumnya', 0, '', 'a:4:{i:0;s:6:"Tenaga";i:1;s:4:"Ahli";i:2;s:12:"Mengundurkan";i:3;s:4:"diri";}'),
(13, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Surat Keterangan Ahli habis', 'Supervisi Jalan dan Jembatan Morotai', 'Dapat menjadi temuan BPK dikarenakan indikasi tidak sesuai standard TOR', 'SKA tenaga ahli diurus melalui jaringan ITAKINDO', 0, '', 'a:4:{i:0;s:5:"Surat";i:1;s:10:"Keterangan";i:2;s:4:"Ahli";i:3;s:5:"habis";}'),
(14, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Tenaga Ahli yang diproposed dikontrak tidak sanggup melaksanakan output yang dituangkan pada TOR pekerjaan', 'Penyusunan Kajian Risiko Bencana 2018', 'Output Kontrak tidak tercapai/tidak maksimal\rDapat menjadi temuan BPK', 'Dilakukan double kontrak terhadap TA yang diproposed dan yang membantu dalam substansial', 0, '', 'a:14:{i:0;s:6:"Tenaga";i:1;s:4:"Ahli";i:2;s:4:"yang";i:3;s:10:"diproposed";i:4;s:9:"dikontrak";i:5;s:5:"tidak";i:6;s:7:"sanggup";i:7;s:12:"melaksanakan";i:8;s:6:"output";i:9;s:4:"yang";i:10;s:10:"dituangkan";i:11;s:4:"pada";i:12;s:3:"TOR";i:13;s:9:"pekerjaan";}'),
(15, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Fasilitator yang diproposed dikontrak tidak dapat dimobilisasi', 'Penyusunan Kajian Risiko Bencana 2017', 'tidak ada fasilitator yang diperintahkan untuk mengunjungi lapangan\rdapat menjadi temuan BPK', 'Melakukan replace fasilitator secara menyeluruh dengan izin terhadapap PPK dengan Skema addendum', 0, '', 'a:7:{i:0;s:11:"Fasilitator";i:1;s:4:"yang";i:2;s:10:"diproposed";i:3;s:9:"dikontrak";i:4;s:5:"tidak";i:5;s:5:"dapat";i:6;s:12:"dimobilisasi";}'),
(16, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Data SHP RDTR atau file dengan skala 1:5000 tidak berhasil didapatkan', 'Penyusunan Businessplan PKSN Kefamenanu', 'Tidak mempunya basis data yang baik dalam analisa kesesuaian lahan dalam penyusunan buku bisnisplan', 'Melakukan pembelian terhadap vendor pihak ke tiga (geojaya teknik)', 0, '', 'a:11:{i:0;s:4:"Data";i:1;s:3:"SHP";i:2;s:4:"RDTR";i:3;s:4:"atau";i:4;s:4:"file";i:5;s:6:"dengan";i:6;s:5:"skala";i:7;s:6:"1:5000";i:8;s:5:"tidak";i:9;s:8:"berhasil";i:10;s:10:"didapatkan";}'),
(17, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Data SHP RDTR atau file dengan skala 1:5000 tidak berhasil didapatkan', 'Penyusunan Kajian penyusunan risiko Bencana 2013', 'Tidak mempunya basis data yang baik dalam analisa lahan dilokasi rawan bencana', 'Melakukan mapping sendiri dibantu badan penanggulangan Daerah setempat', 0, '', 'a:11:{i:0;s:4:"Data";i:1;s:3:"SHP";i:2;s:4:"RDTR";i:3;s:4:"atau";i:4;s:4:"file";i:5;s:6:"dengan";i:6;s:5:"skala";i:7;s:6:"1:5000";i:8;s:5:"tidak";i:9;s:8:"berhasil";i:10;s:10:"didapatkan";}'),
(18, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Data Topografi dan koordinat untuk lokasi Sondir Pembangunan tower tidak berhasil didapatkan', 'Pembangunan Tower peringatan dini sistem kebakaran hutan dan lahan', 'Ragu mobilisasi alat dan surveyor dikarenakan tidak mempunyai ketepatan gambaran lokasi', 'menerbitkan surat permohonan permintaan data terhadap client agar PPK dapat membuat surat untuk menjembatani dalam proses pencarian data govement to government', 0, '', 'a:12:{i:0;s:4:"Data";i:1;s:9:"Topografi";i:2;s:3:"dan";i:3;s:9:"koordinat";i:4;s:5:"untuk";i:5;s:6:"lokasi";i:6;s:6:"Sondir";i:7;s:11:"Pembangunan";i:8;s:5:"tower";i:9;s:5:"tidak";i:10;s:8:"berhasil";i:11;s:10:"didapatkan";}'),
(19, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Data Tata Guna lahan tidakberhasil didapatkan', 'Penyusunan Rencana Detatil Tata Ruang PKSN Saumlaki 2015', 'tidak mempunya basis data dalam penyusunan taa guna lahan eksisting', 'Melakukan pencarian data ke bappeda setempat melalui backdoor dengan konsekuensi finansial', 0, '', 'a:6:{i:0;s:4:"Data";i:1;s:4:"Tata";i:2;s:4:"Guna";i:3;s:5:"lahan";i:4;s:13:"tidakberhasil";i:5;s:10:"didapatkan";}'),
(20, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Data sarana dan prasarana kawasan tidak didapatkan', 'Penyusunan Rencana Detatil Tata Ruang PKSN Saumlaki 2015', 'tidak mempunya basis data dalam melekukan identifikasi saran dan prasarana eksisting', 'Melakukan pencarian data ke bappeda setempat melalui backdoor dengan konsekuensi finansial', 0, '', 'a:7:{i:0;s:4:"Data";i:1;s:6:"sarana";i:2;s:3:"dan";i:3;s:9:"prasarana";i:4;s:7:"kawasan";i:5;s:5:"tidak";i:6;s:10:"didapatkan";}'),
(21, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Data kependudukan belum didapatkan', 'Penyusunan Rencana Detail Tata Ruang PKSN Jagoi Babang', 'tidak mempunyai basis data dalam melakukan identifikasi kepadatan dan seebaran penduduk', 'Melakukan pencarian data ke bappeda setempat melalui backdoor dengan konsekuensi finansial', 0, '', 'a:4:{i:0;s:4:"Data";i:1;s:12:"kependudukan";i:2;s:5:"belum";i:3;s:10:"didapatkan";}'),
(23, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Kesulitan dalam membuat audit payroll terkait penentuan dasar remunerasi', 'Supervisi jalan dan jembatan Morotai 1', 'Menjadi temuan BPK dikarenakan tidak ada dasar penentuan penawaran remunerasi', 'Melakukan assesment remunerasi  berdasarkan untuk audit payroll berdasarkan Pajak personil Form 1721', 0, '', 'a:9:{i:0;s:9:"Kesulitan";i:1;s:5:"dalam";i:2;s:7:"membuat";i:3;s:5:"audit";i:4;s:7:"payroll";i:5;s:7:"terkait";i:6;s:9:"penentuan";i:7;s:5:"dasar";i:8;s:10:"remunerasi";}'),
(24, NULL, NULL, '2019-01-18 08:04:32', NULL, 'Data RTRW tidak berhasil didapatkan', 'Penyusunan Rencana Detatil Tata Ruang PKSN Saumlaki 2015', 'tidak mempunya babsis data induk dalam penyusunan RDTR', 'Melakukan pencarian data ke bappeda setempat melalui backdoor dengan konsekuensi finansial', 0, '', 'a:5:{i:0;s:4:"Data";i:1;s:4:"RTRW";i:2;s:5:"tidak";i:3;s:8:"berhasil";i:4;s:10:"didapatkan";}'),
(27, 8, '2019-01-19 03:57:44', '2019-01-19 03:57:44', 1, 'tidak ada data', 'sulit untuk didapatkan data', NULL, NULL, 3, '5', 'a:3:{i:0;s:5:"tidak";i:1;s:3:"ada";i:2;s:4:"data";}');

-- --------------------------------------------------------

--
-- Table structure for table `master_data_laporan`
--

CREATE TABLE `master_data_laporan` (
  `id` int(10) unsigned NOT NULL,
  `laporan_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `activity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `master_data_laporan`
--

INSERT INTO `master_data_laporan` (`id`, `laporan_type`, `created_at`, `updated_at`, `activity`) VALUES
(1, 'PENDAHULUAN', NULL, NULL, 'Mobilisasi Peralatan'),
(2, 'PENDAHULUAN', NULL, NULL, 'Mobilisasi Tenaga Ahli'),
(3, 'PENDAHULUAN', NULL, NULL, 'Mobilisasi Tenaga Pendukung'),
(4, 'PENDAHULUAN', NULL, NULL, 'Menyusun Rencana Kerja'),
(5, 'PENDAHULUAN', NULL, NULL, 'Menyusun Metodologi'),
(6, 'PENDAHULUAN', NULL, NULL, 'Mengumpulkan Data dan Informasi Awal'),
(7, 'PENDAHULUAN', NULL, NULL, 'Menyiapkan Laporan Pendahuluan'),
(8, 'ANTARA', NULL, NULL, 'Survei Observasi Lapangan'),
(9, 'ANTARA', NULL, NULL, 'Survei Instansional'),
(10, 'ANTARA', NULL, NULL, 'Analisis Strukture Ruang'),
(11, 'ANTARA', NULL, NULL, 'Analisis Pola Ruang'),
(12, 'ANTARA', NULL, NULL, 'Analisis Blok Pemanfaatan Ruang'),
(13, 'ANTARA', NULL, NULL, 'Analisis Pelaksanaan Pembangunan Kawasan'),
(14, 'ANTARA', NULL, NULL, 'Perumusan masalah potensi dan peluang'),
(15, 'DRAFT_AKHIR', NULL, NULL, 'Perumusan Tujuan Pengembangan Kawasan'),
(16, 'DRAFT_AKHIR', NULL, NULL, 'Perumusan  Konsep dan strategi pengembangan'),
(17, 'DRAFT_AKHIR', NULL, NULL, 'Perumusan Rencana Strukture dan Pola Ruang'),
(18, 'DRAFT_AKHIR', NULL, NULL, 'Perumusan Pedoman Pelaksanaan Pembangunan'),
(19, 'DRAFT_AKHIR', NULL, NULL, 'Perumusan Mekanisme Pengendalian'),
(20, 'DRAFT_AKHIR', NULL, NULL, 'Menyusun Indikasi Program'),
(21, 'AKHIR', NULL, NULL, 'Penyempurnaan RDTR'),
(22, 'AKHIR', NULL, NULL, 'Penyempurnaan Zoning Regulation'),
(23, 'KHUSUS', NULL, NULL, 'ALBUM PETA');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_04_084509_create_projects_table', 1),
(4, '2018_10_27_145158_laporan_pendahuluan', 1),
(5, '2018_10_27_145242_laporan_antara', 1),
(6, '2018_10_27_145300_laporan_akhir_draft', 1),
(7, '2018_10_27_145316_laporan_akhir', 1),
(8, '2018_10_27_145330_laporan_khusus', 1),
(9, '2018_10_27_150122_master_data_laporan', 1),
(10, '2018_11_19_062745_result_project', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL,
  `user_id` int(11) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `type_project` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `user_id`, `created_at`, `updated_at`, `name`, `start_date`, `type_project`, `notes`) VALUES
(1, 0, '2018-11-27 03:41:20', '2018-11-27 03:41:20', 'Project pembangunan', '2018-11-27 00:00:00', 'Infrasructure', 'project pembangunan di jakarta'),
(2, 0, '2018-11-27 06:26:44', '2018-11-27 06:26:44', 'Project Gedung', '2018-11-27 00:00:00', 'Infrasructure', 'project gedung di jakarta'),
(3, 0, '2018-11-27 06:32:46', '2018-11-27 06:32:46', 'Project Jalan', '2018-11-27 00:00:00', 'Infrasructure', 'project Jalan di jakarta'),
(4, 0, '2018-11-27 06:33:37', '2018-11-27 06:33:37', 'Project Jalan ke 4', '2018-11-27 00:00:00', 'Infrasructure', 'project Jalan di jakarta lala'),
(5, 0, '2018-11-27 06:45:41', '2018-11-27 06:45:41', 'Project Jalan ke 5', '2018-11-27 00:00:00', 'Infrasructure', 'project Jalan di jakarta lalala'),
(6, NULL, '2018-11-28 00:41:53', '2018-11-28 00:41:53', 'Pembangunan Jalan Raya', '2018-11-28 00:00:00', 'Infrasructure', 'Lokasi pembangungan  dijakarta'),
(7, NULL, '2018-12-20 05:49:39', '2018-12-20 05:49:39', 'Boom', '2018-12-20 00:00:00', '0', 'asdasdasdasd'),
(8, NULL, '2019-01-19 03:25:58', '2019-01-19 03:25:58', 'boom', '2019-01-19 00:00:00', '0', 'adasd');

-- --------------------------------------------------------

--
-- Table structure for table `result_project`
--

CREATE TABLE `result_project` (
  `id` int(10) unsigned NOT NULL,
  `project_id` int(11) unsigned NOT NULL,
  `match_project_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `match_pendahuluan` int(11) unsigned DEFAULT NULL,
  `match_antara` int(11) unsigned DEFAULT NULL,
  `match_draft_akhir` int(11) unsigned DEFAULT NULL,
  `match_akhir` int(11) unsigned DEFAULT NULL,
  `persentase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point_match` int(11) NOT NULL,
  `activity_name` text COLLATE utf8mb4_unicode_ci,
  `activity_desc` text COLLATE utf8mb4_unicode_ci,
  `activity_risk` text COLLATE utf8mb4_unicode_ci,
  `activity_solution` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=394 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `result_project`
--

INSERT INTO `result_project` (`id`, `project_id`, `match_project_id`, `match_pendahuluan`, `match_antara`, `match_draft_akhir`, `match_akhir`, `persentase`, `point_match`, `activity_name`, `activity_desc`, `activity_risk`, `activity_solution`, `created_at`, `updated_at`) VALUES
(382, 27, '24', 24, NULL, NULL, NULL, '33', 1, 'Data RTRW tidak berhasil didapatkan', 'Penyusunan Rencana Detatil Tata Ruang PKSN Saumlaki 2015', 'tidak mempunya babsis data induk dalam penyusunan RDTR', 'Melakukan pencarian data ke bappeda setempat melalui backdoor dengan konsekuensi finansial', '2019-01-19 16:10:46', '2019-01-19 07:12:51'),
(383, 27, '14', 14, NULL, NULL, NULL, '33', 1, 'Tenaga Ahli yang diproposed dikontrak tidak sanggup melaksanakan output yang dituangkan pada TOR pekerjaan', 'Penyusunan Kajian Risiko Bencana 2018', 'Output Kontrak tidak tercapai/tidak maksimal\rDapat menjadi temuan BPK', 'Dilakukan double kontrak terhadap TA yang diproposed dan yang membantu dalam substansial', '2019-01-19 16:10:52', '2019-01-19 07:12:51'),
(384, 27, '20', 20, NULL, NULL, NULL, '33', 1, 'Data sarana dan prasarana kawasan tidak didapatkan', 'Penyusunan Rencana Detatil Tata Ruang PKSN Saumlaki 2015', 'tidak mempunya basis data dalam melekukan identifikasi saran dan prasarana eksisting', 'Melakukan pencarian data ke bappeda setempat melalui backdoor dengan konsekuensi finansial', '2019-01-19 16:10:55', '2019-01-19 07:12:51'),
(385, 24, '1', NULL, 1, NULL, NULL, '0', 0, 'Mobilisasi Peralatan', 'sdsadasd', NULL, 'Tambah Tenaga kerja', '2019-01-19 16:11:15', '2019-01-19 07:12:51'),
(386, 24, '12', NULL, 12, NULL, NULL, '0', 0, 'Peninjauan sinkronisasi data peruntukan lahan mendapatkan penolakan dari pihak swasta', 'Penyusunan Kajian Risiko Bencana 2017', 'tidak dapat melakukan validasi data perencanaan dengan kondisi eksisiting', 'Melkukan koordinasi kepada sekda untuk melakukan fasilitasi pendampingan kunjungan', '2019-01-19 16:11:17', '2019-01-19 07:12:51'),
(387, 24, '19', NULL, 19, NULL, NULL, '0', 0, 'Laporan Antara belum siap', 'Penerapan sistem informasi air minum', 'Jadwal presentasi mundur dan tidak dapat melakukan penagihan termin', 'Reschedule jadwal dengan konsekuensi mundur penagihan termin', '2019-01-19 16:11:21', '2019-01-19 07:12:51'),
(388, 7, '1', NULL, NULL, 1, NULL, '0', 0, 'Mobilisasi Peralatan', 'abobom', NULL, 'Tambah Tenaga Kerja', '2019-01-19 16:11:25', '2019-01-19 07:12:51'),
(389, 7, '2', NULL, NULL, 2, NULL, '0', 0, 'Menyusun Indikasi Program', 'abobom', NULL, 'Dilakukan oleh tenaga ahli', '2019-01-19 16:11:27', '2019-01-19 07:12:51'),
(390, 7, '3', NULL, NULL, 3, NULL, '0', 0, 'Menyusun Indikasi Program', 'boom', NULL, 'Dilakukan oleh tenaga ahli', '2019-01-19 16:11:30', '2019-01-19 07:12:51'),
(391, 7, '1', NULL, NULL, NULL, 1, '0', 0, 'Mobilisasi Peralatan', 'sdasdasd', NULL, 'Tambah Tenaga Kerja', '2019-01-19 16:11:34', '2019-01-19 07:12:51'),
(392, 7, '2', NULL, NULL, NULL, 2, '0', 0, 'Penyempurnaan Zoning Regulation', 'asasd', NULL, 'Dilakukan oleh tenaga ahli', '2019-01-19 16:11:36', '2019-01-19 07:12:51'),
(393, 7, '3', NULL, NULL, NULL, 3, '0', 0, 'Penyempurnaan Zoning Regulation', '555', NULL, 'Dilakukan oleh tenaga ahli', '2019-01-19 16:11:38', '2019-01-19 07:12:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_master`
--
ALTER TABLE `db_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laporan_akhir`
--
ALTER TABLE `laporan_akhir`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_id` (`project_id`),
  ADD KEY `project_id_2` (`project_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `laporan_akhir_draft`
--
ALTER TABLE `laporan_akhir_draft`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_id` (`project_id`),
  ADD KEY `project_id_2` (`project_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `laporan_antara`
--
ALTER TABLE `laporan_antara`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `laporan_khusus`
--
ALTER TABLE `laporan_khusus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `laporan_pendahuluan`
--
ALTER TABLE `laporan_pendahuluan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `activity_id` (`activity_id`);

--
-- Indexes for table `master_data_laporan`
--
ALTER TABLE `master_data_laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `result_project`
--
ALTER TABLE `result_project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `match_pendahuluan` (`match_pendahuluan`),
  ADD KEY `match_antara` (`match_antara`),
  ADD KEY `match_draft_akhir` (`match_draft_akhir`),
  ADD KEY `match_akhir` (`match_akhir`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_master`
--
ALTER TABLE `db_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `laporan_akhir`
--
ALTER TABLE `laporan_akhir`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `laporan_akhir_draft`
--
ALTER TABLE `laporan_akhir_draft`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `laporan_antara`
--
ALTER TABLE `laporan_antara`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `laporan_khusus`
--
ALTER TABLE `laporan_khusus`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `laporan_pendahuluan`
--
ALTER TABLE `laporan_pendahuluan`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `master_data_laporan`
--
ALTER TABLE `master_data_laporan`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `result_project`
--
ALTER TABLE `result_project`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=394;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan_akhir`
--
ALTER TABLE `laporan_akhir`
  ADD CONSTRAINT `laporan_akhir_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `laporan_akhir_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `master_data_laporan` (`id`);

--
-- Constraints for table `laporan_akhir_draft`
--
ALTER TABLE `laporan_akhir_draft`
  ADD CONSTRAINT `laporan_akhir_draft_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `laporan_akhir_draft_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `master_data_laporan` (`id`);

--
-- Constraints for table `laporan_antara`
--
ALTER TABLE `laporan_antara`
  ADD CONSTRAINT `laporan_antara_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `laporan_antara_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `master_data_laporan` (`id`);

--
-- Constraints for table `laporan_khusus`
--
ALTER TABLE `laporan_khusus`
  ADD CONSTRAINT `laporan_khusus_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `laporan_pendahuluan`
--
ALTER TABLE `laporan_pendahuluan`
  ADD CONSTRAINT `laporan_pendahuluan_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`),
  ADD CONSTRAINT `laporan_pendahuluan_ibfk_2` FOREIGN KEY (`activity_id`) REFERENCES `master_data_laporan` (`id`);

--
-- Constraints for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD CONSTRAINT `password_resets_ibfk_1` FOREIGN KEY (`email`) REFERENCES `users` (`email`);

--
-- Constraints for table `result_project`
--
ALTER TABLE `result_project`
  ADD CONSTRAINT `result_project_ibfk_4` FOREIGN KEY (`match_akhir`) REFERENCES `laporan_akhir` (`id`),
  ADD CONSTRAINT `result_project_ibfk_1` FOREIGN KEY (`match_pendahuluan`) REFERENCES `laporan_pendahuluan` (`id`),
  ADD CONSTRAINT `result_project_ibfk_2` FOREIGN KEY (`match_antara`) REFERENCES `laporan_antara` (`id`),
  ADD CONSTRAINT `result_project_ibfk_3` FOREIGN KEY (`match_draft_akhir`) REFERENCES `laporan_akhir_draft` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id`) REFERENCES `projects` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
