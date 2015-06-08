<?php include 'templates/header.php'; ?>
<?php include('header.php'); ?>

<div class="container">
    <h3>Lista zleceń |
        <span id="count">
            <?php echo count($this->get('orders')); ?>
        </span>
    </h3>
    <form action="orders" method="post">
        <table id="order-table">

            <thead>
            <tr>
                <th>Id</th>
                <th>Opis</th>
                <th>Rodzaj płatności</th>
                <th>Status</th>
                <th>Nadawca</th>
            </tr>
            <tr>
                <td><input type="text" name="id_zlecenia"></td>
                <td><input type="text" name="opis"></td>
                <td><input type="text" name="rodzaj_platnosci"></td>
                <td><input type="text" name="status"></td>
                <td><input type="text" name="pesel_nadawcy"></td>
            </tr>
            </thead>
            <tbody>
                <?php foreach($this->get('orders') as $order): ?>
                <tr class="order">
                    <td><?php echo $order->id_zlecenia; ?></td>
                    <td><?php echo $order->opis; ?></td>
                    <td><?php echo $order->rodzaj_platnosci; ?></td>
                    <td><?php echo $order->status; ?></td>
                    <td><?php echo $order->nadawca; ?></td>
                </tr>
                <tr class="package-tr">
                    <td colspan="5">
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Opis</th>
                                    <th>Status</th>
                                    <th>Pesel dostawcy</th>
                                    <th>Pesel kuriera</th>
                                    <th>Pesel odbiorcy</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($order->przesylki as $delivery): ?>
                                <tr>
                                    <td> <?php echo $delivery['id_przesylki']; ?> </td>
                                    <td> <?php echo $delivery['opis']; ?> </td>
                                    <td> <?php echo $delivery['status']; ?> </td>
                                    <td> <?php echo $delivery['pesel_dostawcy']; ?> </td>
                                    <td> <?php echo $delivery['pesel_kuriera']; ?> </td>
                                    <td> <?php echo $delivery['pesel_odbiorcy']; ?> </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <input style="margin auto" type="submit" value="Znajdz">
    </form>
</div>

<?php include 'templates/footer.php'; ?>
