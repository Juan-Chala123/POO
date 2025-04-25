<?php
    class Half extends CalculateTotal {
        private int $hour;
        private int $guidedClasses;
        private int $value;
        private int $calculate;

        public function __construct(int $hour) {
            parent::__construct("Essential", "Basico");
            $this->hour = $hour;
            $this->guidedClasses = 40000;
            $this->value = 20000;
        }

        public function getHour(): int {
            return $this->hour;
        }
        public function getGuidedClasses(): int {
            return $this->guidedClasses;
        }
        public function getValue(): int {
            return $this->value;
        }

        public function calculate(): float {
            $this->calculate = $this->hour * $this->value + $this->guidedClasses;
            return $this->calculate;
        }
    }
?>