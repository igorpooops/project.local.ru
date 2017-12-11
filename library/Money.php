<?php
/**
 * Created by PhpStorm.
 * User: Игорь
 * Date: 26.11.2017
 * Time: 15:53
 */

class Money
{
    //places
    public $money_people = null;


    //methods

    public function addMoney($balance_people){
        return $this->money_people = $balance_people;
    }
}