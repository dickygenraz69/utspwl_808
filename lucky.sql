-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 26 Feb 2018 pada 08.49
-- Versi Server: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lucky`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `laundry`
--

CREATE TABLE IF NOT EXISTS `laundry` (
`id_laundry` int(11) NOT NULL,
  `nama_konsumen` varchar(45) DEFAULT NULL,
  `berat` int(11) DEFAULT NULL,
  `status` enum('masuk','keluar') DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `tgl_masuk` varchar(20) CHARACTER SET latin1 COLLATE latin1_bin DEFAULT NULL,
  `tgl_keluar` varchar(20) DEFAULT NULL,
  `paket_id_paket` int(11) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data untuk tabel `laundry`
--

INSERT INTO `laundry` (`id_laundry`, `nama_konsumen`, `berat`, `status`, `bayar`, `tgl_masuk`, `tgl_keluar`, `paket_id_paket`) VALUES
(16, 'Huda', 1, 'keluar', 1000, '08/27/2017', '08/29/2017', 1),
(17, 'Ahmad R', 2, 'keluar', 8000, '08/27/2017', '08/29/2017', 1),
(18, 'Zainul M', 2, 'keluar', 16000, '08/28/2017', '08/31/2017', 1),
(19, 'Hariyono', 2, 'masuk', 16000, '08/27/2017', NULL, 3),
(20, 'Sufyan', 1, 'masuk', 8000, '08/27/2017', NULL, 4),
(21, 'Suparwati', 4, 'masuk', 32000, '08/26/2017', NULL, 4),
(22, 'Dwi Marhen', 10, 'keluar', 60000, '08/27/2017', '08/29/2017', 1),
(23, 'Mohammad Hadi', 2, 'masuk', 16000, '08/27/2017', NULL, 4),
(24, 'Nurrohman', 3, 'masuk', 24000, '08/29/2017', NULL, 4),
(25, 'Nurrohman uyee', 4, 'keluar', 16000, '08/31/2017', '08/31/2017', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE IF NOT EXISTS `paket` (
`id_paket` int(11) NOT NULL,
  `nama_paket` varchar(45) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `harga`) VALUES
(1, 'Cuci Kering ', 4000),
(2, 'Cuci Setrika', 5000),
(3, 'Cuci Komplit', 6000),
(4, 'Express 4 Jam Selesai', 8000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nama_usr` varchar(45) NOT NULL,
  `level` enum('super','admin') NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_usr`, `level`) VALUES
(2, 'super', '25d55ad283aa400af464c76d713c07ad', 'Hariyono', 'super'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Ahmad Rofi''i', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laundry`
--
ALTER TABLE `laundry`
 ADD PRIMARY KEY (`id_laundry`), ADD KEY `fk_laundry_paket_idx` (`paket_id_paket`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
 ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laundry`
--
ALTER TABLE `laundry`
MODIFY `id_laundry` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `laundry`
--
ALTER TABLE `laundry`
ADD CONSTRAINT `fk_laundry_paket` FOREIGN KEY (`paket_id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
