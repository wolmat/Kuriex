<?php include('templates/header.php'); ?>
<?php include('header.php'); ?>

	<div class="container">

				<h3>Logowanie do panelu admina</h3>
				<form action="login" method="post">
					<table>
                        <tr>
                            <td>Login: </td>
                            <td><input type="text" name="user"></td>
                        </tr>
                        <tr>
                            <td>Hasło: </td>
                            <td><input type="text" name="pass"></td>
                        </tr>
                    </table>
				    <input style="margin auto" type="submit" value="Zaloguj">
				</form>
	</div>

<?php include 'templates/footer.php'; ?>