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

    /**
     *
     * The long date is a human friendly date which contains the following information (although
     * not necessarily in that order):
     *
     * - number of the day of the month (for instance 1)
     * - name of the month
     * - number of the year
     *
     *
     * - possibly some syntactic sugar to accommodate the whole.
     *          For instance in english, you write:
     *              July 1st, 2017
     *              (so the syntactic sugar is the st at the end of 1, and the comma for instance)
     *
     *
     * @param $timestamp
     * @return string, the long date
     */
    public function getLongDate($timestamp);
}