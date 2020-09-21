<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Position;

class PositionApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Position::all();

        return response()->json([
            'code' => 200,
            'value' => $data,
            'message' => 'success'
        ]);
    }
    public function store(Request $request)
    {
        // dd($request);

        // Position::create([
        //     'name' => $request->name,
        //     'department_id' => $request->department_id,
        // ]);

        $position = new Position;
        $position->name = $request->name;
        $position->department_id = $request->department_id;
        $position->save();

        return response()->json([
            'code' => 201,
            'message' => 'greate success! new position created'
        ]);
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
    public function update(Request $request)
    {
        // Position::where('id', '=', .$request->id)->update([
        //     'name' => $request->name,
        //     'department_id' => $request->department_id,
        // ]);
        $position = Position::find($request->id);
        $position->name = $request->name;
        $position->department_id = $request->department_id;
        $position->save();

        return response()->json([
            'code' => 202,
            'message' => 'great success!  position was updated'
        ]);
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