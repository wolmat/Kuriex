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
                <td></td>
            </tr>
            <tr>
                <th>Pesel</th>
                <td></td>
            </tr>
            <tr>
                <th>Adres zamieszkania</th>
                <td>#ADRES (rejon: #REJON)</td>
            </tr>
            <tr>
                <th>Numer kontaktowy</th>
                <td></td>
            </tr>
            <tr>
                <th>Adres email</th>
                <td></td>
            </tr>
    </table>
</div>