CREATE TABLE Users(
	Id_User INT AUTO_INCREMENT,
	Firstname VARCHAR(50),
	Lastname VARCHAR(50),
	Email VARCHAR(255),
	PRIMARY KEY(Id_User)
);

INSERT INTO Users (Firstname, Lastname, Email)  VALUES ('Lorem', 'Ipsum', 'lorem.ipsum@gmail.com');
INSERT INTO Users (Firstname, Lastname, Email)  VALUES ('Ipsum', 'Lorem', 'ipsum.lorem@gmail.com');
INSERT INTO Users (Firstname, Lastname, Email)  VALUES ('Lorum', 'Ipsem', 'lorum.ipsem@gmail.com');
INSERT INTO Users (Firstname, Lastname, Email)  VALUES ('Gabriel', 'Salamand', 'gabriel.salamand@etu.univ-lyon1.fr');
