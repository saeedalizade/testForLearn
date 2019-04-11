<?php
/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 4/5/2019
 * Time: 9:14 PM
 */

class A
{

    private $Remain;
    protected $Money;
    public $Family;

    public function __construct ()
    {
        $this->Remain = "I Going T Gym" ;
        $this->Family= "Alizadeh";
        $this->Money="25000IRR";
    }

    Private function setRemain ()
    {
        return  $this->Remain;
    }

    public function getRemain ()
    {
        return $this->setRemain ();

    }

    public function setFamily ()
    {
        return  $this->Family;
    }

    public function getFamily ()
    {
        return   $this->setFamily();
    }

    public function setMoney ()
    {
        return   $this->Money;


    }

    Protected function getMoney ()
    {

        return  $this->setMoney ();
    }


}