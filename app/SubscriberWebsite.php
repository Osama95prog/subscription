<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubscriberWebsite extends Model
{
    protected $table = "subscriber_website" ;
    protected $fillable = ['subscriber_id','website_id'];

}
