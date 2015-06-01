<?php include 'templates/header.php';
$order = $this->get('orderInfo'); ?>
    
	<div class="container">
		<div class="row">
			<div class="one-half column" style="margin-top:5%">
				<h3>Zamówienie nr #<?php echo $order->id; ?></h3>
                <table>
                <tr>
                    <td><b>Opis</b></td>
                    <td><?php echo $order->opis; ?></td>
                </tr>
                <tr>
                    <td><b>Cena</b></td>
                    <td><?php echo $order->cena.' zł ('.$order->rodzaj_platnosci.')'; ?></td>
                </tr>
                <tr>
                    <td><b>Status</b></td>
                    <td><?php echo $order->status; ?></td>
                </tr>
                <tr>
                    <td><b>Nadawca</b></td>
                    <td><?php echo $order->nadawca; ?></td>
                </tr>
                </table>
                    
			</div>
		</div>
	</div>

<?php include 'templates/footer.php'; ?>