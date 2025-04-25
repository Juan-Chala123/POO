<?php
    abstract class person {
        readonly private int $identifity;
        readonly private ?string $name;
        readonly private ?string $lastName;
        readonly private ?string $address;
        readonly private ?string $telephone;
        readonly private ?string $rh;
        readonly private ?string $license;

        public function __construct(int $identifity, ?string $name, ?string $lastName, ?string $address, ?string $telephone, ?string $rh, ?string $license) {
            $this->identifity = $identifity;
            $this->name = $name;
            $this->lastName = $lastName;
            $this->address = $address;
            $this->telephone = $telephone;
            $this->rh = $rh;
            $this->license = $license;
        }
        public function getIdentifity(): int {
            return $this->identifity;
        }
        public function getName(): ?string {
            return $this->name;
        }
        public function getLastName(): ?string {
            return $this->lastName;
        }
        public function getAddress(): ?string {
            return $this->address;
        }
        public function getTelephone(): ?string {
            return $this->telephone;
        }
        public function getRh(): ?string {
            return $this->rh;
        }
        public function getLicense(): ?string {
            return $this->license;
        }
    }
?>