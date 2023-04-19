<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','body','file','notes'];
    public function website()
    {
        return $this->belongsTo(Website::class,'website_id');
    }
}
