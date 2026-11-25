<?php
declare(strict_types=1);

class StudentPresenter {
    public function __call(string $name, array $args): string {
        if ($name !== 'showData') {
            throw new BadMethodCallException('Unknown method: ' . $name);
        }

        if (
            count($args) === 3 &&
            is_string($args[0]) &&
            is_string($args[1]) &&
            is_string($args[2])
        ) {
            return 'ID: ' . $args[0] . ', Name: ' . $args[1] . ', Major: ' . $args[2];
        }

        throw new InvalidArgumentException('Expected 3 strings: (id, name, major)');
    }
}