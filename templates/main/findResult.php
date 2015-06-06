<?php include 'templates/header.php';

$order = $this->get('order'); ?>
    
	<div class="container">
        <?php if($order->id_zlecenia != null){ ?>
				<h5>Podsumowanie zamówienia nr <?php echo $order->id_zlecenia; ?></h5>
                <table class="order-table">
                <tr>
                    <td><b></b></td>
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
                <table class="package-table">
                <tr>
                    <td><b>Id</b></td>
                    <td><b>Opis</b></td>
                    <td><b>Odbiorca</b></td>
                    <td><b>Dostawca</b></td>
                    <td><b>Kurier</b></td>                    
                </tr>
                <?php foreach($order->przesylki as $delivery) { ?>
                <tr>
                    <td><b><?php echo $delivery['id_przesylki']; ?></b></td>
                    <td><?php echo $delivery['opis']; ?></td>
                    <td><?php echo $delivery['odbiorca']; ?></td>
                    <td><?php echo $delivery['dostawca']; ?></td>
                    <td><?php echo $delivery['kurier']; ?></td>
                    
                </tr>
                <?php } ?>
                </table>              
        <?php } else { echo '<h5>Nie znaleziono paczki!</h5>'; } ?>
	</div>


<?php include 'templates/footer.php'; ?>
