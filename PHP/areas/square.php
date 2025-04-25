<?php
    class Square extends FigureGeometric {
        private float $side;
        private float $calculate;

        public function __construct(float $side){
            parent::__construct("Square", "Cuadrado");
            $this->side = $side;
        }
        
        public function getSide(): float{
            return $this->side;
        }

        public function calculate(): float {
            $this->calculate = $this->getSide() * $this->getSide();
            return $this->calculate;
        }
    }
?>