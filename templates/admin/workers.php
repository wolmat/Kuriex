<?php include 'templates/header.php'; ?>
<?php include('header.php'); 
$function = $this -> get('function'); ?>
	<div class="container">
        <h3>Lista pracowników</h3>
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
                        </thead>
                        <tr>
                            <td><input type="text" name="pesel"></td>
                            <td><input type="text" name="imie"></td>
                            <td><input type="text" name="nazwisko"></td>
                            <td><input type="text" name="id_miejsca"></td>
                            <td><input type="text" name="id_pojazdu"></td>
                        </tr>
                        
                        <?php foreach($this->get('workers') as $worker) { ?>
                        <tr>
                            <td><?php echo $worker['pesel']; ?></td>
                            <td><?php echo $worker['imie']; ?></td>
                            <td><?php echo $worker['nazwisko']; ?></td>
                            <td><?php if(isset($worker['id_obszaru']))
                                      echo $worker['id_obszaru'];
                                      else 
                                      echo $worker['id_filii']; ?></td>
                            <td><?php echo $worker['id_pojazdu']; ?></td>
                        </tr>
                        <?php } ?>
                        
                    </table>
				    <input style="margin auto" type="submit" value="Znajdz">
				</form>
	</div>

<?php include 'templates/footer.php'; ?>