<?php
declare(strict_types=1);

final class InternationalStudent extends Student {
    public function __construct(
        string $id,
        string $name,
        string $major,
        float $baseFee,
        private string $country,
        private float $internationalFee = 2500000
    ) {
        if (trim($country) === '') {
            throw new InvalidArgumentException('Negara asal mahasiswa internasional wajib diisi.');
        }
        if (!is_finite($internationalFee) || $internationalFee < 0) {
            throw new InvalidArgumentException('Biaya internasional tidak valid.');
        }
        parent::__construct($id, $name, $major, $baseFee);
    }

    public function getType(): string {
        return 'international';
    }

    public function getDiscount(): float {
        return 0.0;
    }

    public function getCountry(): string {
        return $this->country;
    }

    public function getInternationalFee(): float {
        return $this->internationalFee;
    }

    public function calculateFee(): float {
        return $this->baseFee + $this->internationalFee;
    }

    public function summary(): string {
        return parent::summary() . " [Internasional - {$this->country}]";
    }
}