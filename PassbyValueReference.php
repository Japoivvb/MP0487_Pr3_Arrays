<?php
$variable=5;
// pass by value
echo "the value of variable:" . $variable;
multiplyByTwo($variable);
$variable = 10;
var_dump($variable);

function multiplyByTwo(&$variable){
    $variable = $variable *2;
    echo "the value of variable inside function:". $variable;
    echo "<br>";
}

?>