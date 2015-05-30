CREATE DATABASE IF NOT EXISTS `kuriex`;

GRANT ALL ON `kuriex`.* TO `kuriex`@`localhost`;
SET PASSWORD FOR 'kuriex'@'localhost' = PASSWORD('kuriex');

USE kuriex;

DROP TABLE IF EXISTS
    przesylka_typprzesylki,
    typprzesylki,
    reklamacja,
    przesylka,
    zlecenie,
    klient,
    rejon,
    dostawca_katprawajazdy,
    kurier_katprawajazdy,
    kurier,
    dostawca,
    pojazd,
    filia,
    obszar;

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

CREATE TABLE rejon (
    id_rejonu  INT(5)      NOT NULL,
    nazwa      VARCHAR(20) NOT NULL,
    opis       VARCHAR(50),
    id_filii   INT(5),
    PRIMARY KEY(id_rejonu)
);

CREATE TABLE pojazd (
    id_pojazdu INT(5)      NOT NULL,
    marka      VARCHAR(20) NOT NULL,
    model      VARCHAR(20) NOT NULL,
    ladownosc  INT(8)      NOT NULL,
    PRIMARY KEY(id_pojazdu)
);

CREATE TABLE `przesylka`(
        id_przesylki    int(5)      NOT NULL,
        opis            varchar(30) NOT NULL,
        pesel_dostawcy  int(11)     NOT NULL,
        pesel_kuriera   int(11)     NOT NULL,
        id_zlecenia     int(5)      NOT NULL,
        pesel_odbiorcy  int(11)     NOT NULL,
        PRIMARY KEY(id_przesylki)
);

CREATE TABLE `zlecenie`(
        id_zlecenia     int(5)      NOT NULL,
        opis            varchar(30) NOT NULL,
        cena            float(10,2) NOT NULL,
        rodzaj_platnosci ENUM("przy odbiorze","z góry","za pobraniem") NOT NULL,
        status          ENUM("w realizacji","zakonczono","oczekuje") NOT NULL,
        pesel_nadawcy   int(11)     NOT NULL,
        PRIMARY KEY(id_zlecenia)
);

CREATE TABLE `klient`(
        pesel_klienta   int(11)     NOT NULL,
        imie            varchar(10) NOT NULL,
        nazwisko        varchar(15) NOT NULL,
        adres           varchar(40) NOT NULL,
        numer_kontaktowy int(10)    NOT NULL,
        adres_email     varchar(20) NOT NULL,
        id_rejonu       int(5)      NOT NULL,
        PRIMARY KEY(pesel_klienta)
);

CREATE TABLE `reklamacja`(
        id_reklamacji   int(5)      NOT NULL,
        opis            varchar(20)         ,
        status          ENUM("w realizacji","odrzucono","przyjeto") NOT NULL,
        id_przesylki    int(5)      NOT NULL,
        PRIMARY KEY(id_reklamacji)
);

CREATE TABLE `typprzesylki`(
        id_typu         int(5)      NOT NULL,
        opis            varchar(20) NOT NULL,
        waga_maksymalny int(4)              ,
        rozmiar_maksymalny varchar(7)       ,
        PRIMARY KEY(id_typu)
);

CREATE TABLE `przesylka_typprzesylki`(
        id_typu         int(5)      NOT NULL,
        id_przesylki    int(5)      NOT NULL,
        PRIMARY KEY(id_typu, id_przesylki)
);

ALTER TABLE `przesylka`
        ADD CONSTRAINT przesylka_zlecenie
        FOREIGN KEY (id_zlecenia)
        REFERENCES zlecenie(id_zlecenia),

        ADD CONSTRAINT przesylka_kurier 
        FOREIGN KEY (pesel_kuriera)
        REFERENCES kurier(pesel),

        ADD CONSTRAINT przesylka_dostawca
        FOREIGN KEY (pesel_dostawcy)
        REFERENCES dostawca(pesel),

        ADD CONSTRAINT przesylka_odbiorca
        FOREIGN KEY (pesel_odbiorcy)
        REFERENCES klient(pesel_klienta);

ALTER TABLE `zlecenie`
        ADD CONSTRAINT zlecenie_nadawca
        FOREIGN KEY (pesel_nadawcy)
        REFERENCES klient(pesel_klienta);

ALTER TABLE `klient`
        ADD CONSTRAINT klient_rejon
        FOREIGN KEY (id_rejonu)
        REFERENCES rejon(id_rejonu);

ALTER TABLE `reklamacja`
        ADD CONSTRAINT reklamacja
        FOREIGN KEY (id_przesylki)
        REFERENCES przesylka(id_przesylki);

ALTER TABLE `przesylka_typprzesylki`
        ADD CONSTRAINT przesylka_typrzesylki_przesylka
        FOREIGN KEY (id_przesylki)
        REFERENCES przesylka(id_przesylki),

        ADD CONSTRAINT przesylka_typrzesylki_typprzesylki
        FOREIGN KEY (id_typu)
        REFERENCES typprzesylki(id_typu);

ALTER TABLE kurier
    ADD CONSTRAINT kurier_pojazd
    FOREIGN KEY (id_pojazdu)
    REFERENCES pojazd(id_pojazdu),
    ADD CONSTRAINT kurier_obszar
    FOREIGN KEY (id_obszaru)
    REFERENCES obszar(id_obszaru);

ALTER TABLE kurier_katprawajazdy
    ADD CONSTRAINT kierowca_pesel
    FOREIGN KEY (pesel_kierowcy)
    REFERENCES kurier(pesel);

ALTER TABLE dostawca
    ADD CONSTRAINT dostawca_pojazd
    FOREIGN KEY (id_pojazdu)
    REFERENCES pojazd(id_pojazdu),
    ADD CONSTRAINT dostawca_filia
    FOREIGN KEY (id_filii)
    REFERENCES filia(id_filii);

ALTER TABLE dostawca_katprawajazdy
    ADD CONSTRAINT dostawca_pesel
    FOREIGN KEY (pesel_kierowcy)
    REFERENCES dostawca(pesel);

ALTER TABLE filia
    ADD CONSTRAINT filia_obszar
    FOREIGN KEY (id_obszaru)
    REFERENCES obszar(id_obszaru);

ALTER TABLE rejon
    ADD CONSTRAINT rejon_filia
    FOREIGN KEY (id_filii)
    REFERENCES filia(id_filii)