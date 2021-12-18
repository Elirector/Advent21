<?php
$infile = file("input");
$digits = strlen(trim($infile[0]));
function getMostPopular(array $lines, int $index) {
    $count = count($lines);
    $counter= 0;
    for ($i=0;$i<$count;$i++) {
        if ($lines[$i][$index]==1) $counter++;
    }
    return ($counter>=$count/2)?1:0;

}


$oxy = array_slice($infile, 0);
$co2 = array_slice($infile,0 );
$d = 0;
while (($c= count($oxy))>1 && $d<$digits) {
    $control = getMostPopular($oxy,$d);
    for ($i=0;$i<$c;$i++) {
        if ($oxy[$i][$d]!=$control) unset($oxy[$i]);
    }
    $oxy = array_values($oxy);
    $d++;
}

$d=0;
while (($c= count($co2))>1 && $d<$digits) {
    $control = 1-getMostPopular($co2,$d);
    for ($i=0;$i<$c;$i++) {
        if ($co2[$i][$d]!=$control) unset($co2[$i]);
    }
    $co2 = array_values($co2);
    $d++;
}

$g = $oxy[0];
$e = $co2[0];
echo bindec($g)*bindec($e);