<?php
//Ask user for starting number and assign
fwrite(STDOUT, 'Starting number? ');
$startingNum = trim(fgets(STDIN));
//Ask user for ending number and assign
fwrite(STDOUT, 'Ending number? ');
$endingNum = trim(fgets(STDIN));
//Ask user for increment by and assign
fwrite(STDOUT, 'Increment by? (Press enter for default of 1) ');
$increment = trim(fgets(STDIN));

//Check if numbers are numeric. If not, print error and kill. If so, check increment is numeric or blank. If not, print error and kill 
//If increment is blank, default is 1
if (is_numeric($startingNum) and is_numeric($endingNum)) {
    if ($increment === "") {
        $increment = 1;     
    }
    else if (is_numeric($increment) == false) {
        echo "Error: Increment needs to be a number or blank for default of 1";
        exit(0);
    }
    for ($i = $startingNum; $i <= $endingNum; $i = $i + $increment) {
        echo($i . PHP_EOL);
    }
}else {
    echo "Error: Starting and/or ending numbers need to be actual numbers";
    exit(0);
}









