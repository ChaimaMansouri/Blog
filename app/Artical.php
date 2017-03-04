<?php

namespace App;



class Artical extends Model
{

	public function comments()
	{
		return $this->hasMany(Comment::class);
	}
	public function approves()
	{
		return $this->hasMany(Approve::class);
	}
	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
