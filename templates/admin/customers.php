<?php include 'templates/header.php';
$customers = $this->get('customers'); ?>

	<div class="container">

				<h3>Lista klientów </h3>
				<form action="find" method="post">
					<table>
                        <thead>
                        <tr>
                            <td>PESEL </td>
                            <td>Imie </td>
                            <td>Nazwisko </td>
                            <td>Adres </td>
                            <td>Numer kontaktowy </td>
                            <td>Adres email </td>
                            <td>Id rejonu </td>
                        </tr>
                        </thead>
                        <tr>
                            <td><input type="text" name="pesel"></td>
                            <td><input type="text" name="imie"></td>
                            <td><input type="text" name="nazwisko"></td>
                            <td><input type="text" name="adres"></td>
                            <td><input type="text" name="numer_kontaktowy"></td>
                            <td><input type="text" name="adres_email"></td>
                            <td><input type="text" name="id_rejonu"></td>
                        </tr>
                        <?php foreach($this->get('customers') as $customer) { ?>
                        <tr>
                            <td><?php echo $customer['pesel_klienta']; ?></td>
                            <td><?php echo $customer['imie']; ?></td>
                            <td><?php echo $customer['nazwisko']; ?></td>
                            <td><?php echo $customer['adres']; ?></td>
                            <td><?php echo $customer['numer_kontaktowy']; ?></td>
                            <td><?php echo $customer['adres_email']; ?></td>
                            <td><?php echo $customer['id_rejonu']; ?></td>
                        </tr>
                        <?php } ?>
                    </table>
				    <input style="margin auto" type="submit" value="Znajdz">
				</form>
	</div>

<?php include 'templates/footer.php'; ?>