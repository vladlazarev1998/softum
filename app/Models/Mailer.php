<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Mailer extends Model
{
    use HasFactory;

    const UPDATED_AT = null;

    protected $fillable = ['from', 'to', 'cc', 'subject', 'type', 'body'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($mailer) {
            $mailer->uuid = Str::uuid();
            $mailer->ip = request()->ip();
            $mailer->user_agent = request()->server('HTTP_USER_AGENT');
        });
    }
}
