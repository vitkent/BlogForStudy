<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostUserLiked extends Model
{
    use HasFactory;
    protected $table = 'post_user_likeds';
    protected $guarded = false;
}
