<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Artical;
class UserController extends Controller
{
    public function __construct()
{
$this->middleware('auth')->except(['create','store','index','sign']);
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
    {if(request('remember'))
    {
        if (!auth()->attempt(request(['login','password']),'true'))
         {
            return back()->withErrors([
            'message' => 'Please check your login and password']);
        }
          }
          else{
            if (!auth()->attempt(request(['login','password'])))
         {
            return back()->withErrors([
            'message' => 'Please check your login and password']);
        }
          } 
            return redirect()->home();
        
    }

    public function profil()
    {
        $ar=Artical::where('user_id',auth()->id())->latest()->get();
        return view('sessions.profil',compact('ar'));
    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }
   
  
}
