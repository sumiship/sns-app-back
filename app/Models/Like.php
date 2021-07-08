<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = ['person_id', 'post_id'];

    public static $rules = [
        'person_id' => 'required',
        'post_id' => 'required',
    ];
    
    public function person(){
        return $this->belongsTo(Person::class);
    }
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
