<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $fillable = [
        'page_name',
        'page_title',
        'page_slug',
        'content_one',
        'content_two',
        'content_three',
        'status',
    ];
}
