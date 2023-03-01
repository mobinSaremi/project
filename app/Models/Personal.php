<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'fullname', 'avatar', 'explanation', 'status', 'post', 'twitter_link', 'facebook_link', 'instagram_link', 'linkedin_link'
    ];
}
