-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 25 Oca 2018, 22:04:49
-- Sunucu sürümü: 5.7.19
-- PHP Sürümü: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `yemekliste`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `icecek`
--

DROP TABLE IF EXISTS `icecek`;
CREATE TABLE IF NOT EXISTS `icecek` (
  `icecek_id` int(11) NOT NULL AUTO_INCREMENT,
  `icecek_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `icecek_aciklamasi` text COLLATE utf8_turkish_ci,
  `icecek_fiyati` varchar(50) CHARACTER SET utf32 COLLATE utf32_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`icecek_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `icecek`
--

INSERT INTO `icecek` (`icecek_id`, `icecek_adi`, `icecek_aciklamasi`, `icecek_fiyati`) VALUES
(2, 'ayran', '30cc', '87'),
(3, 'Coca Cola', '330ml', '3'),
(4, 'Fanta', '330ml', '3'),
(5, 'Portakal Suyu', 'Taze Sıkılmış ', '4'),
(6, 'Enerji İçeceği', '200ml', '5'),
(7, 'Milk Shake', '250 ml', '7'),
(8, 'Çay', 'Küçük çay', '2'),
(9, 'Çay ', 'Büyük Çay', '4');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tatlilar`
--

DROP TABLE IF EXISTS `tatlilar`;
CREATE TABLE IF NOT EXISTS `tatlilar` (
  `tatli_id` int(11) NOT NULL AUTO_INCREMENT,
  `tatli_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `tatli_aciklamasi` text COLLATE utf8_turkish_ci,
  `tatli_fiyati` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`tatli_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tatlilar`
--

INSERT INTO `tatlilar` (`tatli_id`, `tatli_adi`, `tatli_aciklamasi`, `tatli_fiyati`) VALUES
(3, 'Çikolatalı Sufle', 'Fırında içinde akan çikolata ile pişmiş üstü pudra şekerli suflen dondurma ile', '13'),
(4, 'Çikolatalı ve Muzlu Krep', 'Bir Fransız klasiği', '12'),
(5, 'Havuçlu Çikolatalı Pasta', 'Kesinlikle denenmeli! Bir Okan Yemek klasiği...', '14'),
(6, 'Brownie Lover', 'Sıcak brownie üzerine çikolata sos ve vanilyalı dondurma', '11'),
(7, 'Ice Cake', 'Çikolatalı dondurma, çıtır bisküvi, krokan, badem, ceviz, kuru üzüm', '10'),
(8, 'Cheese Cake', 'Çikolatalı, frambuazlı veya limonlu', '9'),
(9, 'Dondurma Kup', 'Arzu ettiğiniz 3 top dondurma üzerine çikolata veya karamel sos', '15'),
(10, 'Meyve Tabağı', 'Karışık mevsim meyveleri', '17');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yemekler`
--

DROP TABLE IF EXISTS `yemekler`;
CREATE TABLE IF NOT EXISTS `yemekler` (
  `yemek_id` int(11) NOT NULL AUTO_INCREMENT,
  `yemek_adi` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `yemek_aciklamasi` text COLLATE utf8_turkish_ci,
  `yemek_fiyati` varchar(50) COLLATE utf8_turkish_ci DEFAULT NULL,
  PRIMARY KEY (`yemek_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yemekler`
--

INSERT INTO `yemekler` (`yemek_id`, `yemek_adi`, `yemek_aciklamasi`, `yemek_fiyati`) VALUES
(10, 'Karışık Omlet', 'Yumurta, taze kaşar peyniri, dana jambon ve mantar', '11'),
(5, 'Tavuk Sote', 'Tavuk eti,domates,biber', '9'),
(9, 'Bezelye çorbası', 'Bezelyeyi bu sefer ana yemek olmaktan çıkarıp kaşıkların daldırılacağı mis gibi bir çorbaya dönüştürüyoruz.', '12'),
(11, 'Krepe Sarılı Somon Füme', 'Kuzu kulağı ve krem peynir ile', '17'),
(12, 'Piliç Kanatları', 'Kızartılmış piliç kanatları; Louisiana sos ve patates kızartması ile', '18'),
(13, 'Hamburger', 'Klasik… 150 gr burger, kokteyl sos, karamelize soğan, domates, yeşillik, turşu', '16'),
(14, 'Ev Mantısı', 'Klasik mantı, yoğurt ve baharatlar ile', '14'),
(15, 'Izgara Dana Bonfile', '180 gr dana bonfile; baharatlı patates kızartması ve mantar ile', '22'),
(16, 'Margarita Pizza', 'Domates sos, mozzarella, kekik', '13'),
(17, 'Supreme Pizza', 'Domates sos, mozzarella, mantar, dana jambon, soğan, mısır, siyah zeytin', '15'),
(18, 'Milano Pizza', 'Domates sos, mozzarella, dana jambon, mantar, siyah zeytin, sarımsak', '16'),
(19, 'Vejeteryan Pizza', 'Domates sos, mozzarella, mantar, yeşil biber, siyah zeytin, soğan, mısır, kekik', '17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
