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
}
