<?php

namespace Abdodeve\ClearTable\Console\Commands;

use Illuminate\Console\Command;
use DB;


class clearTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'table:delete {table_name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clears out all rows in the selected table';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $table_name = $this->argument('table_name') ;

        $this->comment("Cleaning {$table_name}...");

        DB::table( $table_name )
        ->delete() ;

        $this->info("Deleted record(s) from the table : {$table_name}.");

        $this->comment('All done!');
    }
}
