<?php

class Crime extends \Eloquent {
	protected $fillable = [];

    public function crime()
    {
        return $this->hasMany('Report');
    }


}