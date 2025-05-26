<?php
require_once "Transporter.php";
class Transporter1 extends Transporter
{
    public function __construct(string $name)
    {
        parent::__construct($name);
    }
    public function getName(): string
    {
        return parent::getName();
    }
    public function setName(string $name): void
    {
        parent::setName($name);
    }
    public function getDeliveryCost(): int
    {
        return parent::getDeliveryCost();
    }

    public function setDeliveryCost(int $weight): void
    {
        if($weight < 10){
            $this->deliveryAmount = 100;
        }
        else{
            $this->deliveryAmount = 1000;
        }
    }
}