<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Parents;
use App\Models\Students;
use App\Models\Academic;
use App\Models\ProgrammeApp;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required','min:10'],
            'password' => ['required','max:12'],
            'ic' => 'unique:users,ic',
        ]);

        $user = User::create([
            'ic' => $request->password,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role' =>'student',
        ]); 

        event(new Registered($user));
        Auth::login($user);

        $student = new Students;
        $parent = new Parents;
        $academic = new Academic;
        $programme = new ProgrammeApp;

        $cur=date('y');
        $next=date('y')+1;
        
        $student->ic = $request->password;
        $student->user_id = request()->user()->id;
        $student->app_status ='applied';
        $student->intake = 'sem1'.$cur.'/'.$next;

        $parent->ic = $request->password;
        $parent->user_id = request()->user()->id;

        $academic->ic = $request->password;
        $academic->user_id = request()->user()->id;

        $programme->ic = $request->password;
        $programme->user_id = request()->user()->id;
       
        $student->save();
        $parent->save();
        $academic->save();
        $programme->save();

        return redirect(RouteServiceProvider::HOME);
    }
}
