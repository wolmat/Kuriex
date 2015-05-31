# Zapytania

## Wyszukiwanie informacji na temat zlecenia
Należy podać `pesel nadawcy` i `id zlecenia`.
Zwróci dane całego zlecenia i zestawienie wszystkich przesyłek

```
SELECT 
z.id_zlecenia, z.opis, z.cena, z.rodzaj_platnosci, z.status,
CONCAT (nad.imie,' ',nad.nazwisko) as nadawca,
p.id_przesylki, p.opis,
CONCAT (odb.imie,' ',odb.nazwisko) as odbiorca,
CONCAT (d.imie,' ',d.nazwisko) as dostawca
FROM zlecenie z
INNER JOIN klient nad
ON z.pesel_nadawcy = nad.pesel_klienta
INNER JOIN przesylka p
ON p.id_zlecenia = p.id_zlecenia
INNER JOIN klient odb
ON p.pesel_odbiorcy = odb.pesel_klienta
INNER JOIN dostawca d
ON p.pesel_dostawcy = d.pesel
WHERE nad.pesel_klienta = #PESEL AND z.id_zlecenia = #ID
```

## Wypisanie informacji o wszystkich pracownikach

## Wypisanie informacji o wszystkich klientach

## Wypisanie informacji o wszystkich zleceniach

## Wypisanie oczekujacych zleceniach 
