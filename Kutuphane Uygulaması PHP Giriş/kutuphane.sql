-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 19 Mar 2012, 20:41:55
-- Sunucu sürümü: 5.5.16
-- PHP Sürümü: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `kutuphane`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kitap`
--

CREATE TABLE IF NOT EXISTS `kitap` (
  `isbn` varchar(15) CHARACTER SET latin5 NOT NULL,
  `baslik` varchar(30) CHARACTER SET latin5 NOT NULL,
  `yazar` varchar(20) CHARACTER SET latin5 NOT NULL,
  `tur` varchar(20) CHARACTER SET latin5 NOT NULL,
  `adet` int(2) NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kitap`
--

INSERT INTO `kitap` (`isbn`, `baslik`, `yazar`, `tur`, `adet`) VALUES
('1234', 'tek adam', 'sevket sureyya aydem', ' tarihi roman', 6),
('123456', 'Devletana', 'kemaltahir', 'roman', 3),
('1234567890', 'beyaz zambaklar ulkesinde', 'Grigory Petrov', 'roman', 7),
('1999', 'enver pasa', 'sevket sureyya aydem', 'tarihi roman', 5),
('23456', 'han duvarlari', 'Faruk Nafiz Camlibel', 'siir', 8);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uye`
--

CREATE TABLE IF NOT EXISTS `uye` (
  `no` int(10) NOT NULL,
  `ad` varchar(15) CHARACTER SET latin5 NOT NULL,
  `soyad` varchar(15) CHARACTER SET latin5 NOT NULL,
  `isbn` varchar(15) CHARACTER SET latin5 NOT NULL,
  PRIMARY KEY (`no`),
  KEY `isbn` (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `uye`
--

INSERT INTO `uye` (`no`, `ad`, `soyad`, `isbn`) VALUES
(0, '', '', ''),
(2006510043, 'vural', 'topbas', ''),
(2006510042, 'cuneyt', 'sekeroglu', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
