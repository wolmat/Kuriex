<?php include 'templates/header.php'; ?>
<?php include('header.php'); ?>
	<div class="container">

        <h3>Lista pracowników</h3>
        Rodzaj pracownika:
                <select name='function'>
                    <option name="kurier">Kurier</option>
                    <option name="dostawca">Dostawca</option>
                </select>
        
				<form action="workers" method="post">
					<table>
                        <thead>
                        <tr>
                            <td>PESEL : </td>
                            <td>Imie: </td>
                            <td>Nazwisko: </td>
                            <td>Id fili: </td>
                            <td>Id pojazdu: </td>
                        </tr>
                        </thead>
                        <tr>
                            <td><input type="text" name="pesel"></td>
                            <td><input type="text" name="imie"></td>
                            <td><input type="text" name="nazwisko"></td>
                            <td><input type="text" name="id_fili"></td>
                            <td><input type="text" name="id_pojazdu"></td>
                        </tr>
                    </table>
				    <input style="margin auto" type="submit" value="Znajdz">
				</form>
	</div>

<?php include 'templates/footer.php'; ?>