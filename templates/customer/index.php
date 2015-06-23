<?php include('header.php');

$customer = $data['customer'];
?>

<div class="container">

    
    <h4> Informacje na temat konta:</h4>
        <table class="order-table">
            <tr>
                <th>Imie</th>
                <td><?php echo $customer['imie']; ?></td>
            </tr>
            <tr>
                <th>Nazwisko</th>
                <td><?php echo $customer['nazwisko']; ?></td>
            </tr>
            <tr>
                <th>Pesel</th>
                <td><?php echo $customer['pesel_klienta']; ?></td>
            </tr>
            <tr>
                <th>Adres zamieszkania</th>
                <td><?php echo $customer['adres']; ?>
                <td>rejon: <?php echo $customer['nazwa']; ?></td>
                </td>
            </tr>
            <tr>
                <th>Numer kontaktowy</th>
                <td><?php echo $customer['numer_kontaktowy']; ?></td>
            </tr>
            <tr>
                <th>Adres email</th>
                <td><?php echo $customer['adres_email']; ?></td>
            </tr>
    </table>
</div>