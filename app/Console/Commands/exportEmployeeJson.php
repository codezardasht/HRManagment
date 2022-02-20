<?php

namespace App\Console\Commands;

use App\Models\ActivityLog;
use App\Models\Employee;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;

class exportEmployeeJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exportEmployeeJson';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'export all employe file';

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
        $getAllEmploye = Employee::all();

        if($getAllEmploye)
        {
            $file = fopen('C:\xampp\htdocs\HRManagment\employee.json',"a");
            $logFile = json_encode($getAllEmploye);
            fwrite($file,$logFile);
            fclose($file);
        }
    }
}
