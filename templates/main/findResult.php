<?php include 'templates/header.php'; ?>
<?php  $result = $this->get('id'); ?>
    
	<div class="container">
		<div class="row">
			<div class="one-half column" style="margin-top:5%">
				<h3>Znalezione zlecenie</h3>
				
                id zlecenia: <?php echo $result; ?>
                
			</div>
		</div>
	</div>

<?php include 'templates/footer.php'; ?>