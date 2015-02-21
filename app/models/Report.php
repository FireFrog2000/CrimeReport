<?php

class Report extends \Eloquent {

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
	];

	// Don't forget to fill this array
	protected $fillable = [];

    public function crime()
    {
        return $this->belongsTo('Crime');
    }

    public function victim()
    {
        return $this->belongsTo('Victim');
    }

    public function location()
    {
        return $this->belongsTo('Location');
    }


}