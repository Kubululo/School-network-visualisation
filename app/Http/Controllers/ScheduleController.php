<?php

namespace App\Http\Controllers;

use App\Providers\EventServiceProvider;
use Illuminate\Http\Request;
use App\schedule;
use Calendar;
use Validator;
use Illuminate\Support\Facades\Redirect;
use Auth;
class ScheduleController extends Controller
{
        public function index(){
            return view('resB113');
        }
        public function addEvent(Request $request)
        {
            $validator = Validator::make($request->all(),[
                'event_name' => 'required',
                'start_date' => 'required',
                'end_date' => 'required',
                'person' => 'required',
                ]);
            if ($validator->fails())
            {
                \Session::flash('warning','Please enter the valid details');
                return Redirect::to('/home')->withImput()->withErrors($validator);
            }
            $event = new schedule;
            $event->event_name = $request['event_name'];
            $event->start_date = $request['start_date'];
            $event->end_date = $request['end_date'];
            $event->person = $request['person'];
            $event->save();
            \Session::flash('success','Event added');
            return Redirect::to('/home/reservation/b113');

        }
}
