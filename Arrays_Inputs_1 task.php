<?php
//PHP visu zinuciu atvaizdavimui naudokite:
//ini_set('display_errors', true); 
//error_reporting(E_ALL);
//$_GET - Grazina is address bar linko paduotus parametrus
//$_POST - Grazina siunciamus parametrus, kuriu jau nematome adress bar'e
//$_REQUEST - Grazina visus siunciamus parametrus                      
//Sumuojame perduodamas reiksmes
//print_r($_GET);

// 1 užduotis

/*Susumuokite įvestų input elementų reikšmes gautų GET metodu*/

if(isset($_GET['skaicius']) AND is_array($_GET['skaicius'] ) ) {
		
		echo '<h1>Paduotas masyvas: </h1>';
		print_r ($_GET['skaicius']);
		echo '<p>';
		echo 'Paduotų reikšmių suma masyve yra: ';
		echo array_sum($_GET['skaicius']).'<p>';
		
		// Antras variantas foreach
		
		$suma=0;
		foreach ($_GET['skaicius'] as $value) {
			$suma += $value;
		} 
		echo 'Suma su foreach: </h4>'.$suma;	
}

// name="skaicius[]" paduoda masyvą
//Array ( [0] => 5 [1] => 4 [2] => 5 [3] => 12 [4] => 4 ) - belieka atlikti operacijas su duomenimis

?>

<form method="GET" action="">
	<input type="number" name="skaicius[]" value="" /><br>
	<input type="number" name="skaicius[]" value="" /><br>
	<input type="number" name="skaicius[]" value="" /><br>
	<input type="number" name="skaicius[]" value="" /><br>
	<input type="number" name="skaicius[]" value="" /><br>
	<button type="submit">Siusti</button>
</form>