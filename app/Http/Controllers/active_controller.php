<?php

namespace App\Http\Controllers;
use App\active;
use Illuminate\Http\Request;

class active_controller extends Controller
{
    public function allUsers()
    {
        $count = active::count();
        for($i=1;$i<=$count;$i++)
        {
            $user = active::where('id',$i)->pluck('name');
            $user2 = str_replace('["', '', $user);
            $user3[$i] = str_replace('"]', '', $user2);
        }
        $users = implode('',$user3);
        return view("users")->with("users",$users);
    }


}
