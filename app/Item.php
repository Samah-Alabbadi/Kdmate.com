<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{


    protected $table= "items";
    protected $fillable = ['name','description','price','image','count','user_id'];
    public $timestamps = false;


    public function user(){
        return $this->belongsTo('App\User','user_id');
    }



}
