<?php include 'templates/header.php';
$zlecenie = $this->get('zlecenie'); ?>
    
	<div class="container">
		<div class="row">
			<div class="one-half column" style="margin-top:5%">
				<h3>Znalezione zlecenie</h3>
				
                id zlecenia: <?php echo $zlecenie->id; ?>
                
			</div>
		</div>
	</div>

<?php include 'templates/footer.php'; ?>