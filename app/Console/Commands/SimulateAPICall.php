<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SimulateAPICall extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:simulateApiCall';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will simulate api call from our server';

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
        // Logging can be done in file like this and in the database, depending on internal agreements in the company
        Log::info('[34] firstname: Helen, timezone: \'America/Los_Angeles\'');
    }
}
