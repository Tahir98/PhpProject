-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 22 Oca 2022, 10:41:38
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `p_database`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'Ahmet', 'abc@gmail.com', '1234'),
(2, 'Tahir', 'tahirk122@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `creditcard`
--

CREATE TABLE `creditcard` (
  `id` int(11) NOT NULL,
  `name_surname` varchar(50) NOT NULL,
  `number` decimal(16,0) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `creditcard`
--

INSERT INTO `creditcard` (`id`, `name_surname`, `number`, `cvv`) VALUES
(1, 'Tahir Kaplan', '1234567812345678', 111),
(2, 'Ali Başak', '1234123412341234', 124);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_id`, `address`) VALUES
(1, 1, 7, 'Ankara/Keçiören/Atatürk Mah.'),
(2, 1, 11, 'Ankara/Mamak/');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `type` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `details` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image_path` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `products`
--

INSERT INTO `products` (`id`, `type`, `name`, `details`, `price`, `image_path`) VALUES
(1, 'CPU', 'Intel Core i5 11400F', '3.1GHz LGA1200 12MB Cache İşlemci', '6000', 'images/intel11400f.png'),
(2, 'RAM', 'Kingston HyperX Fury 8GB', '3200MHz DDR4 Ram HX432C16FB3/8', '300', 'images/kingston8.png'),
(3, 'CPU', 'Amd Ryzen 5 3400x', '19MB 6 Çekirdekli O/b Amd R7 Am4 65W', '5000', 'images/r5_3400x.png'),
(4, 'GPU', 'Asus Rtx 3060', 'Tuf Oc V2 (Lhr) 12Gb Gddr6 192Bit (Tuf-Rtx3060-O12G-V2-Gamıng)', '10000', 'images/rtx3060.png'),
(5, 'GPU', 'Asus NVIDIA GeForce RTX 3080', 'ROG Strix V2 OC Edition 10 GB GDDR6X 320 Bit Ekran Kartı', '20000', 'images/rtx3080.png'),
(6, 'RAM', 'Kıngston 16 GB Fury Beast', 'Rgb Ddr4 3200MHZ KF432C16BBAK2/16 2X8G', '600', 'images/kingston.png'),
(7, 'DESKTOP', 'HP 434T1EA Pavilion', ' i7-11700H-16GB-12GB RTX 3060-512GB SSD+1TB HDD Windows 10 Home Gaming', '12000', 'images/hp434T1EA.png'),
(8, 'DESKTOP', 'Turbox Tx489', 'Intel Core i7 920 8GB Ram 128GB SSD 1TB HDD 4GB Ekran Kartı Masaüstü Oyun Pc Bilgisayarı', '15000', 'images/turbox.png'),
(9, 'LAPTOP', 'ASUS D415da-bv336', 'Ryzen 3 3250u 4gb Ram 256gb Ssd 14 Inc D415DA-BV336', '9200', 'images/ASUSD414DA.png'),
(10, 'LAPTOP', 'Monster Abra A5 V16.7', 'Intel Core i5 11400H 8GB 500GB SSD GTX 1650 Freedos 15.6\'\' FHD', '11200', 'images/MonsterAbraA5.png'),
(11, 'HARDDİSK', 'Seagate Barracuda', '500GB 3.5\" 7200RPM 32MB SATA 3.0 NCQ Sabit Disk ST500DM009', '250', 'images/seagate500.png'),
(12, 'HARDDİSK', 'TOSHIBA Canvio', 'Ready 2.5 2TB Harici Disk Siyah', '600', 'images/ToshibaConvio.png'),
(13, 'CPU', 'AMD Ryzen 9 5900X', '3.7 GHz AM4 64 MB Cache 105 W İşlemci', '7500', 'images/r9_5900x.png');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(12) NOT NULL,
  `credit_id` int(11) NOT NULL,
  `data_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `credit_id`, `data_id`) VALUES
(1, 'Tahir', '123456', 1, 6),
(2, 'Ali', '1234', 2, 7),
(3, 'Mehmet', '12345', -1, -1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `name_surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `user_data`
--

INSERT INTO `user_data` (`id`, `name_surname`, `email`, `address`, `city`) VALUES
(6, 'Tahir Kaplan', 'tahirkaplan868@gmail.com', 'Ankara/Mamak/Abdülhakhamit Cad.', 'Ankara'),
(7, 'Ali Başak', 'tahirk122@gmail.com', 'Ankara/Keçiören/Atatürk Mah.', 'Ankara');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `creditcard`
--
ALTER TABLE `creditcard`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Tablo için indeksler `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `creditcard`
--
ALTER TABLE `creditcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
