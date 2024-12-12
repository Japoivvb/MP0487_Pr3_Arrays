<?php
$person = array("nombre" => "Sara", "apellido" => "Martinez", "edad" => 23,"ciudad" => "Bcn");

$counter=1;
foreach ($person as $key => $value) {
    # code...
    echo "dato " . $counter . "º:" . $value . "<br>";
    $counter++;
}
foreach ($person as $key => $value) {
    # code...
    echo $key .  ":" . $value . "<br>";
    $counter++;
    
}

$person["edad"] = 24;
$counter=1;
foreach ($person as $key => $value) {
    # code...
    echo "dato " . $counter . "º:" . $value . "<br>";
    $counter++;
}


?>