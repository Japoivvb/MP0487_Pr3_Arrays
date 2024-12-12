<?php
echo '<h1>Ejercicio 1</h1>';
$person = array("nombre"=>"Sara", "apellido"=>"Martinez", "edad"=>23, "ciudad"=>"Barcelona");
$i = 1;
foreach($person as $value){
    echo 'dato ' . $i . 'º: '. $value . '<br>';
    $i++;
}
echo '<h1>Ejercicio 2</h1>';
foreach($person as $key => $value){
    echo $key . ': '. $value . '<br>';
}
echo '<h1>Ejercicio 3</h1>';
$i = 1;
$person['edad']=24;
foreach($person as $value){
    echo 'dato ' . $i . 'º: '. $value . '<br>';
    $i++;
}
echo '<h1>Ejercicio 4</h1>';
unset($person['ciudad']);
var_dump($person);
echo '<h1>Ejercicio 5</h1>';
$letters = explode(',','a,b,c,d,e,f');
for ($i=count($letters); $i > 0 ; $i--) { 
    echo 'letter ' . $i . 'º: '. $letters[$i-1] . '<br>';
}
echo '<h1>Ejercicio 6</h1>';
// Array asociativo con las notas de los estudiantes
$notes = [
    'Miguel' => 5,
    'Luís' => 7,
    'Marta' => 10,
    'Isabel' => 8,
    'Aitor' => 4,
    'Pepe' => 1
];
// Ordenar el array de forma descendente según los valores (notas)
arsort($notes);
// Mostrar las notas
echo "Notas de los estudiantes:\n";
foreach ($notes as $student => $note) {
    echo "$student: $note\n";
}
echo '<h1>Ejercicio 7</h1>';
// Calcular la media de las notas
$average = array_sum($notes) / count($notes);

// Mostrar la media de las notas
// Formatear la media para mostrar solo dos decimales
$average = number_format($average, 2);
echo "Media de las notas: $average" . '<br>';

// Mostrar los nombres de los alumnos cuya nota está por encima de la media
echo "Alumnos con nota por encima de la media:". '<br>';
foreach ($notes as $student => $note) {
    if ($note > $average) {
        echo "$student" . '<br>';
    }
}
echo '<h1>Ejercicio 8</h1>';
// Inicializar variables para almacenar la nota más alta y el nombre del mejor alumno
$highNote = 0;
$bestStudent = '';
// Buscar la nota más alta y el nombre del mejor alumno
foreach ($notes as $student => $note) {
    if ($note > $highNote) {
        $highNote = $note;
        $bestStudent = $student;
    }
}
// Mostrar la nota más alta y el nombre del mejor alumno
echo "La nota más alta es $highNote y el mejor alumno es $bestStudent" .'<br>';
?>


