<?php
    class Essential extends CalculateTotal {
        private int $hour;
        private int $value;
        private int $calculate;

        public function __construct(int $hour) {
            parent::__construct("Essential", "Basico");
            $this->hour = $hour;
            $this->value = 30000;
        }

        public function getHour(): int {
            return $this->hour;
        }
        public function getValue(): int {
            return $this->value;
        }

        public function calculate(): float {
            $this->calculate = $this->hour * $this->value;
            return $this->calculate;
        }
    }
?>