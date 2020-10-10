<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    use HasFactory;

    protected $fillable = [
        'author_name',
        'author_s_name',
        'sum_books',
    ];
}
