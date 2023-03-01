<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table='products';
    protected $fillable=[
        'title','description','image','status','url','title_seo','description_seo','category_id','price','deleted_at','updated_at','created_at'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
