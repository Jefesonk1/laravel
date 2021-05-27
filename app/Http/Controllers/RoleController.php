<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // array(Role::all());
        // // return response()->json(['message' => 'Jobs API', 'status' => 'Connected']);;

        // return response()->json(Role::all());
        $jobs = Role::get();
        return response()->json($jobs);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

         $role = new Role();
         return response()->json($request);
         $role->fill($request->all());
         $role->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $role =  Role::find($id);
        if(!$role){
            return response()->json(['message' => 'Record not found'], 404);
        }
        return response()->json($role);

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
        $role =  Role::find($id);
        if(!$role){
            return response()->json(['message' => 'Record not found'], 404);
        }


        $role->fill($request->all());
        $role->save();
        return response()->json($role);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role =  Role::find($id);
        if(!$role){
            return response()->json(['message' => 'Record not found'], 404);
        }

        $role->delete();
        return response()->json($role);
    }
}
