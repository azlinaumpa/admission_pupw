<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Document;
use DB;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $document = Document::where('ic', '=', $user->ic)->orderby('id', 'desc')->paginate(10);
        $document_type =DB::table('document_type')->select('document_code','document_name')->Where('document_code','like',"D%")->get();
        $name=$user->name;
        $ic=$user->ic;
        $role = $user->role;
        $email = $user->email;


        if($ic != 'null'){
            switch ($role){
                case 'student':
                    return view('document.index',[ 

                           'user'=> $user,
                           'document'=>$document,
                           'document_type'=>$document_type,
                        
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
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        $document = new Document;
        $user = Auth::user();

        
        $document_name =DB::table('document_type')->select('document_name')->Where('document_code','=',$request->filename)->first();

        $document->ic = $user->ic;
        $document->file_code = $request->filename;
        $document->file_name = $document_name->document_name;
        $document->user_id = $user->id;
        $fileName = $user->ic.'_'.$request->file->getClientOriginalName();;
        $filePath = $request->file('file')->storeAs('uploads', $fileName, 'public');
        $document->location = $filePath;
        $document->save();
        // dd($document);
        return redirect('/document')->with('status', 'Blog Post Form Data Has Been inserted');
          
        
    
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
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $document = Document::find($id);
        $document->delete();
        return redirect('/document');
    }
}
