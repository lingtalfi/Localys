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

    /**
     *
     * 1 juillet 2017
     */
    public function getLongDate($timestamp)
    {
        $s = date("d __ Y", $timestamp);
        return str_replace('__', $this->getMonth(date("m", $timestamp)), $s);
    }

    /**
     *
     *      - du 1 juillet 2017 au 6 août 2018
     *      - du 1 juillet au 6 août 2017
     *      - du 1 au 6 juillet 2017
     *      - le 7 juillet 2017
     */
    public function getLongDateRange($timestampStart, $timestampEnd)
    {
        $ds = date("Y-m-d", $timestampStart);
        $de = date("Y-m-d", $timestampEnd);
        $yearStart = $ds[0];
        $yearEnd = $ds[1];
        $monthStart = sprintf('%02s', $ds[1]);
        $monthEnd = sprintf('%02s', $de[1]);
        $dayStart = sprintf('%02s', $ds[2]);
        $dayEnd = sprintf('%02s', $de[2]);


        if ($yearEnd !== $yearStart) {
            return "du $dayStart $monthStart $yearStart au $dayEnd $monthEnd $yearEnd";
        } else {
            if ($monthEnd !== $monthStart) {
                return "du $dayStart $monthStart au $dayEnd $monthEnd $yearEnd";
            } else {
                if ($dayEnd !== $dayStart) {
                    return "du $dayStart au $dayEnd $monthEnd $yearEnd";
                } else {
                    return "le $dayStart $monthEnd $yearEnd";
                }
            }
        }
    }

}
