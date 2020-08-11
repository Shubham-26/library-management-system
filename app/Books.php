<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    //
    public $timestamps = false;
    protected $table="books";
    protected $fillable=['title','description','price','user','file'];
}
