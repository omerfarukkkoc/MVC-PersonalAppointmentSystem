-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 10 Oca 2016, 16:44:01
-- Sunucu sürümü: 5.6.17
-- PHP Sürümü: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `2012123057final`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tc` varchar(20) NOT NULL,
  `sifre` varchar(20) NOT NULL,
  `yetki` varchar(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `tc`, `sifre`, `yetki`, `email`) VALUES
(1, 'omerfaruk', '123456', '1', ''),
(2, 'admin', 'admin', '0', ''),
(3, 'deneme', '123', '1', ''),
(4, 'eminyoruk', '123456', '1', ''),
(5, 'asd', '123', '1', ''),
(6, 'omerfaruk', '123', '1', ''),
(7, 'asdfgh', 'aaa', '1', '12345'),
(8, 'asdfgh', 'A', '1', '12345'),
(9, 'asdfgh', 'Aa', '1', '12345'),
(10, 'admin', 'aaa', '1', 'admin'),
(11, 'asdfgh', 'a', '1', '12345'),
(12, 'asdfgh', 'a', '1', '12345'),
(13, 'asdfghjhg', '111', '1', '234567'),
(14, '', '', '1', ''),
(15, '3456789ı', 'weghjkjhgf', '1', '2345678'),
(16, 'omerfarukkoc', 'omerfaruk@gmail.com', '1', '123'),
(17, 'agyuksek', '123', '1', 'agyuksek@outlook.com'),
(18, 'asdfghjkl', '1234', '1', 'asdfg'),
(19, 'asdfg', 'asdfg', '1', 'dfghj');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevular`
--

CREATE TABLE IF NOT EXISTS `randevular` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `kullaniciid` bigint(20) NOT NULL,
  `randevuAciklama` varchar(500) NOT NULL,
  `tarih` date NOT NULL,
  `saat` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `kullaniciid` (`kullaniciid`),
  KEY `saat` (`saat`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Tablo döküm verisi `randevular`
--

INSERT INTO `randevular` (`id`, `kullaniciid`, `randevuAciklama`, `tarih`, `saat`) VALUES
(6, 1, 'sessionDeneme', '2015-12-27', 5),
(8, 1, 'randevuDenemeSaatGece3', '2015-12-04', 6),
(9, 1, 'sonDeneme', '2015-12-27', 7),
(10, 1, 'belim ağrıyo', '2015-12-09', 5),
(12, 1, 'bas agrısı tavan yapti', '2015-12-18', 6),
(13, 1, 'randevuDenem', '2015-12-04', 7),
(14, 4, 'Deneme', '2016-01-24', 5),
(17, 3, 'comboboxdenemesaat0311', '2016-01-09', 12),
(19, 1, 'Deneme', '2016-01-06', 5),
(20, 1, 'ipekdenemesaat19.40', '2016-01-09', 3),
(21, 1, 'emrejoindeneme', '2016-01-10', 2),
(23, 6, 'guncellemedeneme', '2016-01-10', 17),
(25, 1, 'guncelleme oldu mu sence', '2016-01-24', 23),
(26, 17, 'Deneme', '2016-01-24', 22);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevusaatleri`
--

CREATE TABLE IF NOT EXISTS `randevusaatleri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `saat` time NOT NULL DEFAULT '00:00:00',
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Tablo döküm verisi `randevusaatleri`
--

INSERT INTO `randevusaatleri` (`id`, `saat`) VALUES
(1, '00:00:00'),
(2, '01:00:00'),
(3, '02:00:00'),
(4, '03:00:00'),
(5, '04:00:00'),
(6, '05:00:00'),
(7, '06:00:00'),
(8, '07:00:00'),
(9, '08:00:00'),
(10, '09:00:00'),
(11, '10:00:00'),
(12, '11:00:00'),
(13, '12:00:00'),
(14, '13:00:00'),
(15, '14:00:00'),
(16, '15:00:00'),
(17, '16:00:00'),
(18, '17:00:00'),
(19, '18:00:00'),
(20, '19:00:00'),
(21, '20:00:00'),
(22, '21:00:00'),
(23, '22:00:00'),
(24, '23:00:00'),
(25, '24:00:00');

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `randevular`
--
ALTER TABLE `randevular`
  ADD CONSTRAINT `randevular_ibfk_1` FOREIGN KEY (`kullaniciid`) REFERENCES `kullanicilar` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `randevular_ibfk_2` FOREIGN KEY (`saat`) REFERENCES `randevusaatleri` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
