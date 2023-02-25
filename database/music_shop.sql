CREATE DATABASE music_shop;
USE `music_shop`;

DROP TABLE IF EXISTS `Songs`;
CREATE TABLE `Songs` (
    `song_id` INT NOT NULL AUTO_INCREMENT,
    `song_name` VARCHAR(255) NOT NULL,
    `song_price` DECIMAL(5,2) NOT NULL,
    `song_genre` VARCHAR(255) NOT NULL,
    `song_artist` VARCHAR(255) NOT NULL,
    PRIMARY KEY (`song_id`)
);

INSERT INTO `Songs` (`song_name`, `song_price`, `song_genre`, `song_artist`)
VALUES
    ("Shape of You", 200, "Pop", "Ed Sheeran"),
    ("Uptown Funk", 200, "Funk", "Mark Ronson ft. Bruno Mars"),
    ("Despacito", 220, "Latin Pop", "Luis Fonsi ft. Daddy Yankee"),
    ("Thriller", 240, "Pop", "Michael Jackson"),
    ("Billie Jean", 200, "Pop", "Michael Jackson"),
    
;