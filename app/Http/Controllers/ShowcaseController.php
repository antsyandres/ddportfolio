<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Showcase;

class ShowcaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $users_ids = Showcase::where('users_id',$id)->get();
        return view('showcase.index')->with('users_ids', $users_ids)->with('user_id', $id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $showcases = Showcase::where('users_id', $id)->orderBy('id','asc')->get();
        // echo "<pre>"; 
        // echo json_encode(json_decode($showcases), JSON_PRETTY_PRINT); 
        // echo "</pre>";
        // return view('showcase')->with('showcases', $showcases)->with('user_id', $id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user_id = $request->input('users_id');

        $showcase = new Showcase();
        $showcase->users_id = $user_id;
        $showcase->activity_name = $request->input('activity_name');
        $showcase->activity_title = $request->input('activity_title');
        $showcase->activity_description = $request->input('activity_description');
        $showcase->file_name = $fileName = time().'.'.request()->file_name->getClientOriginalExtension();
        request()->file_name->move(public_path('video'), $fileName);


        $showcase->save();

        return back()->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users = User::all();
        $showcases = Showcase::all();
        return view('showcase')->with('showcases', $showcases)->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {

        $showcase = Showcase::find($id);
        return view('showcase.edit')->with('showcase',$showcase)->with('user_id',$id);

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

        $showcase = Showcase::find($id);
        $showcase->activity_name = $request->input('activity_name');
        $showcase->activity_title = $request->input('activity_title');
        $showcase->activity_description = $request->input('activity_description');

            if ($request->hasFile('file_name')) {
                $showcase->file_name = $fileName = time().'.'.request()->file_name->getClientOriginalExtension();
                request()->file_name->move(public_path('video'), $fileName);
            }
            $showcase->save();

            return redirect()->route('showcase.index', ['id' =>  $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $users = Showcase::find($id);

        $path = public_path()."/video/".$users->file_name;
        if(file_exists($path) !== 0 ){
        @unlink($path);
        }

        $users->delete();

        return back()->withInput();

    }
}
