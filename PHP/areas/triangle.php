<?php
    class Triangle extends FigureGeometric {
        private float $side;
        private float $calculate;

        public function __construct(float $side){
            parent::__construct("Triangle", "Triangulo");
            $this->side = $side;
        }
         
        public function getSide(): float{
            return $this->side;
        }

        public function calculate(): float {
            $this->calculate = ($this->getSide() * $this->getSide()) / 2;
            return $this->calculate;
        }
    }
?>