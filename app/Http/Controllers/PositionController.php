<?php

namespace App\Http\Controllers;

use App\Department;
use App\Position;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Position::all();
        return view('position.home', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $department = Department::all();
        return view(
            'position.add',
            ['department' => $department]
        );

        // $dept = Department::all();
        // return view('position.add', ['dept' => $dept]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pos = new Position;
        $pos->name = $request->name;
        $pos->department_id = $request->department_id;
        $pos->save();



        // 'name' => $request->name,
        // 'department_id' => $request->department_id

        return redirect('/position');
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
        $position = Position::find($id);
        $department = Department::all();
        return view('position.edit', [
            'data' => $position,
            'department' => $department
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
        // $pos = Position::find($request->id);
        // $pos->name = $request->name;
        // $pos->department_id = $request->department_id;
        // $pos->save();

        Position::where('id', '=', $request->id)->update([
            'name' => $request->name,
            'department_id' => $request->department_id,
        ]);

        return redirect('/position');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pos = Position::find($id);
        $pos->delete();

        return redirect('/position');
    }
}