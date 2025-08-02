<?php

class Calculadora {
    public function suma($a, $b) {
        return $a + $b;
    }

    public function resta($a, $b) {
        return $a - $b;
    }

    public function multiplicacion($a, $b) {
        return $a * $b;
    }

    public function division($a, $b) {
        if ($b == 0) {
            return "Error: División por cero";
        }
        return $a / $b;
    }
}

// Función principal (equivalente a main en Python)
function main() {
    $calc = new Calculadora();

    echo "Elige una operación (+, -, *, /): ";
    $operacion = trim(fgets(STDIN));

    echo "Ingresa el primer número: ";
    $a = floatval(trim(fgets(STDIN)));

    echo "Ingresa el segundo número: ";
    $b = floatval(trim(fgets(STDIN)));

    if ($operacion == "+") {
        echo $calc->suma($a, $b) . PHP_EOL;
    } elseif ($operacion == "-") {
        echo $calc->resta($a, $b) . PHP_EOL;
    } elseif ($operacion == "*") {
        echo $calc->multiplicacion($a, $b) . PHP_EOL;
    } elseif ($operacion == "/") {
        echo $calc->division($a, $b) . PHP_EOL;
    } else {
        echo "Operación no válida" . PHP_EOL;
    }
}

main();

?>