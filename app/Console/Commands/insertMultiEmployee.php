<?php

namespace App\Console\Commands;

use App\Models\Employee;
use Carbon\Carbon;
use Dotenv\Util\Str;
use Illuminate\Console\Command;

class insertMultiEmployee extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insertMultiEmployee';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'insert multiple employee';

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
        $j = 0;
        for($i = 0 ; $i <=1000 ; $i++)
        {
            $j = $i+1;
            if(($i % 2) == 0)
            {
                $gender = "male";
                $job_title = 'manager';
            }else{
                $gender = "female";
                $job_title = 'employee';
            }

            $min = 10 ;
            $max = 10000;
            Employee::create([
               'name'=>\Illuminate\Support\Str::random(10),
                   'age'=>\Illuminate\Support\Str::start(10,50),
                   'salary'=>mt_rand ($min*10, $max*10) / 10,
                   'gender'=>$gender,
                   'job_title'=>$job_title,
                    'manager_id'=>$j
            ]);
        }
    }
}
