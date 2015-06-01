<?php include 'templates/header.php';
$zlecenie = $this->get('zlecenie'); ?>
    
	<div class="container">
		<div class="row">
			<div class="one-half column" style="margin-top:5%">
				<h3>Zamówienie nr #<?php echo $zlecenie->id; ?></h3>
                <table>
                <tr>
                    <td><b>Opis</b></td>
                    <td><?php echo $zlecenie->opis; ?></td>
                </tr>
                <tr>
                    <td><b>Cena</b></td>
                    <td><?php echo $zlecenie->cena.' zł ('.$zlecenie->rodzaj_platnosci.')'; ?></td>
                </tr>
                <tr>
                    <td><b>Status</b></td>
                    <td><?php echo $zlecenie->status; ?></td>
                </tr>
                <tr>
                    <td><b>Nadawca</b></td>
                    <td><?php echo $zlecenie->nadawca; ?></td>
                </tr>
                </table>
                    
			</div>
		</div>
	</div>

<?php include 'templates/footer.php'; ?>