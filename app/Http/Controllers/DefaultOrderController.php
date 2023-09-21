<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefaultOrderController extends Controller
{
    public function defaultOrder()
    {
        return view('default-order');
    }

        public function calculation()
    {
        $basePrice = 150;
        $coefficient=mt_rand(1,10);
        $price=$basePrice*$coefficient;
        $period =mt_rand(7,14)*86400;
        $timestamp = time()+$period;
        $date =mb_substr(date('c',$timestamp),0,10);
        return response()->json([$price,$date]);
    }
}
