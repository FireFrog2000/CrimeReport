<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    public static $auth_rules=[
                'email' =>  'required|email|unique:users',
                'firstname' => 'required|min:3',
                'lastname' => 'required | min:3',
                'password' => 'required | min:8 ',
                're-password' => 'required | same:password',
                'address' => 'required | min:5 ',
                'city' => 'required',
                'country'=> 'required',
                'nic' => 'required | min:13 | max:13',
                'phone' => 'required | max:13'



    ];

    protected $fillable = array('email','password','code');

    public function victim()
    {
        return $this->hasOne('Victim');

    }



}
