<?php 
    class inertia extends forces {
        private int $inertia;
        readonly private int $mass;

        public function __construct(int $mass) {
            parent::__construct("Inercia", "Inercia");
            $this->mass = $mass;
            $this->inertia = $mass;
        }
        public function getInertia(): int {
            return $this->inertia;
        }
        public function getMass(): int {
            return $this->mass;
        }

        public function calculateForce(): ?float {
            $this->inertia = $this->mass;
            return $this->inertia;
        }
    }
?>