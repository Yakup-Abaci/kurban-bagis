-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: sql210.byetcluster.com
-- Üretim Zamanı: 22 Haz 2022, 03:45:08
-- Sunucu sürümü: 10.3.27-MariaDB
-- PHP Sürümü: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `epiz_32008610_yakup`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurban`
--

CREATE TABLE `kurban` (
  `adi` varchar(255) DEFAULT NULL,
  `soyadi` varchar(255) DEFAULT NULL,
  `telno` text DEFAULT NULL,
  `eposta` text DEFAULT NULL,
  `bagisfiyati` text DEFAULT NULL,
  `bagisturu` text DEFAULT NULL,
  `gidecek_yer` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `kurban`
--

INSERT INTO `kurban` (`adi`, `soyadi`, `telno`, `eposta`, `bagisfiyati`, `bagisturu`, `gidecek_yer`) VALUES
('Yakup', 'sayÄ±n', '05462155425', 'abaciyakup001@gmail.com', '7000-8000', 'adak', 'Maldivler');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mehmet_123`
--

CREATE TABLE `mehmet_123` (
  `ad` varchar(255) DEFAULT NULL,
  `soyad` varchar(255) DEFAULT NULL,
  `telno` text DEFAULT NULL,
  `sifre` text DEFAULT NULL,
  `eposta` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `mehmet_123`
--

INSERT INTO `mehmet_123` (`ad`, `soyad`, `telno`, `sifre`, `eposta`) VALUES
('mehmet', 'sayÄ±n', '05439149549', '123', 'asdasd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Yakup_456`
--

CREATE TABLE `Yakup_456` (
  `ad` varchar(255) DEFAULT NULL,
  `soyad` varchar(255) DEFAULT NULL,
  `telno` text DEFAULT NULL,
  `sifre` text DEFAULT NULL,
  `eposta` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `Yakup_456`
--

INSERT INTO `Yakup_456` (`ad`, `soyad`, `telno`, `sifre`, `eposta`) VALUES
('Yakup', 'abacÄ±', '05439149549', '456', 'abaciyakup001@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `Yakup_789`
--

CREATE TABLE `Yakup_789` (
  `ad` varchar(255) DEFAULT NULL,
  `soyad` varchar(255) DEFAULT NULL,
  `telno` text DEFAULT NULL,
  `sifre` text DEFAULT NULL,
  `eposta` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin5;

--
-- Tablo döküm verisi `Yakup_789`
--

INSERT INTO `Yakup_789` (`ad`, `soyad`, `telno`, `sifre`, `eposta`) VALUES
('Yakup', 'sayÄ±n', '05462155425', '789', 'abaciyakup001@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
