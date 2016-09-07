<?php

namespace App\Http\Controllers;

use App\Role\Play;
use App\role\Villager;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redis;


class RoomController extends Controller
{

    public function create()
    {
        return view('rooms/create');
    }

     /* * *
     ----------
        接收玩家创建房间数据
        乱序后用redis存储
     ----------
      * * */

    public function store(Request $request)
    {
        $roomNu = rand(1000,9999);

        $players = $this->sortPlayer($request);


        for($i=1;$i<=count($players);$i++)
            $status = Redis::rpush($roomNu,json_encode([$i ,$players[$i-1]]));


        if ($status){
            return redirect(route('rooms.show',$roomNu));
        }else{
            abort(403);
        }
    }

      /* * *
     ----------
        游戏具体控制
     ----------
      * * */

    public function show($roomNu)
    {
//        $players[] = Redis::lindex($roomNu,0);
        $playerNu = Redis::llen($roomNu);
        return view('rooms/show',compact('roomNu','playerNu'));
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
