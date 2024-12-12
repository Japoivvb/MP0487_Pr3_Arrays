<?php
// Definición del inventario de cómics
$inventario = [
    'suspense_terror' => [
        ['titulo' => 'The Long Halloween', 'editorial' => 'DC', 'autor' => 'Tim Sale', 'idioma' => 'Inglés', 'precio' => 20, 'stock' => 10],
        ['titulo' => 'Uzumaki', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 15],
        ['titulo' => 'Tomie', 'editorial' => 'Planeta', 'autor' => 'Junji Ito', 'idioma' => 'Japonés', 'precio' => 25, 'stock' => 20],
    ],
    'accion' => [
        ['titulo' => 'Berserk Deluxe Edition 1', 'editorial' => 'Dark Horse', 'autor' => 'Kentaro Miura', 'idioma' => 'Japonés', 'precio' => 30, 'stock' => 12],
    ],
    // Puedes agregar más categorías y cómics según sea necesario
];

// Función para mostrar información sobre los cómics
function mostrarInformacion($categoria, $indice)
{
    global $inventario;
    
    if (isset($inventario[$categoria][$indice])) {
        $comic = $inventario[$categoria][$indice];
        echo "Categoría: $categoria, Título: {$comic['titulo']}, Editorial: {$comic['editorial']}, Autor: {$comic['autor']}, Idioma: {$comic['idioma']}, Precio: {$comic['precio']}€, Stock: {$comic['stock']}\n";
    } else {
        echo "Cómic no encontrado.\n";
    }
}

function mostrarPorIdioma($idioma)
{
    global $inventario;

    echo "Cómics en idioma $idioma:";
    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            if ($comic['idioma'] == $idioma) {
                echo "<p>{$comic['titulo']}</p>";
            }
        }
    }
}

function contarCategorias()
{
    global $inventario;
    $numCategorias = count($inventario);
    echo "<p>Número de categorías: $numCategorias</p>";
}

function mostrarComicsEnTabla()
{
    global $inventario;

    echo '<table border="1">';
    echo '<tr><th>Categoría</th><th>Título</th><th>Editorial</th><th>Autor</th><th>Idioma</th><th>Precio</th><th>Stock</th></tr>';

    foreach ($inventario as $categoria => $comics) {
        foreach ($comics as $comic) {
            echo '<tr>';
            echo "<td>$categoria</td>";
            echo "<td>{$comic['titulo']}</td>";
            echo "<td>{$comic['editorial']}</td>";
            echo "<td>{$comic['autor']}</td>";
            echo "<td>{$comic['idioma']}</td>";
            echo "<td>{$comic['precio']}</td>";
            echo "<td>{$comic['stock']}</td>";
            echo '</tr>';
        }
    }

    echo '</table>';
}

function calcularPrecioMedio()
{
    global $inventario;
    $totalPrecios = 0;
    $totalComics = 0;

    foreach ($inventario as $comics) {
        foreach ($comics as $comic) {
            $totalPrecios += $comic['precio'];
            $totalComics++;
        }
    }

    $precioMedio = $totalComics > 0 ? $totalPrecios / $totalComics : 0;

    echo "<p>Precio medio de los cómics: $precioMedio €</p>";
}

function aplicarDescuentoManga()
{
    global $inventario;

    foreach ($inventario['accion'] as &$comic) {
        if ($comic['idioma'] == 'Japonés') {
            $comic['precio'] = $comic['precio'] * 0.7; // Aplicar descuento del 30%
        }
    }

    // Mostramos el inventario actualizado
    mostrarComicsEnTabla();
}

// main
// Ejemplo de uso
echo __LINE__ . "<h1>mostrarInformacion</h1>";
mostrarInformacion('suspense_terror', 0); // Muestra información sobre el primer cómic de suspense-terror
// Ejemplo de uso
echo __LINE__ . "<h1>mostrarPorIdioma</h1>";
mostrarPorIdioma('Inglés');
echo __LINE__ . "<h1>mostrarPorIdioma</h1>";
mostrarPorIdioma('Japonés');
// Ejemplo de uso
echo __LINE__ . "<h1>contarCategorias</h1>";
contarCategorias();
// Ejemplo de uso
echo __LINE__ . "<h1>mostrarComicsEnTabla</h1>";
mostrarComicsEnTabla();
// Ejemplo de uso
echo __LINE__ . "<h1>calcularPrecioMedio</h1>";
calcularPrecioMedio();
// Supongamos que queremos eliminar el primer cómic de "Suspense-Terror"
echo __LINE__ . "<h1>eliminar</h1>";
unset($inventario['suspense_terror'][0]);
// Mostramos el inventario actualizado
echo __LINE__ . "<h1>mostrarComicsEnTabla</h1>";
mostrarComicsEnTabla();
// Supongamos que queremos añadir un nuevo cómic a "Aventuras"
echo __LINE__ . "<h1>añadir comic</h1>";
$inventario['aventuras'][] = ['titulo' => 'Nuevo Cómic', 'editorial' => 'Editorial X', 'autor' => 'Autor Desconocido', 'idioma' => 'Español', 'precio' => 15, 'stock' => 5];
// Mostramos el inventario actualizado
echo __LINE__ . "===========================================================================<br>";
mostrarComicsEnTabla();
// Ejemplo de uso
echo __LINE__ . "<h1>descuento manga</h1>";
aplicarDescuentoManga();
?>


