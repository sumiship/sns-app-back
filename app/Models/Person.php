<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = ['userID', 'name'];

    public static $rules = [
        'userID' => 'required',
        'name' => 'required',
    ];

    public function posts(){
        return $this->hasMany('App\Models\Post','person_id','userID');
    }

    public function likes(){
        return $this->hasMany('App\Models\Like');
    }
}
