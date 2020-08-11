<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    //
    public $timestamps = false;
    protected $table="restaurants";
    protected $fillable=['name','address','contact','owner','image'];
}
