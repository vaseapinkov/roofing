<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'firs_name',
        'last_name',
        'email',
        'phone',
        'subject',
        'message',
    ];
}
