<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/8/29
 * Time: 13:08
 */

namespace App\role;


class Villager  extends Play
{


    public function __construct ($no) {

        parent::__construct($no);

        $this->camp = 'v';
    }
}