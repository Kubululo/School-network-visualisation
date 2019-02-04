<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IPping;
use App\notebooks;
use App\printers;
use DB;

class computers extends Controller
{
    public function computers()
    {

        $computers = IPping::all();
        $notebooks = notebooks::all();
        $printers = printers::all();
        return view("computers")->with("computers", $computers)->with("notebooks", $notebooks)->with("printers", $printers);

    }

    public function add_computer(Request $req)
    {
        $name = $req->input('name');
        $manufacturer = $req->input('manufacturer');
        $CPU = $req->input('CPU');
        $RAM = $req->input('RAM');
        $HDD = $req->input('HDD');
        $MAC_adress = $req->input('MAC_adress');
        $ip_adress = $req->input('ip_adress');
        $room = $req->input('room');
        $VNC_adress = $req->input('VNC_adress');
        $AIRYTEC_adress = $req->input('AIRYTEC_adress');
        $comment = $req->input('comment');
        $data = array('name' => $name, 'manufacturer' => $manufacturer, 'CPU' => $CPU, 'RAM' => $RAM, 'HDD' => $HDD,
            'MAC_adress' => $MAC_adress, 'ip_adress' => $ip_adress, 'room' => $room, 'VNC_adress' => $VNC_adress, 'AIRYTEC_adress' => $AIRYTEC_adress, 'comment' => $comment);
        DB::table('computers')->insert($data);
        return redirect()->back();
    }

    public function add_notebook(Request $req)
    {
        $name = $req->input('name');
        $manufacturer = $req->input('manufacturer');
        $CPU = $req->input('CPU');
        $RAM = $req->input('RAM');
        $HDD = $req->input('HDD');
        $MAC_adress = $req->input('MAC_adress');
        $ip_adress = $req->input('ip_adress');
        $room = $req->input('room');
        $teacher = $req->input('teacher');
        $data = array('name' => $name, 'manufacturer' => $manufacturer, 'CPU' => $CPU, 'RAM' => $RAM, 'HDD' => $HDD,
            'MAC_adress' => $MAC_adress, 'IP_adress' => $ip_adress, 'room' => $room, 'teacher' => $teacher);
        DB::table('notebooks')->insert($data);
        return redirect()->back();
    }

    public function add_printer(Request $req)
    {
        $name = $req->input('name');
        $type = $req->input('type');
        $MAC_adress = $req->input('MAC_adress');
        $ip_adress = $req->input('IP_adress');
        $room = $req->input('room');
        $data = array('name' => $name, 'type' => $type, 'MAC_adress' => $MAC_adress, 'IP_adress' => $ip_adress, 'room' => $room);
        DB::table('printers')->insert($data);
        return redirect()->back();

    }


}
