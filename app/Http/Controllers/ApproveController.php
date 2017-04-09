<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Approve;

class ApproveController extends Controller
{
    public function index($id)
   {
   	$approve=Approve::get()->where('artical_id',$id);
   	return view('approve',compact('approve'));
   }
   public function store()
   {
      
    $app=Approve::where(['user_id'=>auth()->id(),'artical_id'=>request('id')])->get()->first();
    if($app)
    {
     $app->delete();
    }
    else
      {
    Approve::create([
     'user_id' => auth()->id(),
     'artical_id' =>request('id')
     ]);
      }
     $approve=Approve::where('artical_id',request('id'))->with('user')->get();
   $json = $approve->toJson();
      return response()->json($json);
  
   }
}
