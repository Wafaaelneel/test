<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Block extends Model
{
    use HasFactory;
    protected $table = 'blocks';
    public function block1()
    {
        return $this->belongsTo(User::class);
    }
    public function block2()
    {
        return $this->belongsTo(User::class);
    }
}
