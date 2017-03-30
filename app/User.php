<?php

 
 namespace App;
 
use Illuminate\Notifications\Notifiable;
 use Illuminate\Foundation\Auth\User as Authenticatable;
 
 class User extends Authenticatable
 {
   use Notifiable;

     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
     protected $guarded = [];
     /**
      * The attributes that should be hidden for arrays.
      *
      * @var array
      */
     protected $hidden = [
         'password', 'remember_token',
     ];



 
    public function articals()
	{
		return $this->hasMany(Artical::class);
	}
	 public function comments()
	{
		return $this->hasMany(Comment::class);
	}
	

	public function getLogin($id)
	{
		$user=User::find($id);
		return $user->login;
	}
}
