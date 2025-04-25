<?php 
    class action extends forces {
        readonly private int $action;
        private int $reaction;

        public function __construct(int $action, int $reaction) {
            parent::__construct("Action and Reaction", "Acción y Reacción");
            $this->action = $action;
            $this->reaction = $reaction;
        }
        public function getAction(): int {
            return $this->action;
        }
        public function getReaction(): int {
            return $this->reaction;
        }
        public function calculateForce(): ?float {
            $this->reaction = - $this->action;
            return $this->reaction;
        }
    }
?>