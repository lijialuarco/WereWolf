<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2016/8/24
 * Time: 21:51
 */

namespace App\Role;


 abstract class Play
{
     protected $alive = true;
     public $no;
     public $voted = 0;

    public function __construct($no)
    {
        $this->no = $no;
    }

    public function vote($no)
    {
      return $no;
    }

}