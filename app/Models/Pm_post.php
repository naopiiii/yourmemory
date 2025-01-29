<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pm_post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'img',
        'comment', // 追加
    ];
}
