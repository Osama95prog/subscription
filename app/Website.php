<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    protected $fillable = ['name','notes'];
    public function post()
    {
        return $this->hasMany(Post::class,'website_id');
    }
    public function subscriber(){
        return $this->belongsToMany(Subscriber::class,'subscriber_website','website_id','subscriber_id');
    }
}
