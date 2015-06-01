<?php include 'templates/header.php';
$order = $this->get('orderInfo'); ?>
    
	<div class="container">
		<div class="row">
			<div class="one-half column" style="margin-top:5%">
				<h5>Podsumowanie zamówienia nr <?php echo $order->id; ?></h5>
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
                    
                <h5>Przesyłki</h5>
                <?php foreach($this->get('deliveries') as $delivery) { ?>
                <table>
                <tr>
                    <td><b>Id</b></td>
                    <td><b>Opis</b></td>
                    <td><b>Odbiorca</b></td>
                    <td><b>Dostawca</b></td>
                    <?php if (isset($delivery['kurier'])){ ?>
                    <td><b>Kurier</b></td>
                    <?php } ?>
                    
                </tr>
                <tr>
                    <td><b><?php echo $delivery['id_przesylki']; ?></b></td>
                    <td><?php echo $delivery['opis']; ?></td>
                    <td><?php echo $delivery['odbiorca']; ?></td>
                    <td><?php echo $delivery['dostawca']; ?></td>
                    <?php if (isset($delivery['kurier'])){ ?>
                    <td><?php echo $delivery['kurier']; ?></td>
                    <?php } ?>
                    
                </tr>
                </table>
                <?php } ?>
                
			</div>
		</div>
	</div>

<?php include 'templates/footer.php'; ?>