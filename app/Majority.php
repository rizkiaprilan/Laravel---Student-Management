<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Majority extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = ['id'];
    protected $fillable = ['faculty_id','name','description'];

    public  function  faculty(){
        return $this->belongsTo('App\Faculty');  //one to many
    }

    public  function  student(){
        return $this->hasOne('App\Student');  //one to many
    }
}
