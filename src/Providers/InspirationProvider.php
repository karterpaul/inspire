<?php

namespace Karterpaul\Inspire\Providers;

use Illuminate\Support\ServiceProvider;
use Log;
class InspirationProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
	    //
	    
	     Log::info("service provider");   

	     $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
             $this->loadViewsFrom(__DIR__.'/../views', 'inspire');

       
    }
}
