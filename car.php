<?php

class Car {
    private $type;
    private $gasoline = 30;
    public $mileage = 0;

    public function __construct($type, $gasoline)
    {
        $this->type = $type;
        $this->gasoline = $gasoline;
    }

    public function getType()
    {
        return $this->type;
    }
    public function setType($type = null)
    {
        if ($type !== null)
        {
            $this->type = $type;
        }
    }

    public function getGasoline()
    {
        return $this->gasoline;
    }
    public function setGasoline($gasoline)
    {
        if (is_numeric($gasoline))
        {
            $this->gasoline = $gasoline;
        }
    }

    public function go()
    {
        $this->mileage++;
        echo '車が'.$this->mileage.'km走りました';
        $this->gasoline--;
        echo '<br>';
        echo 'ガソリン残量：'.$this->gasoline.'Lです';
        echo '<br>';
    }
}

// $honda = new Car('ミライース', 30);
// var_dump($honda);
// echo '<hr>';

// $toyota = new Car('アクア', 40);
// var_dump($toyota);
// echo '<hr>';

// $nissan = new Car('デイズ', 50);
// var_dump($nissan);
// echo '<hr>';

$honda = new Car('ミライース', 30);

echo $honda->getType(); // ミライース

$honda->setType('オデッセイ');

echo $honda->getType(); // オデッセイ