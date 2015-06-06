<?php include 'templates/header.php'; ?>
<?php include('header.php'); ?>
	<div class="container">

				<h3>Lista zleceń </h3>

				<form action="orders" method="post">
					<table id="order-table">

                        <thead>
                        <tr>
                            <td>Id </td>
                            <td>Opis </td>
                            <td>Rodzaj płatności </td>
                            <td>Status </td>
                            <td>Pesel nadawcy </td>
                        </tr>
                        </thead>
                        <tr>
                            <td><input type="text" name="id_zlecenia"></td>
                            <td><input type="text" name="opis"></td>
                            <td><input type="text" name="rodzaj_platnosci"></td>
                            <td><input type="text" name="status"></td>
                            <td><input type="text" name="pesel_nadawcy"></td>
                        </tr>
                        <?php foreach($this->get('orders') as $order) { ?>
                        <tr>
                            <td><?php echo $order->id_zlecenia; ?></td>
                            <td><?php echo $order->opis; ?></td>
                            <td><?php echo $order->rodzaj_platnosci; ?></td>
                            <td><?php echo $order->status; ?></td>
                            <td><?php echo $order->nadawca; ?></td>
                        </tr>
                            <?php foreach($order->przesylki as $delivery) { ?>
                            <tr>
                                <td> <?php echo $delivery['id_przesylki']; ?> </td>    
                                <td> <?php echo $delivery['opis']; ?> </td>    
                                <td> <?php echo $delivery['status']; ?> </td>    
                                <td> <?php echo $delivery['pesel_dostawcy']; ?> </td>    
                                <td> <?php echo $delivery['pesel_kuriera']; ?> </td>    
                                <td> <?php echo $delivery['pesel_odbiorcy']; ?> </td>    
                            </tr>
                            <?php } ?>
                        
                        <?php } ?>
                        
                    </table>
				    <input style="margin auto" type="submit" value="Znajdz">
				</form>
	</div>

<?php include 'templates/footer.php'; 