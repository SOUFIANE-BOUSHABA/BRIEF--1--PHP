create if not exists youcontact ;


use youcontact;
CREATE TABLE profil(
    id_profil int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(255),
    prenom varchar(255),
    pwd varchar(255),
    date_creation date
)ENGINE=INNODB;

CREATE TABLE contact(
    id_contact int PRIMARY KEY AUTO_INCREMENT,
    nom varchar(255),
    prenom varchar(255),
    tele varchar(255),
    email varchar(255),
    adresse varchar(255),
    date_creation date,
    id_profil int ,
    FOREIGN KEY (id_profil) REFERENCES profil(id_profil)
)ENGINE=INNODB;