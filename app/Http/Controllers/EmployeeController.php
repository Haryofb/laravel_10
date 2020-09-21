<?php

namespace App\Http\Controllers;

use App\Department;
use App\Employee;
use App\Position;
use Illuminate\Http\Request;


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Employee::all();
        return view('employee.home', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pos = Position::all();
        return view(
            'employee.add',
            ['pos' => $pos]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pos = new Employee;
        $pos->name = $request->name;
        $pos->position_id = $request->position_id;
        $pos->save();

        return redirect('/employee');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::find($id);
        return view(
            'employee.show',
            ['data' => $employee]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = Employee::find($id);
        $pos = Position::all();
        return view('employee.edit', [
            'emp' => $emp,
            'pos' => $pos
        ]);
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
        // $this->validate($request,[
        //     'nama' => 'required',
        //     'position_id' => 'required'

        $pos = Employee::find($request->id);
        $pos->name = $request->name;
        $pos->position_id = $request->position_id;
        $pos->save();

        return redirect('/employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pos = Employee::find($id);
        $pos->delete();

        return redirect('/employee');
    }
}