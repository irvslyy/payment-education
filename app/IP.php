<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IP extends Model
{
    protected $table = 'firewall_ips';
    protected $filable = [
        'ip',
        'log_id',
        'blocked',
        'created_at'
    ];
}
