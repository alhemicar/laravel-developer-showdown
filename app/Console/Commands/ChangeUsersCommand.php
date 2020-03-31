<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class ChangeUsersCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:changeUser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $user = User::first();

        $timezones = ['CET', 'CST', 'GMT+1'];

        $random = array_rand($timezones);

        $user->update([
            'firstName' => 'NewName',
            'lastName' => 'NewLastName',
            'timezone' => $timezones[$random]
        ]);

        $this->info('User changed successfully');
    }
}
