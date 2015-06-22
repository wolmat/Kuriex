CREATE DATABASE IF NOT EXISTS `kuriex`
DEFAULT CHARACTER SET utf8
DEFAULT COLLATE utf8_general_ci;
SET NAMES utf8;

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
    pesel      BIGINT      NOT NULL,
    imie       VARCHAR(50) NOT NULL,
    nazwisko   VARCHAR(50) NOT NULL,
    id_obszaru INT         NOT NULL,
    id_pojazdu INT         NOT NULL,
    PRIMARY KEY(pesel)
);

CREATE TABLE kurier_katprawajazdy (
    nazwa_kategorii INT    NOT NULL,
    pesel_kierowcy  BIGINT NOT NULL
);

CREATE TABLE dostawca (
    pesel      BIGINT      NOT NULL,
    imie       VARCHAR(50) NOT NULL,
    nazwisko   VARCHAR(50) NOT NULL,
    id_filii   INT      NOT NULL,
    id_pojazdu INT      NOT NULL,
    PRIMARY KEY(pesel)
);

CREATE TABLE dostawca_katprawajazdy (
    nazwa_kategorii VARCHAR(5) NOT NULL,
    pesel_kierowcy  BIGINT     NOT NULL
);

CREATE TABLE obszar (
    id_obszaru INT      NOT NULL AUTO_INCREMENT,
    nazwa      VARCHAR(50) NOT NULL,
    opis       VARCHAR(50),
    PRIMARY KEY(id_obszaru)
);

CREATE TABLE filia (
    id_filii   INT      NOT NULL AUTO_INCREMENT,
    nazwa      VARCHAR(20) NOT NULL,
    id_obszaru INT,
    PRIMARY KEY(id_filii)
);

CREATE TABLE rejon (
    id_rejonu  INT      NOT NULL AUTO_INCREMENT,
    nazwa      VARCHAR(20) NOT NULL,
    opis       VARCHAR(50),
    id_filii   INT,
    PRIMARY KEY(id_rejonu)
);

CREATE TABLE pojazd (
    id_pojazdu INT      NOT NULL AUTO_INCREMENT,
    marka      VARCHAR(20) NOT NULL,
    model      VARCHAR(20) NOT NULL,
    ladownosc  INT      NOT NULL,
    PRIMARY KEY(id_pojazdu)
);

CREATE TABLE `przesylka`(
    id_przesylki    INT         NOT NULL AUTO_INCREMENT,
    opis            varchar(30) NOT NULL,
    status          ENUM("w realizacji","zakończono","oczekuje") NOT NULL,
    pesel_dostawcy  BIGINT      NOT NULL,
    pesel_kuriera   BIGINT      NOT NULL,
    id_zlecenia     INT         NOT NULL,
    pesel_odbiorcy  BIGINT      NOT NULL,
    PRIMARY KEY(id_przesylki)
);

CREATE TABLE `zlecenie`(
    id_zlecenia     INT         NOT NULL,
    opis            varchar(30) NOT NULL,
    cena            float(10,2) NOT NULL,
    rodzaj_platnosci ENUM("przy odbiorze","z góry","za pobraniem") NOT NULL,
    status           ENUM("w realizacji","zakończono","oczekuje") NOT NULL,
    pesel_nadawcy   BIGINT     NOT NULL,
    PRIMARY KEY(id_zlecenia)
);

CREATE TABLE `klient`(
    pesel_klienta    BIGINT      NOT NULL,
    imie             varchar(50) NOT NULL,
    nazwisko         varchar(50) NOT NULL,
    adres            varchar(50) NOT NULL,
    numer_kontaktowy int(10)     NOT NULL,
    adres_email      varchar(50) NOT NULL,
    haslo            varchar(13) NOT NULL,
    id_rejonu        INT         NOT NULL,
    PRIMARY KEY(pesel_klienta)
);

CREATE TABLE `reklamacja`(
    id_reklamacji INT         NOT NULL AUTO_INCREMENT,
    opis          varchar(20)     ,
    status        ENUM("w realizacji","odrzucono","przyjęto") NOT NULL,
    id_przesylki  INT         NOT NULL,
    PRIMARY KEY(id_reklamacji)
);

CREATE TABLE `typprzesylki`(
    id_typu            INT         NOT NULL AUTO_INCREMENT,
    opis               varchar(20) NOT NULL,
    waga_maksymalny    INT,
    rozmiar_maksymalny varchar(7),
    PRIMARY KEY(id_typu)
);

CREATE TABLE `przesylka_typprzesylki`(
    id_typu       INT NOT NULL AUTO_INCREMENT,
    id_przesylki  INT NOT NULL,
    PRIMARY KEY(id_typu, id_przesylki)
);

ALTER TABLE `przesylka`
    ADD CONSTRAINT przesylka_zlecenie
    FOREIGN KEY (id_zlecenia)
    REFERENCES zlecenie(id_zlecenia) ON DELETE CASCADE,

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
    REFERENCES filia(id_filii);

-- Widoki dla strony głównej
CREATE VIEW customer_count AS
SELECT COUNT(pesel_klienta) c
FROM klient;

CREATE VIEW package_count AS
SELECT COUNT(id_przesylki) p
FROM przesylka;

CREATE VIEW kurier_count AS
SELECT COUNT(pesel) AS x
FROM kurier;

CREATE VIEW dostawca_count AS
SELECT COUNT(pesel) AS x
FROM dostawca;

CREATE VIEW worker_count AS
SELECT k.x + d.x AS x
FROM kurier_count k
JOIN dostawca_count d;

CREATE VIEW city_count AS
SELECT COUNT(id_rejonu) AS x
FROM rejon;

-- Główny widok
-- Liczba klientów, paczek, pracowników, miast
CREATE VIEW main AS
SELECT k.c AS customers, p.p AS packages, w.x AS workers, c.x AS cities
FROM customer_count k
JOIN package_count p
JOIN worker_count w
JOIN city_count c;

DROP FUNCTION IF EXISTS `nowe_zlecenie`;

DELIMITER $$
CREATE DEFINER=`kuriex`@`localhost` FUNCTION `nowe_zlecenie`(
	nadawca BIGINT,
    opis VARCHAR(100),
    platnosc VARCHAR(50)
) RETURNS int(11)
BEGIN
    SET @id = (
		SELECT MAX(id_zlecenia) FROM zlecenie
    ) + 1;

    INSERT INTO zlecenie VALUES (
		@id,
        opis,
        0,
        platnosc,
        'oczekuje',
        nadawca
    );

    RETURN @id;
END $$

DROP PROCEDURE IF EXISTS `nowa_paczka`;

DELIMITER $$
CREATE DEFINER=`kuriex`@`localhost` PROCEDURE `nowa_paczka`(
	zlecenie INT,
	nadawca BIGINT,
	odbiorca BIGINT,
    opis_przesylki VARCHAR(100),
    opis_zlecenia VARCHAR(100),
    platnosc VARCHAR(30),
    imie VARCHAR(50),
    nazwisko VARCHAR(50),
    adres VARCHAR(50),
    telefon INT,
    email VARCHAR(50),
    rejon_odbiorcy VARCHAR(50)
)
BEGIN
	SET @zlecenie = (SELECT id_zlecenia FROM zlecenie WHERE id_zlecenia = zlecenie);
    IF @zlecenie IS NULL THEN
		SET @zlecenie = nowe_zlecenie(nadawca, opis_zlecenia, platnosc);
    END IF;

	SET @pesel_odbiorcy = (SELECT pesel_klienta FROM klient WHERE pesel_klienta = odbiorca);
    IF @pesel_odbiorcy IS NULL THEN
		INSERT INTO klient VALUES (
			odbiorca,
            imie,
            nazwisko,
            adres,
            telefon,
            email,
            NULL,
            rejon_odbiorcy
        );
    END IF;

    SET @rejon = (SELECT id_rejonu FROM klient WHERE pesel_klienta = odbiorca);
	SET @kurier = (
		SELECT pesel
		FROM (
			SELECT k.* FROM kurier k
			NATURAL JOIN filia f
			INNER JOIN rejon r
			ON f.id_filii = r.id_filii
			WHERE r.id_rejonu = @rejon
		) k
		LEFT JOIN przesylka p
		ON k.pesel = p.pesel_kuriera
		GROUP BY k.pesel
		ORDER BY COUNT(p.id_przesylki)
        LIMIT 1
	);
    SET @dostawca = (
		SELECT pesel
		FROM ( 
			SELECT pesel FROM dostawca d
			NATURAL JOIN filia f
			INNER JOIN rejon r
			ON d.id_filii = r.id_filii
			WHERE r.id_rejonu = @rejon
		) d
		LEFT JOIN przesylka p
		ON d.pesel = p.pesel_dostawcy
		GROUP BY d.pesel
		ORDER BY COUNT(p.id_przesylki)
        LIMIT 1
	);

    INSERT INTO przesylka(opis,
		status,
		pesel_dostawcy,
		pesel_kuriera,
		id_zlecenia,
		pesel_odbiorcy)
	VALUES (
		opis_przesylki,
        'oczekuje',
        @dostawca,
        @kurier,
        @zlecenie,
        odbiorca
    );

    UPDATE zlecenie
    SET cena = cena + 10
    WHERE id_zlecenia = @zlecenie;
END $$