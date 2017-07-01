<?php


namespace MyLocalys;


use Localys\BaseLocalys;

class FraLocalys extends BaseLocalys
{

    private static $months = [
        1 => 'janvier',
        2 => 'février',
        3 => 'mars',
        4 => 'avril',
        5 => 'mai',
        6 => 'juin',
        7 => 'juillet',
        8 => 'août',
        9 => 'septembre',
        10 => 'octobre',
        11 => 'novembre',
        12 => 'décembre',
    ];


    public function getMonth($n)
    {
        return self::$months[(int)$n];
    }

}
