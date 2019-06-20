<?php

namespace Abdodeve\ClearTable;

use Illuminate\Support\ServiceProvider;
use \Abdodeve\ClearTable\Console\Commands\clearTable ;

class ClearTableServiceProvider extends ServiceProvider
{ 
    
    protected $commands = [
        'Abdodeve\ClearTable\Console\Commands\clearTable'
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
        $this->app->make('Abdodeve\ClearTable\SampleController');

        // register the Command
        $this->app->bind('command.abc:delete', clearTable::class);

        $this->commands([
            'command.abc:delete',
        ]);

    }
}
