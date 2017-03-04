<?php

namespace App;

class User extends Model
{
    public function articals()
	{
		return $this->hasMany(Artical::class);
	}

	public function getLogin($id)
	{
		$user=User::find($id);
		return $user->login;
	}
}
