<?php
abstract class Transporter
{
    protected string $name;
    protected int $deliveryAmount = 0;

    public function __construct(string $name)
    {
        $this->setName($name);
    }
    protected function getName(): string
    {
        return $this->name;
    }
    protected function setName(string $name): void
    {
        if (!isset($name) || trim($name) === '') {
            throw new InvalidArgumentException('$name не может быть пустым или содержать только пробелы.');
        }
        else{
            $this->name = $name;
        }
    }
    protected function getDeliveryCost(): int
    {
        return $this->deliveryAmount;
    }
    abstract public function setDeliveryCost(int $weight);
}