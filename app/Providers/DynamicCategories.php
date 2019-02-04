<?php
namespace App\Providers;
use App\CategoriesModel; // write model name here
use Illuminate\Support\ServiceProvider;
class DynamicCategories extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('categories_array', CategoriesModel::all());
        });
    }

}

/**
 * Created by PhpStorm.
 * User: Maturita
 * Date: 17. 10. 2018
 * Time: 9:51
 */