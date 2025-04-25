<?php
    class force extends forces {
        readonly private int $mass;
        readonly private int $acceleration;
        private int $force;

        public function __construct(int $mass, int $acceleration) {
            parent::__construct("Fuerza", "Fuerza");
            $this->mass = $mass;
            $this->acceleration = $acceleration;
        }
        public function getMass(): int {
            return $this->mass;
        }
        public function getAcceleration(): int {
            return $this->acceleration;
        }

        public function calculateForce(): ?float{
            $this->force = $this->mass * $this->acceleration;
            return $this->force;
        }
    }
?>