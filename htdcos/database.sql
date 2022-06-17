CREATE SCHEMA IF NOT EXISTS `sifreligiris` DEFAULT CHARACTER SET utf8 COLLATE utf8_turkish_ci ;
USE `sifreligiris` ;


CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kullaniciadi` VARCHAR(255) NOT NULL,
  `eposta` VARCHAR(255) NOT NULL,
  `sifre` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
  );

CREATE TABLE IF NOT EXISTS `randevular` (
  `randevu_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad` VARCHAR(25) NOT NULL,
  `soyad` VARCHAR(25) NOT NULL,
  `cep_telefon` VARCHAR(20) NOT NULL,
  `tarih` DATE NOT NULL,
  `saat`  TIME NOT NULL,
  PRIMARY KEY (`randevu_id`))

