<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded = ['id'];
    protected $fillable = ['name','description'];

    public  function  majority(){
        return $this->hasOne('App\Majority');  //one to many
    }
}
