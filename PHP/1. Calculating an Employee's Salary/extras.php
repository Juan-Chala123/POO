<?php
class extras extends salary {
    private float $dayTime;
    private float $nightTime;
    private float $holiDays;
    private float $extrass;

    public function __construct(float $dayTime, float $nightTime, float $holiDays, int $salario) {
        parent::__construct(1080292891, "Juan", "Chala", $salario);
        $this->dayTime = $dayTime;
        $this->nightTime = $nightTime;
        $this->holiDays = $holiDays;
    }
    public function getDayTime(): float {
        return $this->dayTime;
    }
    public function getNightTime(): float {
        return $this->nightTime;
    }
    public function getHoliDays(): float {
        return $this->holiDays;
    }

    public function payTotal(): float {
        $this->extrass = (0.125 * ($this->dayTime * $this->getSalario())) + (0.175 * ($this->nightTime * $this->getSalario())) + (0.200 * ($this->holiDays * $this->getSalario()));
        return $this->extrass;
    }
}
?>
