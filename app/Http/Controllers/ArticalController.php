<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artical;
use App\Comment;


class ArticalController extends Controller
{
    public function show()
    {
    	$a=Artical::latest()->get();
      
  		
    	 return view('welcome',compact('a'));
    }
  

}
