<?php
declare(strict_types=1);

class Calculator {
    // Hanya ada SATU deklarasi method add()
    public function add(int ...$numbers): int {
        return array_sum($numbers);
    }
}

$calc = new Calculator();
echo "2 argumen (10, 20): " . $calc->add(10, 20) . PHP_EOL;
echo "3 argumen (10, 20, 30): " . $calc->add(10, 20, 30) . PHP_EOL;