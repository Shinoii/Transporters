<?php
require_once "Transporter.php";
class Transporter2 extends Transporter
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
        if($weight === 1){
            $this->deliveryAmount = 100;
        }
        else{
            for($i = 1; $i <= $weight; $i++){
                $this->deliveryAmount += 100;
            }
        }
    }
}