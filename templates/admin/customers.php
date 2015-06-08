<?php include 'templates/header.php'; ?>
<?php include('header.php'); ?>

	<div class="container">

				<h3>
                    Lista klientów |
                    <span id="count">
                         <?php echo count($this->get('customers')); ?>
                    </span>
                </h3>
                <?php echo $this->get('message'); ?>
				<form id="customers" action="customers" method="post" autocomplete="off">
					<table class="customer-table">
                        <thead>
                        <tr>
                            <th>PESEL </th>
                            <th>Imie </th>
                            <th>Nazwisko </th>
                            <th>Adres </th>
                            <th>Numer kontaktowy </th>
                            <th>Adres email </th>
                            <th>Id rejonu </th>
                        </tr>
                        <tr>
                            <td><input type="text" name="pesel_klienta"></td>
                            <td><input type="text" name="imie"></td>
                            <td><input type="text" name="nazwisko"></td>
                            <td><input type="text" name="adres"></td>
                            <td><input type="text" name="numer_kontaktowy"></td>
                            <td><input type="text" name="adres_email"></td>
                            <td><input type="text" name="id_rejonu"></td>
                            <td><input style="margin auto" type="submit" value="Dodaj" name="add"></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($this->get('customers') as $customer): ?>
                        <tr>
                            <td><?php echo $customer['pesel_klienta']; ?></td>
                            <td><?php echo $customer['imie']; ?></td>
                            <td><?php echo $customer['nazwisko']; ?></td>
                            <td><?php echo $customer['adres']; ?></td>
                            <td><?php echo $customer['numer_kontaktowy']; ?></td>
                            <td><?php echo $customer['adres_email']; ?></td>
                            <td><?php echo $customer['id_rejonu']; ?></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

				</form>
	</div>

<?php include 'templates/footer.php'; ?>
