<?php include 'templates/header.php'; ?>

	<div class="container">
		<div class="row">
			<div class="one-half column" style="margin-top:5%">
				<h3>Znajdz paczke</h3>
				<form action="find" method="post">
					<table>
                        <tr>
                            <td>ID paczki: </td>
                            <td><input type="text" name="id"></td>
                        </tr>
                        <tr>
                            <td>PESEL: </td>
                            <td><input type="text" name="pesel"></td>
                        </tr>
                    </table>
				    <input style="margin auto" type="submit" value="Znajdz">
				</form>
			</div>
		</div>
	</div>

<?php include 'templates/footer.php'; ?>