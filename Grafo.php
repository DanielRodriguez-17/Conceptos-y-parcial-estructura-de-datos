<?php
class Grafo {
    private $adyacencia = [];

    public function agregarVertice($vertice) {
        if (!array_key_exists($vertice, $this->adyacencia)) {
            $this->adyacencia[$vertice] = [];
        }
    }

    public function agregarArista($vertice1, $vertice2) {
        $this->agregarVertice($vertice1);
        $this->agregarVertice($vertice2);

        $this->adyacencia[$vertice1][] = $vertice2;
        $this->adyacencia[$vertice2][] = $vertice1;
    }

    public function mostrarGrafo() {
        echo "<h3>Representación del grafo:</h3>";
        foreach ($this->adyacencia as $vertice => $vecinos) {
            echo $vertice . " -> " . implode(", ", $vecinos) . "<br>";
        }
    }

    public function bfs($inicio) {
        if (!isset($this->adyacencia[$inicio])) {
            echo "El vértice inicial no existe en el grafo.<br>";
            return;
        }

        $visitados = [];
        $cola = [];

        array_push($cola, $inicio);
        $visitados[$inicio] = true;

        echo "<h3>Recorrido BFS:</h3>";

        while (!empty($cola)) {
            $vertice = array_shift($cola);
            echo $vertice . " ";

            foreach ($this->adyacencia[$vertice] as $vecino) {
                if (!isset($visitados[$vecino])) {
                    $visitados[$vecino] = true;
                    array_push($cola, $vecino);
                }
            }
        }
    }
}

// Ejemplo de uso
$grafo = new Grafo();
$grafo->agregarArista("A", "B");
$grafo->agregarArista("A", "C");
$grafo->agregarArista("B", "D");
$grafo->agregarArista("C", "D");
$grafo->agregarArista("C", "E");

$grafo->mostrarGrafo();
$grafo->bfs("A");
?>