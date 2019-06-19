<?php

namespace Abdodev\ClearTable;

use Illuminate\Support\ServiceProvider;
use \Abdodev\ClearTable\Console\Commands\clearTable ;

class ClearTableServiceProvider extends ServiceProvider
{ 
    
    protected $commands = [
        'Abdodev\ClearTable\Console\Commands\clearTable'
    ];

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        include __DIR__.'/routes.php';

        if ($this->app->runningInConsole()) {
            $this->commands([
                clearTable::class
            ]);
        }
    }

   
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // register our controller
        $this->app->make('Abdodev\ClearTable\SampleController');

        // register the Command
        $this->app->bind('command.abc:delete', clearTable::class);

        $this->commands([
            'command.abc:delete',
        ]);

    }
}
