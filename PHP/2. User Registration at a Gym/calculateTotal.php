<?php
    abstract class CalculateTotal  {
        readonly private ?string $name;
        readonly private ?string $lastName;

        public function __construct(string $name, string $lastName) {
            $this->name = $name;
            $this->lastName = $lastName;
        }

        public function getName(): string {
            return $this->name;
        }
        public function getLastName(): string {
            return $this->lastName;
        }
        
        abstract public function calculate(): float;
    }
?>