<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class setting extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'settings';
    protected $fillable = [
        'logo', 'title_seo', 'description_seo', 'email', 'number_phone', 'url', 'about_us_title', 'about_us_description', 'image', 'blog_title', 'blog_description', 'personal_title', 'personal_description', 'product_title', 'product_description', 'suggestion_title', 'suggestion_description', 'twitter_link', 'facebook_link', 'linkedin_link', 'instagram_link'
    ];
}
