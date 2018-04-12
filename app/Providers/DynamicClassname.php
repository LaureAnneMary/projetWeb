<?php
namespace App\Providers;
use App\Rang_utilisateur;
use Illuminate\Support\ServiceProvider;
class DynamicClassname extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view){
            $view->with('class_array', Rang_utilisateur::all());
        });
    }
}