<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class CommentController extends Controller
{
	public function __construct()
	{

		$this->middleware('auth')->except(['index']);
	}
	 public function index($id)
	
   {
   	$comment=Comment::get()->where('artical_id',$id);
   	return view('comment',compact('comment'));
   }

	public function addComm($id)
	{
		$this->validate(request(),['body'=>'required'
    		]);
		Comment::create([
			'body' => request('body'),
			'user_id' => auth()->id(),
			'artical_id' => $id]);
		return "done";
	}
	public function destroy()
	{
		 $c=Comment::find(request('id'));
		 $c->delete();
		 return "success";
	}
	public function update()
	{
		Comment::find(request('id'))
				->update(['body'=>request('body')]);
		return "success";
	}
}
