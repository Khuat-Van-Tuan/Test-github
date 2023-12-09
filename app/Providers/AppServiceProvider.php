<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use App\View\Components\Alert;
//use App\View\Components\Inputs\Botton;
//use App\View\Components\Forms\Botton as Formbutton;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        Blade::directive('datetime', function (string $expression) {
            $expression = trim($expression, '\'');
            $expression = trim($expression, '"');
            $dateobject = date_create($expression);
            if(!empty($dateobject)){
                $dateFormart = $dateobject->format('m/d/Y H:i:s');
                return $dateFormart;
            }
            return false;
            
        });

        Blade::if('env', function (string $value) {
            if(config('app.env')===$value){
                return true;
            }
            return false;
        });

        Blade::component('package-alert', Alert::class);
        //Blade::component('button', Botton::class);
        //Blade::component('form-button', Formbutton::class);
    }
}
