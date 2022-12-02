<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Document;
use App\Models\Students;
use DB;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $student = User::join('students', 'users.id', '=', 'students.user_id')->where('app_status','=','applied')->get();
        // dd($student);
        
        return view('application.index', [compact('user'), 'user'=> $user, 'student'=> $student]);
    }

    public function index2()
    {
        $user = Auth::user();
        $student = User::join('students', 'users.id', '=', 'students.user_id')->where('app_status','=','processed')->get();
        dd($student);
        
        return view('application.index2', [compact('user'), 'user'=> $user, 'student'=> $student]);
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
        $nationality =DB::table('nationality')->select('taraf_code','taraf_name')->get();
        $states = DB::table('state')->distinct()->get(['state_code','state_name']);
        $gender = DB::table('gender')->select('gender_code','gender_name')->get();
        $marital = DB::table('marital')->select('status_code','status_name')->get();
        $race = DB::table('race')->select('race_code','race_name')->get();
        $religion = DB::table('religion')->select('religion_code','religion_name')->get();
        $okutype = DB::table('okutype')->select('oku_code','oku_name')->get();
        $relation = DB::table('guardian_relation')->select('guard_code','guard_name')->get();
        $household = DB::table('household')->select('household_code','household_name')->get();
        $application = User::join('students', 'users.id', '=', 'students.user_id')->find($id);
        $application2 = User::join('parents', 'users.id', '=', 'parents.user_id')->find($id);
        $academic = User::join('academic', 'users.id', '=', 'academic.user_id')->find($id);
        $school_type =DB::table('school_type')->select('school_type_code','school_type_name')->get();
        $sub5 =  DB::table('spm_subject')->select('subject_name')->where('subject_code_no', '=',$academic->kodspm5)->first();
        $sub6 =  DB::table('spm_subject')->select('subject_name')->where('subject_code_no', '=',$academic->kodspm6)->first();
        $sub7 =  DB::table('spm_subject')->select('subject_name')->where('subject_code_no', '=',$academic->kodspm7)->first();
        $sub8 =  DB::table('spm_subject')->select('subject_name')->where('subject_code_no', '=',$academic->kodspm8)->first();
        $sub9 =  DB::table('spm_subject')->select('subject_name')->where('subject_code_no', '=',$academic->kodspm9)->first();
        $sub10 =  DB::table('spm_subject')->select('subject_name')->where('subject_code_no', '=',$academic->kodspm10)->first();
        $sub11 =  DB::table('spm_subject')->select('subject_name')->where('subject_code_no', '=',$academic->kodspm11)->first();
        $sub12 =  DB::table('spm_subject')->select('subject_name')->where('subject_code_no', '=',$academic->kodspm12)->first();
        $sub13 =  DB::table('spm_subject')->select('subject_name')->where('subject_code_no', '=',$academic->kodspm13)->first();
        $sub14 =  DB::table('spm_subject')->select('subject_name')->where('subject_code_no', '=',$academic->kodspm14)->first();
        $sub15 =  DB::table('spm_subject')->select('subject_name')->where('subject_code_no', '=',$academic->kodspm15)->first();
        $gred1 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm1)->first();
        $gred2 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm2)->first();
        $gred3 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm3)->first();
        $gred4 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm4)->first();
        $gred5 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm5)->first();
        $gred6 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm6)->first();
        $gred7 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm7)->first();
        $gred8 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm8)->first();
        $gred9 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm9)->first();
        $gred10 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm10)->first();
        $gred11 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm11)->first();
        $gred12 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm12)->first();
        $gred13 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm13)->first();
        $gred14 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm14)->first();
        $gred15 =  DB::table('spm_grade')->select('spm_grade')->where('spm_code', '=',$academic->gredspm15)->first();
        
       
        $document = User::where('user_id','=',$id)->join('document', 'users.id', '=', 'document.user_id')->get();

        // dd($document);
        return view('application.edit',    
                [compact('application'), 
                'application'=> $application,
                'nationality'=> $nationality,
                'states'=> $states,
                'gender'=> $gender,
                'marital'=> $marital,
                compact('marital'),
                'race'=> $race,
                'religion'=> $religion,
                'okutype'=> $okutype,
                'application2'=> $application2,
                'relation'=> $relation,
                'household'=> $household,
                'academic'=> $academic,
                'school_type'=> $school_type,
                'sub5'=> $sub5,
                'sub6'=> $sub6,
                'sub7'=> $sub7,
                'sub8'=> $sub8,
                'sub9'=> $sub9,
                'sub10'=> $sub10,
                'sub11'=> $sub11,
                'sub12'=> $sub12,
                'sub13'=> $sub13,
                'sub14'=> $sub14,
                'sub15'=> $sub15,
                'gred1'=> $gred1,
                'gred2'=> $gred2,
                'gred3'=> $gred3,
                'gred4'=> $gred4,
                'gred5'=> $gred5,
                'gred6'=> $gred6,
                'gred7'=> $gred7,
                'gred8'=> $gred8,
                'gred9'=> $gred9,
                'gred10'=> $gred10,
                'gred11'=> $gred11,
                'gred12'=> $gred12,
                'gred13'=> $gred13,
                'gred14'=> $gred14,
                'gred15'=> $gred15,
                'document'=> $document,
            ]);
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
        //
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
