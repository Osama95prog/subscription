<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{ 
    protected $fillable = ['email'];

    public function website(){
        return $this->belongsToMany(Website::class,'subscriber_website','subscriber_id','website_id');
    }
}

