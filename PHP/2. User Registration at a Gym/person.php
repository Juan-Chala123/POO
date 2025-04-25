<?php
    abstract class Person {
        private int $identifity;

        public function __construct(int $identifity,) {
            $this->identifity = $identifity;
        }
        public function getIdentifity(): int {
            return $this->identifity;
        }

    }
?>