<?php
// $note = <<<XML
// <carritos>
//     <producto id_producto="2">
//         <nombre>PlayStation 5</nombre>
//         <precio_item>
//             <precio>500</precio>
//             <moneda>EUR</moneda>
//             <cantidad>2</cantidad>
//             <total>1000</total>
//         </precio_item>
//     </producto>
//     <producto id_producto="3">
//         <nombre>XBOX X</nombre>
//         <precio_item>
//             <precio>550</precio>
//             <moneda>EUR</moneda>
//             <cantidad>4</cantidad>
//             <total>2200</total>
//         </precio_item>
//     </producto>
// </carritos>
// XML;

// Crear un nuevo objeto SimpleXML
$xml = simplexml_load_file('test.xml');

// Mostrar la estructura XML antes de eliminar el nodo
// echo $xml->asXML() . "\n" . "<br>";

$id = 2;  // Id del producto a eliminar

// Seleccionar el nodo hijo que se eliminará
$target = $xml->xpath("/carritos/producto[@id_producto='$id']");  // Corregido el XPath

// Comprobar si el nodo existe y eliminarlo
if (!empty($target)) {
    // Usar unset para eliminar el nodo completo del array
    unset($target[0][0]); // Corregido el uso de unset
}

// Mostrar la estructura XML después de eliminar el nodo
echo $xml->asXML('test.xml') . "\n";
?>