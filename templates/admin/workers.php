<?php include 'templates/header.php'; ?>
<?php include('header.php'); ?>
	<div class="container">

        <h3>Lista pracowników</h3>


				<form action="workers" method="post">
                    
                Rodzaj pracownika:
                <select name="function">
                    <option value="kurier">Kurier</option>
                    <option value="dostawca">Dostawca</option>
                </select>
                    
					<table>
                        <thead>
                        <tr>
                            <td>PESEL : </td>
                            <td>Imie: </td>
                            <td>Nazwisko: </td>
                            <td>Id fili: </td>
                            <td>Id pojazdu: </td>
                        </tr>
                        </thead>
                        <tr>
                            <td><input type="text" name="pesel"></td>
                            <td><input type="text" name="imie"></td>
                            <td><input type="text" name="nazwisko"></td>
                            <td><input type="text" name="id_fili"></td>
                            <td><input type="text" name="id_pojazdu"></td>
                        </tr>
                        
                        <?php foreach($this->get('workers') as $worker) { ?>
                        <tr>
                            <td><?php echo $worker['pesel']; ?></td>
                            <td><?php echo $worker['imie']; ?></td>
                            <td><?php echo $worker['nazwisko']; ?></td>
                            <td><?php echo $worker['id_obszaru']; ?></td>
                            <td><?php echo $worker['id_pojazdu']; ?></td>
                        </tr>
                        <?php } ?>
                        
                    </table>
				    <input style="margin auto" type="submit" value="Znajdz">
				</form>
	</div>

<?php include 'templates/footer.php'; ?>