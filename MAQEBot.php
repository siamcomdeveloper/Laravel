<?php
$input = $argv[1];

/*
 * Conditions;
 * L : Step - 2;
 * R : Step + 2;
 * WN : Step + N;
*/

$Step = 0;
for($i = 0; $i < strlen($input); $i++){
    if ($input[$i] == "R") {
        $Step += 2;
    }
    else if($input[$i] == "L"){
        $Step -= 2;
    }
    else if($input[$i] == "W"){
        //Check this character is not the last character for avoid error array out of lenght.
        if( ($i+1) < strlen($input) ){
            $num = "";
            //Check next character to keep walk(N)
            for($j = $i+1; $j < strlen($input); $j++){
                if (preg_match('/[0-9]+/', $input[$j])){
                    $num .= $input[$j];
                    $i++;
                }
                else{ break; }
            }
            $Step += $num;
        }
    }
    else {
        echo "input invalid" . "\r\n";
        exit;
    }
}

/*
 * Equation to find current position x,y & direction
 * index anserTable = Step % 8;
 * Ex1
 * php MAQEBot.php RW15RW1
 * 2+15+2+1 = 20
 * 20 % 8 = 4
 * index = 4
 * X: 0 Y: -1 Direction: South
 * 
 * Ex2
 * php MAQEBot.php W5RW5RW2RW1R
 * 5+2+5+2+2+2+1+2 = 21
 * 21 % 8 = 5
 * index = 5
 * X: -1 Y: -1 Direction: South West
 * 
 * Ex3
 * php MAQEBot.php RRW11RLLW19RRW12LW1
 * 2+2+11+2-2-2+19+2+2+12-2+1 = 47
 * 47 % 8 = 7
 * index = 7
 * X: -1 Y: 1 Direction: North West
*/
$index = $Step % 8;

//Answer Table
$answerTable = array ( 0 => array ( "x" =>  0, "y" =>  1, "direction" => "North"),
                       1 => array ( "x" =>  1, "y" =>  1, "direction" => "North East"),
                       2 => array ( "x" =>  1, "y" =>  0, "direction" => "East"),
                       3 => array ( "x" =>  1, "y" => -1, "direction" => "South East"),
                       4 => array ( "x" =>  0, "y" => -1, "direction" => "South"),
                       5 => array ( "x" => -1, "y" => -1, "direction" => "South West"),
                       6 => array ( "x" => -1, "y" =>  0, "direction" => "West"),
                       7 => array ( "x" => -1, "y" =>  1, "direction" => "North West")
                );

echo 'X: ' . $answerTable[$index]["x"] . ' Y: ' . $answerTable[$index]["y"] . ' Direction: ' . $answerTable[$index]["direction"] . "\r\n";
?>