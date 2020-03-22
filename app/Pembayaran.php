<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';
    protected $fillable = [
        'name',
        'email',
        'amount',
        'note',
        'status',
        'snap_token',
        'user_id'
    ];

    public function setPending()
    {
        $this->attributes['status'] = 'pending';
        self::save();
    }

    public function setSuccess()
    {
        $this->attributes['status'] = 'success';
        self::save();
    }

    public function setFailed()
    {
        $this->attributes['status'] = 'failed';
        self::save();
    }

    public function setExpired()
    {
        $this->attributes['status'] = 'expired';
        self::save();
    }
}




