<?php
class supervisor extends Person {
    private int $salary;
    private int $subsidy;
    private int $numberDay;
    private int $valueDay;
    private float $health;
    private float $pension;
    private float $arl;
    private float $discount;
    private float $total;

    public function __construct(int $subsidy, int $numberDay, int $valueDay) {
        parent::__construct(1080292891, "Juan", "Chala");
        $this->subsidy = $subsidy;
        $this->numberDay = $numberDay;
        $this->valueDay = $valueDay;
    }
    public function getSubsidy(): int {
        return $this->subsidy;
    }
    public function getNumberDay(): int {
        return $this->numberDay;
    }
    public function getValueDay(): int {
        return $this->valueDay;
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

    public function calculateSalary(): float {
        $this->salary = ($this->numberDay * $this->valueDay) + $this->subsidy;
        $this->health = $this->salary * 0.05;
        $this->pension = $this->salary * 0.04;
        $this->arl = $this->salary * 0.02;
        $this->discount = $this->health + $this->pension + $this->arl;
        $this->total = $this->salary - $this->discount;
        return $this->total;
    }
}
?>