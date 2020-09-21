<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Position;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Member::all();
        return view('member.home', [
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $member = Member::all();
        $position = Position::all();
        return view('member.add', [
            'member' => $member,
            'position' => $position

        ]);

        // return view('member.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        // Member::create([
        //     'name' => $req->name,
        //     'position_id' => $req->position_id,
        //     'registration_id' => $req->registration_id
        // ]);
        $member = new Member;
        $member->name = $req->name;
        $member->detail = $req->detail;
        $member->position_id = $req->position;
        $member->save();

        return redirect('/member');
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
        $member = Member::find($id);
        $position = Position::all();
        return view('member.edit', [
            'member' => $member,
            'position' => $position
        ]);
        // return view('member.edit');
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
        $member = Member::find($request->id);
        $member->name = $request->name;
        $member->detail = $request->detail;
        $member->position_id = $request->postion;
        $member->save();

        return redirect('/member');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $member->delete();

        return redirect('/member');
    }
}