<?php
abstract class Person {
    protected int $identification;
    protected string $name;
    protected string $lastName;

    public function __construct(int $identification, string $name, string $lastName) {
        $this->identification = $identification;
        $this->name = $name;
        $this->lastName = $lastName;
    }

    public function getIdentification(): int {
        return $this->identification;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getLastName(): string {
        return $this->lastName;
    }

    abstract public function calculateSalary(): float;
}
?>