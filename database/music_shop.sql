-- CREATE DATABASE music_shop;
-- USE `music_shop`;

DROP TABLE IF EXISTS `Songs`;
DROP TABLE IF EXISTS `Albums`;
DROP TABLE IF EXISTS `Artists`;

CREATE TABLE Artists (
  ArtistID INT NOT NULL AUTO_INCREMENT,
  Name VARCHAR(255) NOT NULL,
  Country VARCHAR(255),
  PRIMARY KEY (ArtistID)
);

CREATE TABLE Songs (
  SongID INT NOT NULL AUTO_INCREMENT,
  Title VARCHAR(255) NOT NULL,
  ArtistID INT NOT NULL,
  Genre VARCHAR(255),
  ReleaseYear INT,
  PRIMARY KEY (SongID),
  FOREIGN KEY (ArtistID) REFERENCES Artists(ArtistID) ON DELETE CASCADE
);

CREATE TABLE Albums (
  AlbumID INT NOT NULL AUTO_INCREMENT,
  Title VARCHAR(255) NOT NULL,
  ArtistID INT NOT NULL,
  ReleaseYear INT,
  PRIMARY KEY (AlbumID),
  FOREIGN KEY (ArtistID) REFERENCES Artists(ArtistID) ON DELETE CASCADE
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
('The Weeknd', 'Canada'),
('Post Malone', 'USA'),
('Rihanna', 'Barbados'),
('Justin Bieber', 'Canada'),
('Bruno Mars', 'USA'),
('Adele', 'UK'),
('Kanye West', 'USA'),
('SZA', 'USA'),
('Harry Styles', 'UK'),
('Lizzo', 'USA');

INSERT INTO Albums (Title, ArtistID, ReleaseYear) VALUES
('folklore', 1, 2020),
('BE', 2, 2020),
('Positions', 3, 2020),
('÷', 4, 2017),
('Future Nostalgia', 5, 2020),
('When We All Fall Asleep, Where Do We Go?', 6, 2019),
('Views', 7, 2016),
('Chromatica', 8, 2020),
('Starboy', 9, 2016),
('Hollywood''s Bleeding', 10, 2019),
('ANTI', 11, 2016),
('Justice', 12, 2021),
('24K Magic', 13, 2016),
('21', 14, 2011),
('Yeezus', 15, 2013),
('Ctrl', 16, 2017),
('Fine Line', 17, 2019),
('Cuz I Love You', 18, 2019);

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
('7 rings', 3, 'Pop', 2019),
('Circles', 10, 'Pop', 2019),
('Needed Me', 11, 'R&B', 2016),
('Intentions', 12, 'Pop', 2020),
('That''s What I Like', 13, 'Funk', 2016),
('Someone Like You', 14, 'Pop', 2011),
('Black Skinhead', 15, 'Hip-hop', 2013),
('Love Galore', 16, 'R&B', 2017),
('Watermelon Sugar', 17, 'Pop', 2019),
('Truth Hurts', 18, 'Pop', 2019),
('Congratulations', 10, 'Hip-hop', 2016),
('We Found Love', 11, 'Electropop', 2011),
('What Do You Mean?', 12, 'Pop', 2015),
('Just the Way You Are', 13, 'Pop', 2010),
('Rolling in the Deep', 14, 'Soul', 2010),
('Bound 2', 15, 'Hip-hop', 2013),
('The Weekend', 16, 'R&B', 2017),
('Adore You', 17, 'Pop', 2019),
('Good as Hell', 18, 'Pop', 2016),
('rockstar', 10, 'Hip-hop', 2017),
('S&M', 11, 'Pop', 2010),
('Baby', 12, 'Pop', 2010),
('Locked Out of Heaven', 13, 'Pop', 2012),
('Rolling in the Deep', 14, 'Soul', 2010),
('All of the Lights', 15, 'Hip-hop', 2010),
('The Weekend', 16, 'R&B', 2017),
('Golden', 17, 'Pop', 2019),
('Juice', 18, 'Pop', 2019);





