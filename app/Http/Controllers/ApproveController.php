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
}
