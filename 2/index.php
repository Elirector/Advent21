<?php
$infile = file("input");
$forward = 0;
$depth = 0;
$aim = 0;
foreach ($infile as $command) {
    $comarg = explode(" ", $command);
    switch ($comarg[0]) {
        case "forward":
            $forward += $comarg[1];
            $depth += $aim*$comarg[1];
            break;
        case "down":
            $aim += $comarg[1];
            break;
        case "up":
            $aim -= $comarg[1];
            break;
    }
}
echo $forward, ",", $depth, ",", $forward * $depth;