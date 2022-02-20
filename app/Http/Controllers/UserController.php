<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        try {
            $request->validate([
                'name'=>'required',
                'password'=>'required',
                'email'=>'required|email'
            ]);

            $CreateUser = User::create([
                'name'=>$request->name,
                'password'=>bcrypt($request->password),
                'email'=>$request->email,
                'api_token'=>Str::random(10)
            ]);

            if($CreateUser){
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
                'message'=>'Please Try Again'
            ],404);
        }
        //


    }
    public function login(Request $request)
    {

        try {
            $request->validate([
                'password'=>'required',
                'email'=>'required|email'
            ]);

            $credentials = [
                'email' => $request->email,
                'password' => $request->password,
            ];

            // Dump data


            if (Auth::attempt($credentials)) {
                   return response()->json([
                    'status'=>'success',
                    'token'=>Auth::user()->api_token
                ]);
            }




        } catch(\Illuminate\Database\QueryException $ex){
            return response()->json([
                'status'=>'fail',
                'message'=>"Please Try Again"
            ],404);
        }
        //


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
