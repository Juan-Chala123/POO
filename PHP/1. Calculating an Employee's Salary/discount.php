<?php
class discount extends salary {
    private float $health;
    private float $pension;
    private float $arl;
    private float $discount;

    public function __construct(float $health, float $pension, float $arl, int $salario) {
        parent::__construct(1080292891, "Juan", "Chala", $salario);
        $this->health = $health;
        $this->pension = $pension;
        $this->arl = $arl;
    }
    public function getHealth(): float {
        return $this->health;
    }
    public function getPension(): float {
        return $this->pension;
    }
    public function getArl(): float {
        return $this->arl;
    }
    public function payTotal(): float {
        $this->discount = ($this->getSalario() * $this->health) + ($this->getSalario() * $this->pension) + ($this->getSalario() * $this->arl);
        return $this->discount;
    }
}
?>