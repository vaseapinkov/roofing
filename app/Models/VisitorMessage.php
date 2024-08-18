<?php

namespace App\Models;

use App\Mail\VisitorMessageCreatedMail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class VisitorMessage extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'subject',
        'message',
    ];

    protected static function boot(): void
    {
        parent::boot();

        static::created(function ($visitorMessage) {
            Mail::to(config('mail.to'))->send(new VisitorMessageCreatedMail($visitorMessage));
        });
    }
}
