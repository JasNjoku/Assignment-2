CREATE DATABASE music_shop;
USE `music_shop`;

DROP TABLE IF EXISTS `Songs`;
CREATE TABLE Songs (
  SongID INT NOT NULL AUTO_INCREMENT,
  Title VARCHAR(255) NOT NULL,
  ArtistID INT NOT NULL,
  Genre VARCHAR(255),
  ReleaseYear INT,
  PRIMARY KEY (SongID),
  FOREIGN KEY (ArtistID) REFERENCES Artists(ArtistID)
);

DROP TABLE IF EXISTS `Artists`;
CREATE TABLE Artists (
  ArtistID INT NOT NULL AUTO_INCREMENT,
  Name VARCHAR(255) NOT NULL,
  Country VARCHAR(255),
  PRIMARY KEY (ArtistID)
);

DROP TABLE IF EXISTS `Albums`;
CREATE TABLE Albums (
  AlbumID INT NOT NULL AUTO_INCREMENT,
  Title VARCHAR(255) NOT NULL,
  ArtistID INT NOT NULL,
  ReleaseYear INT,
  PRIMARY KEY (AlbumID),
  FOREIGN KEY (ArtistID) REFERENCES Artists(ArtistID)
);

INSERT INTO Artists (Name, Country) VALUES
('Taylor Swift', 'USA'),
('BTS', 'South Korea'),
('Ariana Grande', 'USA'),
('Ed Sheeran', 'UK'),
('Dua Lipa', 'UK'),
('Billie Eilish', 'USA'),
('Drake', 'Canada'),
('Lady Gaga', 'USA'),
('The Weeknd', 'Canada');

INSERT INTO Albums (Title, ArtistID, ReleaseYear) VALUES
('folklore', 1, 2020),
('BE', 2, 2020),
('Positions', 3, 2020),
('÷', 4, 2017),
('Future Nostalgia', 5, 2020),
('When We All Fall Asleep, Where Do We Go?', 6, 2019),
('Views', 7, 2016),
('Chromatica', 8, 2020),
('Starboy', 9, 2016);

INSERT INTO Songs (Title, ArtistID, Genre, ReleaseYear) VALUES
('One Dance', 7, 'Hip-hop', 2016),
('Stupid Love', 8, 'Dance-pop', 2020),
('Starboy', 9, 'R&B', 2016),
('Hotline Bling', 7, 'Hip-hop', 2015),
('Rain on Me', 8, 'Dance-pop', 2020),
('Can’t Feel My Face', 9, 'R&B', 2015),
('Castle on the Hill', 4, 'Pop', 2017),
('Perfect', 4, 'Pop', 2017),
('Don''t Start Now', 5, 'Pop', 2019),
('IDGAF', 5, 'Pop', 2018),
('Ocean Eyes', 6, 'Alternative', 2016),
('everything i wanted', 6, 'Alternative', 2019),
('Shape of You', 4, 'Pop', 2017),
('New Rules', 5, 'Pop', 2017),
('bad guy', 6, 'Alternative', 2019),
('Galway Girl', 4, 'Pop', 2017),
('Levitating', 5, 'Disco', 2020),
('bury a friend', 6, 'Alternative', 2019),
('cardigan', 1, 'Indie Folk', 2020),
('dynamite', 2, 'K-pop', 2020),
('positions', 3, 'R&B', 2020),
('willow', 1, 'Indie Folk', 2020),
('Boy With Luv', 2, 'K-pop', 2019),
('7 rings', 3, 'Pop', 2019);





