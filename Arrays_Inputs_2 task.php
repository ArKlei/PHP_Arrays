<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array Inputs Tasks with Bootstrap</title>
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

// 2 užduotis

/*Pasinaudojant Bootstrap, CSS, HTML pagalba pagrąžinkite savo aplikacijos išvaizdą*/
?>
<div class="container">
<?php
if(isset($_GET['skaicius']) AND is_array($_GET['skaicius'] ) ) {
		
		echo '<h1>An array of chosen numbers is: </h1>';
		print_r ($_GET['skaicius']);
		echo '<p>';
		echo 'The sum of chosen numbers: ';
		echo array_sum($_GET['skaicius']).'<p>';
		
		// Antras variantas foreach
		/*
		$suma=0;
		foreach ($_GET['skaicius'] as $value) {
			$suma += $value;
		} 
		echo 'Suma su foreach: </h4>'.$suma;	*/
}

// name="skaicius[]" paduoda masyvą
//Array ( [0] => 5 [1] => 4 [2] => 5 [3] => 12 [4] => 4 ) - belieka atlikti operacijas su duomenimis

?>
</div>


	
	<form>
	  <div class="container">
		<label for="InputValue1" class="form-label">Fill-in 1-st number</label>
		<input type="number" name="skaicius[]" class="form-control" id="InputNumber1" aria-describedby="number">
		<div id="value" class="form-text">Input 1-st number you want to add<p></div>
	  </div>
	  <div class="container">
		<label for="InputValue2" class="form-label">Fill-in 2-nd number</label>
		<input type="number" name="skaicius[]" class="form-control" id="InputNumber1" aria-describedby="number">
		<div id="value" class="form-text">Input 2-nd number you want to add<p></div>
	  </div>
	  <div class="container">
		<label for="InputValue3" class="form-label">Fill-in 3-rd number</label>
		<input type="number" name="skaicius[]" class="form-control" id="InputNumber1" aria-describedby="number">
		<div id="value" class="form-text">Input 3-rd number you want to add<p></div>
	  </div>
	  <div class="container">
		<label for="InputValue4" class="form-label">Fill-in 4-th number</label>
		<input type="number" name="skaicius[]" class="form-control" id="InputNumber1" aria-describedby="number">
		<div id="value" class="form-text">Input 4-th number you want to add<p></div>
	  </div>
	  <div class="container">
		<label for="InputValue5" class="form-label">Fill-in 5-th number</label>
		<input type="number" name="skaicius[]" class="form-control" id="InputNumber1" aria-describedby="number">
		<div id="value" class="form-text">Input 5-th number you want to add<p></div>
	  </div>
	  <div class="container">
	  <button type="submit" class="btn btn-primary">Get sum</button>
	  </div>
	</form>