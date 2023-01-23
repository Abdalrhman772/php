<?php
$broAge = 25;
switch ($broAge) {
    case $broAge < 5:
        echo 'Stay at home';
        break;
    case $broAge == 5:
        echo 'Go to Kindergarden';
        break;
    case $broAge > 6 && $broAge <=  12:
        echo "Go to grade " . $broAge - 6;
        break;
    default:
        echo "not at primary school";
}
