<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Showcase extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'users_id','users_id','file_name', 'activity_name', 'activity_title', 'activity_description'
    ];

    public function users(){
    	return $this->belongsTo('App\User', 'id');
    }
}
