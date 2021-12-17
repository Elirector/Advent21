<?php
$infile = file("input");
$count = count($infile);
$digits = strlen(trim($infile[0]));
$counter_array = array_fill(0, $digits, 0);

for ($i=0;$i<$count;$i++) {
    for ($j=0;$j<$digits; $j++) {
        if ($infile[$i][$j]==1) $counter_array[$j]++;
    }
}
$g=[];
$e=[];
for ($j=0;$j<$digits; $j++) {
    $g[$j] = ($counter_array[$j]>$count/2)?1:0;
    $e[$j] = 1-$g[$j];
}

$g = implode("", $g);
$e = implode("", $e);
echo bindec($g)*bindec($e);