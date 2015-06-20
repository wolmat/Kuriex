<?php include('header.php'); ?>

	<div class="container">

				<h3>
                    Lista klientów |
                    <span id="count">
                         <?php echo count($data['customers']); ?>
                    </span>
                </h3>
                <?php if(isset($data['message'])): ?>
                    <div class="message <?php echo $data['message-type'] ?>">
                        <?php echo $data['message']; ?>
                        <?php
                            if(isset($data['fields']))
                                foreach($data['fields'] as $field){
                                    echo '<span class="field">'.$field.'</span>';
                                }
                        ?>
                    </div>
                <?php endif; ?>
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
                            <td><input type="submit" value="Dodaj" name="add"></td>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($data['customers'] as $customer): ?>
                        <tr class="customer">
                            <td><?php echo $customer['pesel_klienta']; ?></td>
                            <td><?php echo $customer['imie']; ?></td>
                            <td><?php echo $customer['nazwisko']; ?></td>
                            <td><?php echo $customer['adres']; ?></td>
                            <td><?php echo $customer['numer_kontaktowy']; ?></td>
                            <td><?php echo $customer['adres_email']; ?></td>
                            <td><?php echo $customer['id_rejonu']; ?></td>
                            <td class="crud">
                                <input class="edit" type="submit" name="update" value="">
                                <input class="delete" type="submit" name="delete" value="">
                            </td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>

				</form>
	</div>

<?php include 'templates/footer.php'; ?>
