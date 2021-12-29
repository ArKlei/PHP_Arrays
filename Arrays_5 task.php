<?php

// 5 užduotis

/*Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. (Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. 
Suskaičiuokite kiek yra kiekvienos raidės.)
Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.
*/


echo '<h2>5 užduotis</h2>';

$skaiciu_masyvas1 = [];
$skaiciu_masyvas2 = [];
$skaiciu_masyvas3 = [];
$raidziu_masyvas1 = [];
$raidziu_masyvas2 = [];
$raidziu_masyvas3 = [];
$raidziu_masyvas = [];
$reiksmes=0;
$a=0;
$b=0;
$c=0;
$d=0;

for($i = 0; $i < 200; $i++) {
    $reiksmes = rand(1,4);
    $skaiciu_masyvas1[] = $reiksmes;
	
	if ($reiksmes==1) {
    	$raidziu_masyvas1[] = 'A';
		$a++;
    } else if ($reiksmes==2) {
    	$raidziu_masyvas1[] = 'B';
		$b++;
    } else if ($reiksmes==3) {
    	$raidziu_masyvas1[] = 'C';
		$c++;
    } else {
    	$raidziu_masyvas1[] = 'D';
		$d++;
    }
}

for($i = 0; $i < 200; $i++) {
    $reiksmes = rand(1,4);
    $skaiciu_masyvas2[] = $reiksmes;
	
	if ($reiksmes==1) {
    	$raidziu_masyvas2[] = 'A';
		$a++;
    } else if ($reiksmes==2) {
    	$raidziu_masyvas2[] = 'B';
		$b++;
    } else if ($reiksmes==3) {
    	$raidziu_masyvas2[] = 'C';
		$c++;
    } else {
    	$raidziu_masyvas2[] = 'D';
		$d++;
    }
}

for($i = 0; $i < 200; $i++) {
    $reiksmes = rand(1,4);
    $skaiciu_masyvas3[] = $reiksmes;
	
	if ($reiksmes==1) {
    	$raidziu_masyvas3[] = 'A';
		$a++;
    } else if ($reiksmes==2) {
    	$raidziu_masyvas3[] = 'B';
		$b++;
    } else if ($reiksmes==3) {
    	$raidziu_masyvas3[] = 'C';
		$c++;
    } else {
    	$raidziu_masyvas3[] = 'D';
		$d++;
    }
}


$unikalios_reiksmes=0;
$unikali_kombinacija=0;
$unikalios_kombinacijos[]=0;

for($i = 0; $i < 200; $i++) {

	$raidziu_masyvas[$i]= $raidziu_masyvas1[$i].$raidziu_masyvas2[$i].$raidziu_masyvas3[$i];
	
	if (raidziu_masyvas1[$i] != $raidziu_masyvas2[$i] &&
		raidziu_masyvas2[$i] != $raidziu_masyvas3[$i] &&
		raidziu_masyvas3[$i] != $raidziu_masyvas1[$i]) {
			$unikalios_reiksmes++;
		}
}

$unikalios_kombinacijos=array_unique($raidziu_masyvas);

foreach ($unikalios_kombinacijos as $indeksas) {
	$unikali_kombinacija++;
}

echo '<p>Naujas skaičių masyvas 1:<br>';
print_r($skaiciu_masyvas1);
echo '<p>Naujas skaičių masyvas 2:<br>';
print_r($skaiciu_masyvas2);
echo '<p>Naujas skaičių masyvas 3:<br>';
print_r($skaiciu_masyvas3);

echo '<p>Naujas raidžių masyvas 1:<br>';
print_r($raidziu_masyvas1);
echo '<p>Naujas raidžių masyvas 2:<br>';
print_r($raidziu_masyvas2);
echo '<p>Naujas raidžių masyvas 3:<br>';
print_r($raidziu_masyvas3);
echo '<p>Naujas raidžių masyvas bendras:<br>';
print_r($raidziu_masyvas);
echo '<p>Unikalių reikšmių yra viso: <br>'.$unikalios_reiksmes.'<p>';
print_r($unikalios_kombinacijos);
echo '<p>Unikalių kombinacijų yra viso: <br>'.$unikali_kombinacija.'<p>';


?>

