<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['person_id', 'content'];

    public static $rules = [
        'person_id' => 'required',
        'content' => 'required',
    ];

    // public function getData(){
    //     return $this->id . ':' . $this->person_id. '(' .$this->person->name . ')';
    // }

    public function person(){
        return $this->belongsTo(Person::class,'person_id','userID');
    }

    public function likes(){
        return $this->hasMany('App\Models\Like');
    }
}
