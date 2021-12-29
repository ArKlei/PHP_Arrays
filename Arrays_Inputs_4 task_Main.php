<!-- Main part -->
  
<!--

		//$_GET - Grazina is address bar linko paduotus parametrus
		//$_POST - Grazina siunciamus parametrus, kuriu jau nematome adress bar'e
		//$_REQUEST - Grazina visus siunciamus parametrus                      


		// 4 užduotis
		/*Sukurkite prisijungimo formą naudojantis $_SESSION. 
		Prisijungimo duomenys turi būti siunčiami POST metodu. 
		Sėkmingai prisijungus, vartotojas turi būti atvaizduojama Prekių informacija kuri buvo Jūsų šablone prieš tai. 
		*/
-->
		<p><div class="container">
		<?php 
			if(isset($_POST['mailuid']) AND isset($_POST['pwd'])) {
				
				if ($_POST['mailuid'] == 'arunas.kleinas@gmail.com' AND $_POST['pwd'] == 'Pasaulis') {
					echo '<h6>You are logged in as: '.$_POST['mailuid'].'</h6>';
				} else {
					header("Location: Arrays_Inputs_4 task_Login_again.php");
				}
			}
		?>				
			<form action="Arrays_Inputs_4 task_Index.php">
				<div class="d-grid gap-2 d-md-flex justify-content-md-end">
					<button class="btn btn-primary" name="logout-submit" type="button" id="button-addon1">Logout</button>
				</div>
			</form>
		</div>
		<div class="fluid" style="margin:50px"></div>
		<div class="container">
		<h3>Special offer:</h3>
		</div>
		<form action="Arrays_Inputs_4 task_Cart.php">
			
			<div class="container">
				<select name="item[]" class="form-select" aria-label="Default select example">
					<option selected>Choose gaming computer!</option>
					<option value="1">Price: 1499.99$ - Skytech Chronos Mini Gaming PC Desktop - Intel Core-i7 9700KF 3.6GHz, RTX 2060 6GB, 16GB DDR4 3000, 1TB SSD, AC WiFi, Win 10 Home, Black</option>
					<option value="2">Price: 1699.99$ - SkyTech Shadow 3.0 Gaming Computer PC Desktop - Ryzen 7 3700X 8-Core 3.6GHz, RTX 3060 12GB, 1TB SSD, 16GB DDR4 3000, RGB Fans, AC WiFi, 600W Gold PSU, Windows 10 Home 64-bit, Black</option>
					<option value="3">Price: 2019.99$ - Skytech Azure Gaming PC Desktop - AMD Ryzen 5 3600X 3.8GHz, RTX 3070 8GB, 16GB 3200, 1TB Gen4 SSD, 240mm AIO, 650W Gold PSU, Windows 10 Home 64-bit, Black</option>
				</select><p>
			</div>
			
			<div class="container">
				<select name="item[]" class="form-select" aria-label="Default select example">
					<option selected>Choose gaming monitor!</option>
					<option value="4">Price: 299.99$ - Acer ED323QUR Abidpx 31.5 Inches WQHD (2560 x 1440) Curved 1800R VA Gaming Monitor with AMD Radeon FREESYNC Technology - 4ms; 144Hz Refresh Rate; Display Port, HDMI Port & DVI Port, Black</option>
					<option value="5">Price: 268.99$ - LG 32GN63T-B 32'' Ultragear QHD 165Hz HDR10 Monitor with NVIDIA G-SYNC Compatibility and AMD FreeSync Premium (Renewed)</option>
					<option value="6">Price: 239.99$ - Z-Edge UG27 27-inch Curved Gaming Monitor 16:9 1920x1080 200/144Hz 1ms Frameless LED Gaming Monitor, AMD Freesync Premium Display Port HDMI Build-in Speakers</option>
				</select><p>
			</div>
			
			<div class="container">
				<select name="item[]" class="form-select" aria-label="Default select example">
					<option selected>Choose gaming keyboard!</option>
					<option value="7">Price: 409.98$ - SteelSeries Apex Pro Mechanical Gaming Keyboard – Adjustable Actuation Switches – World’s Fastest Mechanical Keyboard – OLED Smart Display – RGB Backlit with Arctis Pro+ GameDAC Wired Gaming Headset</option>
					<option value="8">Price: 159.99$ - SteelSeries Apex Pro Mechanical Gaming Keyboard – Adjustable Actuation Switches – World’s Fastest Mechanical Keyboard – OLED Smart Display – RGB Backlit</option>
					<option value="9">Price: 159.99$ - SteelSeries Apex 7 Mechanical Gaming Keyboard – OLED Smart Display – USB Passthrough and Media Controls – Linear and Quiet – RGB Backlit (Red Switch)</option>
				</select><p>
			</div>
			
			<div class="container">
				<select name="item[]" class="form-select" aria-label="Default select example">
					<option selected>Choose gaming mouse!</option>
					<option value="10">Price: 79.99$ - Corsair Nightsword RGB - Comfort Performance Tunable FPS/MOBA Optical Ergonomic Gaming Mouse with Backlit RGB LED, 18000 DPI, Black</option>
					<option value="11">Price: 271.67$ - Corsair Virtuoso RGB Wireless SE Gaming Headset - Gunmetal & Nightsword RGB - Comfort Performance Tunable FPS/MOBA Optical Ergonomic Gaming Mouse with Backlit RGB LED, 18000 DPI, Black</option>
					<option value="12">Price: 37.39$ - Corsair Ironclaw RGB - FPS and MOBA Gaming Mouse - 18,000 DPI Optical Sensor - Backlit RGB LED, Black</option>
				</select><p>
			</div>
			
			<div class="container">
				<select name="discount" class="form-select" aria-label="Default select example">
					<option selected>Apply Coupon for discount!</option>
					<option value="1">BLACKFIRDAY - 30%</option>
					<option value="2">ACHILAS - 20%</option>
					<option value="3">META - 10%</option>
				</select><p>
			</div>
			
			<div class="container">
			  <button type="submit" class="btn btn-primary"><h4>Proceed to checkout</h4></button>
			</div>
		</form>
		
		<div class="container">
<?php
		if(isset($_GET['item']) AND is_array($_GET['item'] ) ) {
				
				$item1Price1=1449.99;
				$item1Price2=979.99;
				$item1Price3=1449.99;
				
				$item2Price1=299.99;
				$item2Price2=187.75;
				$item2Price3=206.99;
			
				$item3Price1=159.99;
				$item3Price2=39.99;
				$item3Price3=89.99;
				
				$item4Price1=79.99;
				$item4Price2=29.99;
				$item4Price3=34.97;
				
				$array_total=[];
				$json=0;
				
				foreach ($_GET['item'] as $index => $value) {
				
					if ($value == 1) {
						$array_total[]=$item1Price1;
					} else if ($value == 2){
						$array_total[]=$item1Price2;
					} else if ($value == 3){
						$array_total[]=$item1Price3;
					} else {
						$array_total[]=0;
					}
				
					if ($value == 4) {
						$array_total[]=$item2Price1;
					} else if ($value == 5){
						$array_total[]=$item2Price2;
					} else if ($value == 6){
						$array_total[]=$item2Price3;
					} else {
						$array_total[]=0;
					}
				
					if ($value == 7) {
						$array_total[]=$item3Price1;
					} else if ($value == 8){
						$array_total[]=$item3Price2;
					} else if ($value == 9){
						$array_total[]=$item3Price3;
					} else {
						$array_total[]=0;
					}
				
					if ($value == 10) {
						$array_total[]=$item4Price1;
					} else if ($value == 11){
						$array_total[]=$item4Price2;
					} else if ($value == 12){
						$array_total[]=$item4Price3;
					} else {
						$array_total[]=0;
					}
				
				}
				
				
			
				echo '<p><h2>Subtotal (4 items), $:</h2>';
				echo '<p>';
				
				foreach ($_GET['item'] as $index => $value) {
				
					if ($value == 1) {
						echo "<div class='row justify-content-start'><div class='col-3'><p><img src='https://m.media-amazon.com/images/I/81ULA2wYPcL._AC_SL1500_.jpg' class='img-thumbnail' alt='Computer' style='width:100px;height:100px';><p>Computer</div>";
					} else if ($value == 2){
						echo "<div class='row justify-content-start'><div class='col-3'><p><img src='https://m.media-amazon.com/images/I/81NVDYTkRnL._AC_SL1500_.jpg' class='img-thumbnail'  alt='Computer' style='width:100px;height:100px';><p>Computer</div>";
					} else if ($value == 3){
						echo "<div class='row justify-content-start'><div class='col-3'><p><img src='https://m.media-amazon.com/images/I/91MtsbPu-8L._AC_SL1500_.jpg' class='img-thumbnail' alt='Computer' style='width:100px;height:100px';><p>Computer</div>";
					} else {
						$array_total[]=0;
					}
				
					if ($value == 4) {
						echo "<div class='col-3'><p><img src='https://m.media-amazon.com/images/I/71HV4K+0QpL._AC_SL1500_.jpg' class='img-thumbnail' alt='Monitor' style='width:100px;height:100px';><p>Monitor</div>";
					
					} else if ($value == 5){
						echo "<div class='col-3'><p><img src='https://m.media-amazon.com/images/I/61Q-a6OV18L._AC_SL1500_.jpg' class='img-thumbnail'  alt='Monitor' style='width:100px;height:100px';><p>Monitor</div>";
					
					} else if ($value == 6){
						echo "<div class='col-3'><p><img src='https://m.media-amazon.com/images/I/71OZdO1cTLL._AC_SL1500_.jpg' class='img-thumbnail' alt='Monitor' style='width:100px;height:100px';><p>Monitor</div>";
					} else {
						$array_total[]=0;
					}
				
					if ($value == 7) {
						echo "<div class='col-3'><p><img src='https://m.media-amazon.com/images/I/51sWdAUiu+L._AC_SL1001_.jpg' class='img-thumbnail' alt='Keyboard' style='width:100px;height:100px';><p>Keyboard</div>";
					} else if ($value == 8){
						echo "<div class='col-3'><p><img src='https://m.media-amazon.com/images/I/81yOuAUQAiL._AC_SL1500_.jpg' class='img-thumbnail' alt='Keyboard' style='width:100px;height:100px';><p>Keyboard</div>";
					} else if ($value == 9){
						echo "<div class='col-3'><p><img src='https://m.media-amazon.com/images/I/81yOuAUQAiL._AC_SL1500_.jpg' class='img-thumbnail' alt='Keyboard' style='width:100px;height:100px';><p>Keyboard</div>";
					} else {
						$array_total[]=0;
					}
				
					if ($value == 10) {
						echo "<div class='col-3'><p><img src='https://m.media-amazon.com/images/I/61a0KNfNNNL._AC_SL1500_.jpg' class='img-thumbnail' alt='Mouse' style='width:100px;height:100px';><p>Mouse</div></div><p>";
					} else if ($value == 11){
						echo "<div class='col-3'><p><img src='https://m.media-amazon.com/images/I/51DTwv42bjL._AC_SL1001_.jpg' class='img-thumbnail' alt='Mouse' style='width:100px;height:100px';><p>Mouse</div></div><p>";
					} else if ($value == 12){
						echo "<div class='col-3'><p><img src='https://m.media-amazon.com/images/I/61XfoqYoX2L._AC_SL1500_.jpg' class='img-thumbnail' alt='Mouse' style='width:100px;height:100px';><p>Mouse</div></div><p>";
					} else {
						$array_total[]=0;
					}
					
				}
				
				$db = './db_eshop.json';
				$json = json_encode($array_total);
				$file = file_put_contents($db,$json);
				
				echo '<p>The total sum before discount: ';
				echo array_sum($array_total).' $<p>';
				
				
				
			if(isset($_GET['discount']) AND (array_sum($array_total) > 10)) {
				
				if ($_GET['discount'] == 1) {
					echo 'You have applied 30% discount';
					echo '<p><strong>The total sum after discount: '.(array_sum($array_total)*0.7).' $';
				} else if ($_GET['discount'] == 2) {
					echo 'You have applied 20% discount';
					echo '<p><strong>The total sum after discount: '.(array_sum($array_total)*0.8).' $';
				} else if ($_GET['discount'] == 3) {
					echo 'You have applied 10% discount';
					echo '<p><strong>The total sum after discount: '.(array_sum($array_total)*0.9).' $';
				} else {
					echo "You didn't apply the discount!";
					echo '<p><strong>So, the total sum is the same: '.array_sum($array_total).' $';					
				}	
				
			} else {
				echo 'The total sum is lower than 10 $, so no discount possible';
			}
		
		}
		
		
		

?>
