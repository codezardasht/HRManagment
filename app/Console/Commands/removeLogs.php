<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class removeLogs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'removeLogs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'command to remove logs';

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
        if(!file_exists("C:\xampp\htdocs\HRManagment\log.txt"))
        {
            echo "no log files found";
        }else{
            unlink('C:\xampp\htdocs\HRManagment\log.txt');
        }

    }
}
