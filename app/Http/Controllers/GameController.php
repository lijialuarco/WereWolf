<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GameController extends Controller
{
    public function  getStep($id){
        return $this->$id();
    }

    public function start(){
        return 'start';
    }
}
