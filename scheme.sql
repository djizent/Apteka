DROP TABLE IF EXISTS authors;
DROP TABLE IF EXISTS books;
CREATE TABLE authors (
	AuthorID int NOT NULL PRIMARY KEY, 
	FirstName varchar(50),
	FamilyName varchar(50)
);
DESCRIBE authors;
CREATE TABLE books (
	BookID int PRIMARY KEY,
	AuthorID int NOT NULL REFERENCES authors(AuthorID), 
	Title varchar(255) NOT NULL, 
	Year int NOT NULL default '2000'
	);
DESCRIBE books;
INSERT INTO authors VALUES (1,'Lev','Tolstoy');
INSERT INTO authors VALUES (2,'Fedor','Dostoevskiy');
INSERT INTO authors VALUES (3,'Sergei','Lukyanenko');
INSERT INTO books VALUES (1,1,'Voyna i mir',1868);
INSERT INTO books VALUES (2,1,'Anna Karenina',1878);
INSERT INTO books VALUES (3,2,'Prestupleniye i nakazaniye',1866);
INSERT INTO books VALUES (4,2,'Idiot',1868);
INSERT INTO books VALUES (5,2,'Bratya Karamazovy',1880);
INSERT INTO books VALUES (6,2,'Besy',1872);
INSERT INTO books VALUES (7,3,'Labirint Otrajeniy',1997);

CREATE TABLE users (
	UserID int NOT NULL PRIMARY KEY, 
	UserName varchar(20),
	UserPass varchar(20),
	UserEMail varchar(100));
INSERT INTO users VALUES (1, 'KingMonster','password','monster@hotmail.com');
INSERT INTO users VALUES (2, 'School23rulz','iamcool','sc23@hotmail.com');
INSERT INTO users VALUES (3, 'Beorht','12345','guest@hotmail.com');
