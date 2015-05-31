<?php include('templates/header.php'); ?>




<div id="first_block">
	<div class="container">
		<div class="row">
			<div class="one-half column" style="margin-top:3%">
				<h2>Zaufało nam już</h2>
				<h2>Przekazalismy</h2>
				<h2>W pocie czoła pracuje </h2>
			</div>
            
			

            
			<div class="one-half column" style="margin-top:3%; color: #f07830">
				<h2><?php  $result = $this->get('statisticsIndex'); echo $result[0]; ?> klientów</h2>
				<h2><?php echo $result[1]; ?> paczek</h2>
				<h2><?php echo $result[2]; ?> pracowników</h2>
			</div>
			
			<div class="one-half column" style="margin-top:3%">
				<img src="templates/images/courier.png">
			</div>

		</div>
	</div>
</div>

<div id="second_block">
	<div class="container">
		<div class="row">
			<div class="one-full column" style="margin-top:5%">
				<h1>Działamy już w całej Polsce!</h1>
			</div>
		</div>
			
		<div class="row">
			<div class="one-half column" style="margin-top:1%; padding-bottom: 5%">
				<img src="templates/images/map.jpg">
			</div>
			
			<div class="one-half column" style="margin-top:5%">
				<h4>Filia w <span style="color: #f07830">każdym</span> województwie</h4>
				<h4>Działamy w <span style="color: #f07830">243</span> miastach</h4>
				<h4>Dotrzemy <span style="color: #f07830">wszędzie</span>!</h4>
				<h4>Bo dla nas granice <span style="color: #f07830">nie istnieją</span></h4>
			</div>
		</div>
	</div>
</div>

<div id="zero_block" style="text-align: center;">
	<div class="container">
		<div class="row">
			<div class="one-full column" style="margin-top:5%">
				<h2>Zlokalizuj swoją paczkę!</h2>
				<h4>Podaj kod, który otrzymałeś emailem!</h4>
				
				  <form method="post">
					ID przesyłki: </br><input type="text" name="id"><br>
					<input style="margin auto" type="submit" value="Szukaj">
				  </form>
				<h5>Nasze specjalnie przygotowane serwery zrobia wszystko żebys myslal, że nie mamy na ciebie <span style="color: #f07830">wyjebane</span></h5>
			</div>
			
		</div>
	</div>
</div>


<?php include('templates/footer.php'); ?>
