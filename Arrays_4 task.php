<?php

// 4 užduotis

/*Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.*/

echo '<h2>3 užduotis</h2>';

$skaiciu_masyvas = [];
$raidziu_masyvas = [];
$reiksmes=0;

for($i = 0; $i < 200; $i++) {

    $reiksmes = rand(1,4);
    $skaiciu_masyvas[] = $reiksmes;
	
    
    if ($reiksmes==1) {
    	$raidziu_masyvas[] = 'A';
    } else if ($reiksmes==2) {
    	$raidziu_masyvas[] = 'B';
    } else if ($reiksmes==3) {
    	$raidziu_masyvas[] = 'C';
    } else {
    	$raidziu_masyvas[] = 'D';
    }

}

sort($skaiciu_masyvas);
sort($raidziu_masyvas);

echo '<p>Naujas skaičių masyvas:<br>';
print_r($skaiciu_masyvas);
echo '<p>Naujas raidžių masyvas:<br>';
print_r($raidziu_masyvas);
?>

