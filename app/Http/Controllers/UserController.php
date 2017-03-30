<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function __construct()
{
    $this->middleware('guest',['except'=>'destroy']);
}

    public function create()
    {
     return view('sessions.create');
     }
        
     public function store()
    
    {
    	$this->validate(request(),[
    		'login'=>'required',
    		'password'=>'required|confirmed',
    		'firstname' =>'required',

    		'lastname'=>'required',
    		'email'=>'required|email'
    		]);
    	$user = User::create(['login'=>request('login'),
            'password'=>bcrypt(request('password')),
            'firstName'=>request('firstname'),
            'lastName'=>request('lastname'),
            'email'=>request('email')]);
        auth()->login($user);
    	return redirect()->home();
    	
    }

    public function index()
    {
        return view('sessions.sign');
    }


     public function sign()
    {
        if (! auth()->attempt(request(['login','password'])))
         {
            return back()->withErrors([
            'message' => 'Please check your login and password']);
        }
           
            return redirect()->home();
        
    }
    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
  
}
