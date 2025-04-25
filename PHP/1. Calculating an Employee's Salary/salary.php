<?php
abstract class salary {
    protected int $identifity;
    protected string $name;
    protected string $lastName;
    protected int $salario;

    public function __construct(int $identifity, string $name, string $lastName, int $salario) {
        $this->identifity = $identifity;
        $this->name = $name;
        $this->lastName = $lastName;
        $this->salario = $salario;
    }
    public function getIdentifity(): int {
        return $this->identifity;
    }
    public function getName(): string {
        return $this->name;
    }
    public function getLastName(): string {
        return $this->lastName;
    }
    public function getSalario(): int {
        return $this->salario;
    }

    abstract public function payTotal(): float;

    public function salarios(): void {
        if ($this->salario < (2 * 1423500)) {
            $this->salario = $this->salario +  200000;
        }else{
            $this->salario = $this->salario + 0;
        }
    }
}
?>