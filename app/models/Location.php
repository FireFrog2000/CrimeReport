<?php

class Location extends \Eloquent {
	protected $fillable = [];

    public function Reports()
    {
        return $this->hasMany('Report');
    }

}