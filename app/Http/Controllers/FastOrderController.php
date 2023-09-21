<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FastOrderController extends Controller
{
    public function fastOrder()
    {
        return view('fast-order');
    }

    public function calculation()
    {
        $price = mt_rand(2000,10000)/10;
        $period =mt_rand(1,5)*86400;
        $currentTime = time()+(3*3600);
        $timestamp = time()+$period;
        $date =mb_substr(date('c',$timestamp),0,10);
        $time =date('H',$currentTime);
        if ($time>='18'){
            return response()->json('После 18:00 заказы не принимаем');
        }
        else
        return response()->json([$price,$date]);
    }
}
