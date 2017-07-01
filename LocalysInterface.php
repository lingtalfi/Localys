<?php


namespace Localys;


/**
 * It's recommended that a Localys object doesn't use a constructor.
 */
interface LocalysInterface
{


    /**
     * @param $n , int, the number of the month (starting at 1)
     * @return string, the name of the month
     */
    public function getMonth($n);
}