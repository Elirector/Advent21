<?php
$infile = file("input");
$count = count($infile);
$input=[];
for ($i=0; $i<$count-2;$i++)
    $input[]=$infile[$i]+$infile[$i+1]+$infile[$i+2];

$j=0;
$count = count($input);
for ($i=1; $i< $count; $i++)
    if ($input[$i]>$input[$i-1]) $j++;

echo $j;