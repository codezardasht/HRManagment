<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeExport;
use App\Models\ActivityLog;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\EmloyeeImport;

class EmployeeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function import(Request $request)
    {
        $this->activity_log('import csv','1','0');
        $path = $request->file('file')->store('temp');
        $path1 = storage_path('app').'/'.$path;
        Excel::import(new EmloyeeImport,$path1);

        return response()->json([
            'status'=>'success',
            'message'=>'successfully',
        ]);
    }
    public function export()
    {
        $this->activity_log('export csv','1','0');
        return Excel::download(new EmployeeExport, 'employee.csv');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        try{

            $this->activity_log('Get All Employee','1','0');

            $getAllEmployee = Employee::where('deleted','0')->get();

            if(count($getAllEmployee)>0)
            {
                return response()->json([
                    'status'=>'success',
                    'message'=>'successfully',
                    'data'=>$getAllEmployee
                ]);
            }else{
                return response()->json([
                    'status'=>'fail',
                    'message'=>'No Data Found'
                ],404);
            }

        }    catch(\Illuminate\Database\QueryException $ex){
                    return response()->json([
                    'status'=>'fail',
                    'message'=>"Please Try Again"
                    ],404);
}

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try{

        $validate_input = $request->validate([
           'name'=>'required',
           'age'=>'required|numeric',
           'salary'=>'required',
           'job_title'=>'required'
        ]);

//        $CreateEmployee = Employee::create([
//           'name'=>$request->name,
//           'age'=>$request->age,
//           'salary'=>$request->salary,
//           'job_title'=>$request->job_title,
//           'hired_date'=>$request->hired_date,
//           'manager_id'=>$request->manager_id,
//        ]);

        $CreateEmployee = new Employee();
        $CreateEmployee->name = $request->name;
        $CreateEmployee->age = $request->age;
        $CreateEmployee->salary = $request->salary;
        $CreateEmployee->job_title = $request->job_title;
        $CreateEmployee->hired_date = $request->hired_date;
        $CreateEmployee->manager_id = $request->manager_id;
        $CreateEmployee->email = $request->email;

            if($CreateEmployee->save()){
                $id = $CreateEmployee->id;

                $this->activity_log('Create Employee','1',$id);
                return response()->json([
                    'status'=>'success',
                    'message'=>'successfully add'
                ]);
            }else{
                return response()->json([
                    'status'=>'fail',
                    'message'=>'Please Try Again'
                ],404);
            }

    } catch(\Illuminate\Database\QueryException $ex){
            return response()->json([
            'status'=>'fail',
            'message'=>$ex->getMessage()
            ],404);
}
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        try{
            $this->activity_log('show Employee','1',$id);

                $getSingleEmployee = Employee::select('name','age','salary','gender','hired_date','job_title')->find($id);



            if($getSingleEmployee)
            {
                return response()->json([
                    'status'=>'success',
                    'message'=>'successfully',
                    'data'=>$getSingleEmployee
                ]);
            }else{
                return response()->json([
                    'status'=>'fail',
                    'message'=>'No Data Found'
                ],404);
            }

        }    catch(\Illuminate\Database\QueryException $ex){
            return response()->json([
                'status'=>'fail',
                'message'=>"Please Try Again"
            ],404);
        }
    }
    public function search(Request $request)
    {
        try{
            $this->activity_log('Search Employee','1','0');
                $search = $request->get('q');

                $getSingleEmployee = Employee::where('deleted','0');

                if($search != "")
                {
                    $getSingleEmployee = $getSingleEmployee->where('name','LIKE','%'.$search.'%');
                }

                $getSingleEmployee = $getSingleEmployee->get();


            if(count($getSingleEmployee)>0)
            {
                return response()->json([
                    'status'=>'success',
                    'message'=>'successfully',
                    'data'=>$getSingleEmployee
                ]);
            }else{
                return response()->json([
                    'status'=>'fail',
                    'message'=>'No Data Found'
                ],404);
            }

        }    catch(\Illuminate\Database\QueryException $ex){
            return response()->json([
                'status'=>'fail',
                'message'=>"Please Try Again"
            ],404);
        }
    }

    public function exportCsv(Request $request)
    {
        $fileName = 'employee.csv';
        $tasks = Employee::all();

//        dd($tasks);

        $headers = array(
            "Content-type"        => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        );

        $columns = array('id', 'name', 'age', 'salary', 'gender','hired_date','job_title','manager_id');

        $callback = function() use($tasks, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($tasks as $task) {
                $row['id']  = $task->id;
                $row['name']  = $task->name;
                $row['age']    = $task->age;
                $row['salary']    = $task->salary;
                $row['gender']  = $task->gender;
                $row['hired_date']  = $task->hired_date;
                $row['job_title']  = $task->job_title;
                $row['manager_id']  = $task->manager_id;

                fputcsv($file, array($row['id'], $row['name'], $row['age'], $row['salary'], $row['gender'], $row['hired_date'],$row['job_title'],$row['manager_id']));
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function getEmployeeManager($id)
    {
        try{
            $this->activity_log('get Employee by Manager','1',$id);
            $getEmployeeManager = Employee::select('employe.name','employe.age','employe.salary','employe.gender','employe.hired_date','employe.job_title','em.name as manager_name')
                ->leftjoin('employe as em','em.id','employe.manager_id')
                ->where('employe.manager_id',$id)->get();
            if(count($getEmployeeManager)>0)
            {
                return response()->json([
                    'status'=>'success',
                    'message'=>'successfully',
                    'data'=>$getEmployeeManager
                ]);
            }else{
                return response()->json([
                    'status'=>'fail',
                    'message'=>'No Data Found'
                ],404);
            }

        }    catch(\Illuminate\Database\QueryException $ex){
            return response()->json([
                'status'=>'fail',
                'message'=>"please Try AGain"
            ],404);
        }
    }
    public function getEmployeeManagerSalary($id)
    {
        try{
            $this->activity_log('get Employee by Manager Salary','1',$id);
            $getEmployeeManager = Employee::select('employe.name','employe.salary')
                ->where('employe.manager_id',$id)->get();
            if(count($getEmployeeManager)>0)
            {
                return response()->json([
                    'status'=>'success',
                    'message'=>'successfully',
                    'data'=>$getEmployeeManager
                ]);
            }else{
                return response()->json([
                    'status'=>'fail',
                    'message'=>'No Data Found'
                ],404);
            }

        }    catch(\Illuminate\Database\QueryException $ex){
            return response()->json([
                'status'=>'fail',
                'message'=>"please Try AGain"
            ],404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $this->activity_log('Edit Employee','1',$id);
            $getSingleEmployee = Employee::find($id);
            if($getSingleEmployee)
            {
                return response()->json([
                    'status'=>'success',
                    'message'=>'successfully',
                    'data'=>$getSingleEmployee
                ]);
            }else{
                return response()->json([
                    'status'=>'fail',
                    'message'=>'No Data Found'
                ],404);
            }

        }    catch(\Illuminate\Database\QueryException $ex){
            return response()->json([
                'status'=>'fail',
                'message'=>"Please Try Again"
            ],404);
        }
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        try{
            $validate_input = $request->validate([
                'id'=>'required|numeric',
                'name'=>'required',
                'age'=>'required|numeric',
                'email'=>'required|unique:employe,email,'.$request->id,
                'salary'=>'required',
                'job_title'=>'required'
            ]);

            $getEmail = Employee::find($request->id);
            if($getEmail->salary != $request->salary)
            {
                $salary = $request->salary;
                $mail = mail($getEmail->email,'Yor Salary CHanged',"Your New Salary Is : $salary ");
            }




            $CreateEmployee = Employee::where('id',$request->id)->update([
                'name'=>$request->name,
                'age'=>$request->age,
                'salary'=>$request->salary,
                'job_title'=>$request->job_title,
                'hired_date'=>$request->hired_date,
                'manager_id'=>$request->manager_id,
                'email'=>$request->email,
            ]);

            if($CreateEmployee){
                $this->activity_log('Update Employee','1',$request->id);

                return response()->json([
                    'status'=>'success',
                    'message'=>'successfully update'
                ]);
            }else{
                return response()->json([
                    'status'=>'fail',
                    'message'=>'Please Try Again'
                ],404);
            }

        } catch(\Illuminate\Database\QueryException $ex){
            return response()->json([
                'status'=>'fail',
                'message'=>"Please Try Again"
            ],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{


            $deletedEmployee = Employee::where('id',$id)->update([
                'deleted'=>'1',
            ]);

            if($deletedEmployee){
                $this->activity_log('Update Employee','1',$id);
                return response()->json([
                    'status'=>'success',
                    'message'=>'successfully deleted'
                ]);
            }else{
                return response()->json([
                    'status'=>'fail',
                    'message'=>'Please Try Again'
                ],404);
            }

        } catch(\Illuminate\Database\QueryException $ex){
            return response()->json([
                'status'=>'fail',
                'message'=>"Please Try Again"
            ],404);
        }
    }

    public function activity_log($activity ,$type , $VRID )
    {


        try{

            $file = fopen('C:\xampp\htdocs\HRManagment\log.txt',"a");



            $act_created = ActivityLog::create([
                'user_id'=>\Auth::id(),
                'activity'=>$activity,
                'api_token'=>Auth::user()->api_token,
                'type'=>$type,
                'VRID'=>$VRID,
            ]);
            $logFile = array( 'user_id'=>\Auth::id(),
                'activity'=>$activity,
                'api_token'=>Auth::user()->api_token,
                'type'=>$type,
                'VRID'=>$VRID );

            $logFile = json_encode($logFile);
            fwrite($file,$logFile);
            fclose($file);


            if($act_created){

            }else{
                return response()->json([
                    'status'=>'fail',
                    'message'=>'Please Try Again'
                ],404);
            }

        } catch(\Illuminate\Database\QueryException $ex){
            return response()->json([
            'status'=>'fail',
            'message'=>"Please Try Again"
            ],404);
}
    }
}
