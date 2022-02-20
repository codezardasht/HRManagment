<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
    public function index($date){



        $getLogs = ActivityLog::where('created_at','LIKE',"%$date%")->get();

        return response()->json([
            'data' => $getLogs
        ]);



    }
}
