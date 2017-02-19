<?php
$answerTable = array ( 0 => array ( "x" =>  0, "y" =>  1, "direction" => "North"),
                       1 => array ( "x" =>  1, "y" =>  1, "direction" => "North East"),
                       2 => array ( "x" =>  1, "y" =>  0, "direction" => "East"),
                       3 => array ( "x" =>  1, "y" => -1, "direction" => "South East"),
                       4 => array ( "x" =>  0, "y" => -1, "direction" => "South"),
                       5 => array ( "x" => -1, "y" => -1, "direction" => "South West"),
                       6 => array ( "x" => -1, "y" =>  0, "direction" => "West"),
                       7 => array ( "x" => -1, "y" =>  1, "direction" => "North West")
                );
/*
Conditions;
L : Step - 2;
R : Step + 2;
Wx : Step + x;

equation; find direction & position
index = Step % 8;
*/

for ($i=0; $i < 3; $i++) {
        $line = readline("Command: ");
        readline_add_history($line);
}
/*
//preg_match($pattern, $subject)
if (preg_match('/[0-9]+$/', $line)) {
  // contains only 0-9
} else {
  // contains other stuff
}
*/
echo $answerTable[0]["x"] . "\r\n";
echo $answerTable[0]["y"] . "\r\n";
echo $answerTable[7]["direction"] . "\r\n";
?>