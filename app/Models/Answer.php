<?php namespace Models\App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table = 'answers';

    public function question() {
    	return $this->belongsTo('App\Models\Question');
    }

    public function student() {
    	return $this->belongsTo('App\Models\Student');
    }

    public function option() {
    	return $this->belongsTo('App\Models\Option');
    }
}