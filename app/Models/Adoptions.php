<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Animal;

class Adoptions extends Model
{
    use HasFactory;
    protected $fillable = ['reason'];

    //One adoption request can be made by many users
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
    //One adoption request can belong to just one animal
    public function animals(){
        return $this->belongsTo('App\Models\Animal');
    }
    
}
