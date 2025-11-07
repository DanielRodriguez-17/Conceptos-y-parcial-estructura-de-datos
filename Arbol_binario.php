<?php
// Clase que representa un nodo del árbol de edades
class NodoEdad {
    public $edad;
    public $izquierdo;
    public $derecho;

    public function __construct($edad) {
        $this->edad = $edad;
        $this->izquierdo = null;
        $this->derecho = null;
    }
}

// Clase que representa el árbol binario de edades
class ArbolEdades {
    public $raiz;

    public function __construct() {
        $this->raiz = null;
    }

    // Insertar una edad en el árbol
    public function agregarEdad($edad): void {
        $nuevoNodo = new NodoEdad($edad);
        if ($this->raiz === null) {
            $this->raiz = $nuevoNodo;
        } else {
            $this->insertarNodo($this->raiz, $nuevoNodo);
        }
    }

    private function insertarNodo($nodoActual, $nuevoNodo): void {
        if ($nuevoNodo->edad < $nodoActual->edad) {
            if ($nodoActual->izquierdo === null) {
                $nodoActual->izquierdo = $nuevoNodo;
            } else {
                $this->insertarNodo($nodoActual->izquierdo, $nuevoNodo);
            }
        } else {
            if ($nodoActual->derecho === null) {
                $nodoActual->derecho = $nuevoNodo;
            } else {
                $this->insertarNodo($nodoActual->derecho, $nuevoNodo);
            }
        }
    }

    // Recorrer el árbol en orden (de menor a mayor edad)
    public function mostrarEdadesEnOrden($nodo): void {
        if ($nodo !== null) {
            $this->mostrarEdadesEnOrden($nodo->izquierdo);
            echo "Edad: " . $nodo->edad . "<br>";
            $this->mostrarEdadesEnOrden($nodo->derecho);
        }
    }
}

// --- Ejemplo de uso ---
$arbolEdades = new ArbolEdades();
$arbolEdades->agregarEdad(35);
$arbolEdades->agregarEdad(18);
$arbolEdades->agregarEdad(42);
$arbolEdades->agregarEdad(10);
$arbolEdades->agregarEdad(25);
$arbolEdades->agregarEdad(50);
$arbolEdades->agregarEdad(22);
$arbolEdades->agregarEdad(30);
$arbolEdades->agregarEdad(40);

echo "<h3>Listado de edades (de menor a mayor):</h3>";
$arbolEdades->mostrarEdadesEnOrden($arbolEdades->raiz);
?>
