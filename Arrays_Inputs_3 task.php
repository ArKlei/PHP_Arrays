<!doctype html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>E-store</title>
		<!-- Bootstrap CDN nuoroda -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

	<body class="bg-light">
  
<?php
		//PHP visu zinuciu atvaizdavimui naudokite:
		//ini_set('display_errors', true); 
		//error_reporting(E_ALL);
		//$_GET - Grazina is address bar linko paduotus parametrus
		//$_POST - Grazina siunciamus parametrus, kuriu jau nematome adress bar'e
		//$_REQUEST - Grazina visus siunciamus parametrus                      
		//Sumuojame perduodamas reiksmes
		//print_r($_GET);

		// 3 užduotis

		/*Sukurkite laukelį nuolaidos kuponas. Galiojantys nuolaidos kuponų kodai: 
		“BLACKFIRDAY”, “ACHILAS”, “META”. 
		Sutikrinkite ar įvestas galiojantis nuolaidos koponas 
		ir jei taip pritaikykite nuolaidą finalinei sumai. 
		Nuolaida galioja tik prekėms kurių įvesta suma yra didesnė nei 10 eurų.
		*/
?>
		<div class="container">
<?php
		if(isset($_GET['skaicius']) AND is_array($_GET['skaicius'] ) ) {
				
				echo '<p><h2>The total price calculator</h2>';
				echo '<p>';
				echo '<p>The total sum before discount: ';
				echo array_sum($_GET['skaicius']).' EUR<p>';
				
			if(isset($_GET['discount']) AND (array_sum($_GET['skaicius']) > 10)) {
				
				if ($_GET['discount'] == 1) {
					echo 'You have applied 30% discount';
					echo '<p>The total sum after discount: '.(array_sum($_GET['skaicius'])*0.7).' EUR';
				} else if ($_GET['discount'] == 2) {
					echo 'You have applied 20% discount';
					echo '<p>The total sum after discount: '.(array_sum($_GET['skaicius'])*0.8).' EUR';
				} else if ($_GET['discount'] == 3) {
					echo 'You have applied 10% discount';
					echo '<p>The total sum after discount: '.(array_sum($_GET['skaicius'])*0.9).' EUR';
				} else {
					echo "You didn't apply the discount!";
					echo '<p>So, the total sum is the same: '.(array_sum($_GET['skaicius'])).' EUR';					
				}	
				
			} else {
				echo 'The total sum is lower than 10 EUR, so no discount possible';
			}
		
		}
		

?>
		</div>

		<form>
			
			<div class="container">
				<label for="InputValue1" class="form-label">Fill-in 1-st item price</label>
				<input type="number" name="skaicius[]" class="form-control" id="InputNumber1" aria-describedby="number">
			</div>
			
			<div class="container">
				<label for="InputValue2" class="form-label">Fill-in 2-nd item price</label>
				<input type="number" name="skaicius[]" class="form-control" id="InputNumber1" aria-describedby="number">
			</div>
			
			<div class="container">
				<label for="InputValue3" class="form-label">Fill-in 3-rd item price</label>
				<input type="number" name="skaicius[]" class="form-control" id="InputNumber1" aria-describedby="number">
			</div>
			
			<div class="container">
				<label for="InputValue4" class="form-label">Fill-in 4-th item price</label>
				<input type="number" name="skaicius[]" class="form-control" id="InputNumber1" aria-describedby="number">
			</div>
			
			<div class="container">
				<label for="InputValue5" class="form-label">Fill-in 5-th item price</label>
				<input type="number" name="skaicius[]" class="form-control" id="InputNumber1" aria-describedby="number"><p>
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
			  <button type="submit" class="btn btn-primary"><h4>Get sum</h4></button>
			</div>
		</form>
		
	</body>

</html>