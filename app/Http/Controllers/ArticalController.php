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
    public function store()
    {
       
    	$this->validate(request(),['body'=>'required']);
    	Artical::create([
    		'title' => request('title'),
    		'body' => request('body'),
    		'file_name' => request('file_name'),
    		'user_id' => auth()->id()]);
        return "success";

    }
    public function upload_image()
    {

        $file=request()->file('file');
       $name="";
        if ($file) 
        {
        $path=$file->store('public/image');
        }
        $t=explode('/',$path);

        $name=$t[count($t)-1];

        return $name;
    }
  
}
