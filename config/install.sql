CREATE DATABASE IF NOT EXISTS `kuriex`;

GRANT ALL ON `kuriex`.* TO `kuriex`@`localhost`;
SET PASSWORD FOR 'kuriex'@'localhost' = PASSWORD('kuriex');

USE kuriex;

DROP TABLE IF EXISTS kurier, dostawca, kurier_katprawajazdy,
    dostawca_katprawajazdy, filia, obszar, rejon;

CREATE TABLE kurier (
    pesel      INT(5)      NOT NULL,
    imie       VARCHAR(20) NOT NULL,
    nazwisko   VARCHAR(20) NOT NULL,
    id_obszaru INT(5)      NOT NULL,
    id_pojazdu INT(5)      NOT NULL,
    PRIMARY KEY(pesel)
);

CREATE TABLE kurier_katprawajazdy (
    nazwa_kategorii INT(5) NOT NULL,
    pesel_kierowcy  INT(5) NOT NULL
);

CREATE TABLE dostawca (
    pesel      INT(5)      NOT NULL,
    imie       VARCHAR(20) NOT NULL,
    nazwisko   VARCHAR(20) NOT NULL,
    id_filii   INT(5)      NOT NULL,
    id_pojazdu INT(5)      NOT NULL,
    PRIMARY KEY(pesel)
);

CREATE TABLE dostawca_katprawajazdy (
    nazwa_kategorii INT(5) NOT NULL,
    pesel_kierowcy  INT(5) NOT NULL
);

CREATE TABLE obszar (
    id_obszaru INT(5)      NOT NULL,
    nazwa      VARCHAR(20) NOT NULL,
    opis       VARCHAR(50),
    PRIMARY KEY(id_obszaru)
);

CREATE TABLE filia (
    id_filii   INT(5)      NOT NULL,
    nazwa      VARCHAR(20) NOT NULL,
    id_obszaru INT(5),
    PRIMARY KEY(id_filii)
);
