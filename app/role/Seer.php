<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/8/29
 * Time: 14:15
 */

namespace App\role;


class Seer extends Play
{
    public function __construct ($currentNo)
    {
        parent::__construct($currentNo);
        $this->camp = 'v';
    }

    public function seer($no)
    {

    }
}