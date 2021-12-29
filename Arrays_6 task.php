<?php
 
// 6 užduotis
 
/*
Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. 
Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
*/
 
echo '<h2>6 užduotis</h2>';
 
$skaiciu_masyvas1 = [];
$skaiciu_masyvas2 = [];
$reiksmes=0;
 
for($i = 0; $i < 100; $i++) {
    $reiksmes = rand(100,999);
    $skaiciu_masyvas1[] = $reiksmes;
}
 
for($i = 0; $i < 100; $i++) {
    $reiksmes = rand(100,999);
    $skaiciu_masyvas2[] = $reiksmes;
}
 
$unikalios_reiksmes_1=0;
$unikalios_reiksmes_2=0;
 
$unikalios_reiksmes1=array_unique($skaiciu_masyvas1);
$unikalios_reiksmes2=array_unique($skaiciu_masyvas2);
 
foreach ($unikalios_reiksmes1 as $indeksas) {
	$unikalios_reiksmes_1++;
}
 
foreach ($unikalios_reiksmes2 as $indeksas) {
	$unikalios_reiksmes_2++;
}
 
echo '<p>Naujas skaičių masyvas 1:<br>';
print_r($skaiciu_masyvas1);
echo '<p>Naujas skaičių masyvas 2:<br>';
print_r($skaiciu_masyvas2);
 
echo '<p>Unikalių reikšmių yra viso 1 masyve: <br>'.$unikalios_reiksmes_1.'<p>';
print_r($unikalios_reiksmes1);
echo '<p>Unikalių reikšmių yra viso 2 masyve: <br>'.$unikalios_reiksmes_2.'<p>';
print_r($unikalios_reiksmes2);
 
 
?>

