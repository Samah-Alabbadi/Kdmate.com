<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table="profiles";

    protected $fillable=['description','location','number','image','complete_profile','user_id','created_at','updated_at'];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
