<?php
declare(strict_types=1);

class BaseReport {
    final public function getId(): string {
        return 'R-01';
    }
}

class CustomReport extends BaseReport {
    // Sengaja melanggar aturan final untuk melihat Fatal Error PHP
    public function getId(): string {
        return 'R-02';
    }
}