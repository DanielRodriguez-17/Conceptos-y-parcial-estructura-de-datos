<?php
// COLA SENCILLA CON ARRAY

$cola = []; // Cola vacía

// Encolar (agregar al final)
function encolar(&$cola, $dato) {
    $cola[] = $dato;
}

// Desencolar (quitar del frente)
function desencolar(&$cola) {
    if (empty($cola)) {
        echo "La cola está vacía.\n";
        return null;
    }
    return array_shift($cola);
}

// Mostrar cola
function mostrarCola($cola) {
    echo implode(" <- ", $cola) . " <- FIN\n";
}

// EJEMPLO DE USO
encolar($cola, 5);
encolar($cola, 10);
encolar($cola, 15);

echo "Cola inicial:\n";
mostrarCola($cola);

echo "Desencolando un elemento: " . desencolar($cola) . "\n";

echo "Cola después de desencolar:\n";
mostrarCola($cola);
?>
