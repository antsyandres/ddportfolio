<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class MemberController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all();
        return view('member.index')->with('users', $users);
    }

    public function edit(Request $request, $id)
    {

        $users = User::find($id);
        return view('member.edit')->with('users',$users)->with('user_id',$id);

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
        $id = $request->input('users_id');

        $users = User::find($id);
        $users->first_name = $request->input('first_name');
        $users->last_name = $request->input('last_name');
        $users->mi = $request->input('mi');
        $users->email = $request->input('email');
        $users->image_file = $request->input('image_file');
        $users->course = $request->input('course');
        $users->background = $request->input('background');

            if ($request->hasFile('image_file')) {
                $users->image_file = $fileName = time().'.'.request()->image_file->getClientOriginalExtension();
                request()->image_file->move(public_path('img'), $fileName);
            }
            $users->save();

            return redirect()->route('dashboard', ['id' =>  $id]);
    }
}
