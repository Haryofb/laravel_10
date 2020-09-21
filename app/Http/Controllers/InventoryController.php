<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archive;
use App\Inventory;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Inventory::all();
        return view('inventory.home', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.add');

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
        $inventory = Inventory::create([
            'name' => $request->name,
            'detail' => $request->detail
        ]);

        $last_inventory = Inventory::where('name', $request->name)
            ->get()->last();

        Archive::create([
            'inventory_id' => $last_inventory->id,
            'name' => $request->archive_name,
            'detail' => $request->archive_detail
        ]);
        return redirect('/inventory');
    }
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
        $inventory = Inventory::find($id);
        $archive = Archive::where('inventory_id', '=', $id)->first();
        return view('inventory.edit', [
            'data' => $inventory,
            'archive' => $archive
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
        Inventory::where('id', '=', $request->id)->update([
            'name' => $request->name,
            'detail' => $request->detail
        ]);

        Archive::where('id', '=', $request->archive_id)->update([
            'name' => $request->archive_name,
            'detail' => $request->archive_detail
        ]);

        return redirect('/inventory');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Inventory::where('id', '=', $id)->delete();
        Archive::where('inventory_id', '=', $id)->delete();

        return redirect('/inventory');
    }
}