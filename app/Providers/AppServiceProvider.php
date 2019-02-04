<?php

namespace App\Providers;

use App\Http\Controllers\active_controller;
use App\schedule;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Calendar;
use App\Http\Controllers\ping_controller;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {


        echo "Our site is in development. Not all of the features has been implemented yet!";


        View::composer('*', function ($view) {
            $events = schedule::get();
            $event_list = [];
            foreach ($events as $key => $event) {
                $event_list[] = Calendar::event(
                    $event->event_name,
                    true,
                    new \DateTime($event->start_date),
                    new \DateTime($event->end_date)
                );
            }
            if(!Auth::guest()){
                $name = Auth::user()->name;
                $admin = DB::table('users')->where('name', $name)->value('admin');
                Session::put("admin",$admin);
            }



            $view->with('calendar_details', Calendar::addEvents($event_list));
        });
        /**
         * Register any application services.
         *
         * @return void
         */
    }

    public function register()
    {
        //

    }
}
