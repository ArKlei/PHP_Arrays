<?php
//$_GET
//$_POST

if(isset($_GET['skaicius']) ) {
	//if(is_array($_GET['skaicius'] ) )  - tik užkomentavus spausdina :), nes toliau echo yra skierta skaiciui, o ne masyvui. Su matikra, is_array mes uzakcentuojame, kad tai masyvas ir nespausdina
	echo $_GET['skaicius'];
}

?>

<form method="GET" action="">
	<input type="number" name="skaicius" value="" />
	<button type="submit">Siusti</button>
</form>