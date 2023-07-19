<?php

namespace App\Models;
use App\Models\User;
use App\Models\Adoptions;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    protected $fillable = ['name','dateofbirth', 'description'];

    //One animal can belong to many adoption requests
    public function adoptions(){
        return $this->belongsToMany('App\Models\Adoptions');
    }
}
