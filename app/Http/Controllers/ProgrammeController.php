<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ProgrammeApp;
use App\Models\User;

class ProgrammeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $programme_app = ProgrammeApp::where('ic', '=', $user->ic)->first();
        $programme =DB::table('programme')->select('pg_code','pg_name')->get();
        return view('programme.index',['programme'=>$programme,'programme_app'=>$programme_app, 'user'=>$user]);
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
        // $user = User::find($id);
        $programme = ProgrammeApp::where('user_id',$id)->first();
        
        $programme->first_choice = $request->input('first_choice');
        $programme->second_choice = $request->input('second_choice');
        $programme->third_choice = $request->input('third_choice');
        $programme->save();
        return redirect('/programme')->with('success', 'Record saved.');
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
