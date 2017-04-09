<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artical;
use App\Comment;
use Illuminate\Support\Facades\Storage;

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
        $name=request('file_name');

        if($name){
    	Artical::create([
    		'title' => request('title'),
    		'body' => request('body'),
    		'file_name' => $name,
    		'user_id' => auth()->id()]);
            }
        else
    {
       Artical::create([
            'title' => request('title'),
            'body' => request('body'),
            'file_name' => '',
            'user_id' => auth()->id()]);
        
    }
        return "success";
    }
    public function upload_image()
    {

        $file=request()->file('file');
       $name="";
        if ($file) 
        {
        $path=$file->store('image');
        }
        $t=explode('/',$path);

        $name=$t[count($t)-1];

        return $name;
    }
    public function delete_photo()
    {
        $img=request('delPhoto');
         Storage::delete("image/".$img);
         return "success";
    }
     public function userProfil($id)
    {
        $ar=Artical::where('user_id',$id)->get();
        return view('user',compact('ar'));
    }
  
}
