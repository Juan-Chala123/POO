<?php
    class Premium extends CalculateTotal {
        private int $hour;
        private int $coach;
        private int $humidArea;
        private int $value;
        private int $calculate;

        public function __construct(int $hour) {
            parent::__construct("Essential", "Basico");
            $this->hour = $hour;
            $this->coach = 50000;
            $this->humidArea = 70000;
            $this->value = 40000;
        }

        public function getHour(): int {
            return $this->hour;
        }
        public function getCoach(): int {
            return $this->coach;
        }
        public function getHumidArea(): int {
            return $this->humidArea;
        }
        public function getValue(): int {
            return $this->value;
        }

        public function calculate(): float {
            $this->calculate = $this->hour * $this->value + $this->coach + $this->humidArea;
            return $this->calculate;
        }
    }
?>