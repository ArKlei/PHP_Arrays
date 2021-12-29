<?php

// 3 užduotis

/*Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. 
Suskaičiuokite kiek yra kiekvienos raidės.*/

echo '<h2>3 užduotis</h2>';

$skaiciu_masyvas = [];
$raidziu_masyvas = [];
$reiksmes=0;
$a=0;
$b=0;
$c=0;
$d=0;

for($i = 0; $i < 200; $i++) {

    $reiksmes = rand(1,4);
    $skaiciu_masyvas[] = $reiksmes;
    
    if ($reiksmes==1) {
    	$raidziu_masyvas[] = 'A';
		$a++;
    } else if ($reiksmes==2) {
    	$raidziu_masyvas[] = 'B';
		$b++;
    } else if ($reiksmes==3) {
    	$raidziu_masyvas[] = 'C';
		$c++;
    } else {
    	$raidziu_masyvas[] = 'D';
		$d++;
    }

}

echo '<p>Naujas skaičių masyvas:<br>';
print_r($skaiciu_masyvas);
echo '<p>Naujas raidžių masyvas:<br>';
print_r($raidziu_masyvas);
echo '<p>A-'.$a.', B-'.$b.', C-'.$c.', D-'.$d;
?>

