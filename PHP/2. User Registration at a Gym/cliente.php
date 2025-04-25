<?php
    class Cliente extends Person {
        private ?string $name;
        private ?string $lastName;
        private float $weight;
        private float $stature;

        public function __construct(?string $name, ?string $lastName, float $weight, float $stature) {
            parent::__construct(1080292891);
            $this->name = $name;
            $this->lastName = $lastName;
            $this->weight = $weight;
            $this->stature = $stature;
        }

        public function getName(): ?string {
            return $this->name;
        }
        public function getLastName(): ?string {
            return $this->lastName;
        }
        public function getWeight(): float {
            return $this->weight;
        }
        public function getStature(): float {
            return $this->stature;
        }
    }
?>