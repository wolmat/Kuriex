<?php include 'header.php' ?>
<div class="five columns offset-by-three">
    <?php include 'templates/message.php' ?>
    <form action="newOrder">
        <h3>Nowe zamówienie</h3>
        <fieldset>
            <legend>Dane zamówienia</legend>
            <label>Opis</label><input type="text" name="opis_zlecenia">
            <label>Płatność</label>
            <select name="platnosc">
                <option value="z góry">Z góry</option>
                <option value="za pobraniem">za pobraniem</option>
                <option value="przy odbiorze">przy odbiorze</option>
            </select>
        </fieldset>
        <fieldset>
            <legend>Dane odbiorcy</legend>
            <label>Pesel</label><input type="text" name="pesel_odbiorcy">
            <label>Imię</label><input type="text" name="imie">
            <label>Nazwisko</label><input type="text" name="nazwisko">
            <label>Adres</label><input type="text" name="adres">
            <label>Telefon</label><input type="text" name="telefon">
            <label>E-mail</label><input type="text" name="email">
            <label>Rejon</label><input type="text" name="rejon">
        </fieldset>
        <fieldset>
            <legend>Dane przesylki</legend>
            <label>Opis</label><input type="text" name="opis_przesylki">
            <input type="submit" value="Wyślij">
        </fieldset>
    </form>
</div>