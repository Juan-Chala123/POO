<?php
    class licenceB extends licences {
        readonly private int $value;

        public function __construct(int $value) {
            parent::__construct("Licencia B");
            $this->value = $value;
        }

        public function calculateValue(): int {
            return $this->value;
        }
    }
?>