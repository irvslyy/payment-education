<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Settingpembayaran extends Model
{
    protected $table = 'settingpembayaran';
    protected $fillable = [
        'kelas',
        'jumlah',
    ];
}
