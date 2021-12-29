<?php
 
// 8 užduotis
 
/*
Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
*/
 
echo '<h2>7 užduotis</h2>';
 
$skaiciu_masyvas1 = [];
$skaiciu_masyvas2 = [];
$skaiciu_masyvas3 = [];
$reiksmes=0;
$reiksme1=0;
$reiksme2=0;
$unikaliu=0;
$vienodu=0;
 
for($i = 0; $i < 100; $i++) {
    $reiksmes = rand(100,999);
    $skaiciu_masyvas1[] = $reiksmes;
}
 
for($i = 0; $i < 100; $i++) {
    $reiksmes = rand(100,999);
    $skaiciu_masyvas2[] = $reiksmes;
}
 
foreach ($skaiciu_masyvas1 as $indeksas => $reiksme1) {
	
	if (in_array($reiksme1,$skaiciu_masyvas2)) {
       	$vienodu++;
		$skaiciu_masyvas3[]=$reiksme1;
    } else {
        $unikaliu++;
    }
}
 
echo '<p>Naujas skaičių masyvas 1:<br>';
print_r($skaiciu_masyvas1);
echo '<p>Naujas skaičių masyvas 2:<br>';
print_r($skaiciu_masyvas2);
echo '<p>Naujas skaičių masyvas 3:<br>';
print_r($skaiciu_masyvas3);
echo '<p>Nesikartojo : <br>'.$unikaliu.' reikšmių iš 100, o kartojosi: '.$vienodu;
 
?>