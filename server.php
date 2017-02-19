<?php
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
echo $answerTable[7]["direction"];
?>