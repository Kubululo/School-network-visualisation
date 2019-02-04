<?php

namespace App\Http\Controllers;

use App\B201a;
use Illuminate\Http\Request;
use App\IPping;
use Karlmonson\Ping\Ping;


class ping_controller extends Controller
{
    public static function healthCheck($url)
    {
        $model = new Ping();
        $data = $model->check($url);
        $health = $data;
        if ($health == 200) {
            $result = 1;
            return $result;
        } else {
            $result = 0;
            return $result;
        }
    }

    public static function pingB201a()
    {
        $ipcount = B201a::count();
        $computers = B201a::all();
        $ip = [];
        $on = 0;
        $off = 0;
        for ($i = 1; $i <= $ipcount; $i++) {
            $ip[$i] = B201a::where('id', $i)->pluck('ip_adress');
            $newip = str_replace('["', '', $ip[$i]);
            $newip2 = str_replace('"]', '', $newip);
            if (ping_controller::healthCheck($newip2) == 1) {
                $status[$i] = 1;
                $on++;
                $computers["status"] = $status[$i];

            } else {
                $status[$i] = 0;
                $off++;
                $computers['status'] = $status[$i];
            }
            $stat = (object)$status;

        }

        return view("b201a")->with("computers", $computers)->with("status", $status);
    }


}
