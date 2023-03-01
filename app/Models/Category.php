<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='categories';
    protected $fillable=[
        'title','description','status','h1','title_seo','description_seo', 'url'
    ];
    
    public function childs(){
        return $this->hasMany(Category::class , 'parent_id','id');
    }
    public function parent(){
        return $this->belongsTo(Category::class ,'parent_id')->with('childs');
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
}
