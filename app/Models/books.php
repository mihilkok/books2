<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_id',
        'book_name',
        'pages',
    ];

    public function users(){
        return $this->hasMany('App\Models\User', 'id', 'author_id');
    }
}
