<?php include('templates/header.php'); ?>
<?php include('header.php'); ?>




	<div class="container">

        <h5> Oczekujące zlecenia </h5>
            
                    <table id="order-table">
                        <tr>
                            <td>Id </td>
                            <td>Opis </td>
                        </tr>
                        <?php foreach($this->get('orders') as $order) { ?>
                        <tr>
                            <td><?php echo $order['id_zlecenia']; ?></td>
                            <td><?php echo $order['opis']; ?></td>
                        </tr>
                        <?php } ?>
                        
                    </table>
    

        <h5> Oczekujące reklamacje </h5>
            

	</div>
            


<?php include('templates/footer.php'); ?>
