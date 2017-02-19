<?php
$input = $argv[1];

/*
Conditions;
L : Step - 2;
R : Step + 2;
WN : Step + N;

equation; find direction & position
index anserTable = Step % 8;
*/

$Step = 0;
for($i = 0; $i < sizeof($input); $i++){
    if ($input[$i] == "R") {
        $Step += 2;
    }
    else if($input[$i] == "L"){
        $Step -= 2;
    }
    else if($input[$i] == "W"){
        $num = "";
        for($j = $i+1; $j < sizeof($input); $j++){
            if (preg_match('/[0-9]+/', $input[$j])){
                $num .= $input[$j];
            }
        }
        $Step += $num;
    }
    else {
        echo "input invalid" . "\r\n";
        exit;
    }
}

echo $Step . "\r\n";

$answerTable = array ( 0 => array ( "x" =>  0, "y" =>  1, "direction" => "North"),
                       1 => array ( "x" =>  1, "y" =>  1, "direction" => "North East"),
                       2 => array ( "x" =>  1, "y" =>  0, "direction" => "East"),
                       3 => array ( "x" =>  1, "y" => -1, "direction" => "South East"),
                       4 => array ( "x" =>  0, "y" => -1, "direction" => "South"),
                       5 => array ( "x" => -1, "y" => -1, "direction" => "South West"),
                       6 => array ( "x" => -1, "y" =>  0, "direction" => "West"),
                       7 => array ( "x" => -1, "y" =>  1, "direction" => "North West")
                );
//echo $answerTable[0]["x"] . "\r\n";
//echo $answerTable[0]["y"] . "\r\n";
//echo $answerTable[7]["direction"] . "\r\n";
?>