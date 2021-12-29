<?php
//$_GET
//$_POST

if(isset($_GET['skaicius']) ) {
	if(is_array($_GET['skaicius'] ) )
		print_r ($_GET['skaicius']);
}

// name="skaicius[]" paduoda masyvą
//Array ( [0] => 5 [1] => 4 [2] => 5 [3] => 12 [4] => 4 )


?>

<form method="GET" action="">
	<input type="number" name="skaicius[]" value="" /><br>
	<input type="number" name="skaicius[]" value="" /><br>
	<input type="number" name="skaicius[]" value="" /><br>
	<input type="number" name="skaicius[]" value="" /><br>
	<input type="number" name="skaicius[]" value="" /><br>
	<button type="submit">Siusti</button>
</form>