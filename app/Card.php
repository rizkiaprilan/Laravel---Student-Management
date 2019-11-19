<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = ['id'];
    protected $fillable = ['name','student_id'];

    public  function  credit(){
        return $this->hasOne('App\Credit');  //one to one
    }
    public  function  student(){
        return $this->belongsTo('App\Student');  //one to many
    }
}
