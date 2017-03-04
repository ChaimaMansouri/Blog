<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class CommentController extends Controller
{
	 public function index($id)
   {
   	$comment=Comment::get()->where('artical_id',$id);
   	return view('comment',compact('comment'));
   }

	public function addComm()
	{
		$this->validate(request(),['body'=>'required'
    		]);
		//Comment::create(request(['body',]));
	}
}
