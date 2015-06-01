<?php include 'templates/header.php';
$zlecenie = $this->get('zlecenie'); ?>
    
	<div class="container">
		<div class="row">
			<div class="one-half column" style="margin-top:5%">
				<h3>Zamówienie nr #<?php echo $zlecenie->id; ?></h3>
                <table>
                <tr>
                    <td>Opis</td>
                    <td><?php echo $zlecenie->opis; ?></td>
                </tr>
                <tr>
                    <td>Cena</td>
                    <td><?php echo $zlecenie->cena.' zł ('.$zlecenie->rodzaj_platnosci.')'; ?></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td><?php echo $zlecenie->status; ?></td>
                </tr>
                <tr>
                    <td>Nadawca</td>
                    <td><?php echo $zlecenie->nadawca; ?></td>
                </tr>
                </table>
                    
			</div>
		</div>
	</div>

<?php include 'templates/footer.php'; ?>