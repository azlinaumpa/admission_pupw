<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $user = Auth::user();
        $student = Students::where('ic', '=', $user->ic)->first();
        $nationality =DB::table('nationality')->select('taraf_code','taraf_name')->get();
        $states = DB::table('state')->distinct()->get(['state_code','state_name']);
        $gender = DB::table('gender')->select('gender_code','gender_name')->get();
        $marital = DB::table('marital')->select('status_code','status_name')->get();
        $race = DB::table('race')->select('race_code','race_name')->get();
        $religion = DB::table('religion')->select('religion_code','religion_name')->get();
        $okutype = DB::table('okutype')->select('oku_code','oku_name')->get();
        // dd($states);
    
        $name=$user->name;
        $ic=$user->ic;
        $role = $user->role;
        $email = $user->email;

        
      

        if($ic != 'null'){
            switch ($role){
                case 'student':
                    return view('personal.index',[ 

                            'student'=> $student,
                            compact('user', 'student'),
                            'user'=> $user,
                            'nationality'=>$nationality,
                            'states'=>$states,
                            compact('states'),
                            'gender'=>$gender,  
                            'marital'=>$marital,
                            'race'=>$race,
                            'religion'=>$religion,
                            'okutype'=>$okutype,
                        
                        ]);
                    break;
                case 'user':
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
        $user = User::find($id);
        $user = User::where('id',$id)->first();
        $user->name = $request->input('name');
        $user->save();

        $student = Students::find($id);
        $student = Students::where('user_id',$id)->first();
        $student->phone = $request->input('phone');
        $student->nation = $request->input('nation');
        $student->pob = $request->input('pob');
        $student->home = $request->input('home');
        $student->gender = $request->input('gender');
        $student->age = $request->input('age');
        $student->dob = $request->input('dob');
        $student->marital = $request->input('marital');
        $student->race = $request->input('race');
        $student->religion = $request->input('religion');
        $student->add1 = $request->input('add1');
        $student->add2 = $request->input('add2');
        $student->city = $request->input('city');
        $student->postcode = $request->input('postcode');
        $student->state = $request->input('state');
        $student->nooku = $request->input('nooku');
        $student->okutype = $request->input('okutype');
        

        $student->save();
        return redirect('/personal')->with('success', 'Record saved.');
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
