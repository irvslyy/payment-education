<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Firewall extends Model
{
    protected $table = 'firewall_logs';
    protected $fillable = [
        'ip',
        'level',
        'middleware',
        'user_id',
        'url',
        'referrer',
        'request',
        'created_at'
    ];
}
