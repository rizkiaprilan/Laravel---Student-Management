<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Club extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = ['id'];
    protected $fillable = ['name','description'];

    public  function  student(){
        return $this->belongsToMany('App\Student');  //many to many
    }
}
