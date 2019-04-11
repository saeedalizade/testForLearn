<?php
/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 4/5/2019
 * Time: 9:14 PM
 */

class B extends A
{



    public function Family ()
    {

        return $this->getFamily ();

    }

    public function Money ()
    {
       return $this->getMoney();
    }

    public function Remain ()
    {
        return $this->getRemain();
    }


}