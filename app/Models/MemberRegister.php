<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberRegister extends Model
{
    use HasFactory;
    protected $table = "members_list";

    protected $fillable = [
        'name',
        'fathers_name',
        'mothers_name',
        'address',
        'qualification',
        'phone_number',
        'email',
        'msg'
    ];
}
