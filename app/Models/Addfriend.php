<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addfriend extends Model
{
    use HasFactory;

    protected $table = 'addfriends';
    public function user1()
    {
        return $this->belongsTo(User::class, 'user_id_send', 'id');
    }
    public function user2()
    {
        return $this->belongsTo(User::class, 'user_id_receive', 'id');
    }
}
