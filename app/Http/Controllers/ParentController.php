<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Parents;
use App\Models\Students;
use App\Models\User;
use DB;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $parents = Parents::where('ic', '=', $user->ic)->first();
        $nationality =DB::table('nationality')->select('taraf_code','taraf_name')->get();
        $states = DB::table('state')->distinct()->get(['state_code','state_name']);
        $gender = DB::table('gender')->select('gender_code','gender_name')->get();
        $marital = DB::table('marital')->select('status_code','status_name')->get();
        $race = DB::table('race')->select('race_code','race_name')->get();
        $religion = DB::table('religion')->select('religion_code','religion_name')->get();
        $okutype = DB::table('okutype')->select('oku_code','oku_name')->get();
        $relation = DB::table('guardian_relation')->select('guard_code','guard_name')->get();
        $household = DB::table('household')->select('household_code','household_name')->get();
        // dd($states);
    
        $name=$user->name;
        $ic=$user->ic;
        $role = $user->role;
        $email = $user->email;

        
      

        if($ic != 'null'){
            switch ($role){
                case 'student':
                    return view('parent.index',[ 

                            'parents'=> $parents,
                            compact('user', 'parents'),
                            'user'=> $user,
                            'nationality'=>$nationality,
                            'states'=>$states,
                            compact('states'),
                            'gender'=>$gender,  
                            'marital'=>$marital,
                            'race'=>$race,
                            'religion'=>$religion,
                            'okutype'=>$okutype,
                            'relation'=>$relation,
                            'household'=>$household,
                        
                        ]);
                    break;
                case 'admin':
                    return view('personal.index',[ 

                            // 'declare_user'=> $declare_user,
                            // compact('user', 'declare_user')    
                        
                        ]);
                    break;
                case 'hod':
                    return view('declaration.index3',[ 

                        // 'declare'=> $declare    
                    
                    ]);
                    break;
            }
        }
        else {
        Auth::logout();
        return view('dashboard.inactive');
        }
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
        

        $parents = Parents::find($id);
        $parents = Parents::where('user_id',$id)->first();
        $parents->p1_name = $request->input('p1_name');
        $parents->p1_ic = $request->input('p1_ic');
        $parents->p1_nation = $request->input('p1_nation');
        $parents->p1_email = $request->input('p1_email');
        $parents->p1_phone = $request->input('p1_phone');
        $parents->p1_marital = $request->input('p1_marital');
        $parents->p1_race = $request->input('p1_race');
        $parents->p1_religion = $request->input('p1_religion');
        $parents->p1_relation = $request->input('p1_relation');
        $parents->p1_nooku = $request->input('p1_nooku');
        $parents->p1_income = $request->input('p1_income'); 
        $parents->p1_name = $request->input('p1_name');
        $parents->p2_name = $request->input('p2_name');
        $parents->p2_ic = $request->input('p2_ic');
        $parents->p2_nation = $request->input('p2_nation');
        $parents->p2_email = $request->input('p2_email');
        $parents->p2_phone = $request->input('p2_phone');
        $parents->p2_marital = $request->input('p2_marital');
        $parents->p2_race = $request->input('p2_race');
        $parents->p2_religion = $request->input('p2_religion');
        $parents->p2_relation = $request->input('p2_relation');
        $parents->p2_nooku = $request->input('p2_nooku');
        $parents->p2_income = $request->input('p2_income');
        $parents->household = $request->input('household');
        

        $parents->save();
        return redirect('/parent')->with('success', 'Record saved.');
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
