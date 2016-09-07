<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redis;

class GameController extends Controller
{
    public function  getStep($id){
        return $this->$id();
    }

    public function start(Request $request){
//        dd($request->roomNu.'sat'.$request->id[0]);
$number = $request->id[0]-1;
//        dd($request->id[1]);
       $status = Redis::set($request->roomNu.'sat'.$number,$request->id[1]);
        if (!$status){
            abort(403);
        }
//        echo $request->roomNu.'sat'.$number;
    }
}
