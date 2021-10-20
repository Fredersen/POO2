<?php

class Truck extends Vehicle {
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private string $energy = "fuel";
    private int $energyLevel = 100;
    private int $capacity;
    private int $currentLoad = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setCapacity($capacity);
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): Truck
    {
        $this->energyLevel = $energyLevel;
        return $this;
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): Truck
    {
        $this->capacity = $capacity;
        return $this;
    }

    public function getCurrentLoad(): int
    {
        return $this->currentLoad;
    }

    public function setCurrentLoad(int $currentLoad): Truck
    {
        $this->currentLoad = $currentLoad;
        return $this;
    }

    public function isFull(): bool 
    {
        return $this->getCurrentLoad() === $this->getCapacity();
    }
}