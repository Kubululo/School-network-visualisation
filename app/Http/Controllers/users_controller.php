<?php

namespace App\Http\Controllers;

use App\users_model;
use App\users_models;
use Illuminate\Http\Request;
use DB;
use Auth;

class users_controller extends Controller
{
    //
    public function allUsers()
    {
        $users = users_model::All();
        return view("users")->with("users", $users);
    }

    public function promote(Request $req)
    {
        $name = Auth::user()->name;
        $admin = DB::table('users')->where('name', $name)->value('admin');
        if ($admin == 1) {
            $id = $req->input('id');
            DB::table('users')->where("id", $id)->update(["admin" => 1]);
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function demote(Request $req)
    {
        $name = Auth::user()->name;
        $admin = DB::table('users')->where('name', $name)->value('admin');
        if ($admin == 1) {
            $id = $req->input('id');
            DB::table('users')->where("id", $id)->update(["admin" => 0]);
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function forget(Request $req)
    {
        $id = $req->input("id");
        DB::table('users')->where("id", $id)->update(["remember" => "0"]);
        return redirect()->back();
    }

    public function remember(Request $req)
    {
        $id = $req->input("id");
        DB::table('users')->where("id", $id)->update(["remember" => "1"]);
        return redirect()->back();
    }
}
