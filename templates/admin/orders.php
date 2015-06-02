<?php include 'templates/header.php'; ?>

	<div class="container">

				<h3>Lista zleceń </h3>
				<form action="find" method="post">
					<table>
                        <thead>
                        <tr>
                            <td>Id </td>
                            <td>Opis </td>
                            <td>Rodzaj płatności </td>
                            <td>Status </td>
                            <td>Pesel nadawcy </td>
                        </tr>
                        </thead>
                        <tr>
                            <td><input type="text" name="id_zlecenia"></td>
                            <td><input type="text" name="opis"></td>
                            <td><input type="text" name="rodzaj_platnosci"></td>
                            <td><input type="text" name="status"></td>
                            <td><input type="text" name="pesel_nadawcy"></td>

                        </tr>
                    </table>
				    <input style="margin auto" type="submit" value="Znajdz">
				</form>
	</div>

<?php include 'templates/footer.php'; ?>