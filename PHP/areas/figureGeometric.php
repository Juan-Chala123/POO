<?php
    abstract class FigureGeometric{
        readonly private ?string $name;
        readonly private ?string $nameSpanish;

        public function __construct(string $name, string $nameSpanish) {
            $this->name = $name;
            $this->nameSpanish = $nameSpanish;
        }

        public function getName(): string|null{
            return $this->name;
        }

        public function getNameSpanish(): string|null{
            return $this->nameSpanish;
        }
        abstract public function calculate(): float;
    }
?>