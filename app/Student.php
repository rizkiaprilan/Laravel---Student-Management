<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = ['id'];
    protected $fillable = ['name','address','majority_id'];

    public  function  club(){
        return $this->belongsToMany('App\Club');  //many to many
    }
    public  function  majority(){
        return $this->belongsTo('App\Majority');  //many to many
    }
    public  function  card(){
        return $this->hasOne('App\Card');  //many to many
    }
}
