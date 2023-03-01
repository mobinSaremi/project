<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suggestion extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'suggestions';
    protected $fillable = [
        'name', 'image', 'description', 'status', 'post', 'deleted_at', 'updated_at', 'created_at'
    ];
}
