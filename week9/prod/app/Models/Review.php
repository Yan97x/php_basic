<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['userName','productId'];

    function users(){
        return $this->belongsTo('App\Models\User');
    }
    function products(){
        return $this->belongsTo('App\Models\Product');
    }
}
