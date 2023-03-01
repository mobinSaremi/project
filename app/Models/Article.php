<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'articles';
    protected $fillable = [
        'title', 'image', 'description', 'status','writer','title_seo','description_seo', 'article_category_id'
    ];
    public function childs()
    {
        return $this->hasMany(Article::class, 'article_category_id', 'id');
    }
    public function parent(){
        return $this->belongsTo(Article::class ,'article_category_id');
    }
}
