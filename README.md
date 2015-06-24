# KURIEX

##Opis aplikacji klienckiej
Trzon aplikacji napisany został w języku PHP, niektóre frontendowe rozwiązania zrealizowane zostały przy pomocy jQuerry.  Struktura projektu oparta jest na wzorcu Model-View-Controller.
Utworzyliśmy następujące kontrolery: admin, customer, login, main, order, worker, dziedziczące po controller oraz odpowiadające im modele, dziedziczące po model. Kontrolery oraz modele odnoszą się albo do konkretnych encji (jak np. order) lub do konkretnych działań (np. login).  Model view odpowiedzialny jest za generowanie odpowiednich widoków dla danych akcji.

##Opis funkcjonalności	
Aplikacja posiada trzy poziomy dostępu.
Niezalogowany klient, może sprawdzić informacje na temat przesyłki wpisując jej numer do przeglądarki na stronie głównej lub w zakładce „Znajdź paczkę”. Wypisane zostaną podstawowe informacje na temat przesyłki, oraz zaznaczone na mapie lokalizacje nadawcy i odbiorcy.

W zakładce „Zaloguj się” możliwe jest zalogowanie się na konto administratora (login: `admin`, hasło: `pass`) lub na konto klienta przy pomocy emaila oraz hasła (przykładowe dane do testowania: `gantoniak@gmail.com`, `krk8e8`). 
Po zalogowaniu się jako administrator ukazuje nam się strona główna panelu administratora, na której wypisane są zlecenia oraz reklamacje oczekujące na zaakceptowanie lub odrzucenie. W kolejnych zakładkach: klienci, pracownicy i zlecenia, możliwe jest przeglądanie, filtrowanie, dodawanie, usuwanie, oraz edytowanie rekordów z bazy. Po kliknięciu wybranego zlecenia, rozwija się lista z wszystkimi przesyłkami przypisanymi do danego zlecenia.
Po zalogowaniu się jako klient, w panelu klienta ukazują się informacje na temat konta. W zakładce zlecenia istnieje możliwość przejrzenia zleceń których zleceniodawcą jest zalogowany klient.

##Konfiguracja aplikacji
Skrypt instalacyjny bazę danych (install.sql) znajduje się w folderze config, natomiast przykładowe dane do zaimportowania (dump.sql) znajdują się w folderze data.

Aplikacja wykorzystuje moduł serwera Apache mod_rewrite, który pozwala generować „przyjazne” adresy. Ponieważ działanie całej aplikacji opiera się na index.php który na podstawie przyjętych metodą GET parametrów wywołuje konkretne akcje, skorzystaliśmy z tego modułu aby zastąpić linki typu `index.php?task=main&action=index`, ładniejszym `main`.
