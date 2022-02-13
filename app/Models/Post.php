<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    const PUBLIC = 1;
    const FRIENDS = 2;
    const SPECEFIC_FRIENDS = 3;
    const ONLY_ME = 4;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
