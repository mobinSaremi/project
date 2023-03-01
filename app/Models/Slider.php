<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table='sliders';
    protected $fillable=[
        'title','link','image','status','url','place','deleted_at','updated_at','created_at'
    ];
}
