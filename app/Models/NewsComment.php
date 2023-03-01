<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class NewsComment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable=[
        'name','comment','email','news_id','status'
    ];
}
