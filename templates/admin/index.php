<?php include('header.php'); ?>
	<div class="container">
        <div class="four columns offset-by-two">
        <h5> Oczekujące zlecenia </h5>
            
                    <table id="pending-table">
                        <tr>
                            <td>Id </td>
                            <td>Opis </td>
                        </tr>
                        <?php foreach($data['orders'] as $order) { ?>
                        <tr>
                            <td><?php echo $order['id_zlecenia']; ?></td>
                            <td><?php echo $order['opis']; ?></td>
                        </tr>
                        <?php } ?>
                        
                    </table>
    

        
        </div>
        
        <div class="four columns">
            <h5> Oczekujące reklamacje </h5>
            
                    <table id="pending-table">
                        <tr>
                            <td>Id</td>
                            <td>Id przesylki</td>
                        </tr>
                        <?php foreach($data['complains'] as $complain) { ?>
                        <tr>
                            <td><?php echo $complain['id_reklamacji']; ?></td>
                            <td><?php echo $complain['id_przesylki']; ?></td>
                        </tr>
                        <?php } ?>
                        
                    </table>
        </div>
	</div>
            


<?php include('templates/footer.php'); ?>
