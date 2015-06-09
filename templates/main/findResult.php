<?php include 'templates/header.php';

$o = $this->get('delivery');
if ($o !=null)
    $delivery = $o[0]; ?>
    
	<div class="container">
        <?php if(isset($delivery['id_przesylki'])){ ?>
                <div class="info"> Znaleziono przesyłkę!</div>
				<h5>Przesyłka numer <?php echo $delivery['id_przesylki']; ?></h5>
        
                <table class="order-table">
                <tr>
                    <td><b>Opis</b></td>
                    <td><?php echo $delivery['opis']; ?></td>
                </tr>
                <tr>
                    <td><b>Odbiorca</b></td>
                    <td><?php echo $delivery['pesel_odbiorcy']; ?></td>
                </tr>
                <tr>
                    <td><b>Dostawca</b></td>
                    <td><?php echo $delivery['pesel_dostawcy']; ?></td>
                </tr>
                <tr>
                    <td><b>Kurier</b></td>
                    <td><?php echo $delivery['pesel_kuriera']; ?></td>
                </tr>
                </table>
          
        <?php } else { echo '<dif class="error">Nie znaleziono paczki!</h5>'; } ?>
	</div>


<?php include 'templates/footer.php'; ?>
