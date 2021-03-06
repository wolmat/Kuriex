<?php include('header.php'); ?>
<?php
    if(isset($_POST['function']))
        $function = $_POST['function'];
    else
        $function = 'kurier';
?>
	<div class="container">
        <h3>Lista pracowników |
            <span id="count">
                <?php echo count($data['workers']); ?>
            </span>
        </h3>
        <?php include('templates/message.php'); ?>
        <form action="workers" method="post">
        <div class="three columns offset-by-four">
            Rodzaj pracownika:
            <select name="function">
                <?php if($function == "dostawca"): ?>
                    <option value="dostawca">Dostawca</option>
                    <option value="kurier">Kurier</option>
                <?php else: ?>
                    <option value="kurier">Kurier</option>
                    <option value="dostawca">Dostawca</option>
                <?php endif; ?>
            </select>
        </div>
            <table id="worker-table">
                <thead>
                <tr>
                    <th>PESEL : </th>
                    <th>Imie: </th>
                    <th>Nazwisko: </th>
                    <th><?php if($function == "dostawca")
                              echo "Filia";
                              else
                              echo "Obszar"; ?></th>
                    <th>Id pojazdu: </th>
                </tr>
                <tr>
                    <td><input type="text" name="pesel"></td>
                    <td><input type="text" name="imie"></td>
                    <td><input type="text" name="nazwisko"></td>
                    <td><input type="text" name="id_miejsca"></td>
                    <td><input type="text" name="id_pojazdu"></td>
                    <td><input type="submit" value="Dodaj" name="add" class="add"></td>
                </tr>
                </thead>
                <?php foreach($data['workers'] as $worker) { ?>
                <tr class="worker">
                    <td><?php echo $worker['pesel']; ?></td>
                    <td><?php echo $worker['imie']; ?></td>
                    <td><?php echo $worker['nazwisko']; ?></td>
                    <td><?php if(isset($worker['id_obszaru']))
                              echo $worker['id_obszaru'];
                              else
                              echo $worker['id_filii']; ?></td>
                    <td><?php echo $worker['id_pojazdu']; ?></td>
                    <td class="crud">
                        <input class="delete" type="submit" name="delete" value="">
                    </td>
                </tr>
                <?php } ?>

            </table>
        </form>
	</div>