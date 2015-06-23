<?php include('header.php');

$customer = $data['customer'];
?>

<div class="container">

        <div class="four columns offset-by-two">
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
                <td><?php echo $customer['adres']; ?></br>
                rejon: <?php echo $customer['nazwa']; ?>
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
        <div class="four columns offset-by-two">
                <img src="templates/images/user.jpg" alt="Kuriex" height="270" width="270">
    </div>

</div>