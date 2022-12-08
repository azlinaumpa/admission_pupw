<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Academic;
use DB;

class AcademicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $academic = Academic::where('ic', '=', $user->ic)->first();
        $school_type =DB::table('school_type')->select('school_type_code','school_type_name')->get();
        $spm_grade =DB::table('spm_grade')->select('spm_code','spm_grade','value_grade')->get();
        $subA =DB::table('spm_subject')->whereIn('subject_code_no', array('1223','1225','5228','5301','5227','5302'))->get();
        $subB =DB::table('spm_subject')->whereIn('subject_code_no', array('4551','4561','	
        3761','3762','3760','3763','3759','3764','3771','3768','3758','3769','3729','3528','3765','	
        3770','3756','3755','3766','3767','3757','4571','4572','8862'))->get();
        $spm_subject =DB::table('spm_subject')->select('subject_code_no','subject_code','subject_name')->get();
        $name=$user->name;
        $ic=$user->ic;
        $role = $user->role;
        $email = $user->email;

        
      

        if($ic != 'null'){
            switch ($role){
                case 'student':
                    return view('academic.index',[ 

                           'user'=> $user,
                           'academic'=>$academic,                           
                           'school_type'=>$school_type,
                           'spm_grade'=>$spm_grade,
                           'subA'=>$subA,
                           'subB'=>$subB,
                           'spm_subject'=>$spm_subject,
                        
                        ]);
                    break;
                case 'admin':
                    return view('academic.index',[ 

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
        // $this->validate($request, [

        //     'sub4' => 'present|nullable',
        //     'gred4' => 'present|nullable',
        //     'sub5' => 'present|nullable',
        //     'gred5' => 'present|nullable',
        //     'sub6' => 'present|nullable',
        //     'gred6' => 'present|nullable',
        //     'sub7' => 'present|nullable',
        //     'gred7' => 'present|nullable',
        //     'sub8' => 'present|nullable',
        //     'gred8' => 'present|nullable',
        //     'sub9' => 'present|nullable',
        //     'gred9' => 'present|nullable',
        //     'sub10' => 'present|nullable',
        //     'gred10' => 'present|nullable',
        //     'sub11' => 'present|nullable',
        //     'gred11' => 'present|nullable',
        //     'sub12' => 'present|nullable',
        //     'gred12' => 'present|nullable',
        //     'sub13' => 'present|nullable',
        //     'gred13' => 'present|nullable',
        //     'sub14' => 'present|nullable',
        //     'gred14' => 'present|nullable',
        //     'sub15' => 'present|nullable',
        //     'gred15' => 'present|nullable',
            
        // ]);


        $academic = Academic::find($id);
        $academic = Academic::where('user_id',$id)->first();
        $gred1A =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred1_A'))->first();
        $gred1B =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred1_B'))->first();
        $gred2A =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred2_A'))->first();
        $gred2B =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred2_B'))->first();
        $gred3A =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred3_A'))->first();
        $gred3B =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred3_B'))->first();
        $gred4A =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred4_A'))->first();
        $gred4B =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred4_B'))->first();
        $gred5A =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred5_A'))->first();
        $gred5B =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred5_B'))->first();
        $gred6A =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred6_A'))->first();
        $gred6B =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred6_B'))->first();
        $gred7A =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred7_A'))->first();
        $gred7B =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred7_B'))->first();
        $gred8  =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred8'))->first();
        $gred9  =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred9'))->first();
        $gred10 =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred10'))->first();
        $gred11 =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred11'))->first();
        $gred12 =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred12'))->first();
        $gred13 =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred13'))->first();
        $gred14 =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred14'))->first();
        $gred15 =  DB::table('spm_grade')->select('value_grade')->where('spm_code', '=',$request->input('gred15'))->first();

        $aliran=$request->input('spm_aliran');
        $academic->spm_year = $request->input('spm_year');
        $academic->spm_aliran = $request->input('spm_aliran');
        $academic->spm_number = $request->input('spm_number');
        $academic->exam_type = $request->input('exam_type');
        $academic->school_type = $request->input('school_type');
        $academic->school_name = $request->input('school_name');
       

        if($aliran=='A'){
            $academic->kodspm1 = $request->input('sub1A');
            $academic->kodspm2 = $request->input('sub2A');
            $academic->kodspm3 = $request->input('sub3A');
            $academic->kodspm4 = $request->input('sub4A');
            $academic->kodspm5 = $request->input('sub5A');
            $academic->kodspm6 = $request->input('sub6A');
            $academic->kodspm7 = $request->input('sub7A');
            $academic->gredspm1 = $request->input('gred1_A');
            $academic->valuespm1 = $gred1A->value_grade;
            $academic->gredspm2 = $request->input('gred2_A');
            $academic->valuespm2 = $gred2A->value_grade;
            $academic->gredspm3 = $request->input('gred3_A');
            $academic->valuespm3 = $gred3A->value_grade;
            $academic->gredspm4 = $request->input('gred4_A');
            $academic->valuespm4 = $gred4A->value_grade;
            $academic->gredspm5 = $request->input('gred5_A');
            $academic->valuespm5 = isset($gred5_A) ? $gred5A->value_grade : null;
            $academic->gredspm6 = $request->input('gred6_A');
            $academic->valuespm6 = isset($gred6_A) ? $gred6A->value_grade : null;
            $academic->gredspm7 = $request->input('gred7_A');
            $academic->valuespm7 = isset($gred7_A) ? $gred7A->value_grade : null;
        }
        else{
            $academic->kodspm1 = $request->input('sub1B');
            $academic->kodspm2 = $request->input('sub2B');
            $academic->kodspm3 = $request->input('sub3B');
            $academic->kodspm4 = $request->input('sub4B');
            $academic->kodspm5 = $request->input('sub5B');
            $academic->kodspm6 = $request->input('sub6B');
            $academic->kodspm7 = $request->input('sub7B');
            $academic->gredspm1 = $request->input('gred1_B');
            $academic->valuespm1 = isset($gred1_B) ? $gred1B->value_grade : null;
            $academic->gredspm2 = $request->input('gred2_B');
            $academic->valuespm2 = isset($gred2_B) ? $gred2B->value_grade : null;
            $academic->gredspm3 = $request->input('gred3_B');
            $academic->valuespm3 = isset($gred3_B) ? $gred3B->value_grade : null;
            $academic->gredspm4 = $request->input('gred4_B');
            $academic->valuespm4 = isset($gred4_B) ? $gred4B->value_grade : null;
            $academic->gredspm5 = $request->input('gred5_B');
            $academic->valuespm5 = isset($gred5_B) ? $gred5B->value_grade : null;
            $academic->gredspm6 = $request->input('gred6_B');
            $academic->valuespm6 = isset($gred6_B) ? $gred6B->value_grade : null;
            $academic->gredspm7 = $request->input('gred7_B');
            $academic->valuespm7 = isset($gred7_B) ? $gred7B->value_grade : null;
        }
            
        $academic->kodspm8 = $request->input('sub8');
        $academic->gredspm8 = $request->input('gred8');
        $academic->valuespm8 = isset($gred8) ? $gred8->value_grade : null;
        $academic->kodspm9 = $request->input('sub9');
        $academic->gredspm9 = $request->input('gred9');
        $academic->valuespm9 = isset($gred9) ? $gred9->value_grade : null;
        $academic->kodspm10 = $request->input('sub10');
        $academic->gredspm10 = $request->input('gred10');
        $academic->valuespm10 = isset($gred10) ? $gred10->value_grade : null; 
        $academic->kodspm11 = $request->input('sub11');
        $academic->gredspm11 = $request->input('gred11');
        $academic->valuespm11 = isset($gred11) ? $gred11->value_grade : null;
        $academic->kodspm12 = $request->input('sub12');
        $academic->gredspm12 = $request->input('gred12');
        $academic->valuespm12 = isset($gred12) ? $gred12->value_grade : null;
        $academic->kodspm13 = $request->input('sub13');
        $academic->gredspm13 = $request->input('gred13');
        $academic->valuespm13 = isset($gred13) ? $gred13->value_grade : null;
        $academic->kodspm14 = $request->input('sub14');
        $academic->gredspm14 = $request->input('gred14');
        $academic->valuespm14 = isset($gred14) ? $gred14->value_grade : null;
        $academic->kodspm15 = $request->input('sub15');
        $academic->gredspm15 = $request->input('gred15');
        $academic->valuespm15 = isset($gred15) ? $gred15->value_grade : null;
     
            
           
        
        
       
        
// dd($academic);
    $academic->save();
        return redirect('/academic')->with('success', 'Record saved.');
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
