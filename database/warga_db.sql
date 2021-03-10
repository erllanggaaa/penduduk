-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Mar 2021 pada 02.42
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `warga_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kartu_keluarga`
--

CREATE TABLE IF NOT EXISTS `kartu_keluarga` (
`id_keluarga` int(11) NOT NULL,
  `nomor_keluarga` varchar(16) NOT NULL,
  `id_kepala_keluarga` int(11) NOT NULL,
  `alamat_keluarga` text NOT NULL,
  `desa_kelurahan_keluarga` varchar(30) NOT NULL,
  `kecamatan_keluarga` varchar(30) NOT NULL,
  `kabupaten_kota_keluarga` varchar(30) NOT NULL,
  `provinsi_keluarga` varchar(30) NOT NULL,
  `negara_keluarga` varchar(30) NOT NULL,
  `rt_keluarga` varchar(3) NOT NULL,
  `rw_keluarga` varchar(3) NOT NULL,
  `kode_pos_keluarga` varchar(5) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `kartu_keluarga`
--

INSERT INTO `kartu_keluarga` (`id_keluarga`, `nomor_keluarga`, `id_kepala_keluarga`, `alamat_keluarga`, `desa_kelurahan_keluarga`, `kecamatan_keluarga`, `kabupaten_kota_keluarga`, `provinsi_keluarga`, `negara_keluarga`, `rt_keluarga`, `rw_keluarga`, `kode_pos_keluarga`, `id_user`, `created_at`, `updated_at`) VALUES
(2, '3276022908070131', 7, 'Jl. Al-Hasanah 1, no. 144', 'Jatijajar', 'Tapos', 'Depok', 'Jawa Barat', 'Indonesia', '09', '09', '16958', 3, '2021-02-17 07:34:51', '2021-02-17 07:34:51'),
(3, '367106731832173', 5, 'Jalan Jalan', 'Halo', 'Hda', 'Dajdas', 'JKdjka', 'hasdkjask', '01', '02', '15162', 3, '2021-02-17 07:33:31', '0000-00-00 00:00:00'),
(4, '367106731834219', 8, 'JlanKepo', 'Jalan KEPo', 'Ciledug', 'dashd', 'dasjskd', 'dasdjk', '9', '22', '15162', 1, '2021-02-17 07:48:10', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mutasi`
--

CREATE TABLE IF NOT EXISTS `mutasi` (
`id_mutasi` int(11) NOT NULL,
  `nik_mutasi` varchar(16) NOT NULL,
  `nama_mutasi` varchar(45) NOT NULL,
  `tempat_lahir_mutasi` varchar(30) NOT NULL,
  `tanggal_lahir_mutasi` date NOT NULL,
  `jenis_kelamin_mutasi` enum('L','P') NOT NULL,
  `alamat_ktp_mutasi` text NOT NULL,
  `alamat_mutasi` text NOT NULL,
  `desa_kelurahan_mutasi` varchar(30) NOT NULL,
  `kecamatan_mutasi` varchar(30) NOT NULL,
  `kabupaten_kota_mutasi` varchar(30) NOT NULL,
  `provinsi_mutasi` varchar(30) NOT NULL,
  `negara_mutasi` varchar(30) NOT NULL,
  `rt_mutasi` varchar(3) NOT NULL,
  `rw_mutasi` varchar(3) NOT NULL,
  `agama_mutasi` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_mutasi` varchar(20) NOT NULL,
  `pekerjaan_mutasi` varchar(20) NOT NULL,
  `status_perkawinan_mutasi` enum('Kawin','Tidak Kawin') NOT NULL,
  `status_mutasi` enum('Tetap','Kontrak') NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengurus`
--

CREATE TABLE IF NOT EXISTS `pengurus` (
`id_pengurus` int(11) NOT NULL,
  `rw` varchar(50) NOT NULL,
  `rt` varchar(50) NOT NULL,
  `nama_ketua_rw` varchar(100) NOT NULL,
  `alamat_ketua_rw` text NOT NULL,
  `nama_wakil_rw` varchar(100) NOT NULL,
  `alamat_wakil_rw` text NOT NULL,
  `nama_sekretaris_rw` varchar(100) NOT NULL,
  `alamat_sekretaris_rw` text NOT NULL,
  `nama_wakil_sekretaris_rw` varchar(100) NOT NULL,
  `alamat_wakil_sekretaris_rw` text NOT NULL,
  `nama_bendahara_rw` varchar(100) NOT NULL,
  `alamat_bendahara_rw` text NOT NULL,
  `nama_ketua_rt` varchar(100) NOT NULL,
  `alamat_ketua_rt` text NOT NULL,
  `nama_wakil_rt` varchar(100) NOT NULL,
  `alamat_wakil_rt` text NOT NULL,
  `nama_sekretaris_rt` varchar(100) NOT NULL,
  `alamat_sekretaris_rt` text NOT NULL,
  `nama_wakil_sekretaris_rt` varchar(100) NOT NULL,
  `alamat_wakil_sekretaris_rt` text NOT NULL,
  `nama_bendahara_rt` varchar(100) NOT NULL,
  `alamat_bendahara_rt` text NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `pengurus`
--

INSERT INTO `pengurus` (`id_pengurus`, `rw`, `rt`, `nama_ketua_rw`, `alamat_ketua_rw`, `nama_wakil_rw`, `alamat_wakil_rw`, `nama_sekretaris_rw`, `alamat_sekretaris_rw`, `nama_wakil_sekretaris_rw`, `alamat_wakil_sekretaris_rw`, `nama_bendahara_rw`, `alamat_bendahara_rw`, `nama_ketua_rt`, `alamat_ketua_rt`, `nama_wakil_rt`, `alamat_wakil_rt`, `nama_sekretaris_rt`, `alamat_sekretaris_rt`, `nama_wakil_sekretaris_rt`, `alamat_wakil_sekretaris_rt`, `nama_bendahara_rt`, `alamat_bendahara_rt`, `id_user`) VALUES
(1, '02', '05', 'Udin', 'Jalan Genangan Air', 'Uus', 'Jalan Cita-Cita', 'Jese', 'Jalan Terjebak Rindu', 'Bule', 'Jalan Terjebak Istri Orang', 'Raka', 'Jalan Kerambut Dia', 'Roby', 'Jalan Kemana-mana', 'Irfan', 'Jalan Kehaluan', 'Fahri', 'Jalan Jalan Ke Tangerang', 'Aslam', 'Jalan Ke Takoyakiku', 'Mada', 'Jalan Kerinduan Dia', 1),
(2, '03', '11', 'Indah', 'Nangroe ACeh', 'Jihan', 'Jalan Kemana Neng', 'Syitha', 'Haduh Jauh Banget', 'Nurul', 'Perkampungan Sana', 'Maya', 'Jalan RIndu', 'Iljam', 'Manaku tau', 'Anang', 'Ke sono dah', 'Intan', 'Rawa badak', 'Indun', 'Kesitu no', 'Jaelani', 'Jalan mana mana', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga`
--

CREATE TABLE IF NOT EXISTS `warga` (
`id_warga` int(11) NOT NULL,
  `nik_warga` varchar(16) NOT NULL,
  `nama_warga` varchar(45) NOT NULL,
  `tempat_lahir_warga` varchar(30) NOT NULL,
  `tanggal_lahir_warga` date NOT NULL,
  `jenis_kelamin_warga` enum('L','P') NOT NULL,
  `alamat_ktp_warga` text NOT NULL,
  `alamat_warga` text NOT NULL,
  `desa_kelurahan_warga` varchar(30) NOT NULL,
  `kecamatan_warga` varchar(30) NOT NULL,
  `kabupaten_kota_warga` varchar(30) NOT NULL,
  `provinsi_warga` varchar(30) NOT NULL,
  `negara_warga` varchar(30) NOT NULL,
  `rt_warga` varchar(3) NOT NULL,
  `rw_warga` varchar(3) NOT NULL,
  `agama_warga` enum('Islam','Kristen','Katholik','Hindu','Budha','Konghucu') NOT NULL,
  `pendidikan_terakhir_warga` varchar(20) NOT NULL,
  `pekerjaan_warga` varchar(20) NOT NULL,
  `status_perkawinan_warga` enum('Kawin','Tidak Kawin') NOT NULL,
  `status_warga` enum('Tetap','Kontrak') NOT NULL,
  `level_warga` varchar(15) NOT NULL,
  `username_warga` varchar(20) NOT NULL,
  `password_warga` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tampil` varchar(2) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `warga`
--

INSERT INTO `warga` (`id_warga`, `nik_warga`, `nama_warga`, `tempat_lahir_warga`, `tanggal_lahir_warga`, `jenis_kelamin_warga`, `alamat_ktp_warga`, `alamat_warga`, `desa_kelurahan_warga`, `kecamatan_warga`, `kabupaten_kota_warga`, `provinsi_warga`, `negara_warga`, `rt_warga`, `rw_warga`, `agama_warga`, `pendidikan_terakhir_warga`, `pekerjaan_warga`, `status_perkawinan_warga`, `status_warga`, `level_warga`, `username_warga`, `password_warga`, `id_user`, `created_at`, `updated_at`, `tampil`) VALUES
(1, '3276022903980001', 'Fahri Saputra', 'Bogor', '1998-03-29', 'L', 'Bogor', 'Jl. Al-Hasanah 1, No.144', 'Jatijajar', 'Tapos', 'Depok', 'Jawa Barat', 'Indonesia', '09', '09', 'Islam', 'SMA', 'Mahasiswa', 'Tidak Kawin', 'Tetap', 'Admin', 'tes', '28b662d883b6d76fd96e4ddc5e9ba780', 1, '2021-02-15 05:42:56', '2020-03-13 15:33:51', 'Y'),
(3, '3276020305620001', 'Heriyadi', 'Tanjung Karang', '1962-05-03', 'L', 'Tanjung Karang', 'Jl. Al-Hasanah 1, No.144', 'Jatijajar', 'Tapos', 'Depok', 'Jawa Barat', 'Indonesia', '09', '09', 'Islam', 'SMA', 'PNS', 'Kawin', 'Tetap', 'RT', 'halo', '57f842286171094855e51fc3a541c1e2', 1, '2021-02-15 07:19:16', '2020-03-13 15:43:30', 'Y'),
(5, '3276025211630002', 'Napsripah', 'Tuban', '1963-11-12', 'P', 'Tuban', 'Jl. Al-Hasanah 1, No.144', 'Jatijajar', 'Tapos', 'Depok', 'Jawa Barat', 'Indonesia', '09', '10', 'Islam', 'SMA', 'Ibu Rumah Tangga', 'Kawin', 'Tetap', 'RW', 'hi', '49f68a5c8493ec2c0bf489821c21fc3b', 3, '2021-02-18 08:07:12', '2021-02-18 08:07:12', 'Y'),
(7, '3671063108890005', 'Ayi Afrilla Cahyaningtias', 'Jakarta', '1989-08-31', 'P', 'Jl. Jalan', 'Jl. Jalan', 'Cinere Timur', 'Cinere', 'Tangsel', 'Banten', 'Indonesia', '01', '02', 'Islam', 'S1', 'Belum Bekerja', 'Tidak Kawin', 'Tetap', 'Lurah', 'ho', 'b5d9b59113086d3f9f9f108adaaa9ab5', 3, '2021-02-17 08:46:52', '0000-00-00 00:00:00', 'Y'),
(8, '3671060808970001', 'Muhammad Ridwan', 'Jakarta', '1997-08-08', 'L', 'Jalan Kepo', 'Jalan Kepo', 'Larangan', 'Ciledug', 'Tangerang', 'Banten', 'Indonesia', '01', '12', 'Islam', 'S1', 'Belum Bekerja', 'Tidak Kawin', 'Tetap', 'Warga', '3671060808970001', 'e5b2a975d9b73165bcc8b5e63ce488ff', 8, '2021-02-18 08:39:12', '2021-02-18 08:39:12', 'Y'),
(9, '3671062808790001', 'Sumaryo', 'Tangerang', '1979-08-28', 'L', 'Jlan Heh', 'Jlan Heh', 'Citayem', 'Citayem', 'Depok', 'Jawa Barat', 'Indonesia', '02', '08', 'Islam', 'SMA', 'Belum Bekerja', 'Tidak Kawin', 'Tetap', 'Warga', '3671062808790001', 'ec76541b27f36a383967ff29fa5e9fea', 9, '2021-02-18 08:46:04', '2021-02-18 08:46:04', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `warga_has_kartu_keluarga`
--

CREATE TABLE IF NOT EXISTS `warga_has_kartu_keluarga` (
  `id_warga` int(11) NOT NULL,
  `id_keluarga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warga_has_kartu_keluarga`
--

INSERT INTO `warga_has_kartu_keluarga` (`id_warga`, `id_keluarga`) VALUES
(5, 2),
(7, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
 ADD PRIMARY KEY (`id_keluarga`), ADD KEY `id_kepala_keluarga` (`id_kepala_keluarga`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `mutasi`
--
ALTER TABLE `mutasi`
 ADD PRIMARY KEY (`id_mutasi`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pengurus`
--
ALTER TABLE `pengurus`
 ADD PRIMARY KEY (`id_pengurus`);

--
-- Indexes for table `warga`
--
ALTER TABLE `warga`
 ADD PRIMARY KEY (`id_warga`), ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
 ADD KEY `id_penduduk` (`id_warga`,`id_keluarga`), ADD KEY `warga_has_kartu_keluarga_ibfk_2` (`id_keluarga`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `mutasi`
--
ALTER TABLE `mutasi`
MODIFY `id_mutasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pengurus`
--
ALTER TABLE `pengurus`
MODIFY `id_pengurus` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `warga`
--
ALTER TABLE `warga`
MODIFY `id_warga` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kartu_keluarga`
--
ALTER TABLE `kartu_keluarga`
ADD CONSTRAINT `kartu_keluarga_ibfk_1` FOREIGN KEY (`id_kepala_keluarga`) REFERENCES `warga` (`id_warga`);

--
-- Ketidakleluasaan untuk tabel `warga_has_kartu_keluarga`
--
ALTER TABLE `warga_has_kartu_keluarga`
ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_1` FOREIGN KEY (`id_warga`) REFERENCES `warga` (`id_warga`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `warga_has_kartu_keluarga_ibfk_2` FOREIGN KEY (`id_keluarga`) REFERENCES `kartu_keluarga` (`id_keluarga`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
