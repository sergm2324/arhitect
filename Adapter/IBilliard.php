<?php


interface IBilliard
{
    public function Area (): float;
}

class StandartBilliardAdapter implements IBilliard {
    const Pi = 3.14;
    private $BallSquare;
    public $R;

    public function __construct($R)
    {
        $this->R = $R;
    }

    public function Area(): float
    {
        return $this->BallSquare = 4 * self::Pi * $this->R * $this->R;

    }

    public function shoot(){
        echo 'Удар';
    }

    public function win(){
        echo 'Победа';
    }

    public function lose(){
        echo 'Поражение';
    }

}

class SquareBilliardAdapter implements IBilliard {
    private $BallSquare;
    public $A;
    const Parties = 6;

    public function __construct($A)
    {
        $this->A = $A;
    }


    public function Area(): float
    {
        return $this->BallSquare = self::Parties * $this->A * $this->A;
    }

    public function udarit(){
        echo 'Удар';
    }

    public function pobeda(){
        echo 'Победа';
    }

    public function proigrish(){
        echo 'Поражение';
    }

}
