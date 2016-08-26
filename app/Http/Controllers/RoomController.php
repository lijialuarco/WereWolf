<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Role\Play;
use Illuminate\Support\Facades\Redis;
use Psy\Exception\ThrowUpException;
use Symfony\Component\VarDumper\Exception\ThrowingCasterException;

class RoomController extends Controller
{

    public function create()
    {
        return view('rooms/create');
    }

     /* * *
     ----------
        接收玩家创建房间数据
        打乱后用redis存储
     ----------
      * * */

    public function store(Request $request)
    {
        $players = $this->sortPlayer($request);

//        $playerNu = count($players);
//        $roomNo = rand(1000,9999);


        return view("rooms/show",compact('players'));
    }

    public function show()
    {
            return 'hi';
    }

     /* * *
     ----------
        先建立数组将玩家填充
        然后打乱顺序输出
     ----------
      * * */

    private function sortPlayer($player)
    {
        if ($player->wolfNumber && $player->villagerNumber)
        {
            $wolf = array_fill(0, $player->wolfNumber, 'wolf');
            $villager = array_fill($player->wolfNumber, $player->villagerNumber, 'villager');
            $players = array_merge($wolf, $villager);
        }else{
            abort(403);
        }

        $player->seer ? $players[] = $player->seer : $player->seer;
        $player->witch ? $players[] = $player->witch : $player->witch;
        $player->hunter ? $players[] = $player->hunter : $player->hunter;

        // 使用shuffle打乱数组
       if(shuffle($players))
       {
           return $players;
       }else{
           return '因玩家未能创建，房间创建失败';
       }
    }
}
