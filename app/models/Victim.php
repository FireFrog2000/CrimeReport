<?php

class Victim extends \Eloquent {
	protected $fillable = ['firstname','lastname','nic','address','city','country','phone'];

    public function Report()
    {
        return $this->hasOne('Report');
    }

    public function user()
    {
        return $this->belongsTo('User');

    }


}