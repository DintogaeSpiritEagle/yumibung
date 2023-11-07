<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UnleaSH23 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'unleash:find {user}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Unleash the power of the UnleaSH23!';

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
     * @return int
     */
    public function handle()
    {
        return User::find($this->argument('user'));
    }

}
