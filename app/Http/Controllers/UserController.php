<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
     public function store()
    {
    	$this->validate(request(),[
    		'login'=>'required',
    		'password'=>'required',
    		'firstname' =>'required',

    		'lastname'=>'required',
    		'email'=>'required|email'
    		]);
    	User::create(request(['login','password','firstname','lastname','email']));
        request();
    	return redirect('/');
    	
    }
    public function sign()
    {
        return view('sign');
    }
  
}
