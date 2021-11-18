<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    public function classes(){
        return $this->belongTo('App\Models\Classes');
    }
    public function countries(){
        return $this->belongTo('App\Models\Countries');
    }
}
