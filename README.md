# KURIEX

## Git - porady
* Synchronizacja
 * do pobrania zmian używaj `git fetch` zamiast `git pull`
* Gałęzie
 * przed rozpoczęciem nowych prac utwórz gałąź `git checkout -b nazwa/gałęzi`
 * nazywaj swoje gałęzie według schematu `kategoria/temat` np. `frontend/index`
* Commit
 * commituj mniej, a częściej - używaj `git add -p`, dużo commitów to nie błąd!
 * gdy masz więcej informacji do przekazania używaj `git commit` zamiast `git commit -m`
 * opisuj zmiany w czasie teraźniejszym np. `Add main controller` zamiast `Added main controller`
* Zmiany w innych repozytoriach
 * dodaj serwer z którego również chcesz pobierać zmiany np `git remote add davpal https://github.com/davpal/Kuriex`
 * pobieraj je przy pomocy `git fetch nazwa_serwera` np. `git fetch davpal`

## Styl kodowania
* Wcięcia na 4 spacje

## Pomoce
### Treść zadania:
* http://riad.pk.edu.pl/~strug/bd/st/bd-st.html

### Działanie MVC w PHP:
* http://lukasz-socha.pl/php/mvc-w-praktyce-%E2%80%93-tworzymy-system-artykulow-cz-1/
* http://lukasz-socha.pl/php/mvc-w-praktyce-z-composer-tworzymy-system-artykulow-cz-1/
* http://ferrante.pl/frontend/php/wzorzec-mvc-w-php/
* http://www.forumweb.pl/porady-i-tutoriale-www/php-php-light-mvc,56553

### Dokumentacja PDO:
* http://php.net/manual/en/book.pdo.php

### Uruchomienie mod_rewrite na Apache:
* http://gajdaw.pl/varia/przyjazne-url-mod-rewrite/print.html

## Funkcje

#### Po zalagowaniu się jako admin:
* Pracownicy
 * Dodawanie
 * Edytowanie 
 * Wyświetlanie

* Paczki
 * Tworzenie nowych wysyłek
 * Sprawdzanie kto zajmuje się istniejącymi
 * Przypisywanie pracowników do paczek

* Filie / trasy
 * Sprawdzenie kto działa w danym rejonie

#### Zwykły klient - bez logowania

* Sprawdzanie stanu przesyłki
* Po podaniu ID przesyłki, można sprawdzić co dzieje się z daną paczką
* Wyświetlenie danych kontaktowych do nadawcy/odbiorcy, nadzorcy lub kuriera
